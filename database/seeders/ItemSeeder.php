<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\ItemFactory;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ItemFactory::new()->count(15)->create();
    }
}