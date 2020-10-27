<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\Employ;
use DOCore\Organization\Models\EmployGroup;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;
use Webkul\User\Models\Admin;
use Carbon\Carbon;

$factory->define(Employ::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,
        'group_id' => EmployGroup::all()->random()->group_id,
        'cust_type' => '',
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
        'status' => $faker->numberBetween(1, 2),
        'currency_code' => $faker->currencyCode,
        'created_at' => Carbon::now()->getTimestamp(),

    ];
});
