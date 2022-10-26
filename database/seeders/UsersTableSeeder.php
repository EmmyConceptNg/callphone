<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password ='Ferdnardjohn73';
        User::create([
            'name' => 'Ferdnardjohn73',
            'email' => 'ferdnardjohn73@gmail.com',
            'password' => Hash::make($password)
        ]);
    }
}
