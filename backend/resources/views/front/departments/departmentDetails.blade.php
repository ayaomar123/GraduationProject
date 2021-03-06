@extends('layouts.frontlayout.frontpage')
@section('style')
    <style>
        .myaya10{
            background-image: url('{{asset("storage/images/$departmentDetails->image")}}');
            background-size: cover;
            background-repeat: no-repeat;
            height: 300px;
        }
    </style>
@endsection
@section('content')
    <div class="text-center myaya10">
        <div class="">
            <h4 class="btn"
                style="margin-top: 90px;background-color: #0b3b65;color: white">{{$departmentDetails->name}}</h4>
        </div>
    </div>
    <div class="container mb-5">
        <div class=" text-center">
            <h1 class="pt-2"></h1>
        </div>

        <div class="row bar">
            <div class="col-md-3 img-back aside-left-line">
                <!-- MENUS AND FILTERS-->
                <div class="panel panel-default sidebar-menu ">

                    <div class="panel-body">
                        <ul class="nav nav-pills flex-column text-sm category-menu">
                            <li class="nav-item"><a
                                    class="mt-4 nav-link d-flex align-items-center justify-content-between"
                                    href="#"
                                    style="background-color: #0b3b65;color: white"><span>{{$departmentDetails->name}}</span><span
                                        class="badge badge-secondary"></span></a>
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link d-flex align-items-center justify-content-between"
                                    href="#compId"><span>صفات المهندس الناجج</span><span
                                        class="badge badge-secondary"></span></a>
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link d-flex align-items-center justify-content-between"
                                    href="#compAdj"><span>إيجابيات دراسة التخصص</span><span
                                        class="badge badge-secondary"></span></a>
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link d-flex align-items-center justify-content-between"
                                    href="#comDis"><span>سلبيات دراسة التخصص</span><span
                                        class="badge badge-secondary"></span></a>
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link d-flex align-items-center justify-content-between"
                                    href="#compField"><span>مجالات العمل</span><span
                                        class="badge badge-secondary"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
            <div class="col-md-9">
                <div class="text-right">
                    <div class=" mr-2 mt-3">
                        <div>
                            <h2 id="compId" style="color: #0b3b65">تعريف كلية الهندسة</h2>
                            <h4>
                                يعرف تخصص " هندسة الحاسوب " أو ما يطلق عليه باللغة الإنجليزية Computer Engineering " أنه
                                فرعا من فروع التخصصات الهندسية والذي يجمع بين دراسات وحقول علمية مختلفة من تخصصي علم
                                الحاسوب وهندسة الكهرباء والاتصالات بهدف بناء أجهزة الحاسوب وبرمجياته والتي يطلق عليها
                                Hardware و Software .
                            </h4>
                        </div>
                        <div>
                            <h2 id="compAdj" style="color: #0b3b65">صفات مهندس الحاسوب</h2>
                            <h4>
                                ربما أنت تتساءل الآن ، ما هي المؤهلات العلمية والصفات الشخصية والمهارات العملية التي
                                تخولني لدراسة تخصص هندسة الحاسوب . ومن الجدير بالذكر أنه على رواد تخصصات علم الحاسوب
                                بشكل عام التفكير بصورة جيدة بنّاءة مجدية وهادفة لذا تعرف على المفاتيح الرئيسية لارتياد
                                تخصص هندسة الحاسوب :
                                <ul>
                                    <li>المؤهلات العلمية :
                                        <ul>
                                            <li>80 % الحد الأدنى لمعدل الثانوية العامة</li>
                                            <li>الالتحاق بالمسار العلمي أو الصناعي في الثانوية العامة</li>
                                            <li>مستوى جيد في اللغة الإنجليزية</li>
                                            <li>مستوى جيد في الرياضيات والتكنولوجيا والهندسة</li>
                                        </ul>
                                    </li>

                                    <li>الصفات الشخصية :
                                        <ul>
                                            <li>الصفات الشخصية</li>
                                            <li>مهارات حل المشاكل</li>
                                            <li>المهارات التحليلية .</li>
                                            <li>الإبداع والابتكار.</li>
                                            <li>القدرة على التعامل مع الأجهزة الإلكترونية الدقيقة.</li>
                                            <li>لقدرة على تبسيط الأمور المعقدة وشرحها .</li>
                                            <li>تجنب الوقوع في الخطأ .</li>
                                            <li> التعلم الذاتي والتعلم المستمر ومواكبة التكنولوجيا والتحديثات المستمرة .
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </h4>
                        </div>

                        <div>
                            <h2 id="comDis" style="color: #0b3b65">إيجابيات دراسة التخصص</h2>
                            <h4>
                                <ol>
                                    <li>صعوبة التخصص نوعا ما .</li>
                                    <li> شدة التنافس بين طلبة التخصص</li>
                                    <li> الدراسة لسنوات كثيرة والحاجة إلى التعلم بشكل مستمر .</li>
                                    <li> يمكن اعتباره من أحد التخصصات التي تتحدى العقل ۔
                                    </li>
                                </ol>

                            </h4>
                        </div>
                        <div>
                            <h2 id="compField" style="color: #0b3b65">سلبيات دراسة التخصص</h2>
                            <h4>
                                <ol>
                                    <li>صعوبة التخصص نوعا ما .</li>
                                    <li> شدة التنافس بين طلبة التخصص</li>
                                    <li> الدراسة لسنوات كثيرة والحاجة إلى التعلم بشكل مستمر .</li>
                                    <li> يمكن اعتباره من أحد التخصصات التي تتحدى العقل ۔
                                    </li>
                                </ol>

                            </h4>
                        </div>

                        <div>
                            <h2 id="comp" style="color: #0b3b65">مجالات العمل</h2>
                            <h4>
                                <ul>
                                    <li>مطور برامج</li>
                                    <li>مصم ألعاب الكمبيوتر</li>
                                    <li>مهندس برمجيات</li>
                                    <li> مدير المشاريع المتعلقة بتكنولوجيا المعلومات</li>
                                    <li> مبرمج</li>
                                    <li>الدعم الفني</li>
                                    <li>مهندس كمبيوتر</li>

                                </ul>
                            </h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
