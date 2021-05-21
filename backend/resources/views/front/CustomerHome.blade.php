<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta content="initial-scale=1, maximum-scale=1" name="viewport">
    <!-- site metas -->
    <title>Graduate Website</title>
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta content="" name="author">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/newfolder/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/newfolder/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('assets/newfolder/css/responsive.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/newfolder/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
          rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen"
          rel="stylesheet">
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" rel="stylesheet">
    <style>
        div.example {
            padding: 15px;
        }

        @media screen and (min-width: 601px) {
            div.example {
                font-size: 50px;
            }
        }

        @media screen and (max-width: 600px) {
            div.about_main{
                margin-top: -235px;
            }
            div.example {
                margin-top: 30px;
            }
            h2{
                margin-top: 5px;
            }
            btn{
                width: 100% !important;
            }
            .taital-text{
                margin-top: -66px;
            }
            .right_section_main{
                margin-top: 35px;
            }


        }
        @media (min-width: 1200px) {
            .about_main {
                margin-top: 0px;
            }
            btn{
                width: 50% !important;
            }
        }

    </style>

</head>

<body>
<header class="section" id="home">
    <div class="header_main">
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-11 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box" style="overflow: hidden;">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li><a style="text-align: right" href="{{asset('quiz')}}">اختبار
                                                الميول <i class="fas fa-tasks"></i></a></li>
                                        <li><a style="text-align: right"  href="{{asset('getScholar')}}">المنح
                                                الجامعية <i class="fas fa-hand-holding-usd"></i></a></li>
                                        <li><a style="text-align: right"  href="{{asset('getCourses')}}">الدورات
                                                التدريبية <i class="fas fa-chalkboard-teacher"></i></a></li>
                                        <li><a style="text-align: right"  href="{{asset('getDepartments')}}">التخصصات <i class="fas fa-laptop"></i></a></li>
                                        <li><a style="text-align: right"  href="{{asset('')}}">الرئيسية <i class="fas fa-home"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1">
                        <img alt="" class="m-3" src="{{asset('assets/newfolder/images/dal.png')}}" style="max-width: 100px;">
                    </div>

                </div>
            </div>
        </div>
        <!-- end header inner -->
            <div class="bannen_inner" style="margin-top: -20px;">
                <div class="container">
                    <div class="row example">
                        <div class="col-xl-5 col-lg-6 col-md-6
                                    col-sm-12">
                            <h1 class="web_text ml3"><strong>أهلا وسهلا
                                    بكم في منصة دليلك </strong></h1>
                            <a href="#home"><h3 class="mt-3 text-center"
                                                style="color: #fff;">
                                    منصة إرشادية للطلاب الراغبين بدخول
                                    كلية الهندسة بالجامعة الإسلامية
                                    لمساعدتهم باختيار تخصص هندسي مناسب
                                </h3></a>
                            <div class="aya">
                                <a class="btn btn-lg
                                            " href="{{asset('quiz')}}" style="background-color:
                                            #e2adab;">ابدأ اختبار الميول</a>
                            </div>


                            <a class="get_bg" href="#" role="button"></a>
                            <a class="btn btn-lg" href="" role="button"></a>
                            <div class="taital_main">

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
</header>
<!-- banner end -->
<!-- choose start -->
<div class="about_main">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="images">
                    <img src="{{asset('assets/newfolder/images/child.jpg')}}" style="max-width:
                                    100%; border-radius: 4%;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="right_section_main text-right">

                    <h2 class="special_text">
                        حياتنا المهنية تستحق منا اهتماماً أكثر ولذا
                        كانت هذه المنصة </h2>
                    <p class="donec_text">عندما كنا صغاراً كنا نقضي
                        وقت طويل في أحلام اليقظة .. حيث نحلم بأننا
                        نمتلك
                        المال والرفاهية والتقدير الاجتماعي والعمل
                        المميز .. وتمضي السنين لنكتشف أن الأمر معقد
                        أكثر مما نعتقد .. نقترب من الجامعة وشغفنا
                        للوصول للهدف المنشود يزداد ولكن كل هذا الشغف
                        إذ لم يبنى على أسس صحيحة ومن أهمها اختيار
                        تخصص جامعي مناسب لنا يزيد من فرصة التكاسل
                        والخمول والنفور من التخصص ومجاراة الأيام
                        لنكون في صفوف الخريجين الذين لم يستشعروا
                        الفائدة المرجوة من الدراسة الجامعية نتخرج
                        ونكابد سنوات
                        طويلة بعدها .. لا تجدنا نشعر بالفخر لما
                        قضينا فيه أعمارنا .. لم نحقق الاكتفاء المادي
                        اللازم .. لم نصل إلى الرضا الشخصي .. هذه
                        نهاية مؤلمة لا يتمناها أحد لنفسه</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="right_section_main text-right">

                <h2 class="taital-text">التخصصات </h2>
                <p class="donec_text">بعد إتمام مرحلة الدراسة الثانوية يدخل الطالب في دوامة كبيرة ويقع في حيرة من أمره، فاختيار التخصص الجامعي من القرارات المصيرية التي ستحدد مسير حياته لسنوات قادمة، وما يزيد الأمر صعوبة اقتراحات الأهل والاصدقاء وآرائهم التي لن تجعل الأمر سهلاً على الإطلاق بل العكس تماماً.

                    لذا نحاول أن نقدم لكم هذا الدليل الشامل لمعظم الإختصاصات الجامعية ونقدم لكم بعض الإرشادات والمعلومات التي ستجعل من الاختيار أمراً سهلاً </p>
                <a href="{{asset('getDepartments')}}">
                    <button class="btn btn-lg mb-3 more">المزيد
                    </button>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="images">
                <img src="{{asset('assets/newfolder/images/ng.jpg')}}" style="max-width: 100%;
                                height: 350px; border-radius: 5%;">
            </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="images">
                <img src="{{asset('assets/newfolder/images/train.jpg')}}" style="max-width: 100%;
                                height: 350px; border-radius: 5%;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="right_section_main text-right">

                <h2 class="taital-text"> الدورات التدريبية </h2>
                <p class="donec_text"> تلعب الدورات التدريبية دوراً هامَّاً وكبيراً في تنمية المهارات لدى الأشخاص، حيث تُساعد هذه الدورات في تطوير الذات وبناء الثقة بالنفس، بالإضافة إلى تحسين المستوى الوظيفي للفرد؛ كما تهدف إلى توسيع قاعدة المعرفة لدى جميع المتدرِّبين، وتعليمهم بعض المهارات الجديدة، وتطوير مهاراتهم القديمة. </p>
                <a href="{{asset('getCourses')}}">
                    <button class="btn btn-lg
                                  mb-3   more">المزيد
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="right_section_main text-right">

                <h2 class="taital-text">المنح </h2>
                <p class="donec_text">اعثر على المنحة الدراسية المناسبة لك.  جهّز طلب التقديم. اكتب مقالة المنحة أو رسالة الدافع. جهّز رسائل التوصية. دقّق طلب التقديم وقم بإرساله
                    توفر منصة دليلك في الجامعة الإسلامية بغزة حزمة متميزة من المنح والمساعدات والقروض الجامعية بهدف مساعدة طلبتها وتمكينهم من بدء ومواصلة مسيرتهم الأكاديمية
                </p>
                <a href="{{asset('getScholar')}}">
                <button class="btn btn-lg mb-3  more">المزيد</button>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="images">
                <img src="{{asset('assets/newfolder/images/mo.jpg')}}" style="max-width: 100%;
                                height: 350px; border-radius: 5%;">
            </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="images">
                <img src="{{asset('assets/newfolder/images/abi.jpg')}}" style="max-width: 100%;
                                height: 350px; border-radius: 5%;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="right_section_main text-right">

                <h2 class="taital-text">اختبار الميول </h2>
                <p class="donec_text"> اكتشف ميولك المهني المناسب لك كي تتمكن من اختيار التخصص الجامعي المناسب لميولك وقدراتك.. التميز بالعمل هو محبة الاختصاص الدراسي ومناسبة شخصيتك لهذا العمل
                    <br>
                    هذا الاختبار وضع للكشف عن شخصيتك وميولك وهو مؤشر لتحديد التخصص الأنسب لك، ولا يعبر بالضرورة عن اختيارك لأحد التخصصات في الجامعة
                </p>
                <a href="{{asset('quiz')}}">
                <button class="btn btn-lg mb-3  more">المزيد</button>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- choose start -->
<!-- about start -->


<!-- service end -->
<!-- contact start -->

<div class="copyright_main">
    <div class="container">
        <footer class="main-bg-color" id="contact-us-sec">

            <div class="row justify-content-between align-items-top
                            py-5">
                <div class="col-md-4 col-lg-3 text-center">
                    <form method="post" action='{{route("msg.index")}}'>
                        @csrf
                        <div class="form-group">
                            <input class="form-control
                                            text-right" id="exampleFormControlInput1"
                                   placeholder="أدخل اسمك"
                                   type="text" value="{{auth()->user()->name??''}}" name="name">
                        </div>
                        <div class="form-group">
                            <input name="email" class="form-control
                                            text-right" id="exampleFormControlInput2"
                                   placeholder="بريدك الالكتروني"
                                   type="email" value="{{auth()->user()->email??''}}">
                        </div>
                        <div class="form-group">
                                        <textarea class="form-control
                                            text-right" name="myMsg"
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
                            <a class="nav-link" href="{{asset('')}}">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('getDepartments')}}">التخصصات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('getCourses')}}">الدورات
                                التدريبية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('getScholar')}}">المنح</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('quiz')}}">اختبار
                                الميول</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('getPages/who')}}">من نحن</a>
                        </li>

                    </ul>
                </div>
                <div class="col-md-4 col-lg-3 text-center py-5">
                    <img class="w-50 footer-logo" src="{{asset('assets/newfolder/images/dal.png')}}"/>
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
<script src="{{asset('assets/newfolder/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/newfolder/js/popper.min.js')}}"></script>
<script src="{{asset('assets/newfolder/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/newfolder/js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('assets/newfolder/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/newfolder/js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

<!-- javascript -->

<script
    src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
    $(document).ready(function () {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function () {

            $(this).addClass('transition');
        }, function () {

            $(this).removeClass('transition');
        });
    });
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml3');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: true})
        .add({
            targets: '.ml3 .letter',
            opacity: [0, 1],
            easing: "easeInOutQuad",
            duration: 5,
            delay: (el, i) => 150 * (i + 1)
        }).add({
        targets: '.ml3',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });
</script>
</body>

</html>
