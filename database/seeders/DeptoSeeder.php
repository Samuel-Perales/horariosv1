<?php

namespace Database\Seeders;

use App\Models\Depto;
use App\Models\Carrera;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Depto::factory()->has(
            Carrera::factory(3)
        );
    }
}
