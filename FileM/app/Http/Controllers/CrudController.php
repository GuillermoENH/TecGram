<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('dash', compact('proyectos'));
    }

    public function create()
    {
        return view('layouts.CRUD');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => ['required','unique:proyectos','max:30','min:3'],
            'Fecha' => ['required','date', 'before_or_equal:today'],
            'Status' => ['required'],
        ]);

        Proyecto::create([
            'Nombre'=> $request->Nombre,
            'Fecha' => $request -> Fecha,
            'Status' => $request-> Status
        ]);

        return redirect()->route('CRUD.index')->with('info','Proyecto creado exitosamente');
    }

    public function edit(Proyecto $proyectos, $id)
    {
        $proyectos = Proyecto::findOrFail($id);
        return view('layouts.edit', compact('proyectos'));
    }

    public function update(Request $request,Proyecto $proyectos, $id)
    {
        $proyectos = Proyecto::findOrFail($id);

        $proyectos->Nombre = $request->Nombre;
        $proyectos->Fecha = $request->Fecha;
        $proyectos->Status = $request->Status;

        $proyectos->save();
        
        return redirect()->route('CRUD.index')->with('infoe','Proyecto actualizado exitosamente');
    }

    public function destroy($id)
    {
        $proyectos = Proyecto::find($id);
        $proyectos->delete();
        return redirect()->route('CRUD.index')->with('infod','Proyecto eliminado exitosamente');
    }

    
}
