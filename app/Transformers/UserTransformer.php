<?php

namespace App\Transformers;

use App\Models\Project;
use App\Models\ProjectArticle;
use App\Models\ProjectUser;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{

    protected $defaultIncludes = ['files'];

    public function transform(ProjectUser $user)
    {
        return [
            'id' => $user->id,
            'headline' => $user->headline,
            'first_name' => $user->first_name,
            'files' => [],
        ];
    }

    public function includeFiles(ProjectUser $user)
    {
        if ($files = $user->getMedia('files')) {
            return $this->collection($files,new MediaTransformer());
        }
    }
}
