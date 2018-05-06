<!-- Footer Links Start-->
<footer>
 <div class="col-sm-4">
      <div class="contactus">
        <h2>SITE MAP</h2>
        <ul class="list-ul">
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('user.about')}}">About Us</a></li>
          <li></i>Policy Categories</li>
          <li><a href="{{route('usekr.termsofUse')}}">Terms of Use</li>
          <li><a href="{{route('user.privacy')}}">Privacy Policy</li>
          <li><a href="{{route('user.contact')}}">Contact Us</li>
        </ul>
      </div>
      </div>
    <div class="col-sm-4">
      <div class="contactus">
        <h2>TOP VIEWED CATEGORIES</h2>
        <ul class="list-ul">
          @foreach (App\PolicyCategory::all() as $category)
            <li>
              <a href="{{route('policies.category',['id'=>$category->id])}}">
                {{$category->name}}
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="col-sm-4 subscirbe pull-right">
      <h2>Newsletter</h2>
      <p class="sub"><span>Subscribe</span> to Our Newsletter to get Important updates</p>
      <div class="form">
        <input type="text" placeholder="Enter your Email" id="exampleInputName" class="form-control first">
        <input type="text" class="bttn" value="Subscribe">
      </div>
    </div>
  </div>
</footer>
<!-- Footer Links End -->
<!-- Copy Rights Start -->
<div class="footer-wrapper">
  <div class="container">
    <p>&copy; Copyright
	<script type="text/javascript">
	var d=new Date();
	document.write(d.getFullYear());
	</script>
      P4D Africa | All Rights Reserved.</p>
  </div>
  <a id="scrool-top" href="javascript:void(0)"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
</div>
<!-- Copy Rights End --> 
