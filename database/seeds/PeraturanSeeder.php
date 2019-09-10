<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
class PeraturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peraturans')->insert([
            [ 
                'label'=>'Peraturan Pengurus Cabang Samarinda',
                'slug' =>Str::slug('Peraturan Pengurus Cabang Samarinda', '-'),
                'created_at'=>Carbon::now(),
            ],
        ]);
    }
}
