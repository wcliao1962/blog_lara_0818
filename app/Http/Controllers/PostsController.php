<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('blogs.posts.index');
    }

 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$id: post_id


        $post = Post::find($id);
//        echo $post->title.'<br>';
//        echo $post->content.'<br><hr>';
//        foreach ($post->comments as $comment) {
//            echo $comment->title.'<br>';
//        }

        $user = User::find($post->user_id);
//        echo $user->name.'<br>';

        $data=['id'=> $id,
            'title'=>$post->title,
            'content'=>$post->content,
            'author'=>$user->name,
            'date'=>$post->updated_at,
            'comments'=>$post->comments
        ];
        return view('blogs.posts.show', $data);
    }


}
