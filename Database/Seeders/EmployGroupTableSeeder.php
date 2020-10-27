<?php

namespace DOCore\Organization\Database\Seeders;


use DOCore\Organization\Models\EmployGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_employee_groups')->truncate();

        factory(EmployGroup::class, 10)->create();
    }
}
