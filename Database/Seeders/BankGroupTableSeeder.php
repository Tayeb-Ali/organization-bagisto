<?php

namespace DOCore\Organization\Database\Seeders;


use DOCore\Organization\Models\BankGroup;
use Illuminate\Database\Seeder;

class BankGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BankGroup::class, 20)->create();
    }
}
