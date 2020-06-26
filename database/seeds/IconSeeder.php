<?php

use Illuminate\Database\Seeder;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            'name' => "RPG Game",
            'filename' => "001-rpg-game.svg"
        ]);
    }
}
