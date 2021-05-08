@extends("layouts.frontlayout.frontpage")
@section("title","الملف الشخصي")
@section('style')
    <style>
        .m-tabs-line .m-tabs__link {
            font-size: 16px;
        }
    </style>
@endsection

@section("content")
    <div class="container mt-5 text-right" style="padding-bottom: 50px;padding-top: 70px">
        <div class="card">
            <h3 class="text-right py-3 pr-3 " style="background-color: #0b3b65;color: white">الملف الشخصي</h3>
            <div class="m-grid__item m-grid__item--fluid m-wrapper">

                <div class="m-content mb-5">

                    <div class="row">

                        <div class="col-xl-12">
                            <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-tools">
                                        <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary"
                                            role="tablist">
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link active show" data-toggle="tab"
                                                   href="#m_user_profile_tab_1" role="tab" aria-selected="true">
                                                    <i class="flaticon-share m--hide"></i>
                                                    عرض الملف الشخصي
                                                </a>
                                            </li>
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link" data-toggle="tab"
                                                   href="#m_user_profile_tab_2" role="tab" aria-selected="false">
                                                    تعديل الملف الشخصي
                                                </a>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="m_user_profile_tab_1">
                                        <div class="m-portlet__body">
                                            <div class="row">

                                                <div class="col-12">
                                                    <h3 class="pb-3 mr-3 mt-3"
                                                        style=" margin: 0; color: #7b7e8a; padding-bottom: 15px !important;">
                                                        الملف الشخصي</h3>
                                                </div>
                                            </div>
                                            <div class="row m-form mr-3">
                                                <label for="" class="col-3 col-form-label">اسم المستخدم:</label>
                                                <div class="col-7">
                                                    <label class="col-form-label">{{auth()->user()->name??""}}</label>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="row m-form mr-3">
                                                <label class="col-3 col-form-label">الصورة الشخصية:</label>
                                                <div class="col-7">
                                                    @auth()
                                                    <img src="{{$user->image?asset('storage/images/'.$user->image):asset('assets/images/noor10.jpg')}}"
                                                         style="width:auto; height:200px;">
                                                    @endauth
                                                </div>
                                            </div>

                                            <div class="row m-form mr-3">
                                                <label for="" class="col-3 col-form-label">رقم الهاتف المحمول:</label>
                                                <div class="col-7">
                                                    <label class="col-form-label">{{$user->phone??''}}</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane" id="m_user_profile_tab_2">
                                        <form class="m-form m-form--fit" method="post" action="{{route('myprofile.update')}}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @method("put")
                                            <div class="m-portlet__body mr-3 mt-3">

                                                <div class="form-group m-form__group row">
                                                    <div class="col-12">
                                                        <h3 class="m-form__section">تعديل الملف الشخصي</h3>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">اسم المستخدم</label>
                                                    <div class="col-7">
                                                        <input class="form-control m-input" type="text"
                                                               value="{{old('name',$user->name)}}"
                                                               name="name">
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">تغيير الصورة</label>
                                                    <div class="col-7">
                                                        <img src="{{asset('storage/images/'.$user->image)}}"
                                                             style="width:auto; height:100px;" id="display_user_image"/>
                                                        <br>
                                                        <input class="form-control m-input" type="file" id="user_image" name="image">
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label"> رقم الهاتف المحمول:</label>
                                                    <div class="col-7">
                                                        <input class="form-control m-input" type="text"
                                                               value="{{old('phone',$user->phone)}}"
                                                               name="phone">
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="m-portlet__foot m-portlet__foot--fit">
                                                <div class="m-form__actions">
                                                    <div class="row">
                                                        <div class="col-2">
                                                        </div>
                                                        <div class="col-7">
                                                            <button type="submit" class="btn" style="background-color: #0b3b65;color: white">تعديل الملف
                                                                الشخصي
                                                            </button>&nbsp;&nbsp;
                                                            <a href="{{route('myprofile.edit')}}" class="btn btn-email m-btn ">الغاء
                                                                الأمر</a>
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
            </div>
        </div>
    </div>
@endsection



@section('js')
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#display_user_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#user_image").change(function () {
            readURL(this);
        });
    </script>
@endsection
