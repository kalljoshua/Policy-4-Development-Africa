<header>
  <div class="top-wrapper hidden-xs">
    <div class="container">
      <div class="col-md-4 col-sm-6 hidden-xs top-wraper-left no-padding">
        <ul class="header-social-icons">
          <li class="facebook"><a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li class="twitter"><a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li class="linkedin"><a href="javascript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          <li class="google-plus"><a href="javascript:void(0)" target="_blank"><i class="fa fa-google-plus"></i></a></li>
          <li class="youtube"><a href="javascript:void(0)" target="_blank"><i class="fa fa-youtube"></i></a></li>
        </ul>
      </div>
      <div class="col-md-8 col-sm-6">
        <ul class="top-right pull-right ">
          @if(Auth::guard('user')->user())
          <li class="login"><a href="#"><i class="fa fa-user"></i>
            {{Auth::guard('user')->user()->name}}
          </a></li>
          <li class="register"><a href="#"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-lock"></i>Logout</a></li>
          <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}</form>
          @else
          <!-- Login -->
          <li class="login"><a href="javascript:void(0)">
            <i class="fa fa-lock"></i>Login</a>
            <div class="login-form">
              <h4>Login</h4>
              <form action="{{route('user.login.submit')}}" method="post">
                {{ csrf_field() }}
                <input type="text" name="email" placeholder="Enter Email Address">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" class="btn">Login</button>
              </form>
            </div>
          </li>
          <!-- Register -->
          <li class="register"><a href="javascript:void(0)"><i class="fa fa-user"></i>Sign Up</a>
            <div class="register-form">
              <h4>Sign Up</h4>
              <span>Please sign up the account</span>
              <form action="{{route('user.submit')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <select type="text" name="type" required>
                  <option value="">Select account type</option>
                  <option value="1">Individual</option>
                  <option value="2">Organisation</option>
                </select>
                <input type="text" required name="name" placeholder="Full name">
                <input type="email" name="email" required placeholder="Work Email">
                <input type="phone" name="phone" required placeholder="Contact Number">
                <input type="country" name="country" required placeholder="Country of Origin">
                <input type="district" name="district" required placeholder="District/State/Province">
                <input type="password" name="password" required placeholder="Password">
                <button type="submit" class="btn">Register</button>
              </form>
            </div>
          </li>
          @endif
          <li class="search"><i class="fa fa-search" aria-hidden="true"></i>
            <div id="search-form-container">
              <form id="search-form" action="#" style="display: none;" class="">
                <input type="search" id="search" name="search" placeholder="Search...">
                <input type="submit" id="search-submit" value="">
                <span id="close-form" class="close">x</span>
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="logo-bar hidden-xs">
    <div class="container">
      <!-- Logo -->
      <div class="row">
        <div class="col-sm-4"><a href="/">
          <img src="/assets/images/logo.png" alt="Education World"></a> </div>
        <div class="col-sm-8">
          <ul class="contact-info pull-right">
            <li><i class="fa fa-phone"></i>
              <p> <span>Call Us</span><br>
                +256-779 641 269</p>
            </li>
            <li><i class="fa fa-envelope"></i>
              <p><span>Email Us</span><br>
                <a href="mailto:support@sbtechnosoft.com">info@p4dafrica.org</a></p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="wow fadeInDown navigation" data-offset-top="197" data-spy="affix">
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="row">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
            data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
            aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.html">
              <img src="/assets/images/logo.png" alt="Education World"/></a> </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">About Us</a></li>
              <li class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                role="button" aria-haspopup="true" aria-expanded="false">Policy Categories
                 <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  @foreach (App\PolicyCategory::all() as $category)
                    <li><a href="{{route('policies.category',['id'=>$category->id])}}">{{$category->name}}</a></li>
                  @endforeach
                </ul>
              </li>
              <li class="dropdown mega-menu"> <a href="javascript:void(0)"
                class="dropdown-toggle" data-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false">Resources
                <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  @foreach (App\Resource::all() as $resource)
                    <li><a href="{{route('policies.category',['id'=>$resource->id])}}">{{$resource->name}}</a></li>
                  @endforeach
                </ul>
              </li>
              <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                role="button" aria-haspopup="true" aria-expanded="false">Latest Updates
                 <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('user.blog.posts')}}">News</a></li>
                  <li><a href="#">Events</a></li>
                  <li><a href="#">Reviews</a></li>
                </ul>
              </li>
              </li>
              <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                role="button" aria-haspopup="true" aria-expanded="false">Partnerships
                 <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Global Partners</a></li>
                  <li><a href="#">Continental Partners</a></li>
                  <li><a href="#">Regional Partners</a></li>
                  <li><a href="#">National Partners</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                role="button" aria-haspopup="true" aria-expanded="false">Publications
                <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="$">Reports</a></li>
                  <li><a href="#">Survey</a></li>
                </ul>
              </li>
               </li>
              <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                role="button" aria-haspopup="true" aria-expanded="false">Get Involved
                 <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Volunteer</a></li>
                  <li><a href="#">Donate</a></li>
                  <li><a href="#">Align</a></li>
                </ul>

            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- Header End -->
<div class="text-center">
@include('flash::message')
</div>
