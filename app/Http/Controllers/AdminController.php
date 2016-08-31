<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = User::find($id);
        $data=['user_id'=> $id,
            'author'=>$user->name,
//            'posts'=>$user->posts
        ];
        return view('admin.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function post($id)
    {
        // id: user_id

        $user = User::find($id);
        $data=['user_id'=> $id,
            'author'=>$user->name,
            'now'=>Carbon::now(),
//            'posts'=>$user->posts
        ];
        return view('admin.post',$data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postslist($id)
    {
        //id : user_id

//        echo $_POST['title'].'<br><hr>';

//        if(is_array($_POST)&&count($_POST)>0)//先判斷是否有值
//        {
//            $title=$_POST['title'];
//            $cu_time=$_POST['cu_time'];
//            $content=$_POST['content'];
//            $is_edit=$_POST['is_edit'];
//
//            if(strcmp($is_edit,"true")==0){
//                $post_id=$_POST['post_id'];
//
//                $post=Post::find($post_id);
//                $post-> update([
//                    'title'=>$title,
//                    'content'=>$content,
//                    'updated_at'=>$cu_time,
//                ]);
//
//
//            }
//            else{
//
//                Post::create([
//                    'title'=>$title,
//                    'content'=>$content,
//                    'user_id'=>$id,
//                    'created_at'=>$cu_time,
//                    'updated_at'=>$cu_time,
//                ]);
//            }
//
//
//        }

        $user = User::find($id);

        $data=['user_id'=> $id,
            'author'=>$user->name,
            'posts'=>$user->posts
        ];
        return view('admin.postslist',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // id: post_id
        $post = Post::find($id);
        $user = User::find($post->user_id);

        Carbon::setlocale('zh-TW');

        $data=['post_id'=> $id,
            'title'=>$post->title,
            'content'=>$post->content,
            'user_id'=>$post->user_id,
            'now'=>Carbon::now(),
            'author'=>$user->name
        ];
        return view('admin.edit',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
