<?php

namespace Database\Factories;


use App\Models\Order;
use App\Models\Table;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;
    public function definition()
    {
        
        $tableId = Table::inRandomOrder()->first()->id;
        $itemId = Item::inRandomOrder()->first()->id;

        return [
            'item_id' => $itemId,
            'table_id' => $tableId,
            'quantity' => $this->faker->numberBetween(1, 5),
            'total' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}
