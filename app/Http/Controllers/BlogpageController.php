<?php

namespace App\Http\Controllers;

use App\Article;
use App\Blogpage;
use App\Category;
use App\Instagram;
use Illuminate\Http\Request;
use App\Comment;
use App\Tag;

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
        $blogpages=Article::paginate(3);
        $tags=Tag::all();
        return view('pages.blog', compact('blogpages', 'categories', 'instagrams', 'tags'));
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
        $comments= Comment::where('article_id', $blogpage->id)->get();
        $count= Comment::where('article_id', $blogpage->id)->get()->count();
        $tags=Tag::all();
        
        return view('pages.blogpost', compact('blogpage', 'categories', 'instagrams', 'comments', 'count', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogpage  $blogpage
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogpage $blogpage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogpage  $blogpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogpage $blogpage)
    {
        //
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
        
        $blogpages = $blogpage->article;
        // dd($blogpage->article);
        // $blogpages = Article::where('category_id', $blogpage);
        $categories=Category::all();
        $instagrams=Instagram::all();
        $tags=Tag::all();
        return view('pages.blog', compact('blogpages', 'categories', 'instagrams', 'tags'));
    }

    public function tagFilter(Tag $blogpage){
        $blogpages = $blogpage->articles;
        // dd($blogpage->article);
        // $blogpages = Article::where('category_id', $blogpage);
        $categories=Category::all();
        $instagrams=Instagram::all();
        $tags=Tag::all();
        return view('pages.blog', compact('blogpages', 'categories', 'instagrams', 'tags'));
    }

    public function search(Request $request){
        $keyword=$request->input('inputsearcher');
        $blogpages=Article::where('title', 'LIKE', '%'.$keyword.'%')->get()->paginate(3);
        $categories=Category::all();
        $instagrams=Instagram::all();
        $tags=Tag::all();
        return view('pages.blog', compact('blogpages', 'categories', 'instagrams', 'tags'));
    }
}
