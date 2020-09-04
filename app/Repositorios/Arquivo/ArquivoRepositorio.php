<?php


namespace App\Repositorios\Arquivo;


use App\Models\Arquivos;

class ArquivoRepositorio implements IArquivo
{

    public function listar()
    {
        return Arquivos::all();
    }

    public function adicionar(array $data)
    {
        $arquivo = new Arquivos();
        $arquivo->nome = $data['nome'];
        $arquivo->link = $data['link'];
        $arquivo->path = $data['path'];
        $arquivo->full_path = $data['full_path'];
        if ($arquivo->save()) {
            return $arquivo->id;
        }
        return false;
    }

    public function actualizar(array $data, int $ID)
    {
        // TODO: Implement actualizar() method.
    }

    public function deletar(int $ID)
    {
        if ($arquivo = $this->info($ID)) {
            return $arquivo->forcedelete();
        }
        return false;
    }

    public function info(int $ID)
    {
        if ($arquivo = Arquivos::where('id', $ID)->first()) {
            return $arquivo;
        }
        return false;
    }
}
