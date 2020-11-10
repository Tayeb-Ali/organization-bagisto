<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\CompanyBranch;
use DOCore\Organization\Models\Employ;
use DOCore\Organization\Models\Group;
use DOCore\Organization\Models\Treasure;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Carbon\Carbon;


$factory->define(Treasure::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_id' => Group::where('model_name', '=', 'Treasure')->get()->random()->group_id,
        'company_branch_id' => CompanyBranch::all()->random()->branch_id,
        'employ_id' => Employ::all()->random()->employ_id,
        'name' => $faker->name,
        'status' => $faker->numberBetween(1, 2),
        'currency_code' => $faker->currencyCode,
        'created_at' => Carbon::now()->getTimestamp(),

    ];
});
