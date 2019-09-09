@extends('admin.template')
@section('css')
<meta name="_token" content="{{csrf_token()}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
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
                        <h4>Tambah Album</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    <div class="row">
                        <div class="col-12">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            
                            
                            <form action="{{route('admin.photo.store',$Album->id)}}" method="POST" enctype="multipart/form-data" class="dropzone" id="dropzone">
                                @csrf
                            </form>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-12">
                            <div class="float-right">
                                <a href="{{url()->previous()}}">
                                    <button type="submit" class="btn btn-primary">Selesai</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('stisla/assets/js/page/features-posts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript">
                    Dropzone.options.dropzone =
                    {
                    maxFilesize: 12,
                    renameFile: function (file) {
                    var dt = new Date();
                    var time = dt.getTime();

                    return time + file.name;
                        },
                    acceptedFiles: ".jpeg,.jpg,.png,.gif",
                    addRemoveLinks: true,
                    timeout: 50000,
                    removedfile: function (file) {
                    var name = file.upload.filename;
                    var a = "<?php echo $Album->judul ?>";
                    $.ajax({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ url('epanel/foto/hapus') }}',
                    data: {filename: name, folder:a},
                    success: function (data) {
                    console.log("File has been successfully removed!!");
                    },
                    error: function (e) {
                    console.log(e);
                    }
                    });
                    var fileRef;
                    return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
                    },
                    success: function (file, response) {
                    console.log(response);
                    },
                    error: function (file, response) {
                    return false;
                    }
                    };
                    </script>
<script>
</script>
@endsection