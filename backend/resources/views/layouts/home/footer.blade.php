<div class="copyright_main">
    <div class="container">
        <footer class="main-bg-color" id="contact-us-sec">

            <div class="row justify-content-between align-items-top
                            py-5">
                <div class="col-md-4 col-lg-3 text-center">
                    <form>
                        <div class="form-group">
                            <input class="form-control
                                            text-right" id="exampleFormControlInput1"
                                   placeholder="أدخل اسمك" value="{{auth()->user()->name}}"
                                   type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control
                                            text-right" id="exampleFormControlInput2"
                                   placeholder="بريدك الالكتروني"
                                   type="email" value="{{auth()->user()->email}}">
                        </div>
                        <div class="form-group">
                                        <textarea class="form-control
                                            text-right"
                                                  id="exampleFormControlTextarea1"
                                                  placeholder="أدخل رسالتك" rows="3"></textarea>
                        </div>
                        <button class="btn
                                        main-color" type="submit">أرسل
                        </button>
                    </form>
                </div>

                <div class="col-md-3 col-lg-2 text-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">من نحن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="department.html">التخصصات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="course.html">الدورات
                                التدريبية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Scholarship.html">المنح</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="test.html">اختبار
                                القدرات</a>
                        </li>

                    </ul>
                </div>
                <div class="col-md-4 col-lg-3 text-center">
                    <img class="w-50 footer-logo" src="{{asset('assets/images/dal.png')}}"/>
                    <h3 class="mt-3 text-right" style="color:
                                    #fff;">
                        منصة إرشادية للطلاب الراغبين بدخول كلية
                        الهندسة بالجامعة الإسلامية لمساعدتهم باختيار
                        تخصص هندسي مناسب
                    </h3>
                </div>

            </div>


            <div>
                <h3 class="text-center secondary-color" style="color:
                                rgb(255, 255, 255);">
                    <i aria-hidden="true" class="fa fa-copyright"></i>
                    جميع الحقوق محفوظة لدى دليلك
                </h3>
            </div>
            <div class="text-center">
                <a href="#">
                    <i class="fab fa-facebook fa-lg"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram fa-lg mx-1"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin fa-lg"></i>
                </a>
            </div>

        </footer>
    </div>

</div>


<!-- contact end -->
<!-- Javascript files-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

