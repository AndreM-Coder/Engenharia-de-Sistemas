<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    //const CREATED_AT = 'creation_date';
    //const UPDATED_AT = 'last_update';

    static $estados = [0=>'Inativo', 1=>'Ativo'];

    public $timestamps = false;

    protected $fillable = ['user_id','nome','descricao','estado'];

}
