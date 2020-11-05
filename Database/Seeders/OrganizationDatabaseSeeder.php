<?php

namespace DOCore\Organization\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class OrganizationDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call([
            CompanyTableSeeder::class,
            CompanyBranchTableSeeder::class,
            GroupTableSeeder::class,
            ClientTableSeeder::class,
            SupplierTableSeeder::class,
            EmployTableSeeder::class,
            BanckTableSeeder::class,
            StoreTableSeeder::class,
            TreasureTableSeeder::class
        ]);
    }
}
