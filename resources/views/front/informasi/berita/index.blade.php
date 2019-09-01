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
			<strong>LATEST NEWS</strong>
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
			
		</div>
		<!-- Main listing -->
		<!-- Sidebar -->
		@include('front.sidebar')
		<!-- Sidebar -->
	</div>
</div>

@endsection