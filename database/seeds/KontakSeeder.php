<?php

use Illuminate\Database\Seeder;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kontaks')->insert([
            [
                'judul'=>'SEKRETARIAT',
                'slug' =>Str::slug('SEKRETARIAT', '-'),
                'isi' => 'ini adalah SEKRETARIAT'
            ],
            [
                'judul'=>'KOOR WILAYAH',
                'slug' =>Str::slug('KOOR WILAYAH', '-'),
                'isi' => 'ini adalah KOOR WILAYAH'
            ],
                
        ]);
    }
    
}
