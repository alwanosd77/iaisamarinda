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
					<strong>{{$artikelIsi->judul}}</strong>
					</h2>
					<hr class="orange title-hr">
					<div class="post-data mb-4">
						<p class="font-small dark-grey-text mb-1">
						<strong>Diupload Oleh: </strong> {{$artikelIsi->user->name}}</p>
						<p class="font-small dark-grey-text mb-1">
						<strong>Ditulis Oleh: </strong> {{$artikelIsi->penulis}}</p>
						<p class="font-small grey-text">
						<i class="far fa-clock-o"></i> {{$artikelIsi->created_at->isoFormat('DD MMMM YYYY , hh:mm a')}}</p>
					</div>
					<img src="{{asset('img/cover/artikel/'.$artikelIsi->cover)}}" class="img-fluid z-depth-1 rounded"
					alt="sample image">
					<!-- Grid row -->
					
					<!-- Grid row -->
					<hr>
					<!-- Grid row -->
					<div class="row mx-md-4 px-4 mt-3">
						{!! $artikelIsi->isi !!}
					</div>
					<!-- Grid row -->
					<!-- Grid row -->
					<!-- Grid row -->
					<hr>
				</div>
			</div>
			<h5 class="font-weight-bold mt-3">
			<strong>YOU MIGHT ALSO LIKE</strong>
			</h5>
			<hr class="orange title-hr">
			<!-- Grid row -->
			<div class="row single-post mb-4">
				<!-- Grid column -->
				<div class="col-md-6 text-left mt-3">
					<!-- Card -->
					@if($artikelIsiPrev >= 0)
					<div class="card">
						<!-- Card image -->
						<div class="view overlay">
							<img src="{{asset('img/cover/artikel/'.$artikelAll[$artikelIsiPrev]->cover)}}" class="card-img-top"
							alt="Sample image">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
						<!-- Card image -->
						<!-- Card content -->
						<div class="card-body">
							<!-- Title -->
							<h4 class="card-title">
							<strong>{{$artikelAll[$artikelIsiPrev]->judul}}</strong>
							</h4>
							<hr>
							<!-- Text -->
							<p class="card-text mb-3">{{$artikelAll[$artikelIsiPrev]->preview}}
							</p>
							<p class="font-small font-weight-bold dark-grey-text mb-1">
							<i class="far fa-clock-o"></i> {{$artikelAll[$artikelIsiPrev]->created_at->isoFormat('DD MMMM YYYY , hh:mm a')}}</p>
							<p class="font-small grey-text mb-0">{{$artikelAll[$artikelIsiPrev]->user->name}}</p>
							<p class="text-right mb-0 font-small font-weight-bold">
								<a href="{{route('artikel.show',$artikelAll[$artikelIsiPrev]->slug)}}">read more
									<i class="fas fa-angle-right"></i>
								</a>
							</p>
						</div>
						<!-- Card content -->
					</div>
					@endif
					<!-- Card -->
				</div>
				<!-- Grid column -->
				<!-- Grid column -->
				<div class="col-md-6 text-left mt-3">
					<!-- Card -->
					@if($artikelIsiNext >= 0)
					<div class="card">
						<!-- Card image -->
						<div class="view overlay">
							<img src="{{asset('img/cover/artikel/'.$artikelAll[$artikelIsiNext]->cover)}}" class="card-img-top"
							alt="Sample image">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
						<!-- Card image -->
						<!-- Card content -->
						<div class="card-body">
							<!-- Title -->
							<h4 class="card-title">
							<strong>{{$artikelAll[$artikelIsiNext]->judul}}</strong>
							</h4>
							<hr>
							<!-- Text -->
							<p class="card-text mb-3">{{$artikelAll[$artikelIsiNext]->preview}}
							</p>
							<p class="font-small font-weight-bold dark-grey-text mb-1">
							<i class="far fa-clock-o"></i> {{$artikelAll[$artikelIsiNext]->created_at->isoFormat('DD MMMM YYYY , hh:mm a')}}</p>
							<p class="font-small grey-text mb-0">{{$artikelAll[$artikelIsiNext]->user->name}}</p>
							<p class="text-right mb-0 font-small font-weight-bold">
								<a href="{{route('artikel.show',$artikelAll[$artikelIsiNext]->slug)}}">read more
									<i class="fas fa-angle-right"></i>
								</a>
							</p>
						</div>
						<!-- Card content -->
					</div>
					@endif
					<!-- Card -->
				</div>
				<!-- Grid column -->
			</div>
			<!-- Grid row -->
			
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