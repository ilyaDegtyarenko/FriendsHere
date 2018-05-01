<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Admin\Role::class, function (Faker $faker) {
    return [
        'name'=> $faker->jobTitle,
        'label_en'=> $faker->word,
        'label_ru'=> $faker->word,
        'guard_name'=> 'web',
    ];
});

$factory->define(\App\Models\Admin\Permission::class, function (Faker $faker) {
    return [
        'name'=> $faker->sentence,
        'label_en'=> $faker->word,
        'label_ru'=> $faker->word,
        'guard_name'=> 'web',
    ];
});