<?php

namespace Database\Factories;


use App\Models\Order;
use App\Models\Table;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Order::class;
    public function definition()
    {
        return [
            'table_id' => Table::factory(),
            'item_id' => Item::factory(),
            'quantity' => $this->faker->numberBetween(1, 10),
        ];
    }
}
