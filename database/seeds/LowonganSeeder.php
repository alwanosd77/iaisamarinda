<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
class LowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lowongans')->insert([
            [
                'judul'=>'Berita A',
                'slug' =>Str::slug('Berita A', '-'),
                'pemberi_kerja'=>'Berita A',
                'isi' => 'ini adalah Berita A',
                'user_id' => 1,
                'created_at'=>Carbon::now(),
            ],
            
                
        ]);
    }
}
