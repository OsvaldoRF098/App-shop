<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TrainerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre'   => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            // Puedes usar una URL placeholder o un path relativo a storage
            'avatar'   => $this->faker->imageUrl(256, 256, 'people', true),
        ];
    }
}
