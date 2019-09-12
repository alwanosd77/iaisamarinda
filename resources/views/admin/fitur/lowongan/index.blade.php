@extends('admin.template')
@section('content')
<div class="section-header">
    <h1>Lowongan</h1>
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
                        <h4>Lowongan</h4>
                    </div>
                    <div class="col-2">
                        <div class="section-header-button float-right">
                            <a href="{{route('admin.lowongan.create')}}" class="btn btn-primary">Add New</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    <div class="table-responsive">
                        <table class="table table-striped" id="table" width="100%">
                            <thead>
                                <tr>
                                    <th width="25%">Label</th>
                                    <th width="15%">Pemberi Kerja</th>
                                    <th width="15%">Uploader</th>
                                    <th width="15%">Created At</th>
                                    <th>Action</th>
                              </tr>
                            </thead>
                        </table>
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
    $('#table').DataTable({
        processing: true,
        serverSide: true,
        ajax:{
            url: "{{ route('admin.lowongan') }}",
        },
        columns:[
        {
            data:'judul',
            name:'judul',
        },
        {
            data:'pemberi_kerja',
            name:'pemberi_kerja',
        },
        {
            data:'uploader',
            name:'uploader',
        },
        {
            data:'created_at',
            name:'created_at',
        },
        {
            data:'action',
            name:'action',
            orderable: false
        },
        ]
    });
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
                url:"lowongan/delete/"+data_id,
                success:function(){
                  setTimeout(function(){
                    $('#table').DataTable().ajax.reload();
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