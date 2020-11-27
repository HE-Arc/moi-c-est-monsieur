<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttackCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attack_cards')->insert([
            'attack' => "Tu n'est pas beau",
            'category_id' => "1",
        ]);
    }
}
