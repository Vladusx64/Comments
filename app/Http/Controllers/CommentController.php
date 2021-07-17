<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::confirmed()->get();
        return view('pages.index', ['comment' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('file_path')->store('uploads', 'public');
        $path = '/storage/' . $path;
        $data = $request->validate([

            'name' => 'required|max:200',

            'email' => 'required|email',

            'message' => 'required|max:400',
            'file_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        Comment::create(\array_merge($data, ['file_path' => $path]));

        return redirect(route('form.create'));
    }


    public function showAll()
    {
        $comments = Comment::new()->get();
        $commentsConf = Comment::confirmed()->get();
        $commentsBlock = Comment::blocked()->get();

        return view('pages.new', [
            'comments' => $comments,
            'commentsConf' => $commentsConf,
            'commentsBlock' => $commentsBlock,
    ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
        if($comment){
            $comment->status = 'confirmed';
            $comment->save();
        }
        return redirect(route('showAll'));
    }
    public function blocked($id)
    {
        $comment = Comment::find($id);
        if($comment){
            $comment->status = 'blocked';
            $comment->save();
        }
        return redirect(route('showAll'));
    }
    public function new($id)
    {
        $comment = Comment::find($id);
        if($comment){
            $comment->status = 'new';
            $comment->save();
        }
        return redirect(route('showAll'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comment::destroy($id);
        return redirect(route('showAll'));
    }
}
