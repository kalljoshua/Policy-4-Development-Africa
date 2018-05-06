<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Intervention\Image\Facades\Image;
use Input, Redirect;

class RegistrationController extends Controller
{
  public function registerUser( Request $request)
  {
    $user = new User();
      if($request->input('name')) $user->name = $request->input('name');
      if($request->input('phone')) $user->phone = $request->input('phone');
      if($request->input('country')) $user->country = $request->input('country');
      if($request->input('district')) $user->district = $request->input('district');
      if($request->input('district')) $user->district = $request->input('district');
      if($request->input('type')) $user->type = $request->input('type');
      if($request->input('email')) $user->email = $request->input('email');
      if($request->input('password')) $user->password = bcrypt($request->input('password'));
        /*
      if( $request->hasFile('photo') ) {
        $imageName = $request->input('first_name').'.'.$request->photo->extension();

        $imageName = str_replace(' ', '_', $imageName);
        if($path = $request->photo->move(public_path().'/cache_uploads/', $imageName)){
          $user->image = $imageName;*/


      $check_agent_email = User::where('email',$request->input('email'))->get();
        if(sizeof($check_agent_email)>0)
        {
          flash('Email Address has already been registered.')->error();
          return Redirect::back();
        }

        /*
      $check_agent_username = User::where('username',Input::get('username'))->get();
        if(sizeof($check_agent_username)>0)
        {
          flash('Username has already been registered. Please choose a different username')->warning();
          return Redirect::back();
        }*/


        if($user->save())
        {
          /*
          $path = public_path().'/cache_uploads/'.$imageName;

          $this->resizeProfileImage($path,$imageName);*/
          flash('Your account has successfully been created')->success();
          return redirect(route('home'));
        }
    /*
      }
    }else{
      flash('Please select an image')->danger();
      return redirect(route('user.create.service'));
    }*/

  }


  function resizeProfileImage($path,$image_name)
        {

            ini_set('memory_limit','256M');
            ini_set('max_execution_time', 600);

                $image_path = $path;

                Image::make($image_path)
                    ->resize(239, 239)
                    ->save(public_path().'/images/users/all_user_239x239/'.$image_name);

                Image::make($image_path)
                    ->resize(74, 74)
                    ->save(public_path().'/images/users/contact_user_74x74/'.$image_name);

                Image::make($image_path)
                    ->resize(71, 71)
                    ->save(public_path().'/images/users/home_71x71/'.$image_name);

                Image::make($image_path)
                    ->resize(330, 330)
                    ->save(public_path().'/images/users/profile_330x330/'.$image_name);
        }
}
