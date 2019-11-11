<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use Firebase\JWT\JWT;

class UserController extends Controller
{
    
    public function getUsers(){
        $users = User::all();
        foreach ($users as $key => $user){
            print($user);
        }
    }

    
    public function lend(Request $request){
        $user->name = $request->name;
        $book->title = $request->title;
        $user->save();
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
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        $key = "_gjkhlaefHISDG67893YUMBNLRSUIASRN57dzdg78745vcbyIUFJIS12'";
        $data_token = [
            "email" => $user->email,
            "password" => $user->password,
        ];
        $token = JWT::encode($data_token, $key);
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
