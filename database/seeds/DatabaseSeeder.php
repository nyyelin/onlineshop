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
    $this->call(BrandTableSeeder::class);
    $this->call(CategorySeeder::class);
    $this->call(RoleTableSeeder::class);
    $this->call(UserSeederTable::class);
    $this->call(CustomerSeeder::class);
    }
    
}
