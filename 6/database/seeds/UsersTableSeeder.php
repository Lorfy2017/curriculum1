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
        DB::table('users')->insert([
            'name' => 'やま',
            'email' => 'yama@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'かわ',
            'email' => 'kawa@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'たに',
            'email' => 'tani@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
