@extends("layouts.admin")
@section("title","إدارة القائمة")

@section("title-side")
<a href="{{asset('admin/static-page/create')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span> اضافة</span>
    </span>
</a>
@endsection

@section("content")
<!-- <a href='{{route("static-page.create")}}' class='btn btn-success'>Create </a> -->

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
            <td>{{ $item->title }}</td>
            <td>{{ $item->slug }}</td>
            <td>{{ $item->active }}</td>
            <td>
                <img style="width: 50px;" src="{{ asset('storage/images/'.$item->image)}}" />
            </td>
            <td>
                <form method='post' action='{{asset("static-page/".$item->id)}}'>
                    @csrf
                    @method("delete")
                    <a href='{{ route("static-page.show",$item->id) }}' class='btn btn-sm btn-info'>عرض</a>
                    <a href='{{ route("static-page.edit",$item->id) }}' class='btn btn-sm btn-primary'>تعديل</a>
                    <!-- <input type='submit' onclick='return confirm("Are you sure?")' value='Delete'
                        class='btn btn-danger btn-sm ' /> -->
                    <a href='{{ route("static-page.delete",$item->id) }}' class='btn btn-warning btn-sm'
                        onclick='return confirm("Are you sure?")'>حذف</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- <div class="card mb-3" style="max-width: 1500px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img style="max-width: 350px;"
                src="https://media.wired.com/photos/5e9f574ed42e6f0008f47b7a/master/w_2560%2Cc_limit/Gear-Top-Apple_new-iphone-se-white_04152020.jpg"
                class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h2 class="card-title">Card title</h2>
                <p class="card-text">details</p>
                <p class="card-text"><small class="text-muted">slug</small></p>
                <p class="card-text"><small class="text-muted">active</small></p>
            </div>
        </div>
    </div>
</div> -->
@endsection