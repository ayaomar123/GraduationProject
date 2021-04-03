@extends('layouts.frontlayout.frontpage')
@section('content')
 <!-- page content start -->
 <div id="content pt-5">
    <div id="">
        <div class="text-center myaya2">
            <div class="">
                <h4 class="btn" style="margin-top: 40px;margin-left: 900px">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{asset('')}}">الرئيسية</a></li>
                            <li aria-current="page" class="breadcrumb-item active">اتصل بنا</li>
                        </ol>
                    </nav>
                </h4>
            </div>

        </div>
        <div id="contact" class="container">
            <div class="row text-center">
                <div class="col-md-8">
                        <div class="mt-5 text-center py-2 mb-5" style="background-color: #0b3b65;color:white">
                            <h3>نحن هنا من أجل الطالب</h3>
                        </div>
                    <h3 class="text-right mb-5">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, alias cum enim minima mollitia, numquam praesentium provident quaerat quos saepe similique unde, voluptate voluptatibus. A accusamus ad atque, cupiditate enim eos fuga, incidunt ipsa itaque laudantium magni odit temporibus vitae! Aut, culpa error provident quam sapiente sint ullam velit voluptates?
                    </h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <!--begin::Portlet-->
                                <div class="m-portlet m-portlet--tab">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>

                                            </div>
                                        </div>
                                    </div>

                                    <!--begin::Form-->
                                    <form class="mb-5 m-form m-form--fit m-form--label-align-right text-right" method="post" action='{{route("msg.index")}}'>
                                        @csrf
                                        <div class="m-portlet__body">
                                            <div class="form-group m-form__group">
                                                <label for="exampleInputPassword1">الاسم</label>
                                                <input name="name" type="text" class="form-control m-input m-input--square" id="exampleInputPassword1" placeholder="أدخل اسمك">
                                            </div>
                                            <div class="form-group m-form__group">
                                                <label for="exampleInputEmail1">البريد الإلكتروني</label>
                                                <input name="email" type="email" class="form-control m-input m-input--square" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="أدخل بريدك الإلكتروني">
                                            </div>
                                            <div class="form-group m-form__group">
                                                <label for="exampleInputPassword1">الرسالة:</label>
                                                <textarea name="myMsg" class="form-control m-input m-input--square" id="exampleInputPassword1">
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="m-portlet__foot m-portlet__foot--fit">
                                            <div class="m-form__actions">
                                                <button type="submite" class="btn col-2" style="background-color: #0b2a41;color: white">إرسال</button>
                                                <a href="#" class="btn btn-secondary col-2">إلغاء</a>
                                            </div>
                                        </div>
                                    </form>

                                    <!--end::Form-->
                                </div>

                                <!--end::Portlet-->

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <section class="bar mb-0">
                        <div class="card">
                            <div class="card-header" style="color: white">
                                <h3 class="">عنواننا</h3>
                            </div>
                            <div class="card-body">
                                <p class="text-sm">الجامعة الإسلامية<br>كلية الهندسة<br>مبنى القدس<br>الطابق الخامس<br><strong>K315</strong></p>
                                <h3 class="text-uppercase">أو تواصل معنا عبر</h3>
                                <p class="text-muted text-sm">كن على ثقة أننا هنا من أجلك</p>
                                <ul class="text-sm list-unstyled">
                                    <li><strong><a style="color: #0b3b65" href="#">:جوال</a></strong> 0592309501</li>
                                    <li ><strong><a style="color: #0b3b65" href="mailto:">computer@engineer.com</a></strong></li>

                                </ul>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
