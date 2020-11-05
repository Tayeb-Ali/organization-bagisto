<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\CompanyBranch;
use DOCore\Organization\Models\Group;
use DOCore\Organization\Models\Supplier;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Webkul\User\Models\Admin;

$factory->define(Supplier::class,
    function (Faker $faker) {
        return [
            'company_id' => Company::all()->random()->company_id,
            'group_id' => Group::where('model_name', '=', 'Supplier')->get()->random()->group_id,
            'company_branch_id' => CompanyBranch::all()->random()->company_id,
            'supp_type' => '',
            'name' => $faker->name,
            'contact_person' => $faker->name,
            'phone' => $faker->phoneNumber,
            'fax' => $faker->phoneNumber,
            'pobox' => $faker->randomDigitNotNull,
            'email' => $faker->email,
            'country' => $faker->country,
            'city' => $faker->city,
            'address' => $faker->address,
            'have_branch' => $faker->randomDigitNotNull,
            'status' => $faker->randomDigitNotNull,
            'credit_limit' => $faker->randomDigitNotNull,
            'begin_bal_credit' => $faker->randomDigitNotNull,
            'begin_bal_debit' => $faker->randomDigitNotNull,
            'curr_bal_credit' => $faker->randomDigitNotNull,
            'curr_bal_debit' => $faker->randomDigitNotNull,
            'amend_by' => Admin::all()->random()->id,
            'amend_date' => now(),
            'account_code' => $faker->randomDigitNotNull,
            'last_trns_date' => $faker->date('Y-m-d H:i:s'),
            'last_trns_value' => $faker->randomDigitNotNull,
            'last_trns_type' => $faker->word,
            'currency_code' => $faker->currencyCode,
            'zip_code' => $faker->randomDigitNotNull,
            'begin_bal_credit_fc' => $faker->randomDigitNotNull,
            'begin_bal_debit_fc' => $faker->randomDigitNotNull,
            'curr_bal_credit_fc' => $faker->randomDigitNotNull,
            'curr_bal_debit_fc' => $faker->randomDigitNotNull,
            'allowance_days' => $faker->randomDigitNotNull,
            'analysis_code' => $faker->randomDigitNotNull,
            'active_flag' => $faker->randomDigitNotNull,
            'vat_flag' => $faker->randomDigitNotNull,
            'mship_to_address' => $faker->address,
            'mship_to_phone' => $faker->phoneNumber,
            'mship_to_fax' => $faker->phoneNumber,
            'mship_to_city' => $faker->city,
            'mship_to_pobox' => $faker->randomDigitNotNull,
            'billing_contact_person' => $faker->name

        ];
    });
