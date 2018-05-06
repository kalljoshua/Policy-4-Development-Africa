@extends('layouts.adminLayout')
@section('title')
    <title>Policy </title>
@endsection
@section('content')
<link rel="stylesheet" href="/css/wizard.css" type="text/css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Services
      <small>table</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Dashboard</a></li>
      <li class="active">Policy</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    @include('flash::message')

<div class="container row">
		<section>
        <div class="wizard col-md-11">
            
            <div class="grid-form1">
            <form action="{{route('admin.submit.policy')}}"
						method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
                <div class="tab-content">
                    <div class="tab-pane active col-md-12" role="tabpanel" id="step1">
                        <h2>Upload Policy</h2>
													
						<div class="form-group col-md-12">
							<label for="exampleInputPassword1">Policy Title</label>
							<input type="text" class="form-control" name="policy_title" placeholder="Policy Title">
						</div>
						<div class="form-group col-md-12">
							<label for="exampleInputPassword1">Policy Category</label>
							<select name="policy_category_id" id="property-type" type="text"  require>
                                <option value="">Select Category</option>
                                @foreach(App\PolicyCategory::all() as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
						</div>
            <div class="form-group col-md-12">
              <label for="exampleInputPassword1">Sub-Category</label>
              <select name="subcategory_id" id="subcategory_id" type="text"  require>
                                <option value="">Select Sub-Category</option>
                                @foreach(App\SubCategory::all() as $sub_category)
                                <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                @endforeach
                            </select>
            </div>
            <div class="form-group col-md-12">
              <label for="exampleInputPassword1">Policy Type</label>
              <select name="type_id" type="text"  require>
                                <option value="">Select Type</option>
                                @foreach(App\Type::all() as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
            </div>
						<div class="form-group col-md-12">
							<label for="exampleInputPassword1">Country</label>
							<input type="text" list="countries" class="form-control" name="country" placeholder="Country">
						</div>
						<div class="form-group col-md-12">
							<label for="exampleInputPassword1">File</label>
							<input type="file"  name="upload_file">
						</div>
						<div class="form-group col-md-12">
							<label for="exampleInputPassword1">Policy Description</label>
							<textarea type="text" class="form-control" rows="10" 
							name="description" placeholder="Write an overview of the policy"></textarea>
						</div>
												
                        <ul class="list-inline pull-right">
                            <li><button type="submit" 
							class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    
                   
                    <div class="clearfix"></div>

                </div>
            </form>
          </div>
        </div>
    </section>
   </div>
   <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection