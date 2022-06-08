<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Productos;

class CreateProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Productos::create([
            'nombre' => 'QUESO GAUDA SOPROLE',
            'valor' => '1800',
            'categoria' => '1',
            'fecha_exp' => '2022-06-30',
            'created_at' => '2022-06-08 00:48:04',
            'updated_at' => '2022-06-08 00:48:04'
        ]);

        Productos::create([
            'nombre' => 'CJ HUEVO EXTRA COLOR 180 U',
            'valor' => '15990',
            'categoria' => '1',
            'fecha_exp' => '2022-06-30',
            'created_at' => '2022-06-08 00:48:04',
            'updated_at' => '2022-06-08 00:48:04'
        ]);

        Productos::create([
            'nombre' => 'LINTERNA',
            'valor' => '5990',
            'categoria' => '2',   
            'fecha_exp' => '2022-06-08',         
            'created_at' => '2022-06-08 00:48:04',
            'updated_at' => '2022-06-08 00:48:04'
        ]);

        Productos::create([
            'nombre' => 'PILAS PANNASONIC DOBLE A',
            'valor' => '300',
            'categoria' => '2',
            'fecha_exp' => '2022-06-08',
            'created_at' => '2022-06-08 00:48:04',
            'updated_at' => '2022-06-08 00:48:04'
        ]);

        Productos::create([
            'nombre' => 'COLACION DEL DIA',
            'valor' => '3000',
            'categoria' => '1',
            'fecha_exp' => '2022-06-08',
            'created_at' => '2022-06-08 00:48:04',
            'updated_at' => '2022-06-08 00:48:04'
        ]);
    }
}
