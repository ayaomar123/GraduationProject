@extends("layouts.admin")
@section("name","تعديل صفحة ثابتة")

@section("name-side")

@endsection

@section("js")
    <script>
        $(".summernote").summernote({height:200})
    </script>
@endsection
@section("content")
    <div class="m-portlet m-portlet--mobile">
        <form enctype="multipart/form-data" method='post' action=" {{asset ('admin/departments/'.$item->id)}}">
            @csrf
            @method("put")
            <div class='m-form'>
                <div class="m-portlet__body">
                    <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">العنوان</label>
                            <div class="col-lg-6">
                                <input id="name" value="{{ old('name',$item->name) }}" name="name" placeholder="name"
                                       class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">الوصف القصير</label>
                            <div class="col-lg-6">
                                <input id="slug" value="{{ old('slug',$item->slug) }}" name="slug"
                                       placeholder="الوصف القصير" class="form-control" type="text">
                            </div>
                        </div>
                    <!-- <input {{$item->status?"checked":""}} type="checkbox" name="status" /> -->
                        <div class="m-form__group form-group row">
                            <label class=" col-lg-3 col-form-label">فعال / غير فعال</label>
                            <div class="m-radio-inline col-lg-6">
                                <label class="m-radio m-radio--solid m-radio--brand">
                                    <input {{$item->status=='1'?"checked":""}} type="radio" name="status" checked=""
                                           value="1" aria-describedby="account_group-error"> فعال
                                    <span></span>
                                </label>
                                <label class="m-radio m-radio--solid m-radio--brand">
                                    <input {{$item->status=='0'?"checked":""}} type="radio" name="status" value="0"> غير
                                    فعال
                                    <span></span>
                                </label>
                            </div>
                            <span class="m-form__help"></span>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">تعريف {{ $item->name }}</label>
                            <div class="col-lg-6">
                            <textarea  id="definition" rows='8' name="definition" placeholder="أدخل التفاصيل"
                                      class="form-control summernote">{!! $item->definition !!}</textarea>
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">صفات المهندس الناجح</label>
                            <div class="col-lg-6">
                            <textarea  id="qualities" rows='8' name="qualities" placeholder="أدخل التفاصيل"
                                      class="form-control summernote">{!! $item->qualities !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">إيجابيات دراسة التخصص</label>
                            <div class="col-lg-6">
                            <textarea  id="advantages" rows='8' name="advantages" placeholder="أدخل التفاصيل"
                                      class="form-control summernote">{!! $item->advantages !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">سلبيات دراسة التخصص</label>
                            <div class="col-lg-6">
                            <textarea  id="disadvantages" rows='8' name="disadvantages" placeholder="أدخل التفاصيل"
                                      class="form-control summernote">{!! $item->disadvantages !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">مجالات العمل</label>
                            <div class="col-lg-6">
                            <textarea id="workfields" rows='8' name="workfields" placeholder="أدخل التفاصيل"
                                      class="form-control summernote">{!! $item->workfields !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">الصورة</label>
                            <div class="col-lg-6">
                                <input type='file' class="form-control" name="image" id="image" />
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
                                <button class="btn btn-primary" type="submit">تحديث</button>
                                <a href="{{asset('admin/departments')}}" class="btn btn-secondary">الغاء الامر</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
