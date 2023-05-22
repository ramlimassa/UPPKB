<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'content' => 'admin/user/index',
            'title' => 'Admin',
            'users' => User::all(),
        ];
        return view('layouts.wrapper', $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'content' => 'admin/user/create',
            'title' => 'Admin',
            'header' => 'Create New User',
            'button' => 'Create Account',
        ];
        return view('layouts.wrapper', $data );
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
        //dd($request->all());
        $data = $request->validate ([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:3',
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get post by ID
        $user = User::findOrFail($id);

        //render user data
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = [
            'content' => 'admin/user/create',
            'user' => User::findOrFail($id),
            'title' => 'Admin',
            'header' => 'Edit User',
            'button' => 'Update Account'
        ];
        return view('layouts.wrapper', $data );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        $data = $request->validate ([
            'name' => 'required',
            'username' => 'required|unique:users,username,'. $user->id,
            'email' => 'required|unique:users,email,'. $user->id,
            //'password' => 'min:3',
        ]);

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        } else {
            $data['password'] = $user->password;
        }
        
        $user->update($data);
        Alert::success('Success', 'Data Berhasil Diupdate');
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect('/admin');
    }
}
