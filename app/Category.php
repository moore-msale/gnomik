<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
