<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectArticle extends Model
{
    public $table = 'project_article';

    public $timestamps = false;

    public $fillable = [
        'title',
        'content',
    ];

    public function project()
    {
        return $this->morphMany(ProjectHasContent::class, 'morph');
    }
}
