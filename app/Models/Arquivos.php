<?php

namespace App\Models;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Arquivos extends Model
{
    use Notifiable, FormAccessible;

    protected $fillable = [
        'nome', 'link', 'path', 'full_path'
    ];

    public function format()
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'link' => $this->link,
            'path' => $this->path,
            'full_path' => $this->full_path,
            'lastupdated' => $this->updated_at->diffForHumans()
        ];
    }
}
