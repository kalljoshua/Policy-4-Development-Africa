@extends('...layouts.user_layout')
@section('title')
  <title>Policy for Development - {{$posts->title}}</title>
@endsection
@section('content')
<!-- Inner Banner Wrapper Start -->
<div class="inner-banner">
  <div class="container">
    <div class="col-sm-12">
      <h2>{{$posts->title}}</h2>
    </div>
    <div class="col-sm-12 inner-breadcrumb">
      <ul>
        <li><a href="/">Home</a></li>
        <li>News</li>
        <li>{{$posts->title}}</li>
      </ul>
    </div>
  </div>
</div>
<!-- Inner Banner Wrapper End -->
<section class="inner-wrapper">
  <div class="container">
    <div class="row">
      <div class="inner-wrapper-main news news-post">
        <div class="col-sm-7 col-md-8">
          <div class="news-info">
                 <h3>{{$posts->title}}</h3>
              <div class="news-tags">
                <ul class="time">
                  <li><i class="fa fa-user" aria-hidden="true"></i> by Admin</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i> {{$posts->created_at->diffForHumans()}}</li>
                </ul>
                <ul class="tags pull-right">
                  <li><a href="javascript:void(0)">Education</a></li>
                  <li><a href="javascript:void(0)">News</a></li>
                  <li><a href="javascript:void(0)">University</a></li>
                </ul>
              </div>
            <div class="news-thumb"> <img src="/images/blog/user_810x400/{{$posts->image}}" alt="News Image"> </div>
            <div class="news-cnt">       
              <p>{!! $posts->body!!} </p>
            </div>
          </div>
              <div class="comments">
            <h2>Comments ({{$posts->comments->count()}})</h2>
            @foreach($posts->comments as $comment)
            <div class="row">
              <div class="col-sm-2"> 
              	<img src="/images/users/home_71x71/{{$comment->user->image}}" alt="Testimonials"> 
              </div>
              <div class="col-sm-10 meta-info">
                <h3><a href="javascript:void(0)">{{$comment->user->name}}</a></h3>
                <div class="meta"> {{$comment->created_at->diffForHumans()}}</div>
                <p>{{ $comment->body }}</p>
              </div>
            </div>
          </div>
          @endforeach
          <h2>Leave a Comment </h2>
          @if(Auth::guard('user')->check())
          	<form method="post" action="{{route('user.comment.submit')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="on_post" value="{{ $posts->id }}">
                <input type="hidden" name="slug" value="{{ $posts->slug }}">
                <div class="form-group">
	              <textarea placeholder="Content" name="bodyy" rows="3" class="form-control form-item"></textarea>
	            </div>
                 <button type="submit" class="btn btn-1">Send Message</button>
            </form>
          @else
            <a href="{{route('home')}}">
            	<p style="color: red;">Login to comment on this Post</p>
            </a>
          @endif     
          
          
        </div>
        @include('user.blog_right')
      </div>
    </div>
  </div>
</section>
@endsection