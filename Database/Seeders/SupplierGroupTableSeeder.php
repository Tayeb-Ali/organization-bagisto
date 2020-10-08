<?php

use DOCore\Organization\Models\SupplierGroup;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SupplierGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SupplierGroup::class, 20)->create();
    }
}
