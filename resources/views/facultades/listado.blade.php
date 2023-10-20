
@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Listado de Facultades</h1>
@stop

@section('content')

<div style="text-align: right;">
    <button type="button" class="btn btn-success">Registrar</button>
    
</div>
<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Opcion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
      <button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
      <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
      
      </td>
    </tr>
  </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

