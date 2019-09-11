<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beritas')->insert([
            [
                'judul'=>'Berita A',
                'slug' =>Str::slug('Berita A', '-'),
                'preview'=>'Berita A',
                'isi' => 'ini adalah Berita A',
                'cover' => '2596839.jpg',
                'sumber' => 'Prof.awda',
                'user_id' => 1,
                'created_at'=>Carbon::now(),
            ],
            
                
        ]);
    }
}
