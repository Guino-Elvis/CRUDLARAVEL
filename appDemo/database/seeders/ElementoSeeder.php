<?php

namespace Database\Seeders;

use App\Models\Elemento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElementoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $elementos=Elemento::factory(20)->create();
    }
}
