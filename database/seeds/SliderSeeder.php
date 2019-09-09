<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [ 
                'judul'=>'Ikatan Apoteker Indonesia',
                'subjudul'=>'Pengurus Cabang Samarinda',
                'banner'=>'banner1.jpg',
                'slug' =>Str::slug('Ikatan Apoteker Indonesia', '-'),
            ],
        ]);
    }
}
