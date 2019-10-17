<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    public $table = 'project_user';

    public $timestamps = false;

    public $fillable = [
        'headline',
        'first_name',
    ];

    public function project()
    {
        return $this->morphMany(ProjectHasContent::class, 'morph');
    }
}
