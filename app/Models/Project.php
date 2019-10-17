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

    public function content()
    {
        return $this->morphMany(ProjectHasContent::class, 'morph');
    }

    public function article()
    {
        return $this->morphMany(ProjectArticle::class, 'morph');
    }

    public function getId()
    {
        return $this->id;
    }
}
