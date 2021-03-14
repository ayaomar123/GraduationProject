@extends('layouts.frontlayout.frontpage')
@section('content')
    <div id="content pt-5">
        <div class="text-center myaya2">
            <div class="">
                <h4 class="btn" style="margin-top: 40px;margin-left: 1000px">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{asset('')}}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">المنح</li>
                        </ol>
                    </nav>
                </h4>
            </div>
            <div class="">
                <h4 class="btn" style="margin-top: 2px; width: 1000px">

                    <div class="main">
                        <div class="form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="mr-5 form-control" placeholder="ابجث هنا عن المنحة...">
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
                    @include('front.scholars.menu')

                </div>
                <div class="col-md-9">

                    <div class="new-arrivals-content">
                        <div class="row">
                            @foreach($scholars as $scholar)
                                <div class="col-md-4">
                                    <a href="{{route('getScholarDetails',$scholar->slug)}}">
                                        <div class="single-new-arrival">
                                            <div class="single-new-arrival-bg">
                                                <img alt="new-arrivals images"
                                                     src="{{asset('storage/images/'.$scholar->image)}}">
                                                <div class="single-new-arrival-bg-overlay"></div>
                                                <div class="sale {{$scholar->internal == '1' ? "bg-1": "bg-2"}}">
                                                    <p>{{$scholar->internal == '1' ? "داخلية": "خارجية"}}</p>
                                                </div>
                                                <div class="new-arrival-cart">
                                                    <p class="arrival-review pull-right">
                                                    <span
                                                        class="lnr text-right white">أخر موعد للالتحاق: {{$scholar->last_Day}}  </span>
                                                    </p>
                                                </div>
                                            </div>
                                    </a>
                                        <h4><a href="{{route('getScholarDetails',$scholar->slug)}}">{{$scholar->name}}</a></h4>
                                        <p class="arrival-product-price">{{$scholar->percent}}%</p>
                                    </div>
                                </div>
                            @endforeach
                            {{--                            <div class="col-md-4">--}}
                            {{--                                <div class="single-new-arrival">--}}
                            {{--                                    <div class="single-new-arrival-bg">--}}
                            {{--                                        <img alt="new-arrivals images" src="images/quran.jpg">--}}
                            {{--                                        <div class="single-new-arrival-bg-overlay"></div>--}}
                            {{--                                        <div class="sale bg-2">--}}
                            {{--                                            <p>خارجبة</p>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="new-arrival-cart">--}}
                            {{--                                            <p class="arrival-review pull-right">--}}
                            {{--                                                <span class="lnr lnr-heart"></span>--}}
                            {{--                                            </p>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <h4><a href="#">منحة الفاخورة</a></h4>--}}
                            {{--                                    <p class="arrival-product-price">منحة كاملة</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
