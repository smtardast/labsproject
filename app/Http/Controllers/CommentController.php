<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;
use App\Http\Requests\CommentStore;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments= Comment::validated()->get();
        return view('comment.comment', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comments= Comment::tovalidate()->get();
        return view('comment.comment-validate', compact('comments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentStore $request)
    {
        $newcomment= new Comment;
        $newcomment->name=$request->name;
        $newcomment->title=$request->title;
        $newcomment->text=$request->text;
        $newcomment->email=$request->email;
        $newcomment->article_id=$request->article_id;
        $newcomment->day=Carbon::now()->format('d M Y');
        if ($newcomment->save()) {
        
            return redirect()->back()->with([
                'message' => 'success',
                'textmessage' => 'You were successful!'
            ]);
        }
        return redirect()->back()->with([
            'message' => 'danger',
            'textmessage' => "There's a problem..."
        ]);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {   
        
        $comment->validated=true;
        if ($comment->save()) {
        
            return redirect()->back()->with([
                'message' => 'success',
                'textmessage' => 'You were successful!'
            ]);
        }
        return redirect()->back()->with([
            'message' => 'danger',
            'textmessage' => "There's a problem..."
        ]);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back();
    }
}
