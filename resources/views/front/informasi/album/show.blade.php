@extends('template')
@section('intro')
@include('front.carousel')
@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
@endsection
@section('main')
<div class="container mt-5 pt-3">
	<div class="row">
		<!-- Main listing -->
		<div class="col-lg-9 col-12 mt-1">
			<div class="row mt-2 mb-5 pb-3 mx-2">
				<!-- Card -->
				@foreach($photo as $foto)
				<div class="col-lg-4 mb-4">
					<!-- Featured image -->
					<div class="view overlay z-depth-1">
						<a href="{{asset('img/album/'.$foto->album->judul.'/'.$foto->photo)}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4">
							<img alt="image" src="{{asset('img/album/'.$foto->album->judul.'/'.$foto->photo)}}"
							class="img-fluid">
							<div class="mask rgba-white-slight"></div>
						</a>
						
					</div>
				</div>
				@endforeach
			</div>
			{{$photo->links()}}
			
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