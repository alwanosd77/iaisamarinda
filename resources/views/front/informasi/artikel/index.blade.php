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
			<strong>ARTIKEL</strong>
			</h1>
			<!-- Section: Blog v.3 -->
			<section class="pb-3 text-center text-lg-left">
				@foreach($artikelIsi as $article)
					<hr class="mb-1">
						<div class="row">
							<!-- Grid column -->
							<div class="col-lg-5 mb-4">
								<!-- Featured image -->
								<div class="view overlay z-depth-1">
									<img src="{{asset('img/cover/artikel/'.$article->cover)}}" class="img-fluid"
									alt="First sample image">
									<a>
										<div class="mask rgba-white-slight"></div>
									</a>
								</div>
							</div>
							<!-- Grid column -->
							<!-- Grid column -->
							<div class="col-lg-6 ml-xl-4 mb-4">
								<!-- Grid row -->
								<div class="row">
									<!-- Grid column -->
									<div class="col-xl-12 col-md-12 text-sm-center text-md-right text-lg-left">
										<p class="orange-text font-small font-weight-bold mb-1 spacing">
											<i class="fa fa-user"></i><strong>{{$article->user->name}}</strong>
										</p>
									</div>
								</div>
								<!-- Grid column -->
								<!-- Grid column -->
								<div class="row">
									<div class="col-xl-12 col-md-12 text-sm-center text-md-left">
										<p class="font-small grey-text">
											<em> {{$article->created_at->isoFormat('DD MMMM YYYY , hh:mm a')}}</em>
										</p>
									</div>
									<!-- Grid column -->
								</div>
								<!-- Grid row -->
								<h4 class="mb-3 dark-grey-text mt-0">
								<strong>
								<a>{{$article->judul}}</a>
								</strong>
								</h4>
								<p class="dark-grey-text">Ditulis oleh {{$article->penulis}}
								</p>
								<!-- Deep-orange -->
								<a href="{{route('artikel.show',$article->slug)}}">
								<button type="button" class="btn btn-deep-orange btn-rounded btn-sm">Read more</button>
								</a>
							</div>
							<!-- Grid column -->
						</div>
				@endforeach
				<hr class="mb-1">
				{{$artikelIsi->links()}}
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