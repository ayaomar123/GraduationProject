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
        @if($result->count()>0)
        <table class="table table-striped table-sm mt-3">
            <thead>
            <tr>
                <th width="5%">#</th>
                <th>اسم التخصص</th>

                <th width="22%">النتيجة النهائية</th>
            </tr>
            </thead>
            <tbody>
            @foreach($result as $item)
                <tr>
                    <td>#</td>
                    <td>{{$item->question->question_body}}</td>
                    <td>
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
