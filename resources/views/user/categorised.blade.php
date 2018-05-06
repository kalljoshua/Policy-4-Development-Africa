@extends('...layouts.user_layout')
@section('title')
  <title>Policy for Development - Categorised</title>
@endsection
@section('content')
<!-- Inner Banner Wrapper Start -->
<div class="inner-banner">
  <div class="container">
    <div class="col-sm-12">
      <h2>{{$category->name}}</h2>
    </div>
    <div class="col-sm-12 inner-breadcrumb">
      <ul>
        <li><a href="/">Home</a></li>
        <li>Categorised</li>
        <li>{{$category->name}}</li>
      </ul>
    </div>
  </div>
</div>
<!-- Inner Banner Wrapper End -->
<section class="inner-wrapper">
  <div class="container">
    <div class="row">
      <div class="inner-wrapper-main">
        <div class="col-sm-12">
        <div class="row">  
        @foreach($categorised as $category)     
            <div class="col-sm-4"><div class="courses new">
                <div class="course-thumb"> </div>
                <div class="course-cnt">
                  <a href="{{route('policies.details',['policy_id' => $category->id])}}">
                  <h3>{{$category->policy_title}}</h3>
                  <ul class="area-period">
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{$category->country}}</li>
                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> {{$category->created_at->diffForHumans()}}</li>
                  </ul>
                  <p>{!!str_limit($category->description, $limit = 120, $end = '[...]')!!}</p>
                  <ul class="price-and-seats">
                    <li><strong>$160</strong></li>
                    <li class="pull-right"><i class="fa fa-tasks" aria-hidden="true"></i> 18 Seats</li>
                  </ul>
                </a>
                </div>
              </div>
            </div>       
         @endforeach
         </div>
          
          <div class="course-pagination">
            <ul class="pagination">
                {{$categorised->render()}}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection