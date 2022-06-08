<?php

namespace Database\Seeders;
use App\Models\Categorias;

use Illuminate\Database\Seeder;

class CreateCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Categorias::create([
            'nombre' => 'ALIMENTOS',
            'estado' => '1',
            'created_at' => '2022-06-08 00:48:04',
            'updated_at' => '2022-06-08 00:48:04'
        ]);

        Categorias::create([
            'nombre' => 'ARTICULOS VARIOS',
            'estado' => '2',
            'created_at' => '2022-06-08 00:48:04',
            'updated_at' => '2022-06-08 00:48:04'
        ]);
    }
}
