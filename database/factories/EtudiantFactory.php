<?php

namespace Database\Factories;
use App\Models\Etudiant;
use App\Models\Model;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $mode1 = Etudiant::class;
    
    public function definition()
    {
        return [
            'nom'=>$this->faker->lastname(),
            'prenom'=>$this->faker->firstname(),
            'classe_id' => rand(1,6),

        ];
    }
}
