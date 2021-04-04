<footer class="main-bg-color" id="contact-us-sec">
    <div class="container">
        <div class="row  justify-content-between align-items-top py-5">
            <div class="col-md-4 col-lg-3 text-center">
                <img class="w-75" src="{{asset('assets/images/dal.png')}}"/>
                <p class="pt-5 text-center secondary-color">

                    منصة إرشادية للطلاب الراغبين بدخول كلية الهندسة بالجامعة الإسلامية لمساعدتهم باختيار تخصص هندسي
                    مناسب
                </p>
            </div>
            <div class="col-md-3 col-lg-2 text-right">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('')}}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('getDepartments')}}">التخصصات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('getCourses')}}">الدورات التدريبية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('getScholar')}}">المنح الجامعية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('getPages/who')}}">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('getPages/calls')}}">اتصل بنا</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 text-center">
                <form method="post" action='{{route("msg.index")}}'>
                    @csrf
                    <div class="form-group">
                        <input name="name" class="form-control" id="exampleFormControlInput2" placeholder="أدخل اسمك"
                               type="text" value="{{auth()->user()->name??''}}">
                    </div>
                    <div class="form-group">
                        <input name="email" class="form-control" id="exampleFormControlInput1" placeholder="بريدك الالكتروني"
                               type="email" value="{{auth()->user()->email??''}}">
                    </div>
                    <div class="form-group">
                <textarea name="myMsg" class="form-control" id="exampleFormControlTextarea1" placeholder="أدخل رسالتك"
                          rows="3"></textarea>
                    </div>
                    <button class="btn main-color" type="submit">أرسل</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="text-right secondary-color"><i aria-hidden="true" class="fa fa-copyright"></i> جميع الحقوق
                    محفوظة
                    لدى دليلك
                </p>
            </div>
            <div class="col-md-6">
                <div class="text-left">
                    <a href="#">
                        <i aria-hidden="true" class="fa fa-facebook fa-lg"></i>
                    </a>
                    <a href="#">
                        <i aria-hidden="true" class="fa fa-twitter fa-lg mx-2"></i>
                    </a>
                    <a href="#">
                        <i aria-hidden="true" class="fa fa-linkedin fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- Javascript files-->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/popper.js/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
