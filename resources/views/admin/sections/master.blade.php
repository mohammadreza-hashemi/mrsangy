<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    داشبورد مدیر
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'
  />
  <!--     Fonts and icons     -->
  {{-- https://material.io/resources/icons/?style=baseline --}}
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
  />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <!-- Font Cairo link -->
  <link href="https://fonts.googleapis.com/css?family=Cairo&amp;subset=arabic" rel="stylesheet">

  <!-- CSS Files -->
  <link href="{{asset('assets/css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/material-dashboard-rtl.css?v=1.1')}}" rel="stylesheet" />
  
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />

  <!-- Style Just for persian demo purpose, don't include it in your project -->
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4 {
      font-family: "Cairo";
    }
  </style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="{{asset('assets/img/sidebar-1.jpg')}}">
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
        مدیریت
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item ">
            <a class="nav-link" href="{{url('users')}}">
                  <i class="material-icons">account_box</i>
                  <p>کابران </p>
                </a>
              </li>
          <li class="nav-item ">
          <a class="nav-link" href="{{route('sync.index')}}">
              <i class="material-icons">dashboard</i>
              <p>سطوح دسترسی</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">shopping_cart</i>
              <p>مدیریت محصولات </p>
            </a>
          </li>
          <li class="nav-item ">
              <a class="nav-link" href="./user.html">
                <i class="material-icons">shopping_cart</i>
                <p>مدیریت خرید ها </p>
              </a>
            </li>
          <li class="nav-item ">
          <a class="nav-link" href="{{route('articles.index')}}">
              <i class="material-icons">content_paste</i>
              <p>مدیریت مقالات </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>مدیریت پست ها</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">drafts</i>
              <p>مدیریت نظرات </p>
            </a>
          </li>
            <li class="nav-item ">
            <a class="nav-link" href="{{url('/')}}">
                <i class="material-icons">cast</i>
                <p>ورود به سایت   </p>
              </a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="{{route('logout')}}">
                <i class="material-icons">power_setting</i>
                <p>خروج از حساب کاربری </p>
              </a>
            </li>
        </ul>
      </div>
    </div>

   
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
          <div class="container-fluid">
            <div class="navbar-wrapper">
            <a class="navbar-brand" href="{{route('articles.index')}}">مقالات </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
              <form class="navbar-form">
                <div class="input-group no-border">
                  <input type="text" value="" class="form-control" placeholder="Search...">
                  <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#pablo">
                    <i class="material-icons">dashboard</i>
                    <p class="d-lg-none d-md-block">
                      Stats
                    </p>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">notifications</i>
                    <span class="notification">5</span>
                    <p class="d-lg-none d-md-block">
                      Some Actions
                    </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                    <a class="dropdown-item" href="#">Another Notification</a>
                    <a class="dropdown-item" href="#">Another One</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">person</i>
                    <p class="d-lg-none d-md-block">
                      Account
                    </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="{{url('/dashboard')}}">
                     <i class="material-icons">content_paste</i>
                   <p style="padding-top:15px;margin-right:15px;"> داشبورد</p></a>
                  <a class="dropdown-item" href="{{url('setting')}}">
                       <i class="material-icons">build</i>
                   <p style="padding-top:15px;margin-right:15px;"> تنضیمات</p> </a>
                  <a class="dropdown-item" href="{{url('messages')}}">
                        <i class="material-icons">mail_outline</i>
                     <p style="padding-top:15px;margin-right:15px;">   مدیریت پیامک ها</p></a>
                  <a class="dropdown-item" href="{{url('notifications')}}">
                        <i class="material-icons">content_paste</i>
                       <p style="padding-top:15px;margin-right:15px;"> مدیریت نوتیفیکیشن ها</p></a>
                  <a class="dropdown-item" href="{{url('bot')}}">
                        <i class="material-icons">send</i>
                     <p style="padding-top:15px;margin-right:15px;">   ربات اطلاع رسانی سایت</p> </a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{route('logout')}}">
                      <i class="material-icons">exit_to_app</i>
                     <p style="padding-top:15px;margin-right:15px;"> خروج</p> </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
       

        @yield('content')
      
      </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
 
    <script>
      $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

        $('#image').click(function(){
            $('#images').click();
        });
      });
    </script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

     @include('sweet::alert')
</body>

</html>
