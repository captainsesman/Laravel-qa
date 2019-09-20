 <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">                
                <div class="card-body">
                    <div class="card-title">
                        <h2>{{$answersCount . " " . str_plural('Answers', $answersCount)}}</h2>
                    </div>
                    <hr>
                    @include('layouts._messages')
                    @foreach($answers as $answer)
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