   @include('layouts.headder')

        <!-- main slider start -->
        <section class="main-slider-two hero-slider">
            <div class="main-slider-two__carousel floens-slick__carousel--with-counter" data-slick-options='{
		"slidesToShow": 1,
		"slidesToScroll": 1,
		"autoplay": true,
		"autoplaySpeed": 3000,
		"fade": true,
		"speed": 2000,
		"infinite": true,
		"arrows": true,
		"dots": false,
		"prevArrow": "<button class=\"hero-slider__slick-button hero-slider__slick-button--prev\">Prev <i class=\"icon-right-arrow\"><i></button>",
		"nextArrow": "<button class=\"hero-slider__slick-button hero-slider__slick-button--next\">Next <i class=\"icon-right-arrow\"><i></button>"

	}'>

                <div class="main-slider-two__item">
                    <div class="main-slider-two__bg" style="background-image: url(assets/images/backgrounds/slider-2-2.jpg);"></div>
                    <!-- /.main-slider-two__bg -->
                    <div class="main-slider-two__wrapper container">
                        <div class="main-slider-two__left">
                            <div class="main-slider-two__content">
                                <p class="main-slider-two__tagline">Welcome to Tile Palace</p>
                                <!-- /.main-slider-two__tagline -->
                                <h2 class="main-slider-two__title">Precision Tiles <br> & best Flooring Solutions</h2>
                                <!-- /.main-slider-two__title -->
                                <a href={{ url('about') }} class="main-slider-two__btn floens-btn">
                                    <span>discover more</span>
                                    <i class="icon-right-arrow"></i>
                                </a><!-- /.main-slider-two__btn floens-btn -->
                            </div><!-- /.main-slider-two__content -->
                        </div><!-- /.main-slider-two__left -->
                        <div class="main-slider-two__right">
                            <div class="main-slider-two__image">
                            </div><!-- /.main-slider-two__image -->
                        </div><!-- /.main-slider-two__right -->
                    </div><!-- /.main-slider-two__wrapper .container -->
                </div><!-- /.main-slider-two__item -->


                <div class="main-slider-two__item">
                    <div class="main-slider-two__bg" style="background-image: url(assets/images/backgrounds/slider-2-2.jpg);"></div>
                    <!-- /.main-slider-two__bg -->
                    <div class="main-slider-two__wrapper container">
                        <div class="main-slider-two__left">
                            <div class="main-slider-two__content">
                                <p class="main-slider-two__tagline">Welcome to Tile Palace</p>
                                <!-- /.main-slider-two__tagline -->
                                <h2 class="main-slider-two__title">Precision Tiles <br> & best Flooring Solutions</h2>
                                <!-- /.main-slider-two__title -->
                                <a href={{ url('about') }} class="main-slider-two__btn floens-btn">
                                    <span>discover more</span>
                                    <i class="icon-right-arrow"></i>
                                </a><!-- /.main-slider-two__btn floens-btn -->
                            </div><!-- /.main-slider-two__content -->
                        </div><!-- /.main-slider-two__left -->
                        <div class="main-slider-two__right">
                            <div class="main-slider-two__image">
                            </div><!-- /.main-slider-two__image -->
                        </div><!-- /.main-slider-two__right -->
                    </div><!-- /.main-slider-two__wrapper .container -->
                </div><!-- /.main-slider-two__item -->


                <div class="main-slider-two__item">
                    <div class="main-slider-two__bg" style="background-image: url(assets/images/backgrounds/slider-2-3.jpg);"></div>
                    <!-- /.main-slider-two__bg -->
                    <div class="main-slider-two__wrapper container">
                        <div class="main-slider-two__left">
                            <div class="main-slider-two__content">
                                <p class="main-slider-two__tagline">Welcome to Tile Palace</p>
                                <!-- /.main-slider-two__tagline -->
                                <h2 class="main-slider-two__title">Precision Tiles <br> & best Flooring Solutions</h2>
                                <!-- /.main-slider-two__title -->
                                <a href={{ url('about') }} class="main-slider-two__btn floens-btn">
                                    <span>discover more</span>
                                    <i class="icon-right-arrow"></i>
                                </a><!-- /.main-slider-two__btn floens-btn -->
                            </div><!-- /.main-slider-two__content -->
                        </div><!-- /.main-slider-two__left -->
                        <div class="main-slider-two__right">
                            <div class="main-slider-two__image">
                            </div><!-- /.main-slider-two__image -->
                        </div><!-- /.main-slider-two__right -->
                    </div><!-- /.main-slider-two__wrapper .container -->
                </div><!-- /.main-slider-two__item -->
            </div><!-- /.my-slider -->
        </section><!-- /.main-slider-two -->
        <!-- main slider end -->

        <!-- services start -->
        <section class="services-two section-space-two">
            <div class="container">
                <div class="services-two__top">
                    <div class="row gutter-y-50 align-items-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="sec-title @@extraClassName">

                                <h6 class="sec-title__tagline">services</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">We Provides Best florring Services for you</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                        </div><!-- /.col-lg-8 -->
                    </div><!-- /.row -->
                </div><!-- /.services-two__top -->
            </div><!-- /.container -->
            <div class="container-fluid">
                <div class="services-two__carousel floens-owl__carousel floens-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
			"items": 1,
			"margin": 0,
			"loop": true,
			"smartSpeed": 700,
			"nav": true,
			"navText": ["<span class=\"icon-slide-left-arrow\"></span>","<span class=\"icon-slide-right-arrow\"></span>"],
			"dots": false,
			"autoplay": 600,
			"responsive":{
                "0":{
                    "items": 1,
                    "margin": 15
                },
				"576":{
                    "items": 1,
                    "margin": 15
                },
                "768":{
                    "items": 2,
                    "margin": 30
                },
                "992":{
                    "items": 2,
                    "margin": 30
                },
                "1200":{
                    "items": 3,
                    "margin": 30
                },
                "1400":{
                    "items": 3,
                    "margin": 30
                },
                "1600":{
                    "items": 4,
                    "margin": 30
                }
			}
		}'>
                    <div class="item">
                        <div class="service-card-two">
                            <div class="service-card-two__bg" style="background-image: url('assets/images/services/service-bg-2-1.png');"></div><!-- /.service-card-two__bg -->
                            <div class="service-card-two__image">
                                <img src="assets/images/services/service-2-1.jpg" alt="Tiling & concrete">
                            </div><!-- /.service-card-two__image -->
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title"><a href={{ url('services') }}>Tiling & concrete</a></h3><!-- /.service-card-two__title -->
                                <div class="service-card-two__bottom">
                                    <a href={{ url('services') }} class="service-card-two__link floens-btn">
                                        <span>service details</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                    <span class="service-card-two__icon icon-tile"></span>
                                </div><!-- /.service-card-two__bottom -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div><!-- /.item -->


                    <div class="item">
                        <div class="service-card-two">
                            <div class="service-card-two__bg" style="background-image: url('assets/images/services/service-bg-2-1.png');"></div><!-- /.service-card-two__bg -->
                            <div class="service-card-two__image">
                                <img src="assets/images/services/service-2-2.jpg" alt="Industrial Flooring">
                            </div><!-- /.service-card-two__image -->
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title"><a href={{ url('services') }}>Industrial Flooring</a></h3><!-- /.service-card-two__title -->
                                <div class="service-card-two__bottom">
                                    <a href={{ url('services') }} class="service-card-two__link floens-btn">
                                        <span>service details</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                    <span class="service-card-two__icon icon-parquet"></span>
                                </div><!-- /.service-card-two__bottom -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div><!-- /.item -->


                    <div class="item">
                        <div class="service-card-two">
                            <div class="service-card-two__bg" style="background-image: url('assets/images/services/service-bg-2-1.png');"></div><!-- /.service-card-two__bg -->
                            <div class="service-card-two__image">
                                <img src="assets/images/services/service-2-3.jpg" alt="Vinyl Plank">
                            </div><!-- /.service-card-two__image -->
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title"><a href={{ url('services') }}>Vinyl Plank</a></h3><!-- /.service-card-two__title -->
                                <div class="service-card-two__bottom">
                                    <a href={{ url('services') }} class="service-card-two__link floens-btn">
                                        <span>service details</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                    <span class="service-card-two__icon icon-tiles"></span>
                                </div><!-- /.service-card-two__bottom -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div><!-- /.item -->
                    <div class="item">


                        <div class="service-card-two">
                            <div class="service-card-two__bg" style="background-image: url('assets/images/services/service-bg-2-1.png');"></div><!-- /.service-card-two__bg -->
                            <div class="service-card-two__image">
                                <img src="assets/images/services/service-2-4.jpg" alt="Carpets & rugs">
                            </div><!-- /.service-card-two__image -->
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title"><a href={{ url('services') }}>Carpets & rugs</a></h3><!-- /.service-card-two__title -->
                                <div class="service-card-two__bottom">
                                    <a href={{ url('services') }} class="service-card-two__link floens-btn">
                                        <span>service details</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                    <span class="service-card-two__icon icon-carpet"></span>
                                </div><!-- /.service-card-two__bottom -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div><!-- /.item -->


                    <div class="item">
                        <div class="service-card-two">
                            <div class="service-card-two__bg" style="background-image: url('assets/images/services/service-bg-2-1.png');"></div><!-- /.service-card-two__bg -->
                            <div class="service-card-two__image">
                                <img src="assets/images/services/service-2-5.jpg" alt="Oak Flooring">
                            </div><!-- /.service-card-two__image -->
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title"><a href={{ url('services') }}>Oak Flooring</a></h3><!-- /.service-card-two__title -->
                                <div class="service-card-two__bottom">
                                    <a href={{ url('services') }}class="service-card-two__link floens-btn">
                                        <span>service details</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                    <span class="service-card-two__icon icon-wood-board"></span>
                                </div><!-- /.service-card-two__bottom -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div><!-- /.item -->


                    <div class="item">
                        <div class="service-card-two">
                            <div class="service-card-two__bg" style="background-image: url('assets/images/services/service-bg-2-1.png');"></div><!-- /.service-card-two__bg -->
                            <div class="service-card-two__image">
                                <img src="assets/images/services/service-2-6.jpg" alt="Vein Patterns">
                            </div><!-- /.service-card-two__image -->
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title"><a href={{ url('services') }}>Vein Patterns</a></h3><!-- /.service-card-two__title -->
                                <div class="service-card-two__bottom">
                                    <a href={{ url('services') }} class="service-card-two__link floens-btn">
                                        <span>service details</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                    <span class="service-card-two__icon icon-stones"></span>
                                </div><!-- /.service-card-two__bottom -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div><!-- /.item -->
                </div><!-- /.services-two__carousel -->
            </div><!-- /.container-fluid -->
        </section><!-- /.services-two section-space-two -->
        <!-- services end -->


        <!-- expertise start -->
        <section class="expertise-one section-space">
            <div class="container">
                <div class="row gutter-y-50">
                    <div class="col-lg-6">
                        <div class="expertise-one__content">
                            <div class="sec-title sec-title--border">

                                <h6 class="sec-title__tagline">expertise</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">Expert Flooring <br> Installers your home</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->


                            <p class="expertise-one__text">Eleifend ut diam a, vulputate aliquam diam. Pellentesque consequat
                                orci
                                neque, ut luctus enim vehicula nec. Ut auctor lobortis sapien et eleifend. Integer ac orci vitae
                                neque porttitor efficitur</p><!-- /.expertise-one__text -->
                            <div class="expertise-one__progress">
                                <div class="progress-box">
                                    <h4 class="progress-box__title">Hardwood Floor Repair</h4><!-- /.progress-box__title -->
                                    <div class="progress-box__bar">
                                        <div class="progress-box__bar__inner count-bar" data-percent='90%'>
                                            <div class="progress-box__number count-text">90%</div>
                                        </div>
                                    </div><!-- /.progress-box__bar -->
                                </div><!-- /.progress-box -->
                                <div class="progress-box">
                                    <h4 class="progress-box__title">Custom projects with unique designs</h4><!-- /.progress-box__title -->
                                    <div class="progress-box__bar">
                                        <div class="progress-box__bar__inner count-bar" data-percent='70%'>
                                            <div class="progress-box__number count-text">70%</div>
                                        </div>
                                    </div><!-- /.progress-box__bar -->
                                </div><!-- /.progress-box -->
                                <div class="progress-box">
                                    <h4 class="progress-box__title">We bring our showroom</h4><!-- /.progress-box__title -->
                                    <div class="progress-box__bar">
                                        <div class="progress-box__bar__inner count-bar" data-percent='96%'>
                                            <div class="progress-box__number count-text">96%</div>
                                        </div>
                                    </div><!-- /.progress-box__bar -->
                                </div><!-- /.progress-box -->
                            </div><!-- /.expertise-one__progress -->
                        </div><!-- /.expertise-one__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="expertise-one__images-grid">
                            <div class="expertise-one__image expertise-one__image--one">
                                <img src="assets/images/expertise/expertise-1-1.jpg" alt="expertise">
                            </div><!-- /.expertise-one__image -->
                            <div class="expertise-one__image expertise-one__image--two">
                                <img src="assets/images/expertise/expertise-1-2.jpg" alt="expertise">
                            </div><!-- /.expertise-one__image -->
                            <div class="expertise-one__image expertise-one__image--three">
                                <img src="assets/images/expertise/expertise-1-3.jpg" alt="expertise">
                            </div><!-- /.expertise-one__image -->
                        </div><!-- /.expertise-one__images-grid -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.expertise-one section-space -->
        <!-- expertise end -->




        <!-- faq start -->
        <section class="faq-one section-space">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="faq-one__image">
                            <div class="faq-one__image__inner">
                                <img src="assets/images/faq/faq-1-1.jpg" alt="faq" class="faq-one__image__one">
                                <img src="assets/images/faq/faq-1-2.jpg" alt="faq" class="faq-one__image__two">
                            </div><!-- /.faq-one__image__inner -->
                        </div><!-- /.faq-one__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="faq-one__content">
                            <div class="sec-title sec-title--border">

                                <h6 class="sec-title__tagline">Our FAQ</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">Frequently Asked <br> Questions ?</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->


                            <p class="faq-one__text">Mollis massa turpis, eu sodales sem maximus ut. Nullam condimentum eget arcu nec dapibus. Nullam tincidunt ex ut tempus malesuada.</p><!-- /.faq-one__text -->
                            <div class="faq-accordion floens-accordion" data-grp-name="floens-accordion">
                                <div class="accordion active">
                                    <div class="accordion-title">
                                        <h4>
                                            What types of tiles are available from a tiles company?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the
                                                end of the day, going forward, a new normal that has evolved from generation X is on
                                                the</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accordion">
                                    <div class="accordion-title">
                                        <h4>
                                            How do I choose the right tiles for my project?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the
                                                end of the day, going forward, a new normal that has evolved from generation X is on
                                                the</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accordion">
                                    <div class="accordion-title">
                                        <h4>
                                            Are there eco-friendly tile options available?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the
                                                end of the day, going forward, a new normal that has evolved from generation X is on
                                                the</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                            </div>
                        </div><!-- /.faq-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.faq-one section-space -->
        <!-- faq end -->


  @include('layouts.footer')

  @include('layouts.mobile-slider')

    <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendors/swiper/js/swiper-bundle.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <!-- template js -->
    <script src="assets/js/floens.js"></script>
</body>


</html>
