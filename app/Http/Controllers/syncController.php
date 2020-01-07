<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class syncController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role=Role::latest()->with('users')->paginate(20);
        return view('admin.acl.all',['roles'=>$role]);

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
            'user_id'=>'required',
            'role_id'=>'required',
        ]);

        
        User::find(request()->input('user_id'))->roles()->sync(request()->input('role_id'));

        return redirect(route('sync.index'));
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
    public function edit(User $user)
    {
        dd($user->id);
        return view('admin.acl.syncupdate',['user' =>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->input('role_id'));
        return redirect(route('acls.index'));
    }

     
    public function destroy(User $user)
    {
        $user->roles()->detach();
        return redirect(route('sync.index'));
    }
}
