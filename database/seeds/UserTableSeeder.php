<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sylvian',
            'email' => 'sylvian84@hotmail.fr',
            'password' => bcrypt('sylvian'),
            'role' => \App\User::VISITOR,
        ]);

        DB::table('users')->insert([
            'name' => 'Pro',
            'email' => 'sylvian85@hotmail.fr',
            'password' => bcrypt('sylvian'),
            'role' => \App\User::PRO,
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'sylvian86@hotmail.fr',
            'password' => bcrypt('sylvian'),
            'role' => \App\User::ADMIN,
        ]);

        factory(\App\User::class, 17)->create();
    }
}
