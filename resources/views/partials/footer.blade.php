<!-- footer -->
<footer class="footer">
            <div class="footer-inner">
                <div class="footer-inner-wrap">
                    <div class="top-footer">
                        <div class="logo-footer">
                            <a href="/">
                                <img id="logo-footer" src="{{ Vite::asset('resources/images/logo/logo-white-bshome.png') }}" alt="images" >
                            </a>
                        </div>
                        <div class="wg-social">
                            <span>Follow Us</span>
                            <ul class="list-social">
                                <li>
                                    <a href="#">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-linkedin2"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="center-footer">
                    
                        <div class="footer-cl-2">
                            <div class="ft-title">Discover</div>
                            <ul class="navigation-menu-footer">
                                <li><a href="property-map-v1.html">Miami</a></li>
                                <li><a href="property-map-v1.html">New York</a></li>
                                <li><a href="property-map-v1.html">Chicago</a></li>
                                <li><a href="property-map-v1.html">Sacramento</a></li>
                                <li><a href="property-map-v1.html">Los Angeles</a></li>
                                <li><a href="property-map-v1.html">San Francisco</a></li>
                            </ul>
                        </div>
                        <div class="footer-cl-3">
                            <div class="ft-title">Quick Links</div>
                            <ul class="navigation-menu-footer">
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="blog-list-v1.html">Blog</a></li>
                                <li><a href="pricing.html">Pricing Plans</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                        <div class="footer-cl-4">
                            <div class="ft-title">Contact Us</div>
                            <ul class="navigation-menu-footer">
                                <li><div class="text">hi@justhome.com (123) 456-7890</div></li>
                            </ul>
                        </div>
                        <div class="footer-cl-5">
                            <div class="ft-title">Our Address</div>
                            <ul class="navigation-menu-footer">
                                <li><div class="text">90 Fifth Avenue, 3rd Floor San Francisco, CA 1980</div></li>
                            </ul>
                        </div>
                    
                    </div>
                    <div class="bottom-footer">
                        <div class="text">Copyright © 2024. JustHome</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /footer -->

    </div>
    <!-- /#page -->
</div>
<!-- /#wrapper -->

<!-- go top button -->
<div class="progress-wrap active-progress">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
    </svg>
</div>
<!-- /go top button -->

<!-- login-popup -->
<div class="modal fade modalCenter" id="modallogin">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-sm">
            <a href="#" class="btn-hide-modal" data-bs-dismiss="modal"><i class="icon-close"></i></a>
            <div class="image-left">
                <img src="images/section/login.jpg" alt="">
                <h3>Welcome to Your Real Estate Website</h3>
            </div>  
            <div class="content-right">
                <h4>Sign into your account</h4>
                <form class="form-login">
                    <fieldset class="name">
                        <input type="text" placeholder="Username" class="" name="text" tabindex="2" value="creative" aria-required="true" required="">
                    </fieldset>
                    <fieldset class="password">
                        <input type="password" placeholder="Password" class="" name="password" tabindex="2" value="" aria-required="true" required="">
                    </fieldset>
                    <div class="flex items-center justify-between w-full">
                        <div class="checkbox-item">
                            <label>
                                <p>Remember me</p>
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label>
                        </div>
                        <a href="#" class="lost-password">Lost your password?</a>
                    </div>
                    <div class="button-submit w-full">
                        <button class="tf-button-primary w-full" type="submit">Login<i class="icon-arrow-right-add"></i></button>
                    </div>
                </form>
                <div class="flex items-center justify-center">
                    <p>Not a member?</p>
                    <a href="#" class="btn-show-register" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modalregister">Register here</a>
                </div>
                <ul class="wg-social-1">
                    <li><a href="#"><i class="flaticon-google"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /login-popup -->

<!-- register-popup -->
<div class="modal fade modalCenter" id="modalregister">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-sm">
            <a href="#" class="btn-hide-modal" data-bs-dismiss="modal"><i class="icon-close"></i></a>
            <div class="image-left">
                <img src="images/section/login.jpg" alt="">
                <h3>Welcome to Your Real Estate Website</h3>
            </div>
            <div class="content-right">
                <h4>Create an account</h4>
                <form class="form-login">
                    <fieldset class="name">
                        <input type="text" placeholder="Username" class="" name="text" tabindex="2" value="" aria-required="true" required="">
                    </fieldset>
                    <fieldset class="email">
                        <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                    </fieldset>
                    <fieldset class="password">
                        <input type="password" placeholder="Password" class="" name="password" tabindex="2" value="" aria-required="true" required="">
                    </fieldset>
                    <fieldset class="password">
                        <input type="password" placeholder="Retype Password" class="" name="password" tabindex="2" value="" aria-required="true" required="">
                    </fieldset>
                    <div class="flex items-center justify-between">
                        <div class="checkbox-item">
                            <label>
                                <p>I agree with terms & conditions</p>
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label>
                        </div>
                    </div>
                    <div class="button-submit">
                        <button class="tf-button-primary w-full" type="submit">Register<i class="icon-arrow-right-add"></i></button>
                    </div>
                </form>
                <div class="flex items-center justify-center">
                    <p>Have an account?</p>
                    <a href="#" class="btn-show-register" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modallogin">Log in</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /register-popup -->
<script type="text/javascript" src="{{ Vite::asset('resources/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ Vite::asset('resources/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ Vite::asset('resources/js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ Vite::asset('resources/js/swiper-bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ Vite::asset('resources/js/rangle-slider.js') }}"></script>
<script type="text/javascript" src="{{ Vite::asset('resources/js/mmenu.js') }}"></script>
<script type="text/javascript" src="{{ Vite::asset('resources/js/swiper.js') }}"></script>
<script type="text/javascript" src="{{ Vite::asset('resources/js/scrollmagic.js') }}"></script>
<script type="text/javascript" src="{{ Vite::asset('resources/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ Vite::asset('resources/js/jquery-background-video.js') }}"></script>
<script type="text/javascript" src="{{ Vite::asset('resources/js/main.js') }}"></script>
<script>
    new Mmenu(document.querySelector("#menu"));
</script>
<script>
    $(document).ready(function(){
	$('.my-background-video').bgVideo();
});
</script>

</body>
</html>