<?php


namespace App\Repositorios\Cardapio;


interface ICardapio
{
    public function listas();
    public function adicionar(array $data);
    public function actualizar(array $data, $ID);
    public function deletar(int $ID);
    public function info(int $ID);
    public function countCardapio(int $ID);
    public function dropdownList();
}
