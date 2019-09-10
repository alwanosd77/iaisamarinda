@extends('admin.template')
@section('css')
@endsection
@section('content')
<div class="section-header">
    <h1>Informasi Umum</h1>
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
                        <h4>Ubah Informasi Umum</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    <form role="form" action="{{route('admin.umum.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                {{-- about --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="about" class="form-control-label">About</label>
                                            <textarea name="about" id="about" class="form-control @error('about') is-invalid @enderror" rows="6" placeholder="kami adalah ...">{{ $umum[0]->about }}</textarea>
                                            @error('about')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- about --}}
                                {{-- alamat --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="alamat" class="form-control-label">Alamat</label>
                                            <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="6" placeholder="Jalan xxx">{{ $umum[0]->alamat }}</textarea>
                                            @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- alamat --}}
                                {{-- telp --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="telp" class="form-control-label">Nomor Telepon</label>
                                            <input type="text" name="telp" id="telp" placeholder="+62xxx" class="form-control @error('telp') is-invalid @enderror" value="{{ $umum[0]->telp }}">
                                            @error('telp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    {{-- telp --}}
                                    {{-- email --}}
                                    
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="email" class="form-control-label">Email</label>
                                            <input type="email" name="email" id="email" placeholder="admin@iaisamarinda.org" class="form-control @error('email') is-invalid @enderror" value="{{ $umum[0]->email }}">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- email --}}
                                {{-- facebook --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="facebook" class="form-control-label">URL Profil Facebook</label>
                                            <input type="text" name="facebook" id="facebook" placeholder="https://facebook.com/profile/xxx" class="form-control @error('facebook') is-invalid @enderror" value="{{ $umum[0]->facebook }}">
                                            @error('facebook')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    {{-- facebook --}}
                                    {{-- twitter --}}
                                    
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="twitter" class="form-control-label">URL Profil Twitter</label>
                                            <input type="text" name="twitter" id="twitter" placeholder="https://twitter.com/profile/xxx" class="form-control @error('twitter') is-invalid @enderror" value="{{ $umum[0]->twitter }}">
                                            @error('twitter')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- twitter --}}
                                {{-- instagram --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="instagram" class="form-control-label">URL Profil Instagram</label>
                                            <input type="text" name="instagram" id="instagram" placeholder="https://instagram.com/profile/xxx" class="form-control @error('instagram') is-invalid @enderror" value="{{ $umum[0]->instagram }}">
                                            @error('instagram')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    {{-- instagram --}}
                                    {{-- youtube --}}
                                    
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="youtube" class="form-control-label">URL Channel Youtube</label>
                                            <input type="text" name="youtube" id="youtube" placeholder="https://youtube.com/channel/xxx" class="form-control @error('youtube') is-invalid @enderror" value="{{ $umum[0]->youtube }}">
                                            @error('youtube')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- youtube --}}
                            </div>
                            <div class="col-md-4">
                                {{-- struktur --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="struktur" class="form-control-label">Struktur Organisasi</label>
                                            <br>
                                            <img src="{{asset('img/struktur/'.$umum[0]->struktur)}}" id="profile-img-tag" class="img-fluid" />
                                            <input type="file" name="struktur" id="struktur" class="form-control @error('struktur') is-invalid @enderror" value="{{ old('struktur') }}">
                                            @error('struktur')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- struktur --}}
                                
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
$("#struktur").change(function(){
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