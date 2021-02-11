@extends("layouts.admin")
@section("title", "اختبار القدرات  ")
@section("title-side")

@endsection

@section("content")
    <div class="m-portlet m-portlet--mobile">
        <form method='post' action='{{route("question.update",$item->id)}}'>
            @csrf
            @method("put")
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">السؤال </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control m-input"  name="question_body" value='{{ old("name",$item->question_body) }}'>

                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">تعديل</button>
                <a class='btn btn-light' href='{{route("question.index")}}'>الغاء الأمر</a>

            </div>
        </form>
    </div>

@endsection
