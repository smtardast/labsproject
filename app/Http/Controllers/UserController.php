<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $users=User::all();
        return view('users.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $roles=Role::all();
        return view('users.users-create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newuser = new User;
        $newprofile= new Profile;
        $newuser->name=$request->name;
        $newuser->email=$request->email;
        $newuser->password=$request->password;
        $newuser->role_id=$request->role_id; 
        $newuser->save();
        $newprofile->user_id=$newuser->id;
        $newprofile->job=$request->job;
        $newprofile->image=$request->image->store('','profile');
        $newprofile->save();
        $users=User::all();
        return view('users.users', compact('users'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // $this->authorize('update', $user);
        $roles=Role::all();
        return view('users.users-edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {   
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->role_id=$request->role_id;
        $user->save();
        $users=User::all();
        return view('users.users', compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        $users=User::all();
        return view('users.users', compact('users'));
    }
}