<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UnduhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unduhans')->insert([
            [ 
                'nama'=>'Peraturan 1.pdf',
                'filename'=>'1.pdf',
                'peraturan_id'=>1,
                'user_id'=>1,
                'created_at'=>Carbon::now(),
            ],
           
        ]);
}
}
