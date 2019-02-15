<?php

use Faker\Generator as Faker;

$factory->define(App\Series::class, function (Faker $faker) {

	$title = $faker->sentence(2);
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'image_url' => 'series/1.jpg',
        'description' => $faker->paragraph()
    ];
});