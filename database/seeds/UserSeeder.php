<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [ 
                'name'=>'Administrator',
                'username'=>'admin',
                'level'=>'admin',
                'password'=>Hash::make('admins')
            ],
            [ 
                'name'=>'Dauzic',
                'level'=>'operator',
                'username'=>'dauzic99',
                'password'=>Hash::make('dauzic0123')
            ],
        ]);
    }
}
