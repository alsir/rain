<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> رين تكنولجي</title>
    @include('meta::manager', [
    'title'         => 'رين تكنولجي',
    'description'   => 'المنزل Smart home و الأنظمة الأمنية كاميرات المراقبة، وأنظمة التواصل الانتركم وبدالة التلفون العادية و الديجيتال، و انظمة  الانترنت AccessPoint، و شبكات الكمبيوتر، و الستلايت المركزي  وأنظمة الصوت [السماعات] لديها فرع رئيسي داخل دولة الكويت ويقع في منطقة حولي',
    'image'         => '{{ asset('/app-assets/images/logo/Rain-tech.ico') }}',
])
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{ asset('/app-assets/images/ico/apple-icon-120.png') }}">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/app-assets/images/logo/Rain-tech.ico') }}">
    <!-- Google font (font-family: 'Roboto', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/vendors-rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/ui/prism.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('frontend/rtl/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/rtl/css/plugins.css') }}">

	<!-- Style Css -->
	<link rel="stylesheet" href="{{ asset('frontend/rtl/style.css')}}">

	<!-- Custom Styles -->
	<link rel="stylesheet" href="{{ asset('frontend/rtl/css/custom.css')}}">
</head>

<body>
    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->

    <!-- Add your site or application content here -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <header class="header header-3">

            <!-- Header Top Area -->
            <div class="header-top bg-theme">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                            <p class="header-welcomemsg">مرحبا بك في  <span>رين تكنولوجي</span> للتسوق  !</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                            <div class="header-langcurr">
                                <div class="select-currency">
                                    <button class="select-currency-current">KWD د.ك</button>
                                    <ul class="select-currency-list dropdown-list">
                                        <li><a href=""> KWD د.ك</a></li>
                                    </ul>
                                </div>
                                <div class="select-language">
									<button class="select-language-current"><a class="dropdown-toggle nav-link"
										id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
										aria-expanded="false"><i class="flag-icon flag-icon-kw"></i><span
											class="selected-language">عرببة</span></a> </button>
									<ul class="select-language-list dropdown-list">
										<li><a class="dropdown-item"
											href="/change_language/en" data-language="en"><i class="flag-icon flag-icon-us"></i>
											  انجليزي</a></li>
										<li><a class="dropdown-item" href="/change_language/ar" data-language="ar"><i
											class="flag-icon flag-icon-kw"></i>   عربي</a></li>
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
							<a href="/" class="header-logo">
								<img src="{{ asset('/app-assets/images/logo/Rain-Ar.ico') }}" alt="logo">
							</a>
						</div>
						<div class="col-lg-6 col-12 order-3 order-lg-2">
							<form action="#" class="header-searchbox">
								<select class="select-searchcategory">
									<option value="0">كل الفئات</option>
								</select>
								<input type="text" placeholder="بحث ...">
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
												<span>السلة</span>
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
                        <div class="col-lg-10 d-none d-lg-block">

                            <!-- Navigation -->
                            <nav class="ho-navigation ho-navigation-3">
                                <ul>
                                    <li class="active dropdown-holder">
                                        <a href="/">{{__('frontend.Home')}}</a>
                                    <li class="dropdown-holder">
                                        <a href="/">المتجر</a>
                                        <ul class="hodropdown">
                                            <li><a href="/products">كل المنتجات</a></li>
                                            <li><a href="/cart">السلة </a></li>
                                            
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="/aboutus">عننا</a>
                                    </li>
                                    <li>
                                        <a href="/contactus"> تواصل معنا</a>
                                    </li>   
                                        </ul>
                                    </li>

                                    
                                </ul>
                            </nav>
                            <!--// Navigation -->

                        </div>
                        <div class="col-lg-2">
                            <div class="header-contactinfo">
                                <i class="flaticon-support"></i>
                                <span>{{__('frontend.call_us')}}</span>
                                <b>+(965) 699 08320</b>
                            </div>
                        </div>
                        <div class="col-12 d-block d-lg-none">
                            <div class="mobile-menu clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Header Bottom Area -->

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
                            <h5 class="footer-widget-title">معلومات التوصل</h5>
                            <p>نحنا شركة للبيع بالتجزئة للاجهوة الكهربائية و الالكترونية</p>
                            <ul>
                                <li><i class="ion ion-ios-pin"></i> {{__('frontend.location')}}</li>
                                <li><i class="ion ion-ios-call"></i> اتصل بنا: +(965) 699 08320</li>
                                
                                <li><i class="ion ion-ios-mail"></i> راسلنا: info@rain-technology.com</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4">
                        <div class="footer-widget widget-links">
                            <h5 class="footer-widget-title">المنتجات</h5>
                            <ul>
                                <li><a href="/">المنتجات الجديدة</a></li>
                                <li><a href="/">الاكثر مبيعا</a></li>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4">
                        <div class="footer-widget widget-links">
                            <h5 class="footer-widget-title">شركتنا</h5>
                            <ul>
                                <li><a href="/aboutus">عننا</a></li>
                                <li><a href="/contactus">تواصل معنا</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="footer-widget widget-links">
                            <h5 class="footer-widget-title">حسابات الميديا</h5></h5>
                            <ul>
                                <ul>
									<li><a href="https://www.facebook.com/profile.php?id=100093507100843&mibextid=ZbWKwL"><i class="ion ion-logo-facebook"></i>  فيسبوك</a></li>
									<li><a href="https://instagram.com/raintechnology_kw?igshid=MzNlNGNkZWQ4Mg=="><i class="ion ion-logo-instagram"></i>  انستغرام</a></li>
								</ul>
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-3 col-12">
                        <div class="footer-widget widget-customerservice">
                            <div class="info">
                                <h5 class="footer-widget-title">خدمة العملاء</h5>
                                <h5>راسلنا عبر البريد</h5>
                                <h5>الخط الساخن: : +(965) 699 08320</h5>
                                <h5>ايميل: : <a href="#">info@rain-technology.com</a></h5>
                                <h6>8:00صباحا–5.30مساءا  السبت-الخميس</h6>
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
                    <p class="copyright">حقوق الملكية  &copy; <a href="/">رين التكنولوجي </a> . كل الحقوق محفوظ</p>
                </div>
            </div>
        </div>
        <!--// Footer Bottom -->

        <!-- Quickview Modal -->
        <!--// Quickview Modal -->
        
    </footer>
<script src="{{ asset('frontend/rtl/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/rtl/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('frontend/rtl/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/rtl/js/bootstrap.min.js') }}"></script>
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

<script src="{{ asset('frontend/rtl/js/plugins.js') }}"></script>
<script src="{{ asset('frontend/rtl/js/main.js') }}"></script>
<script src="{{ asset('/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('/app-assets/js/core/app.js') }}"></script>
<script src="{{ asset('/app-assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('/app-assets/vendors/js/ui/prism.min.js') }}"></script>
</body>