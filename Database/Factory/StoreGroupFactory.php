<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\StoreGroup;
use Illuminate\Support\Carbon;
use Webkul\User\Models\Admin;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;


$factory->define(StoreGroup::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_desc' => $faker->companySuffix,
        'account_code' => '',
        'status' => $faker->numberBetween(1, 2),
        'amend_by' => Admin::all()->random()->id,
        'created_at' => Carbon::now()->getTimestamp(),
        'amend_date' => Carbon::now()->getTimestamp()

    ];
});
