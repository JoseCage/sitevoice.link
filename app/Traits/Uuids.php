<?php

namespace App\Traits;

use Illuminate\Support\Str;

/**
 * Auto generate a uuid to the given model.
 *
*/
trait Uuids
{
    protected static function boot()
    {
        parent::boot();

        static::creating(
            function ($model) {
                $model->uuid = Str::uuid()->toString();
            }
        );
    }
}
