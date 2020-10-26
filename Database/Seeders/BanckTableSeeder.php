<?php

namespace DOCore\Organization\Database\Seeders;

use DOCore\Organization\Models\Bank;
use Illuminate\Database\Seeder;

class BanckTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bank::class, 20)->create();
    }
}
