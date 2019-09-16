<style>
  .carousel.carousel-half {
  height: 75vh; 
  
}

.carousel.carousel-half .carousel-inner {
    height: 100%; 
    
  }
.carousel.carousel-half .carousel-inner .carousel-item.active {
      height: 100%;
     
    }

</style>
    <div style="background-image: url({{asset('img/slider/wrapper.jpg')}});">
    
    <div class="container">
    
      <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-half" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          @for($i = 0; $i<$countSlider; $i++)
          <li data-target="#carousel-example-1z" data-slide-to="{{$i}}" class="@if($i==0)active @endif"></li>
          @endfor
        </ol>
        <!-- Indicators -->
        <!-- Slides -->
        <div class="carousel-inner" role="listbox">
          <!-- First slide -->
          @for($i = 0; $i<$countSlider; $i++)
          <div class="carousel-item @if($i==0)active @endif">
            <div class="view h-100">
              <img class="d-block h-100 w-lg-100" src="{{asset('img/slider/'.$slider[$i]->banner)}}" width="100%" 
                alt="First slide">
              <div class="mask rgba-indigo-light">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                  <ul class="animated fadeIn col-10 list-unstyled">
                    <li>
                      <h1 class="h1-responsive font-weight-bold">{{$slider[$i]->judul}}
                      </h1>
                    </li>
                    <li>
                      <p>{{$slider[$i]->subjudul}}</p>
                    </li>

                  </ul>
                </div>
                <!-- Caption -->
              </div>
            </div>
          </div>
          @endfor
          <!-- First slide -->
          
        </div>
        <!-- Slides -->
        <!-- Controls -->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!-- Controls -->
      </div>
</div>
</div>

      <!-- Carousel Wrapper -->