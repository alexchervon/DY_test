<?php

namespace App\Transformers;

use App\Models\Project;
use App\Models\ProjectArticle;
use League\Fractal\TransformerAbstract;

class ArticleTransformer extends TransformerAbstract
{

    protected $defaultIncludes = ['files'];

    public function transform(ProjectArticle $article)
    {
        return [
            'id' => $article->id,
            'title'  => $article->title,
            'files' => [],
        ];
    }

    public function includeFiles(ProjectArticle $article)
    {
        if ($files = $article->getMedia('files')) {
            return $this->collection($files,new MediaTransformer());
        }

    }
}
