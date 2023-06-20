<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::where('deleted_at', null)
            ->orderBy('updated_at', 'DESC')
            ->paginate(10);

        return view('articles.index')
            ->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $request->validated();

        $article = new Article();
        $article->user_id = Auth::user()->id;
        $article->title = $request->get('title');
        $article->description = $request->get('description');

        if ($request->hasFile('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $image = str_replace(' ', '', $request->title) . '_' . 'image' . '.' . $ext;
            $request->file('image')->move('uploads/images', $image);
            $article->image = $image;
        }
        $article->save();

        return redirect('/articles')->with('success', 'Article created successfully');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        if (!$article) {
            return redirect('/articles')->with('error', 'Article not found');
        }

        return view('articles.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $request->validated();

        $article->user_id = Auth::user()->id;
        $article->title = $request->get('title');
        $article->description = $request->get('description');

        if ($request->hasFile('image')) {
            if (file_exists(public_path('uploads/images/' . $article->image . '')) && !empty($article->image)) {
                unlink(public_path('uploads/images/' . $article->image . ''));
            }
            $extension = $request->file('image')->getClientOriginalExtension();
            $image = str_replace(' ', '', $request->title) . '_' . 'image' . '.' . $extension;
            $request->file('image')->move('uploads/images', $image);
            $article->image = $image;
        }

        $article->save();

        return redirect('/articles')->with('success', 'Article updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        if (!$article) {
            return redirect('/articles')->with('error', 'Article not found');
        }

        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article deleted successfully');
    }
}
