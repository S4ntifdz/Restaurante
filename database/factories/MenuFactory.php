<?php

namespace Database\Factories;


use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['Launch-Almuerzo', 'Merienda-Snack', 'Dinner-Cena']);
        return [
            'name' => $type,
        ];
    }
}
