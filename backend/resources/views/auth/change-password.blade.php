@extends("layouts.admin")
@section("title","تغيير كلمة المرور")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <form method="post" action='{{route("password.changed")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">كلمة المرور الحالية</label>
                        <div class="col-lg-6">
                            <input type="password" id="password" name="password" class="password form-control m-input"
                                placeholder="ادخل كلمة المرور الحالية ">
                            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <span class="m-form__help"></span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">كلمة المرور الجديدة</label>
                        <div class="col-lg-6">
                            <input type="password" name="new_password" id="new_password" class=" form-control m-input"
                                placeholder="ادخل كلمة المرور الجديدة ">
                            <span toggle="#new_password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <span class="m-form__help">كلمة المرور يجب أن تكون 9 حروف أو أرقام على الأقل</span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">تأكيد كلمة المرور الجديدة</label>
                        <div class="col-lg-6">
                            <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                                class=" form-control m-input" placeholder="أدخل كلمة المرور الجديدة مرة أخرى ">
                            <span toggle="#new_password_confirmation"
                                class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <span class="m-form__help">كلمة المرور يجب أن تكون 9 حروف أو أرقام على الأقل</span>
                        </div>
                    </div>


                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-accent ">تغيير كلمة المرور</button>
                            <a href="{{asset('admin/category')}}" class="btn btn-secondary ">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection


@section('css')
<style>
.field-icon {
    float: left;
    margin-left: 10px;
    margin-top: -22px;
    position: relative;
    z-index: 2;
}
</style>
@endsection
@section('js')
<script type="text/javascript">
$(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
</script>
@endsection