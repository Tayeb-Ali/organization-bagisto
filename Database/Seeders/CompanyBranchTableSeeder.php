<?php

namespace DOCore\Organization\Database\Seeders;

use DOCore\Organization\Models\CompanyBranch;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyBranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_company_branches')->truncate();

        factory(CompanyBranch::class, 100)->create();
    }
}
