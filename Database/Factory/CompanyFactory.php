<?php

/** @var Factory $factory */

use DOPackages\AHAmwal\Models\Payment;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;
use Webkul\User\Models\Admin;
use Carbon\Carbon;

$factory->define(Payment::class, function (Faker $faker) {

    return [
        'description' => $faker->name,
        'currency' => 'USD',
        'status' => $faker->numberBetween(1, 3),
        'gl_ac_levels' => $faker->numberBetween(1, 3),
        'gl_ac_level_1_len' => $faker->numberBetween(1, 6),
        'gl_ac_level_2_len' => $faker->numberBetween(1, 6),
        'gl_ac_level_3_len' => $faker->numberBetween(1, 6),
        'gl_ac_level_4_len' => $faker->numberBetween(1, 6),
        'gl_ac_level_5_len' => $faker->numberBetween(1, 6),
        'gl_ac_level_6_len' => $faker->numberBetween(1, 6),
        'gl_ac_level_7_len' => $faker->numberBetween(1, 6),
        'gl_ac_level_8_len' => $faker->numberBetween(1, 6),
        'gl_ac_level_9_len' => $faker->numberBetween(1, 6),
        'gl_ac_level_0_len' => $faker->numberBetween(1, 6),
        'gl_cc_levels' => $faker->numberBetween(1, 6),
        'gl_cc_level_0_len' => $faker->numberBetween(1, 6),
        'gl_cc_level_1_len' => $faker->numberBetween(1, 6),
        'gl_cc_level_2_len' => $faker->numberBetween(1, 6),
        'gl_cc_level_3_len' => $faker->numberBetween(1, 6),
        'gl_cc_level_4_len' => $faker->numberBetween(1, 6),
        'gl_cc_level_5_len' => $faker->numberBetween(1, 6),
        'gl_cc_level_6_len' => $faker->numberBetween(1, 6),
        'gl_cc_level_7_len' => $faker->numberBetween(1, 6),
        'gl_cc_level_8_len' => $faker->numberBetween(1, 6),
        'gl_cc_level_9_len' => $faker->numberBetween(1, 6),
        'gl_cc_level_10_len' => $faker->numberBetween(1, 6),
        'cust_code_len' => $faker->randomDigitNotNull(1, 6),
        'supp_code_len' => $faker->randomDigitNotNull,
        'bank_code_len' => $faker->randomDigitNotNull,
        'trea_code_len' => $faker->randomDigitNotNull,
        'stor_code_len' => $faker->randomDigitNotNull,
        'srep_code_len' => $faker->randomDigitNotNull,
        'expe_code_len' => $faker->randomDigitNotNull,
        'amend_by' => $faker->randomDigitNotNull,
        'amend_date' => $faker->date('Y-m-d H:i:s'),
        'web' => 'web',
        'asset_code_len' => $faker->randomDigitNotNull,
        'locat_code_len' => $faker->randomDigitNotNull,
        'product_code_len' => $faker->randomDigitNotNull,
        'product_batch_len' => $faker->randomDigitNotNull,
        'users_code_len' => $faker->randomDigitNotNull,
        'sub_cust_code_len' => $faker->randomDigitNotNull,
        'sub_store_code_len' => $faker->randomDigitNotNull,
        'curr_fin_year' => $faker->randomDigitNotNull,
        'company_type' => $faker->word,
        'local_partner_percent' => $faker->word,
        'zakah_tax_formula' => $faker->word,
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
        'short_desc' => $faker->word,
        'created_at' => Carbon::now()->getTimestamp()
    ];
});
