
        @extends('master')

        @section('title', 'New Article')

        @section('content')
        
        <div class="container">
          <h1 class="title">Create new article</h1>  
          <div class="form-container">
                <form class="new" action="/articleCreate" method="post">
                    <label for="creator">Your Name</label>
                     <input type="text" name="creator" placeholder="Created by">
                     <label for="title">Title</label>
                     <input type="text" name="title" placeholder="Title">
                     <label for="content">Text</label>
                    <textarea name="content" placeholder="Content"></textarea>
                    @csrf
                    <button class="new-post create"type="submit">Create</button>
                </form>
            </div>

        </div>
        @endsection
