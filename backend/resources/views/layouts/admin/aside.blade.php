<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
        class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
         m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon flaticon-users "></i><span class="m-menu__link-text">
                        <h6>المستخدمين</h6>
                    </span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("user.index")}}'
                                                                          class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text"><h6>عرض المدراء</h6></span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("user.create")}}'
                                                                          class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text"><h6>إضافة مدير</h6></span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("customer.index")}}'
                                                                          class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text"><h6>عرض المستخدمين</h6></span></a></li>

                    </ul>
                </div>
            </li>

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon flaticon-settings-1 "></i><span class="m-menu__link-text">
                    <h6>مدربين الدورات</h6>
                    </span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("trainers.index")}}'
                                                                          class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text"><h6>عرض المدربين</h6></span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("trainers.create")}}'
                                                                          class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text"><h6>إضافة مدرب</h6></span></a></li>

                    </ul>
                </div>
            </li>

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon flaticon-settings-1 "></i><span class="m-menu__link-text">
                    <h6>الصفحات الثابتة</h6>
                    </span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("static-page.index")}}'
                                                                          class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text"><h6>عرض الصفحات</h6></span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("static-page.create")}}'
                                                                          class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text"><h6>إضافة صفحة</h6></span></a></li>

                    </ul>
                </div>
            </li>

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon flaticon-signs-1 "></i><span class="m-menu__link-text"><h6>الأقسام</h6></span><i
                        class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("departments.index")}}'
                                                                          class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text"><h6>عرض الأقسام</h6></span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("departments.create")}}'
                                                                          class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text"><h6>إضافة قسم</h6></span></a></li>

                    </ul>
                </div>
            </li>

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon flaticon-coins "></i><span class="m-menu__link-text"><h6>المنح</h6></span><i
                        class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("scholarships.index")}}'
                                                                          class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text"><h6>عرض المنح</h6></span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("scholarships.create")}}'
                                                                          class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text"><h6>إضافة منحة جديدة</h6></span></a></li>

                    </ul>
                </div>
            </li>

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon flaticon-list"></i><span
                        class="m-menu__link-text"><h6>الدورات التدريبية</h6></span><i
                        class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("courses.index")}}'
                                                                          class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text"><h6>عرض الدورات</h6></span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("courses.create")}}'
                                                                          class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text"><h6>إضافة دورة جديدة</h6></span></a></li>

                    </ul>
                </div>
            </li>

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon flaticon-doc "></i><span class="m-menu__link-text">
                        <h6>اختبار القدرات(الأسئلة)</h6>
                    </span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("question.index")}}'
                                                                          class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text"><h6>عرض الأسئلة</h6></span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("question.create")}}'
                                                                          class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text"><h6 class="white">إضافة سؤال</h6></span></a></li>

                    </ul>
                </div>
            </li>

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon flaticon-file "></i><span class="m-menu__link-text"><h6> اختبار القدرات (الأجوبة)</h6></span><i
                        class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("answers.index")}}'
                                                                          class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text"><h6>عرض الأجوبة</h6></span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("answers.create")}}'
                                                                          class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text"><h6>إضافة جواب</h6></span></a></li>

                    </ul>
                </div>
            </li>

        </ul>
    </div>
</div>
