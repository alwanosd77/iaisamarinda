@extends('admin.template')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
@endsection
@section('content')
<div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Artikel</h4>
                    </div>
                    <div class="card-body">
                        {{$countArtikel}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Berita</h4>
                    </div>
                    <div class="card-body">
                        {{$countBerita}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-calendar" aria-hidden="true"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Agenda</h4>
                    </div>
                    <div class="card-body">
                        {{$countAgenda}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-camera" aria-hidden="true"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Album</h4>
                    </div>
                    <div class="card-body">
                        {{$countAlbum}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                <div class="card">
                        <div class="card-header">
                            <h4><i class="fa fa-newspaper" aria-hidden="true"></i> Latest News</h4>
                            <div class="card-header-action">
                                <a href="{{route('admin.berita')}}" class="btn btn-primary">View All</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th><i class="fas fa-signature    "></i> Judul</th>
                                            <th><i class="fas fa-user-edit    "></i> Uploader</th>
                                            <th><i class="fas fa-clock" aria-hidden="true"></i> Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if($countBerita > 0)
                                            @for($i=0;$i<$countBerita;$i++)
                                                @if($i==3)
                                                    @break
                                                @endif
                                        <tr>
                                            <td>
                                                {{$berita[$i]->judul}}
                                            </td>
                                            <td>
                                                {{$berita[$i]->user->name}}
                                            </td>
                                            <td>
                                                {{$berita[$i]->created_at->isoFormat('DD MMMM YYYY , hh:mm a')}}
                                            </td>
                                        </tr>
                                            @endfor
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                <div class="card">
                        <div class="card-header">
                            <h4><i class="fa fa-newspaper" aria-hidden="true"></i> Latest Article</h4>
                            <div class="card-header-action">
                                <a href="{{route('admin.artikel')}}" class="btn btn-primary">View All</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th><i class="fas fa-signature    "></i> Judul</th>
                                            <th><i class="fas fa-user-edit    "></i> Penulis</th>
                                            <th><i class="fas fa-clock" aria-hidden="true"></i> Waktu Publish</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($countArtikel > 0)
                                            @for($i=0;$i<$countArtikel;$i++)
                                                @if($i==3)
                                                    @break
                                                @endif
                                        <tr>
                                            <td>
                                                {{$artikel[$i]->judul}}
                                            </td>
                                            <td>
                                                {{$artikel[$i]->penulis}}
                                            </td>
                                            <td>
                                                {{$artikel[$i]->created_at->isoFormat('DD MMMM YYYY , hh:mm a')}}
                                            </td>
                                        </tr>
                                            @endfor
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="card">
                            <div class="card-header">
                                <h4><i class="fa fa-calendar" aria-hidden="true"></i> Latest Agenda</h4>
                                <div class="card-header-action">
                                    <a href="{{route('admin.agenda')}}" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th><i class="fas fa-signature    "></i> Judul</th>
                                                <th><i class="fas fa-user-md    "></i> Tamu</th>
                                                <th><i class="fas fa-map-marker-alt    "></i> Lokasi</th>
                                                <th><i class="fas fa-clock"></i> Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($countAgenda > 0)
                                            @for($i=0;$i<$countAgenda;$i++)
                                                @if($i==3)
                                                    @break
                                                @endif
                                        <tr>
                                            <td>
                                                {{$agenda[$i]->judul}}
                                            </td>
                                            <td>
                                                {{$agenda[$i]->tamu}}
                                            </td>
                                            <td>
                                                {{$agenda[$i]->lokasi}}
                                            </td>
                                            <td>
                                                {{$agenda[$i]->created_at->isoFormat('DD MMMM YYYY , hh:mm a')}}
                                            </td>
                                        </tr>
                                            @endfor
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-images" aria-hidden="true"></i> Gallery</h4>
                        <div class="card-header-action">
                                <a href="{{route('admin.album')}}" class="btn btn-primary">View All</a>
                            </div>
                    </div>
                    <div class="card-body">
                        <div class="row pb-2">
                            @if($countPhoto > 0)
                            @for($i=0;$i<$countPhoto;$i++)
                            @if($i==4)
                            @break
                            @endif
                            <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                                <div class=" mb-0">
                                    <a href="{{asset('img/album/'.$photo[$i]->album->judul.'/'.$photo[$i]->photo)}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-3">
                                    <img alt="image" src="{{asset('img/album/'.$photo[$i]->album->judul.'/'.$photo[$i]->photo)}}"
                                        class="img-fluid">
                                    </a>
                                </div>
                            </div>
                           @endfor
                        @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('js')
<script src="{{asset('stisla/assets/js/page/index-0.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>
@endsection