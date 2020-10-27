<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;
use Webkul\Core\Models\Currency;
use Webkul\User\Models\Admin;
use Carbon\Carbon;

$factory->define(Company::class, function (Faker $faker) {

    return [
        'description' => $faker->company,
        'short_desc' => $faker->word,
        'currency' => Currency::all()->random()->code,
        'status' => $faker->numberBetween(1, 3),
        'gl_ac_levels' => $faker->numberBetween(1, 5),
        'gl_ac_level_0_len' => $faker->numberBetween(1, 4),
        'gl_ac_level_1_len' => $faker->numberBetween(1, 4),
        'gl_ac_level_2_len' => $faker->numberBetween(1, 4),
        'gl_ac_level_3_len' => $faker->numberBetween(1, 4),
        'gl_ac_level_4_len' => $faker->numberBetween(1, 4),
        'gl_ac_level_5_len' => $faker->numberBetween(1, 4),
        'gl_ac_level_6_len' => 0,
        'gl_ac_level_7_len' => 0,
        'gl_ac_level_8_len' => 0,
        'gl_ac_level_9_len' => 0,
        'gl_cc_levels' => $faker->numberBetween(1, 6),
        'gl_cc_level_0_len' => $faker->numberBetween(1, 4),
        'gl_cc_level_1_len' => $faker->numberBetween(1, 4),
        'gl_cc_level_2_len' => $faker->numberBetween(1, 4),
        'gl_cc_level_3_len' => $faker->numberBetween(1, 4),
        'gl_cc_level_4_len' => $faker->numberBetween(1, 4),
        'gl_cc_level_5_len' => $faker->numberBetween(1, 4),
        'gl_cc_level_6_len' => $faker->numberBetween(1, 4),
        'gl_cc_level_7_len' => 0,
        'gl_cc_level_8_len' => 0,
        'gl_cc_level_9_len' => 0,
        'gl_cc_level_10_len' => 0,
        'cust_code_len' => $faker->numberBetween(5, 9),
        'supp_code_len' => $faker->numberBetween(5, 9),
        'bank_code_len' => $faker->numberBetween(5, 9),
        'trea_code_len' => $faker->numberBetween(5, 9),
        'stor_code_len' => $faker->numberBetween(5, 9),
        'srep_code_len' => $faker->numberBetween(5, 9),
        'expe_code_len' => $faker->numberBetween(5, 9),
        'asset_code_len' => $faker->numberBetween(5, 9),
        'locat_code_len' => $faker->numberBetween(5, 9),
        'product_code_len' => $faker->numberBetween(5, 9),
        'product_batch_len' => $faker->numberBetween(5, 9),
        'users_code_len' => $faker->numberBetween(5, 9),
        'sub_cust_code_len' => $faker->numberBetween(5, 9),
        'sub_store_code_len' => $faker->numberBetween(5, 9),
        'amend_by' => Admin::all()->random()->id,
        'amend_date' => $faker->date('Y-m-d H:i:s'),
        'web' => 'web',
        'curr_fin_year' => $faker->randomDigitNotNull,
        'local_partner_percent' => $faker->word,
        'zakah_tax_formula' => $faker->word,
        'company_type' => $faker->word,
        'cust_code_type' => $faker->word,
        'supp_code_type' => $faker->word,
        'bank_code_type' => $faker->word,
        'trea_code_type' => $faker->word,
        'stor_code_type' => $faker->word,
        'srep_code_type' => $faker->word,
        'expe_code_type' => $faker->word,
        'asset_code_type' => $faker->word,
        'locat_code_type' => $faker->word,
        'product_code_type' => $faker->word,
        'product_batch_type' => $faker->word,
        'users_code_type' => $faker->word,
        'sub_cust_code_type' => $faker->word,
        'sub_store_code_type' => $faker->word,
        'created_at' => Carbon::now()->getTimestamp()
    ];
});
