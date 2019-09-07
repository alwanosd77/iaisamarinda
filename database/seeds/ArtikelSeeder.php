<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikels')->insert([
            [
                'judul'=>'Artikel A',
                'slug' =>Str::slug('Artikel A', '-'),
                'isi' => 'ini adalah Artikel A',
                'cover' => '2397615.jpg',
                'penulis' => 'Prof.wkadn',
                'user_id' => 1,
                'created_at'=>Carbon::now(),
            ],
            
                
        ]);
    }
}
