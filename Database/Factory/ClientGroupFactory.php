<?php

/** @var Factory $factory */

use DOCore\Organization\Models\ClientGroup;
use DOCore\Organization\Models\Company;
use DOPackages\AHAmwal\Models\Payment;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;
use Webkul\User\Models\Admin;
use Carbon\Carbon;

$factory->define(ClientGroup::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_desc' => $faker->name,
        'account_code' => $faker->word,
        'status' => $faker->randomDigitNotNull,
        'amend_by' => $faker->name,
        'amend_date' => $faker->date('Y-m-d H:i:s')

    ];
});
