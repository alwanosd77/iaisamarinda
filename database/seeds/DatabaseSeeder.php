<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ProfilSeeder::class);
        $this->call(KontakSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BeritaSeeder::class);
        $this->call(ArtikelSeeder::class);
        $this->call(AgendaSeeder::class);
    }
}
