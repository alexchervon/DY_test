<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class ProjectUser extends Model implements HasMedia
{
    use HasMediaTrait;

    public $table = 'project_user';

    public $timestamps = false;

    public $fillable = [
        'headline',
        'first_name',
    ];

}
