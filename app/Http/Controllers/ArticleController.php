<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Category;
use App\Article;
use Illuminate\Http\Request;
use Storage;
use Carbon\Carbon;
use App\Tag;
use App\ArticleTag;
use App\Http\Requests\ArticleStore;
use App\Http\Requests\ArticleUpdate;
use Image;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $articles=Article::validated()->get();
        return view('article.article', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {   
        $tags=Tag::all();
        $categories=Category::all();
        $users=User::all();
        return view('article.article-create', compact('categories', 'users', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleStore $request)
    {
        $newarticle= new Article;
        $newarticle->title=$request->title;
        $newarticle->image=$request->image->store('','article');
        $newarticle->text=$request->text;
        $newarticle->authortext=$request->authortext;
        $newarticle->category_id=$request->category_id;
        $newarticle->user_id=Auth::User()->id;
        $newarticle->day=Carbon::now()->format('d');
        $newarticle->month=Carbon::now()->format('M Y');
        $path=Storage::disk('article')->path($newarticle->image);
        $img=Image::make($path)->resize(750, 268);
        $img->save(); 
       
        if ($newarticle->save()) {
            $tag= Tag::find($request->tag_id);
            $newarticle->tags()->attach($tag);
            return redirect()->back()->with([
                'message' => 'success',
                'textmessage' => 'You were successful!'
            ]);
        }
        return redirect()->back()->with([
            'message' => 'danger',
            'textmessage' => "There's a problem..."
        ]);
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
        $tags=Tag::all();
        $categories=Category::all();
        $users=User::all();
        return view('article.article-edit', compact('categories', 'users', 'article', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleUpdate $request, Article $article)
    {
        $article->title=$request->title;
        $article->image=$request->image->store('','article');
        $article->text=$request->text;
        $article->authortext=$request->authortext;
        $article->category_id=$request->category_id;
        $path=Storage::disk('article')->path($article->image);
        $img=Image::make($path)->resize(750, 268);
        $img->save(); 
        $article->user_id=Auth::User()->id;

        //$article->tag=$request->tag;
        if ($article->save()) {
            $tag=Tag::all();
            $article->tags()->detach($tag);
            $tag= Tag::find($request->tag_id);
            $article->tags()->attach($tag);
        
            return redirect()->back()->with([
                'message' => 'success',
                'textmessage' => 'You were successful!'
            ]);
        }
        return redirect()->back()->with([
            'message' => 'danger',
            'textmessage' => "There's a problem..."
        ]);
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
      ArticleTag::where('article_id', 'LIKE', '%'.$article->id.'%')->delete();
        $article->delete();
       
        return redirect()->back();
    }

    public function validationarticle( Request $request,  $article){
    // find w article id
        // $thearticle = Article::find($article);
        $thearticle = Article::where('id', $article)->first();
        // dd($thearticle);
        $thearticle->validated=true;
        if ($thearticle->save()) {
        
            return redirect()->back()->with([
                'message' => 'success',
                'textmessage' => 'You were successful!'
            ]);
        }
        return redirect()->back()->with([
            'message' => 'danger',
            'textmessage' => "There's a problem..."
        ]);
        $articles=Article::validated()->get();
        return view('article.article', compact('articles'));

    }

    public function validateplz(Article $article){
        $articles=Article::tovalidate()->get();
        return view('article.article-validate', compact('articles', 'article'));

    }
}
