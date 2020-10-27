<?php

namespace DOCore\Organization\Database\Seeders;

use DOCore\Organization\Models\Employ;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_employees')->truncate();

        factory(Employ::class, 200)->create();
    }
}
