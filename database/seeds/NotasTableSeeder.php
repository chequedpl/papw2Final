<?php

use Illuminate\Database\Seeder;

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
      	'photo'=>'Img/1perfil2.jpg',
      	'description' => 'La vida es bella',
      	'idUser' => '1',
      	'idCategorias' => '5'
      	]);


    }
}
