<?php

namespace App\Http\Controllers;

use App\User;
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
        $data=['user_id'=> $id,
//            'author'=>$user->name,
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
        $data=['user_id'=> $id,
//            'author'=>$user->name,
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
        $data=['post_id'=> $id,
//            'author'=>$user->name,
//            'posts'=>$user->posts
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
