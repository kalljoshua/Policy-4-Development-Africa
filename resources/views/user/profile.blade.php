@extends('...layouts.user_layout')
@section('title')
  <title>{{$user->name}}</title>
@endsection
@section('content')

<section class="inner-wrapper">
  <div class="container">
    <div class="row">
      <div class="inner-wrapper-main">
        <div class="col-sm-12">
          <div class="courses course-details">
            <div class="col-sm-2 course-thumb"> 
            <img src="/assets/images/class-img4.jpg" alt="Course Image">
             </div>
            <div class="col-sm-9 course-cnt">
              <h3>{{$user->name}}</h3>
              <ul class="area-period">
                <li>Location <strong>{{$user->country}}</strong></li>
                <li>Duration <strong>2 Years</strong></li>
                <li>Fee <strong>$190</strong></li>
                <li>Total Seats <strong>12 Seats</strong></li>
                <li><a href="#">Download PDF</a></li>
              </ul>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
               when an unknown printer took a galley of type and scrambled it to make a type 
               specimen book. It has survived not only five centuries. </p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row offset-top-60">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-8">
            <div class="progress skill-bar ">
              <div class="progress-bar progress-bar-success" role="progressbar"
               aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> 
               <span class="skill">Pass Rate <i class="val">100%</i></span> </div>
            </div>
            <div class="progress skill-bar">
              <div class="progress-bar progress-bar-info" role="progressbar" 
              aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" > 
              <span class="skill">Score<i class="val">90%</i></span> </div>
            </div>
            <div class="progress skill-bar">
              <div class="progress-bar progress-bar-warning" role="progressbar" 
              aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"> 
              <span class="skill">Semesters<i class="val">75%</i></span> </div>
            </div>
            <div class="progress skill-bar">
              <div class="progress-bar progress-bar-danger" role="progressbar" 
              aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"> 
              <span class="skill">Requisites<i class="val">55%</i></span> </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="download-services">
              <h3>Please Download our latest Courses </h3>
              <a href="#">Download</a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row offset-top-80">
      <h2>Related <span>Courses</span> </h2>
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-4">
            <div class="courses new">
              <div class="course-thumb"> <img src="/assets/images/class-img1.jpg" 
              alt="Course Image"> </div>
              <div class="course-cnt">
                <h3>Lorem Ipsum is simply dummy</h3>
                <ul class="area-period">
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i> Austria</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i> 1 Year</li>
                </ul>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <ul class="price-and-seats">
                  <li><strong>$160</strong></li>
                  <li class="pull-right"><i class="fa fa-tasks" aria-hidden="true"></i> 18 Seats</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="courses course-grid">
              <div class="course-thumb"> <img src="/assets/images/class-img2.jpg" 
              alt="Course Image"> </div>
              <div class="course-cnt">
                <h3>Lorem Ipsum is simply dummy</h3>
                <ul class="area-period">
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i> Canada</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Years</li>
                </ul>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <ul class="price-and-seats">
                  <li><strong>$190</strong></li>
                  <li class="pull-right"><i class="fa fa-tasks" aria-hidden="true"></i> 12 Seats</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="courses course-grid">
              <div class="course-thumb"> <img src="/assets/images/class-img3.jpg" 
              alt="Course Image"> </div>
              <div class="course-cnt">
                <h3>Lorem Ipsum is simply dummy</h3>
                <ul class="area-period">
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i> France</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i> 1 Year</li>
                </ul>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <ul class="price-and-seats">
                  <li><strong>$140</strong></li>
                  <li class="pull-right"><i class="fa fa-tasks" aria-hidden="true"></i> 10 Seats</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Call to Action start -->
<div class="call-to-action">
  <div class="container">
    <h3>Lorem Ipsum is simply dummy text</h3>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. printing and 
    typesetting industry.</p>
    <a href="javascript:void(0)">Sign Up</a> </div>
</div>
<!-- Call to Action End -->
@endsection
