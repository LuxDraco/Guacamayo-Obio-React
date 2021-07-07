<?php

namespace Database\Seeders;

use App\Models\User;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => \Hash::make('root12345678'),
            'address' => 'Dirección user',
            'img_profile' => 'https://i.pinimg.com/originals/e8/e5/a3/e8e5a34772bd842df9f534de3931869d.png',
            'puntos' => random_int(0, 701),
        ]);

        for ($i = 0; $i < 51; $i++)
        {
            $strTMP = \Str::random();
            User::create([
                'name' => $strTMP,
                'email' => $strTMP . '@mail.com',
                'password' => \Hash::make('root12345678'),
                'address' => 'Dirección user ' . $strTMP,
                'img_profile' => 'https://i1.wp.com/codigoespagueti.com/wp-content/uploads/2018/05/pikachu.jpg?resize=1080%2C608&quality=80&ssl=1',
                'puntos' => random_int(0, 501),
            ]);
        }
    }
}
