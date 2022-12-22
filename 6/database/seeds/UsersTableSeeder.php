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
            'name' => '日本人です',
            'email' => 'japan@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => '我是中国人',
            'email' => 'china@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => '한국사람입니다',
            'email' => 'korea@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
