<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $table = 'project';

    public $timestamps = false;

    public $fillable = [
        'title',
        'description',
    ];

    public function articles()
    {
        return $this->morphedByMany(ProjectArticle::class, 'project','project_has_content','project_id','entity_id');
    }

    public function users()
    {
        return $this->morphedByMany(ProjectUser::class, 'project','project_has_content','project_id','entity_id');
    }
}
