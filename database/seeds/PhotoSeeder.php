<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            [ 
                'photo'=>'homepar.jpg',
                'album_id'=>1,
                'created_at'=>Carbon::now(),
            ],
            [ 
                'photo'=>'homepar2.jpg',
                'album_id'=>1,
                'created_at'=>Carbon::now(),
            ],
            [ 
                'photo'=>'homepar3.jpg',
                'album_id'=>1,
                'created_at'=>Carbon::now(),
            ],
            [ 
                'photo'=>'pharmacist.png',
                'album_id'=>1,
                'created_at'=>Carbon::now(),
            ],
        ]);
    }
}
