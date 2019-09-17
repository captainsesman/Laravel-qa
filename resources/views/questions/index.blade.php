@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._messages')
            <div class="card">
                <div class="card-header">
                    
                    <div class="d-flex">
                        <h3>All Questions</h3>
                        <div class="ml-auto">
                            <a href="{{route('questions.create')}}" class="btn btn-outline-secondary"> Ask Questions</a>
                        </div>
                    </div>
                </div>
                 
                <div class="card-body">
                    @foreach ($questions as $question)

                    <div class="media">
                        <div class="d-flex flex-column counters">
                            <div class="vote">
                                <strong>{{$question->votes}}</strong>{{str_plural('vote', $question->votes)}}
                            </div>
                            <div class="status {{$question->status}}">
                                <strong>{{$question->answers}}</strong>{{str_plural('answer', $question->answers)}}
                            </div>
                            <div class="views">
                               {{$question->views ." ". str_plural('view', $question->wiews)}}
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="d-flex align-items-center">
                                 <h3 class="mt-0"> <a href="{{$question->url}}"> {{$question->title}}</a></h3>
                                 <div class="ml-auto">
                                    @can('update', $question)
                                     <a href="{{route('questions.edit', $question->id)}}" class="btn btn-sm btn-outline-info"> Edit</a>
                                     @endcan
                                 </div>
                                 @can('update', $question)
                                 <form class="q-delete" action="{{route('questions.destroy', $question->id)}}" method="post" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are Your Sure You Want to Delete??')"> Delete</button>
                                     
                                 </form>
                                 @endcan
                                 
                                
                            </div>
                            
                            <p class="lead">
                               Asked By  <a href="{{$question->user->url}}"> {{$question->user->name}}</a>
                               <small class="text-muted"> {{$question->created_date}}</small>
                            </p>
                            {{ str_limit($question->body, 250)}}

                        </div>
                    </div>
                    <hr>
                    @endforeach

                    {{ $questions->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
