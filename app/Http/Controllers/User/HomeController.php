<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Company;
use App\Review;
use App\Service;
use App\SavedSearch;


class HomeController extends Controller
{
    //
    public function index()
    {
       
        return view('user.index');
    }



    function privacy()
    {
        return view('user.privacy');
    }

    function contact()
    {
        return view('user.contact');
    }

    function about()
    {
        return view('user.about');
    }

    function personalsafety()
    {
        return view('user.personalsafety');
    }

    function disclaimer()
    {
        return view('user.disclaimer');
    }

    function termsofUse()
    {
        return view('user.termsAndConditions');
    }

    function faq()
    {
        return view('user.faq');
    }

}
