@extends("layouts.admin")
@section("title"," إضافة منحة جديد")

@section("title-side")

@endsection

@section("js")
    <script src="{{ asset('metronic/assets/demo/default/custom/crud/forms/widgets/summernote.js') }}" type="text/javascript"></script>

@endsection
@section("content")
    <div class="m-portlet m-portlet--mobile">
        <form enctype='multipart/form-data' method="post" action='{{route("scholarships.index")}}'>
            @csrf
            <div class='m-form'>
                <div class="m-portlet__body">
                    <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">عنوان المنحة</label>
                            <div class="col-lg-6">
                                <input id="title" value="{{ old('name') }}" name="name" placeholder="أدخل اسم المنحة"
                                       class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">الوصف القصير</label>
                            <div class="col-lg-6">
                                <input id="slug" value="{{ old('slug') }}" name="slug" placeholder="الوصف القصير"
                                       class="form-control" type="text">
                            </div>
                        </div>
                        <div class="m-form__group form-group row">
                            <label class=" col-lg-3 col-form-label">فعال / غير فعال</label>
                            <div class="m-radio-inline col-lg-6">
                                <label class="m-radio m-radio--solid m-radio--brand">
                                    <input {{old('status')=='1'?"checked":""}} type="radio" name="status" checked=""
                                           value="1" aria-describedby="account_group-error"> فعال
                                    <span></span>
                                </label>
                                <label class="m-radio m-radio--solid m-radio--danger">
                                    <input {{old('status')=='0'?"checked":""}} type="radio" name="status" value="0"> غير
                                    فعال
                                    <span></span>
                                </label>
                            </div>
                            <span class="m-form__help"></span>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">الصورة</label>
                            <div class="col-lg-6">
                                <input id="image" value="{{ old('image') }}" name="image"
                                       class="form-control" type="file">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">نسبة تغطية المنحة من الرسوم %</label>
                            <div class="col-lg-6">
                                <input id="percent" value="{{ old('percent') }}" name="percent"
                                       placeholder="نسبة تغطية المنحة من الرسوم %"
                                       class="form-control" type="number">
                            </div>
                        </div>
                        <div class="m-form__group form-group row">
                            <label class=" col-lg-3 col-form-label">داخلية /خارجية</label>
                            <div class="m-radio-inline col-lg-6">
                                <label class="m-radio m-radio--solid m-radio--brand">
                                    <input {{old('internal')=='1'?"internal":""}} type="radio" name="internal" checked=""
                                           value="1" aria-describedby="account_group-error"> داخلية
                                    <span></span>
                                </label>
                                <label class="m-radio m-radio--solid m-radio--danger">
                                    <input {{old('internal')=='0'?"external":""}} type="radio" name="internal" value="0">خارجية
                                    <span></span>
                                </label>
                            </div>
                            <span class="m-form__help"></span>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">رابط التسجيل</label>
                            <div class="col-lg-6">
                                <input id="title" value="{{ old('link') }}" name="link" placeholder="رابط التسجيل"
                                       class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">آخر موعد للتقديم</label>
                            <div class="col-lg-6">
                                <input id="last_Day" value="{{ old('last_Day') }}" name="last_Day" placeholder="رابط التسجيل"
                                       class="form-control" type="date">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">التفاصيل</label>
                            <div class="col-lg-6">
                            <textarea id="details" rows='8' name="description" placeholder="أدخل التفاصيل"
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
                                <a href="{{asset('admin/scholarships')}}" class="btn btn-secondary">الغاء الامر</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
