@extends('admin.template')
@section('css')
@endsection
@section('content')
<div class="section-header">
    <h1>Album</h1>
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
                        <h4>Ubah Album</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    <form role="form" action="{{route('admin.album.update',$album->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                            
                                {{-- judul --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group">
                                            <label for="judul" class="form-control-label">Judul</label>
                                            <input type="text" name="judul" id="judul" placeholder="Judul Album" class="form-control @error('judul') is-invalid @enderror" value="{{ $album->judul }}">
                                            @error('judul')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- judul --}}
                                
                            
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
<script>
</script>
@endsection