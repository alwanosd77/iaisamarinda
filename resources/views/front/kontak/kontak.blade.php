@extends('template')
@section('intro')
  @include('front.carousel')
@endsection
@section('main')
	<div class="container mt-5 pt-3">
		<div class="row">
			<div class="col-lg-9 col-12 mt-1">
				<section id="offer" class="mb-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center">{{$kontakIndex->judul}}</h2>
        <hr class="hr my-3">
        {!! $kontakIndex->isi !!}
       

        <!-- Grid row -->

      </section>
			</div>
			@include('front.sidebar')
		</div>
	</div>
@endsection