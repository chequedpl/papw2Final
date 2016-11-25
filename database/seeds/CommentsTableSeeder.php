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
      	'idUser'=>'1',
      	'idProduct' => '1',
      	'comment' => 'Tiene envios para Monterrey?'
      	]);
      	
    }
}
