<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\City;
use App\Models\Neigh;
use App\Models\Program;
use App\Models\Student;

class Estudiantes extends Controller
{
    public function index(){
        $estudiantes = DB::table('estudiante')
            ->join('ciudad', 'ciudad', '=', 'codciudad')
            ->join('barrio', 'barrio', '=', 'codbarrio')
            ->join('programa', 'programa', '=', 'codprograma')
            ->get();
        return view('estudiantes.listado', ['student' => $estudiantes]);
    }

    public function form_registro(){
        $ciudades = City::all();
        $barrios = Neigh::all();
        $programas = Program::all();

        return view('estudiantes.form_registro', ['ciudades' => $ciudades, 'barrios' => $barrios, 'programas' => $programas]);
    }

    public function registrar(Request $request){
        // Validar que no haya campos vacíos
        $request->validate([
            'cod_ciudad' => 'required',
            'cod_barrio' => 'required',
            'cod_programa' => 'required',
            'cod_estudiante' => 'required|unique:estudiante,codestudiante',
            'nom_estudiante' => 'required',
            'edad_estudiante' => 'required',
            'fecha_nacimiento' => 'required',
            'sexo' => 'required',
        ]);

        // Si no existe, procede con el registro
        $estudiante = new Student();
        $estudiante->ciudad = $request->input('cod_ciudad');
        $estudiante->barrio = $request->input('cod_barrio');
        $estudiante->programa = $request->input('cod_programa');
        $estudiante->codestudiante = $request->input('cod_estudiante');
        $estudiante->nomestudiante = $request->input('nom_estudiante');
        $estudiante->edaestudiante = $request->input('edad_estudiante');
        $estudiante->fechestudiante = $request->input('fecha_nacimiento');
        $estudiante->sexestudiante = $request->input('sexo');
        $estudiante->save();

        return redirect()->route('listado_estudiantes')->with('success', 'Estudiante registrado correctamente');
    }

    public function form_edicion($id){
        $estudiante = Student::findorFail($id);
        $ciudades = City::all(); // Agrega esta línea para recuperar las ciudades
        $barrios = Neigh::all();
        $programas = Program::all();
        return view('estudiantes.form_edicion', ['student' => $estudiante, 'ciudades' => $ciudades, 'barrios' => $barrios, 'programas' => $programas]);
    }

    public function editar(Request $request, $id){
        $estudiante = Student::findorFail($id);
        $estudiante->nomestudiante = $request->input('nom_estudiante');
        $estudiante->edaestudiante = $request->input('edad_estudiante');
        $estudiante->fechestudiante = $request->input('fecha_nacimiento');
        $estudiante->sexestudiante = $request->input('sexo');
        $estudiante->ciudad = $request->input('cod_ciudad');
        $estudiante->barrio = $request->input('cod_barrio');
        $estudiante->programa = $request->input('cod_programa');

        // Validar que no haya campos vacíos
        $request->validate([
            'nom_estudiante' => 'required',
            'edad_estudiante' => 'required',
            'fecha_nacimiento' => 'required',
            'sexo' => 'required',
        ]);

        $estudiante->save();
        return redirect()->route('listado_estudiantes')->with('info', 'Estudiante editado exitosamente');
    }

    public function eliminar($id){
        $estudiante = Student::findorFail($id);
        $estudiante->delete();
        return redirect()->route('listado_estudiantes')->with('danger', 'Estudiante eliminado exitosamente');
    }
}
