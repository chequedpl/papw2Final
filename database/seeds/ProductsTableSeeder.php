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
     	'name' => 'Bonice',
      	'description' => 'ricos Bonice',
      	'price' => '6',
      	'photo1'=> 'Img/Boniceproducto1.png',
        'idUser'=>'1'
      	]);

         DB::table('products')->insert([
        'name' => 'cocacola',
        'description' => '12 cajas de medio litro',
        'price' => '7',
        'photo1'=> 'Img/cocasproducto2.jpg',
        'idUser'=>'1'
        ]);

    }
}
