@extends('layouts.frontlayout.frontpage')
@section('content')
    <div id="content pt-5">
        <div class="text-center myaya2">
            <div class="">
                <h4 class="btn" style="margin-top: 40px;margin-left: 1000px">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">الدورات التدريبية</li>
                        </ol>
                    </nav>
                </h4>
            </div>
            <div class="">
                <h4 class="btn" style="margin-top: 2px; width: 1000px">

                    <div class="main">
                        <div class="form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="mr-5 form-control" placeholder="ابجث هنا عن الدورة...">
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
                                       href="#"
                                       style="background-color: #0b3b65;
                                        color: white">
                                        <span>الدورات التدريبية</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="mt-4 nav-link d-flex align-items-center justify-content-between"
                                       href="#">
                                        <span>قسم الحاسوب</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="mt-4 nav-link d-flex align-items-center justify-content-between"
                                       href="#">
                                        <span>قسم العمارة</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="col-md-9">

                    <div class="new-arrivals-content">
                        <div class="row">
                            @foreach($courses as $course)
                                <div class="col-md-4">
                                    <div class="single-new-arrival">
                                        <div class="single-new-arrival-bg">
                                            <img alt="new-arrivals images" src="{{asset('storage/images/'.$course->image)}}">
                                            <div class="single-new-arrival-bg-overlay"></div>
                                            <div class="new-arrival-cart">
                                                <p class="arrival-review pull-right">
                                                    <span class="lnr lnr-heart"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <h4><a href="getCourses/{{$course->slug}}">{{$course->name}}</a></h4>
                                        <p class="arrival-product-price"><a href="" class="btn btn-light">التحق
                                                بالدورة</a></p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
