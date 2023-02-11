<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blacklist extends Model
{
    use HasFactory;

    protected $fillable = [

        'tipopessoa', 'tipo', 'razaosocial', 'endereco', 'complemento', 'bairro', 
        'cidade', 'cep','uf', 'email', 'fone', 'celular', 'natoperacao', 'dtocorrencia', 
        'numcontrato', 'valor', 'observacoes',

    ];

    protected $cast = [

    ];

    public function provedor(){

        return $this->belongsTo(Provedores::class);
    }

    public function comentarios(){

        return $this->hasMany(Comentarios::class);
    }
}

