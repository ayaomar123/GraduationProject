@extends("layouts.admin")
@section("title","اضافة سؤال جديد")

@section("content")
    <div class="m-portlet m-portlet--mobile">
        <form method='post' action='{{route("question.index")}}'>
            @csrf
            <div class='m-form'>
                <div class="m-portlet__body">
                    <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">السؤال</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-input" placeholder="ادخل السؤال كاملاً" name="question_body"
                                       value='{{ old("question_body") }}'>
                                <span class="m-form__help">من فضلك ادخل السؤال </span>
                            </div>
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
