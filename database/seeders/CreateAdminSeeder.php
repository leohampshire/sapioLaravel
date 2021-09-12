<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
            ->insert([
                'name' => 'admin',
                'email' => 'scholar.sapio@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('sapio123'),
                'user_type_id' => '1',
                'remember_token' => Str::random(10),
                'current_team_id' => '1'
            ]);
    }
}
