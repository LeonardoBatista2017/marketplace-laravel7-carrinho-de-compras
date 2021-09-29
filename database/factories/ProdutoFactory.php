<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Produto::class, function (Faker $faker) {
    return [
        'nome'=>$faker->name,
        'descricao'=>$faker->sentence,
        'valor'=>$faker->randomFloat(2,6),
        'imagem' => $faker->image('public/storage/images',640,480, null, false),
        'slug' => $faker->slug,
    ];
});
