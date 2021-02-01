<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller as BaseController;

class News extends BaseController
{
    public function showArticle($id)
    {
        $article = Article::find($id);

        return view('2016.article')->with('article', $article);
    }
}
