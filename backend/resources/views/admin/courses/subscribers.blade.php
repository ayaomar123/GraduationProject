@extends("layouts.admin")
@section("title", "أسماء المسجلين في الدورات التدريبية")


@section("content")
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__body">
            <form  class='row mb-3'>

                <div class='col-sm-9'>
                    <select name='course' id='course' class='select2 form-control '>
                        <option value=''>اسم الدورة</option>
                        @foreach($courses as $course)
                            <option {{request()->course==$course->id?"selected":""}} value="{{$course->id}}">
                                {{$course->name}}</option>
                        @endforeach
                    </select>

                </div>
                <div class='col-sm-1'>
                    <button class='btn btn-primary' value='Search'><i class='fa fa-search'></i> بحث </button>
                </div>
                <a class="col-sm-2 btn badge-light" href="{{route('subscribers')}}">مسح البحث</a>

            </form>

            <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        @if($items->count()>0)
                            <table
                                class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline"
                                id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1150px;">
                                <thead>
                                <tr role="row">
                                    <th>
                                        <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                            <input type="checkbox" value="" class="m-group-checkable">
                                            <span></span>
                                        </label>
                                    </th>
                                    <th>اسم الدورة</th>
                                    <th>اسم الطالب</th>
                                    <th> رقم الهاتف </th>
                                    <th>الايميل</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                    <tr role="row" class="odd">
                                        <td width="5%" class=" dt-right" tabindex="0">
                                            <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label>
                                        </td>
                                        <td>{{ $item->course->name }}</td>
                                        <td>{{ $item->name ?? '' }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->email }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $items->links() }}
                        @else
                            <div class='alert alert-info'><b>نأسف</b> !لا توجد نتائج </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
