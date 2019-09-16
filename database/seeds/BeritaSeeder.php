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
            [
                'judul'=>'Berita B',
                'slug' =>Str::slug('Berita B', '-'),
                'preview'=>'Berita B',
                'isi' => 'ini adalah Berita B',
                'cover' => '2596839.jpg',
                'sumber' => 'Prof.awda',
                'user_id' => 1,
                'created_at'=>Carbon::now(),
            ],
            [
                'judul'=>'Berita C',
                'slug' =>Str::slug('Berita C', '-'),
                'preview'=>'Berita C',
                'isi' => 'ini adalah Berita C',
                'cover' => '2596839.jpg',
                'sumber' => 'Prof.awda',
                'user_id' => 1,
                'created_at'=>Carbon::now(),
            ],
            [
                'judul'=>'Berita D',
                'slug' =>Str::slug('Berita D', '-'),
                'preview'=>'Berita D',
                'isi' => 'ini adalah Berita D',
                'cover' => '2596839.jpg',
                'sumber' => 'Prof.awda',
                'user_id' => 1,
                'created_at'=>Carbon::now(),
            ],
            [
                'judul'=>'Berita E',
                'slug' =>Str::slug('Berita E', '-'),
                'preview'=>'Berita E',
                'isi' => 'ini adalah Berita E',
                'cover' => '2596839.jpg',
                'sumber' => 'Prof.awda',
                'user_id' => 1,
                'created_at'=>Carbon::now(),
            ],
            [
                'judul'=>'Berita F',
                'slug' =>Str::slug('Berita F', '-'),
                'preview'=>'Berita F',
                'isi' => 'ini adalah Berita F',
                'cover' => '2596839.jpg',
                'sumber' => 'Prof.awda',
                'user_id' => 1,
                'created_at'=>Carbon::now(),
            ],
            [
                'judul'=>'Berita G',
                'slug' =>Str::slug('Berita G', '-'),
                'preview'=>'Berita G',
                'isi' => 'ini adalah Berita G',
                'cover' => '2596839.jpg',
                'sumber' => 'Prof.awda',
                'user_id' => 1,
                'created_at'=>Carbon::now(),
            ],
            
                
        ]);
    }
}
