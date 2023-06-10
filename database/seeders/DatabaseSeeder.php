<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        \App\Models\Profile::factory(1)->create();
        \App\Models\Pemasukan::factory(1)->create();
        \App\Models\Pengeluaran::factory(1)->create();
        \App\Models\Laporan::factory(1)->create();
    }
}
