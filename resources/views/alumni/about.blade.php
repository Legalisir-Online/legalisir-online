<!DOCTYPE html>
<html>
<head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
	<title>Sistem Legalisir Online</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar-footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropdown.css') }}">
</head>

<body>
@include('alumni.includes.navbar')

<!-- Content-->
<div class="content">
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">Sistem Legalisir Online Fatisda UNS</h2>
                    <p class="text-white-50">
                    Sistem legalisir online merupakan sistem yang dibuat dengan tujuan memberikan kemudahan bagi alumni 
                    Fakulltas Teknologi Informasi dan Sains Data UNS untuk melakukan legalisir secara online
                    </p>
                </div> <!-- End Col-->
            </div> <!-- End Row-->
        </div> <!-- End Container-->
    </section> <!-- End Section-->

    <div id="box2">
        <div class="icon">
                <img src="{{ asset('images/legal.jpg') }}" alt="legal" width="280px">
        </div> 
    </div> <!-- End-box2-->
</div> <!-- End Content-->


	<!-- Contact-->
        <div class="contact">
            <section class="contact-section bg-black">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Address</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50">Gedung B Lt.4 Fatisda UNS</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-envelope text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Email</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50"><a href="#!">fatisda@uns.com</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Phone</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50">0865-8764-1234</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social d-flex justify-content-center">
                        <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </section>
        </div>

    @include('alumni.includes.footer')
</body>
</html>