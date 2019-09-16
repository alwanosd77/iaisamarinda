@extends('template')
@section('intro')
  @include('front.carousel')
@endsection
@section('main')
	<div class="container mt-5 pt-3">
		<div class="row">
			<div class="col-lg-9 col-12 mt-1">
				<section id="offer" class="mb-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center">PERATURAN</h2>
        <hr class="hr my-3">
        @foreach($peraturan as $rules)
        <h3 class="h3-responsive font-weight-bold text-center">{{$rules->label}}</h3>
        <div class="table table-responsive">
        	<table width="100%">
        		<thead>
        			<tr>
        				<th>Nama File</th>
        				<th>Waktu Upload</th>
        				<th>Action</th>
        			</tr>
        		</thead>
        		<tbody>
        			@foreach($unduhan as $download)
        			<tr>
        				<th>{{$download->nama}}</th>
        				<th>{{$download->created_at->isoFormat('DD MMMM YYYY , hh:mm a')}}</th>
        				<th><a href="{{url('/download/'.$download->peraturan->label.'/'.$download->filename.'/'.$download->nama)}}" target="_blank"><button type="button" name="view" class="btn btn-success btn-sm m-auto"> <i class="fa fa-download"></i>Download</button>
                    </a></th>
        			</tr>
        			@endforeach
        		</tbody>
        	</table>
        </div>
       	<hr class="hr my-3">
       	@endforeach

        <!-- Grid row -->

      </section>
			</div>
			@include('front.sidebar')
		</div>
	</div>
@endsection