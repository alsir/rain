<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Rain Technology</title>
	<meta name="description" content="">
	@include('meta::manager', [
    'title'         => 'Rain Technology',
    'description'   => 'We are a company for the retail sale of electrical and electronic devices',
    'image'         => '{{ asset('/app-assets/images/ico/apple-icon-120.png') }}',
])
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="apple-touch-icon" href="{{ asset('/app-assets/images/ico/apple-icon-120.png') }}">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/app-assets/images/logo/Rain-tech.ico') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/vendors-rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/ui/prism.min.css') }}">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>

	<!-- Google font (font-family: 'Roboto', sans-serif;) -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">

	<!-- Plugins -->
	<link rel="stylesheet" href="{{ asset('frontend/ltr/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/ltr/css/plugins.css') }}">

	<!-- Style Css -->
	<link rel="stylesheet" href="{{ asset('frontend/ltr/css/style.css')}}">

	<!-- Custom Styles -->
	<link rel="stylesheet" href="{{ asset('frontend/ltr/css/custom.css')}}">
</head>

<body>
	<!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->

	<!-- Add your site or application content here -->

	<!-- Wrapper -->
	<div id="wrapper" class="wrapper">

		<!-- Header -->
		<header class="header header-2">

			<!-- Header Top Area -->
			<div class="header-top bg-theme">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7 col-md-7 col-sm-7 col-12">
							<p class="header-welcomemsg">Welcome to <span>Rain Technology</span> Shopping Store !</p>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-5 col-12">
							<div class="header-langcurr">
								<div class="select-currency">
									<button class="select-currency-current">KWD د.ك</button>
									<ul class="select-currency-list dropdown-list">
										<li><a href="#">KWD د.ك</a></li>
									</ul>
								</div>
								<div class="select-language">
									<button class="select-language-current"><a class="dropdown-toggle nav-link"
										id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
										aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
											class="selected-language">English</span></a> </button>
									<ul class="select-language-list dropdown-list">
										<li><a class="dropdown-item"
											href="/change_language/en" data-language="en"><i class="flag-icon flag-icon-us"></i>
											  English</a></li>
										<li><a class="dropdown-item" href="/change_language/ar" data-language="ar"><i
											class="flag-icon flag-icon-kw"></i>   Arabic</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--// Header Top Area -->

			<!-- Header Middle Area -->
			<div class="header-middle bg-white">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3 col-md-6 col-sm-6 order-1 order-lg-1">
							<a href="/" class="header-logo " style="width: 50%" >
								<img src="{{ asset('/app-assets/images/logo/Rain-En.ico') }}"  alt="logo">
							</a>
						</div>
						<div class="col-lg-6 col-12 order-3 order-lg-2">
							<form action="#" class="header-searchbox">
								<select class="select-searchcategory">
									<option value="0">All categories</option>
								</select>
								<input type="text" placeholder="Enter your search key ...">
								<button type="submit"><i class="lnr lnr-magnifier"></i></button>
							</form>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 order-2 order-lg-3">
							<div class="header-icons">
								<div class="header-cart">
									<a class="header-carticon" href="/cart"><i class="lnr lnr-cart"></i><span class="count">{{ Cart::getTotalQuantity()}}</span></a>

									<!-- Minicart -->
									<div class="header-minicart minicart">
										<div class="minicart-header">
											
										<div class="minicart-footer">
											<a href="/cart" class="ho-button ho-button-fullwidth">
												<span>Cart</span>
											</a>
										</div>
									</div>
									<!--// Minicart -->

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--// Header Middle Area -->

			<!-- Header Bottom Area -->
			<div class="header-bottom bg-white">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-10 col-md-5 col-sm-5">

							<!-- Category Menu -->
							<!--// Category Menu -->

							<!-- Navigation -->
							<nav class="ho-navigation ho-navigation-2">
								<ul>
									<li class="active ">
										<a href="/">Home</a>
									</li>
									<li class="dropdown-holder">
										<a href="/">Shop</a>
										<ul class="hodropdown">
											<li><a href="/products">All products</a>
											</li>
											<li><a href="/cart">Cart</a></li>
										</ul>
									</li>
									<li>
										<a href="/aboutus">About Us</a>
									</li>
									<li>
										<a href="/contactus"> Contact</a>
									</li>
								</ul>
							</nav>
							<!--// Navigation -->

						</div>
						<div class="col-lg-2 col-md-5 col-sm-5">
							<div class="header-contactinfo">
								<i class="flaticon-support"></i>
								<span>Call Us Now:</span>
								<a href="tel:+(965) 699 08320">+(965) 699 08320</a>
							</div>
						</div>
						<div class="col-12 d-block d-lg-none">
							<div class="mobile-menu clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<!--// Header Bottom Area -->

			<!-- Header Hot Tags -->
			<!--// Header Hot Tags -->

		</header>
		<!--// Header -->
    </div>
    <main>
        @yield('content')
    </main>
    <footer class="footer bg-white">

        <!-- Footer Top Area -->
        <div class="footer-toparea">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12">
                        <div class="footer-widget widget-info">
                            <h5 class="footer-widget-title">Contact Info</h5>
                            <p>We are a company for the retail sale of electrical and electronic devices.</p>
                            <ul>
                                <li><i class="ion ion-ios-pin"></i> {{__('frontend.location')}}</li>
                                <li><i class="ion ion-ios-call"></i> Call us: +(965) 699 08320</li>
                                
                                <li><i class="ion ion-ios-mail"></i> Email us: <a href="#">info@rain-technology.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4">
                        <div class="footer-widget widget-links">
                            <h5 class="footer-widget-title">Products</h5>
                            <ul>
                                
                                <li><a href="/">Best sales</a></li>
								<li><a href="/">New Arrival</a></li>
								<li><a href="/">Our Products</a></li>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4">
                        <div class="footer-widget widget-links">
                            <h5 class="footer-widget-title">Our Company</h5>
                            <ul>
                                <li><a href="/aboutus">About us</a></li>
								<li><a href="/contactus">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
					<div class="col-lg-2 col-md-4">
                        <div class="footer-widget widget-links">
                            <h5 class="footer-widget-title">Our accounts</h5>
                            <ul>
                                <ul>
									<li><a href="https://www.facebook.com/profile.php?id=100093507100843&mibextid=ZbWKwL"><i class="ion ion-logo-facebook"></i>  facebook</a></li>
									<li><a href="https://instagram.com/raintechnology_kw?igshid=MzNlNGNkZWQ4Mg=="><i class="ion ion-logo-instagram"></i>  instagram</a></li>
								</ul>
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-3 col-12">
                        <div class="footer-widget widget-customerservice">
                            <div class="info">
                                <h5 class="footer-widget-title">CUSTOMER SERVICE</h5>
                                <h5>SEND AN EMAIL</h5>
                                <h5>HOTLINE: : <a href="#">+(965) 699 08320</a></h5>
								<h5>EMAIL: : <a href="#">info@rain-technology.com</a></h5>
                                <h6>8:00AM–5.30PM  SAT–FRI</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Footer Top Area -->

        <!-- Footer Bottom -->
        <div class="footer-bottomarea">
            <div class="container">
                <div class="footer-copyright">
                    <p class="copyright">Copyright &copy; <a href="/">Rain Technology</a> . All Rights Reserved</p>
                </div>
            </div>
        </div>
        <!--// Footer Bottom -->

        <!-- Quickview Modal -->
        <!--// Quickview Modal -->
        
    </footer>
    <!--// Footer -->

</div>
<!--// Wrapper -->

<!-- Js Files -->
<script src="{{ asset('frontend/ltr/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/ltr/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('frontend/ltr/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/ltr/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/ltr/js/plugins.js') }}"></script>
<script src="{{ asset('frontend/ltr/js/main.js') }}"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
   integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
   crossorigin=""></script>
   <script>
   var map = L.map('map').setView([29.342274585850735, 48.01916934758884], 13);
   L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
    }).addTo(map);
    var marker = L.marker([29.342274585850735, 48.01916934758884]).addTo(map);
</script>
<script src="{{ asset('/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('/app-assets/js/core/app.js') }}"></script>
<script src="{{ asset('/app-assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('/app-assets/vendors/js/ui/prism.min.js') }}"></script>
</body>

</html>