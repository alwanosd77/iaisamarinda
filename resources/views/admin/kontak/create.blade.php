@extends('admin.template')

@section('css')
    <link rel="stylesheet" href="{{asset('summernote/dist/summernote-bs4.css')}}">
@endsection


@section('content')
<div class="section-header">
    <h1>Kontak</h1>
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
                        <h4>Tambah Kontak</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    <form role="form" action="{{route('admin.kontak.store')}}" method="POST">
                        @csrf
                        {{-- judul --}}
                        <div class="col-12">
                            <div class="form-group">
                                <label for="judul" class="form-control-label">Judul</label>
                                <input type="text" name="judul" id="judul" placeholder="Judul Halaman" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
                                @error('judul')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                        </div>
                        {{-- judul --}}
                        {{-- isi --}}
                        <div class="col-12">
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
                        {{-- isi --}}
                        <div class="col-12">
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
});  
</script>
@endsection