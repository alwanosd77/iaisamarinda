@extends('template')
@section('intro')
@include('front.carousel')
@endsection
@section('main')
<div class="container mt-5 pt-3">
    <div class="row">
        <div class="col-lg-9 col-12 mt-1">
            <section id="offer" class="mb-5">
                <!-- Section heading -->
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="h1-responsive font-weight-bold text-center">Permohonan Mutasi</h2>
                        <hr class="hr my-3">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <STRONG>A. MUTASI ANTAR PROVINSI</STRONG>
                        <br>
                        Pemohon mengajukan permohonan ke Pengurus Daerah melalui Pengurus Cabang Setempat dengan mengisi <a href="">Formulir Mutasi</a> dan melampirkan:
                        <ol>
                            <li>Fotokopi KTA/SKK yang masih berlaku, fotokopi bukti pembayaran iuran anggota, Foto berwarna 3x4 3 Lembar</li>
                            <li>Fotokopi KTP yang masih berlaku</li>
                            <li>Surat Keterangan Tidak Berpraktik/bekerja lagi di tempat praktik/kerja sebelumnya</li>
                            <li>Borang Resertifikasi masa kompetensi tahun berjalan yang sudah diverifikasi oleh tim resertifikasi</li>
                        </ol>
                        <hr>
                        <STRONG>B. MUTASI ANTAR KABUPATEN / KOTA DALAM SATU PROVINSI</STRONG>
                        <br>
                        Pemohon mengajukan permohonan ke Pengurus Cabang Setempat dengan mengisi <a href="">Formulir Mutasi</a> dan melampirkan:
                        <ol>
                            <li>Fotokopi KTA yang masih berlaku, fotokopi bukti pembayaran iuran anggota, Foto berwarna 3x4 3 Lembar</li>
                            <li>Fotokopi KTP yang masih berlaku</li>
                            <li>Surat Keterangan Tidak Berpraktik/bekerja lagi di tempat praktik/kerja sebelumnya</li>
                            <li>Borang Resertifikasi masa kompetensi tahun berjalan yang sudah diverifikasi oleh tim resertifikasi</li>
                        </ol> 
                    </div>
                </div>
                
                <!-- Grid row -->
            </section>
        </div>
        @include('front.sidebar')
    </div>
</div>
@endsection