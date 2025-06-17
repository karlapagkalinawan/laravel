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
            'fname'      => 'Karla',
            'lname'      => 'Pagkalinawan',
            'email'      => 'karlapagkalinawan@gmail.com',
            'contact number'      => '09695635489',
            'gender'      => 'Female',
            'birthdate'       => '2004-09-27',
            'complete_address'       => 'Pangasinan',
            'bio'       => 'Sample bio data',
        ];
    }
}
