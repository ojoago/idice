<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'pid' => public_id(),
            'email' => 'dhasmom01@gmail.com',
            'password' => '1234',
            'type' => '764']);
    }
}
