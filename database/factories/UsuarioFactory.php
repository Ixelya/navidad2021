<?php

namespace Database\Factories;

use App\Models\Comentario;
use App\Models\Pelicula;
use App\Models\Usuario;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'apellidos' => $this->faker->lastname(),
            'user_name' => $this->faker->bothify('########'),
            'email' => $this->faker->unique()->safeEmail,
            'contraseña' => Hash::make('naranco'),
            'imagen' => $this->faker->imageUrl(1000, 1500),
        ];
    }
}