
@extends('adminlte::page')

@section('title', 'Docentes')

@section('content_header')
    <h1>Listado de Docentes</h1>
@stop

@section('content')

    @if(session('success'))
        <div class="alert alert-success hide-message">
            {{ session('success') }}
        </div>
    @endif

    @if(session('info'))
        <div class="alert alert-info hide-message">
            {{ session('info') }}
        </div>
    @endif

    @if(session('danger'))
        <div class="alert alert-danger hide-message">
            {{ session('danger') }}
        </div>
    @endif

    <div style="text-align: right;">
        <a href="/docentes/registrar" type="button" class="btn btn-success">Registrar</a>
    </div>
    <br>

    <div class="row">
        @foreach($teacher as $p)
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                @if($p->imagen)
                    <img src="{{ asset('storage/' . $p->imagen) }}" class="card-img-top" alt="Image" style="height: 350px; object-fit: cover;">
                @else
                    <img src="{{ asset('img/default.jpg') }}" class="card-img-top" alt="Default Image" style="height: 350px; object-fit: cover;">
                @endif
                <div class="card-body ">
                    <p class="card-text ">
                        <strong>Código:</strong> {{$p->codprofesor}}<br>
                        <strong>Nombre:</strong> {{$p->nomprofesor}}<br>
                        <strong>Categoría:</strong> {{$p->catprofesor}}<br>
                    </p>
                    <div class="btn-group d-flex justify-content-center">
                        <a href="{{route('editar_doc', $p->codprofesor)}}" class="btn btn-primary mr-2"><i class="fas fa-pencil-alt">  Editar</i></a>
                        <a href="{{route('eliminar_doc', $p->codprofesor)}}" class="btn btn-danger"><i class="fas fa-trash-alt">  Eliminar</i></a>
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

@section('js')
    <script src="{{ asset('js/messages.js') }}"></script>
@stop

