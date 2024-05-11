@include('layouts.headder')


        <section class="page-header">
            <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.png');"></div><!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title">Contact Us</h2>
                <ul class="floens-breadcrumb list-unstyled">
                    <li><i class="icon-home"></i> <a href={{ url('/') }}>Home</a></li>
                    <li><span>Contact Us</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-one section-space">
            <div class="contact-one__bg" style="background-image: url('assets/images/backgrounds/contact-bg-1.png');"></div><!-- /.contact-one__bg -->
            <div class="container">
                <div class="row gutter-y-40">
                    <div class="col-lg-6">
                        <div class="contact-one__content">
                            <div class="sec-title sec-title--border">

                                <h6 class="sec-title__tagline">contact</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">Reach out & <br> Connect with Us</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->


                            <p class="contact-one__text">Our vision is to provide innovative, independent flooring solutions that solve problems for homes, industries, and workspaces, as well as flooring we would like in our own residences, work spaces,</p><!-- /.contact-one__text -->
                            <div class="contact-one__info wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <div class="contact-one__info__bg" style="background-image: url('assets/images/shapes/contact-info-bg.png');"></div><!-- /.contact-one__info__bg -->
                                <div class="contact-one__info__content">
                                    <div class="contact-one__info__item">
                                        <div class="contact-one__info__item__inner">
                                            <div class="contact-one__info__icon">
                                                <span class="icon-phone-call"></span>
                                            </div><!-- /.contact-one__info__icon -->
                                            <p class="contact-one__info__text"><a href="tel:+9100305640669">+91 0030 5640 669</a></p><!-- /.contact-one__info__text -->
                                        </div><!-- /.contact-one__info__item__inner -->
                                    </div><!-- /.contact-one__info__item -->
                                    <div class="contact-one__info__item">
                                        <div class="contact-one__info__item__inner">
                                            <div class="contact-one__info__icon">
                                                <span class="icon-paper-plane"></span>
                                            </div><!-- /.contact-one__info__icon -->
                                            <p class="contact-one__info__text"><a href="mailto:needhelp@company.com">needhelp@company.com</a></p><!-- /.contact-one__info__text -->
                                        </div><!-- /.contact-one__info__item__inner -->
                                    </div><!-- /.contact-one__info__item -->
                                    <div class="contact-one__info__item">
                                        <div class="contact-one__info__item__inner">
                                            <div class="contact-one__info__icon">
                                                <span class="icon-location"></span>
                                            </div><!-- /.contact-one__info__icon -->
                                            <address class="contact-one__info__text"><a href="https://www.google.com/maps/@23.506657,90.3443647,7z?entry=ttu">85 Ketch Harbour Road Bensal, PA 19020</a></address><!-- /.contact-one__info__text -->
                                        </div><!-- /.contact-one__info__item__inner -->
                                    </div><!-- /.contact-one__info__item -->
                                </div><!-- /.contact-one__info__content -->
                                <img src="assets/images/shapes/contact-shape-1-1.png" alt="contact image" class="contact-one__info__image">
                            </div><!-- /.contact-one__info -->
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-xl-6 -->
                    <div class="col-lg-6">
                        <form class="contact-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms" action="https://bracketweb.com/floens-html/inc/sendemail.php">
                            <div class="contact-one__form__bg" style="background-image: url('assets/images/shapes/contact-info-form-bg.png');"></div><!-- /.contact-one__form__bg -->
                            <div class="contact-one__form__top">
                                <h2 class="contact-one__form__title">Get In Touch With Us And Enjoy <br>
                                    Top-Notch Support</h2><!-- /.contact-one__form__title -->
                            </div><!-- /.contact-one__form__top -->
                            <div class="form-one__group form-one__group--grid">
                                <div class="form-one__control form-one__control--input form-one__control--full">
                                    <input type="text" name="name" placeholder="Your name">
                                </div><!-- /.form-one__control form-one__control--full -->
                                <div class="form-one__control form-one__control--full">
                                    <input type="email" name="email" placeholder="your email">
                                </div><!-- /.form-one__control form-one__control--full -->
                                {{--  <div class="form-one__control form-one__control--full">
                                    <select class="selectpicker" aria-label="Choose service">
                                        <option selected>Choose service</option>
                                        <option value="1">Tiling & concrete</option>
                                        <option value="2">Industrial Flooring</option>
                                        <option value="3">Vinyl Plank</option>
                                        <option value="4">Carpets & rugs</option>
                                        <option value="5">Oak Flooring</option>
                                        <option value="6">Vein Patterns</option>
                                    </select>
                                </div><!-- /.form-one__control form-one__control--full -->  --}}
                                <div class="form-one__control form-one__control--mesgae form-one__control--full">
                                    <textarea name="message" placeholder="Write message"></textarea><!-- /# -->
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <button type="submit" class="floens-btn">
                                        <span>send message</span>
                                        <i class="icon-right-arrow"></i>
                                    </button>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.form-one__group -->
                        </form>
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <img src="assets/images/contact/contact-1-2.jpg" alt="contact image" class="contact-one__image-two wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="00ms">
        </section><!-- /.contact-one section-space -->

        <section class="contact-map">
            <div class="container-fluid">
                <div class="google-map google-map__contact">
                   <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15867.880089191445!2d80.15565007756692!3d6.134730236184015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae177429775531b%3A0x977fff5752fed056!2sLelkada!5e0!3m2!1sen!2slk!4v1712574191796!5m2!1sen!2slk" class="map__contact" allowfullscreen></iframe>


                </div><!-- /.google-map -->
            </div><!-- /.container-fluid -->
        </section><!-- /.contact-map -->

@include('layouts.footer')

@include('layouts.mobile-slider')



    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="floens-btn">
                    <span class="icon-search"></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->
    <aside class="sidebar-one">
        <div class="sidebar-one__overlay sidebar-btn__toggler"></div><!-- /.siderbar-ovarlay -->
        <div class="sidebar-one__content">
            <span class="sidebar-one__close sidebar-btn__toggler"><i class="fa fa-times"></i></span>
            <div class="sidebar-one__logo sidebar-one__item">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="123" alt="logo-dark" /></a>
            </div><!-- /.sidebar-one__logo -->
            <div class="sidebar-one__about sidebar-one__item">
                <p class="sidebar-one__about__text">Tiles company, also known as a tile manufacturer or distributor, specializes in the production and distri</p>
            </div><!-- /.sidebar-one__about -->
            <div class="sidebar-one__info sidebar-one__item">
                <h4 class="sidebar-one__title">Information</h4>
                <ul class="sidebar-one__info__list">
                    <li><span class="icon-location-2"></span>
                        <address>85 Ketch Harbour Road Bensal PA 19020</address>
                    </li>
                    <li><span class="icon-paper-plane"></span> <a href="mailto:needhelp@company.com">needhelp@company.com</a></li>
                    <li><span class="icon-phone-call"></span> <a href="tel:+9156980036420">+91 5698 0036 420</a></li>
                </ul><!-- /.sidebar-one__info__list -->
            </div><!-- /.sidebar-one__info -->
            <div class="sidebar-one__social floens-social sidebar-one__item">
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
            </div><!-- /sidebar-one__social -->
            <div class="sidebar-one__newsletter sidebar-one__item">
                <label class="sidebar-one__title" for="sidebar-email">Newsletter Subscribe</label>
                <form action="#" class="sidebar-one__newsletter__inner mc-form" data-url="MAILCHIMP_FORM_URL">
                    <input type="email" name="sidebar-email" id="sidebar-email" class="sidebar-one__newsletter__input" placeholder="Email Address">
                    <button type="submit" class="sidebar-one__newsletter__btn"><span class="icon-email" aria-hidden="true"></span></button>
                </form>
                <div class="mc-form__response"></div><!-- /.mc-form__response -->
            </div><!-- /.sidebar-one__form -->
        </div><!-- /.sidebar__content -->
    </aside><!-- /.sidebar-one -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>

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


<!-- Mirrored from bracketweb.com/floens-html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Dec 2023 06:59:48 GMT -->
</html>
