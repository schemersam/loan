<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seeding an admin user
        User::create([
            'name' => 'John Abruzzi',
            'email' => 'samuelnjagah07@gmail.com',
            'role' => 'Admin',
            'status' => 'active',
            'password' => Hash::make('password'),
        ]) ;
    }
}
