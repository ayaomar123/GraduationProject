@extends("layouts.admin")
@section("title","الرسائل")


@section("content")
    <div class="col-xl-12">
        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
            <table class="table table-striped table-sm mt-3">
                <thead>
                <tr>
                    <th width="5%">#</th>
                    <th>اسم المرسل</th>
                    <th>إيميل المرسل</th>
                    <th>الرسالة</th>
                    <th>خيارات؟</th>
                </tr>
                </thead>
                <tbody>
                @foreach($msgs as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->myMsg }}</td>
                        <td>
                            <form method='post' action='{{asset("departments/".$item->id)}}'>
                                @csrf
                                @method("delete")
                                <a href='{{ route("getMsg.delete",$item->id) }}' class='btn btn-danger btn-sm'
                                   onclick='return confirm("هل تريد حذف الرسالة؟")'>حذف الرسالة</a>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
