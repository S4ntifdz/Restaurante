<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(MenuSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(TableSeeder::class);
        $this->call(OrderSeeder::class);
    }
}