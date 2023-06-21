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
<nav class="navbar">
        <div class="navbar-logo">
            <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/flow" class="nav-link">Flow</a>
            </li>
            <li class="nav-item">
                <a href="/about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="/login" class="nav-link">Login</a>
            </li>
        </ul>
    </nav>

<!-- Content-->
<div class="content">

<div id="box2">
        <div class="icon" style= "top:20px">
                <img src="{{ asset('images/lisir.png') }}" alt="legal" width="500px">
        </div>
    </div> <!-- End-box2-->

    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8" style="color:black">
                    <h2 class="text-white mb-4">Sistem Legalisir Online FATISDA UNS</h2>
                    <p class="text-white-30" >
                    Sistem legalisir online merupakan sebuah platform digital yang dirancang untuk mempermudah dan
                    mempercepat proses legalisasi dokumen di lingkungan Fakultas Teknologi Informasi dan Sains Data UNS.
                    Sistem ini memberikan kemudahan bagi alumni FATISDA UNS dalam mengurus legalisasi dokumen seperti transkrip
                    nilai dan ijazah yang diperlukan untuk keperluan administrasi, pekerjaan, atau pendidikan lanjutan.
                    Dengan adanya sistem legalisir online, proses legalisasi dokumen menjadi lebih efisien dan praktis.
                    Mahasiswa atau alumni FATISDA UNS dapat mengajukan permohonan legalisasi dokumen mereka melalui platform
                    online yang tersedia, tanpa perlu datang secara langsung ke kantor administrasi fakultas.
                    </p>
                </div> <!-- End Col-->
            </div> <!-- End Row-->
        </div> <!-- End Container-->
    </section> <!-- End Section-->


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
                                    <img src="{{ asset('images/icons/loc.png') }}" alt="loc" style="position: relative; width:22px; height:22px;">
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
                                    <img src="{{ asset('images/icons/email.png') }}" alt="email" style="position: relative; width:24px; height:24px;">
                                    <h4 class="text-uppercase m-0">Email</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50"><a href="#!">adminfatisda@uns.com</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                    <img src="{{ asset('images/icons/phone.png') }}" alt="phone" style="position: relative; width:24px; height:24px;">
                                    <h4 class="text-uppercase m-0">Phone</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50">+62 865-8764-1234</div>
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
