<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengeluaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nm_pengeluaran' => 'bayar kosan',
            'jumlah' => 500000,
            'catatan' => 'kosan bulan mei',
            'user_id' => '1',
        ];
    }
}
