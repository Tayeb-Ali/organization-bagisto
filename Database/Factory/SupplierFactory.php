<?php

/** @var Factory $factory */

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\Supplier;
use DOPackages\AHAmwal\Models\Payment;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;
use Webkul\User\Models\Admin;
use Carbon\Carbon;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'company_id' => Company::all()->random()->company_id,

    ];
});
