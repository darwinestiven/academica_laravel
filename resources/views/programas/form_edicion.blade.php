@extends('adminlte::page')

@section('title', 'Programas')

@section('content_header')
    <h1>Actualización de Programas</h1>
@stop

@section('content')
    <form action="{{url('/programas/editar', $program->codprograma)}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cod_programa" class="form-label">Código Programa</label>
            <input type="text" class="form-control" id="cod_programa" name="cod_programa" value='{{$program->codprograma}}' disabled>
        </div>
        <div class="mb-3">
            <label for="nom_programa" class="form-label">Nombre Programa</label>
            <input type="text" class="form-control" id="nom_programa" name="nom_programa" value='{{$program->nomprograma}}'>
        </div>
        <div class="mb-3">
            <label for="select_facultad" class="form-label">Seleccionar Facultad</label>
            <select class="form-control" id="select_facultad" name="cod_facultad">
                @foreach($facultades as $facultad)
                    <option value="{{ $facultad->codfacultad }}" 
                            {{ $facultad->codfacultad == $program->facultad ? 'selected' : '' }}>
                        {{ $facultad->nomfacultad }}
                    </option>
                @endforeach
            </select>
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
