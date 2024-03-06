<?php

namespace Database\Factories;


use App\Models\Order;
use App\Models\Table;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;


class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        $tableId = Table::inRandomOrder()->first()->id;

        return [
            'table_id' => $tableId,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Order $order) {
            $items = Item::inRandomOrder()->limit(5)->get();
            $quantity = 0;

            foreach ($items as $item) {
                $itemQuantity = rand(1, 5);
                $order->items()->attach($item->id, ['quantity' => $itemQuantity]);
                $quantity += $itemQuantity;
            }

            $order->update(['quantity' => $quantity]);
        });
    }
}