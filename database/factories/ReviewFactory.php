<?php

use Faker\Generator as Faker;
use App\Model\Product;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
        'product_id'=>function(){
           return Product::all()->random();
           //return factory(App\User::class)->create()->id;
        },
        //'product_id'=> $faker->factory(App\Model\Product::class),
        //'product_id'=> $faker->randomElement(Product::lists('id')->toArray()),
        'customer' => $faker->name,
        'review' => $faker->paragraph,
        'star' => $faker->numberBetween(0, 5),
        
    ];
});
