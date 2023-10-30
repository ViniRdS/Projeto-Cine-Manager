<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'imagem',
        'descricao',
        'duracao',
        'genero',
        'diretor',
        'status',
    ];

    public function getStatusFormatadoAttribute()
    {
        return $this->attributes['status'] == '1' ? 'Ativo' : 'Inativo';
    }
}
