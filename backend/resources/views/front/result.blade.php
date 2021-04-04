@extends('layouts.frontlayout.frontpage')
@section('content')
<!-- choose start -->
<div class="content pt-5">
    <div class="container text-center">
        <div class="row mt-5">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('assets/images/man.jpg')}}" width="70%" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header white"><h3>تهــــــانــيــنــا ! </h3></div>
                    <div class="mycard card-body" style="color:#0b3b65;">
                        <h3>لقد حصلت على :</h3>

                        <h3 style="color: #e03168">نسبة {{$aya / ($answers->count())}}% في تخصص الحاسوب</h3>

                        <br>
                        <h3>لقد قدمت نموذجاً رائعاً لمهارتك</h3>
                        <br>
                        <h3>نتمنى لك التوفيق طالبنا العزيز</h3>
                        <br>
                        <h3><a class="btn btn-outline-danger" href="computer.html">اقرأ المزيد عن هذا التخصص</a>
                        </h3>
                    </div>

                </div>
            </div>
            <div class="col-md-1"></div>

        </div>
        <div class="row mt-5">
        </div>
    </div>
</div>
<!-- about start -->

@endsection
