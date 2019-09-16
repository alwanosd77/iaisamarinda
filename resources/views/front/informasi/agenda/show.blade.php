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
					<strong>{{$agendaIsi->judul}}</strong>
					</h2>
					<hr class="orange title-hr">
					<div class="post-data mb-4">
						<p class="font-small dark-grey-text mb-1">
						<strong>Diupload Oleh: </strong> {{$agendaIsi->user->name}}</p>
						<p class="font-small dark-grey-text mb-1">
						<strong>Dihadiri Oleh: </strong> {{$agendaIsi->tamu}}</p>
						<p class="font-small grey-text">
						<i class="far fa-clock-o"></i>Waktu : {{$agendaIsi->waktu->isoFormat('DD MMMM YYYY , hh:mm a')}}</p>
					</div>
					<!-- Grid row -->
					
					<!-- Grid row -->
					<hr>
					<!-- Grid row -->
					<div class="row mx-md-4 px-4 mt-3">
						{!! $agendaIsi->isi !!}
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
					@if($agendaIsiPrev >= 0)
					<div class="card">
						<!-- Card image -->
						
						<!-- Card image -->
						<!-- Card content -->
						<div class="card-body">
							<!-- Title -->
							<h4 class="card-title">
							<strong>{{$agendaAll[$agendaIsiPrev]->judul}}</strong>
							</h4>
							<hr>
							<!-- Text -->
							<p class="font-small font-weight-bold dark-grey-text mb-1">
							<i class="far fa-clock-o"></i> {{$agendaAll[$agendaIsiPrev]->waktu->isoFormat('DD MMMM YYYY , hh:mm a')}}</p>
							<p class="font-small grey-text mb-0">{{$agendaAll[$agendaIsiPrev]->tamu}}</p>
							<p class="text-right mb-0 font-small font-weight-bold">
								<a href="{{route('agenda.show',$agendaAll[$agendaIsiPrev]->slug)}}">read more
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
					@if($agendaIsiNext >= 0)
					<div class="card">
						<!-- Card image -->
						
						<!-- Card image -->
						<!-- Card content -->
						<div class="card-body">
							<!-- Title -->
							<h4 class="card-title">
							<strong>{{$agendaAll[$agendaIsiNext]->judul}}</strong>
							</h4>
							<hr>
							<!-- Text -->
							<p class="font-small font-weight-bold dark-grey-text mb-1">
							<i class="far fa-clock-o"></i> {{$agendaAll[$agendaIsiNext]->waktu->isoFormat('DD MMMM YYYY , hh:mm a')}}</p>
							<p class="font-small grey-text mb-0">{{$agendaAll[$agendaIsiNext]->tamu}}</p>
							<p class="text-right mb-0 font-small font-weight-bold">
								<a href="{{route('agenda.show',$agendaAll[$agendaIsiNext]->slug)}}">read more
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