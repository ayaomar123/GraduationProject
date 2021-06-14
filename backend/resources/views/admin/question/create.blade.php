@extends("layouts.admin")
@section("title","اضافة سؤال جديد")
@section("js")
    <script src="{{ asset('metronic/assets/demo/default/custom/crud/forms/widgets/summernote.js') }}" type="text/javascript"></script>

@endsection
@section("content")
    <div class="m-portlet m-portlet--mobile">
        <form enctype='multipart/form-data' method='post' action='{{route("question.index")}}'>
            @csrf
            <div class='m-form'>
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">القسم </label>
                        <div class="col-lg-6">
                            <select class="form-control chosen-rtl select" name='department_id' id='department_id'>
                                <option selected>-اختر القسم-</option>
                                @foreach($departments as $department)
                                    <option
                                        {{old('department_id')==$department->id?'selected':''}} value='{{$department->id}}'>
                                        {{$department->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">السؤال*</label>
                        <div class="col-lg-6">
                            <textarea id="details" rows='8' name="question_body" placeholder="ادخل السؤال كاملاً"
                                      class="form-control summernote">{{ old("question_body") }}</textarea>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الصورة</label>
                        <div class="col-lg-6">
                            <input id="file" name="image" type='file' class="form-control">
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <button class="btn btn-primary" type="submit">إضافة</button>
                                <a href='{{route("question.index")}}' class="btn btn-secondary">الغاء الامر</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
