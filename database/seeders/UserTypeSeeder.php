<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_type')
            ->insert([
                'name' => 'ADMIN',
                'description' => 'Usuário admin pode ...'
            ]);
        DB::table('user_type')
            ->insert([
            'name' => 'STUDENT',
            'description' => 'Usuário estudante pode ...'
            ]);
        DB::table('user_type')
            ->insert([
                'name' => 'TEACHER',
                'description' => 'Usuário professore pode ...'
            ]);
        DB::table('user_type')
            ->insert([
                'name' => 'MONITOR',
                'description' => 'Usuário monitor pode ...'
            ]);
        DB::table('user_type')
            ->insert([
                'name' => 'TEST',
                'description' => 'Usuário teste pode ...'
            ]);
    }
}
