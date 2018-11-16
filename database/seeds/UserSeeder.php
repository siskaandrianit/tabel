<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
		$limit= 20;
		for($i= 0 ; $i< $limit ; $i++){
			DB::table('user')->insert([  //mengisi database
			'nama'=>$faker->name,
			'email'=>$faker->unique()->email,  //email unik agar tidak ada yang sama
			'username'=>$faker->unique()->username,
			'password'=>$faker->password, 
			]);
		}
    }
}
