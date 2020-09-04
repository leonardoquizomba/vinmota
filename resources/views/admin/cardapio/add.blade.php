@extends('adminlte::page')

@section('title', 'Adicionar Menu')
@section('plugins.Select2', true)

@section('content_header')
    <h1>Menu</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Adicionar menu</h3>
                </div>
                {!! Form::open(['route' => 'cardapio.create','files' => true]) !!}
                @method('POST')
                @include('admin.cardapio.form')
                @include('admin.partes.buttonform',['cancel'=>'cardapio'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.select2').select2({allowClear: true});
        });
    </script>
@stop
