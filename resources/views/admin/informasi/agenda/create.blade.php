@extends('admin.template')
@section('css')
<link rel="stylesheet" href="{{asset('summernote/dist/summernote-bs4.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
@endsection
@section('content')
<div class="section-header">
    <h1>Agenda</h1>
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
                        <h4>Tambah Agenda</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    <form role="form" action="{{route('admin.agenda.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                {{-- judul --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group">
                                            <label for="judul" class="form-control-label">Judul</label>
                                            <input type="text" name="judul" id="judul" placeholder="Judul Agenda" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
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
                                {{-- waktu --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="waktu" class="form-control-label">Waktu Agenda</label>
                                            <div style="overflow: hidden;">
                                                <input type="hidden" name="waktu" id="waktu">
                                            </div>
                                            @error('waktu')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- waktu --}}
                                {{-- lokasi --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="lokasi" class="form-control-label">Lokasi</label>
                                            <input type="text" name="lokasi" id="lokasi" placeholder="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi') }}">
                                            @error('lokasi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- lokasi --}}
                                {{-- tamu --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tamu" class="form-control-label">Tamu</label>
                                            <input type="text" name="tamu" id="tamu" placeholder="tamu" class="form-control @error('tamu') is-invalid @enderror" value="{{ old('tamu') }}">
                                            @error('tamu')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- tamu --}}
                                
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
<script>
$(document).ready(function(){
$('#isi').summernote({
height: 250,
});
$.fn.datetimepicker.Constructor.Default = $.extend({}, $.fn.datetimepicker.Constructor.Default, {
            icons: {
                time: 'far fa-clock',
                date: 'far fa-calendar',
                up: 'fa fa-arrow-up',
                down: 'fa fa-arrow-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'far fa-calendar-check-o',
                clear: 'far fa-trash',
                close: 'far fa-times'
            } });
$('#waktu').datetimepicker({
inline: true,
format : "Y/MM/DD hh:mm",
});
});
</script>
@endsection