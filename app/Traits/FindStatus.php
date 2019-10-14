<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 09.10.2019
 * Time: 17:00
 */

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait FindStatus
{
    public function getStatusId(Model $model,string $code)
    {
        return $model->whereCode($code)->first()->getId();
    }
}