<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ahmet izgi',
            'email' => 'admin@test.com',
            'email_verified_at' => null,
            'password' => '$2a$12$RlPFzPh/yK/SR1AUKs5fDO4.DLMcAhmQm2CPlg2/0facWe4ISkS7u', // test123123
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => null,
        ]);
    }
}

