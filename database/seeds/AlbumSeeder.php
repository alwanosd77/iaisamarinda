<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            [ 
                'judul'=>'Ikatan Apoteker Indonesia',
                'slug' =>Str::slug('Ikatan Apoteker Indonesia', '-'),
                'created_at'=>Carbon::now(),
            ],
        ]);
    }
}
