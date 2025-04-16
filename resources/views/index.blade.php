@include('partials.head');


<!-- #wrapper -->
<div id="wrapper">
    <!-- #page -->
    <div id="page">

        @include('partials.header');

        <!-- main-content -->
        <div class="main-content spacing-20">
    
    
            <!-- slider -->
            <section id="page-banner" class="slider home1">
                <div class="wrap-slider">
                    <div class="slider-item">
                        <div class="slider-content overlay">
                            <div class="cl-container">
                                <div class="row">
                                    <div class="col-12">
                                        <img class="logo-cropped" src="{{Vite:: asset('resources/images/logo/logo-cropped.png')}}" alt="">
                                        <h1 style="font-family: 'lumios-brush', sans-serif!important; font-weight: 100; font-size: 120px; line-height: 0.8; max-width: 100%" class=" wow fadeInUp" data-wow-delay="0.2s">Вашият мечтан дом на брега на морето!</h1>
                                        <a href="#" class="bsh--primary mt-5 btn btn-primary">Продажби</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video_wrap" style="display:none"><div id="player"></div></div>
            </section>
            <!-- /slider -->
             <div class="cl-container">
                <div class="row">
                    <div class="col-12">
                    <form class="form-search-home5 background-secondary wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="list">
                            <div class="group-form form-search-content">
                                <div class="form-style-has-title">
                                    <div class="title">ИД на имот</div>
                                    <div class="relative">
                                        <fieldset class="name">
                                            <input type="text" placeholder="Въведете ИД" class="show-search style-default" name="name" tabindex="2" value="" aria-required="true" required="">
                                        </fieldset>
                                        <div class="style-absolute-right">
                                            <div class="style-icon-default"><i class="flaticon-magnifiying-glass"></i></div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="divider-1"></div>
                            <div class="group-form">
                                <div class="form-style-has-title">
                                    <div class="title">Град</div>
                                    <div class="nice-select style-white" tabindex="0">
                                        <span class="current">Всички градове</span>
                                        <ul class="list style-radio">    
                                            <li data-value="For Sale" class="option selected">For Sale</li>
                                            <li data-value="For Ren" class="option">For Ren</li>
                                            <li data-value="Sold" class="option">Sold</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="divider-1"></div>
                            <div class="group-form">
                                <div class="form-style-has-title">
                                    <div class="title">Тип</div>
                                    <div class="nice-select style-white" tabindex="0">
                                        <span class="current">Всички</span>
                                        <ul class="list">    
                                            <li data-value="" class="option selected">All Type</li>
                                            <li data-value="Office" class="option">Office</li>
                                            <li data-value="Villa" class="option">Villa</li>
                                            <li data-value="Shop" class="option">Shop</li>
                                            <li data-value="Single Family" class="option">Single Family</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap10">
                        
                            <div class="group-form">
                                <div class="button-submit">
                                    <button class="" type="submit">Търси</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
             </div>
            
            <section class="tf-section flat-cities style-1">
                    <div class="cl-container full">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section heading-section-left text-left">
                                    <h2>Намерете имоти в тези градове</h2>
                                    <div class="text">Това е елементарен примерен текст който да покаже дизайна на сайта.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="wrap">
                                    <div class="swiper-container padding-bottom-80 pagination-style-2 slider-cities swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                        <div class="swiper-wrapper" id="swiper-wrapper-ce1110410acf993e47" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 9" style="width: 404px; margin-right: 25px;">
                                                <div class="cities-item style-2 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                                    <img src="{{Vite:: asset('resources/images/burgas.jpg')}}" alt="">
                                                    <div class="content">
                                                        <p>13 Имота</p>
                                                        <h4>Бургас</h4>
                                                    </div>
                                                    <a href="property-map-v1.html" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 9" style="width: 404px; margin-right: 25px;">
                                                <div class="cities-item style-2 wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                                    <img src="{{Vite:: asset('resources/images/sarafovo.jpg')}}" alt="">
                                                    <div class="content">
                                                        <p>55 Имота</p>
                                                        <h4>Сарафово</h4>
                                                    </div>
                                                    <a href="property-map-v1.html" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="3 / 9" style="width: 404px; margin-right: 25px;">
                                                <div class="cities-item style-2 wow fadeInUp animated" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                                    <img src="{{Vite:: asset('resources/images/nesebar.jpg')}}" alt="">
                                                    <div class="content">
                                                        <p>37 Имота</p>
                                                        <h4>Несебър</h4>
                                                    </div>
                                                    <a href="property-map-v1.html" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="4 / 9" style="width: 404px; margin-right: 25px;">
                                                <div class="cities-item style-2 wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                                    <img src="{{Vite:: asset('resources/images/sozopol.jpg')}}" alt="">
                                                    <div class="content">
                                                        <p>26 Имота</p>
                                                        <h4>Созопол</h4>
                                                    </div>
                                                    <a href="property-map-v1.html" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="5 / 9" style="width: 404px; margin-right: 25px;">
                                                <div class="cities-item style-2 wow fadeInUp animated" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                                    <img src="{{Vite:: asset('resources/images/sunnybeach.jpg')}}" alt="">
                                                    <div class="content">
                                                        <p>93 Имота</p>
                                                        <h4>Слънчев бряг</h4>
                                                    </div>
                                                    <a href="property-map-v1.html" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="6 / 9" style="width: 404px; margin-right: 25px;">
                                                <div class="cities-item style-2">
                                                    <img src="{{Vite:: asset('resources/images/pomorie.jpg')}}" alt="">
                                                    <div class="content">
                                                        <p>84 Имота</p>
                                                        <h4>Поморие</h4>
                                                    </div>
                                                    <a href="property-map-v1.html" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                                </div>
                                            </div>
                                        
                                        </div>
                                        <div class="swiper-pagination cities-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="tf-section flat-homes">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class=" wow fadeInUp" data-wow-delay="0.1s">Препоръчани имоти</h2>
                                    <div class="text wow fadeInUp" data-wow-delay="0.2s">Това е елементарен примерент текст който да покаже дизайна.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class=" arrow-style-1 arrow-over">
                                    <div class="swiper-container slider-homes">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="box-dream wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="image">
                                                        <div class="list-tags">
                                                            <a href="#" class="tags-item for-sell">НАЕМ</a>
                                                            <a href="#" class="tags-item featured">ПРЕПОРЪЧАНО</a>
                                                        </div>
                                                        <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                                        <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-1.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-2.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-3.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-4.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-pagination box-dream-pagination"></div>
                                                            <div class="box-dream-next swiper-button-next"></div>
                                                            <div class="box-dream-prev swiper-button-prev"></div>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="head">
                                                            <div class="title">
                                                                <a href="property-single-v1.html">Двустаен апартамент с гледка море</a>
                                                            </div>
                                                            <div class="price">800 лв</div>
                                                        </div>
                                                        <div class="location">
                                                            <div class="icon">
                                                                <i class="flaticon-location"></i>
                                                            </div>
                                                            <p>гр.Бургас</p>
                                                        </div>
                                                        <div class="icon-box">
                                                            <div class="item">
                                                                <i class="flaticon-hotel"></i>
                                                                <p>4 Спални</p>
                                                            </div>
                                                            <div class="item">
                                                                <i class="flaticon-bath-tub"></i>
                                                                <p>3 Бани</p>
                                                            </div>
                                                            <div class="item">
                                                                <i class="flaticon-minus-front"></i>
                                                                <p>90 кв.м.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box-dream wow fadeInUp" data-wow-delay="0.2s">
                                                    <div class="image">
                                                        <div class="list-tags">
                                                            <a href="#" class="tags-item for-sell">ПРОДАЖБА</a>
                                                        </div>
                                                        <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                                        <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite:: asset('resources/images/house/home-4.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-1.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-3.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-4.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-pagination box-dream-pagination"></div>
                                                            <div class="box-dream-next swiper-button-next"></div>
                                                            <div class="box-dream-prev swiper-button-prev"></div>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="head">
                                                            <div class="title">
                                                                <a href="property-single-v1.html">Триестаен апартамент в сърцето на Созопол</a>
                                                            </div>
                                                            <div class="price">815,000 €</div>
                                                        </div>
                                                        <div class="location">
                                                            <div class="icon">
                                                                <i class="flaticon-location"></i>
                                                            </div>
                                                            <p>гр. Созопол</p>
                                                        </div>
                                                        <div class="icon-box">
                                                            <div class="item">
                                                                <i class="flaticon-hotel"></i>
                                                                <p>4 Спални</p>
                                                            </div>
                                                            <div class="item">
                                                                <i class="flaticon-bath-tub"></i>
                                                                <p>3 Бани</p>
                                                            </div>
                                                            <div class="item">
                                                                <i class="flaticon-minus-front"></i>
                                                                <p>124 кв.м.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box-dream wow fadeInUp" data-wow-delay="0.3s">
                                                    <div class="image">
                                                        <div class="list-tags">
                                                            <a href="#" class="tags-item for-sell">ПРОДАЖБА</a>
                                                        </div>
                                                        <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                                        <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-2.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-2.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-1.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-4.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-pagination box-dream-pagination"></div>
                                                            <div class="box-dream-next swiper-button-next"></div>
                                                            <div class="box-dream-prev swiper-button-prev"></div>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="head">
                                                            <div class="title">
                                                                <a href="property-single-v1.html">Луксозна къща в Несебър</a>
                                                            </div>
                                                            <div class="price">200,000 €</div>
                                                        </div>
                                                        <div class="location">
                                                            <div class="icon">
                                                                <i class="flaticon-location"></i>
                                                            </div>
                                                            <p>гр. Несебър</p>
                                                        </div>
                                                        <div class="icon-box">
                                                            <div class="item">
                                                                <i class="flaticon-hotel"></i>
                                                                <p>4 Спални</p>
                                                            </div>
                                                            <div class="item">
                                                                <i class="flaticon-bath-tub"></i>
                                                                <p>3 Бани</p>
                                                            </div>
                                                            <div class="item">
                                                                <i class="flaticon-minus-front"></i>
                                                                <p>200 кв.м.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box-dream wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="image">
                                                        <div class="list-tags">
                                                            <a href="#" class="tags-item for-sell">НАЕМ</a>
                                                            <a href="#" class="tags-item featured">ПРЕПОРЪЧАНО</a>
                                                        </div>
                                                        <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                                        <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-1.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-2.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-3.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-4.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-pagination box-dream-pagination"></div>
                                                            <div class="box-dream-next swiper-button-next"></div>
                                                            <div class="box-dream-prev swiper-button-prev"></div>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="head">
                                                            <div class="title">
                                                                <a href="property-single-v1.html">Двустаен апартамент с гледка море</a>
                                                            </div>
                                                            <div class="price">800 лв</div>
                                                        </div>
                                                        <div class="location">
                                                            <div class="icon">
                                                                <i class="flaticon-location"></i>
                                                            </div>
                                                            <p>гр.Бургас</p>
                                                        </div>
                                                        <div class="icon-box">
                                                            <div class="item">
                                                                <i class="flaticon-hotel"></i>
                                                                <p>4 Спални</p>
                                                            </div>
                                                            <div class="item">
                                                                <i class="flaticon-bath-tub"></i>
                                                                <p>3 Бани</p>
                                                            </div>
                                                            <div class="item">
                                                                <i class="flaticon-minus-front"></i>
                                                                <p>90 кв.м.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box-dream wow fadeInUp" data-wow-delay="0.2s">
                                                    <div class="image">
                                                        <div class="list-tags">
                                                            <a href="#" class="tags-item for-sell">ПРОДАЖБА</a>
                                                        </div>
                                                        <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                                        <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite:: asset('resources/images/house/home-4.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-1.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-3.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="w-full">
                                                                        <img class="w-full" src="{{Vite::asset('resources/images/house/home-4.jpg')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-pagination box-dream-pagination"></div>
                                                            <div class="box-dream-next swiper-button-next"></div>
                                                            <div class="box-dream-prev swiper-button-prev"></div>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="head">
                                                            <div class="title">
                                                                <a href="property-single-v1.html">Триестаен апартамент в сърцето на Созопол</a>
                                                            </div>
                                                            <div class="price">815,000 €</div>
                                                        </div>
                                                        <div class="location">
                                                            <div class="icon">
                                                                <i class="flaticon-location"></i>
                                                            </div>
                                                            <p>гр. Созопол</p>
                                                        </div>
                                                        <div class="icon-box">
                                                            <div class="item">
                                                                <i class="flaticon-hotel"></i>
                                                                <p>4 Спални</p>
                                                            </div>
                                                            <div class="item">
                                                                <i class="flaticon-bath-tub"></i>
                                                                <p>3 Бани</p>
                                                            </div>
                                                            <div class="item">
                                                                <i class="flaticon-minus-front"></i>
                                                                <p>124 кв.м.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="homes-prev has-border swiper-button-prev"></div>
                                    <div class="homes-next has-border swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="tf-section luxury-home has-bg-vector-1">
                    <div class="cl-container">
                        <div class="row justify-between">
                            <div class="col-md-4">
                                <div class="image wow fadeInLeft">
                                    <img src="{{Vite::asset('resources/images/gabi.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 col-md-5">
                                <div class="content">
                                    <h2 class="wow fadeInUp">За БургасХоум</h2>
                                    <div class="text-content wow fadeInUp" data-wow-delay="0.1s">БУРГАС ХОУМ ЕООД оперира на българският пазар за недвижими имоти от 2011г. Предлагаме посредничество и консултация, при покупно-продажба, наемане, отдаване под наем, оценки и управление във всички сегменти на пазара на недвижими имоти. Ние помагаме на нашите клиенти да изберат подходящия имот, който да отговаря на техните изисквания.</div>
                                    <a href="#" class="tf-button-primary wow fadeInUp" data-wow-delay="0.15s">Научете още <i class="icon-arrow-right-add"></i></a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="counter flex justify-between items-center">
                                    <div class="number-counter">
                                        <div class="text-center">
                                            <span class="number" data-speed="2500" data-to="16" data-inviewport="yes">14</span>
                                        </div>
                                        <p>Години на Пазара на Имоти</p>
                                    </div>
                                    <div class="number-counter">
                                        <div class="text-center">
                                            <span class="number" data-speed="2500" data-to="26" data-inviewport="yes">130</span>
                                        </div>
                                        <p>Активни Имоти в Продажба</p>
                                    </div>
                                    <div class="number-counter">
                                        <div class="text-center">
                                            <span class="number" data-speed="2500" data-to="14" data-inviewport="yes">34</span>
                                        </div>
                                        <p>Активни Имоти За Наем</p>
                                    </div>
                                    <div class="number-counter">
                                        <div class="text-center">
                                            <span class="number" data-speed="2500" data-to="890" data-inviewport="yes">23</span>
                                        </div>
                                        <p>Луксозни имота</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="tf-section best-properties style-1 type-ffffff">
                    <div class="cl-container">  
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Луксозни имоти</h2>
                                    <div class="text wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Това е елементарен примерен текст който да покаже дизайна.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="inner">
                                    <div class="properties-slider item-1">
                                        <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                            <div class="swiper-wrapper" id="swiper-wrapper-5b91b3f9192b5684" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 2" style="width: 686px;">
                                                    <div class="w-full">
                                                        <img class="w-full" src="{{Vite::asset('resources/images/slider/slider-properties-1.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 2" style="width: 686px;">
                                                    <div class="w-full">
                                                        <img class="w-full" src="{{Vite::asset('resources/images/slider/slider-properties-2.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-dream-next has-background swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-5b91b3f9192b5684" aria-disabled="false"></div>
                                            <div class="box-dream-prev has-background swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-5b91b3f9192b5684" aria-disabled="true"></div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                    </div>
                                    <div class="properties-content-default item-2">
                                        <div class="number">20<span>+</span></div>
                                        <div class="text">Луксозни имоти</div>
                                        <p>Откриите широка гама луксозни имоти на морето и град Бургас</p>
                                        <a href="property-single-v1.html" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                    </div>
                                    <div class="video-wrap item-3">
                                        <img src="{{Vite::asset('resources/images/burgas.jpg')}}" alt="">
                                       
                                    </div>
                                    <div class="box-dream style-absolute type-no-bg-content style-properties item-4">
                                        <div class="image">
                                            <div class="list-tags">
                                                <a href="#" class="tags-item for-sell">ПРОДАЖБА</a>
                                                <a href="#" class="tags-item featured">ПРЕПОРЪЧАНО</a>
                                            </div>
                                            <img class="w-full" src="{{Vite::asset('resources/images/house/best-properties-1.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="head">
                                                <div class="title">
                                                    <a href="property-single-v1.html">Луксозна двуетажна вила в гр. Созопол</a>
                                                </div>
                                            </div>
                                            <div class="location">
                                                <div class="icon">
                                                    <i class="flaticon-location"></i>
                                                </div>
                                                <p>гр. Созопол. м-т Созополис</p>
                                            </div>
                                            <div class="flex flex-wrap justify-between items-center">
                                                <div class="price special-price">815,000 €</div>
                                                <div class="icon-box">
                                                    <div class="item">
                                                        <i class="flaticon-hotel"></i>
                                                        <p>4</p>
                                                    </div>
                                                    <div class="item">
                                                        <i class="flaticon-bath-tub"></i>
                                                        <p>3</p>
                                                    </div>
                                                    <div class="item">
                                                        <i class="flaticon-minus-front"></i>
                                                        <p>2660</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="property-single-v1.html" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <div class="space-20"></div>

        </div>
        <!-- /main-content -->

        
@include('partials.footer');