<?php


namespace App\Repositorios\Cardapio;


use App\Models\Cardapio;

class CardapioRepositorio implements ICardapio
{

    public function listas()
    {
        return Cardapio::all()->map->format();
    }

    public function adicionar(array $data)
    {
        $cardapio = new Cardapio();
        $cardapio->nome = $data['nome'];
        $cardapio->descricao = $data['descricao'];
        $cardapio->preco = $data['preco'];
        $cardapio->arquivos_id = $data['arquivos_id'];
        $cardapio->categoria_id = $data['categoria_id'];
        if ($id = $cardapio->save()) {
            return $id;
        }
        return 0;
    }

    public function actualizar(array $data, $ID)
    {
        if ($cardapio = $this->info($ID)) {
            $cardapio->nome = $data['nome'];
            $cardapio->descricao = $data['descricao'];
            $cardapio->preco = $data['preco'];
            $cardapio->arquivos_id = $data['arquivos_id'];
            $cardapio->categoria_id = $data['categoria_id'];
            if ($id = $cardapio->save()) {
                return $id;
            }
            return false;
        }
        return false;
    }

    public function deletar(int $ID)
    {
        if ($cardapio = $this->info($ID)) {
            return $cardapio->delete();
        }
        return false;
    }

    public function info(int $ID)
    {
        if ($cardapio = Cardapio::where('id', $ID)->first()) {
            return $cardapio;
        }
        return false;
    }

    public function countCardapio(int $ID)
    {
        // TODO: Implement countCardapio() method.
    }

    public function dropdownList()
    {
        // TODO: Implement dropdownList() method.
    }
}
