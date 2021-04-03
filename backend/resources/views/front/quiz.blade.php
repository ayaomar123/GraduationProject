@extends('layouts.frontlayout.frontpage')
@section('style')
    <style>
        li {
            list-style: none;
        }

        .myaya10 {
            background-image: url("{{asset('assets/images/arch5.jpg')}}");
            background-size: cover;
            background-repeat: no-repeat;
            height: 400px;
        }

        body {
            direction: rtl;
            text-align: right
        }

        .imgClass {
            margin-right: 80px;
        }


        * {
            box-sizing: border-box;
        }

        .image {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlay {
            bottom: 0;
            background: #347586; /* Black see-through */
            color: #f1f1f1;
            width: 100%;
            transition: .5s ease;
            opacity: 0;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .overlay {
            opacity: 1;
        }
    </style>
@endsection
@section('content')
    <div class="text-center myaya10">
    </div>
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-xl-6 col-md-10 mt-5 pt-2">
                <div class="mt-5">
                    <h1 class="" style="text-align: center">
                        اختبار تحديد الميول
                    </h1>
                    <p>
                        اختبار يساعدك في اكتشاف ميولك التخصصي الهندسي المناسب .. لا تتردد في تجربته .. ابدأ الآن وتميز
                        في مستقبلك
                    </p>
                </div>
            </div>
            <div class="col-xl-6 col-md-10">
                <img class="" src="{{asset('assets/images/hi.png')}}">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <div class="" style="">
                    <div class="">
                        <div class=""><a href="#"><span class="imgClass"><img
                                        src="https://www.iktshaf.com/themes/krisawzm-blank-bootstrap/assets/images/myfield/1-icon-new.svg"
                                        alt="imagealt" class="et-waypoint et_pb_animation_top et-animated"><noscript><img
                                            src="https://www.iktshaf.com/themes/krisawzm-blank-bootstrap/assets/images/myfield/1-icon-new.svg"
                                            alt="imagealt"
                                            class="et-waypoint et_pb_animation_top"></noscript></span></a>
                        </div>
                        <div class="">
                            <h4 class="text-center"><a class="alert-success" href="#">تعرف ميولك وقدراتك</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 ">
                <div class="" style="">
                    <div class="">
                        <div class=""><a href="#"><span class="imgClass"><img
                                        src="https://www.iktshaf.com/themes/krisawzm-blank-bootstrap/assets/images/myfield/2-icon-new.svg"
                                        alt="imagealt" class="et-waypoint et_pb_animation_top et-animated"><noscript><img
                                            src="https://www.iktshaf.com/themes/krisawzm-blank-bootstrap/assets/images/myfield/2-icon-new.svg"
                                            alt="imagealt"
                                            class="et-waypoint et_pb_animation_top"></noscript></span></a>
                        </div>
                        <div class="">
                            <h4 class="text-center"><a class="alert-success" href="#">تعرف التخصصات المطلوبة في
                                    المستقبل</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="" style="">
                    <div class="">
                        <div class=""><a href="#"><span class="imgClass"><img
                                        src="https://www.iktshaf.com/themes/krisawzm-blank-bootstrap/assets/images/myfield/3-icon-new.svg"
                                        alt="imagealt" class="et-waypoint et_pb_animation_top et-animated"><noscript><img
                                            src="https://www.iktshaf.com/themes/krisawzm-blank-bootstrap/assets/images/myfield/3-icon-new.svg"
                                            alt="imagealt"
                                            class="et-waypoint et_pb_animation_top"></noscript></span></a>
                        </div>
                        <div class="">
                            <h4 class="text-center"><a class="alert-success" href="#">تمشي على الخطوات العلمية لاختيار
                                    التخصص</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="" style="">
                    <div class="">
                        <div class=""><a href="#"><span class="imgClass"><img
                                        src="https://www.iktshaf.com/themes/krisawzm-blank-bootstrap/assets/images/myfield/4-icon-new.svg"
                                        alt="imagealt" class="et-waypoint et_pb_animation_top et-animated"><noscript><img
                                            src="https://www.iktshaf.com/themes/krisawzm-blank-bootstrap/assets/images/myfield/4-icon-new.svg"
                                            alt="imagealt"
                                            class="et-waypoint et_pb_animation_top"></noscript></span></a>
                        </div>
                        <div class="">
                            <h4 class="text-center"><a class="alert-success" href="#">تستخير الله ومن ثم تتخذ القرار</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- choose start -->
    <div class="container mt-5 pt-5">
        <div class="card-header">
            <h4 class="white text-center">اختر التخصص الذي تود باختبار قدراتك فيه ♥♥♥</h4>
        </div>
        <div class="row">
            <div class="col-md-4 py-5 col-4">
                <div class="container">
                    <a href="{{route('quiz.showQuiz')}}">
                        <img src="{{asset('assets/images/حاسوب.jpg')}}" alt="Avatar" class="image">
                        <div class="overlay"><h4>هندسة الحاسوب</h4></div>
                    </a>
                </div>

            </div>
            <div class="col-md-4 py-5 col-4">
                <div class="container">
                    <a href="#">
                        <img src="{{asset('assets/images/حاسوب.jpg')}}" alt="Avatar" class="image">
                        <div class="overlay"><h4>الهندسة المعمارية</h4></div>
                    </a>
                </div>

            </div>
            <div class="col-md-4 py-5 col-4">
                <div class="container">
                    <a href="#">
                        <img src="{{asset('assets/images/حاسوب.jpg')}}" alt="Avatar" class="image">
                        <div class="overlay"><h4>هندسة الكهرباء</h4></div>
                    </a>
                </div>

            </div>
            <div class="col-md-4 py-5 col-4">
                <div class="container">
                    <a href="#">
                        <img src="{{asset('assets/images/حاسوب.jpg')}}" alt="Avatar" class="image">
                        <div class="overlay"><h4>هندسة الميكانيكا</h4></div>
                    </a>
                </div>

            </div>
            <div class="col-md-4 py-5 col-4">
                <div class="container">
                    <a href="#">
                        <img src="{{asset('assets/images/حاسوب.jpg')}}" alt="Avatar" class="image">
                        <div class="overlay"><h4>هندسة النظم الذكية</h4></div>
                    </a>
                </div>

            </div>

        </div>
    </div>


@endsection
