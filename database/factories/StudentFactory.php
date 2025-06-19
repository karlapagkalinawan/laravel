<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fname' => 'Mar',
            'lname' => 'Tirao',
            'email' => 'marandrewtirao@gmail.com',
            'birthdate' => '2003-04-11',
            'gender' => 'Male',
            'contact_number' => '09614265121',
            'complete_address' => 'San Jacinto Pangasinan',
            'bio' => 'Isaih 50:22',

           
        ];
    }
}
