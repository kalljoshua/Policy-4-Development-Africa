<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
	public function policy_category()
    {
        return $this->belongsTo('App\PolicyCategory');
    }

    public function policies()
    {
        return $this->hasMany('App\Policy');
    }
}
