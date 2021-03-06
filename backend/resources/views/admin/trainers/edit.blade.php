@extends("layouts.admin")
@section("title","تعديل التفاصيل")

@section("title-side")

@endsection

@section("js")
<script>
    $(".summernote").summernote({height:400})
</script>
@endsection
@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method='post' action=" {{asset ('admin/trainers/'.$item->id)}}">
        @csrf
        @method("put")
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">اسم المدرب</label>
                        <div class="col-lg-6">
                            <input id="name" value="{{ old('name',$item->name) }}" name="name" placeholder="اسم المدرب"
                                class="form-control" type="text">
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

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الايميل</label>
                        <div class="col-lg-6">
                            <input id="email" value="{{ old('email',$item->email) }}" name="email"
                                placeholder="الايميل" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">رقم الهاتف</label>
                        <div class="col-lg-6">
                            <input id="phone" value="{{ old('phone',$item->phone) }}" name="phone"
                                   placeholder="رقم الهاتف" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">التفاصيل</label>
                        <div class="col-lg-6">
                            <textarea id="description" rows='8' style='height:350px;' name="description" placeholder="أدخل التفاصيل"
                                class="mt-5 summernote form-control">{{ old('description',$item->description) }}</textarea>
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
                            <a href="{{asset('admin/trainers')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
