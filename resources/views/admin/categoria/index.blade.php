@extends('adminlte::page')

@section('title', 'Cardapio')

@section('plugins.Datatables', true)

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Categorias</h3>
                    <div class="card-tools">
                        <ul class="pagination pagination-sm float-right">
                            <li class="page-item">
                                <a class="page-link" href="{{ route('categoria.create') }}">Adicionar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <table id="ImportTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Ultima actualização</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($categorias as $categoria)
                            <tr>
                                <th>{{ $categoria['nome'] }}</th>
                                <th>{{ $categoria['descricao'] }}</th>
                                <th>{{ $categoria['lastupdated'] }}</th>
                                <th class="project-actions text-right">
                                    <a class="btn btn-warning btn-sm"
                                       href="{{ route('categoria.edit',['categoria'=>$categoria['id']]) }}"
                                       name="{{ $categoria['nome'] }}"
                                       onclick="event.preventDefault(); modaleditar(this)">
                                        <i class="fas fa-pencil-alt"></i>
                                        Editar
                                    </a>
                                    <a class="btn btn-danger btn-sm"
                                       href="{{ route('categoria.destroy',['categoria'=>$categoria['id']]) }}"
                                       name="{{ $categoria['nome'] }}"
                                       onclick="event.preventDefault(); modaldeletar(this)">
                                        <i class="fas fa-trash"></i>
                                        Deletar
                                    </a>
                                </th>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Ultima actualização</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
    <script>
        $(function () {
            $('#ImportTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"
                }
            })
        });

        function modaldeletar(data) {
            Swal.fire({
                title: 'Deletar categoria',
                html: "Deseja deletar a categoria <strong>" + data.name + "</strong>",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, deletar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: data.href,
                        type: 'delete',
                        data: {"_token": "{{ csrf_token() }}"}
                    });
                    window.location.reload()
                }
            })
        }

        function modaleditar(data) {
            Swal.fire({
                title: 'Editar categoria',
                text: "Deseja editar a categoria " + data.name,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, editar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    window.location.href = data.href;
                }
            })
        }
    </script>
@stop
