<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profils')->insert([
            [
                'judul'=>'Visi - Misi',
                'slug' =>Str::slug('Visi - Misi', '-'),
                'isi' => 'ini adalah visi misi'
            ],
            [
                'judul'=>'Daftar Pengurus',
                'slug' =>Str::slug('Daftar Pengurus', '-'),
                'isi' => 'ini adalah daftar pengurus'
            ],
                
        ]);
    }
}
