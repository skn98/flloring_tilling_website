<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Tiling & Flooring</title>
    {{--  <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Floens is a modern HTML Template for Beauty, Spa Centers, Hair, Nail, Spa Salons & Cosmetic shops. The template perfectly fits Beauty Spa, Salon, and Wellness Treatments websites and businesses." />  --}}

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,900;9..40,1000&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="assets/vendors/floens-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/slick/slick.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/floens.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/Logo_Tilling.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">

        {{--  <div class="topbar-one">
            <div class="container-fluid">
                <div class="topbar-one__inner">
                    <ul class="list-unstyled topbar-one__info">
                        <li class="topbar-one__info__item">
                            <span class="icon-paper-plane"></span>
                            <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                        </li>
                        <li class="topbar-one__info__item">
                            <span class="icon-phone-call"></span>
                            <a href="tel:+9156980036420">+91 5698 0036 420</a>
                        </li>
                        <li class="topbar-one__info__item">
                            <span class="icon-location"></span>
                            <address>85 Ketch Harbour Road Bensal, PA 19020</address>
                        </li>
                    </ul><!-- /.list-unstyled topbar-one__info -->
                    <div class="topbar-one__right">
                        <div class="topbar-one__social">
                            <a href="https://facebook.com/">
                                <i class="icon-facebook" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://twitter.com/">
                                <i class="icon-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://instagram.com/">
                                <i class="icon-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                            <a href="https://youtube.com/">
                                <i class="icon-youtube" aria-hidden="true"></i>
                                <span class="sr-only">Youtube</span>
                            </a>
                        </div><!-- /.topbar-one__social -->
                    </div><!-- /.topbar-one__right -->
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.container-fluid -->
        </div><!-- /.topbar-one -->  --}}

        <header class="main-header main-header--two sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__left">
                        <div class="main-header__logo">
                            <a href={{ url('/') }}/>
                                <img src="assets/images/Logo_Tilling.png" alt="Floens HTML" width="125">
                            </a>
                        </div><!-- /.main-header__logo -->
                        <nav class="main-header__nav main-menu">
                            <ul class="main-menu__list">

                                <li>
                                    <a href={{ url('/') }}>Home</a>

                                </li>



                                <li>
                                    <a href={{ url('about') }}>About</a>
                                </li>

                                <li>
                                    <a href={{ url('services') }}>Services</a>

                                </li>






                            </ul>
                        </nav><!-- /.main-header__nav -->
                    </div><!-- /.main-header__left -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->


                        <a href={{ url('contact') }} class="floens-btn main-header__btn">
                            <span>Contact Us</span>
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.thm-btn main-header__btn -->
                        {{--  <button class="main-header__sidebar-btn sidebar-btn__toggler">
                            <span class="main-header__sidebar-btn__box"></span>
                            <span class="main-header__sidebar-btn__box"></span>
                            <span class="main-header__sidebar-btn__box"></span>
                        </button>  --}}
                    </div>
                </div>
            </div>
        </header>
