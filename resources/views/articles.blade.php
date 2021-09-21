

        @extends('master')

        @section('title', 'Article List')

        @section('content')


        <div class="container">
            <h1 class="title">Feed</h1>

            <ul class="list">
            <button class="new-post"><a href="/articleCreate">Create new article</a></button>

                
                @foreach ($articles as $article)
                    <li class="list-item">
                        <h4 class="p-title"><a href="/article/{{$article->id}}">{{$article->title}}</a></h4>
                        
                        <span class="cr-by">created by {{$article->creator}}</span> 
                        
                        <div class="xs-description">
                            {{$article->content}}
                        </div>
                        
                        <span class="uploaded">{{$article->created_at->diffForHumans()}}</span>
                    </li>
                @endforeach
            </ul> 
        </div>
        
        @endsection