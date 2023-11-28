
@extends('adminlte::page')

@section('title', 'Estudiantes')

@section('content_header')
    <h1>Listado de Estudiantes</h1>
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
      <a href="/estudiantes/registrar" type="button" class="btn btn-success">Registrar</a>
      
  </div>
  <br>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Código</th>
        <th scope="col">Nombre</th>
        <th scope="col">Edad</th>
        <th scope="col">Fecha de Nacimiento</th>
        <th scope="col">Sexo</th>
        <th scope="col">Ciudad</th>
        <th scope="col">Barrio</th>
        <th scope="col">Programa</th>
        <th scope="col">Opcion</th>
      </tr>
    </thead>
    <tbody>
      @php
          $i = 1
      @endphp

      @foreach($student as $p)
      <tr>
        <th scope="row">{{$i}}</th>
        <td>{{$p->codestudiante}}</td>
        <td>{{$p->nomestudiante}}</td>
        <td>{{$p->edaestudiante}}</td>
        <td>{{$p->fechestudiante}}</td>
        <td>{{$p->sexestudiante}}</td>
        <td>{{$p->nomciudad}}</td>
        <td>{{$p->nombarrio}}</td>
        <td>{{$p->nomprograma}}</td>
        <td>
          <a href="{{route('editar_est', $p->codestudiante)}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
          <a href="{{route('eliminar_est', $p->codestudiante)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
        </td>
        @php
          $i = $i + 1
        @endphp
      </tr>
      @endforeach
    </tbody>
  </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('js/messages.js') }}"></script>
@stop

