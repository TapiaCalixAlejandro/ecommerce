<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alejandro23',
            'email' => 'tapiacalix@gmailcom',
            'password' => Hash::make('12341234')
        ]);
    }
}
