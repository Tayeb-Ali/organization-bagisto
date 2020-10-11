<?php

namespace DOCore\Organization\Database\Seeders;


use DOCore\Organization\Models\EmployGroup;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EmployGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(EmployGroup::class, 20)->create();
    }
}
