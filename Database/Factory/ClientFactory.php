<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\Client;
use DOCore\Organization\Models\CompanyBranch;
use DOCore\Organization\Models\Group;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Carbon\Carbon;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_id' => Group::where('model_name', '=', 'Client')->get()->random()->group_id,
        'company_branch_id' => CompanyBranch::all()->random()->company_id,
        'name' => $faker->name,
        'cust_type' => $faker->word,
        'contact_person' => $faker->paragraph,
        'phone' => $faker->phoneNumber,
        'fax' => $faker->phoneNumber,
        'pobox' => $faker->postcode,
        'email' => $faker->email,
        'country' => '',
        'city' => '',
        'address' => $faker->address,
        'have_branch' => '',
        'status' => '',
        'currency_code' => '',
        'created_at' => Carbon::now()->getTimestamp(),

    ];
});
