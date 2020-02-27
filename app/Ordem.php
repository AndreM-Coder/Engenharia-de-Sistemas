<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordem extends Model
{
    protected $table = 'ordens';
    
    public function produto()
    {
        return $this->belongsToMany(Produto::class, 'produtos_ordens');
    }
}
