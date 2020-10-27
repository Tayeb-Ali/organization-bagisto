<?php

/** @var Factory $factory */

use DOCore\Organization\Models\BankGroup;
use DOCore\Organization\Models\Company;
use Webkul\User\Models\Admin;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;


$factory->define(BankGroup::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_desc' => $faker->companySuffix,
        'account_code' => '',
        'status' => '',
        'amend_by' => Admin::all()->random()->id,
        'amend_date' => $faker->date('Y-m-d H:i:s')

    ];
});
