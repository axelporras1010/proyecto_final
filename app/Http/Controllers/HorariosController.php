<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class HorariosController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('horario_index'), 403);
        $horarios = Horario::paginate(5);
        $users = User::all();
        return view('horario.index', compact('horarios', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('horario_create'), 403);
        $users = User::all();
        return view('horario.create', compact('users'));
    }

    public function store(Request $request)
    {
        $horarios = Horario::create($request->all()); 
        return redirect()->route('horarios.show', $horarios->id)->with('success','Horario creado correctamente');
    }

    public function show(Horario $horario) 
    {   
        abort_if(Gate::denies('horario_show'), 403);
        $users = User::all();
        return view('horario.show', compact('horario', 'users'));
    }

    public function edit(Horario $horario)
    {
        abort_if(Gate::denies('horario_edit'), 403);
        $users = User::all();
        return view('horario.edit', compact('horario', 'users'));
    }

    public function update(Request $request, Horario $horario)
    {
        $horario->update($request->all()); 
        return redirect()->route('horarios.show', $horario->id)->with('success', 'Horario actualizado correctamente');
    }

    public function destroy(Horario $horario)
    {
        abort_if(Gate::denies('horario_destroy'), 403);

        $horario->delete();
        return back()->with('success', 'horario eliminado correctamente');
    }
}
