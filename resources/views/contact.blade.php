@include('partials.head')
<!-- #wrapper -->
<div id="wrapper">
    <!-- #page -->
    <div id="page">

        @include('partials.header');
 <!-- main-content -->
 <div class="main-content spacing-20">

<div class="wrap-map-v5">
    <div id="map-1" class="row-height" data-map-zoom="16" data-map-scroll="true"></div>
    <div class="grid-contact">
        <div class="contact-item wow fadeInUp">
            <div class="icon">
                <i class="flaticon-location-pin"></i>
            </div>
            <div class="content">
                <h4>Адрес</h4>
                <p>
                гр. Бургас, бул. Христо Ботев 63,<br> ет.2, 8000, България
                </p>
            </div>
            <div class="bot">
                <div class="text-content">Виж на картата</div>
            </div>
        </div>
        <div class="contact-item wow fadeInUp" data-wow-delay="0.1s">
            <div class="icon">
                <i class="flaticon-phone"></i>
            </div>
            <div class="content">
                <h4>Телефон</h4>
                <p>
                    +088 (246) 642-27-10
                </p>
            </div>
            <div class="bot">
                <a href="tel:" class="text-content">Обадете ни се</a>
            </div>
        </div>
        <div class="contact-item wow fadeInUp" data-wow-delay="0.2s">
            <div class="icon">
                <i class="flaticon-video-chat"></i>
            </div>
            <div class="content">
                <h4>Пишете ни</h4>
                <p>
                    office@burgashome.com
                </p>
            </div>
            <div class="bot">
                <a href="mailto:" class="text-content">Пишете ни</a>
            </div>
        </div>
    </div>
</div>

<!-- send-message -->
<section class="tf-section send-message">
    <div class="cl-container">
        <div class="row">
            <div class="col-12">
                <div class="heading-section text-center">
                    <h2 class="wow fadeInUp">Изпратете ни съобщение</h2>
                    <div class="text wow fadeInUp">Ще ви се обадим или отговорим в рамките на 1 работен ден.</div>
                </div>
            </div>
        </div>
        <div class="row justify-center">
            <div class="col-xxl-8">
                <form class="form-send-message">
                    <div class="cols">
                        <fieldset class="name wow fadeInUp has-top-title">
                            <input type="text" placeholder="Имена" class="" name="text" tabindex="2" value="" aria-required="true" required="">
                            <label for="">Имена</label>
                        </fieldset>
                        <fieldset class="phone wow fadeInUp has-top-title">
                            <input type="number" placeholder="Телефон" class="" name="phone" tabindex="2" value="" aria-required="true" required="">
                            <label for="">Телефон</label>
                        </fieldset>
                    </div>
                    <fieldset class="email wow fadeInUp has-top-title">
                        <input type="email" placeholder="Електронна поща" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                        <label for="">Електронна поща</label>
                    </fieldset>
                    <fieldset class="message wow fadeInUp has-top-title">
                        <textarea name="message" rows="4" placeholder="Вашето съобщение" class="" tabindex="2" aria-required="true" required=""></textarea>
                        <label for="">Вашето съобщение</label>
                  </fieldset>
                    <div class="checkbox-item wow fadeInUp">
                        <label>
                            <p>Съгласен съм моите данни да бъдат обработени.</p>
                            <input type="checkbox">
                            <span class="btn-checkbox"></span>
                        </label>
                    </div>
                    <div class="button-submit wow fadeInUp">
                        <button class="tf-button-primary w-full" type="submit">Изпращане<i class="icon-arrow-right-add"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /send-message -->


</div>
<!-- /main-content -->

@include('partials.footer')