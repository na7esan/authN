<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        User::first()->update([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('testtest'),
        ]);
    }
}
