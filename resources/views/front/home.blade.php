@extends('template')
@section('intro')
	@include('front.carousel')
@endsection
@section('main')
<div class="container mt-5 pt-3">
	<h1 class="text-center font-weight-bold dark-grey-text py-3">
	<strong>ABOUT US</strong>
	</h1>
	<p class="grey-text text-center mb-5 pb-3">
		<em>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
		rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae sit aspernatur
		aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi.</em>
	</p>
	<hr>
	<h1 class="text-center font-weight-bold dark-grey-text py-3">
	<strong>LOCATION</strong>
	</h1>
	<style>
	.google-maps {
	position: relative;
	padding-bottom: 75%; // This is the aspect ratio
	height: 0;
	overflow: hidden;
	}
	.google-maps iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100% !important;
	height: 100% !important;
	}
	</style>
	<div class="google-maps">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958.734475755284!2d117.14512376977537!3d-0.47081289999998155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f4a33efb165%3A0xcac4e725ad992ed9!2sFakultas%20Farmasi!5e0!3m2!1sen!2sid!4v1567280847943!5m2!1sen!2sid" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>
	<hr>
	<div class="row">
		<!-- Main listing -->
		<div class="col-lg-9 col-12 mt-1">
			<h1 class="text-center font-weight-bold dark-grey-text py-3">
			<strong>NEWS</strong>
			</h1>
			<!-- Section: Blog v.3 -->
			<section class="pb-3 text-center text-lg-left">
				<!-- Grid row -->
				<div class="row">
					<!-- Grid column -->
					<div class="col-lg-5 mb-4">
						<!-- Featured image -->
						<div class="view overlay z-depth-1">
							<img src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" class="img-fluid"
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
							<div class="col-xl-6 col-md-6 text-sm-center text-md-right text-lg-left">
								<p class="orange-text font-small font-weight-bold mb-1 spacing">
									<i class="fa fa-user"></i><strong>By Administrator</strong>
								</p>
							</div>
							<!-- Grid column -->
							<!-- Grid column -->
							<div class="col-xl-6 col-md-6 text-sm-center text-md-left">
								<p class="font-small grey-text">
									<em> July 22, 2017</em>
								</p>
							</div>
							<!-- Grid column -->
						</div>
						<!-- Grid row -->
						<h4 class="mb-3 dark-grey-text mt-0">
						<strong>
						<a>This is title of the news</a>
						</strong>
						</h4>
						<p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
							quo minus
							id vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
						</p>
						<!-- Deep-orange -->
						<button type="button" class="btn btn-deep-orange btn-rounded btn-sm">Read more</button>
					</div>
					<!-- Grid column -->
				</div>
				<!-- Grid row -->
				<hr class="mb-5">
				<!-- Grid row -->
				<div class="row">
					<!-- Grid column -->
					<div class="col-lg-5 mb-4">
						<!-- Featured image -->
						<div class="view overlay z-depth-1">
							<img src="https://mdbootstrap.com/img/Photos/Others/photo1.jpg" class="img-fluid"
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
							<div class="col-xl-6 col-md-6 text-sm-center text-md-right text-lg-left">
								<p class="orange-text font-small font-weight-bold mb-1 spacing">
									<i class="fa fa-user"></i><strong>By Administrator</strong>
								</p>
							</div>
							<!-- Grid column -->
							<!-- Grid column -->
							<div class="col-xl-6 col-md-6 text-sm-center text-md-left">
								<p class="font-small grey-text">
									<em> July 22, 2017</em>
								</p>
							</div>
							<!-- Grid column -->
						</div>
						<!-- Grid row -->
						<h4 class="mb-3 dark-grey-text mt-0">
						<strong>
						<a>This is title of the news</a>
						</strong>
						</h4>
						<p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
							quo minus
							id vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
						</p>
						<!-- Deep-orange -->
						<button type="button" class="btn btn-deep-orange btn-rounded btn-sm">Read more</button>
					</div>
					<!-- Grid column -->
				</div>
				<!-- Grid row -->
				<hr class="mb-5">
				<!-- Grid row -->
				<div class="row">
					<!-- Grid column -->
					<div class="col-lg-5 mb-4">
						<!-- Featured image -->
						<div class="view overlay z-depth-1">
							<img src="https://mdbootstrap.com/img/Photos/Others/photo4.jpg" class="img-fluid"
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
							<div class="col-xl-6 col-md-6 text-sm-center text-md-right text-lg-left">
								<p class="orange-text font-small font-weight-bold mb-1 spacing">
									<i class="fa fa-user"></i><strong>By Administrator</strong>
								</p>
							</div>
							<!-- Grid column -->
							<!-- Grid column -->
							<div class="col-xl-6 col-md-6 text-sm-center text-md-left">
								<p class="font-small grey-text">
									<em> July 22, 2017</em>
								</p>
							</div>
							<!-- Grid column -->
						</div>
						<!-- Grid row -->
						<h4 class="mb-3 dark-grey-text mt-0">
						<strong>
						<a>This is title of the news</a>
						</strong>
						</h4>
						<p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
							quo minus
							id vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
						</p>
						<!-- Deep-orange -->
						<button type="button" class="btn btn-deep-orange btn-rounded btn-sm">Read more</button>
					</div>
					<!-- Grid column -->
				</div>
				<!-- Grid row -->
				<hr class="mb-1">
			</section>
			<!-- Section: Blog v.3 -->
			<button type="button" class="btn btn-deep-orange btn-rounded btn-lg float-right">
			Lihat Lebih Banyak <i class="fa fa-arrow-right"></i>
			</button>
		</div>
		<!-- Main listing -->
		<!-- Sidebar -->
		@include('front.sidebar')
		<!-- Sidebar -->
	</div>
</div>

@endsection