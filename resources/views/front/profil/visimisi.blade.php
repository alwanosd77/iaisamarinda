@extends('template')
@section('intro')
	@include('front.parallax')
@endsection
@section('main')
	<div class="container mt-5 pt-3">
		<div class="row">
			<div class="col-lg-9 col-12 mt-1">
				<section id="offer" class="mb-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center">VISI</h2>
        <hr class="hr my-3">
        <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">Duis aute irure dolor in reprehenderit in
          voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit.</p>

        <!-- Grid row -->
        <div class="row mb-lg-0 mb-5">

          <!-- Grid column -->
          <div class="col-lg-6 mb-lg-0 mb-5" >
            <div class="view">
              <img src="{{asset('img/illustration/2596839.jpg')}}" class="img-fluid" alt="smaple image">
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
        <!-- Grid row -->
        <hr class="hr my-3">
        <h2 class="h1-responsive font-weight-bold text-center">MISI</h2>
        <hr class="hr my-3">
        <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">Duis aute irure dolor in reprehenderit in
          voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit.</p>
        <!-- Grid row -->
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
              <img src="{{asset('img/illustration/2397615.jpg')}}" class="img-fluid" alt="smaple image">
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <hr class="hr my-3">

        <!-- Grid row -->

      </section>
			</div>
			@include('front.sidebar')
		</div>
	</div>
@endsection