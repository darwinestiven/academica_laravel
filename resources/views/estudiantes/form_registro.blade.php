@extends('adminlte::page')

@section('title', 'Registrar Estudiante')

@section('content_header')
    <h1>Registrar de Estudiantes</h1>
@stop

@section('content')
    <form action="{{ url('/estudiantes/registrar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cod_estudiante" class="form-label">Código Estudiante</label>
            <input type="text" class="form-control" id="cod_estudiante" name="cod_estudiante">
        </div>
        <div class="mb-3">
            <label for="nom_estudiante" class="form-label">Nombre Estudiante</label>
            <input type="text" class="form-control" id="nom_estudiante" name="nom_estudiante">
        </div>
        <div class="mb-3">
            <label for="edad_estudiante" class="form-label">Edad Estudiante</label>
            <input type="text" class="form-control" id="edad_estudiante" name="edad_estudiante">
        </div>
        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
        </div>
        <div class="mb-3">
            <label for="select_sexo" class="form-label">Seleccionar Sexo</label>
            <select class="form-control" id="select_sexo" name="sexo">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="select_ciudad" class="form-label">Seleccionar Ciudad</label>
            <select class="form-control" id="select_ciudad" name="cod_ciudad">
                @foreach($ciudades as $ciudad)
                    <option value="{{ $ciudad->codciudad }}">{{ $ciudad->nomciudad }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="select_barrio" class="form-label">Seleccionar Barrio</label>
            <select class="form-control" id="select_barrio" name="cod_barrio">
                @foreach($barrios as $barrio)
                    <option value="{{ $barrio->codbarrio }}">{{ $barrio->nombarrio }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="select_programa" class="form-label">Seleccionar Programa</label>
            <select class="form-control" id="select_programa" name="cod_programa">
                @foreach($programas as $programa)
                    <option value="{{ $programa->codprograma }}">{{ $programa->nomprograma }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Registrar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
