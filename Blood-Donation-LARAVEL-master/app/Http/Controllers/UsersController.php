<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Auth;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class UsersController extends Controller
{

    public function login(){
        return view('pages.login');
    }

    public function registration(){
        return view('pages.registration');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[
            'user_name' => 'required',
             'email'=> 'required',
             'password'=> 'required',
             'gender'=> 'required',
             'birth_date'=> 'required',

             ]);
    $post= new User;
    $post->name=$request->input('user_name');
    $post->email=$request->input('email');
    $post->phone=$request->input('phone');
    $post->password=$request->input('password');
    $post->blood_type=$request->input('blood_type');
    $post->city=$request->input('city');
    $post->gender=$request->input('gender');
    $post->birth_date=$request->input('birth_date');
    $post->save();
    $users=User::all();

    return  125;
    }

    
  
          
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
