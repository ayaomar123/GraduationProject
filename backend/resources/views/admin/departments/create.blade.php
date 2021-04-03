@extends("layouts.admin")
@section("title"," إضافة قسم جديد")

@section("title-side")

@endsection

@section("js")
    <script src="{{ asset('metronic/assets/demo/default/custom/crud/forms/widgets/summernote.js') }}" type="text/javascript"></script>

@endsection
@section("content")
    <div class="m-portlet m-portlet--mobile">
        <form enctype='multipart/form-data' method="post" action='{{route("departments.index")}}'>
            @csrf
            <div class='m-form'>
                <div class="m-portlet__body">
                    <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">القسم</label>
                            <div class="col-lg-6">
                                <input id="title" value="{{ old('name') }}" name="name" placeholder="أدخل اسم القسم"
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
                            <label class="col-lg-3 col-form-label">تعريف الكلية</label>
                            <div class="col-lg-6">
                            <textarea id="definition" rows='8' name="definition" placeholder="أدخل التفاصيل"
                                      class="form-control summernote">{{old("definition")}}</textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">صفات المهندس الناجح</label>
                            <div class="col-lg-6">
                            <textarea id="qualities" rows='8' name="qualities" placeholder="أدخل التفاصيل"
                                      class="form-control summernote">{{old("qualities")}}</textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">إيجابيات دراسة التخصص</label>
                            <div class="col-lg-6">
                            <textarea id="advantages" rows='8' name="advantages" placeholder="أدخل التفاصيل"
                                      class="form-control summernote">{{old("advantages")}}</textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">سلبيات دراسة التخصص</label>
                            <div class="col-lg-6">
                            <textarea id="disadvantages" rows='8' name="disadvantages" placeholder="أدخل التفاصيل"
                                      class="form-control summernote">{{old("disadvantages")}}</textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">مجالات العمل</label>
                            <div class="col-lg-6">
                            <textarea id="workfields" rows='8' name="workfields" placeholder="أدخل التفاصيل"
                                      class="form-control summernote">{{old("workfields")}}</textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">الصورة</label>
                            <div class="col-lg-6">
                                <input multiple id="file" name="image" type='file' class="form-control">
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
                                <a href="{{asset('admin/departments')}}" class="btn btn-secondary">الغاء الامر</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
