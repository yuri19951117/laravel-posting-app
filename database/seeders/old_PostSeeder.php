<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'user_id' => '4',
            'title' => 'title',
            'content' => 'content',
            'created_at' => '2023-06-01 00:00:00',
            'updated_at' => '2023-06-01 00:00:00'
            ]);
    }
}
