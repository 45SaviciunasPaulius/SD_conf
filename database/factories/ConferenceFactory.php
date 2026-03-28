<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conference>
 */
class ConferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $date = $this->faker->dateTimeBetween('-1 year', '+2 years');

        return [
            'user_id' => User::inRandomOrder()->first(),
            'title' => $this->faker->sentence(3, 6),
            'description' => $this->faker->sentence(30, 6),
            'date' => $date->format('Y-m-d H:i:s'),
            'location' => $this->faker->city().', '.$this->faker->country(),
            'lectors' => $this->faker->name().', '.$this->faker->name(),
            'status' => $this->faker->randomElement([
                'planned',
                'past',
            ]),
        ];
    }
}
