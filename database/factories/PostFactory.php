<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * Los Model Factories nos permiten crear registros de prueba, 
     * ya sea para cargar nuestra base de datos con «información falsa» o «información de prueba» 
     * o para crear las condiciones necesarias para ejecutar pruebas automatizadas
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        // Faker is a PHP library that generates fake data for you
        return [
            'user_id' => rand(1, 10),
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'content' => $this->faker->text(1600),
        ];
    }
}
