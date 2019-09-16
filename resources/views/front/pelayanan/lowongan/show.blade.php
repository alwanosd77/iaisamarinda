@extends('template')
@section('intro')
	@include('front.carousel')
@endsection
@section('main')

<div class="container mt-5 pt-3">
	<div class="row">
		<!-- Main listing -->
		<div class="col-lg-9 col-12 mt-1">
			<div class="row mt-2 mb-5 pb-3 mx-2">
				<!-- Card -->
				<div class="card card-body mb-5">
					
					<!-- Title -->
					<h2 class="text-center font-weight-bold mt-3">
					<strong>{{$lowongan->judul}}</strong>
					</h2>
					<hr class="orange title-hr">
					<div class="post-data mb-4">
						<p class="font-small dark-grey-text mb-1">
						<strong>Diupload Oleh: </strong> {{$lowongan->user->name}}</p>
						<p class="font-small dark-grey-text mb-1">
						<strong>Tempat: </strong> {{$lowongan->pemberi_kerja}}</p>
						<p class="font-small grey-text">
						<i class="far fa-clock-o"></i>Uploaded : {{$lowongan->created_at->isoFormat('DD MMMM YYYY , hh:mm a')}}</p>
					</div>
					<!-- Grid row -->
					
					<!-- Grid row -->
					<hr>
					<!-- Grid row -->
					<div class="row mx-md-4 px-4 mt-3">
						{!! $lowongan->isi !!}
					</div>
					<!-- Grid row -->
					<!-- Grid row -->
					<!-- Grid row -->
					<hr>
				</div>
			</div>
			
			<!-- Pagination dark -->
			
			<!-- Pagination dark grey -->
			
		</div>
		<!-- Main listing -->
		<!-- Sidebar -->
		@include('front.sidebar')
		<!-- Sidebar -->
	</div>
</div>
@endsection