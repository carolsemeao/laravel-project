<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
    public function showAll() {

        $articles = Article::all()->sortByDesc("created_at");

        return view('/articles', ['articles' => $articles]);
    }

    

    public function create(Request $request) { 
        $article = new Article();
        $article->title = $request->title;
        $article->creator = $request->creator;
        $article->content = $request->content;
        
        $article->save();
        
        return redirect('/articles');
    }

    public function view($id) {
        $article = Article::findOrFail($id);

        return view('articleFull', ['article' => $article]);
    }

    public function delete($id) {
        $result = Article::findOrFail($id)->delete();

        return redirect('/articles');
    }
}
