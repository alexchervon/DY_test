<?php

namespace App\Transformers;

use App\Models\Project;
use App\Models\ProjectArticle;
use League\Fractal\TransformerAbstract;
use Spatie\MediaLibrary\Models\Media;

class MediaTransformer extends TransformerAbstract
{

    public function transform(Media $media)
    {
        return [
            'name' => $media->file_name,
            'url' => $media->getUrl()
        ];
    }
}
