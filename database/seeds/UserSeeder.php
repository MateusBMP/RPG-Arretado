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
            'name' => "RPG Arretado Administrator",
            'icon_id' => 1,
            'email' => "admin@rpgarretado.com",
            'password' => Hash::make('rpgarretado'),
            'remember_token' => Str::random(100),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
