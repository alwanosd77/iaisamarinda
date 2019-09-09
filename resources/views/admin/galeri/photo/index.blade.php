@extends('admin.template')
@section('css')
<link rel="stylesheet" href="{{asset('css/album.css')}}">
@endsection
@section('content')
<div class="section-header">
    <h1>Photo</h1>
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
                        <h4>Photo</h4>
                    </div>
                    <div class="col-2">
                        <div class="section-header-button float-right">
                            <a href="{{route('admin.photo.create',$album->slug)}}" class="btn btn-primary">Add New</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    <div class="row">
                    @foreach($photo as $photos)
                        <div class="col-3 pt-2 mt-2">
              <div class="hovereffect">

                            <img src="{{asset('img/album/'.$album->judul.'/'.$photos->photo)}}" class="img-fluid" style="max-height: 100!important;">
                            <div class="overlay">
                  <a class="info" href="#"><button type="button" name="delete" id="{{$photos->id}}" class="delete btn btn-danger btn-lg m-auto"> <i class="fa fa-trash "></i></button></a>
                </div>
                          </div>
                        </div>
                    @endforeach
                    </div>
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
    
    var data_id;
    $(document).on('click','.delete', function(){
        data_id = $(this).attr('id');
        swal({
          title: "Anda Yakin ?",
          text: "Data Akan Dihapus Secara Permanen",
          icon: "warning",
          dangerMode :true,
          buttons: true,
          
        }).then(
          function(isConfirm){
            if (isConfirm) {
              $.ajax({
                url:"/epanel/photo/delete/"+data_id,
                success:function(){
                  setTimeout(function(){
                    location.reload();
                    },500);
                },
              });
          swal("Terhapus", "Data Telah Dihapus", "success");
          } else {
            swal("Cancelled", "Data Tidak Dihapus", "error");
            }
          });
    });

});
</script>
@endsection