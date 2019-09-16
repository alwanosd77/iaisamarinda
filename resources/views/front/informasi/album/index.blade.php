@extends('template')
@section('intro')
@include('front.carousel')
@endsection
@section('main')
<div class="container mt-5 pt-3">
	<div class="row">
		<!-- Main listing -->
		<div class="col-lg-9 col-12 mt-1">
			<h1 class="text-center font-weight-bold dark-grey-text py-3">
			<strong>GALLERY</strong>
			</h1>
			<!-- Section: Blog v.3 -->
			<section class="pb-3 text-center text-lg-left">
				<hr class="mb-1">
				<div class="row">
					<!-- Grid column -->
					
					<!-- Grid column -->
					<!-- Grid column -->
					@foreach($albumIsi as $album)
					@php
					$cover = DB::table('photos')->where('album_id', $album->id)->first();

					@endphp
					<div class="col-md-4 mb-4">
						<!-- Grid row -->
						<div class="card card-image" style="background-image: url('{{asset('img/album/'.$album->judul.'/'.$cover->photo)}}');">
							<div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
								<div>
									<h3 class="py-3 font-weight-bold">
										<strong> {{$album->judul}}</strong>
									</h3>
									<a href="{{route('album.show',$album->slug)}}" class="btn btn-secondary btn-rounded btn-md">Lihat Album</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Grid column -->
					@endforeach
				</div>
				<hr class="mb-1">
				{{$albumIsi->links()}}
			</section>
			<!-- Section: Blog v.3 -->
			
		</div>
		<!-- Main listing -->
		<!-- Sidebar -->
		@include('front.sidebar')
		<!-- Sidebar -->
	</div>
</div>
@endsection