@extends('...layouts.user_layout')
@section('title')
  <title>Policy for Development - Africa</title>
@endsection
@section('content')

@include('flash::message')

<!-- Banner Wrapper Start -->
<div class="banner-wrapper">
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
<!-- Overlay -->
<div class="overlay"></div>
<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
  <li data-target="#bs-carousel" data-slide-to="1"></li>
  <li data-target="#bs-carousel" data-slide-to="2"></li>
</ol>
<!-- Wrapper for slides -->
<div class="carousel-inner">
  <div class="item slides active">
    <div class="slide-1"></div>
    <div class="hero">
      <h1 class="animated1">Welcome To P4D Africa</h1>
      <h3 class="animated2">The Policy Hub Built for African Developemnt</h3>
    </div>
  </div>
  <div class="item slides">
    <div class="slide-2"></div>
    <div class="hero">
      <h1 class="animated1">Policy Access</h1>
      <h3 class="animated2">Policies for any African Country brought to you in the palm of your hands!</h3>
    </div>
  </div>
  <div class="item slides">
    <div class="slide-3"></div>
    <div class="hero">
      <h1 class="animated1">Policy Analysis</h1>
      <h3 class="animated2">Don't stress! Let us help you and analyse that policy for you!</h3>
    </div>
  </div>
</div>
</div>
</div>
<!-- Banner Wrapper End -->
<!-- About Us -->
<div class="about-us">
<div class="container">
<div class="row">
  <div class="col-sm-12 col-md-8">
    <h2>WHAT IS P4D AFRICA?<br>
      <span> </span></h2>
    <p><strong>P4D AFRICA</strong> stands for POLICY FOR DEVELOPMENT AFRICA. It's an online platform with a collection of all policies from all over african continent. You can access any policy and even request the admin to analyse it and make it as simple as possible for you to understand.</p>
    <p>The platform also avails users with latest business and politicle news and upadtes that are influential to the development of African Continent</p>
    <a href="#"> Read More...</a> </div>
  <div class="col-sm-12 col-md-4 pull-right hidden-sm"> <img src="/assets/images/about-img.jpg" alt="World-edu"> </div>
</div>
</div>
</div>
<!-- Callouts Wrapper Start -->
<div class="callouts-wrapper">
<div class="container">
<h2>WHY<span> P4D AFRICA</span></h2>
<p class="center">Why you must get involved!</p>
<div class="row">
  <div class="col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="1.5s">
    <div class="callouts">
      <div class="icon"><i class="fa fa-desktop" aria-hidden="true"></i></div>
      <div class="content">
        <h3>All Policies Available</h3>
        <p>Coccaecat cupidatat aliqu proident sunt.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="1.5s" data-wow-delay="0.3s">
    <div class="callouts">
      <div class="icon"> <i class="fa fa-paint-brush" aria-hidden="true"></i></div>
      <div class="content">
        <h3>Policy Analysis</h3>
        <p>Coccaecat cupidatat aliqu proident sunt.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="1.5s" data-wow-delay="0.5s">
    <div class="callouts">
      <div class="icon"><i class="fa fa-magic" aria-hidden="true"></i></div>
      <div class="content">
        <h3>Partnerships</h3>
        <p>Coccaecat cupidatat aliqu proident sunt.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="1.5s">
    <div class="callouts">
      <div class="icon"><i class="fa fa-cogs" aria-hidden="true"></i></div>
      <div class="content">
        <h3>Fundraising</h3>
        <p>Coccaecat cupidatat aliqu proident sunt.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="1.5s" data-wow-delay="0.3s">
    <div class="callouts">
      <div class="icon"> <i class="fa fa-users" aria-hidden="true"></i></div>
      <div class="content">
        <h3>Events</h3>
        <p>Coccaecat cupidatat aliqu proident sunt.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="1.5s" data-wow-delay="0.5s">
    <div class="callouts">
      <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
      <div class="content">
        <h3>The Future</h3>
        <p>Coccaecat cupidatat aliqu proident sunt.</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Callouts Wrapper End -->
<!-- Satisfied Wrapper start -->
<div class="satisfied-wrapper">
<div class="container">
<h2> Take a look <span> at Statistics</span></h2>
<p class="center">Our impact can speak for its self.</p>
<div class="statistics">
  <div class="col-sm-3 counter"> <i class="fa fa-list-alt" aria-hidden="true"></i>
    <div class="number animateNumber" data-num="100000"> <span>100000</span></div>
    <p>Policies</p>
  </div>
  <div class="col-sm-3 counter"> <i class="fa fa-user" aria-hidden="true"></i>
    <div class="number animateNumber" data-num="254"> <span>254</span></div>
    <p>Countries</p>
  </div>
  <div class="col-sm-3 counter"> <i class="fa fa-users" aria-hidden="true"></i>
    <div class="number animateNumber" data-num="3600"> <span>3600</span></div>
    <p>Policies Analysed</p>
  </div>
  <div class="col-sm-3 counter"> <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    <div class="number animateNumber" data-num="768"> <span>768</span></div>
    <p>Companies/Organisations Benefited</p>
  </div>
</div>
</div>
</div>
<!-- satisfied Wrapper End -->
<!-- Call to Action start -->
<div class="call-to-action">
<div class="container">
<h3>Love what we are doing!?</h3>
<p>How about you create a free account and join us</p>
<a href="javascript:void(0)">JOIN US</a> </div>
</div>
<!-- Call to Action End -->
<!-- Faculty Wrapper Start -->
<div class="team-wrapper">
<div class="container">
<div class="row">
  <h2>Meet The <span>Team</span></h2>
  <div id="owl-demo" class="owl-carousel owl-theme">
    <div class="item">
      <div class="img-box"> <img src="/assets/images/team-img1.jpg" alt="Team1" title="Team1" />
        <div class="text-center">
          <h4>Dr.Mugisha Frederick</h4>
          <p>Founder/C.E.O</p>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="img-box"> <img src="/assets/images/team-img2.jpg" alt="Team2" title="Team2" />
        <div class="text-center">
          <h4>Moses Ruraara</h4>
          <p>Systems Analyst</p>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="img-box"> <img src="/assets/images/team-img3.jpg" alt="Team3" title="Team3" />
        <div class="text-center">
          <h4>Jimmy Mugisha</h4>
          <p>Executive Director</p>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="img-box"> <img src="/assets/images/team-img4.jpg" alt="Team4" title="Team4" />
        <div class="text-center">
          <h4>Kyarisima Rosette</h4>
          <p>PRO</p>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="img-box"> <img src="/assets/images/team-img1.jpg" alt="Team1" title="Team1" />
        <div class="text-center">
          <h4>Sarah Norris</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="img-box"> <img src="/assets/images/team-img2.jpg" alt="Team2" title="Team2" />
        <div class="text-center">
          <h4>Doris Wilson</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="img-box"> <img src="/assets/images/team-img3.jpg" alt="Team3" title="Team3" />
        <div class="text-center">
          <h4>Anne Kemper</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="img-box"> <img src="/assets/images/team-img4.jpg" alt="Team4" title="Team4" />
        <div class="text-center">
          <h4>Ruth Carman</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Faculty Wrapper End -->
<!-- Testimonials Wrapper Start -->
<div class="testimonials-wrapper">
<div class="container">
<h2>What<span> our users are saying</span></h2>
<div id="testimonials" class="owl-carousel owl-theme">
  <div class="item"> <img src="/assets/images/testimonials1.png" alt="Testimonials">
    <p>Testimony 1</p>
    <h3>- Michal Marek <span>Country Director- Standard Bank Group</span></h3>
  </div>
  <div class="item"> <img src="/assets/images/testimonials2.png" alt="Testimonials">
    <p>Testimony 1</p>
    <h3>Mary Williams <span>Founder/C.E.O- Ruraara Tech Empire,LLC</span></h3>
  </div>
  <div class="item"> <img src="/assets/images/testimonials3.png" alt="Testimonials">
    <p>Testimony 3</p>
    <h3>- Michal Marek <span>General manager</span></h3>
  </div>
  <div class="item"> <img src="/assets/images/testimonials1.png" alt="Testimonials">
    <p>Testimony 4</p>
    <h3>- Michal Marek <span>General manager</span></h3>
  </div>
  <div class="item"> <img src="/assets/images/testimonials2.png" alt="Testimonials">
    <p>Testimony 5</p>
    <h3>- Mary Williams <span>Service manager</span></h3>
  </div>
  <div class="item"> <img src="/assets/images/testimonials3.png" alt="Testimonials">
    <p>Testimony 6</p>
    <h3>- Michal Marek <span>General manager</span></h3>
  </div>
</div>
</div>
</div>
<!-- Testimonials Wrapper End -->
<!-- sponsers Start -->
<div class="sponsers">
<div class="container">
<h2>Our <span>Partners</span></h2>
<div id="sponsers" class="owl-carousel owl-theme">
  <div class="item"> <img src="/assets/images/edu-logo1.jpg" alt="Education Logos"></div>
  <div class="item"> <img src="/assets/images/edu-logo2.jpg" alt="Education Logos"></div>
  <div class="item"> <img src="/assets/images/edu-logo3.jpg" alt="Education Logos"></div>
  <div class="item"> <img src="/assets/images/edu-logo4.jpg" alt="Education Logos"></div>
  <div class="item"> <img src="/assets/images/edu-logo5.jpg" alt="Education Logos"></div>
  <div class="item"> <img src="/assets/images/edu-logo6.jpg" alt="Education Logos"></div>
  <div class="item"> <img src="/assets/images/edu-logo1.jpg" alt="Education Logos"></div>
  <div class="item"> <img src="/assets/images/edu-logo2.jpg" alt="Education Logos"></div>
  <div class="item"> <img src="/assets/images/edu-logo3.jpg" alt="Education Logos"></div>
</div>
</div>
</div>
<!-- sponsers End -->

@endsection
