<?php

namespace Database\Factories;

use App\Models\Conference;
use App\Models\Registry;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistryFactory extends Factory
{
    protected $model = Registry::class;

    public function definition(): array
    {
        $conference = Conference::inRandomOrder()->firstOrFail();

        $user = User::inRandomOrder()->firstOrFail();

        return [
            'user_id' => $user->id,
            'conference_id' => $conference->id,
        ];
    }
}
