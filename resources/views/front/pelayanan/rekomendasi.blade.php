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
                        <h2 class="h1-responsive font-weight-bold text-center">Permohonan Rekomendasi Praktek Apoteker</h2>
                        <hr class="hr my-3">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        Berikut adalah kelengkapan berkas pengurusan rekomendasi SIPA. Mohon memeriksa kelengkapan sebelum mengumpulkan. Hanya Berkas lengkap yang akan diproses.
                        <ol>
                            <li>Foto Berwarna 3x4 3 Lembar</li>
                            <li>Fotokopi bukti pembayaran iuran anggota dan rekomendasi SIPA sebesar Rp 100.000,- (dibayarkan terpisah, keduanya ke rekening IAI PC Samarinda.</li>
                            <li>Fotokopi KTP/Surat Keterangan Domisili dan KTA/Surat Keterangan Keanggotaan yang mash berlaku</li>
                            <li>Fotokopi STRA dan Sertifikat Kompetensi yang masih berlaku (minimal 3 bulan sebelum berakhir)</li>
                            <li>Fotokopi Seluruh SIPA yang telah dimiliki dan masih berlaku</li>
                            <li>Surat Pernyataan Praktik Bertanggungjawab (SP2B) tidak akan melanggar kode etik, Pedoman Disiplin, dan PO(sesuai formulir PO dan 2 surat pernyataan tambahan dari PC Samarinda)</li>
                            <li>Surat Pernyataan Terkait Sarana/Prasarana/Permodalan (SPTSP2) yang terdiri dari :
                                <ul>
                                    <li>Daftar SIPA yang telah dimiliki</li>
                                    <li>Kepemilikan Modal Sendiri (Bagi pemohon pemilik sarana apotek) ATAU</li>
                                    <li>Izin / Kerjasama dengan penanggung jawab sarana (bagi pemohon bukan penanggung jawab saarana)</li>
                                    <li>Fotokopi Akte Notaris Perjanjian Kerjasama dengan pemilik Sarana (bagi APA dengan modal milik pihak lain/investor) atau WAARMARKING bagi apoteker selain APA (di tempat praktik manapun), berisi hak (termasuk jasa profesi) dan kewajiban serta kewenangan praktik</li>
                                </ul>
                            </li>
                            <li>Berita acara serah terima tanggung jawab (bagi pergantian APA)</li>
                            <li>Fotokopi IMB Apotek (hanya bagian yang mencantumkan nama, alamat sarana, serta status IMB) atau surat ijin operastional (bagi klinik, industri, dan PBF)</li>
                        </ol>
                        <br>
                        Keterangan :
                        <br>
                        APA = Apoteker Pemegang SIA
                        <br>
                        Download File :
                        <ul>
                            <li>
                                Formulir : <a href="">Download</a>                              
                            </li>
                            <li>
                                Surat Pernyataan PC IAI Samarinda : <a href="">Download</a>                            
                            </li>
                            <li>
                                Surat Pernyataan Profil Apotek : <a href="">Download</a>                              
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Grid row -->
            </section>
        </div>
        @include('front.sidebar')
    </div>
</div>
@endsection