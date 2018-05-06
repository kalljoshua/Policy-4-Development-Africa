<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

@yield('title')
<!-- Bootstrap CSS -->
<link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome CSS-->
<link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="/assets/css/style.css" rel="stylesheet">
<!-- Animate CSS -->
<link href="/assets/animate/animate.css" rel="stylesheet">
<!-- Owl Carousel -->
<link href="/assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">
<link href="/assets/owl-carousel/css/owl.theme.css" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Pre Loader -->
<div id="dvLoading"></div>
<!-- Header Start -->
  @include('layouts.header')

        @yield('content')

  @include('user.site_footer')


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="/assets/jquery/jquery-3.1.1.min.js"></script>
  <script src="/assets/jquery/jquery.animateNumber.min.js"></script>
  <script language="javascript" type="text/javascript" src="/js/starrr.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="/assets/easing/jquery.easing.min.js"></script>
  <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/wow/wow.min.js"></script>
  <script src="/assets/owl-carousel/js/owl.carousel.js"></script>
  <script src="/assets/js/custom.js"></script>
  <!-- Global Site Tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-83282272-3"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        //get subcateogries according to sector selection
        $("#property-type").change(function () {
            $.get("/submission/getSubCategories/" + $(this).val(), function (data) {

                $element = $("#subcategory_id");
                $element.removeAttr('disabled');

                $(data).each(function () {
                    $element.append("<option value='" + this.id + "'>" + this.name + "</option>");
                });

            });

        })
    })
</script>
<script>
  $(document).ready(function() {
    function disableContextMenu()
    {
      window.frames["fraDisabled"].document.oncontextmenu = function(){alert("No way!"); return false;};   
      // Or use this
      // document.getElementById("fraDisabled").contentWindow.document.oncontextmenu = function(){alert("No way!"); return false;};;    
    }  
})
</script>
  <script>
  $('div.alert').not('.alert-important').delay(2000).fadeOut(1500);
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments)};
    gtag('js', new Date());

    gtag('config', 'UA-83282272-3');
  </script>
  </body>
  </html>
