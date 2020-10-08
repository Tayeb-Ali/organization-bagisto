<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\Supplier;
use DOCore\Organization\Models\SupplierGroup;
use DOPackages\AHAmwal\Models\Payment;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;
use Webkul\User\Models\Admin;
use Carbon\Carbon;

$factory->define(Supplier::class,
    function (Faker $faker) {
        return [
            'company_id' => Company::all()->random()->company_id,
            'group_id' => SupplierGroup::all()->random()->group_id,
            'supp_type' => $faker->word,
            'name' => $faker->name,
            'contact_person' => $faker->name,
            'phone' => $faker->phoneNumber,
            'fax' => $faker->phoneNumber,
            'pobox' => $faker->randomDigitNotNull,
            'email' => $faker->email,
            'country' => $faker->counrty,
            'city' => $faker->city,
            'address' => $faker->address,
            'have_branch' => $faker->randomDigitNotNull,
            'status' => $faker->randomDigitNotNull,
            'credit_limit' => $faker->randomDigitNotNull,
            'begin_bal_credit' => $faker->randomDigitNotNull,
            'begin_bal_debit' => $faker->randomDigitNotNull,
            'curr_bal_credit' => $faker->randomDigitNotNull,
            'curr_bal_debit' => $faker->randomDigitNotNull,
            'amend_by' => $faker->name,
            'amend_date' => now(),
            'account_code' => $faker->randomDigitNotNull,
            'last_trns_date' => $faker->date('Y-m-d H:i:s'),
            'last_trns_value' => $faker->randomDigitNotNull,
            'last_trns_type' => $faker->wors,
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
