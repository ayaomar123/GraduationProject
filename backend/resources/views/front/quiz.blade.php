@extends('layouts.home.frontend')
@section('content')
<!-- choose start -->
<div class="container pt-1">
    <div class="row pb-3">
        <div class="mt-5 col-lg-12 mb-4 text-right">
            <div class="card-header mb-3">
                <h3 class="white">:أكمل الإجابة عن الأسئلة التالية</h3>
            </div>
            <form method='post' action="{{route('quiz.index')}}">
                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <div class="card border-0 mb-2">
                <!--                     <img class="card-img-top" src="images/1.jpg" alt=""> -->
                @foreach($answers as $answer)
                    <div class="card-body bg-light">
                        <h3 class="card-title text-truncate">
                            {{$answer->question->question_body}}
                        </h3>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="hidden" name="{{$answer->question_id}}">
                                    <ul>
                                        <li>{{$answer->answer1}} <input class="btn btn-lg" type="radio" name="answer_id" value="{{$answer->answer1}}"  id="radio-toolbar"></li>
                                        <li>{{$answer->answer2}} <input class="btn btn-lg" type="radio" name="answer_id" value="{{$answer->answer2}}" id="radio-toolbar2"></li>
                                        <li>{{$answer->answer3}} <input class="btn btn-lg" type="radio" name="answer_id" value="{{$answer->answer3}}" id="radio-toolbar3"></li>
                                    </ul>
                                </div>

                            </div>
                            <br>
                        </div>
                    </div>
                    <hr>
                @endforeach
                <div class="col-md-8 mt-0">
                    <!-- <img class="tri" src="images/tril.png" alt=""> -->
                </div>
            </div>
            <div class="col-md-7">
{{--                <button class="myBtn btn btn-lg">التالــي</button>--}}
                <button type="submit" class="col-3 btn btn-lg btn-primary">التقييم</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- about start -->

@endsection
