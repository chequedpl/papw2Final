<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
      	'idUser'=>'2',
      	'idNota' => '1',
      	'comment' => 'GPI'
      	]);
      	
        DB::table('comments')->insert([
        'idUser'=>'1',
        'idNota' => '1',
        'comment' => 'cuando quieras'
        ]);

        DB::table('comments')->insert([
        'idUser'=>'2',
        'idNota' => '1',
        'comment' => 'ahorita caigo'
        ]);
    }
}
