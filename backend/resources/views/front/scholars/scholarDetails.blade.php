@extends('layouts.frontlayout.frontpage')
@section('style')
    <style>
        .myphoto{
            background-size: cover;
            background-image:url("{{$scholarDetails->$scholarDetails?asset('storage/images/'.$scholarDetails->image):asset('assets/images/scholarship-online.png')}}");
            width: 100%;
            background-repeat: no-repeat;
            height: 280px;
            margin-top: 40px;
        }
    </style>

@endsection
@section('content')
    <div id="content pt-5">
        <div class="text-center myphoto">
            <div class="">
                <h4 class="btn" style="margin-top: 40px;margin-left: 988px">
                    <nav style="background-color: #0b2e13">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{asset('')}}">الرئيسية</a></li>
                            <li class="breadcrumb-item"><a href="{{asset('getScholar')}}">المنح</a></li>
                            <li aria-current="page" class="breadcrumb-item active">{{$scholarDetails->name}}</li>
                        </ol>
                    </nav>
                </h4>
            </div>
        </div>
        <div class="container mb-5">
            <div class=" text-center">
                <h1 class="pt-2"></h1>
            </div>

            <div class="row bar">
                <div class="col-md-3 img-back aside-left-line">
                    <!-- MENUS AND FILTERS-->
                    @include('front.scholars.menu')


                </div>
                <div class="col-md-9">

                    <div class="new-arrivals-content">
                        <div class="text-right">
                            <h1>{{$scholarDetails->name}}</h1>
                            <!--                            إذا كلن للمنحة رابط-->
                            @if($scholarDetails->link != "")
                                <a class="btn col-2" target="_blank" href="{{$scholarDetails->link}}" style="background-color: #0b3b65;color: white">تقــدم الآن</a>
                            @endif
                            <p>{!!$scholarDetails->description!!}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
