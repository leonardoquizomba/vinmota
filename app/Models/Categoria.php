<?php

namespace App\Models;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Categoria extends Model
{
    use Notifiable, SoftDeletes, FormAccessible;

    protected $fillable = [
        'nome', 'descricao'
    ];

    public function format()
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'cardapios' => $this->cardapios(),
            'lastupdated' => $this->updated_at->diffForHumans()
        ];
    }

    public function cardapios()
    {
        return $this->hasMany(Cardapio::class);
    }
}
