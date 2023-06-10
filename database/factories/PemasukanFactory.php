<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PemasukanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nm_pemasukan' => 'gaji bulanan',
            'jumlah' => 2000000,
            'catatan' => 'gaji bulan mei',
            'user_id' => '1',
        ];
    }
}
