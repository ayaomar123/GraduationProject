<!DOCTYPE html>
<html lang="en">

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
          href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
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
                    <div class="col-xl-11 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li><a href="test.html">اختبار
                                                القدرات <i class="fas fa-tasks"></i></a></li>
                                        <li><a href="Scholarship.html">المنح
                                                الجامعية <i class="fas fa-hand-holding-usd"></i></a></li>
                                        <li><a href="course.html">الدورات
                                                التدريبية <i class="fas fa-chalkboard-teacher"></i></a></li>
                                        <li><a href="department.html">التخصصات <i class="fas fa-laptop"></i></a>
                                        </li>
                                        <li><a href="index.html">الرئيسية <i class="fas fa-home"></i></a></li>
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

<!-- choose start -->
<div class="container pt-1">
    <div class="text-center mt-1 mb-5 pt-1">
    </div>

    <div class="row pb-3">
        <div class="col-lg-12 mb-4 text-right" style="margin-top: 50px">
            <div class="card-header mb-3">
                <h3 class="white">:أكمل الإجابة عن الأسئلة التالية</h3>
            </div>
            <form method='post' action="{{route('quiz.index')}}">
            <div class="card border-0 mb-2">
                <!--                     <img class="card-img-top" src="images/1.jpg" alt=""> -->
                @foreach($answers as $answer)
                    <div class="card-body bg-light">
                        <h3 class="card-title text-truncate">
                            {{$answer->question->question_body}}
                        </h3>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <ul>
                                        <li>{{$answer->answer}} <input class="btn btn-lg" type="radio" name="{{$answer->answer}}" id="radio-toolbar"></li>
                                    </ul>
                                </div>

                            </div>
                            <br>
                        </div>
                    </div>
                    <hr>
                @endforeach
                <div class="col-md-8 mt-0">
                    <!-- <img class="tri" src="images/tril.png" alt=""> -->
                </div>
            </div>
            <div class="col-md-7">
{{--                <button class="myBtn btn btn-lg">التالــي</button>--}}
                <button type="submit" class="btn btn-primary">التقييم</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- about start -->


<!-- service end -->
<!-- contact start -->
<div class="copyright_main">
    <div class="container">
        <footer class="main-bg-color" id="contact-us-sec">

            <div class="row justify-content-between align-items-top
                            py-5">
                <div class="col-md-4 col-lg-3 text-center">
                    <form>
                        <div class="form-group">
                            <input class="form-control
                                            text-right" id="exampleFormControlInput1"
                                   placeholder="أدخل اسمك"
                                   type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control
                                            text-right" id="exampleFormControlInput2"
                                   placeholder="بريدك الالكتروني"
                                   type="email">
                        </div>
                        <div class="form-group">
                                        <textarea class="form-control
                                            text-right"
                                                  id="exampleFormControlTextarea1"
                                                  placeholder="أدخل رسالتك" rows="3"></textarea>
                        </div>
                        <button class="btn
                                        main-color" type="submit">أرسل
                        </button>
                    </form>
                </div>

                <div class="col-md-3 col-lg-2 text-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">من نحن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="department.html">التخصصات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="course.html">الدورات
                                التدريبية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Scholarship.html">المنح</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="test.html">اختبار
                                القدرات</a>
                        </li>

                    </ul>
                </div>
                <div class="col-md-4 col-lg-3 text-center">
                    <img class="w-50 footer-logo" src="{{asset('assets/images/dal.png')}}"/>
                    <h3 class="mt-3 text-right" style="color:
                                    #fff;">
                        منصة إرشادية للطلاب الراغبين بدخول كلية
                        الهندسة بالجامعة الإسلامية لمساعدتهم باختيار
                        تخصص هندسي مناسب
                    </h3>
                </div>

            </div>


            <div>
                <h3 class="text-center secondary-color" style="color:
                                rgb(255, 255, 255);">
                    <i aria-hidden="true" class="fa fa-copyright"></i>
                    جميع الحقوق محفوظة لدى دليلك
                </h3>
            </div>
            <div class="text-center">
                <a href="#">
                    <i class="fab fa-facebook fa-lg"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram fa-lg mx-1"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin fa-lg"></i>
                </a>
            </div>

        </footer>
    </div>

</div>


<!-- contact end -->
<!-- Javascript files-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>

</html>
