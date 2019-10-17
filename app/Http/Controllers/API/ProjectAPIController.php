<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\API\BaseAPIRequest;
use App\Http\Requests\API\CreateArticleAPIRequest;
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
class ProjectAPIController extends AppBaseController
{
    public function storeArticle($projectId,CreateArticleAPIRequest $request)
    {
        $title = $request->get('title');
        $content = $request->get('content');

        $project = Project::find($projectId);

        $album = ProjectArticle::create(
            [
                'title' => $title,
                'content' => $content
            ]
        );

        $content = new ProjectHasContent();
        $content->setProject($project);

        $album->project()->save($content);

        return $this->responseOk();
    }
}
