<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matakuliah;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Matakuliah::factory()->count(20)->create();
    }
}
