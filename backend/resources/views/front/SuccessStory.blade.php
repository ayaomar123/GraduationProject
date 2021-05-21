@extends('layouts.frontlayout.frontpage')
@section('style')
    <style>
        @media screen and (max-width: 600px) {
            .btn{
                margin-left: 350px;
            }
            .myaya{
                width: 200%;
            }
            video{
                width: 330px;

            }
            .card-body{
                padding: 0px;
            }
            .card.border{
                margin-top: -50px;
            }

        }
    </style>
@endsection
@section('content')
    <div class="text-center myaya">
        <div class="">
            <h4 class="btn" style="margin-top: 90px;background-color: #0b3b65;color: white">قصص النجاح</h4>
        </div>
    </div>
    <div class="container">
        <div class="text-right mt-3">
            <p class="text-right mt-5" style="color: #0b3b65">هناك العديد من قصص النجاح والأمثلة لأشخاص فشلوا في بداية حيواتهم وحققوا بعد ذلك نجاح لم يتوقعه أحد، ويوجد الكثير من هؤلاء الأشخاص استطاعوا تغيير العالم الى الأفضل ومنح الأمل للكثير من الناس حول قصصهم التي سوف تمدك بحماس شديد، ونقصد بالفشل هنا العائق الذي منعهم من مواصلة مشوارهم في الحياة أيًا كان هذا العائق، فقد أثبت هؤلاء الأشخاص قدرة الإنسان على تخطي الصعاب مهما كانت العوائق، وفي هذا المقال نقدم لكم 5 قصص تحفيزية لأشخاص استطاعوا التغّلب على عوائقهم بصورة مدهشة   </p>
            <p class="mt-0">
                <br>
            </p>
        </div>
        <div class="row pb-1">
            <div class="col-lg-7 mb-4 text-right">
                <div class="card border-0 mb-2">
                    <a href="#">
                        <video style="margin-left: 50px" width="520" height="240" autoplay controls>
                            <source src="{{asset('assets/comp.mp4')}}" type="video/mp4">
                        </video>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 mb-4 text-right">
                <div class="card border">
                    <div class="card-body">
                        <h4 class="w-100  text-center py-2">كلية الهندسة- قسم هندسة الحاسوب</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-1">
            <div class="col-lg-7 mb-4 text-right">
                <div class="card border-0 mb-2">
                    <a href="#">
                        <video style="margin-left: 50px" width="520" height="240" controls>
                            <source src="{{asset('assets/elec.mp4')}}" type="video/mp4">
                        </video>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 mb-4 text-right">
                <div class="card border ">
                    <div class="card-body">
                    <h4 class="w-100 text-center py-2">كلية الهندسة - قسم الهندسة الكهربائية</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-1">
            <div class="col-lg-7 mb-4 text-right">
                <div class="card border-0 mb-2">
                    <a href="#">
                        <video style="margin-left: 50px" width="520" height="240" controls>
                            <source src="{{asset('assets/civil.mp4')}}" type="video/mp4">
                        </video>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 mb-4 text-right">
                <div class="card border">
                    <div class="card-body">
                    <h4 class="w-100 btn text-center py-2">كلية الهندسة - قسم الهندسة المدنية</h4>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
