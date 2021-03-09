<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Universal - All In 1 Template</title>
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
                        <a class="nav-link" href="{{asset('quiz')}}"> اختبار القدرات </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('getCourses')}}"> الدورات التدريبية </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('getScholar')}}"> المنح الجامعية </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="who.html"> من نحن </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="call.html"> اتصل بنا</a>
                    </li>
                </ul>

            </div>

        </nav>
    </header>
