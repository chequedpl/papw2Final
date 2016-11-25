<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
     	'name' => 'Ezequiel Peña',
      	'description' => 'Productos para Banquetes',
      	'price' => '45000',
      	'photo1'=> 'null',
        'idUser'=>'1'
      	]);

    }
}
