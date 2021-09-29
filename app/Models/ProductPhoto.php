<?php

namespace App\Models;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{

   protected $fillable = ['image'];

    public function product(){
        return $this->belongsTo(Produto::class);
    }
}
