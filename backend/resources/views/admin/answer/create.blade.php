@extends("layouts.admin")
@section("title","اضافة جواب جديد")

@section("content")
    <div class="m-portlet m-portlet--mobile">
        <form method='post' action='{{route("answers.index")}}'>
            @csrf
            <div class='m-form'>
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">السؤال </label>
                        <div class="col-lg-8">
                            <select class="form-control chosen-rtl select" name='question_id' id='question_id'>
                                <option selected>-اختر السؤال-</option>
                                @foreach($questions as $question)
                                    <option
                                        {{old('Question_id')==$question->id?'selected':''}} value='{{$question->id}}'>
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
                                       name="answer1"
                                       value='{{ old("answer1") }}'>

                                <span class="m-form__help">من فضلك ادخل الجواب الأول </span>
                            </div>
                                <div class="col-md-2"><input name="weight1" value='{{ old("weight1") }}' placeholder="وزن الإجابة" class="m-input form-control" type="number"></div>

                            <label class="col-lg-3 col-form-label"></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-input" placeholder="الإجابة الثانية"
                                       name="answer2"
                                       value='{{ old("answer2") }}'>

                                <span class="m-form__help">من فضلك ادخل الإجابة الثاني </span>
                            </div>
                            <div class="col-md-2"><input name="weight2" value='{{ old("weight2") }}' placeholder="وزن الإجابة" class="m-input form-control" type="number"></div>

                            <label class="col-lg-3 col-form-label"></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-input" placeholder="الإجابة الثالثة"
                                       name="answer3"
                                       value='{{ old("answer3") }}'>

                                <span class="m-form__help">من فضلك ادخل الإجابة الثالثة </span>
                            </div>
                            <div class="col-md-2"><input name="weight3" value='{{ old("weight3") }}' placeholder=" وزن الإجابة" class="m-input form-control" type="number"></div>
                        </div>

                    </div>

                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <button class="btn btn-primary" type="submit">إضافة</button>
                                <a href='{{route("answers.index")}}' class="btn btn-secondary">الغاء الامر</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
