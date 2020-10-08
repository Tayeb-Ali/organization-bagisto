<?php

use DOCore\Organization\Models\Supplier;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Supplier::class, 20)->create();
    }
}
