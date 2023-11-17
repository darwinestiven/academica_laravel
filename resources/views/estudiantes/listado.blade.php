
@extends('adminlte::page')

@section('title', 'Estudiantes')

@section('content_header')
    <h1>Listado de Estudiantes</h1>
@stop

@section('content')
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
        <button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
        <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
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



