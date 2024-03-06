<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClearTablesSeeder extends Seeder
{
    public function run()
    {
        DB::table('orders')->delete();
        DB::table('tables')->delete();
        DB::table('menus')->delete();
    }
}