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

    @section('title', 'Article Full')

    @section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="post-container">
                <h2 class="post-title">{{$article->title}}</h2>
                <span class="created">Article created by {{$article->creator}}</span>
                <div class="description">
                    {{$article->content}}
                </div>
                <span class="uploaded">{{$article->created_at->diffForHumans()}}</span>

                <form action="/article/{{$article->id}}" method="post">
                    @csrf

                    @method('delete')
                    <button class="new-post" type="submit">Delete post</button>

                    <button class="new-post"><a href="/articles">back to Articles</a></button>
                </form>         
            </div>
        </div>
    </div>
    
    

    @endsection

    </body>
</html>