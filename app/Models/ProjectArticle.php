<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class ProjectArticle extends Model implements HasMedia
{
    use HasMediaTrait;

    public $table = 'project_article';

    public $timestamps = false;

    public $fillable = [
        'title',
        'content',
    ];
}
