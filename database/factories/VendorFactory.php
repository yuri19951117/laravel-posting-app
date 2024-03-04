<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VendorFactory extends Factory
{
    protected $model = post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
        'id' => 4,
        'user_id' => fake()->randomnumver(5),
        'title' => fake()->realText(10,3),
        'content' => fake()->realText(10,5)    
            ];
    }
}
