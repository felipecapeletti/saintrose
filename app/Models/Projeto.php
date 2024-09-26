<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'user_id',
        'capa',
        'fotos',
        'categoria',
        'modelo',
        'ano',
        'potencia',
        'motor',
        'tipo',
        'pintura',
        'suspensao',
        'rodas',
        'modificacoes',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
