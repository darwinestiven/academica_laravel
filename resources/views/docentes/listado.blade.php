
@extends('adminlte::page')

@section('title', 'Docentes')

@section('content_header')
    <h1>Listado de Docentes</h1>
@stop

@section('content')
<div style="text-align: right;">
    <a href="/docentes/registrar" type="button" class="btn btn-success">Registrar</a>
</div>
<br>

<div class="row">
    @foreach($teacher as $p)
    <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
            <!-- Puedes personalizar la imagen según tus necesidades -->
            <img src="{{ asset('img/docente.jpg') }}" class="card-img-top" alt="Image">
            <div class="card-body ">
                <p class="card-text ">
                    <strong>Código:</strong> {{$p->codprofesor}}<br>
                    <strong>Nombre:</strong> {{$p->nomprofesor}}<br>
                    <strong>Categoría:</strong> {{$p->catprofesor}}<br>
                </p>
                <div class="btn-group d-flex justify-content-center">
                    <button type="button" class="btn btn-primary mr-2"><i class="fas fa-pencil-alt"></i> Editar</button>
                    <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
                </div>

            </div>
        </div>
    </div>
    @endforeach
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop



