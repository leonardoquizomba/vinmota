@extends('adminlte::page')

@section('title', 'Adicionar categoria')

@section('content_header')
    <h1>Categoria</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Adicionar Categoria</h3>
                </div>
                {!! Form::open(['route' => 'categoria.create']) !!}
                @method('POST')
                @include('admin.categoria.form')
                @include('admin.partes.buttonform',['cancel'=>'categoria'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
