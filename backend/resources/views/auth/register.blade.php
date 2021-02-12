@extends("auth.auth-layout")
@section('title','تسجيل مستخدم جديد')
@section('main-title','تسجيل مستخدم جديد')
@section('sub-title','الرجاء إدخال التفاصيل الخاصة بك لتسجيل حسابك')

@section('content')
    <form class="m-login__form m-form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group m-form__group">
            <input class="form-control m-input" type="text" id="name" value="{{old('name')}}" placeholder="الاسم بالكامل"
                   name="name" autocomplete="on" required autofocus>
        </div>
        <div class="form-group m-form__group">
            <input class="form-control m-input" type="email" id="email" placeholder="البريد الالكتروني"
                   value="{{old('email')}}" name="email" autocomplete="on" required>
        </div>
        <div class="form-group m-form__group">
            <input class="form-control m-input" type="password" placeholder="كلمة المرور" name="password" id="password"
                   required>
        </div>
        <div class="form-group m-form__group">
            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="تأكيد كلمة المرور"
                   id="password_confirmation" name="password_confirmation" required>
        </div>


        <div class="m-login__form-action">
            <button id="" type="submit" style="background-color: #0b3b65;color: white" class="btn m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">تسجيل
                مستخدم جديد</button>&nbsp;&nbsp;
            <a href="{{ route('login') }}" id="m_login_signup_cancel" style="background-color: #f7f6f9;color: #0b3b65" class="btn m-btn m-btn--pill m-btn--custom  m-login__btn">إلغاء الأمر
            </a>
        </div>
        <div class="row m-login__form-sub">
            <div class="col m--align-center m-login__form-right">
                <a href="{{ route('login') }}" id="m_login_forget_password" class="m-link">لديك حساب بالفعل؟</a>

            </div>
        </div>
    </form>
@endsection
