<?php

namespace App\Http\Controllers;

use PDF;
use Session;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function index()
    {
        $student = Students::all();

        return view('Lista', compact('student'));
    }

    public function create()
    {
       return view('Inscripciones');
    }
    
    public function store(Request $request)
    {
        $student = new Students();
        $request->validate([
            'ApellidoP' => 'required',
            'ApellidoM' => 'required',
            'Nombre' => 'required',
            'CURP' => 'required | unique:students',
            'Ciudad' => 'required',
            'Domicilio' => 'required',
            'Colonia' => 'required',
            'CP' => 'required | numeric',
            'Telefono' => 'required | numeric',
            'TelefonoP' => 'required | numeric',
            'Email' => 'required | email',
            'Especialidad1' => 'required',
            'Especialidad2' => 'required',
            'Promedio' => 'required | numeric | max:100'

        ]);
        $student->ApellidoP=$request->input('ApellidoP');
        $student->ApellidoM=$request->input('ApellidoM');
        $student->Nombre=$request->input('Nombre');
        $student->CURP=$request->input('CURP');
        $student->Ciudad=$request->input('Ciudad');
        $student->Domicilio=$request->input('Domicilio');
        $student->Colonia=$request->input('Colonia');
        $student->CP=$request->input('CP');
        $student->Telefono=$request->input('Telefono');
        $student->TelefonoP=$request->input('TelefonoP');
        $student->Email=$request->input('Email');
        $student->Especialidad1=$request->input('Especialidad1');
        $student->Especialidad2=$request->input('Especialidad2');
        $student->Promedio=$request->input('Promedio');
        $student->save();
        Session::flash('Info', "Mensaje guardado correctamente");
        return redirect()->route('index');
    }

    public function downloadPdf()
    {
        $students = Students::all();
       view()->share('Lista.pdf',$students);

        $pdf = PDF::loadView('PDF', ['students' => $students])->setPaper('letter', 'landscape');  ;

        return $pdf->download('Lista.pdf');
    }
}

