<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>The Plaza - eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="The Plaza eCommerce Template">
	<meta name="keywords" content="plaza, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}"/>
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/animate.css') }}"/>


    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    {{-- <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> --}}


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <script src="https://kit.fontawesome.com/74e3ff2f40.js" crossorigin="anonymous"></script>
</head>
<body>

<header>
   	<!-- Header top section Start -->
    <section class="header_top">
        <nav class="navbar" aria-label="Thirteenth navbar example">
            <div class="container">
              <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                <ul class="nav col-lg-6 nav text-white">
                    <li class="nav-item">
                      <a class="nav-link text-light text-white" aria-current="page" href="#"> <i class="fab fa-facebook-f"></i> </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#"> <i class="fa-brands fa-twitter"></i> </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#"> <i class="fa-brands fa-linkedin-in"></i> </a>
                    </li>
                </ul>
                <ul class="nav col-lg-6 nav justify-content-end text-white">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#"> Register </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"> Guidelines  </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"> Terms & Condition  </a>
                    </li>
                </ul>
              </div>
            </div>
        </nav>
    </section>
    <!-- Header NavBar section Start -->
    <section class="header_navbar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
            <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                <a class="navbar-brand col-lg-3 me-0" href="#"> <img src="{{ asset('frontend_assets/img/jnub-logo.png') }} " alt=""></a>
                <ul class="navbar-nav col-lg-7 justify-content-end">
                  <li class="nav-item">
                    <a class="nav-link active fw-semibold" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="#"> About </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold"> Author & publication </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-semibold" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Subject </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-semibold" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Hub </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                </ul>
                <div class="d-lg-flex col-lg-2 justify-content-evenly">
                  <button class="btn btn-outline-dark rounded-0 ms-3">Sign in </button>
                  <a class="p-2">  <i class="fa-solid fa-magnifying-glass"></i>  </a>
                </div>
              </div>
            </div>
        </nav>

    </section>
    <!-- Header Main section Start -->
</header>
<!-- Header section End -->



@yield('frontend_content')




	<!-- Footer top section -->
	<section class="footer-top-section home-footer">
		<div class="container">
			<div class="row">
				{{-- <div class="col-lg-3 col-md-8 col-sm-12">
					<div class="footer-widget about-widget">
						<img src="img/logo.png" class="footer-logo" alt="">
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam fringilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<div class="cards">
							<img src="img/cards/5.png" alt="">
							<img src="img/cards/4.png" alt="">
							<img src="img/cards/3.png" alt="">
							<img src="img/cards/2.png" alt="">
							<img src="img/cards/1.png" alt="">
						</div>
					</div>
				</div> --}}
                <div class="col-lg-3 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title"> Researchers </h6>
						<ul>
							<li><a href="#" class="text-white"> Submit your paper </a></li>
							<li><a href="#" class="text-white"> Find books & journals </a></li>
							<li><a href="#" class="text-white"> Visit Author’s Hub </a></li>
							<li><a href="#" class="text-white"> Visit Editor Hub </a></li>
							<li><a href="#" class="text-white"> Visit Reviewer Hub </a></li>
						</ul>
					</div>
				</div>
                <div class="col-lg-3 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title"> Subjects </h6>
						<ul>
							<li class="text-white"><a href="#"> Marketing</a></li>
							<li class="text-white"><a href="#"> Finance </a></li>
							<li class="text-white"><a href="#"> Human Resources </a></li>
							<li class="text-white"><a href="#"> International Business </a></li>
							<li class="text-white"><a href="#"> Investment Management</a></li>
						</ul>
					</div>
				</div>
                <div class="col-lg-3 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title"> About JNUB </h6>
						<ul>
							<li><a href="#" class="text-white"> About</a></li>
							<li><a href="#" class="text-white"> Careers </a></li>
							<li><a href="#" class="text-white"> Events </a></li>
							<li><a href="#" class="text-white"> Subject </a></li>
							<li><a href="#" class="text-white"> Author & publication </a></li>
						</ul>
					</div>
				</div>
                <div class="col-lg-3 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title"> How can we help ? </h6>
						<ul>
							<li class="text-white"><a href="#"> Support and Contact </a></li>

						</ul>
					</div>
				</div>
				{{-- <div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Contact</h6>
						<div class="text-box">
							<p>Your Company Ltd </p>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, </p>
							<p>+53 345 7953 32453</p>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</section>
	<!-- Footer top section end -->

		<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
            <div class="row navbar">
                <div class="col-lg-6">
                    <div class="logo">
                        <img src="{{ asset('frontend_assets/img/jnub-logo-white.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-menu">
                        <ul class="nav justify-content-end text-white">
                            <li class="nav-item">
                              <a class="nav-link" aria-current="page" href="#">  Terms & Condition </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#"> Privacy policy  </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#"> Cookies Notice  </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#"> Sitemap </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    {{-- <script type="text/javascript" src="slick/slick.min.js"></script> --}}
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	{{-- <script src="{{ asset('frontend_assets/js/jquery-3.2.1.min.js') }}"></script> --}}
	<script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('frontend_assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('frontend_assets/js/mixitup.min.js') }}"></script>
	<script src="{{ asset('frontend_assets/js/sly.min.js') }}"></script>
	<script src="{{ asset('frontend_assets/js/jquery.nicescroll.min.js') }}"></script>
	<script src="{{ asset('frontend_assets/js/main.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function(){
          $('.slider').slick({
            infinite: true,
            dots: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows:false,
            autoplay: true,
            autoplaySpeed: 3000,
          });
        });
      </script>

    </body>
</html>

