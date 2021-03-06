@extends("layouts.admin")
@section("title"," إضافة مدرب ")

@section("title-side")

@endsection

@section("js")
<script src="{{ asset('metronic/assets/demo/default/custom/crud/forms/widgets/summernote.js') }}" type="text/javascript"></script>

@endsection
@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype='multipart/form-data' method="post" action='{{route("trainers.index")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">اسم المدرب</label>
                        <div class="col-lg-6">
                            <input id="name" value="{{ old('name') }}" name="name" placeholder="اسم المدرب"
                                class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الصورة الشخصية</label>
                        <div class="col-lg-6">
                            <input multiple id="file" name="image" type='file' class="form-control">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الايميل</label>
                        <div class="col-lg-6">
                            <input id="email" value="{{ old('email') }}" name="email" placeholder="الايميل"class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">رقم الجوال</label>
                        <div class="col-lg-6">
                            <input id="phone" value="{{ old('phone') }}" name="phone" placeholder="رقم الجوال"
                                   class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">التفاصيل</label>
                        <div class="col-lg-6">
                            <textarea id="description" rows='8' name="description" placeholder="أدخل التفاصيل"
                                class="form-control summernote">{{old("description")}}</textarea>
                        </div>
                    </div>

                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary">اضافة</button>
                            <a href="{{asset('admin/trainers')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
