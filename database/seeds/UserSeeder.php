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
            'password' => Hash::make('hb7a9eth'),
            'remember_token' => Str::random(100),
        ]);
    }
}
