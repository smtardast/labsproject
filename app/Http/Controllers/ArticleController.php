<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Article;
use Illuminate\Http\Request;
use Storage;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::all();
        return view('article.article', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $categories=Category::all();
        $users=User::all();
        return view('article.article-create', compact('categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $newarticle= new Article;
        $newarticle->title=$request->title;
        $newarticle->image=$request->image->store('','article');
        $newarticle->text=$request->text;
        $newarticle->authortext=$request->authortext;
        $newarticle->category_id=$request->category_id;
        $newarticle->user_id=$request->user_id;
        //$newarticle->tag=$request->tag;
        $newarticle->save();
        $articles=Article::all();
        return view('article.article', compact('articles'));



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories=Category::all();
        $users=User::all();
        return view('article.article-edit', compact('categories', 'users', 'article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->title=$request->title;
        $article->image=$request->image->store('','article');
        $article->text=$request->text;
        $article->authortext=$request->authortext;
        $article->category_id=$request->category_id;
        $article->user_id=$request->user_id;
        //$article->tag=$request->tag;
        $article->save();
        $articles=Article::all();
        return view('article.article', compact('articles'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
      
        $article->delete();
       
        return redirect()->back();
    }
}
