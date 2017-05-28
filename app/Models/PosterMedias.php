<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PosterMedias extends Model
{
    protected $fillable = ['poster_id', 'openid', 'media_id', 'url'];

    public function posterMedias()
    {
        return $this->hasMany('App\Models\PosterImage');
    }
}
