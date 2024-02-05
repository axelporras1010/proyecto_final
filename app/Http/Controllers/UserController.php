<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserCreateRequest $request)
    {
        // $request->validate([
        //     'name' => 'required|min:3|max:20',
        //     'username' => 'required',
        //     'email' => 'required|email|uniqu:eusers',
        //     'password' => 'required'
        // ]);
        $user = User::create($request->all());
        return redirect()->route('users.show', $user->id)->with('success','Usuario creado correctamente');
    }

    public function show(User $user) 
    {   
        // $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UserEditRequest $request, User $user)
    {
        // $user = User::findOrFail($id);
        $data = $request->only('name','username','email');
        $password = $request->input('password');
        if($password)
            $data['password'] = bcrypt($password);
        $user->update($data);
        return redirect()->route('users.show', $user->id)->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'Usuario eliminado correctamente');
    }
}
