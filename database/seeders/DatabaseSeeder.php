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

        $user = new User();

        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("admin1234");
        $user->role = "1";
        $user->save();

        $this->call(CategoriaSeeder::class);
    }
}
