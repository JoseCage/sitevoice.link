<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Article extends Model
{
    use Uuids;

    protected $fillable = [
        'title', 'url', 'site_id', 'uuid'
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
