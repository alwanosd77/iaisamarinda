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
					<strong>This is title of the news</strong>
					</h2>
					<hr class="orange title-hr">
					<div class="post-data mb-4">
						<p class="font-small dark-grey-text mb-1">
						<strong>Ditulis Oleh:</strong> Anna Doe</p>
						<p class="font-small grey-text">
						<i class="far fa-clock-o"></i> 15/09/2017 at 4:03 pm</p>
					</div>
					<img src="https://mdbootstrap.com/img/Photos/Slides/img (141).jpg" class="img-fluid z-depth-1 rounded"
					alt="sample image">
					<!-- Grid row -->
					
					<!-- Grid row -->
					<hr>
					<!-- Grid row -->
					<div class="row mx-md-4 px-4 mt-3">
						<p class="dark-grey-text article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
							eiusmod tempor incididunt
							ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
							ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
							in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
						cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<h4 class="font-weight-bold mt-3 mb-4">
						<strong>Lorem ipsum dolor sit amet</strong>
						</h4>
						<p class="dark-grey-text article">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
							accusantium doloremque laudantium,
							totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
							vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
							odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
						nesciunt. Neque porro quisquam est. </p>
						<blockquote class="blockquote">
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
							</p>
						</blockquote>
						<p class="dark-grey-text article"> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
							suscipit laboriosam,
							nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui
							in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum
						fugiat quo voluptas nulla pariatur?</p>
					</div>
					<!-- Grid row -->
					<!-- Grid row -->
					<div class="row mx-md-5 px-md-4 px-4 my-3">
						<!-- Grid column -->
						<div class="col-md-6">
							<img src="https://mdbootstrap.com/img/Photos/Others/square/3.jpg"
							class="img-fluid z-depth-1 rounded-0" alt="sample image">
						</div>
						<!-- Grid column -->
						<!-- Grid column -->
						<div class="col-md-6">
							<img src="https://mdbootstrap.com/img/Photos/Others/square/22.jpg"
							class="img-fluid z-depth-1 rounded-0" alt="sample image">
						</div>
						<!-- Grid column -->
					</div>
					<!-- Grid row -->
					<!-- Grid row -->
					<div class="row mx-md-4 px-md-4 px-4 mt-3">
						<p class="dark-grey-text article">Perspiciatis unde omnis iste natus error sit voluptatem accusantium
							doloremque laudantium,
							totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
							vitae dicta sunt explicabo. Ut enim ad minima veniam, quis nostrum exercitationem ullam
						corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
						<li class="dark-grey-text article list-unstyled">
							<strong>Nulla volutpat aliquam velit:</strong>
							<ul>
								<li>Phasellus iaculis neque</li>
								<li>Purus sodales ultricies</li>
								<li>Vestibulum laoreet porttitor sem</li>
								<li>Ac tristique libero volutpat at</li>
							</ul>
						</li>
					</div>
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
					<div class="card">
						<!-- Card image -->
						<div class="view overlay">
							<img src="https://mdbootstrap.com/img/Photos/Slides/img (134).jpg" class="card-img-top"
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
							<strong>Card title</strong>
							</h4>
							<hr>
							<!-- Text -->
							<p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of
								the card's
								content.
							</p>
							<p class="font-small font-weight-bold dark-grey-text mb-1">
							<i class="far fa-clock-o"></i> 27/08/2017</p>
							<p class="font-small grey-text mb-0">Anna Smith</p>
							<p class="text-right mb-0 font-small font-weight-bold">
								<a>read more
									<i class="fas fa-angle-right"></i>
								</a>
							</p>
						</div>
						<!-- Card content -->
					</div>
					<!-- Card -->
				</div>
				<!-- Grid column -->
				<!-- Grid column -->
				<div class="col-md-6 text-left mt-3">
					<!-- Card -->
					<div class="card">
						<!-- Card image -->
						<div class="view overlay">
							<img src="https://mdbootstrap.com/img/Photos/Slides/img (124).jpg" class="card-img-top"
							alt="sample image">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
						<!-- Card image -->
						<!-- Card content -->
						<div class="card-body">
							<!-- Title -->
							<h4 class="card-title">
							<strong>Card title</strong>
							</h4>
							<hr>
							<!-- Text -->
							<p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of
								the card's
								content.
							</p>
							<p class="font-small font-weight-bold dark-grey-text mb-1">
							<i class="far fa-clock-o"></i> 27/08/2017</p>
							<p class="font-small grey-text mb-0">Anna Smith</p>
							<p class="text-right mb-0 font-small font-weight-bold">
								<a>read more
									<i class="fas fa-angle-right"></i>
								</a>
							</p>
						</div>
						<!-- Card content -->
					</div>
					<!-- Card -->
				</div>
				<!-- Grid column -->
			</div>
			<!-- Grid row -->
			
			<!-- Pagination dark -->
			<nav>
				<ul class="pagination pg-dark flex-center pt-4">
					<!-- Arrow left -->
					<li class="page-item">
						<a class="page-link" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							<span class="sr-only">Previous</span>
						</a>
					</li>
					<!-- Numbers -->
					<li class="page-item active">
						<a class="page-link">1</a>
					</li>
					<li class="page-item">
						<a class="page-link">2</a>
					</li>
					<li class="page-item">
						<a class="page-link">3</a>
					</li>
					<li class="page-item">
						<a class="page-link">4</a>
					</li>
					<li class="page-item">
						<a class="page-link">5</a>
					</li>
					<!-- Arrow right -->
					<li class="page-item">
						<a class="page-link" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							<span class="sr-only">Next</span>
						</a>
					</li>
				</ul>
			</nav>
			<!-- Pagination dark grey -->
			
		</div>
		<!-- Main listing -->
		<!-- Sidebar -->
		@include('front.sidebar')
		<!-- Sidebar -->
	</div>
</div>
@endsection