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
			<strong>Lowongan Pekerjaan</strong>
			</h1>
			<!-- Section: Blog v.3 -->
			<section class="pb-3 text-center text-lg-left">
				@foreach($lowongan as $job)
					<hr class="mb-1">
						<div class="row">
							<!-- Grid column -->
							
							<!-- Grid column -->
							<!-- Grid column -->
							<div class="col-lg-6 ml-xl-4 mb-4">
								<!-- Grid row -->
								<div class="row">
									<!-- Grid column -->
									<div class="col-xl-12 col-md-12 text-sm-center text-md-right text-lg-left">
										<p class="orange-text font-small font-weight-bold mb-1 spacing">
											<i class="fa fa-user"></i><strong>{{$job->pemberi_kerja}}</strong>
										</p>
									</div>
								</div>
								<!-- Grid column -->
								<!-- Grid column -->
								<!-- Grid row -->
								<h4 class="mb-3 dark-grey-text mt-0">
								<strong>
								<a>{{$job->judul}}</a>
								</strong>
								</h4>
								<!-- Deep-orange -->
								<a href="{{route('pelayanan.lowongan.show',$job->slug)}}">
								<button type="button" class="btn btn-deep-orange btn-rounded btn-sm">Read more</button>
								</a>
							</div>
							<!-- Grid column -->
						</div>
				@endforeach
				<hr class="mb-1">
				{{$lowongan->links()}}
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