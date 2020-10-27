<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\EmployGroup;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;
use Webkul\User\Models\Admin;
use Carbon\Carbon;

$factory->define(EmployGroup::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_desc' => $faker->name,
        'account_code' => '',
        'status' => $faker->numberBetween(1, 2),
        'amend_by' => Admin::all()->random()->id,
        'amend_date' => $faker->date('Y-m-d H:i:s')

    ];
});
