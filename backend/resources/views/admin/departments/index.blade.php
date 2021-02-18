@extends("layouts.admin")
@section("title","إدارة الأقسام")

@section("title-side")
    <a href="{{asset('admin/departments/create')}}"
       class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>إضافة قسم جديد</span>
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
            <th>الصورة</th>
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
                <td>
                    <img style="width: 50px;" src="{{ asset('storage/images/'.$item->image)}}" />
                </td>
                <td>
                    <form method='post' action='{{asset("departments/".$item->id)}}'>
                        @csrf
                        @method("delete")
                        <a href='{{ route("departments.show",$item->id) }}' class='btn btn-sm btn-info'>عرض</a>
                        <a href='{{ route("departments.edit",$item->id) }}' class='btn btn-sm btn-primary'>تعديل</a>
                        <a href='{{ route("departments.delete",$item->id) }}' class='btn btn-danger btn-sm'
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
