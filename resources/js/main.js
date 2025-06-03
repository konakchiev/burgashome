/**
    *   
    * tabs
    * box_search
    * btn_filter
    * video
    * counter
    * flatAccordion
    * curvedtext
    * icon_function
    * btnQuantity
    * progresslevel
    * headerFixed
    * retinaLogos
    * dashboard
    * gotop
    * sticky
    * email
    * preloader
    * 
*/

; (function ($) {

  "use strict";

  var tabs = function(){
    $('.widget-tabs').each(function(){
        $(this).find('.widget-content-tab').children().hide();
        $(this).find('.widget-content-tab').children(".active").show();
        $(this).find('.widget-menu-tab').children('.item-title').on('click',function(){
            var liActive = $(this).index();
            var contentActive=$(this).siblings().removeClass('active').parents('.widget-tabs').find('.widget-content-tab').children().eq(liActive);
            contentActive.addClass('active').fadeIn("slow");
            contentActive.siblings().removeClass('active');
            $(this).addClass('active').parents('.widget-tabs').find('.widget-content-tab').children().eq(liActive).siblings().hide();
        });
    });
    $('.widget-tabs-1').each(function(){
      $(this).find('.widget-content-tab-1').children().hide();
      $(this).find('.widget-content-tab-1').children(".active-1").show();
      $(this).find('.widget-menu-tab-1').children('.item-title-1').on('click',function(){
          var liActive = $(this).index();
          var contentActive=$(this).siblings().removeClass('active-1').parents('.widget-tabs-1').find('.widget-content-tab-1').children().eq(liActive);
          contentActive.addClass('active-1').fadeIn("slow");
          contentActive.siblings().removeClass('active-1');
          $(this).addClass('active-1').parents('.widget-tabs-1').find('.widget-content-tab-1').children().eq(liActive).siblings().hide();
      });
  });
  };

  var box_search=function(){
        
    $(document).on('click',function(e){
      var clickID=e.target.id;if((clickID!=='s')){
          $('.box-content-search').removeClass('active');
      }});
    $(document).on('click',function(e){
        var clickID=e.target.class;if((clickID!=='a111')){
            $('.show-search').removeClass('active');
    }});
        
    $('.show-search').on('click',function(event){
      event.stopPropagation();}
    );
    $('.box-content-search').on('click',function(event){
      event.stopPropagation();}
    );

    $('.show-search').on('click',function(event){
      $('.box-content-search').addClass('active');
    })
   
  }

  var btn_filter=function(){
        
    $('.btn-filter').on('click',function(){
      var box =  $(this).closest('.wg-filter').find('.open-filter');
      var btn =  $(this).closest('.wg-filter').find('.btn-filter');
      if(!box.hasClass("active")){
        box.addClass('active');
      }
      else box.removeClass('active');
      if(!btn.hasClass("active"))
        btn.addClass('active');
      else
        btn.removeClass('active'); 
    })

    $(document).on(
      "click",
      function (a) {
        if ( $(a.target).closest(".wg-filter").length === 0 ) {
          $('.wg-filter').find('.open-filter').removeClass("active");
          $('.wg-filter').find('.btn-filter').removeClass("active");
        }
      }
    );

  }

  var video = function(){
    if ($('div').hasClass('video-wrap')) {
      $('.popup-youtube').magnificPopup({
        type: 'iframe'
      });
    }
  };

  var counter = function (){

  };


  var flatAccordion = function (class1,class2) {
    var args = { duration: 400 };

    $(class2 + ' .toggle-title.active').siblings('.toggle-content').show();
    $(class1 +' .toggle-title').on('click', function () {
        $(class1 + ' ' + class2).removeClass('active');
        $(this).closest(class2).toggleClass('active');

        if( !$(this).is('.active') ) {
            $(this).closest(class1).find('.toggle-title.active').toggleClass('active').next().slideToggle(args);
            $(this).toggleClass('active');
            $(this).next().slideToggle(args);
        } else {
            $(class1 + ' ' + class2).removeClass('active');
            $(this).toggleClass('active');
            $(this).next().slideToggle(args);
        }     
    });
  };

  var curvedtext = function () {
    if ($('div').hasClass('curved-text')) {
      var demo = new CircleType(document.getElementById('curved-text')).radius(0);
    }
  }

  var icon_function = function () {
    $(".delete-btns").on("click", function (e) {
      $(this).parents(".item").remove();
    })
  }

  var btnQuantity = function () {
    $(".minus-btn").on("click", function (e) {
      e.preventDefault();
      var $this = $(this);
      var $input = $this.closest("div").find("input");
      var value = parseInt($input.val());

      if (value > 1) {
        value = value - 1;
      }

      $input.val(value);
    });

    $(".plus-btn").on("click", function (e) {
      e.preventDefault();
      var $this = $(this);
      var $input = $this.closest("div").find("input");
      var value = parseInt($input.val());

      if (value > 0) {
        value = value + 1;
      }

      $input.val(value);
    });
  };

  var progresslevel = function () {
    if ($('div').hasClass('progress-bars')) {
    var bars = document.querySelectorAll('.progress-bars-line > div');
    setInterval(function(){
    bars.forEach(function(bar){
      var t1 = parseFloat(bar.dataset.progress);
      var t2 = parseFloat(bar.dataset.max);
      var getWidth = ( t1 / t2) * 100;
      bar.style.width = getWidth + '%';
    });
    }, 500);
  }}



  var dashboard = function() {
    if ($('body').hasClass('dashboard')) {
        $('.btn-canvas').on('click', function () {
            $(this).toggleClass('active');
            $(this).closest('#page').find('.section-content-right').toggleClass('full');
            $(this).closest('#page').find('.section-menu-left').toggleClass('null');
        });
    }
  }

  var gotop = function() {
    if ($('div').hasClass('progress-wrap')) {
      var progressPath = document.querySelector('.progress-wrap path');
      var pathLength = progressPath.getTotalLength();
      progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
      progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
      progressPath.style.strokeDashoffset = pathLength;
      progressPath.getBoundingClientRect();
      progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
      var updateprogress = function() {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLength - (scroll * pathLength / height);
        progressPath.style.strokeDashoffset = progress;
      }
      updateprogress();
      $(window).scroll(updateprogress);
      var offset = 150;
      var duration = 300;
      jQuery(window).on('scroll', function() {
        if (jQuery(this).scrollTop() > offset) {
          jQuery('.progress-wrap').addClass('active-progress');
        } else {
          jQuery('.progress-wrap').removeClass('active-progress');
        }
      });
      jQuery('.progress-wrap').on('click', function(event) {
        event.preventDefault();
        jQuery('html, body').animate({ scrollTop: 0 }, duration);
        return false;
      })
  }}

  var sticky = function () {
    if ($('div').hasClass('sticky-container')) {
      var sticky = new Sticky('.po-sticky');
    }
  }

  var email = function () {
    if ($('fieldset').hasClass('email')) {
     
      var input =  $('form').find('input[type=email]');
      input.on('input', function() {
        if ($(this).val().trim() !== '') {
          $(this).addClass('has-value');
        } else {
          $(this).removeClass('has-value');
        }
      });

    }
  }

  var preloader = function () {
    setTimeout(function () {
      $(".preload-container").fadeOut("slow", function () {
          $(this).remove();
      });
    }, 1500);
  };

  $(".tf-select-label select").focus(function () {
    $(this).parents(".tf-select-label").addClass("focused");
  });

  $(".tf-select-label select").blur(function () {
      var inputValue = $(this).val();
      if (inputValue == "") {
          $(this).removeClass("filled");
          $(this).parents(".tf-select-label").removeClass("focused");
      } else {
          $(this).addClass("filled");
      }
  });
  $(".tf-select-label select").each(function () {
      if (this.value) {
          $(this).parents(".tf-select-label").addClass("focused");
          $(this).addClass("filled");
      }
  });

  var dropOptionForm = function () {
    if ($("select").length > 0) {
      $(
        "select:not(.default)"
      ).niceSelect();
    }
  };



  // Dom Ready
  $(function () {
   
    tabs();
    box_search();
    btn_filter();
    video();
    counter();
    flatAccordion('.flat-accordion','.flat-toggle');
    curvedtext();
    icon_function();
    btnQuantity();
    progresslevel();
    dashboard();
    gotop();
    sticky();
    email();
    dropOptionForm();
    preloader();
    
  });

  new Mmenu(document.querySelector("#menu"));



  jQuery('[data-vbg]').youtube_background({
    'autoplay':true,
    'start-at': 51,
    'end-at': 200

  });
})(jQuery);


function loadGoogleMaps(apiKey) {
  const script = document.createElement('script');
  script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCe0H-2EPcN_rf0o6sq-h0Cg7Inv9R594I&callback=initMap';
  script.async = true;
  document.head.appendChild(script);
}

function initMap() {
  const map = new google.maps.Map(document.getElementById("map-1"), {
    center: { lat: 42.6977, lng: 23.3219 }, // Example: Sofia, Bulgaria
    zoom: 12,
  });

  // Optional marker
  new google.maps.Marker({
    position: { lat: 42.6977, lng: 23.3219 },
    map: map,
    title: "Sofia",
  });
}

// Expose globally for the Google Maps API callback
window.initMap = initMap;

loadGoogleMaps();

console.log('all loaded');