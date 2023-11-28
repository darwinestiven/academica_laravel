<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\Program;
use App\Models\Faculty;

class Programas extends Controller
{
    public function index(){
        $programas = DB::table('programa')
                    ->join('facultad', 'facultad', '=', 'codfacultad')
                    ->get();
        return view('programas.listado', ['program' => $programas]);
    }

    public function form_registro(){
        $facultades = Faculty::all();
        return view('programas.form_registro', ['facultades' => $facultades]);
    }

    public function registrar(Request $request){
        // Validar que no haya campos vacíos
        $request->validate([
            'cod_facultad' => 'required',
            'cod_programa' => 'required|unique:programa,codprograma',
            'nom_programa' => 'required',
        ]);

        // Si no existe, procede con el registro
        $programa = new Program();
        $programa->facultad = $request->input('cod_facultad');
        $programa->codprograma = $request->input('cod_programa');
        $programa->nomprograma = $request->input('nom_programa');
        $programa->save();

        return redirect()->route('listado_programas')->with('success', 'Programa registrado correctamente');
    }

    public function form_edicion($id){
        $programa = Program::findorFail($id);
        $facultades = Faculty::all(); // Agrega esta línea para recuperar las facultades
        return view('programas.form_edicion', ['program' => $programa, 'facultades' => $facultades]);
    }

    public function editar(Request $request, $id){
        $programa = Program::findorFail($id);
        $programa->nomprograma = $request->input('nom_programa');
        $programa->facultad = $request->input('cod_facultad');
        // Validar que no haya campos vacíos
        $request->validate([
            'nom_programa' => 'required',
        ]);
        $programa->save();
        return redirect()->route('listado_programas')->with('info', 'Programa editado exitosamente');
    }

    public function eliminar($id){
        $programa = Program::findorFail($id);
        $programa->delete();
        return redirect()->route('listado_programas')->with('danger', 'Programa eliminado exitosamente');
    }
}
