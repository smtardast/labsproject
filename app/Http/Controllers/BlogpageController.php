<?php

namespace App\Http\Controllers;

use App\Article;
use App\Blogpage;
use App\Category;
use App\Instagram;
use Illuminate\Http\Request;
use App\Comment;
use App\Tag;
use App\Http\Requests\BlogpageUpdate;



class BlogpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $categories=Category::all();
        $instagrams=Instagram::all();
        $blogpages=Article::validated()->paginate(3);
        $quotes=Blogpage::all()->first();
        $tags=Tag::all();

        return view('pages.blog', compact('blogpages', 'categories', 'instagrams', 'tags', 'quotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blogpage  $blogpage
     * @return \Illuminate\Http\Response
     */
    public function show(Article $blogpage)

    {   
        
        $categories=Category::all();
        $instagrams=Instagram::all();
        $comments= Comment::validated()->where('article_id', $blogpage->id)->get();
        $count= Comment::validated()->where('article_id', $blogpage->id)->get()->count();
        $tags=Tag::all();
        $quotes=Blogpage::all()->first();

        return view('pages.blogpost', compact('blogpage', 'categories', 'instagrams', 'comments', 'count', 'tags', 'quotes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogpage  $blogpage
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogpage $blogpage)
    {
        return view('contents.blogcontent', compact('blogpage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogpage  $blogpage
     * @return \Illuminate\Http\Response
     */
    public function update(BlogpageUpdate $request, Blogpage $blogpage)
    {
        $blogpage->quotetitle=$request->quotetitle;
        $blogpage->quote=$request->quote;
        $blogpage->save();
        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogpage  $blogpage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogpage $blogpage)
    {
        //
    }

    public function categoryFilter(Category $blogpage){
        
        $blogpages = $blogpage->article->paginate(3);
        // dd($blogpage->article);
        // $blogpages = Article::where('category_id', $blogpage);
        $categories=Category::all();
        $instagrams=Instagram::all();
        $tags=Tag::all();
        $quotes=Blogpage::all()->first();

        return view('pages.blog', compact('blogpages', 'categories', 'instagrams', 'tags', 'quotes'));
    }

    public function tagFilter(Tag $blogpage){
        $blogpages = $blogpage->articles->paginate(3);
        // dd($blogpage->article);
        // $blogpages = Article::where('category_id', $blogpage);
        $categories=Category::all();
        $instagrams=Instagram::all();
        $tags=Tag::all();
        $quotes=Blogpage::all()->first();

        return view('pages.blog', compact('blogpages', 'categories', 'instagrams', 'tags', 'quotes'));
    }

    public function search(Request $request){
        $keyword=$request->input('inputsearcher');
        //dd(Article::validated()->where('title', 'LIKE', '%'.$keyword.'%')->get());
        $blogpages=Article::validated()->searchblog($keyword)->paginate(3);
        $categories=Category::all();
        $instagrams=Instagram::all();
        $tags=Tag::all();
        $quotes=Blogpage::all()->first();

        return view('pages.blog', compact('blogpages', 'categories', 'instagrams', 'tags', 'quotes'));
    }
}
