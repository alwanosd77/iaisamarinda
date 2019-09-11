<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
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
                'password'=>Hash::make('admins'),
                'last_login_at'=>Carbon::now(),
                'last_login_ip'=>'127.0.0.1',
            ],
            [ 
                'name'=>'Dauzic',
                'level'=>'operator',
                'username'=>'dauzic99',
                'password'=>Hash::make('dauzic0123'),
                'last_login_at'=>Carbon::now(),
                'last_login_ip'=>'127.0.0.1',
            ],
        ]);
    }
}
