<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Books;
use Pest\Evaluators\Attributes;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Titulo'=> fake()->title(),
            'Descripcion'=> fake()->sha256(),
            'ISBN'=> fake()->isbn13(),
            'Copias_totales'=> fake()->numberBetween(1, 6),
            'Copias_disponibles'=> fake()->numberBetween(1,1),
            'Estado'=> fake()->boolean(),
        ];
    }
}
