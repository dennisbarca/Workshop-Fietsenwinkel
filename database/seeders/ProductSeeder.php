<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'model' => 'Mountain Bike',
                'description' => 'A bike suitable for mountain trails.',
                'price' => 500.00,
            ],
            [
                'model' => 'Road Bike',
                'description' => 'A bike designed for paved roads.',
                'price' => 700.00,
            ],
            [
                'model' => 'Hybrid Bike',
                'description' => 'A bike that combines features of both road and mountain bikes.',
                'price' => 600.00,
            ],
        ]);
    }
}
