<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 8; $i <= 10; $i++) {//DB内でseederで増やしたusers分のIDが８から始まっているため。
            DB::table('posts')->insert([
                'user_id' => $i,
                'body' => 'これはテスト!'.$i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
