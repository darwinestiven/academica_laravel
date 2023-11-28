
@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Registrar de Facultades</h1>
@stop

@section('content')
    <form action="{{url('/facultades/registrar')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cod_facultad" class="form-label">Código Facultad</label>
            <input type="text" class="form-control" id="cod_facultad" name="cod_facultad">
        </div>
        <div class="mb-3">
            <label for="nom_facultad" class="form-label">Nombre Facultad</label>
            <input type="text" class="form-control" id="nom_facultad" name="nom_facultad">
        </div>

        @if($errors->any())
            <div class="alert alert-danger hide-message">
                <p>El código ya existe o hay campos vacíos.</p>
            </div>
        @endif

        <button type="submit" class="btn btn-success">Registrar</button>
    </form>
 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('js/messages.js') }}"></script>
@stop

