<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIB Pekan Menggatal</title>

    <link href="{{ asset('NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>Dazzle</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- script
   ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>

    <!-- favicons
 ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <style>
        #popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        #popup-content {
            background: #fff;
            padding: 20px;
            max-width: 90%;
            max-height: 90%;
            overflow: auto;
            text-align: center;
        }
    </style>
</head>

<body id='top'>

    <!-- Popup Container -->
    <div id="popup-container">
        <!-- Popup Content -->
        <div id="popup-content">
            <p>This is your popup title. Customize it as needed.</p>
            <img src="https://images.unsplash.com/photo-1522543558187-768b6df7c25c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Description of the event">
            <button class="mt-5" onclick="closePopup()">Close</button>
        </div>
    </div>

    <!-- header
   ================================================== -->
    <header id="header" class="row-header">

        <div class="header-logo">
            {{-- <a href="index.html"></a> --}}
            <img src="images/sib_logo.png" data-aos="fade-up">
        </div>

        <nav id="header-nav-wrap">
            <ul class="header-main-nav">
                <li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
                <li><a class="smoothscroll" href="#about" title="about">About</a></li>
                <li><a class="smoothscroll" href="#download" title="download">Contact</a></li>
                <li><a href="#" onclick="showPopup()">News</a></li>
            </ul>

            <a href="{{route('login')}}" title="sign-up" class="button button-primary cta">Sign In</a>
        </nav>

        <a class="header-menu-toggle" href="#"><span>Menu</span></a>

    </header> <!-- /header -->


    <!-- home
   ================================================== -->
    <section id="home" data-parallax="scroll"
        data-image-src="https://images.unsplash.com/photo-1496450681664-3df85efbd29f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8YmFja2dyb3VuZCUyMGNsb3VkfGVufDB8fDB8fHww"
        data-natural-width=3000 data-natural-height=2000>

        <div class="overlay"></div>
        <div class="home-content">

            <div class="row contents">
                <div class="home-content-left">

                    <h3 data-aos="fade-up">Welcome to SIB Pekan Menggatal</h3>

                    <h1 data-aos="fade-up">
                        Embrace Faith, <br>
                        Love, <br>
                        Community.
                    </h1>

                    <div class="buttons" >
                        <a href="#download" class="smoothscroll button stroke">
                            Become a member
                        </a>
                        <a href="http://player.vimeo.com/video/14592941?title=0&amp;byline=0&amp;portrait=0&amp;color=39b54a"
                            data-lity class="button stroke">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                            </svg>
                            Church Location
                        </a>
                    </div>

                </div>

            </div>

        </div> <!-- end home-content -->

        <ul class="home-social-list">
            <li>
                <a href="#"><i class="fa fa-facebook-square"></i></a>
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
        <!-- end home-social-list -->

        <div class="home-scrolldown">
            <a href="#about" class="scroll-icon smoothscroll">
                <span>Scroll Down</span>
                <i class="icon-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

    </section> <!-- end home -->


    <!-- about
    ================================================== -->
    <section id="about">

        <div class="row about-intro">

            <div class="col-four">
                <h1 class="intro-header" data-aos="fade-up">About Our Church</h1>
            </div>
            <div class="col-eight">
                <p class="lead" data-aos="fade-up">
                    Experience transformative faith, boundless love, and vibrant community. Join
                    our spiritual family where every soul is welcomed, and hearts find solace. Embrace worship,
                    fellowship, and shared joy. Be a part of our meaningful journey celebrating divine presence,
                    nurturing a community built on faith, love, and shared values.
                </p>
            </div>

        </div>

        <div class="row about-features">

            <div class="features-list block-1-3 block-m-1-2 block-mob-full group">

                <div class="bgrid feature" data-aos="fade-up">

                    {{-- <span class="icon"><i class="icon-window"></i></span> --}}

                    <div class="service-content">

                        <h3>Mission</h3>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit.
                        </p>

                    </div>

                </div> <!-- /bgrid -->

                <div class="bgrid feature" data-aos="fade-up">

                    {{-- <span class="icon"><i class="icon-image"></i></span> --}}

                    <div class="service-content">
                        <h3>Vision</h3>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit.
                        </p>


                    </div>

                </div> <!-- /bgrid -->

                <div class="bgrid feature" data-aos="fade-up">

                    {{-- <span class="icon"><i class="icon-paint-brush"></i></span> --}}

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


    <!-- Testimonials Section
    ================================================== -->
    <section id="testimonials">

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

    </section> <!-- end testimonials -->


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
                        1600 Amphitheatre Parkway<br>
                        Mountain View, CA <br>
                        94043 US<br>
                    </p>

                    <p>
                        someone@dazzlesite.com <br>
                        Phone: (+63) 555 1212 <br>
                        Fax: (+63) 555 0100
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
            // Check if the popup should be shown (using localStorage)
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
