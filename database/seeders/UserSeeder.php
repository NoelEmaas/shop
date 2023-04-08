<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


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
            'id' => 1,
            'name' => "noelemaas",
            'email' => "noelemaas@gmail.com",
            'email_verified_at' => Carbon::now(),
            'password' => "password",
            'remember_token' => Str::random(10),
            'isAdmin' => true
        ]);

    }
}
