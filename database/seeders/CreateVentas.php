<?php

namespace Database\Seeders;

use App\Models\Ventas;
use Exception;
use Illuminate\Database\Seeder;

class CreateVentas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        for ($i = 0; $i <= 1000; $i++)
        {
            Ventas::create([
                'user_id' => random_int(1, 50),
                'product_id' => random_int(1, 7),
                'rating' => random_int(1, 5),
            ]);
        }
    }
}
