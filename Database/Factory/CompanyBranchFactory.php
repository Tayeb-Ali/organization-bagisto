<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\CompanyBranch;
use DOPackages\AHAmwal\Models\Payment;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;
use Webkul\User\Models\Admin;
use Carbon\Carbon;

//use App/;
$factory->define(CompanyBranch::class, function (Faker $faker) {

        return [
            'company_id' => Company::all()->random()->company_id,
            'short_desc' => $faker->name,
            'description' => $faker->word,
            'branch_country' => $faker->country,
            'branch_weight' => $faker->randomDigitNotNull,
            'branch_manager' => $faker->name,
            'currency' => $faker->currencyCode,
            'status' => $faker->word,
            'amend_by' => $faker->name,
//            'amend_by' => User::all()->random()->user_id,
            'amend_date' => $faker->date('Y-m-d H:i:s'),
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
