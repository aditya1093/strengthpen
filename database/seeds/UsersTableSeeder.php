<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
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
            'email' => 'admin@strengthpen.de',
            'password' => '$2y$10$5CsSaBjXoIL1Aabv5d.5B.bIEizkZVvUtjFfffiXn8R087QbV0HSi' // = strengthpen
        ]);

        User::create([
            'name' => 'Dirk',
            'email' => 'dirk@strengthpen.de',
            'password' => '$2y$10$5CsSaBjXoIL1Aabv5d.5B.bIEizkZVvUtjFfffiXn8R087QbV0HSi' // = strengthpen
        ]);
    }
}
