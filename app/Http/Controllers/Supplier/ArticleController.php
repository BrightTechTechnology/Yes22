<?php

namespace App\Http\Controllers\Supplier;

use Illuminate\Http\Request;
use App\Article;
use App\User;
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
        $articles = User::find(\Auth::user()->id)->article()
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
        $title = '';
        $content = '';

        if (\Input::old('title')) {
            $title = \Input::old('title');
        }

        if (\Input::old('content')) {
            $content = \Input::old('content');
        }

        return view('supplier.articleCreate', compact ('title', 'content'));
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
        $article->user_id = \Auth::user()->id;

        if (\Input::has('title') && \Input::has('content')) {
            $article->save();
            return redirect()->action('Supplier\ArticleController@index');
        }

        \Session::flash('flash-message', 'ERROR: Article title and content needs to be filled out.');
        return redirect()->action('Supplier\ArticleController@create')->withInput();
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
