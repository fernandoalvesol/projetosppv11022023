<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provedores extends Model
{
    use HasFactory;

    protected $fillable = [

        'razaosocial', 'nomefantasia', 'tipo', 'cnpj', 'email', 
        'site', 'inestadual', 'inmunicipal', 'atoanatel',
        'fone', 'contato'
    ];

    protected $cast = [

    ];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function blacklists(){

        return $this->hasMany(Blacklist::class);
    }

    public function responsavel(){

        return $this->belongsTo(Responsavel::class);
    }
}
