<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => \Hash::make('root12345678'),
            'address' => 'Dirección user',
            'img_profile' => 'https://i.pinimg.com/originals/e8/e5/a3/e8e5a34772bd842df9f534de3931869d.png',
            'puntos' => 0,
        ]);
    }
}
