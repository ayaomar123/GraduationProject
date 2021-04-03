@extends("layouts.admin")
@section("name","عرض")
@section("name-side")
@endsection

@section("content")
    <div class="m-portlet m-portlet--mobile">
        <form method='post' action='{{route("departments.index")}}'>
            @csrf
            <div class='m-form'>
                <div class="m-portlet__body">
                    <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">العنوان</label>
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
                            <label class="col-lg-3 col-form-label">تعريف الكلية</label>
                            <div class="col-lg-6">
                            <textarea disabled id="definition" rows='8' name="definition" placeholder="أدخل التفاصيل"
                                      class="form-control ">{!! $item->definition !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">صفات المهندس الناجح</label>
                            <div class="col-lg-6">
                            <textarea disabled id="qualities" rows='8' name="qualities" placeholder="أدخل التفاصيل"
                                      class="form-control summernote">{!! $item->qualities !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">إيجابيات دراسة التخصص</label>
                            <div class="col-lg-6">
                            <textarea disabled id="advantages" rows='8' name="advantages" placeholder="أدخل التفاصيل"
                                      class="form-control summernote">{!! $item->advantages !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">سلبيات دراسة التخصص</label>
                            <div class="col-lg-6">
                            <textarea disabled id="disadvantages" rows='8' name="disadvantages" placeholder="أدخل التفاصيل"
                                      class="form-control summernote">{!! $item->disadvantages !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">مجالات العمل</label>
                            <div class="col-lg-6">
                            <textarea disabled id="workfields" rows='8' name="workfields" placeholder="أدخل التفاصيل"
                                      class="form-control summernote">{!! $item->workfields !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">الصورة</label>
                            <div class="col-lg-6">
                                <input disabled type='file' class="form-control" name="image" id="image" />
                                @if($item->image)
                                    <hr>
                                    <img style='max-width:250px' src='{{asset("storage/images/$item->image")}}' />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <a href='{{ route("departments.edit",$item->id) }}' class="btn btn-primary">تعديل</a>
                                <a href="{{asset('admin/departments')}}" class="btn btn-secondary">الغاء الامر</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
