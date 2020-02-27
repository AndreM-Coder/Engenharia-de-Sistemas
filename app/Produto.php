<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function ordens()
    {
        return $this->belongsToMany(Ordem::class, 'produtos_ordens');
    }
    public function categoria()
    {
        return $this->belongsTo('App\Categoria','categoria_id');
    }
    public function loja()
    {
        return $this->belongsTo('App\Loja','loja_id');
    }
}
