@extends('layouts.frontlayout.frontpage')
@section('style')
<style>
    .myphoto{
        background-size: cover;
        background-image:url("{{$courseDetails->image?asset('storage/images/'.$courseDetails->image):asset('assets/images/noor10.jpg')}}");
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
                <h4 class="btn" style="margin-top: 40px;margin-left: 900px">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{asset('')}}">الرئيسية</a></li>
                            <li class="breadcrumb-item"><a href="{{asset('getCourses')}}">الدورات التدريبية</a></li>
                            <li aria-current="page" class="breadcrumb-item active">{{$courseDetails->name}}</li>
                        </ol>
                    </nav>
                </h4>
            </div>

        </div>

        <div class="container mb-5">
            <div class=" text-right">
                <h1 class="pt-2"></h1>
            </div>

            <div class="row text-right">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <a class="w-100 btn" href=""
                               style="background-color: #0b3b65;color: white;border-radius: 50px">سجل الآن</a>
                        </div>
                        <div class="card-body">
                            <h4 style="color: #0b3b65"><b>معلومات سريعة عن الدورة</b></h4>
                            <h4>المدرب:{{$courseDetails->trainer->name}}</h4>
                            <h4>رسوم الدورة:{{$courseDetails->cost}}</h4>
                            <h4>عدد الساعات:{{$courseDetails->hours}}</h4>
                        </div>
                        <div class="card-footer">
                            <h4 style="color: #0b3b65"><b>شارك الأضدقاء</b></h4>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <a href="#">
                                        <i aria-hidden="true" class="fa fa-facebook fa-lg" style="color:#0b3b65"></i>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#">
                                        <i aria-hidden="true" class="fa fa-twitter fa-lg" style="color:#0b3b65"></i>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#">
                                        <i aria-hidden="true" class="fa fa-linkedin fa-lg" style="color:#0b3b65"></i>
                                    </a>
                                </div>
                                <div class="col-md-3"></div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <img alt="" src="{{$courseDetails->image?asset('storage/images/'.$courseDetails->trainer->image):asset('metronic/assets/app/media/img/users/user.png')}}"
                                             style="height: 50px;width: 50px;border-radius: 50%">
                                        <h4 class="py-3 white mr-4"> اسم المدرب:  {{$courseDetails->trainer->name}} </h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="py-3 pull-left white">تقييم الدورة
                                        @php $rating = $ratings; @endphp
                                            @foreach (range(1, 5) as $i)
                                                    @if ($rating > 0)
                                                    <svg fill="none" height="15" viewBox="0 0 9 9" width="15"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.21038 8.00489C7.24543 8.25729 7.09119 8.37648 6.85983 8.25729L4.94582 7.29678C4.71446 7.17759 4.33587 7.17759 4.1045 7.28977L2.18349 8.23626C1.95212 8.34843 1.79788 8.23626 1.83294 7.97685L2.15544 5.85953C2.21153 5.61414 2.09234 5.25658 1.91707 5.06728L0.423726 3.53888C0.241439 3.3566 0.304538 3.1673 0.556935 3.12523L2.66725 2.7817C2.91964 2.73963 3.22813 2.52229 3.34731 2.29093L4.34288 0.397954C4.46206 0.166591 4.65837 0.173602 4.77756 0.397954L5.7591 2.29794C5.87829 2.5293 6.17976 2.74664 6.43216 2.79572L8.54247 3.16029C8.79486 3.20236 8.85796 3.39165 8.67568 3.57394L7.16831 5.09533C6.98602 5.27761 6.86684 5.63517 6.9089 5.88757L7.21038 8.00489Z"
                                                  fill="#f79d1b"></path>
                                            <defs>
                                                <linearGradient gradientUnits="userSpaceOnUse" id="paint0_linear"
                                                                x1="0.31856"
                                                                x2="8.77874" y1="4.26712"
                                                                y2="4.26712">
                                                    <stop stop-color="#FB8B1D"></stop>
                                                    <stop offset="0.59" stop-color="#FBA11A"></stop>
                                                    <stop offset="1" stop-color="#FBAB18"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>

                                                    @else
                                                    <svg fill="none" height="15" viewBox="0 0 9 8" width="15"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M6.78562 7.68573C6.85486 7.96269 6.64714 8.03193 6.43942 7.96269L4.56991 6.99332C4.36219 6.85484 3.94674 6.85484 3.73902 6.99332L1.86951 7.96269C1.66179 8.10117 1.5233 7.96269 1.5233 7.68573L1.86951 5.6085C1.93875 5.33153 1.80027 4.98533 1.66179 4.84685L0.138484 3.2543C-0.0692392 3.11582 1.85519e-06 2.9081 0.207725 2.83886L2.28496 2.49265C2.56192 2.42341 2.83888 2.21569 2.97737 2.00797L3.94674 0.138458C4.08522 -0.0692647 4.2237 -0.0692647 4.36219 0.138458L5.33156 2.00797C5.47004 2.21569 5.74701 2.42341 6.02397 2.49265L8.1012 2.83886C8.37816 2.9081 8.37816 3.04658 8.23968 3.2543L6.78562 4.77761C6.5779 4.98533 6.43942 5.33153 6.50866 5.6085L6.78562 7.68573Z"
                                                         fill="#c1c1c1"></path>
                                                   <defs>
                                                       <radialGradient cx="0" cy="0"
                                                                       gradientTransform="translate(4.1787 3.9857) scale(4.08432)"
                                                                       gradientUnits="userSpaceOnUse"
                                                                       id="paint0_radial"
                                                                       r="1">
                                                           <stop offset="0.3548" stop-color="#DBDBDB"></stop>
                                                           <stop offset="0.5494" stop-color="#D4D4D4"></stop>
                                                           <stop offset="0.823" stop-color="#C2C2C2"></stop>
                                                           <stop offset="0.9946" stop-color="#B3B3B3"></stop>
                                                       </radialGradient>
                                                   </defs>
                                               </svg>
                                                    @endif
                                                    @php $rating--; @endphp
                                                </span>
                                            @endforeach



                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4>عن الدورة</h4>
                            <h4>
                                {!! $courseDetails->description !!}
                            </h4>

                        </div>
                        <div class="card-footer">
                            <h4>شارك في تقييم هذه الدورة</h4>
                            <div class="container">
                                <form class="form-horizontal poststars" action="{{ route('rating', $courseDetails->id) }}"
                                    id="addStar" method="get">
                                    <div class="rating rating--interactive" itemprop="reviewRating" itemscope>
                                        <p class="sr-only">
                                            <meta itemprop="ratingValue" content="1">
                                            Not yet rated
                                        </p>
                                        <button class="mr-5 star" type="radio" value="1" name="star" itemprop="bestRating">
                                            <svg fill="none" height="15" viewBox="0 0 9 8" width="15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.78562 7.68573C6.85486 7.96269 6.64714 8.03193 6.43942 7.96269L4.56991 6.99332C4.36219 6.85484 3.94674 6.85484 3.73902 6.99332L1.86951 7.96269C1.66179 8.10117 1.5233 7.96269 1.5233 7.68573L1.86951 5.6085C1.93875 5.33153 1.80027 4.98533 1.66179 4.84685L0.138484 3.2543C-0.0692392 3.11582 1.85519e-06 2.9081 0.207725 2.83886L2.28496 2.49265C2.56192 2.42341 2.83888 2.21569 2.97737 2.00797L3.94674 0.138458C4.08522 -0.0692647 4.2237 -0.0692647 4.36219 0.138458L5.33156 2.00797C5.47004 2.21569 5.74701 2.42341 6.02397 2.49265L8.1012 2.83886C8.37816 2.9081 8.37816 3.04658 8.23968 3.2543L6.78562 4.77761C6.5779 4.98533 6.43942 5.33153 6.50866 5.6085L6.78562 7.68573Z" fill="#c1c1c1"></path>
                                                <defs>
                                                    <radialGradient cx="0" cy="0" gradientTransform="translate(4.1787 3.9857) scale(4.08432)" gradientUnits="userSpaceOnUse" id="paint0_radial" r="1">
                                                        <stop offset="0.3548" stop-color="#DBDBDB"></stop>
                                                        <stop offset="0.5494" stop-color="#D4D4D4"></stop>
                                                        <stop offset="0.823" stop-color="#C2C2C2"></stop>
                                                        <stop offset="0.9946" stop-color="#B3B3B3"></stop>
                                                    </radialGradient>
                                                </defs>
                                            </svg>
                                            <span><small>1</small></span>
                                        </button>
                                        <button class="mr-2 star" type="radio" value="2" name="star">
                                            <svg fill="none" height="15" viewBox="0 0 9 8" width="15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.78562 7.68573C6.85486 7.96269 6.64714 8.03193 6.43942 7.96269L4.56991 6.99332C4.36219 6.85484 3.94674 6.85484 3.73902 6.99332L1.86951 7.96269C1.66179 8.10117 1.5233 7.96269 1.5233 7.68573L1.86951 5.6085C1.93875 5.33153 1.80027 4.98533 1.66179 4.84685L0.138484 3.2543C-0.0692392 3.11582 1.85519e-06 2.9081 0.207725 2.83886L2.28496 2.49265C2.56192 2.42341 2.83888 2.21569 2.97737 2.00797L3.94674 0.138458C4.08522 -0.0692647 4.2237 -0.0692647 4.36219 0.138458L5.33156 2.00797C5.47004 2.21569 5.74701 2.42341 6.02397 2.49265L8.1012 2.83886C8.37816 2.9081 8.37816 3.04658 8.23968 3.2543L6.78562 4.77761C6.5779 4.98533 6.43942 5.33153 6.50866 5.6085L6.78562 7.68573Z" fill="#c1c1c1"></path>
                                                <defs>
                                                    <radialGradient cx="0" cy="0" gradientTransform="translate(4.1787 3.9857) scale(4.08432)" gradientUnits="userSpaceOnUse" id="paint0_radial" r="1">
                                                        <stop offset="0.3548" stop-color="#DBDBDB"></stop>
                                                        <stop offset="0.5494" stop-color="#D4D4D4"></stop>
                                                        <stop offset="0.823" stop-color="#C2C2C2"></stop>
                                                        <stop offset="0.9946" stop-color="#B3B3B3"></stop>
                                                    </radialGradient>
                                                </defs>
                                            </svg>
                                            <span><small>2</small></span>
                                        </button>
                                        <button class="mr-2 star" type="radio" value="3" name="star">
                                            <svg fill="none" height="15" viewBox="0 0 9 8" width="15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.78562 7.68573C6.85486 7.96269 6.64714 8.03193 6.43942 7.96269L4.56991 6.99332C4.36219 6.85484 3.94674 6.85484 3.73902 6.99332L1.86951 7.96269C1.66179 8.10117 1.5233 7.96269 1.5233 7.68573L1.86951 5.6085C1.93875 5.33153 1.80027 4.98533 1.66179 4.84685L0.138484 3.2543C-0.0692392 3.11582 1.85519e-06 2.9081 0.207725 2.83886L2.28496 2.49265C2.56192 2.42341 2.83888 2.21569 2.97737 2.00797L3.94674 0.138458C4.08522 -0.0692647 4.2237 -0.0692647 4.36219 0.138458L5.33156 2.00797C5.47004 2.21569 5.74701 2.42341 6.02397 2.49265L8.1012 2.83886C8.37816 2.9081 8.37816 3.04658 8.23968 3.2543L6.78562 4.77761C6.5779 4.98533 6.43942 5.33153 6.50866 5.6085L6.78562 7.68573Z" fill="#c1c1c1"></path>
                                                <defs>
                                                    <radialGradient cx="0" cy="0" gradientTransform="translate(4.1787 3.9857) scale(4.08432)" gradientUnits="userSpaceOnUse" id="paint0_radial" r="1">
                                                        <stop offset="0.3548" stop-color="#DBDBDB"></stop>
                                                        <stop offset="0.5494" stop-color="#D4D4D4"></stop>
                                                        <stop offset="0.823" stop-color="#C2C2C2"></stop>
                                                        <stop offset="0.9946" stop-color="#B3B3B3"></stop>
                                                    </radialGradient>
                                                </defs>
                                            </svg>
                                            <span><small>3</small></span>
                                        </button>
                                        <button class="mr-2 star" value="4" type="radio" name="star">
                                            <svg fill="none" height="15" viewBox="0 0 9 8" width="15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.78562 7.68573C6.85486 7.96269 6.64714 8.03193 6.43942 7.96269L4.56991 6.99332C4.36219 6.85484 3.94674 6.85484 3.73902 6.99332L1.86951 7.96269C1.66179 8.10117 1.5233 7.96269 1.5233 7.68573L1.86951 5.6085C1.93875 5.33153 1.80027 4.98533 1.66179 4.84685L0.138484 3.2543C-0.0692392 3.11582 1.85519e-06 2.9081 0.207725 2.83886L2.28496 2.49265C2.56192 2.42341 2.83888 2.21569 2.97737 2.00797L3.94674 0.138458C4.08522 -0.0692647 4.2237 -0.0692647 4.36219 0.138458L5.33156 2.00797C5.47004 2.21569 5.74701 2.42341 6.02397 2.49265L8.1012 2.83886C8.37816 2.9081 8.37816 3.04658 8.23968 3.2543L6.78562 4.77761C6.5779 4.98533 6.43942 5.33153 6.50866 5.6085L6.78562 7.68573Z" fill="#c1c1c1"></path>
                                                <defs>
                                                    <radialGradient cx="0" cy="0" gradientTransform="translate(4.1787 3.9857) scale(4.08432)" gradientUnits="userSpaceOnUse" id="paint0_radial" r="1">
                                                        <stop offset="0.3548" stop-color="#DBDBDB"></stop>
                                                        <stop offset="0.5494" stop-color="#D4D4D4"></stop>
                                                        <stop offset="0.823" stop-color="#C2C2C2"></stop>
                                                        <stop offset="0.9946" stop-color="#B3B3B3"></stop>
                                                    </radialGradient>
                                                </defs>
                                            </svg>
                                            <span><small>4</small></span>
                                        </button>
                                        <button class="mr-2 star" type="radio" value="5" name="star" itemprop="worstRating">
                                            <svg fill="none" height="15" viewBox="0 0 9 8" width="15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.78562 7.68573C6.85486 7.96269 6.64714 8.03193 6.43942 7.96269L4.56991 6.99332C4.36219 6.85484 3.94674 6.85484 3.73902 6.99332L1.86951 7.96269C1.66179 8.10117 1.5233 7.96269 1.5233 7.68573L1.86951 5.6085C1.93875 5.33153 1.80027 4.98533 1.66179 4.84685L0.138484 3.2543C-0.0692392 3.11582 1.85519e-06 2.9081 0.207725 2.83886L2.28496 2.49265C2.56192 2.42341 2.83888 2.21569 2.97737 2.00797L3.94674 0.138458C4.08522 -0.0692647 4.2237 -0.0692647 4.36219 0.138458L5.33156 2.00797C5.47004 2.21569 5.74701 2.42341 6.02397 2.49265L8.1012 2.83886C8.37816 2.9081 8.37816 3.04658 8.23968 3.2543L6.78562 4.77761C6.5779 4.98533 6.43942 5.33153 6.50866 5.6085L6.78562 7.68573Z" fill="#c1c1c1"></path>
                                                <defs>
                                                    <radialGradient cx="0" cy="0" gradientTransform="translate(4.1787 3.9857) scale(4.08432)" gradientUnits="userSpaceOnUse" id="paint0_radial" r="1">
                                                        <stop offset="0.3548" stop-color="#DBDBDB"></stop>
                                                        <stop offset="0.5494" stop-color="#D4D4D4"></stop>
                                                        <stop offset="0.823" stop-color="#C2C2C2"></stop>
                                                        <stop offset="0.9946" stop-color="#B3B3B3"></stop>
                                                    </radialGradient>
                                                </defs>
                                            </svg>
                                        <span><small>5</small></span>
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="container">
                <div class="text-right"><h3 class=""><span>المدرب</span>
                    </h3>
                    <div class="container">
                        <div class="row flex-center">
                            <div class="col-md-4 pt-sm-32pt pt-md-0 d-flex flex-column align-items-center justify-content-center border-left-custom user_instructor-info">
                                <div class="user_instructor-contact text-center">
                                    <div class="mb-16pt instructor__img-rounded"><img
                                            alt="Aya Omar"
                                            class="rounded-circle" src="{{$courseDetails->image?asset('storage/images/'.$courseDetails->trainer->image):asset('metronic/assets/app/media/img/users/user.png')}}" width="100" height="100"></div>
                                    <h3 class="m-0"> {{$courseDetails->trainer->name}}</h3></div>
                            </div>

                            <div class="col-md-8 mb-24pt mb-md-0 for9a-arabic-dir padding-r-50"><p
                                    class="text-70 mb-24pt">  {!! $courseDetails->trainer->description !!}<!-- --> </p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
