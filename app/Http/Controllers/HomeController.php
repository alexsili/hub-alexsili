<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
    {
        $articles = Article::where('deleted_at', null)
            ->orderBy('updated_at', 'DESC')
            ->get();

        $mostPopularArticles = Article::where('deleted_at', null)
            ->orderBy('views', 'DESC')
            ->get();

        return view('home.index')
            ->with('articles', $articles)
            ->with('mostPopularArticles', $mostPopularArticles);
    }

    public function article($id)
    {
        $article = Article::find($id);

        if (!$article) {
            return redirect(route('home'))->with('error', 'Article not found');
        }

        $mostPopularArticles = Article::where('deleted_at', null)
            ->orderBy('views', 'DESC')
            ->get();



        return view('home.show')->with('article', $article)
            ->with('mostPopularArticles', $mostPopularArticles);

    }

    public function default()
    {
        return view('default-home');
    }
}
