<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entry>
 */
class EntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->word(),
            'amount'=> $this->faker->regexify('-?\d+(\.\d+)?\$$'),
            'category'=> $this->faker->randomElement(['Income','Outcome']),
        ];
    }
}
