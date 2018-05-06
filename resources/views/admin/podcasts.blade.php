@extends('layouts.adminLayout')
@section('title')
    <title>P4D Admin : All-Podcasts</title>
@endsection
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Podcasts
      <small>table</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Dashboard</a></li>
      <li class="active">All Podcasts</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    @include('flash::message')
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">All available Podcasts</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Duration</th>
                  <th>Speaker(s)</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($podcasts as $podcast)
                <tr>
                  <td><span class="label label-info">{{$podcast->created_at->format('M-d-Y')}}</span></td>
                  <td>
                    {{$podcast->title}}
                  </td>
                  <td>{{$podcast->duration}}</td>
                  <td>{{$podcast->speaker}}</td>
                  <td class="text-center">
                      <a href="{{route('admin.podcast.edit',['id'=>$podcast->id])}}"
                         class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top"
                         title="Edit"><i class="fa fa-pencil"></i></a>
                      <a href="{{route('admin.podcast.delete',['id'=>$podcast->id])}}"
                         class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top"
                         title="Delete"><i
                                  class="fa fa-times"></i></a>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Duration</th>
                  <th>Speaker(s)</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
