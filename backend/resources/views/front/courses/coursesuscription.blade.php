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
                    <div class="card-header">
                        <h3 class="text-right white">{{$subscription->name}}</h3>
                    </div>
                    <h3 class="alert-danger text-right py-2 pr-5">املأ بياناتك لتتمكن من التسجيل في الدورة بنجاح</h3>

                    <div class="card mt-3 mr-3">
                        <div class="m-portlet m-portlet--mobile">
                            <form enctype='multipart/form-data' method="post" action='{{asset("getCourses/subscription/$subscription->name")}}'>
                                @csrf
                                <div class='m-form'>
                                    <div class="m-portlet__body">
                                        <div class="m-form__section m-form__section--first">
                                            <div class="form-group m-form__group row mt-4 ml-4">
                                                <label class="col-lg-3 col-form-label">الاسم كاملاً</label>
                                                <div class="col-lg-9">
                                                    <input type="hidden" name="course_id" value="{{$subscription->id}}">
                                                    @auth()
                                                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                                    @endauth


                                                    <input id="name" value="{{ auth()->user()?auth()->user()->name:"" }}" name="name"
                                                           placeholder="الاسم كاملاً"
                                                           class="form-control" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row mt-4 ml-4">
                                                <label class="col-lg-3 col-form-label">الايميل</label>
                                                <div class="col-lg-9">
                                                    <input id="email" value="{{ auth()->user()?auth()->user()->email:"" }}" name="email"
                                                           placeholder="الايميل" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row mt-4 ml-4">
                                                <label class="col-lg-3 col-form-label">رقم الجوال</label>
                                                <div class="col-lg-9">
                                                    <input id="phone" value="{{ old('phone') }}" name="phone"
                                                           placeholder="رقم الجوال"
                                                           class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row mt-4 ml-4">
                                                <label class="col-lg-3 col-form-label">ملاحظاتك</label>
                                                <div class="col-lg-9">
                                                    <textarea id="notes" rows='8' name="notes" placeholder="أدخل ملاحظاتك"
                                                        class="form-control summernote">{{old("notes")}}</textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="m-portlet__foot m-portlet__foot--fit mb-4 ml-4">
                                        <div class="m-form__actions m-form__actions">
                                            <div class="row">
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-9">
                                                    <button type="submit" class="btn"
                                                            style="background-color: #0b3b65;color: white">اضافة
                                                    </button>
                                                    <a href="{{asset('admin/trainers')}}" class="btn btn-secondary">الغاء
                                                        الامر</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
