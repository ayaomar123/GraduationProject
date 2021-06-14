@extends('layouts.frontlayout.frontpage')
@section('style')
    <style>
        .myaya10{
            background-image:url("{{$departmentDetails->image?asset('storage/images/'.$departmentDetails->image):asset('assets/images/noor10.jpg')}}");
            background-size: cover;
            background-repeat: no-repeat;
            height: 400px;
        }
    </style>
@endsection
@section('content')
    <div class="text-center myaya10">
        <div class="">
            <h4 class="btn"
                style="margin-top: 140px;background-color: #0b3b65;color: white">{{$departmentDetails->name}}</h4>
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
                            <li class="nav-item"><a
                                    class="mt-4 nav-link d-flex align-items-center justify-content-between"
                                    href="#"
                                    style="background-color: #0b3b65;color: white"><span>تعريف {{$departmentDetails->name}}</span><span
                                        class="badge badge-secondary"></span></a>
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link d-flex align-items-center justify-content-between"
                                    href="#compId"><span>صفات المهندس الناجج</span><span
                                        class="badge badge-secondary"></span></a>
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link d-flex align-items-center justify-content-between"
                                    href="#compAdj"><span>إيجابيات دراسة التخصص</span><span
                                        class="badge badge-secondary"></span></a>
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link d-flex align-items-center justify-content-between"
                                    href="#compDis"><span>سلبيات دراسة التخصص</span><span
                                        class="badge badge-secondary"></span></a>
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link d-flex align-items-center justify-content-between"
                                    href="#compField"><span>مجالات العمل</span><span
                                        class="badge badge-secondary"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
            <div class="col-md-9">
                <div class="text-right">
                    <div class=" mr-2 mt-3">
                        <div>
                            <h2 id="compId" style="color: #0b3b65">تعريف {{$departmentDetails->name}}</h2>
                            <h4>
                                {!! $departmentDetails->definition !!}
                            </h4>
                        </div>
                        <br>
                        <div>
                            <h2 id="compAdj" style="color: #0b3b65">صفات المهندس الناجح</h2>
                            <h4>
                                {!! $departmentDetails->qualities !!}
                            </h4>
                        </div>

                        <div>
                            <h2 id="compDis" style="color: #0b3b65">إيجابيات دراسة التخصص</h2>
                            <h4>
                                {!! $departmentDetails->advantages !!}
                            </h4>
                        </div>
                        <div>
                            <h2 id="compField" style="color: #0b3b65">سلبيات دراسة التخصص</h2>
                            <h4>
                                {!! $departmentDetails->disadvantages !!}
                            </h4>
                        </div>

                        <div>
                            <h2 id="comp" style="color: #0b3b65">مجالات العمل</h2>
                            <h4>
                                {!! $departmentDetails->workfields !!}
                            </h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
