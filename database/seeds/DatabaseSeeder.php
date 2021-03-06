<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleTableSeeder::class,
            UserTableSeeder::class,
            CategorySeeder::class,
            WeightTypeSeeder::class,
            OrderSeeder::class,
            SupplierTableSeeder::class,
            AdminSeeder::class
        ]);
    }
}
