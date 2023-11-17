
@extends('adminlte::page')

@section('title', 'Docentes')

@section('content_header')
    <h1>Registrar de Docentes</h1>
@stop

@section('content')
    <form action="{{url('/docentes/registrar')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cod_docente" class="form-label">Código Docente</label>
            <input type="text" class="form-control" id="cod_docente" name="cod_docente">
        </div>
        <div class="mb-3">
            <label for="nom_docente" class="form-label">Nombre Docente</label>
            <input type="text" class="form-control" id="nom_docente" name="nom_docente">
        </div>
        <div class="mb-3">
            <label for="cat_docente" class="form-label">Categoría Docente</label>
            <input type="text" class="form-control" id="cat_docente" name="cat_docente">
        </div>
        <button type="submit" class="btn btn-success">Registrar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

