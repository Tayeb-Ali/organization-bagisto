<?php

use DOCore\Organization\Models\CompanyBranch;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CompanyBranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CompanyBranch::class, 20)->create();
    }
}
