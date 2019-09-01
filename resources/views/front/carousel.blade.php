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
      <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-half" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-1z" data-slide-to="1"></li>
          <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!-- Indicators -->
        <!-- Slides -->
        <div class="carousel-inner" role="listbox">
          <!-- First slide -->
          <div class="carousel-item active">
            <div class="view h-100">
              <img class="d-block h-100 w-lg-100" src="{{asset('img/slider/banner1.jpg')}}" width="100%" 
                alt="First slide">
              <div class="mask rgba-indigo-light">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                  <ul class="animated fadeIn col-10 list-unstyled">
                    <li>
                      <h1 class="h1-responsive font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      </h1>
                    </li>
                    <li>
                      <p>Tempora incidunt ut labore et dolore veritatis et quasi architecto beatae</p>
                    </li>

                  </ul>
                </div>
                <!-- Caption -->
              </div>
            </div>
          </div>
          <!-- First slide -->
          <!-- Second slide -->
          <div class="carousel-item h-100">
            <div class="view h-100">
              <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/city10.jpg" width="100%"
                alt="Second slide">
              <div class="mask rgba-stylish-light">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                  <ul class="animated fadeIn col-10 list-unstyled">
                    <li>
                      <h1 class="h1-responsive font-weight-bold">Nemo enim ipsam voluptatem quia voluptas sit </h1>
                    </li>
                    <li>
                      <p>Nemo enim ipsamvoluptatem quia veritatis et quasi architecto beatae</p>
                    </li>
                  </ul>
                </div>
                <!-- Caption -->
              </div>
            </div>
          </div>
          <!-- Second slide -->
          <!-- Third slide -->
          <div class="carousel-item">
            <div class="view h-100">
              <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/city12.jpg" width="100%"
                alt="Third slide">
              <div class="mask rgba-black-light">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                  <ul class="animated fadeIn col-10 list-unstyled">
                    <li>
                      <h1 class="h1-responsive font-weight-bold">Sed ut perspiciatis unde omnis iste natus sit
                        voluptatem</h1>
                    </li>
                    <li>
                      <p>Unde omnis iste natus sit voluptatem veritatis et quasi architecto beatae</p>
                    </li>
                  </ul>
                </div>
                <!-- Caption -->
              </div>
            </div>
          </div>
          <!-- Third slide -->
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
      <!-- Carousel Wrapper -->