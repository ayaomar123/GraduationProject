@extends("layouts.admin")
@section("title","تعديل تفاصيل الدورة")

@section("name-side")

@endsection

@section("js")
    <script>
        $(".summernote").summernote({height:400})
    </script>
@endsection
@section("content")
    <div class="m-portlet m-portlet--mobile">
        <form enctype="multipart/form-data" method='post' action=" {{asset ('admin/courses/'.$item->id)}}">
            @csrf
            @method("put")
            <div class='m-form'>
                <div class="m-portlet__body">
                    <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">القسم </label>
                            <div class="col-lg-6">
                                <select class="form-control chosen-rtl select" name='department_id' id='department_id'>
                                    <option selected>-اختر القسم-</option>
                                    @foreach($departments as $department)
                                        <option
                                            {{$department->id==$item->id?'selected':''}} value='{{$department->id}}'>
                                            {{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label"> اسم الدورة</label>
                            <div class="col-lg-6">
                                <input id="title" value="{{ old('name',$item->name) }}" name="name" placeholder="أدخل اسم الدورة"
                                       class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">الوصف القصير</label>
                            <div class="col-lg-6">
                                <input id="slug" value="{{ old('name',$item->slug) }}" name="slug" placeholder="الوصف القصير"
                                       class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">الصورة</label>
                            <div class="col-lg-6">
                                <input id="image" value="value="{{ old('name',$item->name) }}"" name="image"
                                       class="form-control" type="file">
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
                            <label class="col-lg-3 col-form-label">اسم المدرب </label>
                            <div class="col-lg-6">
                                <select class="form-control chosen-rtl select" name='trainer_id' id='trainer_id'>
                                    <option selected>- اسم المدرب -</option>
                                    @foreach($trainers as $trainer)
                                        <option
                                            {{$trainer->id==$item->id?'':'selected'}} value='{{$trainer->id}}'>
                                            {{$trainer->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">التكلفة</label>
                            <div class="col-lg-6">
                                <input id="cost" value="{{ old('name',$item->cost) }}"name="cost" placeholder="أدخل سعر الدورة"
                                       class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">عدد ساعات الدورة</label>
                            <div class="col-lg-6">
                                <input id="hours"value="{{ old('name',$item->hours) }}" name="hours" placeholder="أدخل عدد ساعات الدورة"
                                       class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">التفاصيل</label>
                            <div class="col-lg-6">
                            <textarea id="details" rows='8' name="description" placeholder="أدخل التفاصيل"
                                      class="form-control summernote">{{old("description",$item->description)}}</textarea>
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
                                <a href="{{asset('admin/courses')}}" class="btn btn-secondary">الغاء الامر</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
