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

        @section('title', 'New Article')

        @section('content')
        <h1 class="title">Create new article</h1>
        <div class="container-fluid">
            <div class="form-container">
                <form class="create-form" action="/articleCreate" method="post">
                    <input type="text" name="title" placeholder="Title">
                    <input type="text" name="creator" placeholder="Created by">
                    <textarea name="content" placeholder="Content"></textarea>
                    @csrf
                    <button class="new-post"type="submit">Create</button>
                </form>
            </div>

        </div>
        @endsection
    </body>
</html>