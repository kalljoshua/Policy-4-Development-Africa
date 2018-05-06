<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function resource_category()
    {
        return $this->belongsTo('App\ResourceCategory');
    }
}
