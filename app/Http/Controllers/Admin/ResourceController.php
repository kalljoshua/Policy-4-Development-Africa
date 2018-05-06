<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Resource;
use Input, Redirect;

class ResourceController extends Controller
{
    public function showAll()
    {
      # code...
      $resources = Resource::all();
      return view('admin.resources')
      ->with('types',$resources);
    }

    public function resourceForm()
    {
      return view('admin.new_resource');
    }

    public function submitResource()
    {
      $resource = new Resource();
      if(Input::has('name')) $resource->name = Input::get('name');
      if($resource->save())
      {
          flash('Resource has successfully been added.')->success();
          return redirect(route('admin.all.resources'));
      }

      //return "submition awaiting";
    }

    public function edit(Request $request,$id)
    {
      $resource = Resource::find($id);
      return view('admin.edit_resource')
      ->with('type',$resource);
    }

    public function editSubmit(Request $request)
    {
      if(Input::has('id')) $id = Input::get('id');
      $resource = Resource::find($id);
      if(Input::has('name')) $resource->name = Input::get('name');
      if($resource->save())
      {
          flash('Resource has successfully been Edited.')->success();
          return redirect(route('admin.all.resources'));
      }else{
        flash('Failed to edit Resource')->error();
        return redirect(route('admin.all.resources'));
      }
    }

    function delete(Request $request,$id){
      $resource = Resource::find($id);
      return view('admin.admin_resource_delete')
      ->with('type',$resource);
    }

    function destroy(Request $request){
      $id = $request->input('id');

      if(Resource::destroy($id)){
        flash('Resource deleted successfully')->success();
        return redirect()->route('admin.all.resources');
      }else{
        flash('Failed to delete Resource')->error();
        return redirect()->route('admin.all.resources');
      }
    }
}
