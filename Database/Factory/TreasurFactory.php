<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\Treasur;
use DOCore\Organization\Models\TreasurGroup;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Carbon\Carbon;


$factory->define(Treasur::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_id' => TreasurGroup::all()->random()->group_id,
        'name' => $faker->name,
        'casher' => $faker->numberBetween(1, 22),
        'status' => $faker->numberBetween(1, 2),
        'currency_code' => $faker->currencyCode,
        'amend_date' => Carbon::now()->getTimestamp(),
        'created_at' => Carbon::now()->getTimestamp(),

    ];
});
