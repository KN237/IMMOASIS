<?php

namespace Database\Factories;

use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UtilisateurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Utilisateur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomU' => $this->faker->userName(),
            'emailU' => $this->faker->unique()->safeEmail(),
            'nomCompletU' => $this->faker->name(),
            'mdpU' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'telephoneU' => $this->faker->phoneNumber(),
            'api_token' => Str::random(100),
        ];
    }

    
}
