<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'name' => 'demo',
            'email' => 'demo@demo.cl',
            
            'password' => bcrypt('12345678'),
        ]);
    }
}
