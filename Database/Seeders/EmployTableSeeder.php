<?php

namespace DOCore\Organization\Database\Seeders;

use DOCore\Organization\Models\Employ;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EmployTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employ::class, 20)->create();
    }
}
