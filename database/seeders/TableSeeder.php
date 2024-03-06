<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Table;
use Database\Factories\OrderFactory;
use Database\Factories\TableFactory;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tables = TableFactory::new()->count(50)->create();

        $tables->each(function ($table) {
            $table->orders()->save(OrderFactory::new()->make());
        });
    }
}