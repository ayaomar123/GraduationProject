@extends("layouts.admin")
@section("title", "اختبار القدرات (الأجوبة)  ")
@section("title-side")

@endsection

@section("content")
    <div class="m-portlet m-portlet--mobile">
        <form method='post' action='{{route("answers.update",$item->id)}}'>
            @csrf
            @method("put")
            <div class='m-form'>
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">السؤال </label>
                        <div class="col-lg-8">
                            <select class="form-control chosen-rtl select" name='question_id' id='question_id'>
                                <option selected>-اختر السؤال-</option>
                                @foreach($questions as $question)
                                    <option
                                        {{$question->id==$item->id?'selected':''}} value='{{$question->id}}'>
                                        {{$question->question_body}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label"> الأجوبة</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-input" placeholder="الإجابة الأول"
                                       name="answer"
                                       value='{{ old("answer",$item->answer) }}'>

                                <span class="m-form__help">من فضلك ادخل الجواب الأول </span>
                            </div>
                            <div class="col-md-2"><input name="weight" value='{{ old("weight",$item->weight) }}'
                                                         placeholder="وزن الإجابة" class="m-input form-control"
                                                         type="number"></div>

                        </div>

                    </div>

                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <button class="btn btn-primary" type="submit">تعديل</button>
                                <a href='{{route("answers.index")}}' class="btn btn-secondary">الغاء الامر</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
