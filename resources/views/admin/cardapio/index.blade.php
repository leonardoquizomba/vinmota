@extends('adminlte::page')

@section('title', 'Cardapio')

@section('plugins.Datatables', true)

@section('content_header')
    <h1>Cardapio</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de empresas</h3>
                    <div class="card-tools">
                        <ul class="pagination pagination-sm float-right">
                            <li class="page-item">
                                <a class="page-link" href="{{ route('cardapio.create') }}">Adicionar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <table id="ImportTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descricao</th>
                            <th>Preco</th>
                            <th>Destaque</th>
                            <th>Categoria</th>
                            <th>Ultima actualização</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($cardapios as $cardapio)
                            <tr>
                                <th>{{ $cardapio['nome'] }}</th>
                                <th>{{ $cardapio['descricao'] }}</th>
                                <th>{{ $cardapio['preco'] }}</th>
                                <th>
                                    @if($cardapio['destaque'])
                                        <span>Em Destque</span>
                                    @else
                                        <span>Fora de destque</span>
                                    @endif
                                </th>
                                <th>{{ $cardapio['categoria'] }}</th>
                                <th>{{ $cardapio['lastupdated'] }}</th>
                                <th class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="">
                                        <i class="fas fa-folder"></i>
                                        Info
                                    </a>
                                    @if($cardapio['destaque'])
                                        <a class="btn btn-dark btn-sm" href="">
                                            N. Destacar
                                        </a>
                                    @else
                                        <a class="btn btn-dark btn-sm" href="">
                                            Destacar
                                        </a>
                                    @endif
                                    <a class="btn btn-warning btn-sm" href="#">
                                        <i class="fas fa-pencil-alt"></i>
                                        Editar
                                    </a>
                                    <a class="btn btn-danger btn-sm"
                                       name="{{ $cardapio['nome'] }}"
                                       href="{{ route('cardapio.destroy',['cardapio'=>$cardapio['id']]) }}"
                                       onclick="event.preventDefault(); modaldeletar(this)">
                                        <i class="fas fa-trash"></i>
                                        Deletar
                                    </a>
                                </th>
                            </tr>
                        @empty
                            <p>No users</p>
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>Descricao</th>
                            <th>Preco</th>
                            <th>Destaque</th>
                            <th>categoria</th>
                            <th>Ultima actualização</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>@stop

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
                title: 'Deletar prato',
                html: "Deseja deletar o Prato <strong>" + data.name + "</strong>",
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
                    ///window.location.reload()
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
