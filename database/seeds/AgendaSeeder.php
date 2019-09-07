<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendas')->insert([
            [
                'judul'=>'Agenda A',
                'slug' =>Str::slug('Agenda A', '-'),
                'lokasi' =>'Kantor A',
                'tamu' =>'Prof. A',
                'isi' => 'ini adalah Agenda A',
                'user_id' => 1,
                'waktu'=>Carbon::create('2019','08','21','09','00'),
                'created_at'=>Carbon::now(),
            ],
            
                
        ]);
    }
}
