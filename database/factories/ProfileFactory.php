<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'telepon' => '085755990290',
            'alamat' => 'Malang',
            'user_id' => '1',
        ];
    }
}
