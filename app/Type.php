<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function policies()
    {
        return $this->hasMany('App\Policy');
    }
}
