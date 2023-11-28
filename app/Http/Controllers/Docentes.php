<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Teacher;

class Docentes extends Controller
{
    public function index(){
        $profesores = DB::table('profesor')->get();
        return view('docentes.listado', ['teacher' => $profesores]);
    }

    public function form_registro(){
        return view('docentes.form_registro');
    }

    public function registrar(Request $request)
    {
        // Validar que no haya campos vacíos
        $request->validate([
            'cod_docente' => 'required|unique:profesor,codprofesor',
            'nom_docente' => 'required',
            'cat_docente' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048|required', // Validación para la imagen
        ]);

        // Si no existe, procede con el registro
        $docente = new Teacher();
        $docente->codprofesor = $request->input('cod_docente');
        $docente->nomprofesor = $request->input('nom_docente');
        $docente->catprofesor = $request->input('cat_docente');
        

        // Manejar la foto del docente
        if ($request->hasFile('imagen')) {
            // Verificar si hay un archivo de imagen en la solicitud

            $foto = $request->file('imagen');
            // Obtener el archivo de imagen de la solicitud y asignarlo a la variable $foto

            $nombreFoto = time() . '.' . $foto->getClientOriginalExtension();
            // Crear un nombre único para la imagen basado en la marca de tiempo actual y su extensión original

            Storage::disk('public')->put($nombreFoto, file_get_contents($foto));
            // Almacenar la imagen en el disco público utilizando el nombre único y los contenidos del archivo

            $docente->imagen = $nombreFoto;
            // Asignar el nombre único de la imagen al atributo 'imagen' del modelo de docente
        }

        $docente->save();

        return redirect()->route('listado_docentes')->with('success', 'Docente registrado correctamente');
    }

    public function form_edicion($id){
        $docente = Teacher::findorFail($id);
        return view('docentes.form_edicion', ['teacher' => $docente]);
    }

    public function editar(Request $request, $id){

        // Validar que no haya campos vacíos
        $request->validate([
            'nom_docente' => 'required',
            'cat_docente' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable', // Validación para la imagen
        ]);

        $docente = Teacher::findorFail($id);

        $docente->nomprofesor = $request->input('nom_docente');
        $docente->catprofesor = $request->input('cat_docente');

        // Manejar la carga de la imagen
        if ($request->hasFile('imagen')) {
            // Guardar la nueva imagen y obtener la ruta
            $rutaImagen = $request->file('imagen')->store('public/docentes');
            
            // Actualizar la columna de imagen en la base de datos
            $docente->imagen = str_replace('public/', '', $rutaImagen);
        }

        $docente->save();
        return redirect()->route('listado_docentes')->with('info', 'Docente editado exitosamente');
    }

    public function eliminar($id){
        $docente = Teacher::findorFail($id);

        // Eliminar la foto si existe
        if ($docente->imagen) {
            Storage::disk('public')->delete($docente->imagen);
        }

        $docente->delete();
        return redirect()->route('listado_docentes')->with('danger', 'Docente eliminado exitosamente');
    }
}
