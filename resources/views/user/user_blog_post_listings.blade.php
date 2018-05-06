
@extends('...layouts.user_layout')
@section('title')
  <title>Policy for Development - News</title>
@endsection
@section('content')
<!-- Inner Banner Wrapper Start -->
<div class="inner-banner">
  <div class="container">
    <div class="col-sm-12">
      <h2>News</h2>
    </div>
    <div class="col-sm-12 inner-breadcrumb">
      <ul>
        <li><a href="/">Home</a></li>
        <li>News</li>
      </ul>
    </div>
  </div>
</div>
<!-- Inner Banner Wrapper End -->
<section class="inner-wrapper">
  <div class="container">
    <div class="row">
      <div class="inner-wrapper-main news grid-news">
        <div class="col-sm-7 col-md-8">
          <div class="row">
            
           @foreach($posts as $post)
           <div class="col-sm-6">
              <div class="news-info">
                <div class="news-thumb"> 
                	<img src="/images/blog/user_810x400/{{$post->image}}" alt="News Image"> </div>
                <div class="news-cnt">
                  <h3> <a href="{{route('user.show.posts',['slug'=>$post->slug])}}" class="tittle">
                    {{$post->title}} </a></h3>
                  <div class="news-tags">
                    <ul class="time">
                      <li><i class="fa fa-user" aria-hidden="true"></i> by Admin</li>
                      <li><i class="fa fa-clock-o" aria-hidden="true"></i> {{$post->created_at->diffForHumans()}}</li>
                    </ul>
                    <ul class="tags">
                      <li><a href="javascript:void(0)">Education</a></li>
                      <li><a href="javascript:void(0)">News</a></li>
                      <li><a href="javascript:void(0)">University</a></li>
                    </ul>
                  </div>
                  <p>{!! str_limit($post->body, $limit = 120, $end = '[...]') !!}</p>
                </div>
              </div>
          </div>
          @endforeach
              
            
            
          </div>
          <div class="news-pagination">
            <ul class="pagination">
              <?php echo $posts->render(); ?>
            </ul>
          </div>
        </div>
        @include('user.blog_right')
      </div>
    </div>
  </div>
</section>
@endsection