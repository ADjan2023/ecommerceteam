

(function ($) {
    "use strict";

    var laundry_main_slider_Js = function (){
        (function (o) {
        
            o(window).on("load", function () {
                o("body").addClass("btn-animation");
            });
            var n = o("#js-mainSlider");
            function i(i, n) {
                var s;
                n = n || 500;
                return function () {
                    var e = this,
                        t = arguments;
                    clearTimeout(s),
                        (s = setTimeout(function () {
                            i.apply(e, Array.prototype.slice.call(t));
                        }, n));
                };
            }
            function t() {
                n.find(".mainSlider-wrapper"), 767 < o(window).width() ? e(".main-slider") : e(".main-slider");
            }
    
            function e(e) {
    
                (function () {
                    
                    var e = n.find(".main-slider"),
                        s = o("#bubbles");
                    e.hasClass("slick-initialized") && e.slick("unslick");
                    function t() {
                        1024 < window.innerWidth && n.find(".js-rotation").tilt({ perspective: 1e3 });
                    }
                    n.find(".main-slider").on("init", function (e, t, i) {
                        setTimeout(function () {
                            n.addClass("show");
                        }, 500),
                            s.addClass("start");
                    }),
        
                        n.find(".main-slider").slick({ slidesToShow: 1, slidesToScroll: 1, autoplaySpeed: 4300, speed: 1200, autoplay: !0, arrows: !1, dots: !1, fade: !0, responsive: [{ breakpoint: 550, settings: { speed: 700 } }] }),
                        n.on("beforeChange", function (e, t, i, n) {
                            o(this).removeClass("start"), s.removeClass("start");
                        }),
                        n.on("afterChange", function (e, t, i, n) {
                            o(this).addClass("start"), s.addClass("start");
                        });
                })();
            
            }
            t(),
                o(window).resize(
                    i(function (e) {
                        t();
                    })
                );   
        
        })(jQuery);
    };


    var Service_Box_Carousel_Js = function () {
        $(".imgbox-inner__wrapper").not('.slick-initialized').slick({
            "slidesToShow": 3,
            "autoplaySpeed": 7500,
            "slidesToScroll": 3,
            "arrows": true,
            "autoplay":true,
            "dots": true,
            "responsive": [
                {
                    "breakpoint": 1750,
                    "settings": {
                        "arrows": false
                    }
                },
                {
                    "breakpoint": 1024,
                    "arrows": false,
                    "settings": {
                        "slidesToShow": 2
                    }
                },
                {
                    "breakpoint": 651,
                    "settings": {
                        "slidesToShow": 1,
                        "slidesToScroll": 1
                    }
                }
            ]
        });
    };

    var laundry_work_process_Js = function () {
        (function (i) {
            var n = i("#js-stepbox__layout"),
                s = i("#js-stepbox__nav");
            s.find("li").length;
            if (!n.length && !s.length) return;
            i("body").on("click", "#js-stepbox__nav .stepbox-dots li", function () {
                if (i(this).hasClass("active")) return !1;
                i(this).addClass("active").siblings().removeClass("active");
                var e,
                    t = i(this).attr("data-number");
                return (
                    (e = t),
                    n
                        .find('[data-number="' + e + '"]')
                        .addClass("active")
                        .siblings()
                        .removeClass("active"),
                    s.attr("data-number", t),
                    !1
                );
            });
            setInterval(function () {
                s.find(".stepbox-dots .active").next().attr("data-number") || !1 ? s.find(".stepbox-dots .active").next().click() : s.find('[data-number="1"]').click();
            }, 4e3);
        })(jQuery);
    };

    var laundry_price_Js = function () {
        $(".promo03__wrapper").not('.slick-initialized').slick({
            "slidesToShow": 4,
            "autoplaySpeed": 8000,
            "slidesToScroll": 4,
            "autoplay":true,
            "dots": true,
            "responsive": [
                {
                    "breakpoint": 1025,
                    "arrows": false,
                    "settings": {
                        "slidesToShow": 2,
                        "slidesToScroll": 2
                    }
                },
                {
                    "breakpoint": 651,
                    "settings": {
                        "slidesToShow": 1,
                        "slidesToScroll": 1
                    }
                }
            ]
        });
    };

    var laundry_testimonial_two_Js = function () {
       
        jQuery("[data-slick]").not('.slick-initialized').slick({ lazyLoad: "progressive", dots: !0, arrows: !1, infinite: !0, speed: 300, autoplay: !0, adaptiveHeight: !0, slidesToScroll: 1, pauseOnFocus: !1, pauseOnHover: !1 });
        (function () {
            var e = $("#blog-slider");
            if (e.length) {
                var t = e.find(".blog-slider__layout"),
                    o = e.find(".tt-item-wrapper");
                t.not('.slick-initialized').slick({ dots: !0, arrows: !1, infinite: !0, speed: 300, slidesToShow: 1, slidesToScroll: 1, adaptiveHeight: !0, autoplay: !0, autoplaySpeed: 4500, pauseOnFocus: !1, pauseOnHover: !1 }),
                    t.on("afterChange", function (e, t, i, n) {
                        var s = i;
                        s++,
                            o
                                .find(".number-" + s)
                                .addClass("active")
                                .siblings()
                                .removeClass("active");
                    }),
                    o.each(function () {
                        $(".tt-item", this).each(function (e) {
                            $(this).addClass("number-" + (e + 1));
                        });
                    });
            }
        })();
    }
    var laundry_team_Js = function () {
        $(".team-carousel").not('.slick-initialized').slick({
            "slidesToShow": 3,
            "autoplaySpeed": 1111114500,
            "slidesToScroll": 3,
            "arrows": false,
            "dots": true,
            "responsive": [
                {
                    "breakpoint": 651,
                    "settings": {
                        "slidesToShow": 1,
                        "slidesToScroll": 1
                    }
                }
            ]
        });
    };

    var laundry_coupon_Js = function () {
        $(".coupon-carousel").not('.slick-initialized').slick({
            "slidesToShow": 2,
            "autoplaySpeed": 4500,
            "slidesToScroll": 2,
            "arrows": false,
            "dots": true,
            "responsive": [
                {
                    "breakpoint": 651,
                    "settings": {
                        "slidesToShow": 1,
                        "slidesToScroll": 1
                    }
                }
            ]
        });
    };


    //Elementor JS Hooks
    $(window).on('elementor/frontend/init', function () {
       
        elementorFrontend.hooks.addAction('frontend/element_ready/laundry_main_slider.default', laundry_main_slider_Js);
        elementorFrontend.hooks.addAction('frontend/element_ready/laundry_service_box_carousel.default', Service_Box_Carousel_Js);
        elementorFrontend.hooks.addAction('frontend/element_ready/laundry_work_process.default', laundry_work_process_Js);
        elementorFrontend.hooks.addAction('frontend/element_ready/laundry_price.default', laundry_price_Js);
        elementorFrontend.hooks.addAction('frontend/element_ready/laundry_testimonial_two.default', laundry_testimonial_two_Js);
        elementorFrontend.hooks.addAction('frontend/element_ready/laundry_team.default', laundry_team_Js);
        elementorFrontend.hooks.addAction('frontend/element_ready/laundry_coupon.default', laundry_coupon_Js);

    });

})(jQuery);