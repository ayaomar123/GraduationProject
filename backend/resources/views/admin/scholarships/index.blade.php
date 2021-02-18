@extends("layouts.admin")
@section("title","إدارة المنح")

@section("title-side")
    <a href="{{asset('admin/scholarships/create')}}"
       class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>إضافة منحة جديد</span>
    </span>
    </a>
@endsection

@section("content")
    @if($items->count()>0)
    <table class="table table-striped table-sm mt-3">
        <thead>
        <tr>
            <th width="5%">#</th>
            <th>عنوان</th>
            <th>وصف قصير</th>
            <th>الفاعلية</th>
            <th>الحد الأدنى لمعدل الثانوية</th>
            <th>نسبة تغطية المنحة من الرسوم</th>
            <th width="22%">خيارات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->slug }}</td>
                <td>{{ $item->status }}</td>
                <td>%{{ $item->secondary_grades }}</td>
                <td>%{{ $item->rate }}</td>

                <td>
                    <form method='post' action='{{asset("scholarships/".$item->id)}}'>
                        @csrf
                        @method("delete")
                        <a href='{{ route("scholarships.show",$item->id) }}' class='btn btn-sm btn-info'>عرض</a>
                        <a href='{{ route("scholarships.edit",$item->id) }}' class='btn btn-sm btn-primary'>تعديل</a>
                        <a href='{{ route("scholarships.delete",$item->id) }}' class='btn btn-danger btn-sm'
                           onclick='return confirm("Are you sure?")'>حذف</a>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $items->links() }}
    @else
        <div class='alert alert-info'><b>نأسف</b> !لا توجد نتائج </div>
    @endif
@endsection
