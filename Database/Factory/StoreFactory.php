<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\Store;
use DOCore\Organization\Models\StoreGroup;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Carbon\Carbon;


$factory->define(Store::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_id' => StoreGroup::all()->random()->group_id,
        'description' => $faker->name,
        'store_contacts' => $faker->phoneNumber,
        'status' => $faker->numberBetween(1, 2),
        'amend_date' => Carbon::now()->getTimestamp(),
        'created_at' => Carbon::now()->getTimestamp(),

    ];
});
