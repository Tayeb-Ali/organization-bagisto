<?php

namespace DOCore\Organization\Database\Seeders;

use DOCore\Organization\Models\Company;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class, 20)->create();
    }
}
