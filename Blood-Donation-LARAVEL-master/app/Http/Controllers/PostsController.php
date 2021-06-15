<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;
use Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        // $city=auth()->user()->city;
        // $posts=Post::where('city',$city)->get();
        $posts=Post::all();
        return view('pages.posts')->with('posts',$posts);
    }

    public function myposts(){
        $user_id=auth()->user()->id;
        $posts=Post::where('user_id',$user_id)->get();
        return view('pages.myposts')->with('posts',$posts);;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('pages.create_post');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
                'description' => 'required',
                 'city'=> 'required',
                 'blood_type_needed'=> 'required']);

        $post= new Post;
        $post->title=$request->input('title');
        $post->user_id=auth()->user()->id;
        $post->description=$request->input('description');
        $post->phone=$request->input('phone');
        $post->city=$request->input('city');
        $post->blood_volume=$request->input('blood_volume');
        $post->blood_type_needed=$request->input('blood_type_needed');
        $post->save();
        return  redirect('/posts')->with('success','post created');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        $post= Post::where('p_id',$id)->get(); 
        return view('pages.show_post')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post= Post::where('p_id',$id)->get(); 
        return view('pages.edit_post')->with('post', $post);
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
        $this->validate($request,[
            'description' => 'required',
             'city'=> 'required',
             'blood_type_needed'=> 'required']);
    $post= Post::where('p_id',$id)->first();
    $post->user_id=auth()->user()->id;
    
    $post->title=$request->input('title');
    $post->description=$request->input('description');
    $post->phone=$request->input('phone');
    $post->city=$request->input('city');
    $post->blood_volume=$request->input('blood_volume');
    $post->blood_type_needed=$request->input('blood_type_needed');
    $post->save();
    return  redirect('/posts')->with('success','post updated');

    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::where('p_id',$id)->first();
        $post->delete();
        return redirect('/posts')->with('success','Post Deleted');
    }
}

