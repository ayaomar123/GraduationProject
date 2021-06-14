@extends('layouts.frontlayout.frontpage')
@section('content')
        <div class="text-center myaya">
            <div class="">
                <h4 class="btn" style="margin-top: 90px;background-color: #0b3b65;color: white">موسوعة التخصصات الهندسية</h4>
            </div>
        </div>
        <div class="container mt-5">
            <div class="text-right mt-3 mb-5">
                <p class="m-0"> <br> يعرف علم الهندسة أنه تطبيق القواعد والقوانين العلمية على أرض الواقع بهدف تلبية احتياجات
                    الناس وابتكار الاختراعات العلمية التي من شأنها مساعدتهم في حل مشاكلهم بالإضافة إلى تسهيل حياتهم
                    وفي مراحل التعليم الجامعي تنقسم الهندسة إلى قسمين : - علوم هندسية - تهتم بالجانب العلمي أكثر من الجانب
                    التطبيقي - هندسة تطبيقية- تهتم بالجانب التطبيقي أكثر

                </p>
                <p class="text-right mt-5 text-primary">:كلمة هندسة ممكن أن تأخذ المعاني التالية
                </p>
                <p class="mt-0">
                    الهندسة :هي القدرة على حل المشكلات
                    <br>
                    الهندسة :هي التطبيقات التي نحصل عليها من اي نوع من انواع المعرفة والتي تخولنا الى بناء تعديل او حتى
                    صيانة جهاز او نظام

                    وفي حال لم يكن التعريف واضح فالهندسة هي عندما تقوم بتحويل معلومة غير مفيدة الى تطبيق مفيد فعندما تعلم ان
                    الزيت اثقل من الماء واخف من التراب فهي معلومة غير مفيدة لكن اذا حدث امامك حريق بسبب زيت وقمت باطفاء
                    الحريق من خلال التراب بدلا من الماء حينها استطيع ان اقول ان ماقمت بفعله هو نوع من انواع الهندسة
                </p>
            </div>
            <div class="row pb-3 mt-5">
                @foreach($departments as $department)
                <div class="col-lg-4 mb-4 text-right">
                    <div class="card border-0 mb-2">
                        <a href="getDepartments/{{$department->slug}}">
                            <img class="card-img-top" src="{{$department->image?asset('storage/images/'.$department->image):asset('assets/images/arch9.jpg')}}" alt="" style="height: 200px;">
                            <h4 class="w-100 btn text-center py-2" style="background-color: #0b3b65;color: white;">{{$department->name}}</h4>
                        </a>
                    </div>
                    <div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection
