@extends('admin.template')
@section('css')
@endsection
@section('content')
<div class="section-header">
    <h1>Tautan</h1>
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
                        <h4>Ubah Tautan</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    <form role="form" action="{{route('admin.link.update',$link->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                {{-- label --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group">
                                            <label for="label" class="form-control-label">Label</label>
                                            <input type="text" name="label" id="label" placeholder="Label Tautan" class="form-control @error('label') is-invalid @enderror" value="{{ $link->label }}">
                                            @error('label')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- label --}}
                                {{-- URL --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group">
                                            <label for="url" class="form-control-label">URL</label>
                                            <input type="text" name="url" id="url" placeholder="Contoh : https://iaisamarinda.org" class="form-control @error('url') is-invalid @enderror" value="{{ $link->url }}">
                                            @error('url')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- URL --}}
                            </div>
                            <div class="col-md-4">
                                {{-- banner --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="banner" class="form-control-label">Banner Tautan</label>
                                            <br>
                                            <img src="{{asset('img/tautan/'.$link->banner)}}" id="profile-img-tag" class="img-fluid" />
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