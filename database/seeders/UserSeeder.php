<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(30)->create();
        User::create([
            'name' => 'kresno bimantoro',
            'email' => 'kresno@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('qwerty123jateng'),
            'roles'=> 'mahasiswa',
            'phone'=> '085777676',
            'address'=> 'jl damar',
        ]);

        User::create([
            'name' => 'bimo bimantoro',
            'email' => 'bimo@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123321'),
            'roles'=> 'pelajar',
            'phone'=> '08576433',
            'address'=> 'jl merbau',
        ]);
    }
}
