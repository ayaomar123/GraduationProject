@extends("layouts.admin")
@section("title","الملف الشخصي")
@section('css')
<style>
.m-tabs-line .m-tabs__link {
    font-size: 16px;
}
</style>
@endsection

@section("content")
<div class="row">

    <div class="col-xl-12">
        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
            <div class="m-portlet__head">
                <div class="m-portlet__head-tools">
                    <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link active show" data-toggle="tab" href="#m_user_profile_tab_1"
                                role="tab" aria-selected="true">
                                <i class="flaticon-share m--hide"></i>
                                عرض الملف الشخصي
                            </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2" role="tab"
                                aria-selected="false">
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
                                <h3 class="pb-3" style=" margin: 0; color: #7b7e8a; padding-bottom: 15px !important;">
                                    الملف الشخصي</h3>
                            </div>
                        </div>
                        <div class="row m-form">
                            <label for="" class="col-3 col-form-label">اسم المستخدم:</label>
                            <div class="col-7">
                                <label class="col-form-label">{{$user->name}}</label>
                            </div>
                        </div>

                        <br>
                        <div class="row m-form">
                            <label class="col-3 col-form-label">الصورة الشخصية:</label>
                            <div class="col-7">
                                <image src="{{asset('storage/user-images/'.$user->image)}}"
                                    style="width:auto; height:200px;" />
                            </div>
                        </div>
                        @if(!empty($user->customer))
                        <div class="row m-form">
                            <label for="" class="col-3 col-form-label">المدينة:</label>
                            <div class="col-7">
                                <label class="col-form-label">{{$user->customer->city??''}}</label>
                            </div>
                        </div>
                        <div class="row m-form">
                            <label for="" class="col-3 col-form-label">العنوان:</label>
                            <div class="col-7">
                                <label class="col-form-label">{{$user->customer->address??''}}</label>
                            </div>
                        </div>
                        <div class="row m-form">
                            <label for="" class="col-3 col-form-label">رقم الهاتف المحمول:</label>
                            <div class="col-7">
                                <label class="col-form-label">{{$user->customer->mobile??''}}</label>
                            </div>
                        </div>
                        <div class="row m-form">
                            <label for="" class="col-3 col-form-label">رقم الهاتف:</label>
                            <div class="col-7">
                                <label class="col-form-label">{{$user->customer->phone??''}}</label>
                            </div>
                        </div>
                        @endif



                    </div>

                </div>
                <div class="tab-pane" id="m_user_profile_tab_2">
                    <form class="m-form m-form--fit" method="post" action="{{route('profile.update')}}"
                        enctype="multipart/form-data">
                        @csrf
                        @method("put")
                        <div class="m-portlet__body">

                            <div class="form-group m-form__group row">
                                <div class="col-12">
                                    <h3 class="m-form__section">تعديل الملف الشخصي</h3>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">اسم المستخدم</label>
                                <div class="col-7">
                                    <input class="form-control m-input" type="text" value="{{old('name',$user->name)}}"
                                        name="name">
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">تغيير الصورة</label>
                                <div class="col-7">
                                    <image src="{{asset('storage/user-images/'.$user->image)}}"
                                        style="width:auto; height:100px;" id="display_user_image" />
                                    <br>
                                    <input class="form-control m-input" type="file" id="user_image" name="image">
                                </div>
                            </div>
                            @if(!empty($user->customer))
                            <input class="" type="hidden" value="{{$user->customer->id}}" name="id">
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">اسم المستخدم</label>
                                <div class="col-7">
                                    <input class="form-control m-input" type="text"
                                        value="{{old('city',$user->customer->city)}}" name="city">
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">اسم المستخدم</label>
                                <div class="col-7">
                                    <input class="form-control m-input" type="text"
                                        value="{{old('address',$user->customer->address)}}" name="address">
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">اسم المستخدم</label>
                                <div class="col-7">
                                    <input class="form-control m-input" type="text"
                                        value="{{old('mobile',$user->customer->mobile)}}" name="mobile">
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">اسم المستخدم</label>
                                <div class="col-7">
                                    <input class="form-control m-input" type="text"
                                        value="{{old('phone',$user->customer->phone)}}" name="phone">
                                </div>
                            </div>
                            @endif



                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions">
                                <div class="row">
                                    <div class="col-2">
                                    </div>
                                    <div class="col-7">
                                        <button type="submit" class="btn btn-accent ">تعديل الملف
                                            الشخصي</button>&nbsp;&nbsp;
                                        <a href="{{route('profile.edit')}}" class="btn btn-secondary m-btn ">الغاء
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
@endsection



@section('js')
<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#display_user_image').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#user_image").change(function() {
    readURL(this);
});
</script>
@endsection