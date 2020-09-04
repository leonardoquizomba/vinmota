<?php

namespace App\Models;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Cardapio extends Model
{
    use Notifiable, SoftDeletes, FormAccessible;

    protected $fillable = [
        'nome', 'descricao', 'preco', 'destaque', 'arquivos_id', 'categoria_id'
    ];

    public function format()
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'preco' => $this->preco,
            'destaque' => $this->destaque,
            'arquivo' => $this->arquivo->path,
            'arquivoId' => $this->arquivo->id,
            'categoria' => $this->categoria->nome,
            'lastupdated' => $this->updated_at->diffForHumans()
        ];
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function arquivo()
    {
        return $this->belongsTo(Arquivos::class, 'arquivos_id');
    }
}
