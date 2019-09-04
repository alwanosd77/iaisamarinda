@extends('admin.template')
@section('content')
<div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-user-lock"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Operator</h4>
                    </div>
                    <div class="card-body">
                        10
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
                        42
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
                        1,201
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
                        <h4>Galery</h4>
                    </div>
                    <div class="card-body">
                        47
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
                                <a href="#" class="btn btn-primary">View All</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-responsive table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th><i class="fas fa-signature    "></i> Title</th>
                                            <th><i class="fas fa-user-edit    "></i> Penulis</th>
                                            <th colspan="2" style="text-align:center;"><i class="fa fa-tasks" aria-hidden="true"></i> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Introduction Laravel 5
                                            </td>
                                            <td>
                                                <img
                                                        src="{{asset('stisla/assets/img/avatar/avatar-1.png')}}" alt="avatar"
                                                        width="30" class="rounded-circle mr-1"> Bagus Dwi
                                                    Cahya
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger btn-action" data-toggle="tooltip"
                                                    title="Delete"
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')"><i
                                                        class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Laravel 5 Tutorial - Installation
                                            </td>
                                            <td>
                                               <img
                                                        src="{{asset('stisla/assets/img/avatar/avatar-1.png')}}" alt="avatar"
                                                        width="30" class="rounded-circle mr-1"> Bagus Dwi
                                                    Cahya
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger btn-action" data-toggle="tooltip"
                                                    title="Delete"
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')"><i
                                                        class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
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
                                <a href="#" class="btn btn-primary">View All</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-responsive table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th><i class="fas fa-signature    "></i> Title</th>
                                            <th><i class="fas fa-user-edit    "></i> Penulis</th>
                                            <th colspan="2" style="text-align:center;"><i class="fa fa-tasks" aria-hidden="true"></i> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Introduction Laravel 5
                                            </td>
                                            <td>
                                                <img
                                                        src="{{asset('stisla/assets/img/avatar/avatar-1.png')}}" alt="avatar"
                                                        width="30" class="rounded-circle mr-1"> Bagus Dwi
                                                    Cahya
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger btn-action" data-toggle="tooltip"
                                                    title="Delete"
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')"><i
                                                        class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Laravel 5 Tutorial - Installation
                                            </td>
                                            <td>
                                               <img
                                                        src="{{asset('stisla/assets/img/avatar/avatar-1.png')}}" alt="avatar"
                                                        width="30" class="rounded-circle mr-1"> Bagus Dwi
                                                    Cahya
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger btn-action" data-toggle="tooltip"
                                                    title="Delete"
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')"><i
                                                        class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
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
                                    <a href="#" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-responsive table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th><i class="fas fa-signature    "></i> Title</th>
                                                <th><i class="fas fa-clock"></i> Time</th>
                                                <th colspan="2" style="text-align:center;"><i class="fa fa-tasks" aria-hidden="true"></i> Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Rapat Besar
                                                </td>
                                                <td>
                                                    Rabu, 17 January 2019    
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                        title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-action" data-toggle="tooltip"
                                                        title="Delete"
                                                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                        data-confirm-yes="alert('Deleted')"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Laravel 5 Tutorial - Installation
                                                </td>
                                                <td>
                                                   Kamis, 20 Desember 1999
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                        title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-action" data-toggle="tooltip"
                                                        title="Delete"
                                                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                        data-confirm-yes="alert('Deleted')"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-camera" aria-hidden="true"></i> Gallery</h4>
                        <div class="card-header-action">
                                <a href="#" class="btn btn-primary">View All</a>
                            </div>
                    </div>
                    <div class="card-body">
                        <div class="row pb-2">
                            <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                                <div class="avatar-item mb-0">
                                    <img alt="image" src="{{asset('stisla/assets/img/avatar/avatar-5.png')}}"
                                        class="img-fluid" data-toggle="tooltip" title="Alfa Zulkarnain">
                                    <div class="avatar-badge" title="Editor" data-toggle="tooltip"><i
                                            class="fas fa-wrench"></i></div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                                <div class="avatar-item mb-0">
                                    <img alt="image" src="{{asset('stisla/assets/img/avatar/avatar-4.png')}}"
                                        class="img-fluid" data-toggle="tooltip" title="Egi Ferdian">
                                    <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i
                                            class="fas fa-cog"></i></div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                                <div class="avatar-item mb-0">
                                    <img alt="image" src="{{asset('stisla/assets/img/avatar/avatar-1.png')}}"
                                        class="img-fluid" data-toggle="tooltip" title="Jaka Ramadhan">
                                    <div class="avatar-badge" title="Author" data-toggle="tooltip"><i
                                            class="fas fa-pencil-alt"></i></div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                                <div class="avatar-item mb-0">
                                    <img alt="image" src="{{asset('stisla/assets/img/avatar/avatar-2.png')}}"
                                        class="img-fluid" data-toggle="tooltip" title="Ryan">
                                    <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i
                                            class="fas fa-cog"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('js')
<script src="{{asset('stisla/assets/js/page/index-0.js')}}"></script>
    
@endsection