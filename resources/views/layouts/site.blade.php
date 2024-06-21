<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Takhira Academy | @yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="/assets/images/takhira.jpg">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('index') }}" class="logo">
                        <h1>Takhira</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="{{ route('index') }}">Bosh sahifa</a></li>
                      <li class="scroll-to-section"><a href="{{ route('service') }}">Xizmatlar</a></li>
                      <li class="scroll-to-section"><a href="{{ route('courses') }}">Kurslar</a></li>
                      <li class="scroll-to-section"><a href="{{ route('team') }}">Jamoa</a></li>
                      <li class="scroll-to-section"><a href="{{ route('contact') }}">Aloqa</a></li>
                      <li class="scroll-to-section"><a href="{{ route('about') }}">Biz haqimizda</a></li>
                      <li class="scroll-to-section"><a href="{{ route('register') }}">Ro'yxatdan o'tish</a></li>
                  </ul>
                  <a class='menu-trigger'>
                    <span>Menu</span>
                </a>

                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  @yield('content')

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>© Takhira Hadija Academy. Barcha huquqlar himoyalangan. © Sayt <a href="https://t.me/web_developer_2006" rel="nofollow" target="_blank">Shohruh Ermanov</a> tomonidan yaratilgan.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets/js/counter.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script src="{{ asset('/admin/assets/js/app.min.js') }}"></script>
  <!-- JS Libraies -->


  <script>

    var url = window.location.href;
    var link = document.querySelectorAll("[href='"+url+"']")[0];
    link.classList.add('active')

</script>



  </body>
</html>
