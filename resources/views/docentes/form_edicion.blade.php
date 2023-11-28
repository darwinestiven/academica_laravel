@extends('adminlte::page')

@section('title', 'Docentes')

@section('content_header')
    <h1>Actualización de Docentes</h1>
@stop

@section('content')
    <form action="{{url('/docentes/editar', $teacher->codprofesor)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="cod_docente" class="form-label">Código Profesor</label>
            <input type="text" class="form-control" id="cod_docente" name="cod_docente" value='{{$teacher->codprofesor}}' disabled>
        </div>
        <div class="mb-3">
            <label for="nom_docente" class="form-label">Nombre Profesor</label>
            <input type="text" class="form-control" id="nom_docente" name="nom_docente" value='{{$teacher->nomprofesor}}'>
        </div>
        <div class="mb-3">
            <label for="cat_docente" class="form-label">Categoría Profesor</label>
            <input type="text" class="form-control" id="cat_docente" name="cat_docente" value='{{$teacher->catprofesor}}'>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Cargar nueva imagen</label>
            <input type="file" class="form-control" id="imagen" name="imagen">
        </div>

        @if($errors->any())
            <div class="alert alert-danger hide-message">
                <p>Todos los campos son obligatorios.</p>
            </div>
        @endif

        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('js/messages.js') }}"></script>
@stop
