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
        <h2 class="h1-responsive font-weight-bold text-center">DAFTAR PENGURUS</h2>
        <hr class="hr my-3">
        <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">Duis aute irure dolor in reprehenderit in
          voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit.</p>
        <hr class="hr my-3">
          <img src="{{asset('img/sk pengurus/sp1.jpg')}}" class="img-fluid">
          <img src="{{asset('img/sk pengurus/sp2.jpg')}}" class="img-fluid">
          <img src="{{asset('img/sk pengurus/sp3.jpg')}}" class="img-fluid">
          <img src="{{asset('img/sk pengurus/sp4.jpg')}}" class="img-fluid">

        
       

        <!-- Grid row -->

      </section>
			</div>
			@include('front.sidebar')
		</div>
	</div>
@endsection