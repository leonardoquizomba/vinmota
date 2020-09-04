<?php


namespace App\Repositorios\Categoia;


use App\Models\Categoria;

class CategoriaRepositorio implements ICategoria
{

    public function adicionar(array $data)
    {
        $categoria = new Categoria();
        $categoria->nome = $data['nome'];
        $categoria->descricao = $data['descricao'];
        return $categoria->save();
    }

    public function deletar(int $ID)
    {
        if ($categoria = Categoria::find($ID)) {
            if ($categoria->delete()) {
                return true;
            }
            return false;
        }
        return false;
    }

    public function info(int $ID)
    {
        return Categoria::where('id', $ID)->first();
    }

    public function countCardapio(int $ID)
    {
        return Categoria::where('id', $ID)->first();
    }

    public function listas()
    {
        return Categoria::all()->map->format();
    }

    public function actualizar(array $data, $ID)
    {
        if ($categoria = $this->info($ID)) {
            $categoria->nome = $data['nome'];
            $categoria->descricao = $data['descricao'];
            if ($categoria->save()) {
                return true;
            }
            return false;
        }
        return false;
    }

    public function dropdownList()
    {
        $collection = collect(Categoria::all()->map->format());
        $plucked = $collection->pluck('nome', 'id');
        return $plucked->all();
    }
}
