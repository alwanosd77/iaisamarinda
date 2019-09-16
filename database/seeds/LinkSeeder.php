<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->insert([
            [ 
                'label'=>'Ikatan Apoteker Indonesia',
                'url'=>'https://iai.id',
                'banner'=>'banner1.jpg',
                'slug' =>Str::slug('Ikatan Apoteker Indonesia', '-'),
            ],
        ]);
    }
}
