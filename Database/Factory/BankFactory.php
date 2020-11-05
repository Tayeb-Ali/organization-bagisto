<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Bank;
use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\Group;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Carbon\Carbon;


$factory->define(Bank::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_id' => Group::where('model_name', '=', 'Bank')->get()->random()->group_id,
        'name' => $faker->name,
        'bank_name' => $faker->companySuffix,
        'account_no' => $faker->bankAccountNumber,
        'phone' => $faker->phoneNumber,
        'fax' => $faker->phoneNumber,
        'pobox' => $faker->postcode,
        'email' => $faker->email,
        'status' => $faker->numberBetween(1, 2),
        'currency' => $faker->currencyCode,
        'created_at' => Carbon::now()->getTimestamp(),

    ];
});
