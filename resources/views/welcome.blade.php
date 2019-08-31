<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('mdb/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('mdb/css/mdb.min.css')}}" rel="stylesheet">
  <style>
    /* Necessary for full page carousel*/
    html,
    body,
    header,
    .view {
      height: 100%;
    }
    @media (min-width: 451px) and (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 500px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 550px;
      }
    }

    /* Carousel*/
    .carousel,
    .carousel-item,
    .carousel-item.active {
      height: 100%;
    }

    .carousel-inner {
      height: 100%;
    }

    .carousel-item:nth-child(1) {
      background-image: url("https://mdbootstrap.com/img/Photos/Others/images/92.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    .carousel-item:nth-child(2) {
      background-image: url("https://mdbootstrap.com/img/Photos/Others/images/89.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    .carousel-item:nth-child(3) {
      background-image: url("https://mdbootstrap.com/img/Photos/Others/images/90.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }
  </style>
</head>

<body>

  <!-- Navigation & Intro -->
  <header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar white">
      <div class="container">
        <a class="navbar-brand" href="">
          <img src="{{asset('mdb/img/iai.png')}}" alt="logo" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="list-unstyled navbar-nav mr-auto">
            <li class="nav-item dropdown ml-4 mb-0">
              <a class="nav-link dropdown-toggle title" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"> Homepage </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="../home/home-parallax.html">Home Parallax</a>
                <a class="dropdown-item" href="../home/home-slider.html">Home Slider</a>
                <a class="dropdown-item" href="../home/home-video-background.html">Home Video Background</a>
                <a class="dropdown-item" href="../home/home-gradient.html">Home Gradient</a>
                <a class="dropdown-item" href="../home/home-gradient-animation.html">Home Gradient Animation</a>
                <a class="dropdown-item" href="../home/home-video.html">Home Video</a>
                <a class="dropdown-item" href="../home/home-onepage.html">One Page Layout</a>
                <a class="dropdown-item" href="../home/coming-soon.html">Coming Soon</a>
              </div>
            </li>
            <li class="nav-item dropdown ml-4">
              <a class="nav-link dropdown-toggle title" id="navbarDropdownMenuLink12" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Features </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="../features/features.html">Features</a>
                <a class="dropdown-item" href="../features/feature-detail.html">Feature Detail</a>
                <a class="dropdown-item" href="../features/services.html">Services</a>
                <a class="dropdown-item" href="../features/typography.html">Typography</a>
              </div>
            </li>
            <li class="nav-item ml-4">
              <a class="nav-link title" href="../pricing/pricing.html" data-offset="90">Pricing</a>
            </li>
            <li class="nav-item dropdown ml-4">
              <a class="nav-link dropdown-toggle title" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Pages </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="../pages/about.html">About us</a>
                <a class="dropdown-item" href="../pages/testimonials.html">Testimonials</a>
                <a class="dropdown-item" href="../pages/contact.html">Contact</a>
                <a class="dropdown-item" href="../pages/register.html">Register</a>
                <a class="dropdown-item" href="../pages/login.html">Login</a>
                <a class="dropdown-item" href="../pages/gallery.html">Gallery</a>
                <a class="dropdown-item" href="../pages/faq.html">FAQ</a>
                <a class="dropdown-item" href="../pages/404.html">Error 404</a>
              </div>
            </li>
            <li class="nav-item dropdown ml-4">
              <a class="nav-link dropdown-toggle title" id="navbarDropdownMenuLink3" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Blog </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="../blog/blog-standard.html">Blog Standard</a>
                <a class="dropdown-item" href="../blog/blog-3columns.html">Blog 3 Columns</a>
                <a class="dropdown-item" href="../blog/blog-post.html">Blog Post</a>
              </div>
            </li>
          </ul>
          <!-- Social Icon  -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-facebook-f title"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-twitter title"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-instagram title"></i>
              </a>
            </li>
            <li class="nav-item ml-3">
              <a class="btn pink-gradient btn-rounded btn-sm font-weight-bold" href="#contact" data-offset="90">Free
                trial</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Carousel Wrapper -->
    <div id="carousel-example-3" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-3" data-slide-to="1"></li>
        <li data-target="#carousel-example-3" data-slide-to="2"></li>
      </ol>
      <!-- Indicators -->

      <!-- Slides -->
      <div class="carousel-inner" role="listbox">

        <!-- First slide -->
        <div class="carousel-item active">
          <!-- Mask -->
          <div class="view">
            <div
              class="h-100 d-flex justify-content-center align-items-center mask rgba-black-light white-text text-center">
              <ul class="list-unstyled animated fadeInUp col-md-12">
                <li>
                  <h1 class="display-4 font-weight-bold wow fadeIn" data-wow-delay="0.3s">Clean Modern Layout For Your
                    Web</h1>
                  <hr class="hr-light wow fadeIn w-50" data-wow-delay="0.3s">
                </li>
                <li>
                  <h3 class="my-4 wow fadeIn" data-wow-delay="0.3s">quasi fuga
                    nesciunt dolorum nulla magnam veniam sapiente, fugiat!</h3>
                </li>
                <li>
                  <a class="btn pink-gradient btn-rounded btn-lg font-weight-bold wow fadeIn" data-wow-delay="0.3s">Get
                    started</a>
                  <a class="btn btn-white btn-rounded btn-lg orange-text font-weight-bold ml-lg-0 wow fadeIn"
                    data-wow-delay="0.3s"><i class="fas fa-play-circle orange-text mr-2" aria-hidden="true"></i> Watch
                    demo</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Mask -->
        </div>
        <!-- First slide -->

        <!-- Second slide -->
        <div class="carousel-item">
          <!-- Mask -->
          <div class="view">
            <div
              class="h-100 d-flex justify-content-center align-items-center mask rgba-indigo-strong white-text text-center">
              <ul class="list-unstyled animated fadeInUp col-md-12">
                <li>
                  <h1 class="display-4 font-weight-bold">Lots of tutorials at your disposal</h1>
                </li>
                <li>
                  <h3 class="my-4">And all of them are FREE!</h3>
                </li>
                <li>
                  <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/"
                    class="btn pink-gradient btn-rounded btn-lg" rel="nofollow">Start learning</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Mask -->
        </div>
        <!-- Second slide -->

        <!-- Third slide -->
        <div class="carousel-item">
          <!-- Mask -->
          <div class="view">
            <div
              class="h-100 d-flex justify-content-center align-items-center mask rgba-black-light white-text text-center">
              <ul class="list-unstyled animated fadeInUp col-md-12">
                <li>
                  <h1 class="display-4 font-weight-bold">Visit our support forum</h1>
                </li>
                <li>
                  <h3 class="my-4">Our community can help you with any question</h3>
                </li>
                <li>
                  <a target="_blank" href="https://mdbootstrap.com/forums/forum/support/"
                    class="btn pink-gradient btn-rounded btn-lg" rel="nofollow">Support forum</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Mask -->
        </div>
        <!-- Third slide -->

      </div>
      <!-- Slides -->

      <!-- Controls -->
      <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!-- Controls -->
    </div>
    <!-- Carousel Wrapper -->

  </header>
  <!-- Navigation & Intro -->

  <!-- Main content -->
  <main>

    <div class="container">

      <!-- Section: Features v.4 -->
      <section id="features" class="text-center my-5">

        <!-- Section heading -->
        <h2 class="title font-weight-bold my-5 wow fadeIn" data-wow-delay="0.2s">
          <strong>Awesome features</strong>
        </h2>

        <!-- Section description -->
        <p class="grey-text w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum
          dolores reiciendis
          ad voluptas, animi obcaecati adipisci sapiente mollitia.</p>

        <!-- Grid row -->
        <div class="row wow fadeIn" data-wow-delay="0.2s">

          <!-- Grid column -->
          <div class="col-lg-4 text-center">
            <div class="icon-area">
              <div class="circle-icon">
                <i class="fas fa-cogs blue-text"></i>
              </div>
              <br>
              <h5 class="dark-grey-text font-weight-bold mt-2">Customization</h5>
              <div class="mt-1">
                <p class="mx-3 grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem
                  ipsum dolor sit
                  amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 text-center">
            <div class="icon-area">
              <div class="circle-icon">
                <i class="fas fa-book blue-text"></i>
              </div>
              <br>
              <h5 class="dark-grey-text font-weight-bold mt-2">Easy tutorials</h5>
              <div class="mt-1">
                <p class="mx-3 grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem
                  ipsum dolor sit
                  amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 text-center mb-4">
            <div class="icon-area">
              <div class="circle-icon">
                <i class="fas fa-users blue-text"></i>
              </div>
              <br>
              <h5 class="dark-grey-text font-weight-bold mt-2">Free support</h5>
              <div class="mt-1">
                <p class="mx-3 grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem
                  ipsum dolor sit
                  amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Features v.4 -->

      <hr>

      <!-- Section: About 1 -->
      <section id="about" class="mt-5 mb-5 py-3 wow fadeIn" data-wow-delay="0.2s">

        <!-- Grid row -->
        <div class="row pt-2 mt-lg-5">

          <!-- Grid column -->
          <div class="col-lg-6 col-md-12 mb-3 wow fadeIn" data-wow-delay="0.4s">
            <!-- Image -->
            <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/macbook.png" class="img-fluid rounded" alt="My photo">
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-6 ml-auto col-md-12 wow fadeIn" data-wow-delay="0.4s">

            <!-- Secion heading -->
            <h2 class="mb-5 title font-weight-bold wow fadeIn" data-wow-delay="0.2s">
              <strong>Build your brand with us</strong>
            </h2>

            <!-- Description -->
            <p align="justify" class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi
              soluta ratione quisquam, dicta
              ab cupiditate iure eaque? Repellendus voluptatum, magni impedit delectus, beatae maxime temporibus
              maiores quibusdam.</p>
            <p class="grey-text">
              <i class="fas fa-long-arrow-alt-right orange-text mr-2" aria-hidden="true"></i> Perferendis iusto sint
              tempora</p>
            <p class="grey-text">
              <i class="fas fa-long-arrow-alt-right orange-text mr-2" aria-hidden="true"></i> Lorem ipsum dolor sit amet
            </p>
            <p class="grey-text">
              <i class="fas fa-long-arrow-alt-right orange-text mr-2" aria-hidden="true"></i> Repellendus voluptatum,
              magni</p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: About 1 -->

      <hr>

      <!-- Section: About 2 -->
      <section id="about2" class="mt-5 mb-5 py-3 wow fadeIn" data-wow-delay="0.2s">

        <!-- Grid row -->
        <div class="row pt-5 wow fadeIn" data-wow-delay="0.4s">

          <!-- Grid column -->
          <div class="col-lg-6 col-md-12 mb-5 text-left">

            <!-- Secion heading -->
            <h2 class="mb-5 title font-weight-bold wow fadeIn" data-wow-delay="0.2s">
              <strong>Easily customizable with great interface</strong>
            </h2>

            <!-- Description -->
            <p align="justify" class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi
              soluta ratione quisquam, dicta
              ab cupiditate iure eaque? Repellendus voluptatum, magni impedit delectus, beatae maxime temporibus
              maiores quibusdam.</p>
            <p align="justify" class="grey-text">Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure,
              animi excepturi modi aut possimus
              in hic molestias repellendus illo ullam odit quia velit. Lorem ipsum dolor sit amet, consectetur
              adipisicing elit.</p>
            <p align="justify" class="grey-text">Magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi
              excepturi modi aut possimus
              in hic molestias repellendus illo. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni
              impedit delectus, beatae maxime temporibus maiores quibusdam.</p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-5 col-md-12 mt-md-4 mt-lg-0 ml-auto mb-5 text-center">

            <!-- Image -->
            <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new.png" class="img-fluid rounded z-depth-0" alt="My photo">

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: About 2 -->

      <hr>

      <!-- Section: Pricing v.5 -->
      <section class="text-center my-5">

        <!-- Section heading -->
        <h2 class="title font-weight-bold my-5 wow fadeIn" data-wow-delay="0.2s">
          <strong>Our pricing plans</strong>
        </h2>

        <!-- Section description -->
        <p class="grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit,
          error amet numquam iure provident voluptate
          esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-5">
            <!-- Card -->
            <div class="pricing-card card">

              <!-- Content -->
              <div class="card-body">
                <h5 class="font-weight-bold mt-3">Basic</h5>
                <!-- Price -->
                <div class="price pt-0">
                  <h2 class="number orange-text mb-0">10</h2>
                </div>
                <!-- Price -->
                <ul class="list-unstyled striped title darker-striped">
                  <li>
                    <p>
                      <strong>1</strong> project</p>
                  </li>
                  <li>
                    <p>
                      <strong>100</strong> components</p>
                  </li>
                  <li>
                    <p>
                      <strong>150</strong> features</p>
                  </li>
                  <li>
                    <p>
                      <strong>200</strong> members</p>
                  </li>
                </ul>
                <a class="btn pink-gradient btn-rounded mb-4"> Buy now</a>
              </div>
            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-5">

            <!-- Card -->
            <div class="card card-image"
              style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(8).jpg');">

              <!-- Content -->
              <div
                class="text-white text-center pricing-card d-flex align-items-center rgba-indigo-strong py-3 px-3 rounded">

                <!-- Content -->
                <div class="card-body">
                  <h5 class="font-weight-bold mt-2">Pro</h5>
                  <!-- Price -->
                  <div class="price pt-0">
                    <h2 class="number mb-0">20</h2>
                  </div>
                  <!-- Price -->
                  <ul class="list-unstyled striped">
                    <li>
                      <p>
                        <strong>3</strong> projects</p>
                    </li>
                    <li>
                      <p>
                        <strong>200</strong> components</p>
                    </li>
                    <li>
                      <p>
                        <strong>250</strong> features</p>
                    </li>
                    <li>
                      <p>
                        <strong>300</strong> members</p>
                    </li>
                  </ul>
                  <a class="btn btn-rounded btn-outline-white"> Buy now</a>
                </div>

              </div>
            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-5">
            <!-- Card -->
            <div class="pricing-card card">

              <!-- Content -->
              <div class="card-body">
                <h5 class="font-weight-bold mt-3">Enterprise</h5>
                <!-- Price -->
                <div class="price pt-0">
                  <h2 class="number orange-text mb-0">30</h2>
                </div>
                <!-- Price -->
                <ul class="list-unstyled striped title darker-striped">
                  <li>
                    <p>
                      <strong>5</strong> projects</p>
                  </li>
                  <li>
                    <p>
                      <strong>300</strong> components</p>
                  </li>
                  <li>
                    <p>
                      <strong>350</strong> features</p>
                  </li>
                  <li>
                    <p>
                      <strong>400</strong> members</p>
                  </li>
                </ul>
                <a class="btn pink-gradient btn-rounded mb-4">Buy now</a>
              </div>

            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Pricing v.5 -->

    </div>

    <!-- Streak -->
    <div class="streak streak-photo streak-md" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/92.jpg');">
      <div class="flex-center view rgba-indigo-light">
        <div class="container py-3">

          <!-- Section: Features v.4 -->
          <section class="wow fadeIn" data-wow-delay="0.2s">

            <!-- Section heading -->
            <h2 class="py-5 my-5 white-text font-weight-bold text-center wow fadeIn" data-wow-delay="0.2s">
              Why choose SAAS</h2>

            <!-- Grid row -->
            <div class="row mb-5">

              <!-- Grid column -->
              <div class="col-md-12 col-lg-6">

                <!-- Grid row -->
                <div class="row mb-5">
                  <div class="col-2">
                    <a type="button" class="btn-floating white btn-lg my-0">
                      <i class="fas fa-tablet-alt blue-text" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="col-9 pl-5">
                    <h4 class="font-weight-bold white-text">Fully responsive</h4>
                    <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                      maiores.</p>
                  </div>
                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-5">
                  <div class="col-2">
                    <a type="button" class="btn-floating white btn-lg my-0">
                      <i class="fas fa-level-up-alt blue-text" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="col-9 pl-5">
                    <h4 class="font-weight-bold white-text">Frequent updates</h4>
                    <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                      maiores.</p>
                  </div>
                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-5">
                  <div class="col-2">
                    <a type="button" class="btn-floating white btn-lg my-0">
                      <i class="fas fa-phone blue-text" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="col-9 pl-5">
                    <h4 class="font-weight-bold white-text">Technical support</h4>
                    <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                      maiores nam.
                    </p>
                  </div>
                </div>
                <!-- Grid row -->

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-12 col-lg-6">

                <!-- Grid row -->
                <div class="row mb-5">
                  <div class="col-2">
                    <a type="button" class="btn-floating white btn-lg my-0">
                      <i class="far fa-object-group blue-text" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="col-9 pl-5">
                    <h4 class="font-weight-bold white-text">Editable layout</h4>
                    <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                      maiores nam.
                    </p>
                  </div>
                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-5">
                  <div class="col-2">
                    <a type="button" class="btn-floating white btn-lg my-0">
                      <i class="fas fa-rocket blue-text" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="col-9 pl-5">
                    <h4 class="font-weight-bold white-text">Fast and powerful</h4>
                    <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                      maiores nam.
                    </p>
                  </div>
                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-5">
                  <div class="col-2">
                    <a type="button" class="btn-floating white btn-lg my-0">
                      <i class="fas fa-cloud-upload-alt blue-text" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="col-9 pl-5">
                    <h4 class="font-weight-bold white-text">Cloud storage</h4>
                    <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                      maiores nam.
                    </p>
                  </div>
                </div>
                <!-- Grid row -->

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </section>
          <!-- Section: Features v.4 -->
        </div>
      </div>
    </div>
    <!-- Streak -->

    <!-- Second container -->
    <div class="container-fluid" style="background-color: #f4f4fa">
      <div class="container py-4">

        <!-- Section: Services -->
        <section class="my-3 pb-3">

          <!-- Section heading -->
          <h3 class="text-center title my-5 pt-4 pb-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
            <strong>Easy to get started</strong>
          </h3>

          <!-- First row -->
          <div class="row wow fadeIn" data-wow-delay="0.4s">

            <!-- First column -->
            <div class="col-md-4 mb-5 text-center">

              <!-- Panel -->
              <div class="card card-body text-left white hoverable">
                <p class="title font-weight-bold dark-grey-text text-uppercase spacing mt-4 mx-4">
                  <i class="fas fa-square orange-text mr-2" aria-hidden="true"></i>
                  <strong>01 Create Account</strong>
                </p>
                <p class="grey-text font-small mx-4">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                  nesciunt sapiente earu
                  proident.
                </p>
              </div>
              <!-- Panel -->

            </div>
            <!-- First column -->

            <!-- Second column -->
            <div class="col-md-4 mb-5 text-center">

              <!-- Panel -->
              <div class="card card-body text-left white hoverable">
                <p class="title font-weight-bold dark-grey-text text-uppercase spacing mt-4 mx-4">
                  <i class="fas fa-square orange-text mr-2" aria-hidden="true"></i>
                  <strong>02 Select Plan</strong>
                </p>
                <p class="grey-text font-small mx-4">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                  nesciunt sapiente earu
                  proident.
                </p>
              </div>
              <!-- Panel -->

            </div>
            <!-- Second column -->

            <!-- Third column -->
            <div class="col-md-4 mb-5 text-center">

              <!-- Panel -->
              <div class="card card-body text-left white hoverable">
                <p class="title font-weight-bold dark-grey-text text-uppercase spacing mt-4 mx-4">
                  <i class="fas fa-square orange-text mr-2" aria-hidden="true"></i>
                  <strong>03 Assign tasks</strong>
                </p>
                <p class="grey-text font-small mx-4">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                  nesciunt sapiente earu
                  proident.
                </p>
              </div>
              <!-- Panel -->

            </div>
            <!-- Third column -->

          </div>
          <!-- First row -->

        </section>
        <!-- Section: Services -->

      </div>
    </div>
    <!-- Second container -->

    <div class="container">

      <!-- Section: Team v.1 -->
      <section class="team-section text-center my-5" id="team">

        <!-- Section heading -->
        <h3 class="text-center title my-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
          <strong>True words from our customers</strong>
        </h3>

        <!-- Section description -->
        <p class="grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit,
          error amet numquam iure provident voluptate
          esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.
        </p>

        <div class="row mt-5 pt-5">

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-5">

            <!-- Card -->
            <div class="card testimonial-card">

              <!-- Background color -->
              <div class="card-up pink-gradient"></div>

              <!-- Avatar -->
              <div class="avatar mx-auto white">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
                  class="rounded-circle img-responsive">
              </div>

              <div class="card-body">
                <!-- Name -->
                <h4 class="mt-1">
                  <strong>John Doe</strong>
                </h4>
                <hr>
                <!-- Quotation -->
                <p class="dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci.</p>
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-5">

            <!-- Card -->
            <div class="card testimonial-card">

              <!-- Background color -->
              <div class="card-up pink-gradient">
              </div>

              <!-- Avatar -->
              <div class="avatar mx-auto white">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg"
                  class="rounded-circle img-responsive">
              </div>

              <div class="card-body">
                <!-- Name -->
                <h4 class="mt-1">
                  <strong>Anna Aston</strong>
                </h4>
                <hr>
                <!-- Quotation -->
                <p class="dark-grey-text">Neque cupiditate assumenda in maiores repudiandae mollitia architecto.</p>
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-5">

            <!-- Card -->
            <div class="card testimonial-card">

              <!-- Background color -->
              <div class="card-up  pink-gradient"></div>

              <!-- Avatar -->
              <div class="avatar mx-auto white">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg"
                  class="rounded-circle img-responsive">
              </div>

              <div class="card-body">
                <!-- Name -->
                <h4 class="mt-1">
                  <strong>Maria Kate</strong>
                </h4>
                <hr>
                <!-- Quotation -->
                <p class="dark-grey-text">Delectus impedit saepe officiis ab aliquam repellat, rem totam unde ducimus.
                </p>
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

        </div>

      </section>
      <!-- Section: Team v.1 -->

    </div>

    <!-- Streak -->
    <div class="streak streak-photo streak-md" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg');">
      <div class="flex-center mask rgba-gradient">
        <div class="container my-5">

          <!-- Section heading -->
          <h3 class="text-center pb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
            <strong>Download our mobile app</strong>
          </h3>
          <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Get 30 days trial
          </h6>
          <!-- First row -->
          <div class="row flex-center">

            <a class="btn btn-white btn-rounded btn-lg orange-text font-weight-bold ml-0 wow fadeIn"
              data-wow-delay="0.2s">
              <i class="fab fa-android pr-2" aria-hidden="true"></i> Play store</a>
            <a class="btn btn-white btn-rounded btn-lg orange-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
              <i class="fab fa-apple pr-2" aria-hidden="true"></i> App store</a>
          </div>
          <!-- First row -->

        </div>
      </div>
    </div>
    <!-- Streak -->

    <!-- Section: Contact v.2 -->
    <div class="container">
      <section id="contact" class="text-center my-5">

        <!-- Section heading -->
        <h3 class="text-center title my-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
          <strong>Contact us</strong>
        </h3>

        <!-- Section description -->
        <p class="grey-text w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet,
          consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
          esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.
        </p>

        <div class="row wow fadeIn" data-wow-delay="0.4s">

          <!-- Grid column -->
          <div class="col-md-8 col-lg-9">
            <form>
              <!-- Grid row -->
              <div class="row">
                <!-- Grid column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="form41" class="form-control">
                    <label for="form41" class="">Your name</label>
                  </div>
                </div>

                <!-- Grid column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="form52" class="form-control">
                    <label for="form52" class="">Your email</label>
                  </div>
                </div>
              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row">
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input type="text" id="form51" class="form-control">
                    <label for="form51" class="">Subject</label>
                  </div>
                </div>
              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row">
                <!-- Grid column -->
                <div class="col-md-12">

                  <div class="md-form mb-0">
                    <textarea type="text" id="form76" class="md-textarea form-control" rows="3"></textarea>
                    <label for="form76">Your message</label>
                  </div>

                </div>
              </div>
              <!-- Grid row -->
            </form>

            <div class="text-center text-md-left mb-5 mt-4">
              <a class="btn btn-rounded btn-white font-weight-bold">Send</a>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3">
            <ul class="list-unstyled contact-icons float-md-right">
              <li>
                <i class="fas fa-map-marker-alt fa-2x title"></i>
                <p>New York, NY 10012, USA</p>
              </li>

              <li>
                <i class="fas fa-phone fa-2x title"></i>
                <p>+ 01 234 567 89</p>
              </li>

              <li>
                <i class="fas fa-envelope fa-2x title"></i>
                <p>contact@gmail.com</p>
              </li>
            </ul>
          </div>
          <!-- Grid column -->

        </div>
      </section>
      <!-- Section: Contact v.2 -->

    </div>

  </main>
  <!-- Main content -->

  <!-- Footer -->
  <footer class="page-footer text-center text-md-left unique-color-dark pt-0">

    <div class="top-pink-footer">
      <div class="container">

        <!-- Grid row -->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-md-0">
            <h6 class="mb-4 mb-md-0 white-text">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">
            <!-- Facebook -->
            <a class="p-2 m-2 fa-lg fb-ic ml-0">
              <i class="fab fa-facebook-f white-text mr-lg-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="p-2 m-2 fa-lg tw-ic">
              <i class="fab fa-twitter white-text mr-lg-4"> </i>
            </a>
            <!-- Google + -->
            <a class="p-2 m-2 fa-lg gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-lg-4"> </i>
            </a>
            <!-- Linkedin -->
            <a class="p-2 m-2 fa-lg li-ic">
              <i class="fab fa-linkedin-in white-text mr-lg-4"> </i>
            </a>
            <!-- Instagram -->
            <a class="p-2 m-2 fa-lg ins-ic">
              <i class="fab fa-instagram white-text mr-lg-4"> </i>
            </a>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container mt-5 mb-4 text-center text-md-left">
      <div class="row mt-3">

        <!-- First column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-5">
          <h6 class="spacing font-weight-bold">
            <strong>Company name</strong>
          </h6>
          <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
        </div>
        <!-- First column -->

        <!-- Second column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-5">
          <h6 class="spacing font-weight-bold">
            <strong>Products</strong>
          </h6>
          <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">MDBootstrap</a>
          </p>
          <p>
            <a href="#!">MDWordPress</a>
          </p>
          <p>
            <a href="#!">BrandFlow</a>
          </p>
          <p>
            <a href="#!">Bootstrap Angular</a>
          </p>
        </div>
        <!-- Second column -->

        <!-- Third column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-5">
          <h6 class="spacing font-weight-bold">
            <strong>Useful links</strong>
          </h6>
          <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">Your Account</a>
          </p>
          <p>
            <a href="#!">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!">Shipping Rates</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>
        </div>
        <!-- Third column -->

        <!-- Fourth column -->
        <div class="col-md-4 col-lg-3 col-xl-3">
          <h6 class="spacing font-weight-bold">
            <strong>Contact</strong>
          </h6>
          <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p>
            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Fourth column -->

      </div>
    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
      <div class="container-fluid">
        © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
      </div>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('mdb/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('mdb/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>
  <script>
    // Animation init
    new WOW().init();

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });
  </script>

</body>

</html>
