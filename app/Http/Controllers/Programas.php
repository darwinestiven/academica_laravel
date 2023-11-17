<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\Program;
use App\Models\Faculty;

class Programas extends Controller
{
    public function index()
    {
        $programas = DB::table('programa')
                    ->join('facultad', 'facultad', '=', 'codfacultad')
                    ->get();

        return view('programas.listado', ['program' => $programas]);
    }

    public function form_registro()
    {
        $facultades = Faculty::all();

        return view('programas.form_registro', ['facultades' => $facultades]);
    }

    public function registrar(Request $request)
    {
        // Validar que no haya campos vacíos
        $request->validate([
            'cod_facultad' => 'required',
            'cod_programa' => 'required|unique:programa,codprograma',
            'nom_programa' => 'required',
        ]);

        // Verificar si ya existe un programa con el mismo código
        $existingProgram = Program::where('codprograma', $request->input('cod_programa'))->first();

        if ($existingProgram) {
            // Si ya existe, redirige con un mensaje de error
            return redirect()->route('form_registro_pro')->with('error', 'El código de programa ya existe');
        }

        // Si no existe, procede con el registro
        $programa = new Program();
        $programa->facultad = $request->input('cod_facultad');
        $programa->codprograma = $request->input('cod_programa');
        $programa->nomprograma = $request->input('nom_programa');
        $programa->save();

        return redirect()->route('listado_programas')->with('success', 'Programa registrado correctamente');
    }
}
