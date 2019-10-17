<?php

namespace App\Transformers;

use App\Models\Project;
use League\Fractal\TransformerAbstract;

class ProjectTransformer extends TransformerAbstract
{

    protected $defaultIncludes = ['articles','users'];

    public function transform(Project $project)
    {
        return [
            'id' => $project->id,
            'title'  => $project->title,
            'description'  => $project->description,
            'articles' => [],
            'users' => []
        ];
    }

    public function includeArticles(Project $project)
    {
        if ($articles = $project->articles) {
            return $this->collection($articles,new ArticleTransformer());
        }
    }

    public function includeUsers(Project $project)
    {
        if ($users = $project->users) {
            return $this->collection($users,new UserTransformer());
        }
    }
}
