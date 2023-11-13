<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eleve>
 */
class EleveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tableau = ['f', 'm'];
        $notes = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        return [
            'nom' => fake()->name(),
            'prenom' =>fake()->name(),
            'dateNaissance'=>fake()->date(),
            'sexe'=>$tableau[mt_rand(0, 1)],
            'note_id'=>$notes[mt_rand(0, 9)],
        ];
    }
}