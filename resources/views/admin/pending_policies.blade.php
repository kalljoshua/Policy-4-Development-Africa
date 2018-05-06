@extends('layouts.adminLayout')
@section('title')
    <title>P4D Admin : Pending Policies</title>
@endsection
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Companies
                <small>table</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Pending Policies</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            @include('flash::message')
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">All Pending Policies</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>File</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($policies as $company)
                                    <tr>
                                        <td><span class="label label-info">
                                        {{$company->created_at->format('M-d-Y')}}</span></td>
                                        <td>
                                            {{ str_limit($company->policy_title, $limit = 40, $end = '...') }}
                                        </td>
                                        <td>{{$company->file}}</td>
                                        <td>{{$company->type->name}}</td>
                                        <td>
                                            <div class="timeline-footer">
                                                <a href="{{route('admin.policy.approve',['id'=>$company->id])}}" class="btn btn-info btn-xs">Approve</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>File</th>
                                    <th>Type</th>
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