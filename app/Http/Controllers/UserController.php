<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;


class UserController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('user_index'), 403);
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), 403);
        $roles = Role::all()->pluck('name', 'id');
        return view('users.create', compact('roles'));
    }

    public function store(UserCreateRequest $request)
    {

        $user = User::create($request->all());

        $roles = array_map(fn($val) => (int)$val, $request->input('roles', []));
        $user->syncRoles($roles);
        return redirect()->route('users.show', $user->id)->with('success','Usuario creado correctamente');
    }

    public function show(User $user) 
    {   
        abort_if(Gate::denies('user_show'), 403);
        $user->load('roles');
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        abort_if(Gate::denies('user_edit'), 403);

        $roles = Role::all()->pluck('name','id');
        $user->load('roles');
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(UserEditRequest $request, User $user)
    {
       
        $data = $request->only('name','username','email');
        $password = $request->input('password');
        if($password)
            $data['password'] = bcrypt($password);
        $user->update($data);

        $roles = array_map(fn($val) => (int)$val, $request->input('roles', []));
        $user->syncRoles($roles);
        return redirect()->route('users.show', $user->id)->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_destroy'), 403);

        if(auth()->user()->id == $user->id){
            return redirect()->route('users.index', $user->id);
        }

        $user->delete();
        return back()->with('success', 'Usuario eliminado correctamente');
    }
}
