<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\ClientGroup;
use DOCore\Organization\Models\Client;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Carbon\Carbon;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_id' => ClientGroup::all()->random()->group_id,
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
