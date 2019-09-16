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
			<strong>AGENDA</strong>
			</h1>
			<!-- Section: Blog v.3 -->
			<section class="pb-3 text-center text-lg-left">
				@foreach($agendaIsi as $agen)
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
											<i class="fa fa-user"></i><strong>{{$agen->user->name}}</strong>
										</p>
									</div>
								</div>
								<!-- Grid column -->
								<!-- Grid column -->
								<div class="row">
									<div class="col-xl-12 col-md-12 text-sm-center text-md-left">
										<p class="font-small grey-text">
											<em> Waktu : {{$agen->waktu->isoFormat('DD MMMM YYYY , hh:mm a')}}</em>
										</p>
									</div>
									<!-- Grid column -->
								</div>
								<!-- Grid row -->
								<h4 class="mb-3 dark-grey-text mt-0">
								<strong>
								<a>{{$agen->judul}}</a>
								</strong>
								</h4>
								<p>
									Dihadiri Oleh : {{$agen->tamu}}
								</p>
								<!-- Deep-orange -->
								<a href="{{route('agenda.show',$agen->slug)}}">
								<button type="button" class="btn btn-deep-orange btn-rounded btn-sm">Read more</button>
								</a>
							</div>
							<!-- Grid column -->
						</div>
				@endforeach
				<hr class="mb-1">
				{{$agendaIsi->links()}}
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