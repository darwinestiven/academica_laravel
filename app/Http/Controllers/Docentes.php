<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Teacher;

class Docentes extends Controller
{
    public function index()
    {
        $profesores = DB::table('profesor')->get();
        return view('docentes.listado', ['teacher' => $profesores]);
    }

    public function form_registro()
    {
        return view('docentes.form_registro');
    }

    public function registrar(Request $request)
    {
        // Validar que no haya campos vacíos
        $request->validate([
            'cod_docente' => 'required',
            'nom_docente' => 'required',
            'cat_docente' => 'required',
        ]);

        // Verificar si ya existe un docente con el mismo código
        $existingTeacher = Teacher::where('codprofesor', $request->input('cod_docente'))->first();

        if ($existingTeacher) {
            // Si ya existe, redirige con un mensaje de error
            return redirect()->route('form_registro_doc')->with('error', 'El código de docente ya existe');
        }

        // Si no existe, procede con el registro
        $docente = new Teacher();
        $docente->codprofesor = $request->input('cod_docente');
        $docente->nomprofesor = $request->input('nom_docente');
        $docente->catprofesor = $request->input('cat_docente');
        $docente->save();

        return redirect()->route('listado_docentes')->with('success', 'Docente registrado correctamente');
    }
}
