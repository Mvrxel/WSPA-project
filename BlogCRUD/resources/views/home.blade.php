<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>BlogCRUD</title>
</head>
<body>
  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
          <strong class="blue-text">BlogCRUD</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">Admin panel</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/Mvrxel/WSPA-project" class="nav-link border border-light rounded waves-effect"
                target="_blank">
                <i class="fab fa-github mr-2"></i>BlogCRUD GitHub
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Jumbotron-->
      <section class="card wow fadeIn" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background3.jpg);">

        <!-- Content -->
        <div class="card-body text-white text-center py-5 px-5 my-5">

          <h1 class="mb-4">
            <strong>Blog CRUD</strong>
          </h1>
          <p>
            <strong>Simple CRUD project made with PHP and Laravel</strong>
          </p>
          <a target="_blank" href="https://github.com/Mvrxel/WSPA-project" class="btn btn-outline-white btn-lg">Start
            Public repository
            <i class="fas fa-graduation-cap ml-2"></i>
          </a>

        </div>
        <!-- Content -->
      </section>
      <!--Section: Jumbotron-->

      <hr class="my-5">

      <!--Section: Magazine v.1-->
      <section class="wow fadeIn">

        <!--Section heading-->
        <h2 class="h1 text-center my-5 font-weight-bold">Blog NewsFeed</h2>

        <!--Grid row-->
        <div class="row text-left">

          <!--Grid column-->
          <div class="col-lg-6 col-md-12">

            <!--Image-->
            <div class="view overlay rounded z-depth-1-half mb-3">
              <img src="https://mdbootstrap.com/img/Photos/Others/images/77.jpg" class="img-fluid" alt="Sample post image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Excerpt-->
            <div class="news-data">
              <a href="" class="light-blue-text">
                <h6>
                  <i class="fas fa-plane"></i>
                  <strong> Travels</strong>
                </h6>
              </a>
              <p>
                <strong>
                  <i class="far fa-clock"></i> 20/08/2018</strong>
              </p>
            </div>
            <h3>
              <a>
                <strong>This is title of the news</strong>
              </a>
            </h3>
            <p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
              placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
            </p>

            <!--/Featured news-->

            <hr>

            <!--Small news-->
            <div class="row">
              <div class="col-md-3">

                <!--Image-->
                <div class="view overlay rounded z-depth-1">
                  <img src="https://mdbootstrap.com/img/Photos/Others/photo8.jpg" class="img-fluid" alt="Minor sample post image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9">
                <p class="dark-grey-text">
                  <strong>19/08/2018</strong>
                </p>
                <a>Lorem ipsum dolor sit amet
                  <i class="fas fa-angle-right float-right"></i>
                </a>
              </div>

            </div>
            <!--/Small news-->

            <hr>

            <!--Small news-->
            <div class="row">
              <div class="col-md-3">

                <!--Image-->
                <div class="view overlay rounded z-depth-1">
                  <img src="https://mdbootstrap.com/img/Photos/Others/images/54.jpg" class="img-fluid" alt="Minor sample post image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9">
                <p class="dark-grey-text">
                  <strong>18/08/2018</strong>
                </p>
                <a>Soluta nobis est eligendi
                  <i class="fas fa-angle-right float-right"></i>
                </a>
              </div>

            </div>
            <!--/Small news-->

            <hr>

            <!--Small news-->
            <div class="row">
              <div class="col-md-3">

                <!--Image-->
                <div class="view overlay rounded z-depth-1">
                  <img src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" class="img-fluid" alt="Minor sample post image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9">
                <p class="dark-grey-text">
                  <strong>17/08/2018</strong>
                </p>
                <a>Voluptatem accusantium doloremque
                  <i class="fas fa-angle-right float-right"></i>
                </a>
              </div>

            </div>
            <!--/Small news-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-12">

            <!--Image-->
            <div class="view overlay rounded z-depth-1-half mb-3">
              <img src="https://mdbootstrap.com/img/Photos/Others/images/32.jpg" class="img-fluid" alt="Sample post image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Excerpt-->
            <div class="news-data">
              <a href="" class="light-blue-text">
                <h6>
                  <i class="fas fa-plane"></i>
                  <strong> Travels</strong>
                </h6>
              </a>
              <p>
                <strong>
                  <i class="far fa-clock"></i> 20/08/2018</strong>
              </p>
            </div>
            <h3>
              <a>
                <strong>This is title of the news</strong>
              </a>
            </h3>
            <p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
              placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
            </p>

            <!--/Featured news-->

            <hr>

            <!--Small news-->
            <div class="row">
              <div class="col-md-3">

                <!--Image-->
                <div class="view overlay rounded z-depth-1">
                  <img src="https://mdbootstrap.com/img/Photos/Others/photo11.jpg" class="img-fluid" alt="Minor sample post image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9">
                <p class="dark-grey-text">
                  <strong>19/08/2018</strong>
                </p>
                <a>Lorem ipsum dolor sit amet
                  <i class="fas fa-angle-right float-right"></i>
                </a>
              </div>

            </div>
            <!--/Small news-->

            <hr>

            <!--Small news-->
            <div class="row">
              <div class="col-md-3">

                <!--Image-->
                <div class="view overlay rounded z-depth-1">
                  <img src="https://mdbootstrap.com/img/Photos/Others/images/51.jpg" class="img-fluid" alt="Minor sample post image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9">
                <p class="dark-grey-text">
                  <strong>18/08/2018</strong>
                </p>
                <a>Soluta nobis est eligendi
                  <i class="fas fa-angle-right float-right"></i>
                </a>
              </div>

            </div>
            <!--/Small news-->

            <hr>

            <!--Small news-->
            <div class="row">
              <div class="col-md-3">

                <!--Image-->
                <div class="view overlay rounded z-depth-1">
                  <img src="https://mdbootstrap.com/img/Photos/Others/images/44.jpg" class="img-fluid" alt="Minor sample post image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9">
                <p class="dark-grey-text">
                  <strong>17/08/2018</strong>
                </p>
                <a>Voluptatem accusantium doloremque
                  <i class="fas fa-angle-right float-right"></i>
                </a>
              </div>

            </div>
            <!--/Small news-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--/Section: Magazine v.1-->


    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">
    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="#" target="_blank"> WSPA-project blogCRUD </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
</body>
</html>