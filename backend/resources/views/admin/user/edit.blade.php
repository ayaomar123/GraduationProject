@extends("layouts.admin")
@section("title", "المستخدمين  ")
@section("title-side")

@endsection

@section("content")
<div class="m-portlet m-portlet--mobile">
    <form method='post' action='{{route("user.update",$item->id)}}'>
        @csrf
    @method("put")
    <div class="m-portlet__body">
        <div class="m-form__section m-form__section--first">
            <div class="form-group m-form__group row">
                <label class="col-lg-3 col-form-label">الاسم كاملاً</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control m-input" placeholder="ادخل اسمك كاملاً" name="name" value='{{ old("name",$item->name) }}'>

                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-lg-3 col-form-label">الإيميل </label>
                <div class="col-lg-6">
                    <input type="email" class="form-control m-input" placeholder="ادخل ايميلك" name="email" value='{{ old("email",$item->email) }}'>

                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-lg-3 col-form-label">كلمة السر </label>
                <div class="col-lg-6">
                    <input type="password" class="form-control m-input" placeholder="ادخل كلمة السر " name="password" value='{{ old("password") }}'>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">تعديل</button>
       <a class='btn btn-light' href='{{route("user.index")}}'>الغاء الأمر</a>

    </div>
</form>
</div>

@endsection
