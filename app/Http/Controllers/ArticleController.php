<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('status', 'published')
                           ->orderBy('published_at', 'desc')
                           ->paginate(12);
                           
        return view('artikel', compact('articles'));
    }
    
    public function show($slug)
    {
        $article = Article::where('slug', $slug)
                          ->where('status', 'published')
                          ->firstOrFail();
                          
        $related_articles = Article::where('status', 'published')
                                   ->where('id', '!=', $article->id)
                                   ->orderBy('published_at', 'desc')
                                   ->take(3)
                                   ->get();
                                   
        return view('artikel_detail', compact('article', 'related_articles'));
    }
}
