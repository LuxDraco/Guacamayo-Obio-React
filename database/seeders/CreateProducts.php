<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;

class CreateProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'name' => 'Piña',
            'size' => '1pza',
            'category' => 1,
            'img' => 'https://guacamayo.s3.us-west-2.amazonaws.com/imagenes-productos/1.png',
            'price' => 0.01,
        ]);

        Products::create([
            'name' => 'Manzana',
            'size' => '1pza',
            'category' => 1,
            'img' => 'https://guacamayo.s3.us-west-2.amazonaws.com/imagenes-productos/2.png',
            'price' => 0.02,
        ]);

        Products::create([
            'name' => 'Sandía',
            'size' => '1pza',
            'category' => 1,
            'img' => 'https://guacamayo.s3.us-west-2.amazonaws.com/imagenes-productos/3.png',
            'price' => 0.03,
        ]);

        Products::create([
            'name' => 'Naranja',
            'size' => '1pza',
            'category' => 1,
            'img' => 'https://guacamayo.s3.us-west-2.amazonaws.com/imagenes-productos/4.png',
            'price' => 0.04,
        ]);

        Products::create([
            'name' => 'Huevo',
            'size' => '6pzas',
            'category' => 2,
            'img' => 'https://guacamayo.s3.us-west-2.amazonaws.com/imagenes-productos/5.png',
            'price' => 0.05,
        ]);

        Products::create([
            'name' => 'Leche',
            'size' => '1 botella',
            'category' => 2,
            'img' => 'https://guacamayo.s3.us-west-2.amazonaws.com/imagenes-productos/6.png',
            'price' => 0.06,
        ]);

        Products::create([
            'name' => 'Cafe',
            'size' => '1 bolsa',
            'category' => 3,
            'img' => 'https://guacamayo.s3.us-west-2.amazonaws.com/imagenes-productos/7.png',
            'price' => 0.07,
        ]);
    }
}
