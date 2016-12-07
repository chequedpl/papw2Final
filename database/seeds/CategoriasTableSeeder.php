<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	DB::table('categorias')->insert([
      	'categoria'=>'Amigos',
      	]);

      	DB::table('categorias')->insert([
      	'categoria'=>'Cultura',
      	]);


      	DB::table('categorias')->insert([
      	'categoria'=>'Deportes',
      	]);

      	DB::table('categorias')->insert([
      	'categoria'=>'Turismo',
      	]);

		DB::table('categorias')->insert([
      	'categoria'=>'Social',
      	]);

    }
}
