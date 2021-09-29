<?php

namespace App\Models;

use App\Models\ProductPhoto;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'slug',
        'valor',
        'ativo'
      ];


      public function store(){
        return $this->belongsTo(Store::class);
      }

      public function categories(){
        return $this->belongsToMany(Category::class);
      }

      public function photos(){
        return $this->hasMany(ProductPhoto::class);
      }
}
