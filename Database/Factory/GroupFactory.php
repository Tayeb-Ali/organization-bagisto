<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Group;
use DOCore\Organization\Models\Company;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Arr;
use Webkul\User\Models\Admin;
use Carbon\Carbon;

$factory->define(Group::class, function (Faker $faker) {
    $modelsName = Arr::random(['Supplier', 'Client', 'Employ', 'Bank', 'Store', 'Treasure']);
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_desc' => $faker->name,
        'have_child' => true,
        'model_name' => $modelsName,
        'account_code' => $faker->numberBetween(32, 200),
        'status' => random_int(0, 1),
        'amend_by' => Admin::all()->random()->id,
        'amend_date' => Carbon::now()->getTimestamp()
    ];
});
