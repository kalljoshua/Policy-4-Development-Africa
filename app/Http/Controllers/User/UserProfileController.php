<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Input, Redirect;
use App\User;

class UserProfileController extends Controller
{
    use AuthenticatesUsers;

    function showUserProfile(){

        $auth_user_id = Auth::guard('user')->id();

        $user = User::find($auth_user_id);
        return view('user.profile')
        ->with('user',$user);
    }


}
