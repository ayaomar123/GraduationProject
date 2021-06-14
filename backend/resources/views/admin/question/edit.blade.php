@extends("layouts.admin")
@section("title", "اختبار القدرات  ")
@section("title-side")

@endsection
@section("js")
    <script src="{{ asset('metronic/assets/demo/default/custom/crud/forms/widgets/summernote.js') }}" type="text/javascript"></script>

@endsection
@section("content")
    <div class="m-portlet m-portlet--mobile">
        <form method='post' action='{{route("question.update",$item->id)}}'>
            @csrf
            @method("put")

            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <label class="col-lg-3 col-form-label">القسم </label>
                    <div class="col-lg-6">
                        <select class="form-control chosen-rtl select" name='department_id' id='department_id'>
                            <option selected>-اختر القسم-</option>
                            @foreach($departments as $department)
                                <option
                                    {{$department->id==$item->id?'selected':''}} value='{{$department->id}}'>
                                    {{$department->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label class="col-lg-3 col-form-label">التفاصيل</label>
                    <div class="col-lg-6">
                            <textarea id="details" rows='8' style='height:350px;' name="question_body" placeholder="أدخل التفاصيل"
                                      class="summernote form-control">{{ old('question_body',$item->question_body) }}</textarea>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-lg-3 col-form-label">الصورة</label>
                    <div class="col-lg-6">
                        <input id="file" name="image" type='file' class="form-control">
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">تعديل</button>

                <a class='btn btn-light' href='{{route("question.index")}}'>الغاء الأمر</a>

            </div>

        </form>
    </div>

@endsection
