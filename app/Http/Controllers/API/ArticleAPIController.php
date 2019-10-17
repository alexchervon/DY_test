<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\API\BaseAPIRequest;
use App\Http\Requests\API\CreateArticleAPIRequest;
use App\Http\Requests\API\CreateFileAPIRequest;
use App\Http\Requests\API\CreateProjectUserAPIRequest;
use App\Models\Project;
use App\Models\ProjectArticle;
use App\Models\ProjectHasContent;
use App\Models\ProjectUser;
use App\Models\Store;
use App\Repositories\BasketRepository;
use Illuminate\Http\Request;

use Response;

/**
 * Class ProjectAPIController
 * @package App\Http\Controllers\API
 */
class ArticleAPIController extends AppBaseController
{

    /**
     * @param $articleId
     * @param CreateFileAPIRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeFile($articleId, CreateFileAPIRequest $request)
    {
        $article = ProjectArticle::find($articleId);
        $article->addMedia($request->file('file'))->toMediaCollection('files');

        return $this->responseOk();
    }

}