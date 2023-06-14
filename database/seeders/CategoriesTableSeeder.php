<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $category = new Category;
        $category->name = "Deportes";
        $category->description = "Categoria basada en deportes";
        $category->active = true;
        $category->save();

        $category2 = new Category;
        $category2->name = "Accion";
        $category2->description = "Categoria basada en juegos de accion";
        $category2->active = true;
        $category2->save();

        $category2 = new Category;
        $category2->name = "Aventura";
        $category2->description = "Categoria basada en juegos de aventura";
        $category2->active = true;
        $category2->save();
    }
}
