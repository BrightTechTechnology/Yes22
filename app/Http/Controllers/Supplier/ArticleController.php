<?php

namespace App\Http\Controllers\Supplier;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::where('id_user', '=', \Auth::user()->id)
            ->where('active', true)
            ->orderBy('id', 'desc')
            ->paginate(25);
        return view('supplier.article', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('supplier.articleCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $article = new Article;
        $article->content = \Input::get('content');
        $article->title = \Input::get('title');
        $article->active = true;
        $article->id_user = \Auth::user()->id;
        $article->save();

        return redirect()->action('Supplier\ArticleController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $article = Article::where('id', '=', $id)->first();
        return view ('supplier.articleEdit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $article = Article::where('id', '=', $id)->first();
        $article->content = \Input::get('content');
        $article->title = \Input::get('title');
        $article->save();
        return redirect()->action('Supplier\ArticleController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $article = Article::where('id', '=', $id)->first();
        $article->active = false;
        $article->save();
        return redirect()->action('Supplier\ArticleController@index');
    }
}
