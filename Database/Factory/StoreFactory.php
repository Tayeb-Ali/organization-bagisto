<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\Store;
use DOCore\Organization\Models\TreasurGroup;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Carbon\Carbon;


$factory->define(Store::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_id' => TreasurGroup::all()->random()->group_id,
        'description' => $faker->name,
        'company_code' => $faker->companySuffix,
        'status' => $faker->numberBetween(1, 2),
        'currency_code' => $faker->currencyCode,
        'amend_date' => Carbon::now()->getTimestamp(),
        'created_at' => Carbon::now()->getTimestamp(),

    ];
});
