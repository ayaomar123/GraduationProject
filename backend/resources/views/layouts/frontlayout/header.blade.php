<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dalelak | دليلك</title>
    <meta content="" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="all,follow" name="robots">
    <!-- temkeen-proj CSS-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    @yield('style')
</head>

<body>
<div id="all">

    <!-- Navbar Start-->
    <header id="main-section">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light main-nav" style="background-color: #0b3b65">
            <a class="navbar-brand" href="#index.html">
                <img alt="logo" src="{{asset('assets/images/dal.png')}}" style="max-width: 100px"></a>
            <button aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler  custom-toggler" data-target="#navbarCollapse" data-toggle="collapse"
                    type="button">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-right: 50px">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{asset('')}}">الرئيسية </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('getDepartments')}}"> التخصصات </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('quiz')}}"> اختبار الميول </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('getCourses')}}"> الدورات التدريبية </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('getScholar')}}"> المنح الجامعية </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('SuccessStory')}}"> قصص النجاح</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('getPages/who')}}"> من نحن </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('getPages/calls')}}"> اتصل بنا</a>
                    </li>
                </ul>
            </div>

            <div class="mt-1 col-xl-1 ">
                <nav class="navbar navbar-expand-sm" style="margin-right: -70px">

                    @auth()
                        <div class="collapse navbar-collapse" id="navbar-list-4" style="margin-right: 15px">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                       role="button" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                            <span class="m-topbar__userpic">
                                                @if(Auth()->user()->image == '')
                                                    <img src="{{asset('metronic/assets/app/media/img/users/user.png')}}"
                                                         width="40" height="40" class="rounded-circle" alt="">
                                                @else
                                                    <img src="{{asset('storage/images/'.auth()->user()->image)}}"
                                                         class="circular--portrait" width="40" height="40"
                                                         class="rounded-circle">
                                                @endif
                                            </span>
                                    </a>
                                    <div class="dropdown-menu text-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{route('myprofile.edit')}}"
                                           class="btn m-btn--pill m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                            <h4> الملف الشخصي <i class="fas fa-lg fa-sign-out-alt"></i></h4>
                                        </a>
                                        <a class="dropdown-item" href="{{route('userCourses')}}"
                                           class="btn m-btn--pill m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                            <h4> دوراتي <i class="fas fa-lg fa-sign-out-alt"></i></h4>
                                        </a>
{{--                                        <a class="dropdown-item" href="{{route('myResults')}}"--}}
{{--                                           class="btn m-btn--pill m-btn m-btn--custom m-btn--label-brand m-btn--bolder">--}}
{{--                                            <h4> اختبارات الميول <i class="fas fa-lg fa-sign-out-alt"></i></h4>--}}
{{--                                        </a>--}}
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

                    @else
                        <div class="collapse navbar-collapse" id="navbar-list-4" style="margin-left: 50px">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{asset('login')}}"> تسجيل الدخول </a>

                                </li>
                            </ul>
                        </div>
                    @endauth
                </nav>
            </div>
        </nav>
    </header>
