<?php

namespace Database\Factories;

use App\Models\Comentario;
use App\Models\Pelicula;
use App\Models\Usuario;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeliculaFactory extends Factory
{
    protected $model = Pelicula::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'director' => $this->faker->name,
            'año' => $this->faker->year,
            'sinopsis' => $this->faker->paragraph(3),
            'imagen' => $this->faker->imageUrl(1000, 1500),
        ];
    }
}