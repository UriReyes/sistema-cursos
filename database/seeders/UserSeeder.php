<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Uriel Santiago Reyes Paredes',
            'email' => 'Urielreyes514@gmail.com',
            'password' => bcrypt('Administrador'),
        ]);

        User::factory(99)->create();
    }
}
