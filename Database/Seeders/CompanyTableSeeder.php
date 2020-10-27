<?php

namespace DOCore\Organization\Database\Seeders;

use DOCore\Organization\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_companies')->truncate();

        factory(Company::class, 20)->create();
    }
}
