<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>



    <body>

        @extends('master')

        @section('title', 'Article List')

        @section('content')


        <div class="container-fluid">
            <h1 class="title">All Articles</h1>

            <ul class="list">
            <button class="new-post"><a href="/articleCreate">Create new article</a></button>

                @foreach ($articles as $article)
                    <li class="list-item">
                        <a href="/article/{{$article->id}}">{{$article->title}}</a>
                        
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

    </body>
</html>