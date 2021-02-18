@extends("layouts.admin")
@section("title","عرض تفاصيل الدورة")
@section("name-side")
@endsection
@section("content")
    <div class="m-portlet m-portlet--mobile">
        <form method='post' action='{{route("courses.index")}}'>
            @csrf
            <div class='m-form'>
                <div class="m-portlet__body">
                    <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">القسم</label>
                            <div class="col-lg-6">
                                <input disabled id="name" value="{{ $item->department->name }}" name="name" placeholder="name"
                                       class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">اسم الدورة</label>
                            <div class="col-lg-6">
                                <input disabled id="name" value="{{ $item->name }}" name="name" placeholder="name"
                                       class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">الوصف القصير</label>
                            <div class="col-lg-6">
                                <input disabled id="slug" value="{{ $item->slug }}" name="slug" placeholder="الوصف القصير"
                                       class="form-control" type="text">
                            </div>
                        </div>
                        <div class="m-form__group form-group row">
                            <label class=" col-lg-3 col-form-label">فعال / غير فعال</label>
                            <div class="m-radio-inline col-lg-6">
                                <label class="m-radio m-radio--solid m-radio--brand">
                                    <input disabled {{old('status')=='1'?"checked":""}} type="radio" name="status"
                                           checked="" value="1" aria-describedby="account_group-error"> فعال
                                    <span></span>
                                </label>
                                <label class="m-radio m-radio--solid m-radio--brand">
                                    <input disabled {{old('status')=='0'?"checked":""}} type="radio" name="status"
                                           value="0"> غير
                                    فعال
                                    <span></span>
                                </label>
                            <!-- <input disabled {{$item->status?"checked":""}} type="checkbox" name="status" /> -->
                            </div>
                            <span class="m-form__help"></span>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">رابط التسجيل</label>
                            <div class="col-lg-6">
                                <input disabled id="link" value="{{ $item->link }}" name="link" placeholder="رابط التسجيل"
                                       class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">التفاصيل</label>
                            <div class="col-lg-6">
                            <textarea disabled id="description" rows='8' name="description" placeholder="أدخل التفاصيل"
                                      class="form-control">{!! substr(strip_tags($item->description), 0, 150) !!}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <a href='{{ route("courses.edit",$item->id) }}' class="btn btn-primary">تعديل</a>
                                <a href="{{asset('admin/courses')}}" class="btn btn-secondary">الغاء الامر</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
