<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Gallery extends Model
{
    protected $casts = [
        'classes',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
