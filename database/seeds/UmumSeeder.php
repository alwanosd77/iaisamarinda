<?php

use Illuminate\Database\Seeder;

class UmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('umums')->insert([
            [ 
                'alamat'=>'Jl. Abdul Wahab Syahrani No.226, Air Hitam,Gunung Kelua, Samarinda',
                'telp'=>'+6280000000',
                'email'=>'admin@iaisamarinda.org',
                'about'=>'Tentang Kami',
            ],
            
        ]);
    }
}
