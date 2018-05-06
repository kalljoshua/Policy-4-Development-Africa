<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Policy;


class AdminpoliciesController extends Controller
{
    function newPolicy()
    {
        return view('admin.new_policy_form');
    }


    function showAll()
    {
        $p4d = Policy::all();
        return view("admin.display_policies")
        ->with('policies', $p4d);
    }

    function pending()
    {
      $policies = Policy::where('active',0)->get();
      return view('admin.pending_policies')
      ->with('policies',$policies);
    }


    public function getSubCategories(Request $request, $id){
        if($request->ajax()){

            $sector = SubCategory::where('policy_category_id',$id)->get();
            return $sector;
            return Response::json( $sector );;

        }
    }


    function submitPolicy(Request $request)
    {
        ini_set('memory_limit', '256M');
        ini_set('max_execution_time', 600);

      //return $request->all();

      $d4d = new Policy();
      if($request->input('country_code')) $d4d->country_code = $request->input('country_code');
      if($request->input('policy_category_id')) $d4d->policy_category_id = $request->input('policy_category_id');
      if($request->input('subcategory_id')) $d4d->sub_category_id = $request->input('subcategory_id');
      if($request->input('type_id')) $d4d->type_id = $request->input('type_id');
      if($request->input('country')) $d4d->country = $request->input('country');
      if($request->input('policy_title')) $d4d->policy_title = $request->input('policy_title');      
      if($request->input('description')) $d4d->description = $request->input('description');
      if(!empty($request->input('policy_title'))){
        $file = $request->file('upload_file');
        $uniqueFileName = str_replace(' ', '_',$file->getClientOriginalName());
        $d4d->file = $uniqueFileName;

        if($d4d->save())
        {
            $destinationPath = public_path() . '/files/';

            $file->move($destinationPath,str_replace(' ', '_',$file->getClientOriginalName()));

            flash('Policy has successfully been added.')->success();
            return redirect(route('admin.all.policies'));
        }else{
            flash('Failed to submit Policy. Please try again')->error();
            return redirect(route('admin.new.policy'))->withInput($request->input());
        }
      }else {
        flash('Failed to submit Policy. No File found')->error();
        return redirect(route('admin.new.policy'))->withInput($request->input());
      }
      
      
    

      
    }


    function approveService($id)
    {

        $policy = Policy::find($id);

        $policy->active = 1;

        if($policy->save()){
            flash('Policy approved successfully')->success();
            return redirect()->route('admin.pending.policies');
        }else{
            flash('Failed to approve Policy')->error();
            return redirect()->route('admin.pending.policies');
        }
    }
}
