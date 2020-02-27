<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // メソッドrunが定義されている
    public function run()
    {
        //たすくすにインサートしますよって命令アロー演算はクラスんのインスタンス
        DB::table('tasks')->insert([
            // どのカラムに何を入れるか引数で指定。じっこうは
            'tel'=>123,
            'created_at'=>Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
    }
}
