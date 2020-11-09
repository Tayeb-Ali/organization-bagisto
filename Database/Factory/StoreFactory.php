<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\CompanyBranch;
use DOCore\Organization\Models\Group;
use DOCore\Organization\Models\Store;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Carbon\Carbon;


$factory->define(Store::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_id' => Group::where('model_name', 'Store')->get()->random()->group_id,
        'company_branch_id' => CompanyBranch::all()->random()->branch_id,

        'description' => $faker->name,
        'store_contacts' => $faker->phoneNumber,
        'status' => $faker->numberBetween(1, 2),
        'amend_date' => Carbon::now()->getTimestamp(),
        'created_at' => Carbon::now()->getTimestamp(),

    ];
});
