@extends('layouts.frontlayout.frontpage')
@section('style')
    <style>
        li{
            list-style: none;
        }
    </style>
@endsection
@section('content')
    <!-- choose start -->
    <div class="container pt-5">
        <div class="row pb-3">
            <div class="mt-5 col-lg-12 mb-4 text-right">
                <div class="card-header mb-3">
                    <h3 class="white">أكمل الإجابة عن الأسئلة التالية</h3>
                </div>
                <form method='post' action="{{route('quiz.index')}}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                    <div class="card border-0 mb-2">
                        <!--                     <img class="card-img-top" src="images/1.jpg" alt=""> -->
                        @foreach($questions as $question)
                            <div class="card-body bg-light">
                                <h3 class="card-title text-truncate">
                                    {{$question->question_body}}
                                </h3>
                                @if($question->image)
                                    <img class="card-img-top w-50"
                                         src="{{asset('storage/images/'.$question->image)}}" alt=""
                                         style="height: 250px;">
                                @endif
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="hidden" name="question_id[]" value="{{$question->id}}">
                                            <ul>
                                                @foreach($question->answers as $answer)
                                                    <li><input class="btn btn-lg" type="radio"
                                                               name="q{{$answer->question_id}}" value="{{$answer->id}}"
                                                               id="radio-toolbar"> {{$answer->answer}}</li>
                                                    <input type="hidden" name="answer[]" value="{{$answer->weight}}">
                                                @endforeach
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
                        <button type="submit" class="col-3 btn btn-lg"
                                style="background-color: #0b3b65;color: white;margin-right: 70%">التقييم
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- about start -->

@endsection
