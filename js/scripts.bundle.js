"use strict";

(function($) {
    var ScriptsBundle = ScriptsBundle || {};
    var $window = $(window);
    // var position = $(window).scrollTop();

    $(function() {
        ScriptsBundle = {
            init: function() {
                ScriptsBundle.scrollAnimation();
                ScriptsBundle.scrollToTop();
                //ScriptsBundle.menutoggle();
                ScriptsBundle.firmsBrands();
                ScriptsBundle.accordion();
                ScriptsBundle.responsiveTabs();
                ScriptsBundle.sliderBanner();
                ScriptsBundle.popupModal();
            },
            scrollAnimation: function() {
                if ($window.scrollTop() >= 200) {
                    $(".scroll__top").fadeIn("slow");
                } else {
                    $(".scroll__top").fadeOut("slow");
                }
                $('textarea')
                    .focus(function() {
                        $(this).addClass('fixed-height');
                        $(this).removeClass('normal-height');
                    })
                    .blur(function() {
                        if ($(this)[0].value == '') {
                            $(this).addClass('normal-height');
                            $(this).removeClass('fixed-height');
                        }
                    });
            },
        
            scrollToTop: function() {
                $(".scroll__top").click(function() {
                    $("html, body").animate({ scrollTop: 0 }, 500);
                    return false;
                });
            },

            menutoggle: function() {
                if (jQuery("#site-navigation").length === 0) {
                    return false;
                }
                jQuery(".menu-toggle").on("click", function() {
                    jQuery("body").toggleClass("nav-on");
                    return false;
                });

                // $(".menu-item-has-children .sub-menu a").click(function(event) {
                //     event.stopPropagation();
                // });
            },

            firmsBrands: function() {  
                $(".memberfirm__brands").owlCarousel({
                  margin: 0,
                  loop: true,
                  nav: true,
                  dots: true,
                  autoHeight: true,
                  responsiveClass: true,
                  smartSpeed: 1500,
                  autoplay: false,
                  autoplayTimeout: 5000,
                  responsive: {
                        1600: {
                            items: 3
                        },

                        768: {
                            items: 2
                        },

                        320: {
                            items: 1
                        }

                    },
                });
              },


            sliderBannerSmall: function() {
                if (jQuery(".banner__slider--small").length === 0) {
                    return false;
                }
                $('.banner__slider--small').slick({
                    slidesToShow: 1,
                    //prevArrow: '<i class="fa fa-arrow-left"></i>',
                    //nextArrow: '<i class="fa fa-arrow-right"></i>',
                    arrows: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                });
            },

            responsiveTabs: function() {
                if (jQuery(".responsive--tabs").length === 0) {
                    return false;
                }
                var $tabs = $(".responsive--tabs");
                $tabs.responsiveTabs({
                    startCollapsed: "accordion",
                    collapsible: "accordion",
                });
            },

            accordion: function() {
                var $head = $(".accordian-head");
                var $body = $(".accordian-body");
                var active = "active";
                var show = "show";
                $(".accordian-wrap").first().find($head).addClass(active);
                $(".accordian-wrap").first().find($body).slideDown().addClass(show);
                $head.on("click", function() {
                    var $this = $(this);
                    var $id = $("#" + $this.data("acc"));
                    var $cls = $("." + $this.data("acc"));
                    $head.removeClass(active);
                    $this.addClass(active);
                    $body.slideUp().removeClass(show);
                    $id.slideDown().addClass(show);
                    $cls.slideDown().addClass(show);
                });
            },
            popupModal: function() {
                var dataModal = $("[data-modal]");
                var close = $("[data-close]");
                dataModal.on("click", function() {
                    var id = $(this).data("modal");
                    $("body").addClass("modal-open");
                    $(id).addClass("show");
                    return false;
                });

                close.on("click", function() {
                    $("body").removeClass("modal-open");
                    $(".modal-container").removeClass("show");
                    return false;
                });
            },
        };

        $(document).ready(ScriptsBundle.init);
        $window.on("scroll", ScriptsBundle.scrollAnimation);
        //$window.on("resize", ScriptsBundle.mobileMenu);
    });

    $window.on("load", function() {
        if (jQuery(".banner__slider--small").length === 1) {
            $('.banner__slider--small').show();
        }
        if (jQuery(".carousel__slider").length) {
            $('.carousel__slider').show();
        }
        if (jQuery(".banner__slider").length) {
            $('.banner__slider').show();
        }
    });
})(jQuery);