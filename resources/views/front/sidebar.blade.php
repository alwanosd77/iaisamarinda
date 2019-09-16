<div class="col-lg-3 col-12 px-4 blue-grey lighten-5">
  <hr>
  <p class="font-weight-bold dark-grey-text text-center spacing">
    <strong>AGENDA</strong>
  </p>
  <hr>
  <!-- Section: Recent posts -->
  <section class="section mb-5">
    @if($countAgenda > 0)
    @for($i=0;$i<$countAgenda;$i++)
    @if($i==3)
    @break
    @endif
    <div class="post-border">
      <!-- Grid row -->
      <div class="row mt-4">
        <!-- Second column -->
        <div class="col-12 mb-1">
          <!-- Post data -->
          <div class="">
            <p class="mb-1">
              <a href="{{route('agenda.show',$agenda[$i]->slug)}}" class="text-hover font-weight-bold black-text">{{$agenda[$i]->judul}}</a>
            </p>
            <p class="font-small grey-text">
              <em>{{$agenda[$i]->waktu->isoFormat('DD MMMM YYYY , hh:mm a')}}</em>
            </p>
          </div>
        </div>
        <!-- Second column -->
      </div>
      <!-- Grid row -->
    </div>
    @endfor
    @endif
  </section>
  <hr>
  <p class="font-weight-bold dark-grey-text text-center spacing">
    <strong>Artikel</strong>
  </p>
  <hr>
  <!-- Section: Recent posts -->
  <section class="section mb-5">
    @if($countArtikel > 0)
    @for($i=0;$i<$countArtikel;$i++)
    @if($i==3)
    @break
    @endif
    <div class="post-border">
      <!-- Grid row -->
      <div class="row mt-4">
        <!-- Second column -->
        <div class="col-12 mb-1">
          <!-- Post data -->
          <div class="">
            <p class="mb-1">
              <a href="{{route('artikel.show',$artikel[$i]->slug)}}" class="text-hover font-weight-bold black-text">{{$artikel[$i]->judul}}</a>
            </p>
            <p class="font-small grey-text">
              <em>{{$artikel[$i]->created_at->isoFormat('DD MMMM YYYY , hh:mm a')}}</em>
              <br>
              <em>Oleh <b>{{$artikel[$i]->penulis}}</b></em>
            </p>
          </div>
        </div>
        <!-- Second column -->
      </div>
      <!-- Grid row -->
    </div>
    @endfor
    @endif
  </section>
  <!-- Title -->
  <hr>
  <p class="font-weight-bold dark-grey-text text-center spacing">
    <strong>BERITA TERBARU</strong>
  </p>
  <hr>
  <section class="mb-5">
    <!-- Grid row -->
    <div class="row mt-4">
      <!-- Grid column -->
      <div class="col-md-12">
        <!-- Carousel Wrapper -->
        <div id="carousel-example-4" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            @for($i = 0; $i<$countBerita; $i++)
            @if($i==3)
            @break
            @endif
            <li data-target="#carousel-example-4" data-slide-to="{{$i}}" class="@if($i==0)active @endif"></li>
            @endfor
          </ol>
          <!-- Indicators -->
          <!-- Slides -->
          <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            @for($i = 0; $i<$countBerita; $i++)
            @if($i==3)
            @break
            @endif
            <div class="carousel-item @if($i==0)active @endif">
              <!-- Mask color -->
              <div class="view">
                <img src="{{asset('img/cover/berita/'.$berita[$i]->cover)}}" class="img-fluid" alt="">
                <a href="{{route('berita.show',$berita[$i]->slug)}}">
                  <div class="mask flex-center rgba-black-light"></div>
                </a>
              </div>
              <!-- Caption -->
              <div class="carousel-caption">
                <div class="animated fadeInDown">
                  <h4 class="h4-responsive">
                  <a href="{{route('berita.show',$berita[$i]->slug)}}" class="white-text font-weight-bold">{{$berita[$i]->judul}}</a>
                  </h4>
                </div>
              </div>
              <!-- Caption -->
            </div>
            @endfor
            <!-- First slide -->
            
          </div>
          <!-- Slides -->
          <!-- Controls -->
          <a class="carousel-control-prev" href="#carousel-example-4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example-4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!-- Controls -->
        </div>
        <!-- Carousel Wrapper -->
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </section>
  <!-- Section: Recent posts -->
  <!-- Section: Location -->
  <hr>
  <p class="font-weight-bold dark-grey-text text-center spacing">
    <strong>LOCATION</strong>
  </p>
  <hr>
  <section class="mb-5">
    <!-- Grid row -->
    <div class="row mt-4">
      <!-- Grid column -->
      <div class="col-md-12">
        <style>
        .google-maps {
        position: relative;
        padding-bottom: 75%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
        }
        .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
        }
        </style>
        <div class="google-maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31917.43320488488!2d117.12534667292213!3d-0.47855816327464595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df679e6769bd8d3%3A0xb6888ef6d63cc1d3!2sSekertariat%20Ikatan%20Apoteker%20Indonesia%20Pengurus%20Cabang%20Samarinda!5e0!3m2!1sen!2sid!4v1568230672784!5m2!1sen!2sid" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </section>
</div>