<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CupomDesconto extends Model
{
    protected $fillable = [
      'nome',
      'localizados',
      'desconto',
      'modo_desconto',
      'limite',
      'data_validade',
      'ativo'
    ];
}
