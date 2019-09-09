@extends('admin.template')
@section('css')
@endsection
@section('content')
<div class="section-header">
    <h1>Slider</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Posts</a></div>
        <div class="breadcrumb-item">All Posts</div>
    </div>
</div>
<div class="section-body">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-10">
                        <h4>Tambah Slider</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    <form role="form" action="{{route('admin.slider.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                {{-- judul --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group">
                                            <label for="judul" class="form-control-label">Judul</label>
                                            <input type="text" name="judul" id="judul" placeholder="Judul Slider" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
                                            @error('judul')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- judul --}}
                                {{-- subjudul --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group">
                                            <label for="subjudul" class="form-control-label">Sub-Judul</label>
                                            <input type="text" name="subjudul" id="subjudul" placeholder="Sub-Judul Slider" class="form-control @error('subjudul') is-invalid @enderror" value="{{ old('subjudul') }}">
                                            @error('subjudul')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- subjudul --}}
                            </div>
                            <div class="col-md-4">
                                {{-- banner --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="banner" class="form-control-label">Banner Slider</label>
                                            <br>
                                            <img src="https://via.placeholder.com/1440x500" id="profile-img-tag" class="img-fluid" />
                                            <input type="file" name="banner" id="banner" class="form-control @error('banner') is-invalid @enderror" value="{{ old('banner') }}">
                                            @error('banner')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- banner --}}
                                
                            </div>
                            <div class="col-12">
                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('stisla/assets/js/page/features-posts.js')}}"></script>
<script>
$(document).ready(function(){

$("#banner").change(function(){
        readURL(this);
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
});
</script>
@endsection