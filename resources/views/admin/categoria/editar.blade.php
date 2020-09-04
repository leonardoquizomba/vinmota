@extends('adminlte::page')

@section('title', 'Editar categoria')

@section('content_header')
    <h1>Categoria</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Editar Categoria</h3>
                </div>
                {!! Form::model($categoria, ['route' => ['categoria.update', $categoria->id]]) !!}
                @method('PUT')
                @include('admin.categoria.form')
                @include('admin.partes.buttonform',['cancel'=>'categoria'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
