@extends('adminlte::page')

@section('title', 'Edit')

@section('content_header')
    <h1>Editar artículo</h1>
@stop

@section('content')
    <form action="/articulos/{{ $articulo->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input id="codigo" name="codigo" type="text" class="form-control" value="{{ $articulo->codigo }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control"
                value="{{ $articulo->descripcion }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input id="cantidad" name="cantidad" type="text" class="form-control" value="{{ $articulo->cantidad }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="text" step="any" class="form-control"
                value="{{ $articulo->precio }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/articulos" class="btn btn-secondary">Cancelar</a>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
