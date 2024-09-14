<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>Str::random(5),
            'image'=>Str::random(5),
            'category'=>Str::random(5),
            'quantity'=>Str::random(5),
            'price'=>Str::random(5),
            'created_at' => now(), // Using now() for the current datetime
            'updated_at' => now() // Using now() for the current datetime
        ]);
    }
}
