@extends('admin.template')
@section('css')
@endsection
@section('content')
<div class="section-header">
    <h1>Operator</h1>
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
                        <h4>Ubah Operator</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    <form role="form" action="{{route('admin.operator.update',$operator->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                {{-- name --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="name" class="form-control-label">Nama Operator</label>
                                            <input type="text" name="name" id="name" placeholder="Name Operator" class="form-control @error('name') is-invalid @enderror" value="{{ $operator->name }}">
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="username" class="form-control-label">Username Operator</label>
                                            <input type="text" name="username" id="username" placeholder="Username untuk Login" class="form-control @error('username') is-invalid @enderror" value="{{ $operator->username }}">
                                            @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- name --}}
                                {{-- password --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="password" class="form-control-label">Password</label>
                                            <input type="password" name="password" id="password" placeholder="Masukkan Password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="new-password">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="password_confirmation" class="form-control-label">Konfirmasi Password</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Ulangi Password" class="form-control @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" required autocomplete="new-password_confirmation">
                                            @error('password_confirmation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- password --}}
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