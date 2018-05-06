
@extends('...layouts.user_layout')
@section('title')
  <title>Policy for Development - Categorised</title>
@endsection
@section('content')


<style type="text/css">
  #overlay{
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    }
</style>
<!-- Inner Banner Wrapper Start -->
  <div class="inner-banner">
    <div class="container">
        <div class="col-sm-12">
          <h2>{{$policy->policy_title}}</h2>
        </div>
        <div class="col-sm-12 inner-breadcrumb">
          <ul>
            <li><a href="/">Home</a></li>
            <li>{{$policy->policy_title}}</li>
          </ul>
        </div>
    </div>
  </div>
<!-- Inner Banner Wrapper End -->
<section class="inner-wrapper">
  <div class="container">
    <div class="row">

        <h2><span>{{$policy->policy_title}}</span></h2>
      <div class="inner-wrapper-main">
       
        <div id="overlay" class="col-sm-8 offset-top-10 ">
          <div class="light-bg space-30 inset-left-30 inset-right-30">
            <object data="/files/{{$policy->file}}" type="application/pdf" width="100%" height="700px">
                <iframe id="fraDisabled" src="/files/{{$policy->file}}#page=2" style="border: none;" width="100%" height="100%">
                This browser does not support PDFs. Please download the PDF to view it: <a href="/files/{{$policy->file}}">Download PDF</a>
                </iframe>
            </object>
          </div>
        </div>
          <div class="col-sm-4 offset-top-10 ">
          <div class="light-bg space-30 inset-left-30 inset-right-30">
            <h3>{{$policy->policy_title}}</h3>
            <ul>
              <li>Posted: {{$policy->created_at->diffForHumans()}}</li>
              <li>Country: {{$policy->country}}</li>
              <li>Type: {{$policy->type->name}}</li>
            </ul>

            <h3>Overview</h3>
            <p>
              {{$policy->description}}
            </p>
            <br>
            <br>
            <button class="btn btn-success">              
            <a href="/files/{{$policy->file}}" style="color:white;">Download Policy</a>
            </button>
          </div>
        </div> 
      </div>
    </div>
    <div class="inner-wrapper-main news news-post">
    <div class="col-sm-7 col-md-8">
      <div class="comments">
            <h2>Comments</h2>
            @foreach(App\Review::where('policy_id', $policy->id)->orderBy('created_at','DESC')->take(4)->get() as $reviews)
            <div class="row">
              <div class="col-sm-2"> <a class="hover-img" href="javascript:void(0)"> <img src="i/images/users/contact_user_74x74/{{$reviews->user->image}}" alt="Testimonials"> </a> </div>
              <div class="col-sm-10 meta-info">
                <h3><a href="javascript:void(0)">{{$reviews->user->name}}</a></h3>
                <div class="meta"> {{$reviews->created_at->diffForHumans()}}</div>
                <p>{{$reviews->review}}</p>
              </div>
            </div>
            @endforeach
          </div>
          <h2>Leave a Review </h2>
          <formmethod="post" action="">
              {{ csrf_field() }}
            <input type="hidden" name="policy_id" value="{{ $policy->id }}">
            <div class="form-group">
              <div class="range-text">
                <label><span class="range-title">Rate:</span></label>
                  {{Form::hidden('rating', null, array('id'=>'ratings-hidden'))}}
                    <div class="text-left">
                      <div class="stars starrr"></div>
                        <a href="#" class="btn btn-danger btn-sm" id="close-review-box"
                          style="display:none; margin-right:10px;">
                          <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                    </div>
              </div>
            </div>
            <div class="form-group">
              <textarea placeholder="Content" name="review" rows="5" class="form-control form-item"></textarea>
            </div>
            <button class="btn btn-1" type="submit">Submit</button>
          </form>
          
    </div>
  </div>
  </div>

</section>

@endsection
    