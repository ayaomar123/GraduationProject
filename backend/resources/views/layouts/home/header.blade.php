<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Graduate Website</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>
<body>
<header id="home" class="section">
    <div class="header_main_2 ">
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="mt-1 col-xl-1 ">
                        <nav class="navbar navbar-expand-sm">
                            <div class="collapse navbar-collapse" id="navbar-list-4">
                                <ul class="navbar-nav">
                                    <li style="margin-left: -150px" class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                           role="button" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <span class="m-topbar__userpic">
                                                @if(Auth()->user()->image == '')
                                                    <img src="{{asset('metronic/assets/app/media/img/users/user.png')}}"
                                                         width="40" height="40" class="rounded-circle" alt="">
                                                @else
                                                    <img src="{{asset('storage/user-images/'.auth()->user()->image)}}"
                                                         class="circular--portrait" width="40" height="40"
                                                         class="rounded-circle">
                                                @endif
                                            </span>
                                        </a>
                                        <div class="dropdown-menu text-right" aria-labelledby="navbarDropdownMenuLink">
{{--                                            <a class="dropdown-item" href="{{asset('myprofile/edit')}}">الملف الشخصي <i--}}
{{--                                                    class="fas fa-lg fa-user-circle"></i></a>--}}

                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a class="dropdown-item" href="route('logout')"
                                                   onclick="event.preventDefault(); this.closest('form').submit();"
                                                   class="btn m-btn--pill m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                    <h4> تسجيل خروج <i class="fas fa-lg fa-sign-out-alt"></i></h4>
                                                </a>

                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xl-10 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li><a href="{{asset('quiz')}}">اختبار
                                                القدرات <i class="fas fa-tasks"></i></a></li>
                                        <li><a href="Scholarship.html">المنح
                                                الجامعية <i class="fas fa-hand-holding-usd"></i></a></li>
                                        <li><a href="course.html">الدورات
                                                التدريبية <i class="fas fa-chalkboard-teacher"></i></a></li>
                                        <li><a href="department.html">التخصصات <i class="fas fa-laptop"></i></a>
                                        </li>
                                        <li><a href="{{asset('')}}">الرئيسية <i class="fas fa-home"></i></a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="mt-1 col-xl-1 ">
                        <img src="{{asset('assets/images/dal.png')}}" alt="" style="max-width: 100px;margin: 10px 0">
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </div>
</header>
