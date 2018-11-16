<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
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
			DB::table('barang')->insert([  //mengisi database
		'nama'=> 'barang'.$i,
		'stok' => $faker->randomNumber(1),
		'harga' => $faker->randomNumber(2),
		'expired_date' => $faker->date,
		'tanggal_produksi' => $faker->date,

			]);
		}
    }
}