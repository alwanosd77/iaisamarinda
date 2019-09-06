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
                'isi' => '<div class="row mb-lg-0 mb-5">

          <!-- Grid column -->
          <div class="col-lg-6 mb-lg-0 mb-5">
            <div class="view">
              <img src="../../../../public/img/illustration/2596839.jpg" class="img-fluid" alt="smaple image">
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-6">
            <!-- Grid row -->
            <div class="row mb-3">
              <div class="col-md-12 col-12">
                <h5 class="font-weight-bold purple-pastel mb-2">Desks for any period</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
                  aperiam minima elit assumenda voluptate velit.</p>
              </div>
            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row mb-3">
              <div class="col-md-12 col-12">
                <h5 class="font-weight-bold green-pastel mb-2">Fast Internet</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
                  aperiam minima elit assumenda voluptate velit.</p>
              </div>
            </div>
            <!-- Grid row -->
          </div>
          <!-- Grid column -->

        </div>

        <div class="row mb-lg-0 mb-5">

          <!-- Grid column -->
          <div class="col-lg-6">

            <!-- Grid row -->
            <div class="row mb-3">
              <div class="col-md-12 col-12">
                <h5 class="font-weight-bold blue-pastel mb-2">Meeting rooms</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
                  aperiam minima elit assumenda voluptate velit.</p>
              </div>
            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row mb-3">
              <div class="col-md-12 col-12">
                <h5 class="font-weight-bold pink-pastel mb-2">Flexible memberships</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
                  aperiam minima elit assumenda voluptate velit.</p>
              </div>
            </div>
            <!-- Grid row -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-6">
            <div class="view">
              <img src="../../../../public/img/illustration/2397615.jpg" class="img-fluid" alt="smaple image">
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <hr class="hr my-3">'
            ],
            [
                'judul'=>'Daftar Pengurus',
                'slug' =>Str::slug('Daftar Pengurus', '-'),
                'isi' => 'ini adalah daftar pengurus'
            ],
                
        ]);
    }
}
