<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\API\BaseAPIRequest;
use App\Http\Requests\API\CreateArticleAPIRequest;
use App\Http\Requests\API\CreateProjectUserAPIRequest;
use App\Models\Project;
use App\Models\ProjectArticle;
use App\Models\ProjectHasContent;
use App\Models\ProjectUser;
use App\Models\Store;
use App\Repositories\BasketRepository;
use App\Transformers\APIFractalManager;
use App\Transformers\ProjectTransformer;
use Illuminate\Http\Request;

use Response;

/**
 * Class ProjectAPIController
 * @package App\Http\Controllers\API
 */
class ProjectAPIController extends AppBaseController
{

    public function show($projectId)
    {
        $project = Project::find($projectId);

        return $this->responseOk((new APIFractalManager())->item($project,new ProjectTransformer()));
    }

    /**
     * @param $projectId
     * @param CreateArticleAPIRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeArticle($projectId,CreateArticleAPIRequest $request)
    {
        $title = $request->get('title');
        $content = $request->get('content');

        $project = Project::find($projectId);

        $article = ProjectArticle::create(
            [
                'title' => $title,
                'content' => $content
            ]
        );


        $project->articles()->save($article);

        return $this->responseOk();
    }

    /**
     * @param $projectId
     * @param CreateProjectUserAPIRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeUser($projectId,CreateProjectUserAPIRequest $request)
    {
        $title = $request->get('headline');
        $name = $request->get('first_name');

        $project = Project::find($projectId);

        $user = ProjectUser::create(
            [
                'headline' => $title,
                'first_name' => $name
            ]
        );


        $project->users()->save($user);

        return $this->responseOk();
    }
}
