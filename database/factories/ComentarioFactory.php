<?php

namespace Database\Factories;

use App\Models\Comentario;
use App\Models\Pelicula;
use App\Models\Usuario;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    protected $model = Comentario::class;

    public function definition()
    {
        return [
            'id_pelicula' => Pelicula::inRandomOrder()->first()->id,
            'id_user' => User::inRandomOrder()->first()->id,
            'comentario' => $this->faker->paragraph(4),
        ];
    }
}
