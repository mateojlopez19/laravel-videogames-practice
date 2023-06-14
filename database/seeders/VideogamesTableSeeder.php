<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Videogame;

class VideogamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $videogame = new Videogame;
        $videogame->name = "fifa";
        $videogame->category_id = 1;
        $videogame->active = true;
        $videogame->save();
    }
}
