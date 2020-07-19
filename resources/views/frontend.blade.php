<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Voting Syatem</title>

 <link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="{{secure_asset('frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{secure_asset('frontend/css/font-awesome.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{secure_asset('frontend/css/simple-line-icons.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{secure_asset('frontend/css/animate.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{secure_asset('frontend/style.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{secure_asset('frontend/css/owl.carousel.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{secure_asset('frontend/css/owl.theme.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{secure_asset('frontend/css/owl.transitions.css')}}"/>

<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,100,200,300,500,600,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps:400,700' rel='stylesheet' type='text/css'>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  html {
  scroll-behavior: smooth;
}
  .nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
    background-color: #876d6d;
    border-color: #337ab7;
}
.navbar-nav>li>.dropdown-menu {
    margin-top: 0;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #876d6d;
    color:white;
}
.dropdown-item{
  color:white;
}

</style>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="main-header" id="main-header">
  <nav class="navbar mynav navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#">Voting</a> </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#banner">Home</a></li>
          <li><a href="#vote">Vote</a></li>
          @guest
          <!-- <li><a href="{{route('login')}}">Login</a></li> -->
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>


          </li>
          <li><a href="{{route('register')}}">Register</a></li>
          @else
          <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}   <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
<!-- 
                            <div class="dropdown"> -->
  <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div> -->
        
        </ul>
      </div>
    </div>
  </nav>
</div>
<div class="banner" id="banner">
  <div class="bg-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="banner-text">
            <h2> <span>Welcome</span> </h2>
            <p>You Can Choose what You like</p>
           </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Portfolio -->
<div id="vote" class="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1 text-center text">
     
          <!-- Card deck -->
          @yield('product')
                  @yield('login')
                <!-- Card deck -->
             <!-- custom -->
            <div class="container">

                
    
            </div>
             <!-- custom -->
       
        <!-- /.row (nested) --> 
       </div>
      <!-- /.col-lg-10 --> 
    </div>
    <!-- /.row --> 
  </div>
  <!-- /.container --> 
</div>


<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4"> <span class="copyright">Copyright &copy; Ethereal 2018</span> </div>
      <div class="col-md-4">
        <ul class="list-inline social-buttons">
          <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
          <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a> </li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="list-inline quicklinks">
          <li>Designed by <a href="http://w3template.com">W3 Template</a> </li>
        </ul>
      </div>
    </div>
  </div>
  
</footer>
<script src="{{secure_asset('frontend/js/jquery.min.js')}}"></script> 
<script src="{{secure_asset('frontend/js/bootstrap.min.js')}}"></script> 
<script type="text/javascript" src="{{secure_asset('frontend/js/owl.carousel.min.js')}}"></script> 
<script type="text/javascript" src="{{secure_asset('frontend/js/jquery.countTo.js')}}"></script> 
<script type="text/javascript" src="{{secure_asset('frontend/js/jquery.waypoints.min.js')}}"></script> 
<script>

</script>
</body>
</html>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->