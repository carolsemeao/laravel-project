
   
    @extends('master')

    @section('title', 'Article Full')

    @section('content')
        <div class="container container-full">
            <div class="container-main">
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
                    <button class="new-post button-type" type="submit">Delete post</button>

                    <button class="new-post button-art"><a href="/articles">back to Articles</a></button>
                </form>         
            </div>
            </div>
        </div>
    @endsection
