@extends("layouts.admin")
@section("title","عرض")
@section("title-side")
@endsection
@section("content")
<div class="m-portlet m-portlet--mobile">
    <form method='post' action='{{route("trainers.index")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">اسم المدرب</label>
                        <div class="col-lg-6">
                            <input disabled id="name" value="{{ $item->name }}" name="name" placeholder="title"
                                class="form-control" type="text">
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

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">رقم الهاتف</label>
                        <div class="col-lg-6">
                            <input disabled id="phone" value="{{ $item->phone }}" name="phone" placeholder="الوصف القصير"
                                class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الايميل</label>
                        <div class="col-lg-6">
                            <input disabled id="email" value="{{ $item->email }}" name="email" placeholder="الوصف القصير"
                                   class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">نبذة عن المدرب</label>
                        <div class="col-lg-6">
                            <textarea disabled id="description" rows='8' name="description" placeholder="أدخل التفاصيل"
                                class="form-control">{{ $item->description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <a href='{{ route("trainers.edit",$item->id) }}' class="btn btn-primary">تعديل</a>
                            <a href="{{asset('admin/trainers')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
