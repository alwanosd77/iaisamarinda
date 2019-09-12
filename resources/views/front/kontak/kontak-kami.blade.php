@extends('template')
@section('intro')
  @include('front.carousel')
@endsection
@section('css')
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
@endsection
@section('main')
	<div class="container mt-5 pt-3">
		<div class="row">
			<div class="col-lg-9 col-12 mt-1">
				<section id="offer" class="mb-5">

        <!-- Section heading -->
        <div class="row">
        	<div class="col-md-12">
        <h2 class="h1-responsive font-weight-bold text-center">Kontak Kami</h2>
        <hr class="hr my-3">
        		
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-12">
        		<section id="contact" class="text-center my-5">

        <!-- Section heading -->
        <h3 class="text-center title my-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
          <strong>Contact us</strong>
        </h3>

        <!-- Section description -->
        <p class="grey-text w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet,
          consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
          esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.
        </p>

        <div class="row wow fadeIn" data-wow-delay="0.4s">

          <!-- Grid column -->
          <div class="col-md-12 col-lg-12">
            <form method="POST" action="{{route('kontak-kami.store')}}">
                @csrf
              <!-- Grid row -->
              <div class="row">
                <!-- Grid column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="form41" class="form-control" name="name">
                    <label for="form41" class="">Your name</label>
                  </div>
                </div>

                <!-- Grid column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="form52" class="form-control" name="email">
                    <label for="form52" class="">Your email</label>
                  </div>
                </div>
              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row">
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input type="text" id="form51" class="form-control" name="subject">
                    <label for="form51" class="">Subject</label>
                  </div>
                </div>
              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row">
                <!-- Grid column -->
                <div class="col-md-12">

                  <div class="md-form mb-0">
                    <textarea type="text" id="form76" class="md-textarea form-control" rows="3" name="message"></textarea>
                    <label for="form76">Your message</label>
                  </div>

                </div>
              </div>
              <!-- Grid row -->
            <div class="text-center text-md-left mb-5 mt-4">
              <button class="btn btn-rounded btn-orange font-weight-bold" type="submit">Send</button>
            </div>
            </form>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          
        </div>
      </section>
        	</div>
        </div>
       

        <!-- Grid row -->

      </section>
			</div>
			@include('front.sidebar')
		</div>
	</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    @include('sweet::alert')
@endsection