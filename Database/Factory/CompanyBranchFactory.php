<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\CompanyBranch;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;
use Webkul\User\Models\Admin;
use Webkul\Core\Models\Currency;
use Carbon\Carbon;

//use App/;
$factory->define(CompanyBranch::class, function (Faker $faker) {

        return [
            'company_id' => Company::all()->random()->company_id,
            'short_desc' => $faker->name,
            'description' => $faker->company,
            'branch_country' => $faker->country,
            'branch_weight' => $faker->randomDigitNotNull,
            'branch_manager' => $faker->name,
            'currency' => Currency::all()->random()->code,
            'status' => '',
            'amend_by' => Admin::all()->random()->id,
            'phone' => $faker->phoneNumber,
            'fax' => $faker->phoneNumber,
            'email' => $faker->email,
            'cost_center' => $faker->word,
            'ship_to_address' => $faker->address,
            'ship_to_phone' => $faker->phoneNumber,
            'ship_to_fax' => $faker->phoneNumber,
            'ship_to_city' => $faker->city,
            'ship_to_country' => $faker->country,
            'bill_to_address' => $faker->address,
            'bill_to_phone' => $faker->phoneNumber,
            'bill_to_fax' => $faker->phoneNumber,
            'bill_to_city' => $faker->city,
            'bill_to_country' => $faker->country,
            'created_at' => Carbon::now()->getTimestamp()
        ];
    });
