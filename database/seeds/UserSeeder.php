<?php

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
        DB::table('users')->insert([
            'name' => "Mateus Barros de Moura Pereira",
            'email' => 'butcraft@gmail.com',
            'password' => Hash::make('SirArcmond'),
            'remember_token' => Str::random(100),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
