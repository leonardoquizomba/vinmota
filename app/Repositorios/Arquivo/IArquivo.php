<?php


namespace App\Repositorios\Arquivo;


interface IArquivo
{
    public function listar();
    public function adicionar(array $data);
    public function actualizar(array $data, int $ID);
    public function deletar(int $ID);
    public function info(int $ID);
}
