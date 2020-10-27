<?php

/** @var Factory $factory */

use DOCore\Organization\Models\BankGroup;
use DOCore\Organization\Models\Company;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;


$factory->define(BankGroup::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_desc' => $faker->companySuffix,
        'account_code' => $faker->word,
        'status' => $faker->randomDigitNotNull,
        'amend_by' => $faker->name,
        'amend_date' => $faker->date('Y-m-d H:i:s')

    ];
});
