<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
      	'name'=>'Ezequiel David Peña Leal',
      	'email' => 'chequedpl@hotmail.com',
      	'password' => '12345678',
      	'date' => '1994-10-27',
        'gender' => 'H',
      	'avatar'=> 'null',
        'pathcover' => 'null',
        'cover' => 'null',
        'pathcover' => 'null'
      	]);
      	
    }
}
