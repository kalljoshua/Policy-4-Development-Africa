<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Policy;
use App\PolicyCategory;

class CategoriesController extends Controller
{
    function getCategory($id)
    {
    	$categorised = Policy::where('policy_category_id',$id)->paginate(9);
        $category = PolicyCategory::find($id);
    	return view('user.categorised')
    	->with('categorised',$categorised)
        ->with('category',$category);
    }


    function policy_details($id)
    {
    	$policy = Policy::find($id);
    	return view('user.policy_details')
    	->with('policy',$policy);
    }
}
