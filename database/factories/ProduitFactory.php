<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'name' => $this->faker->word,
          'description' => $this->faker->paragraph,
          'price' => $this->faker->randomFloat(2, 10, 1000),
          'created_at' => now(),
          //'type_id' => \App\Models\Type::factory()
        ];
    }
}
