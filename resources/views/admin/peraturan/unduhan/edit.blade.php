@extends('admin.template')
@section('css')
@endsection
@section('content')
<div class="section-header">
    <h1>Peraturan</h1>
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
                        <h4>Ubah Unduhan</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    <form role="form" action="{{route('admin.unduhan.update',$unduhan->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                            
                                {{-- nama --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group">
                                            <label for="nama" class="form-control-nama">Nama</label>
                                            <input type="text" name="nama" id="nama" placeholder="Nama Unduhan" class="form-control @error('nama') is-invalid @enderror" value="{{ $unduhan->nama }}">
                                            @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- nama --}}
                                {{-- filename --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group">
                                            <label for="filename" class="form-control-filename">File Unduhan</label>
                                            <input type="file" name="filename" id="filename" class="form-control @error('filename') is-invalid @enderror">
                                            @error('filename')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- filename --}}
                                
                            
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