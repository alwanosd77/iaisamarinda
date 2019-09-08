@extends('admin.template')
@section('css')
<link rel="stylesheet" href="{{asset('summernote/dist/summernote-bs4.css')}}">
@endsection
@section('content')
<div class="section-header">
    <h1>Artikel</h1>
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
                        <h4>Tambah Artikel</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    <form role="form" action="{{route('admin.artikel.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                {{-- judul --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group">
                                            <label for="judul" class="form-control-label">Judul</label>
                                            <input type="text" name="judul" id="judul" placeholder="Judul Artikel" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
                                            @error('judul')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- judul --}}
                                {{-- isi --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group">
                                            <label for="isi" class="form-control-label">Isi</label>
                                            <textarea name="isi" id="isi" class="form-control @error('isi') is-invalid @enderror" rows="3">{{ old('isi') }}</textarea>
                                            @error('isi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- isi --}}
                            </div>
                            <div class="col-md-4">
                                {{-- cover --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cover" class="form-control-label">Cover Artikel</label>
                                            <br>
                                            <img src="https://via.placeholder.com/2040x710" id="profile-img-tag" class="img-fluid" />
                                            <input type="file" name="cover" id="cover" class="form-control @error('cover') is-invalid @enderror" value="{{ old('cover') }}">
                                            @error('cover')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- cover --}}
                                {{-- penulis --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="penulis" class="form-control-label">Penulis</label>
                                            <input type="text" name="penulis" id="penulis" placeholder="penulis" class="form-control @error('penulis') is-invalid @enderror" value="{{ old('penulis') }}">
                                            @error('penulis')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- penulis --}}
                                {{-- draft --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="is_draft" class="form-control-label">Status
                                            </label>
                                            <div class="selectgroup w-100">
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="is_draft" value="0" class="selectgroup-input" checked><span class="selectgroup-button">
                                                        Terbitkan                                                     
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="selectgroup w-100">
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="is_draft" value="1" class="selectgroup-input"><span class="selectgroup-button">
                                                        Draft                                                     
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- draft --}}
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
<script src="{{asset('summernote/dist/summernote-bs4.min.js')}}"></script>
<script>
$(document).ready(function(){
$('#isi').summernote({
height: 250,
});
$("#cover").change(function(){
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