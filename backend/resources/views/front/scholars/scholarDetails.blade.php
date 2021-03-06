@extends('layouts.frontlayout.frontpage')
@section('style')
<style>
    .myphoto{
        background-size: cover;
        background-image:url('../storage/images/{{$scholarDetails->image}}');
        width: 100%;
        background-repeat: no-repeat;
        height: 280px;
        margin-top: 40px;
        }
</style>
    
@endsection
@section('content')
    <div id="content pt-5">
        <div class="text-center myphoto">
            <div class="">
                <h4 class="btn" style="margin-top: 40px;margin-left: 988px">
                    <nav style="background-color: #0b2e13">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{asset('')}}">الرئيسية</a></li>
                            <li class="breadcrumb-item"><a href="{{asset('getScholar')}}">المنح</a></li>
                            <li aria-current="page" class="breadcrumb-item active">{{$scholarDetails->name}}</li>
                        </ol>
                    </nav>
                </h4>
            </div>
        </div>
        <div class="container mb-5">
            <div class=" text-center">
                <h1 class="pt-2"></h1>
            </div>

            <div class="row bar">
                <div class="col-md-3 img-back aside-left-line">
                    <!-- MENUS AND FILTERS-->
                    @include('front.scholars.menu')


                </div>
                <div class="col-md-9">

                    <div class="new-arrivals-content">
                        <div class="text-right">
                            <h1>{{$scholarDetails->name}}</h1>
                            <!--                            إذا كلن للمنحة رابط-->
                            @if($scholarDetails->link != "")
                            <a class="btn col-2" target="_blank" href="{{$scholarDetails->link}}" style="background-color: #0b3b65;color: white">تقــدم الآن</a>
                            @endif
                                <h3>عن الفرصة</h3>
                            <p> تقدم اللجنة الأردنية الأمريكية للتبادل التعليمي، فولبرايت، منحة للأبحاث العلمية لعام
                                2021 لمرحلة ما بعد الدكتوراه للسنة الأكاديمية 2022 - 2023. تم تصميم هذا البرنامج
                                للباحثين الأردنيين المهتمين بمتابعة مشروع بحث تعاوني في الولايات المتحدة لمدة تتراوح ما
                                بين أربعة (4) أشهر على الأقل إلى تسعة (9) أشهر كحد أقصى. فقط أولئك الذين يحملون حاليًا
                                درجة الدكتوراه مؤهلين للتنافس على هذه المنحة.
                            </p>
                            <h5>تغطي منحة فولبرايت:</h5>
                            <p>

                                رسوم الفيزا.
                                بدل معيشة شهري
                                تأمين صحي.
                                ملاحظة: لا تغطي هذه المنحة رسوم تذاكر الطيران.</p>
                            <h5>                                الشروط الأساسية للتأهل للمنحة:
                            </h5>
                            <p>
                                أن تكون أردنيّ الجنسية.
                                أن تكون حاصلاً على درجة الدكتوراه.
                                أن تكون عضو تدريس بدوام كامل في جامعة أردنية.
                                أن يكون لديك ما لا يقل عن خمسة منشورات بعد مرحلة الدكتوراه.
                                عن فولبرايت الأردن:
                                تم تأسيس اللجنة الأردنية الأمريكية للتبادل التعليمي، المعروفة أيضا باسم لجنة فولبرايت في
                                الأردن، من خلال اتفاق ثنائي وقع في مايو ايار عام 1993 بين المملكة الأردنية الهاشمية
                                والولايات المتحدة بتمويل سنوي من قبل كلا البلدين. تسعى اللجنة لتعزيز التفاهم المتبادل
                                والصداقة بين الشعبين الأردني والأمريكي عن طريق تسهيل التبادلات الأكاديمية والثقافية
                                للمواطنين الأمريكيين والأردنيين. اللجنة هي منظمة مستقلة، غير ربحية، و وطنية مسؤولة عن
                                إدارة المنح المرموقة التي تمنح على أساس تنافسي للطلاب والمعلمين والعلماء الأردنيين
                                والأمريكيين للدراسة والتدريس والمحاضرات وإجراء البحوث في الولايات المتحدة والأردن، في
                                إطار برنامج فولبرايت للتبادل في جميع أنحاء العالم.

                                اطّلع على المزيد من المنح الدراسية المتاحة على فرصة

                                اختبر مهاراتك الشخصية من خلال إجراء اختبار الشخصية على فرصة</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
