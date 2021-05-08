@extends("layouts.frontlayout.frontpage")
@section("title","الملف الشخصي")
@section('style')
    <style>
        .m-tabs-line .m-tabs__link {
            font-size: 16px;
        }
    </style>
@endsection

@section("content")
    <div class="container mt-5 text-right" style="padding-bottom: 50px;padding-top: 70px">
        @if($crs->count()>0)
        <table class="table table-striped table-sm mt-3">
            <thead>
            <tr>
                <th width="5%">#</th>
                <th>اسم الدورة</th>

                <th width="22%">خيارات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($crs as $item)
                <tr>
                    <td>#</td>
                    <td>{{$item->course->name}}</td>
                    <td>
                        <form method='post' action='{{asset("getCoursesDetails/".$item->id)}}'>
                            @csrf
                            @method("delete")
{{--                            <a href='{{ route("getCoursesDetails",$item->slug) }}' class='btn btn-sm btn-info'>عرض الدورة</a>--}}
                            <a href='{{ route("getCoursesDetails.delete",$item->id) }}' class='btn btn-danger btn-sm'
                               onclick='return confirm("أنت على وشك الغاء اشتراكك بالدورة")'>إلغاء الاشتراك</a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <h3 class="alert-danger py-3 pr-3">أنت غير مسجل في أي من الدورات</h3>
        <h4 class="alert-info py-3 pr-3">قم بالتسجيل في الدورات وتمتع بالعلم</h4>

            @endif
    </div>
@endsection
