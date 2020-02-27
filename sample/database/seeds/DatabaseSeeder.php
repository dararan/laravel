<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *この中にどのしーでいんぐを実行するか
     * @return void
     */
    public function run()
    {
        $this->call(TasksTableSeeder::class);
        $this->call(CommentsTableSeeder::class);

    }
}
