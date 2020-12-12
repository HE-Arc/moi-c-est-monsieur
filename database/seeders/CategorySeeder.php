<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => "1",
        'nom' => "Hygiène",
        'sermon' => "",
    ]);
        DB::table('categories')->insert([
        'id' => "2",
        'nom' => "Sexualité",
        'sermon' => "",
    ]);
    DB::table('categories')->insert([
            'id' => "3",
        'nom' => "Maturité",
        'sermon' => "",
    ]);
    DB::table('categories')->insert([
            'id' => "4",
        'nom' => "Physique",
        'sermon' => "",
    ]);
    DB::table('categories')->insert([
            'id' => "5",
        'nom' => "Cuck",
        'sermon' => "",
    ]);
    DB::table('categories')->insert([
            'id' => "6",
        'nom' => "Autiste",
        'sermon' => "",
    ]);
    }
}
