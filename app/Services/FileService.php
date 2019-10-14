<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\FileRepository;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class FileService
{
    const DEFAULT_TYPE = 'files';

    private $fileRepository;

    public function __construct(FileRepository $fileRepository)
    {
        $this->fileRepository = $fileRepository;
    }

    /**
     * @param Request $request
     * @param string $type
     * @return array|bool
     */
    public function saveFiles(Request $request, $type = self::DEFAULT_TYPE)
    {
        $dirName = md5(date('Y_m_d'));

        $filesIds = [];
        $files = $request->file($type);

        // if it one file
        if (!is_array($files) && isset($files)) {
            $files = [$files];
        } elseif (!isset($files)) {
            return false;
        }
        $filesIds = [];
        foreach ($files as $key => $file) {

            $path = $file->store($dirName,
                [
                    'disk' => 'public'
                ]
            );

            if ($path) {
                $model = $this->fileRepository->create([
                    'name' => basename($path),
                    'dir' => $path,
                    'origin_name' => $file->getClientOriginalName()
                ]);
                $filesIds[] = $model->id;
            }
        }

        return $filesIds;
    }

    /**
     * Upload file by url
     * @param $url
     */
    public function uploadByUrl($url, $resize = false)
    {

        $file = file_get_contents($url);
        $fileInfo = pathinfo($url);
        $hashName = md5($fileInfo['basename']);
        $fileMime = $hashName . '.' . $fileInfo['extension'];

        $dirName = md5(date('Y_m_d'));
        $filePath = $dirName . '/' . $fileMime;

        if ($resize) {
            $image = Image::make($file);

            $image->fit(500, 300);

        }

        Storage::disk('public')->put($filePath, ($resize) ? $image->encode() : $file);

        $file = $this->fileRepository->create([
            'name' => $hashName,
            'dir' => $filePath,
            'origin_name' => $fileInfo['basename']
        ]);

        return $file->id;
    }
}
