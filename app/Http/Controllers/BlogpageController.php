<?php

namespace App\Http\Controllers;

use App\Article;
use App\Blogpage;
use App\Category;
use App\Instagram;
use Illuminate\Http\Request;

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
        $blogpages=Article::all();
        return view('pages.blog', compact('blogpages', 'categories', 'instagrams'));
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
    {   $categories=Category::all();
        $instagrams=Instagram::all();
        return view('pages.blogpost', compact('blogpage', 'categories', 'instagrams'));
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
}
