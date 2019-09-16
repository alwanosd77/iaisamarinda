@extends('template')
@section('intro')
@include('front.carousel')
@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
@endsection
@section('main')
<div class="container mt-5 pt-3">
	<h1 class="text-center font-weight-bold dark-grey-text py-3">
	<strong>ABOUT US</strong>
	</h1>
	<p class="grey-text text-center mb-5 pb-3">
		<em>{{$umum->about}}</em>
	</p>
	<hr>
	<div class="row">
		<!-- Main listing -->
		<div class="col-lg-9 col-12 mt-1">
			<div class="row">
				<div class="col-md-12">
					
					
					<h1 class="text-center font-weight-bold dark-grey-text py-3">
					<strong>NEWS</strong>
					</h1>
					<!-- Section: Blog v.3 -->
					<section class="pb-3 text-center text-lg-left">
						<!-- Grid row -->
						@if($countBerita > 0)
						@for($i=0;$i<$countBerita;$i++)
						@if($i==3)
						@break
						@endif
						<hr class="mb-1">
						<div class="row">
							<!-- Grid column -->
							<div class="col-lg-5 mb-4">
								<!-- Featured image -->
								<div class="view overlay z-depth-1">
									<img src="{{asset('img/cover/berita/'.$berita[$i]->cover)}}" class="img-fluid"
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
											<i class="fa fa-user"></i><strong>{{$berita[$i]->user->name}}</strong>
										</p>
									</div>
								</div>
								<!-- Grid column -->
								<!-- Grid column -->
								<div class="row">
									<div class="col-xl-12 col-md-12 text-sm-center text-md-left">
										<p class="font-small grey-text">
											<em> {{$berita[$i]->created_at->isoFormat('DD MMMM YYYY , hh:mm a')}}</em>
										</p>
									</div>
									<!-- Grid column -->
								</div>
								<!-- Grid row -->
								<h4 class="mb-3 dark-grey-text mt-0">
								<strong>
								<a>{{$berita[$i]->judul}}</a>
								</strong>
								</h4>
								<p class="dark-grey-text">{{$berita[$i]->preview}}
								</p>
								<!-- Deep-orange -->
								<a href="{{route('berita.show',$berita[$i]->slug)}}">
									
								<button type="button" class="btn btn-deep-orange btn-rounded btn-sm">Read more</button>
								</a>
							</div>
							<!-- Grid column -->
						</div>
						<!-- Grid row -->
						@endfor
						@endif
					</section>
					<!-- Section: Blog v.3 -->
					<a href="{{route('berita')}}">
						
					<button type="button" class="btn btn-deep-orange btn-rounded btn-sm ml-auto float-right">
					Lihat Lebih Banyak <i class="fa fa-arrow-right"></i>
					</button>
					</a>
				</div>
			</div>
			<hr class="mb-1 mt-3">
			<div class="row">
				<div class="col-md-12">
					
					
					<h1 class="text-center font-weight-bold dark-grey-text py-3">
					<strong>GALLERY</strong>
					</h1>
					<!-- Section: Blog v.3 -->
					<section class="pb-3 text-center text-lg-left">
						<!-- Grid row -->
						<hr class="mb-1">
						<div class="row">
						@if($countPhoto > 0)
						@for($i=0;$i<$countPhoto;$i++)
						@if($i==6)
						@break
						@endif
							<!-- Grid column -->
							<div class="col-lg-4 mb-4">
								<!-- Featured image -->
								<div class="view overlay z-depth-1">
									<a href="{{asset('img/album/'.$photo[$i]->album->judul.'/'.$photo[$i]->photo)}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4">
                                    <img alt="image" src="{{asset('img/album/'.$photo[$i]->album->judul.'/'.$photo[$i]->photo)}}"
                                        class="img-fluid">
										<div class="mask rgba-white-slight"></div>
                                    </a>
									
								</div>
							</div>
							<!-- Grid column -->
							<!-- Grid column -->
							
							<!-- Grid column -->
						<!-- Grid row -->
						@endfor
						@endif
						</div>
					</section>
					<!-- Section: Blog v.3 -->
					<a href="{{route('album')}}">
						
					<button type="button" class="btn btn-deep-orange btn-rounded btn-sm ml-auto float-right">
					Lihat Lebih Banyak <i class="fa fa-arrow-right"></i>
					</button>
					</a>
				</div>
			</div>
		</div>
		<!-- Main listing -->
		<!-- Sidebar -->
		@include('front.sidebar')
		<!-- Sidebar -->
	</div>
</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script>
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
event.preventDefault();
$(this).ekkoLightbox();
});
</script>
@endsection