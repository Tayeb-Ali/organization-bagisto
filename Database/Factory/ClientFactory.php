<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Client;
use DOCore\Organization\Models\Company;
use DOPackages\AHAmwal\Models\Payment;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;
use Webkul\User\Models\Admin;
use Carbon\Carbon;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_id' => random_int(1, 3),
        'cust_type' => $faker->paragraph,
        'name' => $faker->name,
        'contact_person' => $faker->paragraph,
        'phone' => $faker->phoneNumber,
        'fax' => $faker->phoneNumber,
        'pobox' => $faker->postcode,
        'email' => $faker->email,
        'country' => $faker->country,
        'city' => $faker->city,
        'address' => $faker->address,
        'have_branch' => $faker->paragraph,
        'status' => $faker->paragraph,
        'currency_code' => $faker->currencyCode,
        'created_at' => Carbon::now()->getTimestamp(),

    ];
});
