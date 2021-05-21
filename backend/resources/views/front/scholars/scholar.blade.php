@extends('layouts.frontlayout.frontpage')
@section('style')
    <style>
        @media screen and (max-width: 600px) {
            .main {
                width: 50%;
                margin: 10px;
            }

            .breadcrumb {
                visibility: hidden;
            }

            .myaya2 {
                width: 200%;
            }

            .form-control {
                width: 250px;
            }

        }
    </style>
@endsection
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
                            <div class="form-group has-search">
                                <div class="form-group has-search">
                                    <form class='row mb-3'>
                                        <span class="fa fa-search form-control-feedback"></span>
                                        <input name='q' autocomplete="off" value='{{request()->q}}' type="text" class="mr-5 form-control" placeholder="ابجث هنا عن الدورة...">
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{--                            <span class="fa fa-search form-control-feedback"></span>--}}
                        {{--                            <input name='q' id='q' value='{{request()->q}}' type="text" class="mr-5 form-control" placeholder="ابجث هنا عن المنحة...">--}}
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
                                                     src="{{$scholar->image?asset('storage/images/'.$scholar->image):asset('assets/images/scholarship-online.png')}}">
                                                <div class="single-new-arrival-bg-overlay"></div>
                                                <div class="sale {{$scholar->internal == '1' ? "bg-1": "bg-2"}}">
                                                    <p>{{$scholar->internal == '1' ? "داخلية": "خارجية"}}</p>
                                                </div>
                                                @if($scholar->lastDay!=null)
                                                    <div class="new-arrival-cart">
                                                        <p class="arrival-review pull-right">
                                                    <span
                                                        class="lnr text-right white">أخر موعد للالتحاق: {{$scholar->last_Day}}  </span>
                                                        </p>
                                                    </div>
                                                @endif
                                            </div>

                                    </a>

                                    <h4><a href="{{route('getScholarDetails',$scholar->slug)}}">{{$scholar->name}}</a>
                                    </h4>
                                    <p class="arrival-product-price">{{$scholar->percent}}%</p>
                                </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="pages text-center">

                        {{ $scholars->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

@endsection
