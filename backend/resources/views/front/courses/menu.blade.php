@extends('layouts.frontlayout.frontpage')
@section('content')
    <div id="content pt-5">
        <div class="text-center myaya2">
            <div class="">
                <h4 class="btn" style="margin-top: 40px;margin-left: 1000px">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{asset('')}}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">الدورات التدريبية</li>
                        </ol>
                    </nav>
                </h4>
            </div>
            <div class="">
                <h4 class="btn" style="margin-top: 2px; width: 1000px">

                    <div class="main">
                        <div class="form-group has-search">
                            <form class='row mb-3'>
                            <span class="fa fa-search form-control-feedback"></span>
                            <input name='q' value='{{request()->q}}' type="text" class="mr-5 form-control" placeholder="ابجث هنا عن الدورة...">
                            </form>
                        </div>
                    </div>
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
                    <div class="panel panel-default sidebar-menu ">

                        <div class="panel-body">
                            <ul class="nav nav-pills flex-column text-sm category-menu">
                                <li class="nav-item">
                                    <a class="mt-4 nav-link d-flex align-items-center justify-content-between"
                                       href="{{asset('getCourses')}}"
                                       style="background-color: #0b3b65;
                                        color: white">
                                        <span>الدورات التدريبية</span>
                                    </a>
                                </li>
                                @foreach($departments as $dep)
                                    <li class="nav-item">
                                        <a class="mt-4 nav-link d-flex align-items-center justify-content-between"
                                           href="{{asset('menu/'.$dep->id)}}">
                                            <span>{{$dep->name}}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="col-md-9">

                    <div class="new-arrivals-content">
                        @if(count($menus)>0)
                        <div class="row">
                            @foreach($menus as $course)
                                <div class="col-md-4">
                                    <div class="single-new-arrival">
                                        <a href="{{asset('getCourses/'.$course->slug)}}">
                                            <div class="single-new-arrival-bg">
                                                <img alt="new-arrivals images" src="{{$course->image?asset('storage/images/'.$course->image):asset('assets/images/a1.jpg')}}">
                                                <div class="single-new-arrival-bg-overlay"></div>
                                                <div class="new-arrival-cart">
                                                    <p class="arrival-review pull-right">
                                                        <span class="lnr lnr-heart"></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <h4><a href="{{asset('getCourses/'.$course->slug)}}">{{$course->name}}</a></h4>
                                        <p class="arrival-product-price"><a href="{{asset('getCourses/subscription/.$course->slug')}}" class="btn btn-light">التحق
                                                بالدورة</a></p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @else
                        <h3 class="pr-2 text-right py-md-3 alert-danger">نأسف لا يوجد دورات خاصة بهذا القسم</h3>
                            <br>
                            <h4 class="pr-3 py-md-3 text-right  alert-success">يرجى التواصل معنا لطرح الدورات المطلوبة</h4>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
