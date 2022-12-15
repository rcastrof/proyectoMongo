<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();

        $categoria->name = "Gifs";
        $categoria->save();

        $categoria2 = new Categoria();

        $categoria2->name = "Videos";
        $categoria2->save();

        $categoria3 = new Categoria();

        $categoria3->name = "Imagenes";
        $categoria3->save();

    }
}
