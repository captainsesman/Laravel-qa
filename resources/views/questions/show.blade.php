@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                    
                    <div class="d-flex align-items-center">
                        <h3>{{$question->title}}</h3>
                        <div class="ml-auto">
                            <a href="{{route('questions.index')}}" class="btn btn-outline-secondary"> Back to All Question</a>
                        </div>

                    </div>
                     <hr>
                </div>

                <div class="media">
                       <div class="d-flex flex-column vote-controls">                        
                            <a title=" This Question is Useful" class="vote-up">
                                
                                <li class="fas fa-caret-up fa-3x"></li>
                            </a>
                             <span class="votes-count">4190</span>
                           
                            <a title=" This Question is not Useful" class="vote-down off">
                                <li class="fas fa-caret-down fa-3x"></li>
                            </a>
                            </a>
                             <a title=" click to mark as favorite question (click again to undo) " class="favorite mt-2 favorited">
                                
                                <li class="fas fa-star fa-2x"></li>
                            </a>
                                 <span class="favorite-count">12344</span>
                            </a>
                           
                        </div>
                   <div class="media-body">                 
                       {!! $question->body_html !!}
                        <div class="float-right">
                            <span class="text-muted">Answered{{$question->created_date}}</span>
                            <div class="media mt-2">
                                <a href="{{$question->user->url}}" class="pr-2">
                                    <img src="{{$question->user->avatar}}">
                                </a>
                                <div class="media-body mt-1">
                                    <a href="{{$question->user->url}}">
                                        {{$question->user->name}}
                                    </a>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">                
                <div class="card-body">
                    <div class="card-title">
                        <h2>{{$question->answers_count . " " . str_plural('Answers', $question->answers_count)}}</h2>
                    </div>
                    <hr>
                    @foreach($question->answers as $answer)
                    <div class="media">
                         <div class="d-flex flex-column vote-controls">                        
                            <a title=" This Question is Useful" class="vote-up">
                                
                                <li class="fas fa-caret-up fa-3x"></li>
                            </a>
                             <span class="votes-count">4190</span>
                           
                            <a title=" This Question is not Useful" class="vote-down off">
                                <li class="fas fa-caret-down fa-3x"></li>
                            </a>
                            </a>
                             <a title=" Mark this as Best Answer " class="vote-accepted mt-2 ">
                                
                                <li class="fas fa-check fa-2x"></li>
                            </a>
                                 
                            </a>
                           
                        </div>
                        <div class="media-body">
                            {!! $answer-> body_html!!}
                            <div class="float-right">
                                <span class="text-muted">Answered{{$answer->created_date}}</span>
                                <div class="media mt-2">
                                    <a href="{{$answer->user->url}}" class="pr-2">
                                        <img src="{{$answer->user->avatar}}">
                                    </a>
                                    <div class="media-body mt-1">
                                        <a href="{{$answer->user->url}}">
                                            {{$answer->user->name}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    @endforeach
                    
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
