<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIB Pekan Menggatal</title>

    <link href="{{ asset('NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- script
   ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>

    @vite(['resources/js/app.js'])

</head>

<body id='top'>

    @if (App\Models\News::where('type', 'public')->first()->status)
        <div id="popup-container">
            <div id="popup-content">
                <div id="close-button" onclick="closePopup()">X</div>
                <p>{{ App\Models\News::where('type', 'public')->first()->title }}</p>
                <img src="{{ asset('images/news/public-news.png') }}" alt="Example Image">
            </div>
        </div>
    @endif

    <header id="header" class="row-header">
        <div class="header-logo">
            <img src="images/sib_logo.png" data-aos="fade-up">
        </div>
        <nav id="header-nav-wrap">
            <ul class="header-main-nav">
                <li class="current"><a class="" href="#home" title="home">Home</a></li>
                <li><a class="" href="#about" title="about">About</a></li>
                <li><a class="" href="#family" title="family">Family</a></li>
                <li><a class="" href="#download" title="download">Contact</a></li>

                @if (App\Models\News::where('type', 'public')->first()->status)
                    <li><a href="#" onclick="showPopup()">News</a></li>
                @endif
            </ul>

            <a href="{{ route('login') }}" title="sign-up" class="button button-primary cta">Sign In</a>
        </nav>
        <a class="header-menu-toggle" href="#"><span>Menu</span></a>
    </header>

    <section id="home" data-parallax="scroll"
        data-image-src="https://images.unsplash.com/photo-1496450681664-3df85efbd29f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8YmFja2dyb3VuZCUyMGNsb3VkfGVufDB8fDB8fHww"
        data-natural-width=3000 data-natural-height=2000>

        <div class="home-content">
            <div class="row contents">
                <div class="home-content-left">

                    <h3 data-aos="fade-up" id="title">Welcome to SIB Pekan Menggatal</h3>
                    <h1 data-aos="fade-up" class="text-uppercase">
                        Bersatu, <br>
                        Bertumbuh & <br>
                        Bersaksi.
                    </h1>

                    <div class="buttons">
                        <a href="#download" class="smoothscroll button stroke">
                            Daftar sebagai anggota
                        </a>
                        <a href="https://www.google.com/maps/place/SIB+Pekan+Manggatal/@6.024953,116.1546778,17z/data=!3m1!4b1!4m6!3m5!1s0x323b6c60285eecb7:0xf5eafabf1191d971!8m2!3d6.024953!4d116.1572527!16s%2Fg%2F11btwtfrx6?entry=ttu"
                            target="_blank" {{-- data-lity --}} class="button stroke">
                            Lokasi gereja
                        </a>
                    </div>

                </div>

            </div>

        </div>

        <ul class="home-social-list">
            <li>
                <a href="https://www.facebook.com/groups/503901012969814/"><i class="fa fa-facebook-square"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
            </li>
        </ul>

        <div class="home-scrolldown">
            <a href="#about" class="scroll-icon">
                <span>Scroll Down</span>
                <i class="icon-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>


    <!-- about
    ================================================== -->
    <section id="about">

        <div class="row about-intro">

            <div class="col-four">
                <h1 class="intro-header" data-aos="fade-up">Latar Belakang</h1>
            </div>
            <div class="col-eight">
                <ul class="lead" data-aos="fade-up">
                    <li>SIB Pekan Manggatal (SIBPM) bermula dari sebuah kelompok sel yang dibentuk pada tahun 1996 dan bertemu setiap hari rabu.</li>
                    <li>Kebaktian pertama diadakan di bangunan kedai Pekan Manggatal pada 10/9/2000.</li>
                    <li>Gereja ditahbis pada 9/9/2001 sempena ulang tahun yang pertama maka dengan itu lahirlah satu Jemaat SIB Pekan Manggatal sehingga hari ini.</li>
                    <li>Marilah bergabung dengan komuniti SIBPM dan bersama-sama bertumbuh dalam iman percaya kepada Yesus Kristus.</li>
                </ul>

            </div>

        </div>

        <div class="row about-features">

            <div class="features-list block-1-3 block-m-1-2 block-mob-full group">

                <div class="bgrid feature" data-aos="fade-up">

                    <div class="service-content">

                        <h3>Misi</h3>
                        <ul>
                            <li>Mengutamakan keterlibatan jemaat dalam aktiviti gereja.</li>
                            <li>Menekankan pendidikan Alkitab untuk meningkatkan pengetahuan dan pertumbuhan rohani.</li>
                            <li>Menjadikan pemberitaan injil tentang Yesus Kristus sebagai gaya hidup jemaat.</li>
                            <li>Menggerakkan penubuhan gereja di kawasan yang strategik.</li>
                        </ul>
                    </div>

                </div> <!-- /bgrid -->

                <div class="bgrid feature" data-aos="fade-up">

                    <div class="service-content">
                        <h3>Vision</h3>

                        <p>“ Menjadi Gereja Pemangkin yang Bersatu, Bertumbuh dan Bersaksi ”
                        </p>


                    </div>

                </div> <!-- /bgrid -->

                <div class="bgrid feature" data-aos="fade-up">


                    <div class="service-content">
                        <h3>Future</h3>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit.
                        </p>

                    </div>

                </div> <!-- /bgrid -->

            </div> <!-- end features-list -->

        </div> <!-- end about-features -->

    </section> <!-- end about -->


    <!-- Family Section
    ================================================== -->
    <section id="family">

        <div class="row">
            <div class="col-twelve">
                <h1 class="intro-header" data-aos="fade-up">Our family.</h1>
            </div>
        </div>

        <div class="row owl-wrap">

            <div id="testimonial-slider" data-aos="fade-up">

                <div class="slides owl-carousel">

                    <div>
                        <p>
                            Your work is going to fill a large part of your life, and the only way to be truly satisfied
                            is
                            to do what you believe is great work. And the only way to do great work is to love what you
                            do.
                            If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart,
                            you'll know when you find it.
                        </p>

                        <div class="testimonial-author">
                            <img src="images/avatars/user-02.jpg" alt="Author image">
                            <div class="author-info">
                                Ethan Mitchell
                                <span class="position">Pastor</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p>
                            Your spiritual journey will occupy a significant portion of your life, and true fulfillment
                            comes from embracing the path you believe to be truly meaningful. Just as in life's work,
                            find the passion in your faith. If you haven't discovered it yet, keep seeking. Refuse to
                            settle, for in matters of the heart, you will unmistakably recognize the moment you uncover
                            it.
                        </p>

                        <div class="testimonial-author">
                            <img src="images/avatars/user-03.jpg" alt="Author image">
                            <div class="author-info">
                                Jason Anderson
                                <span>Pastor</span>
                            </div>
                        </div>
                    </div>

                </div> <!-- end slides -->

            </div> <!-- end testimonial-slider -->

        </div> <!-- end flex-container -->

    </section> <!-- end family -->


    <!-- download
    ================================================== -->
    <section id="download">

        <div class="row">
            <div class="col-full">
                <h1 class="intro-header" data-aos="fade-up">Contact us !</h1>
                <div class="card p-4">
                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Content"
                                    required>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="button button-primary cta">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section> <!-- end download -->


    <!-- footer
    ================================================== -->
    <footer>

        <div class="footer-main">
            <div class="row">

                <div class="col-three md-1-3 tab-full footer-info">

                    <h4>SIBPM</h4>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta
                        dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                    </p>

                    <ul class="footer-social-list">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>


                </div> <!-- end footer-info -->

                <div class="col-three md-1-3 tab-1-2 mob-full footer-contact">

                    <h4>Contact</h4>

                    <p>
                        Lot 4-6, Tingkat 2, Blok H,<br>
                        Pekan Manggatal, Peri Surat 177, Manggatal, <br>
                        88450, Kota Kinabalu, Sabah<br>
                    </p>

                    <p>
                        sibpekanmenggatal@gmail.com <br>
                        Phone: 088-492173 <br>
                    </p>

                </div> <!-- end footer-contact -->

                <div class="col-two md-1-3 tab-1-2 mob-full footer-site-links">

                    <h4>Site Links</h4>

                    <ul class="list-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>

                </div> <!-- end footer-site-links -->

                <div class="col-four md-1-2 tab-full footer-subscribe">

                    <h4>Our Newsletter</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>

                    <div class="subscribe-form">

                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email"
                                placeholder="Email Address" required="">

                            <input type="submit" name="subscribe" value="Send">

                            <label for="mc-email" class="subscribe-message"></label>

                        </form>

                    </div>

                </div> <!-- end footer-subscribe -->

            </div> <!-- /row -->
        </div> <!-- end footer-main -->


        <div class="footer-bottom">

            <div class="row">

                <div class="col-twelve">
                    <div class="copyright">
                        <span>© All rights reserved.</span>
                    </div>

                    <div id="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up"></i></a>
                    </div>
                </div>

            </div> <!-- end footer-bottom -->

        </div>

    </footer>

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            if (!localStorage.getItem("popupShown")) {
                showPopup();
                localStorage.setItem("popupShown", "true");
            }
        });

        function showPopup() {
            document.getElementById("popup-container").style.display = "flex";
        }

        function closePopup() {
            document.getElementById("popup-container").style.display = "none";
            localStorage.setItem("popupShown", "");
        }
    </script>
</body>


</html>
