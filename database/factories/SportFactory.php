<?php

namespace Database\Factories;

use App\Models\Sport;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sport>
 */
class SportFactory extends Factory
{
    protected $model = Sport::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'user_id' => \App\Models\User::factory(),
            'facility_id' => \App\Models\Facility::factory(),
        ];
    }
}
