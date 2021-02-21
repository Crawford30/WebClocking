<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //====Get User ID===
        $userID = Auth::id();

        //===find the user==
        $user12 = User::find($userID);

        //====check

        if(Auth::check() && $user12->admin == 1) {

            $aaaa = 10;

        } else {
            // return redirect()->route('pages.index');

            return redirect()->route('home');
        }

        //====START A SESSION ===
        session_start();

        $users = User::all();

        foreach ($users as $user) {
            $abc = $user->id;
        }

        $users11 = User::find($abc);

        $ThisYear = date('Y');
        $_SESSION["TheYear"] = $ThisYear;

        //return view('admin.users')->with('users',$users)->with("users11",$users11);




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