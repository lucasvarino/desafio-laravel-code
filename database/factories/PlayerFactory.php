<?php

namespace Database\Factories;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(18, 40),
            'nationality' => $this->faker->country(),
            'wins' => $this->faker->numberBetween(0, 20),
            'loses' => $this->faker->numberBetween(0, 20),
            'team_id' => Team::factory(),
            'role' => $this->faker->numberBetween(0, 4),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
