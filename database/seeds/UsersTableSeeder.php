<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Ilya Degtyarenko',
            'email' => 'is.degtyarenko@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make(123123),
            'remember_token' => 'UrysWU9IahhfV9meyctuywBSE3T0mMbQ8DVldNoC',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory(\App\Models\User::class, 30)->create();
    }
}
