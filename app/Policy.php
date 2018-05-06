<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    public function policy_category()
    {
        return $this->belongsTo('App\PolicyCategory');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\SubCategory');
    }
}
