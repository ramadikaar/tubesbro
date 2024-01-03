<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            'description'=>"Satiraksa adalah lorem ipsum diogo dalot.",
            'short_des'=>"Satiraksa adalah awikwok.",
            'photo'=>"image.jpg",
            'logo'=>'logo.jpg',
            'address'=>"NO. 49 - Ancol Timur I Street, Bandung, West Java, Indonesia",
            'email'=>"mail@satiraksa.com",
            'phone'=>"+62 (877) 3410-5013",
        );
        DB::table('settings')->insert($data);
    }
}
