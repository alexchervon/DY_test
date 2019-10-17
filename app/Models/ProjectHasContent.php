<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectHasContent extends Model
{
    public $table = 'project_has_content';
    public $timestamps = false;
    public $fillable = [
        'project_id',
        'parent_id',
        'morph'
    ];

    public function content()
    {
        return $this->morphTo();
    }

    public function setProject(Project $project)
    {
        $this->project_id = $project->getId();
    }
}
