<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LaporanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'keterangan' => 'laporan bulan mei',
            'pemasukan_id' => '1',
            'pengeluaran_id' => '1',
        ];
    }
}
