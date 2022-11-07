(function($) {
    /* Global variables */
    "use strict";

    $('.widget_categories ul').addClass('tt-list-03');
    $('ul.wp-tag-cloud').addClass('tt-list-tag');

    $('body').on('click', '.service-cart', function() {
        var id = $(this).data('product_id');
        var selectorid = $(this).attr('id');
        var quantity = 1;
        var price = $(this).attr('data-price');

        var service_name = $(this).attr('data-service-title');

        var $this = $(this);
        if (price == 0) {
            $('[data-target="' + selectorid + '"]').nextAll('.control-indicator').addClass('shadow')
            return false;
        }
        $($this).prev('.spinner').show();
        $this.hide();
        $('[data-target="' + selectorid + '"]').nextAll('.control-indicator').removeClass('shadow')
        $.ajax({
            type: "POST",
            url: ajax_object.ajax_url,
            data: {
                action: 'service_add_to_cart',
                product_id: id,
                price: price,
                quantity: quantity,
                service_name: service_name,
                security: ajax_object.ajax_nonce_servicecart,
            },
            success: function(res) {
                if (res = 'success')
                    $("body").trigger("wc_fragment_refresh")
                $this.show();
                $($this).prev('.spinner').hide();
            }
        });
    })


    $('body').on('change', '.service_check', function() {
        var target = $(this).data('target'),
            price = $(this).data('price'),
            title = $(this).data('title'),
            send_price = parseInt($('#' + target).attr('data-price')),
            send_title = $('#' + target).attr('data-service-title').replace(/(^,)|(,$)/g, "");
        price = price.toString().replace('.', '');
        price = parseInt(price);
        if ($(this).is(":checked")) {
            var new_price = parseInt(send_price + price)
            var new_title = send_title + ',' + title;
            $(this).nextAll('.control-indicator').removeClass('shadow')
        } else {
            if (send_price > price) {
                var new_price = parseInt(send_price - price)
            } else {
                var new_price = 0
            }
            var new_title = send_title.replace(title, '');
        }
        $('#' + target).attr('data-price', new_price);
        $('#' + target).attr('data-service-title', new_title);
    })




    var e, t, i, n, r, o, s, a, l, c, d, u, h, p, f, m, g, v, y, b, w;
    !(function(e) {
        "use strict";
        "function" == typeof define && define.amd ? define(["jquery"], e) : "undefined" != typeof exports ? (module.exports = e(require("jquery"))) : e(jQuery);
    })(function(c) {
        "use strict";
        var s,
            r = window.Slick || {};
        (((s = 0),
            (r = function(e, t) {
                var i,
                    n = this;
                (n.defaults = {
                    accessibility: !0,
                    adaptiveHeight: !1,
                    appendArrows: c(e),
                    appendDots: c(e),
                    arrows: !0,
                    asNavFor: null,
                    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
                    nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
                    autoplay: !1,
                    autoplaySpeed: 3e3,
                    centerMode: !1,
                    centerPadding: "50px",
                    cssEase: "ease",
                    customPaging: function(e, t) {
                        return c('<button type="button" />').text(t + 1);
                    },
                    dots: !1,
                    dotsClass: "slick-dots",
                    draggable: !0,
                    easing: "linear",
                    edgeFriction: 0.35,
                    fade: !1,
                    focusOnSelect: !1,
                    focusOnChange: !1,
                    infinite: !0,
                    initialSlide: 0,
                    lazyLoad: "ondemand",
                    mobileFirst: !1,
                    pauseOnHover: !0,
                    pauseOnFocus: !0,
                    pauseOnDotsHover: !1,
                    respondTo: "window",
                    responsive: null,
                    rows: 1,
                    rtl: !1,
                    slide: "",
                    slidesPerRow: 1,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    speed: 500,
                    swipe: !0,
                    swipeToSlide: !1,
                    touchMove: !0,
                    touchThreshold: 5,
                    useCSS: !0,
                    useTransform: !0,
                    variableWidth: !1,
                    vertical: !1,
                    verticalSwiping: !1,
                    waitForAnimate: !0,
                    zIndex: 1e3,
                }),
                (n.initials = {
                    animating: !1,
                    dragging: !1,
                    autoPlayTimer: null,
                    currentDirection: 0,
                    currentLeft: null,
                    currentSlide: 0,
                    direction: 1,
                    $dots: null,
                    listWidth: null,
                    listHeight: null,
                    loadIndex: 0,
                    $nextArrow: null,
                    $prevArrow: null,
                    scrolling: !1,
                    slideCount: null,
                    slideWidth: null,
                    $slideTrack: null,
                    $slides: null,
                    sliding: !1,
                    slideOffset: 0,
                    swipeLeft: null,
                    swiping: !1,
                    $list: null,
                    touchObject: {},
                    transformsEnabled: !1,
                    unslicked: !1,
                }),
                c.extend(n, n.initials),
                    (n.activeBreakpoint = null),
                    (n.animType = null),
                    (n.animProp = null),
                    (n.breakpoints = []),
                    (n.breakpointSettings = []),
                    (n.cssTransitions = !1),
                    (n.focussed = !1),
                    (n.interrupted = !1),
                    (n.hidden = "hidden"),
                    (n.paused = !0),
                    (n.positionProp = null),
                    (n.respondTo = null),
                    (n.rowCount = 1),
                    (n.shouldClick = !0),
                    (n.$slider = c(e)),
                    (n.$slidesCache = null),
                    (n.transformType = null),
                    (n.transitionType = null),
                    (n.visibilityChange = "visibilitychange"),
                    (n.windowWidth = 0),
                    (n.windowTimer = null),
                    (i = c(e).data("slick") || {}),
                    (n.options = c.extend({}, n.defaults, t, i)),
                    (n.currentSlide = n.options.initialSlide),
                    (n.originalSettings = n.options),
                    void 0 !== document.mozHidden ? ((n.hidden = "mozHidden"), (n.visibilityChange = "mozvisibilitychange")) : void 0 !== document.webkitHidden && ((n.hidden = "webkitHidden"), (n.visibilityChange = "webkitvisibilitychange")),
                    (n.autoPlay = c.proxy(n.autoPlay, n)),
                    (n.autoPlayClear = c.proxy(n.autoPlayClear, n)),
                    (n.autoPlayIterator = c.proxy(n.autoPlayIterator, n)),
                    (n.changeSlide = c.proxy(n.changeSlide, n)),
                    (n.clickHandler = c.proxy(n.clickHandler, n)),
                    (n.selectHandler = c.proxy(n.selectHandler, n)),
                    (n.setPosition = c.proxy(n.setPosition, n)),
                    (n.swipeHandler = c.proxy(n.swipeHandler, n)),
                    (n.dragHandler = c.proxy(n.dragHandler, n)),
                    (n.keyHandler = c.proxy(n.keyHandler, n)),
                    (n.instanceUid = s++),
                    (n.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/),
                    n.registerBreakpoints(),
                    n.init(!0);
            })).prototype.activateADA = function() {
            this.$slideTrack.find(".slick-active").attr({ "aria-hidden": "false" }).find("a, input, button, select").attr({ tabindex: "0" });
        }),
        (r.prototype.addSlide = r.prototype.slickAdd = function(e, t, i) {
            var n = this;
            if ("boolean" == typeof t)(i = t), (t = null);
            else if (t < 0 || t >= n.slideCount) return !1;
            n.unload(),
                "number" == typeof t ?
                0 === t && 0 === n.$slides.length ?
                c(e).appendTo(n.$slideTrack) :
                i ?
                c(e).insertBefore(n.$slides.eq(t)) :
                c(e).insertAfter(n.$slides.eq(t)) :
                !0 === i ?
                c(e).prependTo(n.$slideTrack) :
                c(e).appendTo(n.$slideTrack),
                (n.$slides = n.$slideTrack.children(this.options.slide)),
                n.$slideTrack.children(this.options.slide).detach(),
                n.$slideTrack.append(n.$slides),
                n.$slides.each(function(e, t) {
                    c(t).attr("data-slick-index", e);
                }),
                (n.$slidesCache = n.$slides),
                n.reinit();
        }),
        (r.prototype.animateHeight = function() {
            var e = this;
            if (1 === e.options.slidesToShow && !0 === e.options.adaptiveHeight && !1 === e.options.vertical) {
                var t = e.$slides.eq(e.currentSlide).outerHeight(!0);
                e.$list.animate({ height: t }, e.options.speed);
            }
        }),
        (r.prototype.animateSlide = function(e, t) {
            var i = {},
                n = this;
            n.animateHeight(), !0 === n.options.rtl && !1 === n.options.vertical && (e = -e), !1 === n.transformsEnabled ?
                !1 === n.options.vertical ?
                n.$slideTrack.animate({ left: e }, n.options.speed, n.options.easing, t) :
                n.$slideTrack.animate({ top: e }, n.options.speed, n.options.easing, t) :
                !1 === n.cssTransitions ?
                (!0 === n.options.rtl && (n.currentLeft = -n.currentLeft),
                    c({ animStart: n.currentLeft }).animate({ animStart: e }, {
                        duration: n.options.speed,
                        easing: n.options.easing,
                        step: function(e) {
                            (e = Math.ceil(e)), !1 === n.options.vertical ? (i[n.animType] = "translate(" + e + "px, 0px)") : (i[n.animType] = "translate(0px," + e + "px)"), n.$slideTrack.css(i);
                        },
                        complete: function() {
                            t && t.call();
                        },
                    })) :
                (n.applyTransition(),
                    (e = Math.ceil(e)), !1 === n.options.vertical ? (i[n.animType] = "translate3d(" + e + "px, 0px, 0px)") : (i[n.animType] = "translate3d(0px," + e + "px, 0px)"),
                    n.$slideTrack.css(i),
                    t &&
                    setTimeout(function() {
                        n.disableTransition(), t.call();
                    }, n.options.speed));
        }),
        (r.prototype.getNavTarget = function() {
            var e = this.options.asNavFor;
            return e && null !== e && (e = c(e).not(this.$slider)), e;
        }),
        (r.prototype.asNavFor = function(t) {
            var e = this.getNavTarget();
            null !== e &&
                "object" == typeof e &&
                e.each(function() {
                    var e = c(this).slick("getSlick");
                    e.unslicked || e.slideHandler(t, !0);
                });
        }),
        (r.prototype.applyTransition = function(e) {
            var t = this,
                i = {};
            !1 === t.options.fade ? (i[t.transitionType] = t.transformType + " " + t.options.speed + "ms " + t.options.cssEase) : (i[t.transitionType] = "opacity " + t.options.speed + "ms " + t.options.cssEase), !1 === t.options.fade ? t.$slideTrack.css(i) : t.$slides.eq(e).css(i);
        }),
        (r.prototype.autoPlay = function() {
            var e = this;
            e.autoPlayClear(), e.slideCount > e.options.slidesToShow && (e.autoPlayTimer = setInterval(e.autoPlayIterator, e.options.autoplaySpeed));
        }),
        (r.prototype.autoPlayClear = function() {
            this.autoPlayTimer && clearInterval(this.autoPlayTimer);
        }),
        (r.prototype.autoPlayIterator = function() {
            var e = this,
                t = e.currentSlide + e.options.slidesToScroll;
            e.paused ||
                e.interrupted ||
                e.focussed ||
                (!1 === e.options.infinite &&
                    (1 === e.direction && e.currentSlide + 1 === e.slideCount - 1 ? (e.direction = 0) : 0 === e.direction && ((t = e.currentSlide - e.options.slidesToScroll), e.currentSlide - 1 == 0 && (e.direction = 1))),
                    e.slideHandler(t));
        }),
        (r.prototype.buildArrows = function() {
            var e = this;
            !0 === e.options.arrows &&
                ((e.$prevArrow = c(e.options.prevArrow).addClass("slick-arrow")),
                    (e.$nextArrow = c(e.options.nextArrow).addClass("slick-arrow")),
                    e.slideCount > e.options.slidesToShow ?
                    (e.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),
                        e.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),
                        e.htmlExpr.test(e.options.prevArrow) && e.$prevArrow.prependTo(e.options.appendArrows),
                        e.htmlExpr.test(e.options.nextArrow) && e.$nextArrow.appendTo(e.options.appendArrows), !0 !== e.options.infinite && e.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true")) :
                    e.$prevArrow.add(e.$nextArrow).addClass("slick-hidden").attr({ "aria-disabled": "true", tabindex: "-1" }));
        }),
        (r.prototype.buildDots = function() {
            var e,
                t,
                i = this;
            if (!0 === i.options.dots) {
                for (i.$slider.addClass("slick-dotted"), t = c("<ul />").addClass(i.options.dotsClass), e = 0; e <= i.getDotCount(); e += 1) t.append(c("<li />").append(i.options.customPaging.call(this, i, e)));
                (i.$dots = t.appendTo(i.options.appendDots)), i.$dots.find("li").first().addClass("slick-active");
            }
        }),
        (r.prototype.buildOut = function() {
            var e = this;
            (e.$slides = e.$slider.children(e.options.slide + ":not(.slick-cloned)").addClass("slick-slide")),
            (e.slideCount = e.$slides.length),
            e.$slides.each(function(e, t) {
                    c(t)
                        .attr("data-slick-index", e)
                        .data("originalStyling", c(t).attr("style") || "");
                }),
                e.$slider.addClass("slick-slider"),
                (e.$slideTrack = 0 === e.slideCount ? c('<div class="slick-track"/>').appendTo(e.$slider) : e.$slides.wrapAll('<div class="slick-track"/>').parent()),
                (e.$list = e.$slideTrack.wrap('<div class="slick-list"/>').parent()),
                e.$slideTrack.css("opacity", 0),
                (!0 !== e.options.centerMode && !0 !== e.options.swipeToSlide) || (e.options.slidesToScroll = 1),
                c("img[data-lazy]", e.$slider).not("[src]").addClass("slick-loading"),
                e.setupInfinite(),
                e.buildArrows(),
                e.buildDots(),
                e.updateDots(),
                e.setSlideClasses("number" == typeof e.currentSlide ? e.currentSlide : 0), !0 === e.options.draggable && e.$list.addClass("draggable");
        }),
        (r.prototype.buildRows = function() {
            var e,
                t,
                i,
                n,
                s,
                o,
                r,
                a = this;
            if (((n = document.createDocumentFragment()), (o = a.$slider.children()), 1 < a.options.rows)) {
                for (r = a.options.slidesPerRow * a.options.rows, s = Math.ceil(o.length / r), e = 0; e < s; e++) {
                    var l = document.createElement("div");
                    for (t = 0; t < a.options.rows; t++) {
                        var c = document.createElement("div");
                        for (i = 0; i < a.options.slidesPerRow; i++) {
                            var d = e * r + (t * a.options.slidesPerRow + i);
                            o.get(d) && c.appendChild(o.get(d));
                        }
                        l.appendChild(c);
                    }
                    n.appendChild(l);
                }
                a.$slider.empty().append(n),
                    a.$slider
                    .children()
                    .children()
                    .children()
                    .css({ width: 100 / a.options.slidesPerRow + "%", display: "inline-block" });
            }
        }),
        (r.prototype.checkResponsive = function(e, t) {
            var i,
                n,
                s,
                o = this,
                r = !1,
                a = o.$slider.width(),
                l = window.innerWidth || c(window).width();
            if (("window" === o.respondTo ? (s = l) : "slider" === o.respondTo ? (s = a) : "min" === o.respondTo && (s = Math.min(l, a)), o.options.responsive && o.options.responsive.length && null !== o.options.responsive)) {
                for (i in ((n = null), o.breakpoints)) o.breakpoints.hasOwnProperty(i) && (!1 === o.originalSettings.mobileFirst ? s < o.breakpoints[i] && (n = o.breakpoints[i]) : s > o.breakpoints[i] && (n = o.breakpoints[i]));
                null !== n ?
                    null !== o.activeBreakpoint ?
                    (n !== o.activeBreakpoint || t) &&
                    ((o.activeBreakpoint = n),
                        "unslick" === o.breakpointSettings[n] ? o.unslick(n) : ((o.options = c.extend({}, o.originalSettings, o.breakpointSettings[n])), !0 === e && (o.currentSlide = o.options.initialSlide), o.refresh(e)),
                        (r = n)) :
                    ((o.activeBreakpoint = n),
                        "unslick" === o.breakpointSettings[n] ? o.unslick(n) : ((o.options = c.extend({}, o.originalSettings, o.breakpointSettings[n])), !0 === e && (o.currentSlide = o.options.initialSlide), o.refresh(e)),
                        (r = n)) :
                    null !== o.activeBreakpoint && ((o.activeBreakpoint = null), (o.options = o.originalSettings), !0 === e && (o.currentSlide = o.options.initialSlide), o.refresh(e), (r = n)),
                    e || !1 === r || o.$slider.trigger("breakpoint", [o, r]);
            }
        }),
        (r.prototype.changeSlide = function(e, t) {
            var i,
                n,
                s = this,
                o = c(e.currentTarget);
            switch ((o.is("a") && e.preventDefault(), o.is("li") || (o = o.closest("li")), (i = s.slideCount % s.options.slidesToScroll != 0 ? 0 : (s.slideCount - s.currentSlide) % s.options.slidesToScroll), e.data.message)) {
                case "previous":
                    (n = 0 === i ? s.options.slidesToScroll : s.options.slidesToShow - i), s.slideCount > s.options.slidesToShow && s.slideHandler(s.currentSlide - n, !1, t);
                    break;
                case "next":
                    (n = 0 === i ? s.options.slidesToScroll : i), s.slideCount > s.options.slidesToShow && s.slideHandler(s.currentSlide + n, !1, t);
                    break;
                case "index":
                    var r = 0 === e.data.index ? 0 : e.data.index || o.index() * s.options.slidesToScroll;
                    s.slideHandler(s.checkNavigable(r), !1, t), o.children().trigger("focus");
                    break;
                default:
                    return;
            }
        }),
        (r.prototype.checkNavigable = function(e) {
            var t, i;
            if (((i = 0), e > (t = this.getNavigableIndexes())[t.length - 1])) e = t[t.length - 1];
            else
                for (var n in t) {
                    if (e < t[n]) {
                        e = i;
                        break;
                    }
                    i = t[n];
                }
            return e;
        }),
        (r.prototype.cleanUpEvents = function() {
            var e = this;
            e.options.dots &&
                null !== e.$dots &&
                (c("li", e.$dots).off("click.slick", e.changeSlide).off("mouseenter.slick", c.proxy(e.interrupt, e, !0)).off("mouseleave.slick", c.proxy(e.interrupt, e, !1)), !0 === e.options.accessibility && e.$dots.off("keydown.slick", e.keyHandler)),
                e.$slider.off("focus.slick blur.slick"), !0 === e.options.arrows &&
                e.slideCount > e.options.slidesToShow &&
                (e.$prevArrow && e.$prevArrow.off("click.slick", e.changeSlide),
                    e.$nextArrow && e.$nextArrow.off("click.slick", e.changeSlide), !0 === e.options.accessibility && (e.$prevArrow && e.$prevArrow.off("keydown.slick", e.keyHandler), e.$nextArrow && e.$nextArrow.off("keydown.slick", e.keyHandler))),
                e.$list.off("touchstart.slick mousedown.slick", e.swipeHandler),
                e.$list.off("touchmove.slick mousemove.slick", e.swipeHandler),
                e.$list.off("touchend.slick mouseup.slick", e.swipeHandler),
                e.$list.off("touchcancel.slick mouseleave.slick", e.swipeHandler),
                e.$list.off("click.slick", e.clickHandler),
                c(document).off(e.visibilityChange, e.visibility),
                e.cleanUpSlideEvents(), !0 === e.options.accessibility && e.$list.off("keydown.slick", e.keyHandler), !0 === e.options.focusOnSelect && c(e.$slideTrack).children().off("click.slick", e.selectHandler),
                c(window).off("orientationchange.slick.slick-" + e.instanceUid, e.orientationChange),
                c(window).off("resize.slick.slick-" + e.instanceUid, e.resize),
                c("[draggable!=true]", e.$slideTrack).off("dragstart", e.preventDefault),
                c(window).off("load.slick.slick-" + e.instanceUid, e.setPosition);
        }),
        (r.prototype.cleanUpSlideEvents = function() {
            var e = this;
            e.$list.off("mouseenter.slick", c.proxy(e.interrupt, e, !0)), e.$list.off("mouseleave.slick", c.proxy(e.interrupt, e, !1));
        }),
        (r.prototype.cleanUpRows = function() {
            var e;
            1 < this.options.rows && ((e = this.$slides.children().children()).removeAttr("style"), this.$slider.empty().append(e));
        }),
        (r.prototype.clickHandler = function(e) {
            !1 === this.shouldClick && (e.stopImmediatePropagation(), e.stopPropagation(), e.preventDefault());
        }),
        (r.prototype.destroy = function(e) {
            var t = this;
            t.autoPlayClear(),
                (t.touchObject = {}),
                t.cleanUpEvents(),
                c(".slick-cloned", t.$slider).detach(),
                t.$dots && t.$dots.remove(),
                t.$prevArrow &&
                t.$prevArrow.length &&
                (t.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), t.htmlExpr.test(t.options.prevArrow) && t.$prevArrow.remove()),
                t.$nextArrow &&
                t.$nextArrow.length &&
                (t.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), t.htmlExpr.test(t.options.nextArrow) && t.$nextArrow.remove()),
                t.$slides &&
                (t.$slides
                    .removeClass("slick-slide slick-active slick-center slick-visible slick-current")
                    .removeAttr("aria-hidden")
                    .removeAttr("data-slick-index")
                    .each(function() {
                        c(this).attr("style", c(this).data("originalStyling"));
                    }),
                    t.$slideTrack.children(this.options.slide).detach(),
                    t.$slideTrack.detach(),
                    t.$list.detach(),
                    t.$slider.append(t.$slides)),
                t.cleanUpRows(),
                t.$slider.removeClass("slick-slider"),
                t.$slider.removeClass("slick-initialized"),
                t.$slider.removeClass("slick-dotted"),
                (t.unslicked = !0),
                e || t.$slider.trigger("destroy", [t]);
        }),
        (r.prototype.disableTransition = function(e) {
            var t = {};
            (t[this.transitionType] = ""), !1 === this.options.fade ? this.$slideTrack.css(t) : this.$slides.eq(e).css(t);
        }),
        (r.prototype.fadeSlide = function(e, t) {
            var i = this;
            !1 === i.cssTransitions ?
                (i.$slides.eq(e).css({ zIndex: i.options.zIndex }), i.$slides.eq(e).animate({ opacity: 1 }, i.options.speed, i.options.easing, t)) :
                (i.applyTransition(e),
                    i.$slides.eq(e).css({ opacity: 1, zIndex: i.options.zIndex }),
                    t &&
                    setTimeout(function() {
                        i.disableTransition(e), t.call();
                    }, i.options.speed));
        }),
        (r.prototype.fadeSlideOut = function(e) {
            var t = this;
            !1 === t.cssTransitions ? t.$slides.eq(e).animate({ opacity: 0, zIndex: t.options.zIndex - 2 }, t.options.speed, t.options.easing) : (t.applyTransition(e), t.$slides.eq(e).css({ opacity: 0, zIndex: t.options.zIndex - 2 }));
        }),
        (r.prototype.filterSlides = r.prototype.slickFilter = function(e) {
            var t = this;
            null !== e && ((t.$slidesCache = t.$slides), t.unload(), t.$slideTrack.children(this.options.slide).detach(), t.$slidesCache.filter(e).appendTo(t.$slideTrack), t.reinit());
        }),
        (r.prototype.focusHandler = function() {
            var i = this;
            i.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick", "*", function(e) {
                e.stopImmediatePropagation();
                var t = c(this);
                setTimeout(function() {
                    i.options.pauseOnFocus && ((i.focussed = t.is(":focus")), i.autoPlay());
                }, 0);
            });
        }),
        (r.prototype.getCurrent = r.prototype.slickCurrentSlide = function() {
            return this.currentSlide;
        }),
        (r.prototype.getDotCount = function() {
            var e = this,
                t = 0,
                i = 0,
                n = 0;
            if (!0 === e.options.infinite)
                if (e.slideCount <= e.options.slidesToShow) ++n;
                else
                    for (; t < e.slideCount;) ++n, (t = i + e.options.slidesToScroll), (i += e.options.slidesToScroll <= e.options.slidesToShow ? e.options.slidesToScroll : e.options.slidesToShow);
            else if (!0 === e.options.centerMode) n = e.slideCount;
            else if (e.options.asNavFor)
                for (; t < e.slideCount;) ++n, (t = i + e.options.slidesToScroll), (i += e.options.slidesToScroll <= e.options.slidesToShow ? e.options.slidesToScroll : e.options.slidesToShow);
            else n = 1 + Math.ceil((e.slideCount - e.options.slidesToShow) / e.options.slidesToScroll);
            return n - 1;
        }),
        (r.prototype.getLeft = function(e) {
            var t,
                i,
                n,
                s,
                o = this,
                r = 0;
            return (
                (o.slideOffset = 0),
                (i = o.$slides.first().outerHeight(!0)), !0 === o.options.infinite ?
                (o.slideCount > o.options.slidesToShow &&
                    ((o.slideOffset = o.slideWidth * o.options.slidesToShow * -1),
                        (s = -1), !0 === o.options.vertical && !0 === o.options.centerMode && (2 === o.options.slidesToShow ? (s = -1.5) : 1 === o.options.slidesToShow && (s = -2)),
                        (r = i * o.options.slidesToShow * s)),
                    o.slideCount % o.options.slidesToScroll != 0 &&
                    e + o.options.slidesToScroll > o.slideCount &&
                    o.slideCount > o.options.slidesToShow &&
                    (r =
                        e > o.slideCount ?
                        ((o.slideOffset = (o.options.slidesToShow - (e - o.slideCount)) * o.slideWidth * -1), (o.options.slidesToShow - (e - o.slideCount)) * i * -1) :
                        ((o.slideOffset = (o.slideCount % o.options.slidesToScroll) * o.slideWidth * -1), (o.slideCount % o.options.slidesToScroll) * i * -1))) :
                e + o.options.slidesToShow > o.slideCount && ((o.slideOffset = (e + o.options.slidesToShow - o.slideCount) * o.slideWidth), (r = (e + o.options.slidesToShow - o.slideCount) * i)),
                o.slideCount <= o.options.slidesToShow && (r = o.slideOffset = 0), !0 === o.options.centerMode && o.slideCount <= o.options.slidesToShow ?
                (o.slideOffset = (o.slideWidth * Math.floor(o.options.slidesToShow)) / 2 - (o.slideWidth * o.slideCount) / 2) :
                !0 === o.options.centerMode && !0 === o.options.infinite ?
                (o.slideOffset += o.slideWidth * Math.floor(o.options.slidesToShow / 2) - o.slideWidth) :
                !0 === o.options.centerMode && ((o.slideOffset = 0), (o.slideOffset += o.slideWidth * Math.floor(o.options.slidesToShow / 2))),
                (t = !1 === o.options.vertical ? e * o.slideWidth * -1 + o.slideOffset : e * i * -1 + r), !0 === o.options.variableWidth &&
                ((n = o.slideCount <= o.options.slidesToShow || !1 === o.options.infinite ? o.$slideTrack.children(".slick-slide").eq(e) : o.$slideTrack.children(".slick-slide").eq(e + o.options.slidesToShow)),
                    (t = !0 === o.options.rtl ? (n[0] ? -1 * (o.$slideTrack.width() - n[0].offsetLeft - n.width()) : 0) : n[0] ? -1 * n[0].offsetLeft : 0), !0 === o.options.centerMode &&
                    ((n = o.slideCount <= o.options.slidesToShow || !1 === o.options.infinite ? o.$slideTrack.children(".slick-slide").eq(e) : o.$slideTrack.children(".slick-slide").eq(e + o.options.slidesToShow + 1)),
                        (t = !0 === o.options.rtl ? (n[0] ? -1 * (o.$slideTrack.width() - n[0].offsetLeft - n.width()) : 0) : n[0] ? -1 * n[0].offsetLeft : 0),
                        (t += (o.$list.width() - n.outerWidth()) / 2))),
                t
            );
        }),
        (r.prototype.getOption = r.prototype.slickGetOption = function(e) {
            return this.options[e];
        }),
        (r.prototype.getNavigableIndexes = function() {
            var e,
                t = this,
                i = 0,
                n = 0,
                s = [];
            for (e = !1 === t.options.infinite ? t.slideCount : ((i = -1 * t.options.slidesToScroll), (n = -1 * t.options.slidesToScroll), 2 * t.slideCount); i < e;)
                s.push(i), (i = n + t.options.slidesToScroll), (n += t.options.slidesToScroll <= t.options.slidesToShow ? t.options.slidesToScroll : t.options.slidesToShow);
            return s;
        }),
        (r.prototype.getSlick = function() {
            return this;
        }),
        (r.prototype.getSlideCount = function() {
            var i,
                n,
                s = this;
            return (
                (n = !0 === s.options.centerMode ? s.slideWidth * Math.floor(s.options.slidesToShow / 2) : 0), !0 === s.options.swipeToSlide ?
                (s.$slideTrack.find(".slick-slide").each(function(e, t) {
                        if (t.offsetLeft - n + c(t).outerWidth() / 2 > -1 * s.swipeLeft) return (i = t), !1;
                    }),
                    Math.abs(c(i).attr("data-slick-index") - s.currentSlide) || 1) :
                s.options.slidesToScroll
            );
        }),
        (r.prototype.goTo = r.prototype.slickGoTo = function(e, t) {
            this.changeSlide({ data: { message: "index", index: parseInt(e) } }, t);
        }),
        (r.prototype.init = function(e) {
            var t = this;
            c(t.$slider).hasClass("slick-initialized") ||
                (c(t.$slider).addClass("slick-initialized"), t.buildRows(), t.buildOut(), t.setProps(), t.startLoad(), t.loadSlider(), t.initializeEvents(), t.updateArrows(), t.updateDots(), t.checkResponsive(!0), t.focusHandler()),
                e && t.$slider.trigger("init", [t]), !0 === t.options.accessibility && t.initADA(),
                t.options.autoplay && ((t.paused = !1), t.autoPlay());
        }),
        (r.prototype.initADA = function() {
            var i = this,
                n = Math.ceil(i.slideCount / i.options.slidesToShow),
                s = i.getNavigableIndexes().filter(function(e) {
                    return 0 <= e && e < i.slideCount;
                });

            i.$slides.add(i.$slideTrack.find(".slick-cloned")).attr({ "aria-hidden": "true", tabindex: "-1" }).find("a, input, button, select").attr({ tabindex: "-1" }),
                null !== i.$dots &&
                (i.$slides.not(i.$slideTrack.find(".slick-cloned")).each(function(e) {
                        var t = s.indexOf(e);
                        c(this).attr({ role: "tabpanel", id: "slick-slide" + i.instanceUid + e, tabindex: -1 }), -1 !== t && c(this).attr({ "aria-describedby": "slick-slide-control" + i.instanceUid + t });
                    }),
                    i.$dots
                    .attr("role", "tablist")
                    .find("li")
                    .each(function(e) {
                        var t = s[e];
                        c(this).attr({ role: "presentation" }),
                            c(this)
                            .find("button")
                            .first()
                            .attr({ role: "tab", id: "slick-slide-control" + i.instanceUid + e, "aria-controls": "slick-slide" + i.instanceUid + t, "aria-label": e + 1 + " of " + n, "aria-selected": null, tabindex: "-1" });
                    })
                    .eq(i.currentSlide)
                    .find("button")
                    .attr({ "aria-selected": "true", tabindex: "0" })
                    .end());
            for (var e = i.currentSlide, t = e + i.options.slidesToShow; e < t; e++) i.$slides.eq(e).attr("tabindex", 0);
            i.activateADA();
        }),
        (r.prototype.initArrowEvents = function() {
            var e = this;
            !0 === e.options.arrows &&
                e.slideCount > e.options.slidesToShow &&
                (e.$prevArrow.off("click.slick").on("click.slick", { message: "previous" }, e.changeSlide),
                    e.$nextArrow.off("click.slick").on("click.slick", { message: "next" }, e.changeSlide), !0 === e.options.accessibility && (e.$prevArrow.on("keydown.slick", e.keyHandler), e.$nextArrow.on("keydown.slick", e.keyHandler)));
        }),
        (r.prototype.initDotEvents = function() {
            var e = this;
            !0 === e.options.dots && (c("li", e.$dots).on("click.slick", { message: "index" }, e.changeSlide), !0 === e.options.accessibility && e.$dots.on("keydown.slick", e.keyHandler)), !0 === e.options.dots && !0 === e.options.pauseOnDotsHover && c("li", e.$dots).on("mouseenter.slick", c.proxy(e.interrupt, e, !0)).on("mouseleave.slick", c.proxy(e.interrupt, e, !1));
        }),
        (r.prototype.initSlideEvents = function() {
            var e = this;
            e.options.pauseOnHover && (e.$list.on("mouseenter.slick", c.proxy(e.interrupt, e, !0)), e.$list.on("mouseleave.slick", c.proxy(e.interrupt, e, !1)));
        }),
        (r.prototype.initializeEvents = function() {
            var e = this;
            e.initArrowEvents(),
                e.initDotEvents(),
                e.initSlideEvents(),
                e.$list.on("touchstart.slick mousedown.slick", { action: "start" }, e.swipeHandler),
                e.$list.on("touchmove.slick mousemove.slick", { action: "move" }, e.swipeHandler),
                e.$list.on("touchend.slick mouseup.slick", { action: "end" }, e.swipeHandler),
                e.$list.on("touchcancel.slick mouseleave.slick", { action: "end" }, e.swipeHandler),
                e.$list.on("click.slick", e.clickHandler),
                c(document).on(e.visibilityChange, c.proxy(e.visibility, e)), !0 === e.options.accessibility && e.$list.on("keydown.slick", e.keyHandler), !0 === e.options.focusOnSelect && c(e.$slideTrack).children().on("click.slick", e.selectHandler),
                c(window).on("orientationchange.slick.slick-" + e.instanceUid, c.proxy(e.orientationChange, e)),
                c(window).on("resize.slick.slick-" + e.instanceUid, c.proxy(e.resize, e)),
                c("[draggable!=true]", e.$slideTrack).on("dragstart", e.preventDefault),
                c(window).on("load.slick.slick-" + e.instanceUid, e.setPosition),
                c(e.setPosition);
        }),
        (r.prototype.initUI = function() {
            var e = this;
            !0 === e.options.arrows && e.slideCount > e.options.slidesToShow && (e.$prevArrow.show(), e.$nextArrow.show()), !0 === e.options.dots && e.slideCount > e.options.slidesToShow && e.$dots.show();
        }),
        (r.prototype.keyHandler = function(e) {
            var t = this;
            e.target.tagName.match("TEXTAREA|INPUT|SELECT") ||
                (37 === e.keyCode && !0 === t.options.accessibility ?
                    t.changeSlide({ data: { message: !0 === t.options.rtl ? "next" : "previous" } }) :
                    39 === e.keyCode && !0 === t.options.accessibility && t.changeSlide({ data: { message: !0 === t.options.rtl ? "previous" : "next" } }));
        }),
        (r.prototype.lazyLoad = function() {
            function e(e) {
                c("img[data-lazy]", e).each(function() {
                    var e = c(this),
                        t = c(this).attr("data-lazy"),
                        i = c(this).attr("data-srcset"),
                        n = c(this).attr("data-sizes") || o.$slider.attr("data-sizes"),
                        s = document.createElement("img");
                    (s.onload = function() {
                        e.animate({ opacity: 0 }, 100, function() {
                            i && (e.attr("srcset", i), n && e.attr("sizes", n)),
                                e.attr("src", t).animate({ opacity: 1 }, 200, function() {
                                    e.removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading");
                                }),
                                o.$slider.trigger("lazyLoaded", [o, e, t]);
                        });
                    }),
                    (s.onerror = function() {
                        e.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), o.$slider.trigger("lazyLoadError", [o, e, t]);
                    }),
                    (s.src = t);
                });
            }
            var t,
                i,
                n,
                o = this;
            if (
                (!0 === o.options.centerMode ?
                    (n = !0 === o.options.infinite ?
                        (i = o.currentSlide + (o.options.slidesToShow / 2 + 1)) + o.options.slidesToShow + 2 :
                        ((i = Math.max(0, o.currentSlide - (o.options.slidesToShow / 2 + 1))), o.options.slidesToShow / 2 + 1 + 2 + o.currentSlide)) :
                    ((i = o.options.infinite ? o.options.slidesToShow + o.currentSlide : o.currentSlide), (n = Math.ceil(i + o.options.slidesToShow)), !0 === o.options.fade && (0 < i && i--, n <= o.slideCount && n++)),
                    (t = o.$slider.find(".slick-slide").slice(i, n)),
                    "anticipated" === o.options.lazyLoad)
            )
                for (var s = i - 1, r = n, a = o.$slider.find(".slick-slide"), l = 0; l < o.options.slidesToScroll; l++) s < 0 && (s = o.slideCount - 1), (t = (t = t.add(a.eq(s))).add(a.eq(r))), s--, r++;
            e(t),
                o.slideCount <= o.options.slidesToShow ?
                e(o.$slider.find(".slick-slide")) :
                o.currentSlide >= o.slideCount - o.options.slidesToShow ?
                e(o.$slider.find(".slick-cloned").slice(0, o.options.slidesToShow)) :
                0 === o.currentSlide && e(o.$slider.find(".slick-cloned").slice(-1 * o.options.slidesToShow));
        }),
        (r.prototype.loadSlider = function() {
            var e = this;
            e.setPosition(), e.$slideTrack.css({ opacity: 1 }), e.$slider.removeClass("slick-loading"), e.initUI(), "progressive" === e.options.lazyLoad && e.progressiveLazyLoad();
        }),
        (r.prototype.next = r.prototype.slickNext = function() {
            this.changeSlide({ data: { message: "next" } });
        }),
        (r.prototype.orientationChange = function() {
            this.checkResponsive(), this.setPosition();
        }),
        (r.prototype.pause = r.prototype.slickPause = function() {
            this.autoPlayClear(), (this.paused = !0);
        }),
        (r.prototype.play = r.prototype.slickPlay = function() {
            var e = this;
            e.autoPlay(), (e.options.autoplay = !0), (e.paused = !1), (e.focussed = !1), (e.interrupted = !1);
        }),
        (r.prototype.postSlide = function(e) {
            var t = this;
            t.unslicked ||
                (t.$slider.trigger("afterChange", [t, e]),
                    (t.animating = !1),
                    t.slideCount > t.options.slidesToShow && t.setPosition(),
                    (t.swipeLeft = null),
                    t.options.autoplay && t.autoPlay(), !0 === t.options.accessibility && (t.initADA(), t.options.focusOnChange && c(t.$slides.get(t.currentSlide)).attr("tabindex", 0).focus()));
        }),
        (r.prototype.prev = r.prototype.slickPrev = function() {
            this.changeSlide({ data: { message: "previous" } });
        }),
        (r.prototype.preventDefault = function(e) {
            e.preventDefault();
        }),
        (r.prototype.progressiveLazyLoad = function(e) {
            e = e || 1;
            var t,
                i,
                n,
                s,
                o,
                r = this,
                a = c("img[data-lazy]", r.$slider);
            a.length ?
                ((t = a.first()),
                    (i = t.attr("data-lazy")),
                    (n = t.attr("data-srcset")),
                    (s = t.attr("data-sizes") || r.$slider.attr("data-sizes")),
                    ((o = document.createElement("img")).onload = function() {
                        n && (t.attr("srcset", n), s && t.attr("sizes", s)),
                            t.attr("src", i).removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading"), !0 === r.options.adaptiveHeight && r.setPosition(),
                            r.$slider.trigger("lazyLoaded", [r, t, i]),
                            r.progressiveLazyLoad();
                    }),
                    (o.onerror = function() {
                        e < 3 ?
                            setTimeout(function() {
                                r.progressiveLazyLoad(e + 1);
                            }, 500) :
                            (t.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), r.$slider.trigger("lazyLoadError", [r, t, i]), r.progressiveLazyLoad());
                    }),
                    (o.src = i)) :
                r.$slider.trigger("allImagesLoaded", [r]);
        }),
        (r.prototype.refresh = function(e) {
            var t,
                i,
                n = this;
            (i = n.slideCount - n.options.slidesToShow), !n.options.infinite && n.currentSlide > i && (n.currentSlide = i),
                n.slideCount <= n.options.slidesToShow && (n.currentSlide = 0),
                (t = n.currentSlide),
                n.destroy(!0),
                c.extend(n, n.initials, { currentSlide: t }),
                n.init(),
                e || n.changeSlide({ data: { message: "index", index: t } }, !1);
        }),
        (r.prototype.registerBreakpoints = function() {
            var e,
                t,
                i,
                n = this,
                s = n.options.responsive || null;
            if ("array" === c.type(s) && s.length) {
                for (e in ((n.respondTo = n.options.respondTo || "window"), s))
                    if (((i = n.breakpoints.length - 1), s.hasOwnProperty(e))) {
                        for (t = s[e].breakpoint; 0 <= i;) n.breakpoints[i] && n.breakpoints[i] === t && n.breakpoints.splice(i, 1), i--;
                        n.breakpoints.push(t), (n.breakpointSettings[t] = s[e].settings);
                    }
                n.breakpoints.sort(function(e, t) {
                    return n.options.mobileFirst ? e - t : t - e;
                });
            }
        }),
        (r.prototype.reinit = function() {
            var e = this;
            (e.$slides = e.$slideTrack.children(e.options.slide).addClass("slick-slide")),
            (e.slideCount = e.$slides.length),
            e.currentSlide >= e.slideCount && 0 !== e.currentSlide && (e.currentSlide = e.currentSlide - e.options.slidesToScroll),
                e.slideCount <= e.options.slidesToShow && (e.currentSlide = 0),
                e.registerBreakpoints(),
                e.setProps(),
                e.setupInfinite(),
                e.buildArrows(),
                e.updateArrows(),
                e.initArrowEvents(),
                e.buildDots(),
                e.updateDots(),
                e.initDotEvents(),
                e.cleanUpSlideEvents(),
                e.initSlideEvents(),
                e.checkResponsive(!1, !0), !0 === e.options.focusOnSelect && c(e.$slideTrack).children().on("click.slick", e.selectHandler),
                e.setSlideClasses("number" == typeof e.currentSlide ? e.currentSlide : 0),
                e.setPosition(),
                e.focusHandler(),
                (e.paused = !e.options.autoplay),
                e.autoPlay(),
                e.$slider.trigger("reInit", [e]);
        }),
        (r.prototype.resize = function() {
            var e = this;
            c(window).width() !== e.windowWidth &&
                (clearTimeout(e.windowDelay),
                    (e.windowDelay = window.setTimeout(function() {
                        (e.windowWidth = c(window).width()), e.checkResponsive(), e.unslicked || e.setPosition();
                    }, 50)));
        }),
        (r.prototype.removeSlide = r.prototype.slickRemove = function(e, t, i) {
            var n = this;
            if (((e = "boolean" == typeof e ? (!0 === (t = e) ? 0 : n.slideCount - 1) : !0 === t ? --e : e), n.slideCount < 1 || e < 0 || e > n.slideCount - 1)) return !1;
            n.unload(), !0 === i ? n.$slideTrack.children().remove() : n.$slideTrack.children(this.options.slide).eq(e).remove(),
                (n.$slides = n.$slideTrack.children(this.options.slide)),
                n.$slideTrack.children(this.options.slide).detach(),
                n.$slideTrack.append(n.$slides),
                (n.$slidesCache = n.$slides),
                n.reinit();
        }),
        (r.prototype.setCSS = function(e) {
            var t,
                i,
                n = this,
                s = {};
            !0 === n.options.rtl && (e = -e),
                (t = "left" == n.positionProp ? Math.ceil(e) + "px" : "0px"),
                (i = "top" == n.positionProp ? Math.ceil(e) + "px" : "0px"),
                (s[n.positionProp] = e), !1 === n.transformsEnabled || (!(s = {}) === n.cssTransitions ? (s[n.animType] = "translate(" + t + ", " + i + ")") : (s[n.animType] = "translate3d(" + t + ", " + i + ", 0px)")),
                n.$slideTrack.css(s);
        }),
        (r.prototype.setDimensions = function() {
            var e = this;
            !1 === e.options.vertical ?
                !0 === e.options.centerMode && e.$list.css({ padding: "0px " + e.options.centerPadding }) :
                (e.$list.height(e.$slides.first().outerHeight(!0) * e.options.slidesToShow), !0 === e.options.centerMode && e.$list.css({ padding: e.options.centerPadding + " 0px" })),
                (e.listWidth = e.$list.width()),
                (e.listHeight = e.$list.height()), !1 === e.options.vertical && !1 === e.options.variableWidth ?
                ((e.slideWidth = Math.ceil(e.listWidth / e.options.slidesToShow)), e.$slideTrack.width(Math.ceil(e.slideWidth * e.$slideTrack.children(".slick-slide").length))) :
                !0 === e.options.variableWidth ?
                e.$slideTrack.width(5e3 * e.slideCount) :
                ((e.slideWidth = Math.ceil(e.listWidth)), e.$slideTrack.height(Math.ceil(e.$slides.first().outerHeight(!0) * e.$slideTrack.children(".slick-slide").length)));
            var t = e.$slides.first().outerWidth(!0) - e.$slides.first().width();
            !1 === e.options.variableWidth && e.$slideTrack.children(".slick-slide").width(e.slideWidth - t);
        }),
        (r.prototype.setFade = function() {
            var i,
                n = this;
            n.$slides.each(function(e, t) {
                    (i = n.slideWidth * e * -1), !0 === n.options.rtl ? c(t).css({ position: "relative", right: i, top: 0, zIndex: n.options.zIndex - 2, opacity: 0 }) : c(t).css({ position: "relative", left: i, top: 0, zIndex: n.options.zIndex - 2, opacity: 0 });
                }),
                n.$slides.eq(n.currentSlide).css({ zIndex: n.options.zIndex - 1, opacity: 1 });
        }),
        (r.prototype.setHeight = function() {
            var e = this;
            if (1 === e.options.slidesToShow && !0 === e.options.adaptiveHeight && !1 === e.options.vertical) {
                var t = e.$slides.eq(e.currentSlide).outerHeight(!0);
                e.$list.css("height", t);
            }
        }),
        (r.prototype.setOption = r.prototype.slickSetOption = function() {
            var e,
                t,
                i,
                n,
                s,
                o = this,
                r = !1;
            if (
                ("object" === c.type(arguments[0]) ?
                    ((i = arguments[0]), (r = arguments[1]), (s = "multiple")) :
                    "string" === c.type(arguments[0]) &&
                    ((i = arguments[0]), (n = arguments[1]), (r = arguments[2]), "responsive" === arguments[0] && "array" === c.type(arguments[1]) ? (s = "responsive") : void 0 !== arguments[1] && (s = "single")),
                    "single" === s)
            )
                o.options[i] = n;
            else if ("multiple" === s)
                c.each(i, function(e, t) {
                    o.options[e] = t;
                });
            else if ("responsive" === s)
                for (t in n)
                    if ("array" !== c.type(o.options.responsive)) o.options.responsive = [n[t]];
                    else {
                        for (e = o.options.responsive.length - 1; 0 <= e;) o.options.responsive[e].breakpoint === n[t].breakpoint && o.options.responsive.splice(e, 1), e--;
                        o.options.responsive.push(n[t]);
                    }
            r && (o.unload(), o.reinit());
        }),
        (r.prototype.setPosition = function() {
            var e = this;
            e.setDimensions(), e.setHeight(), !1 === e.options.fade ? e.setCSS(e.getLeft(e.currentSlide)) : e.setFade(), e.$slider.trigger("setPosition", [e]);
        }),
        (r.prototype.setProps = function() {
            var e = this,
                t = document.body.style;
            (e.positionProp = !0 === e.options.vertical ? "top" : "left"),
            "top" === e.positionProp ? e.$slider.addClass("slick-vertical") : e.$slider.removeClass("slick-vertical"),
                (void 0 === t.WebkitTransition && void 0 === t.MozTransition && void 0 === t.msTransition) || (!0 === e.options.useCSS && (e.cssTransitions = !0)),
                e.options.fade && ("number" == typeof e.options.zIndex ? e.options.zIndex < 3 && (e.options.zIndex = 3) : (e.options.zIndex = e.defaults.zIndex)),
                void 0 !== t.OTransform && ((e.animType = "OTransform"), (e.transformType = "-o-transform"), (e.transitionType = "OTransition"), void 0 === t.perspectiveProperty && void 0 === t.webkitPerspective && (e.animType = !1)),
                void 0 !== t.MozTransform && ((e.animType = "MozTransform"), (e.transformType = "-moz-transform"), (e.transitionType = "MozTransition"), void 0 === t.perspectiveProperty && void 0 === t.MozPerspective && (e.animType = !1)),
                void 0 !== t.webkitTransform &&
                ((e.animType = "webkitTransform"), (e.transformType = "-webkit-transform"), (e.transitionType = "webkitTransition"), void 0 === t.perspectiveProperty && void 0 === t.webkitPerspective && (e.animType = !1)),
                void 0 !== t.msTransform && ((e.animType = "msTransform"), (e.transformType = "-ms-transform"), (e.transitionType = "msTransition"), void 0 === t.msTransform && (e.animType = !1)),
                void 0 !== t.transform && !1 !== e.animType && ((e.animType = "transform"), (e.transformType = "transform"), (e.transitionType = "transition")),
                (e.transformsEnabled = e.options.useTransform && null !== e.animType && !1 !== e.animType);
        }),
        (r.prototype.setSlideClasses = function(e) {
            var t,
                i,
                n,
                s,
                o = this;
            if (((i = o.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden", "true")), o.$slides.eq(e).addClass("slick-current"), !0 === o.options.centerMode)) {
                var r = o.options.slidesToShow % 2 == 0 ? 1 : 0;
                (t = Math.floor(o.options.slidesToShow / 2)), !0 === o.options.infinite &&
                    (t <= e && e <= o.slideCount - 1 - t ?
                        o.$slides
                        .slice(e - t + r, e + t + 1)
                        .addClass("slick-active")
                        .attr("aria-hidden", "false") :
                        ((n = o.options.slidesToShow + e),
                            i
                            .slice(n - t + 1 + r, n + t + 2)
                            .addClass("slick-active")
                            .attr("aria-hidden", "false")),
                        0 === e ? i.eq(i.length - 1 - o.options.slidesToShow).addClass("slick-center") : e === o.slideCount - 1 && i.eq(o.options.slidesToShow).addClass("slick-center")),
                    o.$slides.eq(e).addClass("slick-center");
            } else
                0 <= e && e <= o.slideCount - o.options.slidesToShow ?
                o.$slides
                .slice(e, e + o.options.slidesToShow)
                .addClass("slick-active")
                .attr("aria-hidden", "false") :
                i.length <= o.options.slidesToShow ?
                i.addClass("slick-active").attr("aria-hidden", "false") :
                ((s = o.slideCount % o.options.slidesToShow),
                    (n = !0 === o.options.infinite ? o.options.slidesToShow + e : e),
                    o.options.slidesToShow == o.options.slidesToScroll && o.slideCount - e < o.options.slidesToShow ?
                    i
                    .slice(n - (o.options.slidesToShow - s), n + s)
                    .addClass("slick-active")
                    .attr("aria-hidden", "false") :
                    i
                    .slice(n, n + o.options.slidesToShow)
                    .addClass("slick-active")
                    .attr("aria-hidden", "false"));
            ("ondemand" !== o.options.lazyLoad && "anticipated" !== o.options.lazyLoad) || o.lazyLoad();
        }),
        (r.prototype.setupInfinite = function() {
            var e,
                t,
                i,
                n = this;
            if ((!0 === n.options.fade && (n.options.centerMode = !1), !0 === n.options.infinite && !1 === n.options.fade && ((t = null), n.slideCount > n.options.slidesToShow))) {
                for (i = !0 === n.options.centerMode ? n.options.slidesToShow + 1 : n.options.slidesToShow, e = n.slideCount; e > n.slideCount - i; e -= 1)
                    (t = e - 1),
                    c(n.$slides[t])
                    .clone(!0)
                    .attr("id", "")
                    .attr("data-slick-index", t - n.slideCount)
                    .prependTo(n.$slideTrack)
                    .addClass("slick-cloned");
                for (e = 0; e < i + n.slideCount; e += 1)
                    (t = e),
                    c(n.$slides[t])
                    .clone(!0)
                    .attr("id", "")
                    .attr("data-slick-index", t + n.slideCount)
                    .appendTo(n.$slideTrack)
                    .addClass("slick-cloned");
                n.$slideTrack
                    .find(".slick-cloned")
                    .find("[id]")
                    .each(function() {
                        c(this).attr("id", "");
                    });
            }
        }),
        (r.prototype.interrupt = function(e) {
            e || this.autoPlay(), (this.interrupted = e);
        }),
        (r.prototype.selectHandler = function(e) {
            var t = c(e.target).is(".slick-slide") ? c(e.target) : c(e.target).parents(".slick-slide"),
                i = parseInt(t.attr("data-slick-index"));
            i || (i = 0), this.slideCount <= this.options.slidesToShow ? this.slideHandler(i, !1, !0) : this.slideHandler(i);
        }),
        (r.prototype.slideHandler = function(e, t, i) {
            var n,
                s,
                o,
                r,
                a,
                l = null,
                c = this;
            if (((t = t || !1), !((!0 === c.animating && !0 === c.options.waitForAnimate) || (!0 === c.options.fade && c.currentSlide === e))))
                if (
                    (!1 === t && c.asNavFor(e),
                        (n = e),
                        (l = c.getLeft(n)),
                        (r = c.getLeft(c.currentSlide)),
                        (c.currentLeft = null === c.swipeLeft ? r : c.swipeLeft), !1 === c.options.infinite && !1 === c.options.centerMode && (e < 0 || e > c.getDotCount() * c.options.slidesToScroll))
                )
                    !1 === c.options.fade &&
                    ((n = c.currentSlide), !0 !== i ?
                        c.animateSlide(r, function() {
                            c.postSlide(n);
                        }) :
                        c.postSlide(n));
                else if (!1 === c.options.infinite && !0 === c.options.centerMode && (e < 0 || e > c.slideCount - c.options.slidesToScroll))
                !1 === c.options.fade &&
                ((n = c.currentSlide), !0 !== i ?
                    c.animateSlide(r, function() {
                        c.postSlide(n);
                    }) :
                    c.postSlide(n));
            else {
                if (
                    (c.options.autoplay && clearInterval(c.autoPlayTimer),
                        (s =
                            n < 0 ?
                            c.slideCount % c.options.slidesToScroll != 0 ?
                            c.slideCount - (c.slideCount % c.options.slidesToScroll) :
                            c.slideCount + n :
                            n >= c.slideCount ?
                            c.slideCount % c.options.slidesToScroll != 0 ?
                            0 :
                            n - c.slideCount :
                            n),
                        (c.animating = !0),
                        c.$slider.trigger("beforeChange", [c, c.currentSlide, s]),
                        (o = c.currentSlide),
                        (c.currentSlide = s),
                        c.setSlideClasses(c.currentSlide),
                        c.options.asNavFor && (a = (a = c.getNavTarget()).slick("getSlick")).slideCount <= a.options.slidesToShow && a.setSlideClasses(c.currentSlide),
                        c.updateDots(),
                        c.updateArrows(), !0 === c.options.fade)
                )
                    return (!0 !== i ?
                        (c.fadeSlideOut(o),
                            c.fadeSlide(s, function() {
                                c.postSlide(s);
                            })) :
                        c.postSlide(s),
                        void c.animateHeight()
                    );
                !0 !== i ?
                    c.animateSlide(l, function() {
                        c.postSlide(s);
                    }) :
                    c.postSlide(s);
            }
        }),
        (r.prototype.startLoad = function() {
            var e = this;
            !0 === e.options.arrows && e.slideCount > e.options.slidesToShow && (e.$prevArrow.hide(), e.$nextArrow.hide()), !0 === e.options.dots && e.slideCount > e.options.slidesToShow && e.$dots.hide(),
                e.$slider.addClass("slick-loading");
        }),
        (r.prototype.swipeDirection = function() {
            var e,
                t,
                i,
                n,
                s = this;
            return (
                (e = s.touchObject.startX - s.touchObject.curX),
                (t = s.touchObject.startY - s.touchObject.curY),
                (i = Math.atan2(t, e)),
                (n = Math.round((180 * i) / Math.PI)) < 0 && (n = 360 - Math.abs(n)),
                n <= 45 && 0 <= n ?
                !1 === s.options.rtl ?
                "left" :
                "right" :
                n <= 360 && 315 <= n ?
                !1 === s.options.rtl ?
                "left" :
                "right" :
                135 <= n && n <= 225 ?
                !1 === s.options.rtl ?
                "right" :
                "left" :
                !0 === s.options.verticalSwiping ?
                35 <= n && n <= 135 ?
                "down" :
                "up" :
                "vertical"
            );
        }),
        (r.prototype.swipeEnd = function(e) {
            var t,
                i,
                n = this;
            if (((n.dragging = !1), (n.swiping = !1), n.scrolling)) return (n.scrolling = !1);
            if (((n.interrupted = !1), (n.shouldClick = !(10 < n.touchObject.swipeLength)), void 0 === n.touchObject.curX)) return !1;
            if ((!0 === n.touchObject.edgeHit && n.$slider.trigger("edge", [n, n.swipeDirection()]), n.touchObject.swipeLength >= n.touchObject.minSwipe)) {
                switch ((i = n.swipeDirection())) {
                    case "left":
                    case "down":
                        (t = n.options.swipeToSlide ? n.checkNavigable(n.currentSlide + n.getSlideCount()) : n.currentSlide + n.getSlideCount()), (n.currentDirection = 0);
                        break;
                    case "right":
                    case "up":
                        (t = n.options.swipeToSlide ? n.checkNavigable(n.currentSlide - n.getSlideCount()) : n.currentSlide - n.getSlideCount()), (n.currentDirection = 1);
                }
                "vertical" != i && (n.slideHandler(t), (n.touchObject = {}), n.$slider.trigger("swipe", [n, i]));
            } else n.touchObject.startX !== n.touchObject.curX && (n.slideHandler(n.currentSlide), (n.touchObject = {}));
        }),
        (r.prototype.swipeHandler = function(e) {
            var t = this;
            if (!(!1 === t.options.swipe || ("ontouchend" in document && !1 === t.options.swipe) || (!1 === t.options.draggable && -1 !== e.type.indexOf("mouse"))))
                switch (
                    ((t.touchObject.fingerCount = e.originalEvent && void 0 !== e.originalEvent.touches ? e.originalEvent.touches.length : 1),
                        (t.touchObject.minSwipe = t.listWidth / t.options.touchThreshold), !0 === t.options.verticalSwiping && (t.touchObject.minSwipe = t.listHeight / t.options.touchThreshold),
                        e.data.action)
                ) {
                    case "start":
                        t.swipeStart(e);
                        break;
                    case "move":
                        t.swipeMove(e);
                        break;
                    case "end":
                        t.swipeEnd(e);
                }
        }),
        (r.prototype.swipeMove = function(e) {
            var t,
                i,
                n,
                s,
                o,
                r,
                a = this;
            return (
                (o = void 0 !== e.originalEvent ? e.originalEvent.touches : null), !(!a.dragging || a.scrolling || (o && 1 !== o.length)) &&
                ((t = a.getLeft(a.currentSlide)),
                    (a.touchObject.curX = void 0 !== o ? o[0].pageX : e.clientX),
                    (a.touchObject.curY = void 0 !== o ? o[0].pageY : e.clientY),
                    (a.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(a.touchObject.curX - a.touchObject.startX, 2)))),
                    (r = Math.round(Math.sqrt(Math.pow(a.touchObject.curY - a.touchObject.startY, 2)))), !a.options.verticalSwiping && !a.swiping && 4 < r ?
                    !(a.scrolling = !0) :
                    (!0 === a.options.verticalSwiping && (a.touchObject.swipeLength = r),
                        (i = a.swipeDirection()),
                        void 0 !== e.originalEvent && 4 < a.touchObject.swipeLength && ((a.swiping = !0), e.preventDefault()),
                        (s = (!1 === a.options.rtl ? 1 : -1) * (a.touchObject.curX > a.touchObject.startX ? 1 : -1)), !0 === a.options.verticalSwiping && (s = a.touchObject.curY > a.touchObject.startY ? 1 : -1),
                        (n = a.touchObject.swipeLength),
                        (a.touchObject.edgeHit = !1) === a.options.infinite &&
                        ((0 === a.currentSlide && "right" === i) || (a.currentSlide >= a.getDotCount() && "left" === i)) &&
                        ((n = a.touchObject.swipeLength * a.options.edgeFriction), (a.touchObject.edgeHit = !0)), !1 === a.options.vertical ? (a.swipeLeft = t + n * s) : (a.swipeLeft = t + n * (a.$list.height() / a.listWidth) * s), !0 === a.options.verticalSwiping && (a.swipeLeft = t + n * s), !0 !== a.options.fade && !1 !== a.options.touchMove && (!0 === a.animating ? ((a.swipeLeft = null), !1) : void a.setCSS(a.swipeLeft))))
            );
        }),
        (r.prototype.swipeStart = function(e) {
            var t,
                i = this;
            if (((i.interrupted = !0), 1 !== i.touchObject.fingerCount || i.slideCount <= i.options.slidesToShow)) return !(i.touchObject = {});
            void 0 !== e.originalEvent && void 0 !== e.originalEvent.touches && (t = e.originalEvent.touches[0]),
                (i.touchObject.startX = i.touchObject.curX = void 0 !== t ? t.pageX : e.clientX),
                (i.touchObject.startY = i.touchObject.curY = void 0 !== t ? t.pageY : e.clientY),
                (i.dragging = !0);
        }),
        (r.prototype.unfilterSlides = r.prototype.slickUnfilter = function() {
            var e = this;
            null !== e.$slidesCache && (e.unload(), e.$slideTrack.children(this.options.slide).detach(), e.$slidesCache.appendTo(e.$slideTrack), e.reinit());
        }),
        (r.prototype.unload = function() {
            var e = this;
            c(".slick-cloned", e.$slider).remove(),
                e.$dots && e.$dots.remove(),
                e.$prevArrow && e.htmlExpr.test(e.options.prevArrow) && e.$prevArrow.remove(),
                e.$nextArrow && e.htmlExpr.test(e.options.nextArrow) && e.$nextArrow.remove(),
                e.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden", "true").css("width", "");
        }),
        (r.prototype.unslick = function(e) {
            this.$slider.trigger("unslick", [this, e]), this.destroy();
        }),
        (r.prototype.updateArrows = function() {
            var e = this;
            Math.floor(e.options.slidesToShow / 2), !0 === e.options.arrows &&
                e.slideCount > e.options.slidesToShow &&
                !e.options.infinite &&
                (e.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false"),
                    e.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"),
                    0 === e.currentSlide ?
                    (e.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"), e.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) :
                    e.currentSlide >= e.slideCount - e.options.slidesToShow && !1 === e.options.centerMode ?
                    (e.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), e.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) :
                    e.currentSlide >= e.slideCount - 1 &&
                    !0 === e.options.centerMode &&
                    (e.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), e.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")));
        }),
        (r.prototype.updateDots = function() {
            var e = this;
            null !== e.$dots &&
                (e.$dots.find("li").removeClass("slick-active").end(),
                    e.$dots
                    .find("li")
                    .eq(Math.floor(e.currentSlide / e.options.slidesToScroll))
                    .addClass("slick-active"));
        }),
        (r.prototype.visibility = function() {
            this.options.autoplay && (document[this.hidden] ? (this.interrupted = !0) : (this.interrupted = !1));
        }),
        (c.fn.slick = function() {
            var e,
                t,
                i = this,
                n = arguments[0],
                s = Array.prototype.slice.call(arguments, 1),
                o = i.length;
            for (e = 0; e < o; e++)
                if (("object" == typeof n || void 0 === n ? (i[e].slick = new r(i[e], n)) : (t = i[e].slick[n].apply(i[e].slick, s)), void 0 !== t)) return t;
            return i;
        });
    }),
    (e = function(d) {
        var u,
            n,
            h,
            s,
            p,
            t,
            l = "Close",
            c = "BeforeClose",
            f = "MarkupParse",
            m = "Open",
            g = ".mfp",
            v = "mfp-ready",
            i = "mfp-removing",
            r = "mfp-prevent-close",
            e = function() {},
            a = !!window.jQuery,
            y = d(window),
            b = function(e, t) {
                u.ev.on("mfp" + e + g, t);
            },
            w = function(e, t, i, n) {
                var s = document.createElement("div");
                return (s.className = "mfp-" + e), i && (s.innerHTML = i), n ? t && t.appendChild(s) : ((s = d(s)), t && s.appendTo(t)), s;
            },
            _ = function(e, t) {
                u.ev.triggerHandler("mfp" + e, t), u.st.callbacks && ((e = e.charAt(0).toLowerCase() + e.slice(1)), u.st.callbacks[e] && u.st.callbacks[e].apply(u, d.isArray(t) ? t : [t]));
            },
            k = function(e) {
                return (e === t && u.currTemplate.closeBtn) || ((u.currTemplate.closeBtn = d(u.st.closeMarkup.replace("%title%", u.st.tClose))), (t = e)), u.currTemplate.closeBtn;
            },
            o = function() {
                d.magnificPopup.instance || ((u = new e()).init(), (d.magnificPopup.instance = u));
            };
        (e.prototype = {
            constructor: e,
            init: function() {
                var e = navigator.appVersion;
                (u.isLowIE = u.isIE8 = document.all && !document.addEventListener),
                (u.isAndroid = /android/gi.test(e)),
                (u.isIOS = /iphone|ipad|ipod/gi.test(e)),
                (u.supportsTransition = (function() {
                    var e = document.createElement("p").style,
                        t = ["ms", "O", "Moz", "Webkit"];
                    if (void 0 !== e.transition) return !0;
                    for (; t.length;)
                        if (t.pop() + "Transition" in e) return !0;
                    return !1;
                })()),
                (u.probablyMobile = u.isAndroid || u.isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent)),
                (h = d(document)),
                (u.popupsCache = {});
            },
            open: function(e) {
                var t;
                if (!1 === e.isObj) {
                    (u.items = e.items.toArray()), (u.index = 0);
                    var i,
                        n = e.items;
                    for (t = 0; t < n.length; t++)
                        if (((i = n[t]).parsed && (i = i.el[0]), i === e.el[0])) {
                            u.index = t;
                            break;
                        }
                } else(u.items = d.isArray(e.items) ? e.items : [e.items]), (u.index = e.index || 0);
                if (!u.isOpen) {
                    (u.types = []),
                    (p = ""),
                    e.mainEl && e.mainEl.length ? (u.ev = e.mainEl.eq(0)) : (u.ev = h),
                        e.key ? (u.popupsCache[e.key] || (u.popupsCache[e.key] = {}), (u.currTemplate = u.popupsCache[e.key])) : (u.currTemplate = {}),
                        (u.st = d.extend(!0, {}, d.magnificPopup.defaults, e)),
                        (u.fixedContentPos = "auto" === u.st.fixedContentPos ? !u.probablyMobile : u.st.fixedContentPos),
                        u.st.modal && ((u.st.closeOnContentClick = !1), (u.st.closeOnBgClick = !1), (u.st.showCloseBtn = !1), (u.st.enableEscapeKey = !1)),
                        u.bgOverlay ||
                        ((u.bgOverlay = w("bg").on("click" + g, function() {
                                u.close();
                            })),
                            (u.wrap = w("wrap")
                                .attr("tabindex", -1)
                                .on("click" + g, function(e) {
                                    u._checkIfClose(e.target) && u.close();
                                })),
                            (u.container = w("container", u.wrap))),
                        (u.contentContainer = w("content")),
                        u.st.preloader && (u.preloader = w("preloader", u.container, u.st.tLoading));
                    var s = d.magnificPopup.modules;
                    for (t = 0; t < s.length; t++) {
                        var o = s[t];
                        (o = o.charAt(0).toUpperCase() + o.slice(1)), u["init" + o].call(u);
                    }
                    _("BeforeOpen"),
                        u.st.showCloseBtn &&
                        (u.st.closeBtnInside ?
                            (b(f, function(e, t, i, n) {
                                    i.close_replaceWith = k(n.type);
                                }),
                                (p += " mfp-close-btn-in")) :
                            u.wrap.append(k())),
                        u.st.alignTop && (p += " mfp-align-top"),
                        u.fixedContentPos ? u.wrap.css({ overflow: u.st.overflowY, overflowX: "hidden", overflowY: u.st.overflowY }) : u.wrap.css({ top: y.scrollTop(), position: "absolute" }),
                        (!1 === u.st.fixedBgPos || ("auto" === u.st.fixedBgPos && !u.fixedContentPos)) && u.bgOverlay.css({ height: h.height(), position: "absolute" }),
                        u.st.enableEscapeKey &&
                        h.on("keyup" + g, function(e) {
                            27 === e.keyCode && u.close();
                        }),
                        y.on("resize" + g, function() {
                            u.updateSize();
                        }),
                        u.st.closeOnContentClick || (p += " mfp-auto-cursor"),
                        p && u.wrap.addClass(p);
                    var r = (u.wH = y.height()),
                        a = {};
                    if (u.fixedContentPos && u._hasScrollBar(r)) {
                        var l = u._getScrollbarSize();
                        l && (a.marginRight = l);
                    }
                    u.fixedContentPos && (u.isIE7 ? d("body, html").css("overflow", "hidden") : (a.overflow = "hidden"));
                    var c = u.st.mainClass;
                    return (
                        u.isIE7 && (c += " mfp-ie7"),
                        c && u._addClassToMFP(c),
                        u.updateItemHTML(),
                        _("BuildControls"),
                        d("html").css(a),
                        u.bgOverlay.add(u.wrap).prependTo(u.st.prependTo || d(document.body)),
                        (u._lastFocusedEl = document.activeElement),
                        setTimeout(function() {
                            u.content ? (u._addClassToMFP(v), u._setFocus()) : u.bgOverlay.addClass(v), h.on("focusin" + g, u._onFocusIn);
                        }, 16),
                        (u.isOpen = !0),
                        u.updateSize(r),
                        _(m),
                        e
                    );
                }
                u.updateItemHTML();
            },
            close: function() {
                u.isOpen &&
                    (_(c),
                        (u.isOpen = !1),
                        u.st.removalDelay && !u.isLowIE && u.supportsTransition ?
                        (u._addClassToMFP(i),
                            setTimeout(function() {
                                u._close();
                            }, u.st.removalDelay)) :
                        u._close());
            },
            _close: function() {
                _(l);
                var e = i + " " + v + " ";
                if ((u.bgOverlay.detach(), u.wrap.detach(), u.container.empty(), u.st.mainClass && (e += u.st.mainClass + " "), u._removeClassFromMFP(e), u.fixedContentPos)) {
                    var t = { marginRight: "" };
                    u.isIE7 ? d("body, html").css("overflow", "") : (t.overflow = ""), d("html").css(t);
                }
                h.off("keyup.mfp focusin" + g),
                    u.ev.off(g),
                    u.wrap.attr("class", "mfp-wrap").removeAttr("style"),
                    u.bgOverlay.attr("class", "mfp-bg"),
                    u.container.attr("class", "mfp-container"), !u.st.showCloseBtn || (u.st.closeBtnInside && !0 !== u.currTemplate[u.currItem.type]) || (u.currTemplate.closeBtn && u.currTemplate.closeBtn.detach()),
                    u.st.autoFocusLast && u._lastFocusedEl && d(u._lastFocusedEl).focus(),
                    (u.currItem = null),
                    (u.content = null),
                    (u.currTemplate = null),
                    (u.prevHeight = 0),
                    _("AfterClose");
            },
            updateSize: function(e) {
                if (u.isIOS) {
                    var t = document.documentElement.clientWidth / window.innerWidth,
                        i = window.innerHeight * t;
                    u.wrap.css("height", i), (u.wH = i);
                } else u.wH = e || y.height();
                u.fixedContentPos || u.wrap.css("height", u.wH), _("Resize");
            },
            updateItemHTML: function() {
                var e = u.items[u.index];
                u.contentContainer.detach(), u.content && u.content.detach(), e.parsed || (e = u.parseEl(u.index));
                var t = e.type;
                if ((_("BeforeChange", [u.currItem ? u.currItem.type : "", t]), (u.currItem = e), !u.currTemplate[t])) {
                    var i = !!u.st[t] && u.st[t].markup;
                    _("FirstMarkupParse", i), (u.currTemplate[t] = !i || d(i));
                }
                s && s !== e.type && u.container.removeClass("mfp-" + s + "-holder");
                var n = u["get" + t.charAt(0).toUpperCase() + t.slice(1)](e, u.currTemplate[t]);
                u.appendContent(n, t), (e.preloaded = !0), _("Change", e), (s = e.type), u.container.prepend(u.contentContainer), _("AfterChange");
            },
            appendContent: function(e, t) {
                (u.content = e) ? (u.st.showCloseBtn && u.st.closeBtnInside && !0 === u.currTemplate[t] ? u.content.find(".mfp-close").length || u.content.append(k()) : (u.content = e)) : (u.content = ""),
                _("BeforeAppend"),
                    u.container.addClass("mfp-" + t + "-holder"),
                    u.contentContainer.append(u.content);
            },
            parseEl: function(e) {
                var t,
                    i = u.items[e];
                if ((i = i.tagName ? { el: d(i) } : ((t = i.type), { data: i, src: i.src })).el) {
                    for (var n = u.types, s = 0; s < n.length; s++)
                        if (i.el.hasClass("mfp-" + n[s])) {
                            t = n[s];
                            break;
                        }
                        (i.src = i.el.attr("data-mfp-src")), i.src || (i.src = i.el.attr("href"));
                }
                return (i.type = t || u.st.type || "inline"), (i.index = e), (i.parsed = !0), (u.items[e] = i), _("ElementParse", i), u.items[e];
            },
            addGroup: function(t, i) {
                var e = function(e) {
                    (e.mfpEl = this), u._openClick(e, t, i);
                };
                i || (i = {});
                var n = "click.magnificPopup";
                (i.mainEl = t), i.items ? ((i.isObj = !0), t.off(n).on(n, e)) : ((i.isObj = !1), i.delegate ? t.off(n).on(n, i.delegate, e) : (i.items = t).off(n).on(n, e));
            },
            _openClick: function(e, t, i) {
                if ((void 0 !== i.midClick ? i.midClick : d.magnificPopup.defaults.midClick) || !(2 === e.which || e.ctrlKey || e.metaKey || e.altKey || e.shiftKey)) {
                    var n = void 0 !== i.disableOn ? i.disableOn : d.magnificPopup.defaults.disableOn;
                    if (n)
                        if (d.isFunction(n)) {
                            if (!n.call(u)) return !0;
                        } else if (y.width() < n) return !0;
                    e.type && (e.preventDefault(), u.isOpen && e.stopPropagation()), (i.el = d(e.mfpEl)), i.delegate && (i.items = t.find(i.delegate)), u.open(i);
                }
            },
            updateStatus: function(e, t) {
                if (u.preloader) {
                    n !== e && u.container.removeClass("mfp-s-" + n), t || "loading" !== e || (t = u.st.tLoading);
                    var i = { status: e, text: t };
                    _("UpdateStatus", i),
                        (e = i.status),
                        (t = i.text),
                        u.preloader.html(t),
                        u.preloader.find("a").on("click", function(e) {
                            e.stopImmediatePropagation();
                        }),
                        u.container.addClass("mfp-s-" + e),
                        (n = e);
                }
            },
            _checkIfClose: function(e) {
                if (!d(e).hasClass(r)) {
                    var t = u.st.closeOnContentClick,
                        i = u.st.closeOnBgClick;
                    if (t && i) return !0;
                    if (!u.content || d(e).hasClass("mfp-close") || (u.preloader && e === u.preloader[0])) return !0;
                    if (e === u.content[0] || d.contains(u.content[0], e)) {
                        if (t) return !0;
                    } else if (i && d.contains(document, e)) return !0;
                    return !1;
                }
            },
            _addClassToMFP: function(e) {
                u.bgOverlay.addClass(e), u.wrap.addClass(e);
            },
            _removeClassFromMFP: function(e) {
                this.bgOverlay.removeClass(e), u.wrap.removeClass(e);
            },
            _hasScrollBar: function(e) {
                return (u.isIE7 ? h.height() : document.body.scrollHeight) > (e || y.height());
            },
            _setFocus: function() {
                (u.st.focus ? u.content.find(u.st.focus).eq(0) : u.wrap).focus();
            },
            _onFocusIn: function(e) {
                return e.target === u.wrap[0] || d.contains(u.wrap[0], e.target) ? void 0 : (u._setFocus(), !1);
            },
            _parseMarkup: function(s, e, t) {
                var o;
                t.data && (e = d.extend(t.data, e)),
                    _(f, [s, e, t]),
                    d.each(e, function(e, t) {
                        if (void 0 === t || !1 === t) return !0;
                        if (1 < (o = e.split("_")).length) {
                            var i = s.find(g + "-" + o[0]);
                            if (0 < i.length) {
                                var n = o[1];
                                "replaceWith" === n ? i[0] !== t[0] && i.replaceWith(t) : "img" === n ? (i.is("img") ? i.attr("src", t) : i.replaceWith(d("<img>").attr("src", t).attr("class", i.attr("class")))) : i.attr(o[1], t);
                            }
                        } else s.find(g + "-" + e).html(t);
                    });
            },
            _getScrollbarSize: function() {
                if (void 0 === u.scrollbarSize) {
                    var e = document.createElement("div");
                    (e.style.cssText = "width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;"), document.body.appendChild(e), (u.scrollbarSize = e.offsetWidth - e.clientWidth), document.body.removeChild(e);
                }
                return u.scrollbarSize;
            },
        }),
        (d.magnificPopup = {
            instance: null,
            proto: e.prototype,
            modules: [],
            open: function(e, t) {
                return o(), ((e = e ? d.extend(!0, {}, e) : {}).isObj = !0), (e.index = t || 0), this.instance.open(e);
            },
            close: function() {
                return d.magnificPopup.instance && d.magnificPopup.instance.close();
            },
            registerModule: function(e, t) {
                t.options && (d.magnificPopup.defaults[e] = t.options), d.extend(this.proto, t.proto), this.modules.push(e);
            },
            defaults: {
                disableOn: 0,
                key: null,
                midClick: !1,
                mainClass: "",
                preloader: !0,
                focus: "",
                closeOnContentClick: !1,
                closeOnBgClick: !0,
                closeBtnInside: !0,
                showCloseBtn: !0,
                enableEscapeKey: !0,
                modal: !1,
                alignTop: !1,
                removalDelay: 0,
                prependTo: null,
                fixedContentPos: "auto",
                fixedBgPos: "auto",
                overflowY: "auto",
                closeMarkup: '<button title="%title%" type="button" class="mfp-close">&#215;</button>',
                tClose: "Close (Esc)",
                tLoading: "Loading...",
                autoFocusLast: !0,
            },
        }),
        (d.fn.magnificPopup = function(e) {
            o();
            var t = d(this);
            if ("string" == typeof e)
                if ("open" === e) {
                    var i,
                        n = a ? t.data("magnificPopup") : t[0].magnificPopup,
                        s = parseInt(arguments[1], 10) || 0;
                    (i = n.items ? n.items[s] : ((i = t), n.delegate && (i = i.find(n.delegate)), i.eq(s))), u._openClick({ mfpEl: i }, t, n);
                } else u.isOpen && u[e].apply(u, Array.prototype.slice.call(arguments, 1));
            else(e = d.extend(!0, {}, e)), a ? t.data("magnificPopup", e) : (t[0].magnificPopup = e), u.addGroup(t, e);
            return t;
        });
        var T,
            C,
            S,
            x = "inline",
            E = function() {
                S && (C.after(S.addClass(T)).detach(), (S = null));
            };
        d.magnificPopup.registerModule(x, {
            options: { hiddenClass: "hide", markup: "", tNotFound: "Content not found" },
            proto: {
                initInline: function() {
                    u.types.push(x),
                        b(l + "." + x, function() {
                            E();
                        });
                },
                getInline: function(e, t) {
                    if ((E(), e.src)) {
                        var i = u.st.inline,
                            n = d(e.src);
                        if (n.length) {
                            var s = n[0].parentNode;
                            s && s.tagName && (C || ((T = i.hiddenClass), (C = w(T)), (T = "mfp-" + T)), (S = n.after(C).detach().removeClass(T))), u.updateStatus("ready");
                        } else u.updateStatus("error", i.tNotFound), (n = d("<div>"));
                        return (e.inlineElement = n);
                    }
                    return u.updateStatus("ready"), u._parseMarkup(t, {}, e), t;
                },
            },
        });
        var D,
            F = "ajax",
            A = function() {
                D && d(document.body).removeClass(D);
            },
            $ = function() {
                A(), u.req && u.req.abort();
            };
        d.magnificPopup.registerModule(F, {
            options: { settings: null, cursor: "mfp-ajax-cur", tError: '<a href="%url%">The content</a> could not be loaded.' },
            proto: {
                initAjax: function() {
                    u.types.push(F), (D = u.st.ajax.cursor), b(l + "." + F, $), b("BeforeChange." + F, $);
                },
                getAjax: function(s) {
                    D && d(document.body).addClass(D), u.updateStatus("loading");
                    var e = d.extend({
                            url: s.src,
                            success: function(e, t, i) {
                                var n = { data: e, xhr: i };
                                _("ParseAjax", n),
                                    u.appendContent(d(n.data), F),
                                    (s.finished = !0),
                                    A(),
                                    u._setFocus(),
                                    setTimeout(function() {
                                        u.wrap.addClass(v);
                                    }, 16),
                                    u.updateStatus("ready"),
                                    _("AjaxContentAdded");
                            },
                            error: function() {
                                A(), (s.finished = s.loadError = !0), u.updateStatus("error", u.st.ajax.tError.replace("%url%", s.src));
                            },
                        },
                        u.st.ajax.settings
                    );
                    return (u.req = d.ajax(e)), "";
                },
            },
        });
        var I;
        d.magnificPopup.registerModule("image", {
            options: {
                markup: '<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',
                cursor: "mfp-zoom-out-cur",
                titleSrc: "title",
                verticalFit: !0,
                tError: '<a href="%url%">The image</a> could not be loaded.',
            },
            proto: {
                initImage: function() {
                    var e = u.st.image,
                        t = ".image";
                    u.types.push("image"),
                        b(m + t, function() {
                            "image" === u.currItem.type && e.cursor && d(document.body).addClass(e.cursor);
                        }),
                        b(l + t, function() {
                            e.cursor && d(document.body).removeClass(e.cursor), y.off("resize" + g);
                        }),
                        b("Resize" + t, u.resizeImage),
                        u.isLowIE && b("AfterChange", u.resizeImage);
                },
                resizeImage: function() {
                    var e = u.currItem;
                    if (e && e.img && u.st.image.verticalFit) {
                        var t = 0;
                        u.isLowIE && (t = parseInt(e.img.css("padding-top"), 10) + parseInt(e.img.css("padding-bottom"), 10)), e.img.css("max-height", u.wH - t);
                    }
                },
                _onImageHasSize: function(e) {
                    e.img && ((e.hasSize = !0), I && clearInterval(I), (e.isCheckingImgSize = !1), _("ImageHasSize", e), e.imgHidden && (u.content && u.content.removeClass("mfp-loading"), (e.imgHidden = !1)));
                },
                findImageSize: function(t) {
                    var i = 0,
                        n = t.img[0],
                        s = function(e) {
                            I && clearInterval(I),
                                (I = setInterval(function() {
                                    return 0 < n.naturalWidth ? void u._onImageHasSize(t) : (200 < i && clearInterval(I), void(3 === ++i ? s(10) : 40 === i ? s(50) : 100 === i && s(500)));
                                }, e));
                        };
                    s(1);
                },
                getImage: function(e, t) {
                    var i = 0,
                        n = function() {
                            e &&
                                (e.img[0].complete ?
                                    (e.img.off(".mfploader"), e === u.currItem && (u._onImageHasSize(e), u.updateStatus("ready")), (e.hasSize = !0), (e.loaded = !0), _("ImageLoadComplete")) :
                                    ++i < 200 ?
                                    setTimeout(n, 100) :
                                    s());
                        },
                        s = function() {
                            e && (e.img.off(".mfploader"), e === u.currItem && (u._onImageHasSize(e), u.updateStatus("error", o.tError.replace("%url%", e.src))), (e.hasSize = !0), (e.loaded = !0), (e.loadError = !0));
                        },
                        o = u.st.image,
                        r = t.find(".mfp-img");
                    if (r.length) {
                        var a = document.createElement("img");
                        (a.className = "mfp-img"),
                        e.el && e.el.find("img").length && (a.alt = e.el.find("img").attr("alt")),
                            (e.img = d(a).on("load.mfploader", n).on("error.mfploader", s)),
                            (a.src = e.src),
                            r.is("img") && (e.img = e.img.clone()),
                            0 < (a = e.img[0]).naturalWidth ? (e.hasSize = !0) : a.width || (e.hasSize = !1);
                    }
                    return (
                        u._parseMarkup(
                            t, {
                                title: (function(e) {
                                    if (e.data && void 0 !== e.data.title) return e.data.title;
                                    var t = u.st.image.titleSrc;
                                    if (t) {
                                        if (d.isFunction(t)) return t.call(u, e);
                                        if (e.el) return e.el.attr(t) || "";
                                    }
                                    return "";
                                })(e),
                                img_replaceWith: e.img,
                            },
                            e
                        ),
                        u.resizeImage(),
                        e.hasSize ?
                        (I && clearInterval(I), e.loadError ? (t.addClass("mfp-loading"), u.updateStatus("error", o.tError.replace("%url%", e.src))) : (t.removeClass("mfp-loading"), u.updateStatus("ready"))) : //(u.updateStatus("loading"), (e.loading = !0), e.hasSize || ((e.imgHidden = !0), t.addClass("mfp-loading"), u.findImageSize(e))),
                        t
                    );
                },
            },
        });
        var M;
        d.magnificPopup.registerModule("zoom", {
            options: {
                enabled: !1,
                easing: "ease-in-out",
                duration: 300,
                opener: function(e) {
                    return e.is("img") ? e : e.find("img");
                },
            },
            proto: {
                initZoom: function() {
                    var e,
                        o = u.st.zoom,
                        t = ".zoom";
                    if (o.enabled && u.supportsTransition) {
                        var i,
                            n,
                            s = o.duration,
                            r = function(e) {
                                var t = e.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),
                                    i = "all " + o.duration / 1e3 + "s " + o.easing,
                                    n = { position: "fixed", zIndex: 9999, left: 0, top: 0, "-webkit-backface-visibility": "hidden" },
                                    s = "transition";
                                return (n["-webkit-" + s] = n["-moz-" + s] = n["-o-" + s] = n[s] = i), t.css(n), t;
                            },
                            a = function() {
                                u.content.css("visibility", "visible");
                            };
                        b("BuildControls" + t, function() {
                                if (u._allowZoom()) {
                                    if ((clearTimeout(i), u.content.css("visibility", "hidden"), !(e = u._getItemToZoom()))) return void a();
                                    (n = r(e)).css(u._getOffset()),
                                        u.wrap.append(n),
                                        (i = setTimeout(function() {
                                            n.css(u._getOffset(!0)),
                                                (i = setTimeout(function() {
                                                    a(),
                                                        setTimeout(function() {
                                                            n.remove(), (e = n = null), _("ZoomAnimationEnded");
                                                        }, 16);
                                                }, s));
                                        }, 16));
                                }
                            }),
                            b(c + t, function() {
                                if (u._allowZoom()) {
                                    if ((clearTimeout(i), (u.st.removalDelay = s), !e)) {
                                        if (!(e = u._getItemToZoom())) return;
                                        n = r(e);
                                    }
                                    n.css(u._getOffset(!0)),
                                        u.wrap.append(n),
                                        u.content.css("visibility", "hidden"),
                                        setTimeout(function() {
                                            n.css(u._getOffset());
                                        }, 16);
                                }
                            }),
                            b(l + t, function() {
                                u._allowZoom() && (a(), n && n.remove(), (e = null));
                            });
                    }
                },
                _allowZoom: function() {
                    return "image" === u.currItem.type;
                },
                _getItemToZoom: function() {
                    return !!u.currItem.hasSize && u.currItem.img;
                },
                _getOffset: function(e) {
                    var t,
                        i = (t = e ? u.currItem.img : u.st.zoom.opener(u.currItem.el || u.currItem)).offset(),
                        n = parseInt(t.css("padding-top"), 10),
                        s = parseInt(t.css("padding-bottom"), 10);
                    i.top -= d(window).scrollTop() - n;
                    var o = { width: t.width(), height: (a ? t.innerHeight() : t[0].offsetHeight) - s - n };
                    return void 0 === M && (M = void 0 !== document.createElement("p").style.MozTransform), M ? (o["-moz-transform"] = o.transform = "translate(" + i.left + "px," + i.top + "px)") : ((o.left = i.left), (o.top = i.top)), o;
                },
            },
        });
        var P = "iframe",
            L = function(e) {
                if (u.currTemplate[P]) {
                    var t = u.currTemplate[P].find("iframe");
                    t.length && (e || (t[0].src = "//about:blank"), u.isIE8 && t.css("display", e ? "block" : "none"));
                }
            };
        d.magnificPopup.registerModule(P, {
            options: {
                markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',
                srcAction: "iframe_src",
                patterns: {
                    youtube: { index: "youtube.com", id: "v=", src: "//www.youtube.com/embed/%id%?autoplay=1" },
                    vimeo: { index: "vimeo.com/", id: "/", src: "//player.vimeo.com/video/%id%?autoplay=1" },
                    gmaps: { index: "//maps.google.", src: "%id%&output=embed" },
                },
            },
            proto: {
                initIframe: function() {
                    u.types.push(P),
                        b("BeforeChange", function(e, t, i) {
                            t !== i && (t === P ? L() : i === P && L(!0));
                        }),
                        b(l + "." + P, function() {
                            L();
                        });
                },
                getIframe: function(e, t) {
                    var i = e.src,
                        n = u.st.iframe;
                    d.each(n.patterns, function() {
                        return -1 < i.indexOf(this.index) ? (this.id && (i = "string" == typeof this.id ? i.substr(i.lastIndexOf(this.id) + this.id.length, i.length) : this.id.call(this, i)), (i = this.src.replace("%id%", i)), !1) : void 0;
                    });
                    var s = {};
                    return n.srcAction && (s[n.srcAction] = i), u._parseMarkup(t, s, e), u.updateStatus("ready"), t;
                },
            },
        });
        var j = function(e) {
                var t = u.items.length;
                return t - 1 < e ? e - t : e < 0 ? t + e : e;
            },
            O = function(e, t, i) {
                return e.replace(/%curr%/gi, t + 1).replace(/%total%/gi, i);
            };
        d.magnificPopup.registerModule("gallery", {
            options: {
                enabled: !1,
                arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
                preload: [0, 2],
                navigateByImgClick: !0,
                arrows: !0,
                tPrev: "Previous (Left arrow key)",
                tNext: "Next (Right arrow key)",
                tCounter: "%curr% of %total%",
            },
            proto: {
                initGallery: function() {
                    var o = u.st.gallery,
                        e = ".mfp-gallery";
                    return (
                        (u.direction = !0), !(!o || !o.enabled) &&
                        ((p += " mfp-gallery"),
                            b(m + e, function() {
                                o.navigateByImgClick &&
                                    u.wrap.on("click" + e, ".mfp-img", function() {
                                        return 1 < u.items.length ? (u.next(), !1) : void 0;
                                    }),
                                    h.on("keydown" + e, function(e) {
                                        37 === e.keyCode ? u.prev() : 39 === e.keyCode && u.next();
                                    });
                            }),
                            b("UpdateStatus" + e, function(e, t) {
                                t.text && (t.text = O(t.text, u.currItem.index, u.items.length));
                            }),
                            b(f + e, function(e, t, i, n) {
                                var s = u.items.length;
                                i.counter = 1 < s ? O(o.tCounter, n.index, s) : "";
                            }),
                            b("BuildControls" + e, function() {
                                if (1 < u.items.length && o.arrows && !u.arrowLeft) {
                                    var e = o.arrowMarkup,
                                        t = (u.arrowLeft = d(e.replace(/%title%/gi, o.tPrev).replace(/%dir%/gi, "left")).addClass(r)),
                                        i = (u.arrowRight = d(e.replace(/%title%/gi, o.tNext).replace(/%dir%/gi, "right")).addClass(r));
                                    t.click(function() {
                                            u.prev();
                                        }),
                                        i.click(function() {
                                            u.next();
                                        }),
                                        u.container.append(t.add(i));
                                }
                            }),
                            b("Change" + e, function() {
                                u._preloadTimeout && clearTimeout(u._preloadTimeout),
                                    (u._preloadTimeout = setTimeout(function() {
                                        u.preloadNearbyImages(), (u._preloadTimeout = null);
                                    }, 16));
                            }),
                            void b(l + e, function() {
                                h.off(e), u.wrap.off("click" + e), (u.arrowRight = u.arrowLeft = null);
                            }))
                    );
                },
                next: function() {
                    (u.direction = !0), (u.index = j(u.index + 1)), u.updateItemHTML();
                },
                prev: function() {
                    (u.direction = !1), (u.index = j(u.index - 1)), u.updateItemHTML();
                },
                goTo: function(e) {
                    (u.direction = e >= u.index), (u.index = e), u.updateItemHTML();
                },
                preloadNearbyImages: function() {
                    var e,
                        t = u.st.gallery.preload,
                        i = Math.min(t[0], u.items.length),
                        n = Math.min(t[1], u.items.length);
                    for (e = 1; e <= (u.direction ? n : i); e++) u._preloadItem(u.index + e);
                    for (e = 1; e <= (u.direction ? i : n); e++) u._preloadItem(u.index - e);
                },
                _preloadItem: function(e) {
                    if (((e = j(e)), !u.items[e].preloaded)) {
                        var t = u.items[e];
                        t.parsed || (t = u.parseEl(e)),
                            _("LazyLoad", t),
                            "image" === t.type &&
                            (t.img = d('<img class="mfp-img" />')
                                .on("load.mfploader", function() {
                                    t.hasSize = !0;
                                })
                                .on("error.mfploader", function() {
                                    (t.hasSize = !0), (t.loadError = !0), _("LazyLoadError", t);
                                })
                                .attr("src", t.src)),
                            (t.preloaded = !0);
                    }
                },
            },
        });
        var H = "retina";
        d.magnificPopup.registerModule(H, {
                options: {
                    replaceSrc: function(e) {
                        return e.src.replace(/\.\w+$/, function(e) {
                            return "@2x" + e;
                        });
                    },
                    ratio: 1,
                },
                proto: {
                    initRetina: function() {
                        if (1 < window.devicePixelRatio) {
                            var i = u.st.retina,
                                n = i.ratio;
                            1 < (n = isNaN(n) ? n() : n) &&
                                (b("ImageHasSize." + H, function(e, t) {
                                        t.img.css({ "max-width": t.img[0].naturalWidth / n, width: "100%" });
                                    }),
                                    b("ElementParse." + H, function(e, t) {
                                        t.src = i.replaceSrc(t, n);
                                    }));
                        }
                    },
                },
            }),
            o();
    }),
    "function" == typeof define && define.amd ? define(["jquery"], e) : e("object" == typeof exports ? require("jquery") : window.jQuery || window.Zepto),
        (t = this),
        (i = function(e, f, u) {
            "use strict";

            function n(e, t) {
                for (var i = 0; i < t.length; i++) {
                    var n = t[i];
                    (n.enumerable = n.enumerable || !1), (n.configurable = !0), "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n);
                }
            }

            function r(e, t, i) {
                return t && n(e.prototype, t), i && n(e, i), e;
            }

            function l() {
                return (l =
                    Object.assign ||
                    function(e) {
                        for (var t = 1; t < arguments.length; t++) {
                            var i = arguments[t];
                            for (var n in i) Object.prototype.hasOwnProperty.call(i, n) && (e[n] = i[n]);
                        }
                        return e;
                    }).apply(this, arguments);
            }
            (f = f && Object.prototype.hasOwnProperty.call(f, "default") ? f.default : f), (u = u && Object.prototype.hasOwnProperty.call(u, "default") ? u.default : u);
            var m = {
                TRANSITION_END: "bsTransitionEnd",
                getUID: function(e) {
                    for (;
                        (e += ~~(1e6 * Math.random())), document.getElementById(e););
                    return e;
                },
                getSelectorFromElement: function(e) {
                    var t = e.getAttribute("data-target");
                    if (!t || "#" === t) {
                        var i = e.getAttribute("href");
                        t = i && "#" !== i ? i.trim() : "";
                    }
                    try {
                        return document.querySelector(t) ? t : null;
                    } catch (e) {
                        return null;
                    }
                },
                getTransitionDurationFromElement: function(e) {
                    if (!e) return 0;
                    var t = f(e).css("transition-duration"),
                        i = f(e).css("transition-delay"),
                        n = parseFloat(t),
                        s = parseFloat(i);
                    return n || s ? ((t = t.split(",")[0]), (i = i.split(",")[0]), 1e3 * (parseFloat(t) + parseFloat(i))) : 0;
                },
                reflow: function(e) {
                    return e.offsetHeight;
                },
                triggerTransitionEnd: function(e) {
                    f(e).trigger("transitionend");
                },
                supportsTransitionEnd: function() {
                    return Boolean("transitionend");
                },
                isElement: function(e) {
                    return (e[0] || e).nodeType;
                },
                typeCheckConfig: function(e, t, i) {
                    for (var n in i)
                        if (Object.prototype.hasOwnProperty.call(i, n)) {
                            var s = i[n],
                                o = t[n],
                                r =
                                o && m.isElement(o) ?
                                "element" :
                                null === (a = o) || void 0 === a ?
                                "" + a : {}.toString
                                .call(a)
                                .match(/\s([a-z]+)/i)[1]
                                .toLowerCase();
                            if (!new RegExp(s).test(r)) throw new Error(e.toUpperCase() + ': Option "' + n + '" provided type "' + r + '" but expected type "' + s + '".');
                        }
                    var a;
                },
                findShadowRoot: function(e) {
                    if (!document.documentElement.attachShadow) return null;
                    if ("function" != typeof e.getRootNode) return e instanceof ShadowRoot ? e : e.parentNode ? m.findShadowRoot(e.parentNode) : null;
                    var t = e.getRootNode();
                    return t instanceof ShadowRoot ? t : null;
                },
                jQueryDetection: function() {
                    if (void 0 === f) throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");
                    var e = f.fn.jquery.split(" ")[0].split(".");
                    if ((e[0] < 2 && e[1] < 9) || (1 === e[0] && 9 === e[1] && e[2] < 1) || 4 <= e[0]) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0");
                },
            };
            m.jQueryDetection(),
                (f.fn.emulateTransitionEnd = function(e) {
                    var t = this,
                        i = !1;
                    return (
                        f(this).one(m.TRANSITION_END, function() {
                            i = !0;
                        }),
                        setTimeout(function() {
                            i || m.triggerTransitionEnd(t);
                        }, e),
                        this
                    );
                }),
                (f.event.special[m.TRANSITION_END] = {
                    bindType: "transitionend",
                    delegateType: "transitionend",
                    handle: function(e) {
                        if (f(e.target).is(this)) return e.handleObj.handler.apply(this, arguments);
                    },
                });
            var t = "alert",
                i = f.fn[t],
                s = (function() {
                    function n(e) {
                        this._element = e;
                    }
                    var e = n.prototype;
                    return (
                        (e.close = function(e) {
                            var t = this._element;
                            e && (t = this._getRootElement(e)), this._triggerCloseEvent(t).isDefaultPrevented() || this._removeElement(t);
                        }),
                        (e.dispose = function() {
                            f.removeData(this._element, "bs.alert"), (this._element = null);
                        }),
                        (e._getRootElement = function(e) {
                            var t = m.getSelectorFromElement(e),
                                i = !1;
                            return t && (i = document.querySelector(t)), i || (i = f(e).closest(".alert")[0]), i;
                        }),
                        (e._triggerCloseEvent = function(e) {
                            var t = f.Event("close.bs.alert");
                            return f(e).trigger(t), t;
                        }),
                        (e._removeElement = function(t) {
                            var i = this;
                            if ((f(t).removeClass("show"), f(t).hasClass("fade"))) {
                                var e = m.getTransitionDurationFromElement(t);
                                f(t)
                                    .one(m.TRANSITION_END, function(e) {
                                        return i._destroyElement(t, e);
                                    })
                                    .emulateTransitionEnd(e);
                            } else this._destroyElement(t);
                        }),
                        (e._destroyElement = function(e) {
                            f(e).detach().trigger("closed.bs.alert").remove();
                        }),
                        (n._jQueryInterface = function(i) {
                            return this.each(function() {
                                var e = f(this),
                                    t = e.data("bs.alert");
                                t || ((t = new n(this)), e.data("bs.alert", t)), "close" === i && t[i](this);
                            });
                        }),
                        (n._handleDismiss = function(t) {
                            return function(e) {
                                e && e.preventDefault(), t.close(this);
                            };
                        }),
                        r(n, null, [{
                            key: "VERSION",
                            get: function() {
                                return "4.5.2";
                            },
                        }, ]),
                        n
                    );
                })();
            f(document).on("click.bs.alert.data-api", '[data-dismiss="alert"]', s._handleDismiss(new s())),
                (f.fn[t] = s._jQueryInterface),
                (f.fn[t].Constructor = s),
                (f.fn[t].noConflict = function() {
                    return (f.fn[t] = i), s._jQueryInterface;
                });
            var o = f.fn.button,
                a = (function() {
                    function i(e) {
                        this._element = e;
                    }
                    var e = i.prototype;
                    return (
                        (e.toggle = function() {
                            var e = !0,
                                t = !0,
                                i = f(this._element).closest('[data-toggle="buttons"]')[0];
                            if (i) {
                                var n = this._element.querySelector('input:not([type="hidden"])');
                                if (n) {
                                    if ("radio" === n.type)
                                        if (n.checked && this._element.classList.contains("active")) e = !1;
                                        else {
                                            var s = i.querySelector(".active");
                                            s && f(s).removeClass("active");
                                        }
                                    e && (("checkbox" !== n.type && "radio" !== n.type) || (n.checked = !this._element.classList.contains("active")), f(n).trigger("change")), n.focus(), (t = !1);
                                }
                            }
                            this._element.hasAttribute("disabled") ||
                                this._element.classList.contains("disabled") ||
                                (t && this._element.setAttribute("aria-pressed", !this._element.classList.contains("active")), e && f(this._element).toggleClass("active"));
                        }),
                        (e.dispose = function() {
                            f.removeData(this._element, "bs.button"), (this._element = null);
                        }),
                        (i._jQueryInterface = function(t) {
                            return this.each(function() {
                                var e = f(this).data("bs.button");
                                e || ((e = new i(this)), f(this).data("bs.button", e)), "toggle" === t && e[t]();
                            });
                        }),
                        r(i, null, [{
                            key: "VERSION",
                            get: function() {
                                return "4.5.2";
                            },
                        }, ]),
                        i
                    );
                })();
            f(document)
                .on("click.bs.button.data-api", '[data-toggle^="button"]', function(e) {
                    var t = e.target,
                        i = t;
                    if ((f(t).hasClass("btn") || (t = f(t).closest(".btn")[0]), !t || t.hasAttribute("disabled") || t.classList.contains("disabled"))) e.preventDefault();
                    else {
                        var n = t.querySelector('input:not([type="hidden"])');
                        if (n && (n.hasAttribute("disabled") || n.classList.contains("disabled"))) return void e.preventDefault();
                        ("LABEL" !== i.tagName || (n && "checkbox" !== n.type)) && a._jQueryInterface.call(f(t), "toggle");
                    }
                })
                .on("focus.bs.button.data-api blur.bs.button.data-api", '[data-toggle^="button"]', function(e) {
                    var t = f(e.target).closest(".btn")[0];
                    f(t).toggleClass("focus", /^focus(in)?$/.test(e.type));
                }),
                f(window).on("load.bs.button.data-api", function() {
                    for (var e = [].slice.call(document.querySelectorAll('[data-toggle="buttons"] .btn')), t = 0, i = e.length; t < i; t++) {
                        var n = e[t],
                            s = n.querySelector('input:not([type="hidden"])');
                        s.checked || s.hasAttribute("checked") ? n.classList.add("active") : n.classList.remove("active");
                    }
                    for (var o = 0, r = (e = [].slice.call(document.querySelectorAll('[data-toggle="button"]'))).length; o < r; o++) {
                        var a = e[o];
                        "true" === a.getAttribute("aria-pressed") ? a.classList.add("active") : a.classList.remove("active");
                    }
                }),
                (f.fn.button = a._jQueryInterface),
                (f.fn.button.Constructor = a),
                (f.fn.button.noConflict = function() {
                    return (f.fn.button = o), a._jQueryInterface;
                });
            var c = "carousel",
                d = f.fn[c],
                h = { interval: 5e3, keyboard: !0, slide: !1, pause: "hover", wrap: !0, touch: !0 },
                p = { interval: "(number|boolean)", keyboard: "boolean", slide: "(boolean|string)", pause: "(string|boolean)", wrap: "boolean", touch: "boolean" },
                g = { TOUCH: "touch", PEN: "pen" },
                v = (function() {
                    function o(e, t) {
                        (this._items = null),
                        (this._interval = null),
                        (this._activeElement = null),
                        (this._isPaused = !1),
                        (this._isSliding = !1),
                        (this.touchTimeout = null),
                        (this.touchStartX = 0),
                        (this.touchDeltaX = 0),
                        (this._config = this._getConfig(t)),
                        (this._element = e),
                        (this._indicatorsElement = this._element.querySelector(".carousel-indicators")),
                        (this._touchSupported = "ontouchstart" in document.documentElement || 0 < navigator.maxTouchPoints),
                        (this._pointerEvent = Boolean(window.PointerEvent || window.MSPointerEvent)),
                        this._addEventListeners();
                    }
                    var e = o.prototype;
                    return (
                        (e.next = function() {
                            this._isSliding || this._slide("next");
                        }),
                        (e.nextWhenVisible = function() {
                            !document.hidden && f(this._element).is(":visible") && "hidden" !== f(this._element).css("visibility") && this.next();
                        }),
                        (e.prev = function() {
                            this._isSliding || this._slide("prev");
                        }),
                        (e.pause = function(e) {
                            e || (this._isPaused = !0), this._element.querySelector(".carousel-item-next, .carousel-item-prev") && (m.triggerTransitionEnd(this._element), this.cycle(!0)), clearInterval(this._interval), (this._interval = null);
                        }),
                        (e.cycle = function(e) {
                            e || (this._isPaused = !1),
                                this._interval && (clearInterval(this._interval), (this._interval = null)),
                                this._config.interval && !this._isPaused && (this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval));
                        }),
                        (e.to = function(e) {
                            var t = this;
                            this._activeElement = this._element.querySelector(".active.carousel-item");
                            var i = this._getItemIndex(this._activeElement);
                            if (!(e > this._items.length - 1 || e < 0))
                                if (this._isSliding)
                                    f(this._element).one("slid.bs.carousel", function() {
                                        return t.to(e);
                                    });
                                else {
                                    if (i === e) return this.pause(), void this.cycle();
                                    var n = i < e ? "next" : "prev";
                                    this._slide(n, this._items[e]);
                                }
                        }),
                        (e.dispose = function() {
                            f(this._element).off(".bs.carousel"),
                                f.removeData(this._element, "bs.carousel"),
                                (this._items = null),
                                (this._config = null),
                                (this._element = null),
                                (this._interval = null),
                                (this._isPaused = null),
                                (this._isSliding = null),
                                (this._activeElement = null),
                                (this._indicatorsElement = null);
                        }),
                        (e._getConfig = function(e) {
                            return (e = l({}, h, e)), m.typeCheckConfig(c, e, p), e;
                        }),
                        (e._handleSwipe = function() {
                            var e = Math.abs(this.touchDeltaX);
                            if (!(e <= 40)) {
                                var t = e / this.touchDeltaX;
                                (this.touchDeltaX = 0) < t && this.prev(), t < 0 && this.next();
                            }
                        }),
                        (e._addEventListeners = function() {
                            var t = this;
                            this._config.keyboard &&
                                f(this._element).on("keydown.bs.carousel", function(e) {
                                    return t._keydown(e);
                                }),
                                "hover" === this._config.pause &&
                                f(this._element)
                                .on("mouseenter.bs.carousel", function(e) {
                                    return t.pause(e);
                                })
                                .on("mouseleave.bs.carousel", function(e) {
                                    return t.cycle(e);
                                }),
                                this._config.touch && this._addTouchEventListeners();
                        }),
                        (e._addTouchEventListeners = function() {
                            var i = this;
                            if (this._touchSupported) {
                                var t = function(e) {
                                        i._pointerEvent && g[e.originalEvent.pointerType.toUpperCase()] ? (i.touchStartX = e.originalEvent.clientX) : i._pointerEvent || (i.touchStartX = e.originalEvent.touches[0].clientX);
                                    },
                                    n = function(e) {
                                        i._pointerEvent && g[e.originalEvent.pointerType.toUpperCase()] && (i.touchDeltaX = e.originalEvent.clientX - i.touchStartX),
                                            i._handleSwipe(),
                                            "hover" === i._config.pause &&
                                            (i.pause(),
                                                i.touchTimeout && clearTimeout(i.touchTimeout),
                                                (i.touchTimeout = setTimeout(function(e) {
                                                    return i.cycle(e);
                                                }, 500 + i._config.interval)));
                                    };
                                f(this._element.querySelectorAll(".carousel-item img")).on("dragstart.bs.carousel", function(e) {
                                        return e.preventDefault();
                                    }),
                                    this._pointerEvent ?
                                    (f(this._element).on("pointerdown.bs.carousel", function(e) {
                                            return t(e);
                                        }),
                                        f(this._element).on("pointerup.bs.carousel", function(e) {
                                            return n(e);
                                        }),
                                        this._element.classList.add("pointer-event")) :
                                    (f(this._element).on("touchstart.bs.carousel", function(e) {
                                            return t(e);
                                        }),
                                        f(this._element).on("touchmove.bs.carousel", function(e) {
                                            var t;
                                            (t = e).originalEvent.touches && 1 < t.originalEvent.touches.length ? (i.touchDeltaX = 0) : (i.touchDeltaX = t.originalEvent.touches[0].clientX - i.touchStartX);
                                        }),
                                        f(this._element).on("touchend.bs.carousel", function(e) {
                                            return n(e);
                                        }));
                            }
                        }),
                        (e._keydown = function(e) {
                            if (!/input|textarea/i.test(e.target.tagName))
                                switch (e.which) {
                                    case 37:
                                        e.preventDefault(), this.prev();
                                        break;
                                    case 39:
                                        e.preventDefault(), this.next();
                                }
                        }),
                        (e._getItemIndex = function(e) {
                            return (this._items = e && e.parentNode ? [].slice.call(e.parentNode.querySelectorAll(".carousel-item")) : []), this._items.indexOf(e);
                        }),
                        (e._getItemByDirection = function(e, t) {
                            var i = "next" === e,
                                n = "prev" === e,
                                s = this._getItemIndex(t),
                                o = this._items.length - 1;
                            if (((n && 0 === s) || (i && s === o)) && !this._config.wrap) return t;
                            var r = (s + ("prev" === e ? -1 : 1)) % this._items.length;
                            return -1 === r ? this._items[this._items.length - 1] : this._items[r];
                        }),
                        (e._triggerSlideEvent = function(e, t) {
                            var i = this._getItemIndex(e),
                                n = this._getItemIndex(this._element.querySelector(".active.carousel-item")),
                                s = f.Event("slide.bs.carousel", { relatedTarget: e, direction: t, from: n, to: i });
                            return f(this._element).trigger(s), s;
                        }),
                        (e._setActiveIndicatorElement = function(e) {
                            if (this._indicatorsElement) {
                                var t = [].slice.call(this._indicatorsElement.querySelectorAll(".active"));
                                f(t).removeClass("active");
                                var i = this._indicatorsElement.children[this._getItemIndex(e)];
                                i && f(i).addClass("active");
                            }
                        }),
                        (e._slide = function(e, t) {
                            var i,
                                n,
                                s,
                                o = this,
                                r = this._element.querySelector(".active.carousel-item"),
                                a = this._getItemIndex(r),
                                l = t || (r && this._getItemByDirection(e, r)),
                                c = this._getItemIndex(l),
                                d = Boolean(this._interval);
                            if (((s = "next" === e ? ((i = "carousel-item-left"), (n = "carousel-item-next"), "left") : ((i = "carousel-item-right"), (n = "carousel-item-prev"), "right")), l && f(l).hasClass("active"))) this._isSliding = !1;
                            else if (!this._triggerSlideEvent(l, s).isDefaultPrevented() && r && l) {
                                (this._isSliding = !0), d && this.pause(), this._setActiveIndicatorElement(l);
                                var u = f.Event("slid.bs.carousel", { relatedTarget: l, direction: s, from: a, to: c });
                                if (f(this._element).hasClass("slide")) {
                                    f(l).addClass(n), m.reflow(l), f(r).addClass(i), f(l).addClass(i);
                                    var h = parseInt(l.getAttribute("data-interval"), 10);
                                    h ? ((this._config.defaultInterval = this._config.defaultInterval || this._config.interval), (this._config.interval = h)) : (this._config.interval = this._config.defaultInterval || this._config.interval);
                                    var p = m.getTransitionDurationFromElement(r);
                                    f(r)
                                        .one(m.TRANSITION_END, function() {
                                            f(l)
                                                .removeClass(i + " " + n)
                                                .addClass("active"),
                                                f(r).removeClass("active " + n + " " + i),
                                                (o._isSliding = !1),
                                                setTimeout(function() {
                                                    return f(o._element).trigger(u);
                                                }, 0);
                                        })
                                        .emulateTransitionEnd(p);
                                } else f(r).removeClass("active"), f(l).addClass("active"), (this._isSliding = !1), f(this._element).trigger(u);
                                d && this.cycle();
                            }
                        }),
                        (o._jQueryInterface = function(n) {
                            return this.each(function() {
                                var e = f(this).data("bs.carousel"),
                                    t = l({}, h, f(this).data());
                                "object" == typeof n && (t = l({}, t, n));
                                var i = "string" == typeof n ? n : t.slide;
                                if ((e || ((e = new o(this, t)), f(this).data("bs.carousel", e)), "number" == typeof n)) e.to(n);
                                else if ("string" == typeof i) {
                                    if (void 0 === e[i]) throw new TypeError('No method named "' + i + '"');
                                    e[i]();
                                } else t.interval && t.ride && (e.pause(), e.cycle());
                            });
                        }),
                        (o._dataApiClickHandler = function(e) {
                            var t = m.getSelectorFromElement(this);
                            if (t) {
                                var i = f(t)[0];
                                if (i && f(i).hasClass("carousel")) {
                                    var n = l({}, f(i).data(), f(this).data()),
                                        s = this.getAttribute("data-slide-to");
                                    s && (n.interval = !1), o._jQueryInterface.call(f(i), n), s && f(i).data("bs.carousel").to(s), e.preventDefault();
                                }
                            }
                        }),
                        r(o, null, [{
                                key: "VERSION",
                                get: function() {
                                    return "4.5.2";
                                },
                            },
                            {
                                key: "Default",
                                get: function() {
                                    return h;
                                },
                            },
                        ]),
                        o
                    );
                })();
            f(document).on("click.bs.carousel.data-api", "[data-slide], [data-slide-to]", v._dataApiClickHandler),
                f(window).on("load.bs.carousel.data-api", function() {
                    for (var e = [].slice.call(document.querySelectorAll('[data-ride="carousel"]')), t = 0, i = e.length; t < i; t++) {
                        var n = f(e[t]);
                        v._jQueryInterface.call(n, n.data());
                    }
                }),
                (f.fn[c] = v._jQueryInterface),
                (f.fn[c].Constructor = v),
                (f.fn[c].noConflict = function() {
                    return (f.fn[c] = d), v._jQueryInterface;
                });
            var y = "collapse",
                b = f.fn[y],
                w = { toggle: !0, parent: "" },
                _ = { toggle: "boolean", parent: "(string|element)" },
                k = (function() {
                    function a(t, e) {
                        (this._isTransitioning = !1),
                        (this._element = t),
                        (this._config = this._getConfig(e)),
                        (this._triggerArray = [].slice.call(document.querySelectorAll('[data-toggle="collapse"][href="#' + t.id + '"],[data-toggle="collapse"][data-target="#' + t.id + '"]')));
                        for (var i = [].slice.call(document.querySelectorAll('[data-toggle="collapse"]')), n = 0, s = i.length; n < s; n++) {
                            var o = i[n],
                                r = m.getSelectorFromElement(o),
                                a = [].slice.call(document.querySelectorAll(r)).filter(function(e) {
                                    return e === t;
                                });
                            null !== r && 0 < a.length && ((this._selector = r), this._triggerArray.push(o));
                        }
                        (this._parent = this._config.parent ? this._getParent() : null), this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle();
                    }
                    var e = a.prototype;
                    return (
                        (e.toggle = function() {
                            f(this._element).hasClass("show") ? this.hide() : this.show();
                        }),
                        (e.show = function() {
                            var e,
                                t,
                                i = this;
                            if (!(
                                    this._isTransitioning ||
                                    f(this._element).hasClass("show") ||
                                    (this._parent &&
                                        0 ===
                                        (e = [].slice.call(this._parent.querySelectorAll(".show, .collapsing")).filter(function(e) {
                                            return "string" == typeof i._config.parent ? e.getAttribute("data-parent") === i._config.parent : e.classList.contains("collapse");
                                        })).length &&
                                        (e = null),
                                        e && (t = f(e).not(this._selector).data("bs.collapse")) && t._isTransitioning)
                                )) {
                                var n = f.Event("show.bs.collapse");
                                if ((f(this._element).trigger(n), !n.isDefaultPrevented())) {
                                    e && (a._jQueryInterface.call(f(e).not(this._selector), "hide"), t || f(e).data("bs.collapse", null));
                                    var s = this._getDimension();
                                    f(this._element).removeClass("collapse").addClass("collapsing"),
                                        (this._element.style[s] = 0),
                                        this._triggerArray.length && f(this._triggerArray).removeClass("collapsed").attr("aria-expanded", !0),
                                        this.setTransitioning(!0);
                                    var o = "scroll" + (s[0].toUpperCase() + s.slice(1)),
                                        r = m.getTransitionDurationFromElement(this._element);
                                    f(this._element)
                                        .one(m.TRANSITION_END, function() {
                                            f(i._element).removeClass("collapsing").addClass("collapse show"), (i._element.style[s] = ""), i.setTransitioning(!1), f(i._element).trigger("shown.bs.collapse");
                                        })
                                        .emulateTransitionEnd(r),
                                        (this._element.style[s] = this._element[o] + "px");
                                }
                            }
                        }),
                        (e.hide = function() {
                            var e = this;
                            if (!this._isTransitioning && f(this._element).hasClass("show")) {
                                var t = f.Event("hide.bs.collapse");
                                if ((f(this._element).trigger(t), !t.isDefaultPrevented())) {
                                    var i = this._getDimension();
                                    (this._element.style[i] = this._element.getBoundingClientRect()[i] + "px"), m.reflow(this._element), f(this._element).addClass("collapsing").removeClass("collapse show");
                                    var n = this._triggerArray.length;
                                    if (0 < n)
                                        for (var s = 0; s < n; s++) {
                                            var o = this._triggerArray[s],
                                                r = m.getSelectorFromElement(o);
                                            null !== r && (f([].slice.call(document.querySelectorAll(r))).hasClass("show") || f(o).addClass("collapsed").attr("aria-expanded", !1));
                                        }
                                    this.setTransitioning(!0), (this._element.style[i] = "");
                                    var a = m.getTransitionDurationFromElement(this._element);
                                    f(this._element)
                                        .one(m.TRANSITION_END, function() {
                                            e.setTransitioning(!1), f(e._element).removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse");
                                        })
                                        .emulateTransitionEnd(a);
                                }
                            }
                        }),
                        (e.setTransitioning = function(e) {
                            this._isTransitioning = e;
                        }),
                        (e.dispose = function() {
                            f.removeData(this._element, "bs.collapse"), (this._config = null), (this._parent = null), (this._element = null), (this._triggerArray = null), (this._isTransitioning = null);
                        }),
                        (e._getConfig = function(e) {
                            return ((e = l({}, w, e)).toggle = Boolean(e.toggle)), m.typeCheckConfig(y, e, _), e;
                        }),
                        (e._getDimension = function() {
                            return f(this._element).hasClass("width") ? "width" : "height";
                        }),
                        (e._getParent = function() {
                            var e,
                                i = this;
                            m.isElement(this._config.parent) ? ((e = this._config.parent), void 0 !== this._config.parent.jquery && (e = this._config.parent[0])) : (e = document.querySelector(this._config.parent));
                            var t = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]',
                                n = [].slice.call(e.querySelectorAll(t));
                            return (
                                f(n).each(function(e, t) {
                                    i._addAriaAndCollapsedClass(a._getTargetFromElement(t), [t]);
                                }),
                                e
                            );
                        }),
                        (e._addAriaAndCollapsedClass = function(e, t) {
                            var i = f(e).hasClass("show");
                            t.length && f(t).toggleClass("collapsed", !i).attr("aria-expanded", i);
                        }),
                        (a._getTargetFromElement = function(e) {
                            var t = m.getSelectorFromElement(e);
                            return t ? document.querySelector(t) : null;
                        }),
                        (a._jQueryInterface = function(n) {
                            return this.each(function() {
                                var e = f(this),
                                    t = e.data("bs.collapse"),
                                    i = l({}, w, e.data(), "object" == typeof n && n ? n : {});
                                if ((!t && i.toggle && "string" == typeof n && /show|hide/.test(n) && (i.toggle = !1), t || ((t = new a(this, i)), e.data("bs.collapse", t)), "string" == typeof n)) {
                                    if (void 0 === t[n]) throw new TypeError('No method named "' + n + '"');
                                    t[n]();
                                }
                            });
                        }),
                        r(a, null, [{
                                key: "VERSION",
                                get: function() {
                                    return "4.5.2";
                                },
                            },
                            {
                                key: "Default",
                                get: function() {
                                    return w;
                                },
                            },
                        ]),
                        a
                    );
                })();
            f(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function(e) {
                    "A" === e.currentTarget.tagName && e.preventDefault();
                    var i = f(this),
                        t = m.getSelectorFromElement(this),
                        n = [].slice.call(document.querySelectorAll(t));
                    f(n).each(function() {
                        var e = f(this),
                            t = e.data("bs.collapse") ? "toggle" : i.data();
                        k._jQueryInterface.call(e, t);
                    });
                }),
                (f.fn[y] = k._jQueryInterface),
                (f.fn[y].Constructor = k),
                (f.fn[y].noConflict = function() {
                    return (f.fn[y] = b), k._jQueryInterface;
                });
            var T = "dropdown",
                C = f.fn[T],
                S = new RegExp("38|40|27"),
                x = { offset: 0, flip: !0, boundary: "scrollParent", reference: "toggle", display: "dynamic", popperConfig: null },
                E = { offset: "(number|string|function)", flip: "boolean", boundary: "(string|element)", reference: "(string|element)", display: "string", popperConfig: "(null|object)" },
                D = (function() {
                    function c(e, t) {
                        (this._element = e), (this._popper = null), (this._config = this._getConfig(t)), (this._menu = this._getMenuElement()), (this._inNavbar = this._detectNavbar()), this._addEventListeners();
                    }
                    var e = c.prototype;
                    return (
                        (e.toggle = function() {
                            if (!this._element.disabled && !f(this._element).hasClass("disabled")) {
                                var e = f(this._menu).hasClass("show");
                                c._clearMenus(), e || this.show(!0);
                            }
                        }),
                        (e.show = function(e) {
                            if ((void 0 === e && (e = !1), !(this._element.disabled || f(this._element).hasClass("disabled") || f(this._menu).hasClass("show")))) {
                                var t = { relatedTarget: this._element },
                                    i = f.Event("show.bs.dropdown", t),
                                    n = c._getParentFromElement(this._element);
                                if ((f(n).trigger(i), !i.isDefaultPrevented())) {
                                    if (!this._inNavbar && e) {
                                        if (void 0 === u) throw new TypeError("Bootstrap's dropdowns require Popper.js (https://popper.js.org/)");
                                        var s = this._element;
                                        "parent" === this._config.reference ? (s = n) : m.isElement(this._config.reference) && ((s = this._config.reference), void 0 !== this._config.reference.jquery && (s = this._config.reference[0])),
                                            "scrollParent" !== this._config.boundary && f(n).addClass("position-static"),
                                            (this._popper = new u(s, this._menu, this._getPopperConfig()));
                                    }
                                    "ontouchstart" in document.documentElement && 0 === f(n).closest(".navbar-nav").length && f(document.body).children().on("mouseover", null, f.noop),
                                        this._element.focus(),
                                        this._element.setAttribute("aria-expanded", !0),
                                        f(this._menu).toggleClass("show"),
                                        f(n).toggleClass("show").trigger(f.Event("shown.bs.dropdown", t));
                                }
                            }
                        }),
                        (e.hide = function() {
                            if (!this._element.disabled && !f(this._element).hasClass("disabled") && f(this._menu).hasClass("show")) {
                                var e = { relatedTarget: this._element },
                                    t = f.Event("hide.bs.dropdown", e),
                                    i = c._getParentFromElement(this._element);
                                f(i).trigger(t), t.isDefaultPrevented() || (this._popper && this._popper.destroy(), f(this._menu).toggleClass("show"), f(i).toggleClass("show").trigger(f.Event("hidden.bs.dropdown", e)));
                            }
                        }),
                        (e.dispose = function() {
                            f.removeData(this._element, "bs.dropdown"), f(this._element).off(".bs.dropdown"), (this._element = null), (this._menu = null) !== this._popper && (this._popper.destroy(), (this._popper = null));
                        }),
                        (e.update = function() {
                            (this._inNavbar = this._detectNavbar()), null !== this._popper && this._popper.scheduleUpdate();
                        }),
                        (e._addEventListeners = function() {
                            var t = this;
                            f(this._element).on("click.bs.dropdown", function(e) {
                                e.preventDefault(), e.stopPropagation(), t.toggle();
                            });
                        }),
                        (e._getConfig = function(e) {
                            return (e = l({}, this.constructor.Default, f(this._element).data(), e)), m.typeCheckConfig(T, e, this.constructor.DefaultType), e;
                        }),
                        (e._getMenuElement = function() {
                            if (!this._menu) {
                                var e = c._getParentFromElement(this._element);
                                e && (this._menu = e.querySelector(".dropdown-menu"));
                            }
                            return this._menu;
                        }),
                        (e._getPlacement = function() {
                            var e = f(this._element.parentNode),
                                t = "bottom-start";
                            return (
                                e.hasClass("dropup") ?
                                (t = f(this._menu).hasClass("dropdown-menu-right") ? "top-end" : "top-start") :
                                e.hasClass("dropright") ?
                                (t = "right-start") :
                                e.hasClass("dropleft") ?
                                (t = "left-start") :
                                f(this._menu).hasClass("dropdown-menu-right") && (t = "bottom-end"),
                                t
                            );
                        }),
                        (e._detectNavbar = function() {
                            return 0 < f(this._element).closest(".navbar").length;
                        }),
                        (e._getOffset = function() {
                            var t = this,
                                e = {};
                            return (
                                "function" == typeof this._config.offset ?
                                (e.fn = function(e) {
                                    return (e.offsets = l({}, e.offsets, t._config.offset(e.offsets, t._element) || {})), e;
                                }) :
                                (e.offset = this._config.offset),
                                e
                            );
                        }),
                        (e._getPopperConfig = function() {
                            var e = { placement: this._getPlacement(), modifiers: { offset: this._getOffset(), flip: { enabled: this._config.flip }, preventOverflow: { boundariesElement: this._config.boundary } } };
                            return "static" === this._config.display && (e.modifiers.applyStyle = { enabled: !1 }), l({}, e, this._config.popperConfig);
                        }),
                        (c._jQueryInterface = function(t) {
                            return this.each(function() {
                                var e = f(this).data("bs.dropdown");
                                if ((e || ((e = new c(this, "object" == typeof t ? t : null)), f(this).data("bs.dropdown", e)), "string" == typeof t)) {
                                    if (void 0 === e[t]) throw new TypeError('No method named "' + t + '"');
                                    e[t]();
                                }
                            });
                        }),
                        (c._clearMenus = function(e) {
                            if (!e || (3 !== e.which && ("keyup" !== e.type || 9 === e.which)))
                                for (var t = [].slice.call(document.querySelectorAll('[data-toggle="dropdown"]')), i = 0, n = t.length; i < n; i++) {
                                    var s = c._getParentFromElement(t[i]),
                                        o = f(t[i]).data("bs.dropdown"),
                                        r = { relatedTarget: t[i] };
                                    if ((e && "click" === e.type && (r.clickEvent = e), o)) {
                                        var a = o._menu;
                                        if (f(s).hasClass("show") && !(e && (("click" === e.type && /input|textarea/i.test(e.target.tagName)) || ("keyup" === e.type && 9 === e.which)) && f.contains(s, e.target))) {
                                            var l = f.Event("hide.bs.dropdown", r);
                                            f(s).trigger(l),
                                                l.isDefaultPrevented() ||
                                                ("ontouchstart" in document.documentElement && f(document.body).children().off("mouseover", null, f.noop),
                                                    t[i].setAttribute("aria-expanded", "false"),
                                                    o._popper && o._popper.destroy(),
                                                    f(a).removeClass("show"),
                                                    f(s).removeClass("show").trigger(f.Event("hidden.bs.dropdown", r)));
                                        }
                                    }
                                }
                        }),
                        (c._getParentFromElement = function(e) {
                            var t,
                                i = m.getSelectorFromElement(e);
                            return i && (t = document.querySelector(i)), t || e.parentNode;
                        }),
                        (c._dataApiKeydownHandler = function(e) {
                            if (!(/input|textarea/i.test(e.target.tagName) ? 32 === e.which || (27 !== e.which && ((40 !== e.which && 38 !== e.which) || f(e.target).closest(".dropdown-menu").length)) : !S.test(e.which)) &&
                                !this.disabled &&
                                !f(this).hasClass("disabled")
                            ) {
                                var t = c._getParentFromElement(this),
                                    i = f(t).hasClass("show");
                                if (i || 27 !== e.which) {
                                    if ((e.preventDefault(), e.stopPropagation(), !i || (i && (27 === e.which || 32 === e.which))))
                                        return 27 === e.which && f(t.querySelector('[data-toggle="dropdown"]')).trigger("focus"), void f(this).trigger("click");
                                    var n = [].slice.call(t.querySelectorAll(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)")).filter(function(e) {
                                        return f(e).is(":visible");
                                    });
                                    if (0 !== n.length) {
                                        var s = n.indexOf(e.target);
                                        38 === e.which && 0 < s && s--, 40 === e.which && s < n.length - 1 && s++, s < 0 && (s = 0), n[s].focus();
                                    }
                                }
                            }
                        }),
                        r(c, null, [{
                                key: "VERSION",
                                get: function() {
                                    return "4.5.2";
                                },
                            },
                            {
                                key: "Default",
                                get: function() {
                                    return x;
                                },
                            },
                            {
                                key: "DefaultType",
                                get: function() {
                                    return E;
                                },
                            },
                        ]),
                        c
                    );
                })();
            f(document)
                .on("keydown.bs.dropdown.data-api", '[data-toggle="dropdown"]', D._dataApiKeydownHandler)
                .on("keydown.bs.dropdown.data-api", ".dropdown-menu", D._dataApiKeydownHandler)
                .on("click.bs.dropdown.data-api keyup.bs.dropdown.data-api", D._clearMenus)
                .on("click.bs.dropdown.data-api", '[data-toggle="dropdown"]', function(e) {
                    e.preventDefault(), e.stopPropagation(), D._jQueryInterface.call(f(this), "toggle");
                })
                .on("click.bs.dropdown.data-api", ".dropdown form", function(e) {
                    e.stopPropagation();
                }),
                (f.fn[T] = D._jQueryInterface),
                (f.fn[T].Constructor = D),
                (f.fn[T].noConflict = function() {
                    return (f.fn[T] = C), D._jQueryInterface;
                });
            var F = f.fn.modal,
                A = { backdrop: !0, keyboard: !0, focus: !0, show: !0 },
                $ = { backdrop: "(boolean|string)", keyboard: "boolean", focus: "boolean", show: "boolean" },
                I = (function() {
                    function s(e, t) {
                        (this._config = this._getConfig(t)),
                        (this._element = e),
                        (this._dialog = e.querySelector(".modal-dialog")),
                        (this._backdrop = null),
                        (this._isShown = !1),
                        (this._isBodyOverflowing = !1),
                        (this._ignoreBackdropClick = !1),
                        (this._isTransitioning = !1),
                        (this._scrollbarWidth = 0);
                    }
                    var e = s.prototype;
                    return (
                        (e.toggle = function(e) {
                            return this._isShown ? this.hide() : this.show(e);
                        }),
                        (e.show = function(e) {
                            var t = this;
                            if (!this._isShown && !this._isTransitioning) {
                                f(this._element).hasClass("fade") && (this._isTransitioning = !0);
                                var i = f.Event("show.bs.modal", { relatedTarget: e });
                                f(this._element).trigger(i),
                                    this._isShown ||
                                    i.isDefaultPrevented() ||
                                    ((this._isShown = !0),
                                        this._checkScrollbar(),
                                        this._setScrollbar(),
                                        this._adjustDialog(),
                                        this._setEscapeEvent(),
                                        this._setResizeEvent(),
                                        f(this._element).on("click.dismiss.bs.modal", '[data-dismiss="modal"]', function(e) {
                                            return t.hide(e);
                                        }),
                                        f(this._dialog).on("mousedown.dismiss.bs.modal", function() {
                                            f(t._element).one("mouseup.dismiss.bs.modal", function(e) {
                                                f(e.target).is(t._element) && (t._ignoreBackdropClick = !0);
                                            });
                                        }),
                                        this._showBackdrop(function() {
                                            return t._showElement(e);
                                        }));
                            }
                        }),
                        (e.hide = function(e) {
                            var t = this;
                            if ((e && e.preventDefault(), this._isShown && !this._isTransitioning)) {
                                var i = f.Event("hide.bs.modal");
                                if ((f(this._element).trigger(i), this._isShown && !i.isDefaultPrevented())) {
                                    this._isShown = !1;
                                    var n = f(this._element).hasClass("fade");
                                    if (
                                        (n && (this._isTransitioning = !0),
                                            this._setEscapeEvent(),
                                            this._setResizeEvent(),
                                            f(document).off("focusin.bs.modal"),
                                            f(this._element).removeClass("show"),
                                            f(this._element).off("click.dismiss.bs.modal"),
                                            f(this._dialog).off("mousedown.dismiss.bs.modal"),
                                            n)
                                    ) {
                                        var s = m.getTransitionDurationFromElement(this._element);
                                        f(this._element)
                                            .one(m.TRANSITION_END, function(e) {
                                                return t._hideModal(e);
                                            })
                                            .emulateTransitionEnd(s);
                                    } else this._hideModal();
                                }
                            }
                        }),
                        (e.dispose = function() {
                            [window, this._element, this._dialog].forEach(function(e) {
                                    return f(e).off(".bs.modal");
                                }),
                                f(document).off("focusin.bs.modal"),
                                f.removeData(this._element, "bs.modal"),
                                (this._config = null),
                                (this._element = null),
                                (this._dialog = null),
                                (this._backdrop = null),
                                (this._isShown = null),
                                (this._isBodyOverflowing = null),
                                (this._ignoreBackdropClick = null),
                                (this._isTransitioning = null),
                                (this._scrollbarWidth = null);
                        }),
                        (e.handleUpdate = function() {
                            this._adjustDialog();
                        }),
                        (e._getConfig = function(e) {
                            return (e = l({}, A, e)), m.typeCheckConfig("modal", e, $), e;
                        }),
                        (e._triggerBackdropTransition = function() {
                            var e = this;
                            if ("static" === this._config.backdrop) {
                                var t = f.Event("hidePrevented.bs.modal");
                                if ((f(this._element).trigger(t), t.defaultPrevented)) return;
                                var i = this._element.scrollHeight > document.documentElement.clientHeight;
                                i || (this._element.style.overflowY = "hidden"), this._element.classList.add("modal-static");
                                var n = m.getTransitionDurationFromElement(this._dialog);
                                f(this._element).off(m.TRANSITION_END),
                                    f(this._element)
                                    .one(m.TRANSITION_END, function() {
                                        e._element.classList.remove("modal-static"),
                                            i ||
                                            f(e._element)
                                            .one(m.TRANSITION_END, function() {
                                                e._element.style.overflowY = "";
                                            })
                                            .emulateTransitionEnd(e._element, n);
                                    })
                                    .emulateTransitionEnd(n),
                                    this._element.focus();
                            } else this.hide();
                        }),
                        (e._showElement = function(e) {
                            var t = this,
                                i = f(this._element).hasClass("fade"),
                                n = this._dialog ? this._dialog.querySelector(".modal-body") : null;
                            (this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE) || document.body.appendChild(this._element),
                                (this._element.style.display = "block"),
                                this._element.removeAttribute("aria-hidden"),
                                this._element.setAttribute("aria-modal", !0),
                                this._element.setAttribute("role", "dialog"),
                                f(this._dialog).hasClass("modal-dialog-scrollable") && n ? (n.scrollTop = 0) : (this._element.scrollTop = 0),
                                i && m.reflow(this._element),
                                f(this._element).addClass("show"),
                                this._config.focus && this._enforceFocus();
                            var s = f.Event("shown.bs.modal", { relatedTarget: e }),
                                o = function() {
                                    t._config.focus && t._element.focus(), (t._isTransitioning = !1), f(t._element).trigger(s);
                                };
                            if (i) {
                                var r = m.getTransitionDurationFromElement(this._dialog);
                                f(this._dialog).one(m.TRANSITION_END, o).emulateTransitionEnd(r);
                            } else o();
                        }),
                        (e._enforceFocus = function() {
                            var t = this;
                            f(document)
                                .off("focusin.bs.modal")
                                .on("focusin.bs.modal", function(e) {
                                    document !== e.target && t._element !== e.target && 0 === f(t._element).has(e.target).length && t._element.focus();
                                });
                        }),
                        (e._setEscapeEvent = function() {
                            var t = this;
                            this._isShown ?
                                f(this._element).on("keydown.dismiss.bs.modal", function(e) {
                                    t._config.keyboard && 27 === e.which ? (e.preventDefault(), t.hide()) : t._config.keyboard || 27 !== e.which || t._triggerBackdropTransition();
                                }) :
                                this._isShown || f(this._element).off("keydown.dismiss.bs.modal");
                        }),
                        (e._setResizeEvent = function() {
                            var t = this;
                            this._isShown ?
                                f(window).on("resize.bs.modal", function(e) {
                                    return t.handleUpdate(e);
                                }) :
                                f(window).off("resize.bs.modal");
                        }),
                        (e._hideModal = function() {
                            var e = this;
                            (this._element.style.display = "none"),
                            this._element.setAttribute("aria-hidden", !0),
                                this._element.removeAttribute("aria-modal"),
                                this._element.removeAttribute("role"),
                                (this._isTransitioning = !1),
                                this._showBackdrop(function() {
                                    f(document.body).removeClass("modal-open"), e._resetAdjustments(), e._resetScrollbar(), f(e._element).trigger("hidden.bs.modal");
                                });
                        }),
                        (e._removeBackdrop = function() {
                            this._backdrop && (f(this._backdrop).remove(), (this._backdrop = null));
                        }),
                        (e._showBackdrop = function(e) {
                            var t = this,
                                i = f(this._element).hasClass("fade") ? "fade" : "";
                            if (this._isShown && this._config.backdrop) {
                                if (
                                    ((this._backdrop = document.createElement("div")),
                                        (this._backdrop.className = "modal-backdrop"),
                                        i && this._backdrop.classList.add(i),
                                        f(this._backdrop).appendTo(document.body),
                                        f(this._element).on("click.dismiss.bs.modal", function(e) {
                                            t._ignoreBackdropClick ? (t._ignoreBackdropClick = !1) : e.target === e.currentTarget && t._triggerBackdropTransition();
                                        }),
                                        i && m.reflow(this._backdrop),
                                        f(this._backdrop).addClass("show"), !e)
                                )
                                    return;
                                if (!i) return void e();
                                var n = m.getTransitionDurationFromElement(this._backdrop);
                                f(this._backdrop).one(m.TRANSITION_END, e).emulateTransitionEnd(n);
                            } else if (!this._isShown && this._backdrop) {
                                f(this._backdrop).removeClass("show");
                                var s = function() {
                                    t._removeBackdrop(), e && e();
                                };
                                if (f(this._element).hasClass("fade")) {
                                    var o = m.getTransitionDurationFromElement(this._backdrop);
                                    f(this._backdrop).one(m.TRANSITION_END, s).emulateTransitionEnd(o);
                                } else s();
                            } else e && e();
                        }),
                        (e._adjustDialog = function() {
                            var e = this._element.scrollHeight > document.documentElement.clientHeight;
                            !this._isBodyOverflowing && e && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !e && (this._element.style.paddingRight = this._scrollbarWidth + "px");
                        }),
                        (e._resetAdjustments = function() {
                            (this._element.style.paddingLeft = ""), (this._element.style.paddingRight = "");
                        }),
                        (e._checkScrollbar = function() {
                            var e = document.body.getBoundingClientRect();
                            (this._isBodyOverflowing = Math.round(e.left + e.right) < window.innerWidth), (this._scrollbarWidth = this._getScrollbarWidth());
                        }),
                        (e._setScrollbar = function() {
                            var s = this;
                            if (this._isBodyOverflowing) {
                                var e = [].slice.call(document.querySelectorAll(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top")),
                                    t = [].slice.call(document.querySelectorAll(".sticky-top"));
                                f(e).each(function(e, t) {
                                        var i = t.style.paddingRight,
                                            n = f(t).css("padding-right");
                                        f(t)
                                            .data("padding-right", i)
                                            .css("padding-right", parseFloat(n) + s._scrollbarWidth + "px");
                                    }),
                                    f(t).each(function(e, t) {
                                        var i = t.style.marginRight,
                                            n = f(t).css("margin-right");
                                        f(t)
                                            .data("margin-right", i)
                                            .css("margin-right", parseFloat(n) - s._scrollbarWidth + "px");
                                    });
                                var i = document.body.style.paddingRight,
                                    n = f(document.body).css("padding-right");
                                f(document.body)
                                    .data("padding-right", i)
                                    .css("padding-right", parseFloat(n) + this._scrollbarWidth + "px");
                            }
                            f(document.body).addClass("modal-open");
                        }),
                        (e._resetScrollbar = function() {
                            var e = [].slice.call(document.querySelectorAll(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top"));
                            f(e).each(function(e, t) {
                                var i = f(t).data("padding-right");
                                f(t).removeData("padding-right"), (t.style.paddingRight = i || "");
                            });
                            var t = [].slice.call(document.querySelectorAll(".sticky-top"));
                            f(t).each(function(e, t) {
                                var i = f(t).data("margin-right");
                                void 0 !== i && f(t).css("margin-right", i).removeData("margin-right");
                            });
                            var i = f(document.body).data("padding-right");
                            f(document.body).removeData("padding-right"), (document.body.style.paddingRight = i || "");
                        }),
                        (e._getScrollbarWidth = function() {
                            var e = document.createElement("div");
                            (e.className = "modal-scrollbar-measure"), document.body.appendChild(e);
                            var t = e.getBoundingClientRect().width - e.clientWidth;
                            return document.body.removeChild(e), t;
                        }),
                        (s._jQueryInterface = function(i, n) {
                            return this.each(function() {
                                var e = f(this).data("bs.modal"),
                                    t = l({}, A, f(this).data(), "object" == typeof i && i ? i : {});
                                if ((e || ((e = new s(this, t)), f(this).data("bs.modal", e)), "string" == typeof i)) {
                                    if (void 0 === e[i]) throw new TypeError('No method named "' + i + '"');
                                    e[i](n);
                                } else t.show && e.show(n);
                            });
                        }),
                        r(s, null, [{
                                key: "VERSION",
                                get: function() {
                                    return "4.5.2";
                                },
                            },
                            {
                                key: "Default",
                                get: function() {
                                    return A;
                                },
                            },
                        ]),
                        s
                    );
                })();
            f(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function(e) {
                    var t,
                        i = this,
                        n = m.getSelectorFromElement(this);
                    n && (t = document.querySelector(n));
                    var s = f(t).data("bs.modal") ? "toggle" : l({}, f(t).data(), f(this).data());
                    ("A" !== this.tagName && "AREA" !== this.tagName) || e.preventDefault();
                    var o = f(t).one("show.bs.modal", function(e) {
                        e.isDefaultPrevented() ||
                            o.one("hidden.bs.modal", function() {
                                f(i).is(":visible") && i.focus();
                            });
                    });
                    I._jQueryInterface.call(f(t), s, this);
                }),
                (f.fn.modal = I._jQueryInterface),
                (f.fn.modal.Constructor = I),
                (f.fn.modal.noConflict = function() {
                    return (f.fn.modal = F), I._jQueryInterface;
                });
            var M = ["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"],
                P = /^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/gi,
                L = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i;

            function j(e, r, t) {
                if (0 === e.length) return e;
                if (t && "function" == typeof t) return t(e);
                for (
                    var i = new window.DOMParser().parseFromString(e, "text/html"),
                        a = Object.keys(r),
                        l = [].slice.call(i.body.querySelectorAll("*")),
                        n = function(e, t) {
                            var i = l[e],
                                n = i.nodeName.toLowerCase();
                            if (-1 === a.indexOf(i.nodeName.toLowerCase())) return i.parentNode.removeChild(i), "continue";
                            var s = [].slice.call(i.attributes),
                                o = [].concat(r["*"] || [], r[n] || []);
                            s.forEach(function(e) {
                                (function(e, t) {
                                    var i = e.nodeName.toLowerCase();
                                    if (-1 !== t.indexOf(i)) return -1 === M.indexOf(i) || Boolean(e.nodeValue.match(P) || e.nodeValue.match(L));
                                    for (
                                        var n = t.filter(function(e) {
                                                return e instanceof RegExp;
                                            }),
                                            s = 0,
                                            o = n.length; s < o; s++
                                    )
                                        if (i.match(n[s])) return !0;
                                    return !1;
                                })(e, o) || i.removeAttribute(e.nodeName);
                            });
                        },
                        s = 0,
                        o = l.length; s < o; s++
                )
                    n(s);
                return i.body.innerHTML;
            }
            var O = "tooltip",
                H = f.fn[O],
                z = new RegExp("(^|\\s)bs-tooltip\\S+", "g"),
                R = ["sanitize", "whiteList", "sanitizeFn"],
                N = {
                    animation: "boolean",
                    template: "string",
                    title: "(string|element|function)",
                    trigger: "string",
                    delay: "(number|object)",
                    html: "boolean",
                    selector: "(string|boolean)",
                    placement: "(string|function)",
                    offset: "(number|string|function)",
                    container: "(string|element|boolean)",
                    fallbackPlacement: "(string|array)",
                    boundary: "(string|element)",
                    sanitize: "boolean",
                    sanitizeFn: "(null|function)",
                    whiteList: "object",
                    popperConfig: "(null|object)",
                },
                W = { AUTO: "auto", TOP: "top", RIGHT: "right", BOTTOM: "bottom", LEFT: "left" },
                Y = {
                    animation: !0,
                    template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
                    trigger: "hover focus",
                    title: "",
                    delay: 0,
                    html: !1,
                    selector: !1,
                    placement: "top",
                    offset: 0,
                    container: !1,
                    fallbackPlacement: "flip",
                    boundary: "scrollParent",
                    sanitize: !0,
                    sanitizeFn: null,
                    whiteList: {
                        "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
                        a: ["target", "href", "title", "rel"],
                        area: [],
                        b: [],
                        br: [],
                        col: [],
                        code: [],
                        div: [],
                        em: [],
                        hr: [],
                        h1: [],
                        h2: [],
                        h3: [],
                        h4: [],
                        h5: [],
                        h6: [],
                        i: [],
                        img: ["src", "srcset", "alt", "title", "width", "height"],
                        li: [],
                        ol: [],
                        p: [],
                        pre: [],
                        s: [],
                        small: [],
                        span: [],
                        sub: [],
                        sup: [],
                        strong: [],
                        u: [],
                        ul: [],
                    },
                    popperConfig: null,
                },
                q = {
                    HIDE: "hide.bs.tooltip",
                    HIDDEN: "hidden.bs.tooltip",
                    SHOW: "show.bs.tooltip",
                    SHOWN: "shown.bs.tooltip",
                    INSERTED: "inserted.bs.tooltip",
                    CLICK: "click.bs.tooltip",
                    FOCUSIN: "focusin.bs.tooltip",
                    FOCUSOUT: "focusout.bs.tooltip",
                    MOUSEENTER: "mouseenter.bs.tooltip",
                    MOUSELEAVE: "mouseleave.bs.tooltip",
                },
                B = (function() {
                    function n(e, t) {
                        if (void 0 === u) throw new TypeError("Bootstrap's tooltips require Popper.js (https://popper.js.org/)");
                        (this._isEnabled = !0), (this._timeout = 0), (this._hoverState = ""), (this._activeTrigger = {}), (this._popper = null), (this.element = e), (this.config = this._getConfig(t)), (this.tip = null), this._setListeners();
                    }
                    var e = n.prototype;
                    return (
                        (e.enable = function() {
                            this._isEnabled = !0;
                        }),
                        (e.disable = function() {
                            this._isEnabled = !1;
                        }),
                        (e.toggleEnabled = function() {
                            this._isEnabled = !this._isEnabled;
                        }),
                        (e.toggle = function(e) {
                            if (this._isEnabled)
                                if (e) {
                                    var t = this.constructor.DATA_KEY,
                                        i = f(e.currentTarget).data(t);
                                    i || ((i = new this.constructor(e.currentTarget, this._getDelegateConfig())), f(e.currentTarget).data(t, i)),
                                        (i._activeTrigger.click = !i._activeTrigger.click),
                                        i._isWithActiveTrigger() ? i._enter(null, i) : i._leave(null, i);
                                } else {
                                    if (f(this.getTipElement()).hasClass("show")) return void this._leave(null, this);
                                    this._enter(null, this);
                                }
                        }),
                        (e.dispose = function() {
                            clearTimeout(this._timeout),
                                f.removeData(this.element, this.constructor.DATA_KEY),
                                f(this.element).off(this.constructor.EVENT_KEY),
                                f(this.element).closest(".modal").off("hide.bs.modal", this._hideModalHandler),
                                this.tip && f(this.tip).remove(),
                                (this._isEnabled = null),
                                (this._timeout = null),
                                (this._hoverState = null),
                                (this._activeTrigger = null),
                                this._popper && this._popper.destroy(),
                                (this._popper = null),
                                (this.element = null),
                                (this.config = null),
                                (this.tip = null);
                        }),
                        (e.show = function() {
                            var t = this;
                            if ("none" === f(this.element).css("display")) throw new Error("Please use show on visible elements");
                            var e = f.Event(this.constructor.Event.SHOW);
                            if (this.isWithContent() && this._isEnabled) {
                                f(this.element).trigger(e);
                                var i = m.findShadowRoot(this.element),
                                    n = f.contains(null !== i ? i : this.element.ownerDocument.documentElement, this.element);
                                if (e.isDefaultPrevented() || !n) return;
                                var s = this.getTipElement(),
                                    o = m.getUID(this.constructor.NAME);
                                s.setAttribute("id", o), this.element.setAttribute("aria-describedby", o), this.setContent(), this.config.animation && f(s).addClass("fade");
                                var r = "function" == typeof this.config.placement ? this.config.placement.call(this, s, this.element) : this.config.placement,
                                    a = this._getAttachment(r);
                                this.addAttachmentClass(a);
                                var l = this._getContainer();
                                f(s).data(this.constructor.DATA_KEY, this),
                                    f.contains(this.element.ownerDocument.documentElement, this.tip) || f(s).appendTo(l),
                                    f(this.element).trigger(this.constructor.Event.INSERTED),
                                    (this._popper = new u(this.element, s, this._getPopperConfig(a))),
                                    f(s).addClass("show"),
                                    "ontouchstart" in document.documentElement && f(document.body).children().on("mouseover", null, f.noop);
                                var c = function() {
                                    t.config.animation && t._fixTransition();
                                    var e = t._hoverState;
                                    (t._hoverState = null), f(t.element).trigger(t.constructor.Event.SHOWN), "out" === e && t._leave(null, t);
                                };
                                if (f(this.tip).hasClass("fade")) {
                                    var d = m.getTransitionDurationFromElement(this.tip);
                                    f(this.tip).one(m.TRANSITION_END, c).emulateTransitionEnd(d);
                                } else c();
                            }
                        }),
                        (e.hide = function(e) {
                            var t = this,
                                i = this.getTipElement(),
                                n = f.Event(this.constructor.Event.HIDE),
                                s = function() {
                                    "show" !== t._hoverState && i.parentNode && i.parentNode.removeChild(i),
                                        t._cleanTipClass(),
                                        t.element.removeAttribute("aria-describedby"),
                                        f(t.element).trigger(t.constructor.Event.HIDDEN),
                                        null !== t._popper && t._popper.destroy(),
                                        e && e();
                                };
                            if ((f(this.element).trigger(n), !n.isDefaultPrevented())) {
                                if (
                                    (f(i).removeClass("show"),
                                        "ontouchstart" in document.documentElement && f(document.body).children().off("mouseover", null, f.noop),
                                        (this._activeTrigger.click = !1),
                                        (this._activeTrigger.focus = !1),
                                        (this._activeTrigger.hover = !1),
                                        f(this.tip).hasClass("fade"))
                                ) {
                                    var o = m.getTransitionDurationFromElement(i);
                                    f(i).one(m.TRANSITION_END, s).emulateTransitionEnd(o);
                                } else s();
                                this._hoverState = "";
                            }
                        }),
                        (e.update = function() {
                            null !== this._popper && this._popper.scheduleUpdate();
                        }),
                        (e.isWithContent = function() {
                            return Boolean(this.getTitle());
                        }),
                        (e.addAttachmentClass = function(e) {
                            f(this.getTipElement()).addClass("bs-tooltip-" + e);
                        }),
                        (e.getTipElement = function() {
                            return (this.tip = this.tip || f(this.config.template)[0]), this.tip;
                        }),
                        (e.setContent = function() {
                            var e = this.getTipElement();
                            this.setElementContent(f(e.querySelectorAll(".tooltip-inner")), this.getTitle()), f(e).removeClass("fade show");
                        }),
                        (e.setElementContent = function(e, t) {
                            "object" != typeof t || (!t.nodeType && !t.jquery) ?
                                this.config.html ?
                                (this.config.sanitize && (t = j(t, this.config.whiteList, this.config.sanitizeFn)), e.html(t)) :
                                e.text(t) :
                                this.config.html ?
                                f(t).parent().is(e) || e.empty().append(t) :
                                e.text(f(t).text());
                        }),
                        (e.getTitle = function() {
                            var e = this.element.getAttribute("data-original-title");
                            return e || (e = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), e;
                        }),
                        (e._getPopperConfig = function(e) {
                            var t = this;
                            return l({}, {
                                    placement: e,
                                    modifiers: { offset: this._getOffset(), flip: { behavior: this.config.fallbackPlacement }, arrow: { element: ".arrow" }, preventOverflow: { boundariesElement: this.config.boundary } },
                                    onCreate: function(e) {
                                        e.originalPlacement !== e.placement && t._handlePopperPlacementChange(e);
                                    },
                                    onUpdate: function(e) {
                                        return t._handlePopperPlacementChange(e);
                                    },
                                },
                                this.config.popperConfig
                            );
                        }),
                        (e._getOffset = function() {
                            var t = this,
                                e = {};
                            return (
                                "function" == typeof this.config.offset ?
                                (e.fn = function(e) {
                                    return (e.offsets = l({}, e.offsets, t.config.offset(e.offsets, t.element) || {})), e;
                                }) :
                                (e.offset = this.config.offset),
                                e
                            );
                        }),
                        (e._getContainer = function() {
                            return !1 === this.config.container ? document.body : m.isElement(this.config.container) ? f(this.config.container) : f(document).find(this.config.container);
                        }),
                        (e._getAttachment = function(e) {
                            return W[e.toUpperCase()];
                        }),
                        (e._setListeners = function() {
                            var n = this;
                            this.config.trigger.split(" ").forEach(function(e) {
                                    if ("click" === e)
                                        f(n.element).on(n.constructor.Event.CLICK, n.config.selector, function(e) {
                                            return n.toggle(e);
                                        });
                                    else if ("manual" !== e) {
                                        var t = "hover" === e ? n.constructor.Event.MOUSEENTER : n.constructor.Event.FOCUSIN,
                                            i = "hover" === e ? n.constructor.Event.MOUSELEAVE : n.constructor.Event.FOCUSOUT;
                                        f(n.element)
                                            .on(t, n.config.selector, function(e) {
                                                return n._enter(e);
                                            })
                                            .on(i, n.config.selector, function(e) {
                                                return n._leave(e);
                                            });
                                    }
                                }),
                                (this._hideModalHandler = function() {
                                    n.element && n.hide();
                                }),
                                f(this.element).closest(".modal").on("hide.bs.modal", this._hideModalHandler),
                                this.config.selector ? (this.config = l({}, this.config, { trigger: "manual", selector: "" })) : this._fixTitle();
                        }),
                        (e._fixTitle = function() {
                            var e = typeof this.element.getAttribute("data-original-title");
                            (this.element.getAttribute("title") || "string" !== e) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""));
                        }),
                        (e._enter = function(e, t) {
                            var i = this.constructor.DATA_KEY;
                            (t = t || f(e.currentTarget).data(i)) || ((t = new this.constructor(e.currentTarget, this._getDelegateConfig())), f(e.currentTarget).data(i, t)),
                            e && (t._activeTrigger["focusin" === e.type ? "focus" : "hover"] = !0),
                                f(t.getTipElement()).hasClass("show") || "show" === t._hoverState ?
                                (t._hoverState = "show") :
                                (clearTimeout(t._timeout),
                                    (t._hoverState = "show"),
                                    t.config.delay && t.config.delay.show ?
                                    (t._timeout = setTimeout(function() {
                                        "show" === t._hoverState && t.show();
                                    }, t.config.delay.show)) :
                                    t.show());
                        }),
                        (e._leave = function(e, t) {
                            var i = this.constructor.DATA_KEY;
                            (t = t || f(e.currentTarget).data(i)) || ((t = new this.constructor(e.currentTarget, this._getDelegateConfig())), f(e.currentTarget).data(i, t)),
                            e && (t._activeTrigger["focusout" === e.type ? "focus" : "hover"] = !1),
                                t._isWithActiveTrigger() ||
                                (clearTimeout(t._timeout),
                                    (t._hoverState = "out"),
                                    t.config.delay && t.config.delay.hide ?
                                    (t._timeout = setTimeout(function() {
                                        "out" === t._hoverState && t.hide();
                                    }, t.config.delay.hide)) :
                                    t.hide());
                        }),
                        (e._isWithActiveTrigger = function() {
                            for (var e in this._activeTrigger)
                                if (this._activeTrigger[e]) return !0;
                            return !1;
                        }),
                        (e._getConfig = function(e) {
                            var t = f(this.element).data();
                            return (
                                Object.keys(t).forEach(function(e) {
                                    -1 !== R.indexOf(e) && delete t[e];
                                }),
                                "number" == typeof(e = l({}, this.constructor.Default, t, "object" == typeof e && e ? e : {})).delay && (e.delay = { show: e.delay, hide: e.delay }),
                                "number" == typeof e.title && (e.title = e.title.toString()),
                                "number" == typeof e.content && (e.content = e.content.toString()),
                                m.typeCheckConfig(O, e, this.constructor.DefaultType),
                                e.sanitize && (e.template = j(e.template, e.whiteList, e.sanitizeFn)),
                                e
                            );
                        }),
                        (e._getDelegateConfig = function() {
                            var e = {};
                            if (this.config)
                                for (var t in this.config) this.constructor.Default[t] !== this.config[t] && (e[t] = this.config[t]);
                            return e;
                        }),
                        (e._cleanTipClass = function() {
                            var e = f(this.getTipElement()),
                                t = e.attr("class").match(z);
                            null !== t && t.length && e.removeClass(t.join(""));
                        }),
                        (e._handlePopperPlacementChange = function(e) {
                            (this.tip = e.instance.popper), this._cleanTipClass(), this.addAttachmentClass(this._getAttachment(e.placement));
                        }),
                        (e._fixTransition = function() {
                            var e = this.getTipElement(),
                                t = this.config.animation;
                            null === e.getAttribute("x-placement") && (f(e).removeClass("fade"), (this.config.animation = !1), this.hide(), this.show(), (this.config.animation = t));
                        }),
                        (n._jQueryInterface = function(i) {
                            return this.each(function() {
                                var e = f(this).data("bs.tooltip"),
                                    t = "object" == typeof i && i;
                                if ((e || !/dispose|hide/.test(i)) && (e || ((e = new n(this, t)), f(this).data("bs.tooltip", e)), "string" == typeof i)) {
                                    if (void 0 === e[i]) throw new TypeError('No method named "' + i + '"');
                                    e[i]();
                                }
                            });
                        }),
                        r(n, null, [{
                                key: "VERSION",
                                get: function() {
                                    return "4.5.2";
                                },
                            },
                            {
                                key: "Default",
                                get: function() {
                                    return Y;
                                },
                            },
                            {
                                key: "NAME",
                                get: function() {
                                    return O;
                                },
                            },
                            {
                                key: "DATA_KEY",
                                get: function() {
                                    return "bs.tooltip";
                                },
                            },
                            {
                                key: "Event",
                                get: function() {
                                    return q;
                                },
                            },
                            {
                                key: "EVENT_KEY",
                                get: function() {
                                    return ".bs.tooltip";
                                },
                            },
                            {
                                key: "DefaultType",
                                get: function() {
                                    return N;
                                },
                            },
                        ]),
                        n
                    );
                })();
            (f.fn[O] = B._jQueryInterface),
            (f.fn[O].Constructor = B),
            (f.fn[O].noConflict = function() {
                return (f.fn[O] = H), B._jQueryInterface;
            });
            var X = "popover",
                U = f.fn[X],
                V = new RegExp("(^|\\s)bs-popover\\S+", "g"),
                Q = l({}, B.Default, { placement: "right", trigger: "click", content: "", template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' }),
                K = l({}, B.DefaultType, { content: "(string|element|function)" }),
                Z = {
                    HIDE: "hide.bs.popover",
                    HIDDEN: "hidden.bs.popover",
                    SHOW: "show.bs.popover",
                    SHOWN: "shown.bs.popover",
                    INSERTED: "inserted.bs.popover",
                    CLICK: "click.bs.popover",
                    FOCUSIN: "focusin.bs.popover",
                    FOCUSOUT: "focusout.bs.popover",
                    MOUSEENTER: "mouseenter.bs.popover",
                    MOUSELEAVE: "mouseleave.bs.popover",
                },
                G = (function(e) {
                    var t, i;

                    function n() {
                        return e.apply(this, arguments) || this;
                    }
                    (i = e), ((t = n).prototype = Object.create(i.prototype)), ((t.prototype.constructor = t).__proto__ = i);
                    var s = n.prototype;
                    return (
                        (s.isWithContent = function() {
                            return this.getTitle() || this._getContent();
                        }),
                        (s.addAttachmentClass = function(e) {
                            f(this.getTipElement()).addClass("bs-popover-" + e);
                        }),
                        (s.getTipElement = function() {
                            return (this.tip = this.tip || f(this.config.template)[0]), this.tip;
                        }),
                        (s.setContent = function() {
                            var e = f(this.getTipElement());
                            this.setElementContent(e.find(".popover-header"), this.getTitle());
                            var t = this._getContent();
                            "function" == typeof t && (t = t.call(this.element)), this.setElementContent(e.find(".popover-body"), t), e.removeClass("fade show");
                        }),
                        (s._getContent = function() {
                            return this.element.getAttribute("data-content") || this.config.content;
                        }),
                        (s._cleanTipClass = function() {
                            var e = f(this.getTipElement()),
                                t = e.attr("class").match(V);
                            null !== t && 0 < t.length && e.removeClass(t.join(""));
                        }),
                        (n._jQueryInterface = function(i) {
                            return this.each(function() {
                                var e = f(this).data("bs.popover"),
                                    t = "object" == typeof i ? i : null;
                                if ((e || !/dispose|hide/.test(i)) && (e || ((e = new n(this, t)), f(this).data("bs.popover", e)), "string" == typeof i)) {
                                    if (void 0 === e[i]) throw new TypeError('No method named "' + i + '"');
                                    e[i]();
                                }
                            });
                        }),
                        r(n, null, [{
                                key: "VERSION",
                                get: function() {
                                    return "4.5.2";
                                },
                            },
                            {
                                key: "Default",
                                get: function() {
                                    return Q;
                                },
                            },
                            {
                                key: "NAME",
                                get: function() {
                                    return X;
                                },
                            },
                            {
                                key: "DATA_KEY",
                                get: function() {
                                    return "bs.popover";
                                },
                            },
                            {
                                key: "Event",
                                get: function() {
                                    return Z;
                                },
                            },
                            {
                                key: "EVENT_KEY",
                                get: function() {
                                    return ".bs.popover";
                                },
                            },
                            {
                                key: "DefaultType",
                                get: function() {
                                    return K;
                                },
                            },
                        ]),
                        n
                    );
                })(B);
            (f.fn[X] = G._jQueryInterface),
            (f.fn[X].Constructor = G),
            (f.fn[X].noConflict = function() {
                return (f.fn[X] = U), G._jQueryInterface;
            });
            var J = "scrollspy",
                ee = f.fn[J],
                te = { offset: 10, method: "auto", target: "" },
                ie = { offset: "number", method: "string", target: "(string|element)" },
                ne = (function() {
                    function i(e, t) {
                        var i = this;
                        (this._element = e),
                        (this._scrollElement = "BODY" === e.tagName ? window : e),
                        (this._config = this._getConfig(t)),
                        (this._selector = this._config.target + " .nav-link," + this._config.target + " .list-group-item," + this._config.target + " .dropdown-item"),
                        (this._offsets = []),
                        (this._targets = []),
                        (this._activeTarget = null),
                        (this._scrollHeight = 0),
                        f(this._scrollElement).on("scroll.bs.scrollspy", function(e) {
                                return i._process(e);
                            }),
                            this.refresh(),
                            this._process();
                    }
                    var e = i.prototype;
                    return (
                        (e.refresh = function() {
                            var t = this,
                                e = this._scrollElement === this._scrollElement.window ? "offset" : "position",
                                s = "auto" === this._config.method ? e : this._config.method,
                                o = "position" === s ? this._getScrollTop() : 0;
                            (this._offsets = []),
                            (this._targets = []),
                            (this._scrollHeight = this._getScrollHeight()), [].slice
                                .call(document.querySelectorAll(this._selector))
                                .map(function(e) {
                                    var t,
                                        i = m.getSelectorFromElement(e);
                                    if ((i && (t = document.querySelector(i)), t)) {
                                        var n = t.getBoundingClientRect();
                                        if (n.width || n.height) return [f(t)[s]().top + o, i];
                                    }
                                    return null;
                                })
                                .filter(function(e) {
                                    return e;
                                })
                                .sort(function(e, t) {
                                    return e[0] - t[0];
                                })
                                .forEach(function(e) {
                                    t._offsets.push(e[0]), t._targets.push(e[1]);
                                });
                        }),
                        (e.dispose = function() {
                            f.removeData(this._element, "bs.scrollspy"),
                                f(this._scrollElement).off(".bs.scrollspy"),
                                (this._element = null),
                                (this._scrollElement = null),
                                (this._config = null),
                                (this._selector = null),
                                (this._offsets = null),
                                (this._targets = null),
                                (this._activeTarget = null),
                                (this._scrollHeight = null);
                        }),
                        (e._getConfig = function(e) {
                            if ("string" != typeof(e = l({}, te, "object" == typeof e && e ? e : {})).target && m.isElement(e.target)) {
                                var t = f(e.target).attr("id");
                                t || ((t = m.getUID(J)), f(e.target).attr("id", t)), (e.target = "#" + t);
                            }
                            return m.typeCheckConfig(J, e, ie), e;
                        }),
                        (e._getScrollTop = function() {
                            return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop;
                        }),
                        (e._getScrollHeight = function() {
                            return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight);
                        }),
                        (e._getOffsetHeight = function() {
                            return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height;
                        }),
                        (e._process = function() {
                            var e = this._getScrollTop() + this._config.offset,
                                t = this._getScrollHeight(),
                                i = this._config.offset + t - this._getOffsetHeight();
                            if ((this._scrollHeight !== t && this.refresh(), i <= e)) {
                                var n = this._targets[this._targets.length - 1];
                                this._activeTarget !== n && this._activate(n);
                            } else {
                                if (this._activeTarget && e < this._offsets[0] && 0 < this._offsets[0]) return (this._activeTarget = null), void this._clear();
                                for (var s = this._offsets.length; s--;) this._activeTarget !== this._targets[s] && e >= this._offsets[s] && (void 0 === this._offsets[s + 1] || e < this._offsets[s + 1]) && this._activate(this._targets[s]);
                            }
                        }),
                        (e._activate = function(t) {
                            (this._activeTarget = t), this._clear();
                            var e = this._selector.split(",").map(function(e) {
                                    return e + '[data-target="' + t + '"],' + e + '[href="' + t + '"]';
                                }),
                                i = f([].slice.call(document.querySelectorAll(e.join(","))));
                            i.hasClass("dropdown-item") ?
                                (i.closest(".dropdown").find(".dropdown-toggle").addClass("active"), i.addClass("active")) :
                                (i.addClass("active"), i.parents(".nav, .list-group").prev(".nav-link, .list-group-item").addClass("active"), i.parents(".nav, .list-group").prev(".nav-item").children(".nav-link").addClass("active")),
                                f(this._scrollElement).trigger("activate.bs.scrollspy", { relatedTarget: t });
                        }),
                        (e._clear = function() {
                            [].slice
                                .call(document.querySelectorAll(this._selector))
                                .filter(function(e) {
                                    return e.classList.contains("active");
                                })
                                .forEach(function(e) {
                                    return e.classList.remove("active");
                                });
                        }),
                        (i._jQueryInterface = function(t) {
                            return this.each(function() {
                                var e = f(this).data("bs.scrollspy");
                                if ((e || ((e = new i(this, "object" == typeof t && t)), f(this).data("bs.scrollspy", e)), "string" == typeof t)) {
                                    if (void 0 === e[t]) throw new TypeError('No method named "' + t + '"');
                                    e[t]();
                                }
                            });
                        }),
                        r(i, null, [{
                                key: "VERSION",
                                get: function() {
                                    return "4.5.2";
                                },
                            },
                            {
                                key: "Default",
                                get: function() {
                                    return te;
                                },
                            },
                        ]),
                        i
                    );
                })();
            f(window).on("load.bs.scrollspy.data-api", function() {
                    for (var e = [].slice.call(document.querySelectorAll('[data-spy="scroll"]')), t = e.length; t--;) {
                        var i = f(e[t]);
                        ne._jQueryInterface.call(i, i.data());
                    }
                }),
                (f.fn[J] = ne._jQueryInterface),
                (f.fn[J].Constructor = ne),
                (f.fn[J].noConflict = function() {
                    return (f.fn[J] = ee), ne._jQueryInterface;
                });
            var se = f.fn.tab,
                oe = (function() {
                    function n(e) {
                        this._element = e;
                    }
                    var e = n.prototype;
                    return (
                        (e.show = function() {
                            var i = this;
                            if (!((this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && f(this._element).hasClass("active")) || f(this._element).hasClass("disabled"))) {
                                var e,
                                    n,
                                    t = f(this._element).closest(".nav, .list-group")[0],
                                    s = m.getSelectorFromElement(this._element);
                                if (t) {
                                    var o = "UL" === t.nodeName || "OL" === t.nodeName ? "> li > .active" : ".active";
                                    n = (n = f.makeArray(f(t).find(o)))[n.length - 1];
                                }
                                var r = f.Event("hide.bs.tab", { relatedTarget: this._element }),
                                    a = f.Event("show.bs.tab", { relatedTarget: n });
                                if ((n && f(n).trigger(r), f(this._element).trigger(a), !a.isDefaultPrevented() && !r.isDefaultPrevented())) {
                                    s && (e = document.querySelector(s)), this._activate(this._element, t);
                                    var l = function() {
                                        var e = f.Event("hidden.bs.tab", { relatedTarget: i._element }),
                                            t = f.Event("shown.bs.tab", { relatedTarget: n });
                                        f(n).trigger(e), f(i._element).trigger(t);
                                    };
                                    e ? this._activate(e, e.parentNode, l) : l();
                                }
                            }
                        }),
                        (e.dispose = function() {
                            f.removeData(this._element, "bs.tab"), (this._element = null);
                        }),
                        (e._activate = function(e, t, i) {
                            var n = this,
                                s = (!t || ("UL" !== t.nodeName && "OL" !== t.nodeName) ? f(t).children(".active") : f(t).find("> li > .active"))[0],
                                o = i && s && f(s).hasClass("fade"),
                                r = function() {
                                    return n._transitionComplete(e, s, i);
                                };
                            if (s && o) {
                                var a = m.getTransitionDurationFromElement(s);
                                f(s).removeClass("show").one(m.TRANSITION_END, r).emulateTransitionEnd(a);
                            } else r();
                        }),
                        (e._transitionComplete = function(e, t, i) {
                            if (t) {
                                f(t).removeClass("active");
                                var n = f(t.parentNode).find("> .dropdown-menu .active")[0];
                                n && f(n).removeClass("active"), "tab" === t.getAttribute("role") && t.setAttribute("aria-selected", !1);
                            }
                            if (
                                (f(e).addClass("active"),
                                    "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !0),
                                    m.reflow(e),
                                    e.classList.contains("fade") && e.classList.add("show"),
                                    e.parentNode && f(e.parentNode).hasClass("dropdown-menu"))
                            ) {
                                var s = f(e).closest(".dropdown")[0];
                                if (s) {
                                    var o = [].slice.call(s.querySelectorAll(".dropdown-toggle"));
                                    f(o).addClass("active");
                                }
                                e.setAttribute("aria-expanded", !0);
                            }
                            i && i();
                        }),
                        (n._jQueryInterface = function(i) {
                            return this.each(function() {
                                var e = f(this),
                                    t = e.data("bs.tab");
                                if ((t || ((t = new n(this)), e.data("bs.tab", t)), "string" == typeof i)) {
                                    if (void 0 === t[i]) throw new TypeError('No method named "' + i + '"');
                                    t[i]();
                                }
                            });
                        }),
                        r(n, null, [{
                            key: "VERSION",
                            get: function() {
                                return "4.5.2";
                            },
                        }, ]),
                        n
                    );
                })();
            f(document).on("click.bs.tab.data-api", '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]', function(e) {
                    e.preventDefault(), oe._jQueryInterface.call(f(this), "show");
                }),
                (f.fn.tab = oe._jQueryInterface),
                (f.fn.tab.Constructor = oe),
                (f.fn.tab.noConflict = function() {
                    return (f.fn.tab = se), oe._jQueryInterface;
                });
            var re = f.fn.toast,
                ae = { animation: "boolean", autohide: "boolean", delay: "number" },
                le = { animation: !0, autohide: !0, delay: 500 },
                ce = (function() {
                    function n(e, t) {
                        (this._element = e), (this._config = this._getConfig(t)), (this._timeout = null), this._setListeners();
                    }
                    var e = n.prototype;
                    return (
                        (e.show = function() {
                            var e = this,
                                t = f.Event("show.bs.toast");
                            if ((f(this._element).trigger(t), !t.isDefaultPrevented())) {
                                this._clearTimeout(), this._config.animation && this._element.classList.add("fade");
                                var i = function() {
                                    e._element.classList.remove("showing"),
                                        e._element.classList.add("show"),
                                        f(e._element).trigger("shown.bs.toast"),
                                        e._config.autohide &&
                                        (e._timeout = setTimeout(function() {
                                            e.hide();
                                        }, e._config.delay));
                                };
                                if ((this._element.classList.remove("hide"), m.reflow(this._element), this._element.classList.add("showing"), this._config.animation)) {
                                    var n = m.getTransitionDurationFromElement(this._element);
                                    f(this._element).one(m.TRANSITION_END, i).emulateTransitionEnd(n);
                                } else i();
                            }
                        }),
                        (e.hide = function() {
                            if (this._element.classList.contains("show")) {
                                var e = f.Event("hide.bs.toast");
                                f(this._element).trigger(e), e.isDefaultPrevented() || this._close();
                            }
                        }),
                        (e.dispose = function() {
                            this._clearTimeout(),
                                this._element.classList.contains("show") && this._element.classList.remove("show"),
                                f(this._element).off("click.dismiss.bs.toast"),
                                f.removeData(this._element, "bs.toast"),
                                (this._element = null),
                                (this._config = null);
                        }),
                        (e._getConfig = function(e) {
                            return (e = l({}, le, f(this._element).data(), "object" == typeof e && e ? e : {})), m.typeCheckConfig("toast", e, this.constructor.DefaultType), e;
                        }),
                        (e._setListeners = function() {
                            var e = this;
                            f(this._element).on("click.dismiss.bs.toast", '[data-dismiss="toast"]', function() {
                                return e.hide();
                            });
                        }),
                        (e._close = function() {
                            var e = this,
                                t = function() {
                                    e._element.classList.add("hide"), f(e._element).trigger("hidden.bs.toast");
                                };
                            if ((this._element.classList.remove("show"), this._config.animation)) {
                                var i = m.getTransitionDurationFromElement(this._element);
                                f(this._element).one(m.TRANSITION_END, t).emulateTransitionEnd(i);
                            } else t();
                        }),
                        (e._clearTimeout = function() {
                            clearTimeout(this._timeout), (this._timeout = null);
                        }),
                        (n._jQueryInterface = function(i) {
                            return this.each(function() {
                                var e = f(this),
                                    t = e.data("bs.toast");
                                if ((t || ((t = new n(this, "object" == typeof i && i)), e.data("bs.toast", t)), "string" == typeof i)) {
                                    if (void 0 === t[i]) throw new TypeError('No method named "' + i + '"');
                                    t[i](this);
                                }
                            });
                        }),
                        r(n, null, [{
                                key: "VERSION",
                                get: function() {
                                    return "4.5.2";
                                },
                            },
                            {
                                key: "DefaultType",
                                get: function() {
                                    return ae;
                                },
                            },
                            {
                                key: "Default",
                                get: function() {
                                    return le;
                                },
                            },
                        ]),
                        n
                    );
                })();
            (f.fn.toast = ce._jQueryInterface),
            (f.fn.toast.Constructor = ce),
            (f.fn.toast.noConflict = function() {
                return (f.fn.toast = re), ce._jQueryInterface;
            }),
            (e.Alert = s),
            (e.Button = a),
            (e.Carousel = v),
            (e.Collapse = k),
            (e.Dropdown = D),
            (e.Modal = I),
            (e.Popover = G),
            (e.Scrollspy = ne),
            (e.Tab = oe),
            (e.Toast = ce),
            (e.Tooltip = B),
            (e.Util = m),
            Object.defineProperty(e, "__esModule", { value: !0 });
        }),
        "object" == typeof exports && "undefined" != typeof module ?
        i(exports, require("jquery"), require("popper.js")) :
        "function" == typeof define && define.amd ?
        define(["exports", "jquery", "popper.js"], i) :
        i(((t = "undefined" != typeof globalThis ? globalThis : t || self).bootstrap = {}), t.jQuery, t.Popper),
        (n = window),
        (r = jQuery),
        (y = {
            classes: "",
            inline: (v = !(g = "datepicker")),
            language: "ru",
            startDate: new Date(),
            firstDay: "",
            weekends: [6, 0],
            dateFormat: "",
            altField: "",
            altFieldDateFormat: "@",
            toggleSelected: !0,
            keyboardNav: !0,
            position: "bottom left",
            offset: 12,
            view: "days",
            minView: "days",
            showOtherMonths: !0,
            selectOtherMonths: !0,
            moveToOtherMonthsOnSelect: !0,
            showOtherYears: !0,
            selectOtherYears: !0,
            moveToOtherYearsOnSelect: !0,
            minDate: "",
            maxDate: "",
            disableNavWhenOutOfRange: !0,
            multipleDates: !1,
            multipleDatesSeparator: ",",
            range: !1,
            todayButton: !1,
            clearButton: !1,
            showEvent: "focus",
            autoClose: !1,
            monthsField: "monthsShort",
            prevHtml: '<svg><path d="M 17,12 l -5,5 l 5,5"></path></svg>',
            nextHtml: '<svg><path d="M 14,12 l 5,5 l -5,5"></path></svg>',
            navTitles: { days: "MM, <i>yyyy</i>", months: "yyyy", years: "yyyy1 - yyyy2" },
            timepicker: !1,
            onlyTimepicker: !1,
            dateTimeSeparator: " ",
            timeFormat: "",
            minHours: 0,
            maxHours: 24,
            minMinutes: 0,
            maxMinutes: 59,
            hoursStep: 1,
            minutesStep: 1,
            onSelect: "",
            onShow: "",
            onHide: "",
            onChangeMonth: "",
            onChangeYear: "",
            onChangeDecade: "",
            onChangeView: "",
            onRenderCell: "",
        }),
        (b = {
            ctrlRight: [17, 39],
            ctrlUp: [17, 38],
            ctrlLeft: [17, 37],
            ctrlDown: [17, 40],
            shiftRight: [16, 39],
            shiftUp: [16, 38],
            shiftLeft: [16, 37],
            shiftDown: [16, 40],
            altUp: [18, 38],
            altRight: [18, 39],
            altLeft: [18, 37],
            altDown: [18, 40],
            ctrlShiftUp: [16, 17, 38],
        }),
        ((m = w = function(e, t) {
            (this.el = e),
            (this.$el = r(e)),
            (this.opts = r.extend(!0, {}, y, t, this.$el.data())),
            p == o && (p = r("body")),
                this.opts.startDate || (this.opts.startDate = new Date()),
                "INPUT" == this.el.nodeName && (this.elIsInput = !0),
                this.opts.altField && (this.$altField = "string" == typeof this.opts.altField ? r(this.opts.altField) : this.opts.altField),
                (this.inited = !1),
                (this.visible = !1),
                (this.silent = !1),
                (this.currentDate = this.opts.startDate),
                (this.currentView = this.opts.view),
                this._createShortCuts(),
                (this.selectedDates = []),
                (this.views = {}),
                (this.keys = []),
                (this.minRange = ""),
                (this.maxRange = ""),
                (this._prevOnSelectValue = ""),
                this.init();
        }).prototype = {
            VERSION: "2.2.3",
            viewIndexes: ["days", "months", "years"],
            init: function() {
                v || this.opts.inline || !this.elIsInput || this._buildDatepickersContainer(),
                    this._buildBaseHtml(),
                    this._defineLocale(this.opts.language),
                    this._syncWithMinMaxDates(),
                    this.elIsInput &&
                    (this.opts.inline || (this._setPositionClasses(this.opts.position), this._bindEvents()),
                        this.opts.keyboardNav && !this.opts.onlyTimepicker && this._bindKeyboardEvents(),
                        this.$datepicker.on("mousedown", this._onMouseDownDatepicker.bind(this)),
                        this.$datepicker.on("mouseup", this._onMouseUpDatepicker.bind(this))),
                    this.opts.classes && this.$datepicker.addClass(this.opts.classes),
                    this.opts.timepicker && ((this.timepicker = new r.fn.datepicker.Timepicker(this, this.opts)), this._bindTimepickerEvents()),
                    this.opts.onlyTimepicker && this.$datepicker.addClass("-only-timepicker-"),
                    (this.views[this.currentView] = new r.fn.datepicker.Body(this, this.currentView, this.opts)),
                    this.views[this.currentView].show(),
                    (this.nav = new r.fn.datepicker.Navigation(this, this.opts)),
                    (this.view = this.currentView),
                    this.$el.on("clickCell.adp", this._onClickCell.bind(this)),
                    this.$datepicker.on("mouseenter", ".datepicker--cell", this._onMouseEnterCell.bind(this)),
                    this.$datepicker.on("mouseleave", ".datepicker--cell", this._onMouseLeaveCell.bind(this)),
                    (this.inited = !0);
            },
            _createShortCuts: function() {
                (this.minDate = this.opts.minDate ? this.opts.minDate : new Date(-86399999136e5)), (this.maxDate = this.opts.maxDate ? this.opts.maxDate : new Date(86399999136e5));
            },
            _bindEvents: function() {
                this.$el.on(this.opts.showEvent + ".adp", this._onShowEvent.bind(this)),
                    this.$el.on("mouseup.adp", this._onMouseUpEl.bind(this)),
                    this.$el.on("blur.adp", this._onBlur.bind(this)),
                    this.$el.on("keyup.adp", this._onKeyUpGeneral.bind(this)),
                    r(n).on("resize.adp", this._onResize.bind(this)),
                    r("body").on("mouseup.adp", this._onMouseUpBody.bind(this));
            },
            _bindKeyboardEvents: function() {
                this.$el.on("keydown.adp", this._onKeyDown.bind(this)), this.$el.on("keyup.adp", this._onKeyUp.bind(this)), this.$el.on("hotKey.adp", this._onHotKey.bind(this));
            },
            _bindTimepickerEvents: function() {
                this.$el.on("timeChange.adp", this._onTimeChange.bind(this));
            },
            isWeekend: function(e) {
                return -1 !== this.opts.weekends.indexOf(e);
            },
            _defineLocale: function(e) {
                "string" == typeof e
                    ?
                    ((this.loc = r.fn.datepicker.language[e]),
                        this.loc || (console.warn("Can't find language \"" + e + '" in Datepicker.language, will use "ru" instead'), (this.loc = r.extend(!0, {}, r.fn.datepicker.language.ru))),
                        (this.loc = r.extend(!0, {}, r.fn.datepicker.language.ru, r.fn.datepicker.language[e]))) :
                    (this.loc = r.extend(!0, {}, r.fn.datepicker.language.ru, e)),
                    this.opts.dateFormat && (this.loc.dateFormat = this.opts.dateFormat),
                    this.opts.timeFormat && (this.loc.timeFormat = this.opts.timeFormat),
                    "" !== this.opts.firstDay && (this.loc.firstDay = this.opts.firstDay),
                    this.opts.timepicker && (this.loc.dateFormat = [this.loc.dateFormat, this.loc.timeFormat].join(this.opts.dateTimeSeparator)),
                    this.opts.onlyTimepicker && (this.loc.dateFormat = this.loc.timeFormat);
                var t = this._getWordBoundaryRegExp;
                (this.loc.timeFormat.match(t("aa")) || this.loc.timeFormat.match(t("AA"))) && (this.ampm = !0);
            },
            _buildDatepickersContainer: function() {
                (v = !0), p.append('<div class="datepickers-container" id="datepickers-container"></div>'), (f = r("#datepickers-container"));
            },
            _buildBaseHtml: function() {
                var e,
                    t = r('<div class="datepicker-inline">');
                (e = "INPUT" == this.el.nodeName ? (this.opts.inline ? t.insertAfter(this.$el) : f) : t.appendTo(this.$el)),
                (this.$datepicker = r('<div class="datepicker"><i class="datepicker--pointer"></i><nav class="datepicker--nav"></nav><div class="datepicker--content"></div></div>').appendTo(e)),
                (this.$content = r(".datepicker--content", this.$datepicker)),
                (this.$nav = r(".datepicker--nav", this.$datepicker));
            },
            _triggerOnChange: function() {
                if (!this.selectedDates.length) {
                    if ("" === this._prevOnSelectValue) return;
                    return (this._prevOnSelectValue = ""), this.opts.onSelect("", "", this);
                }
                var e,
                    t = this.selectedDates,
                    i = m.getParsedDate(t[0]),
                    n = this,
                    s = new Date(i.year, i.month, i.date, i.hours, i.minutes);
                (e = t
                    .map(function(e) {
                        return n.formatDate(n.loc.dateFormat, e);
                    })
                    .join(this.opts.multipleDatesSeparator)),
                (this.opts.multipleDates || this.opts.range) &&
                (s = t.map(function(e) {
                    var t = m.getParsedDate(e);
                    return new Date(t.year, t.month, t.date, t.hours, t.minutes);
                })),
                (this._prevOnSelectValue = e),
                this.opts.onSelect(e, s, this);
            },
            next: function() {
                var e = this.parsedDate,
                    t = this.opts;
                switch (this.view) {
                    case "days":
                        (this.date = new Date(e.year, e.month + 1, 1)), t.onChangeMonth && t.onChangeMonth(this.parsedDate.month, this.parsedDate.year);
                        break;
                    case "months":
                        (this.date = new Date(e.year + 1, e.month, 1)), t.onChangeYear && t.onChangeYear(this.parsedDate.year);
                        break;
                    case "years":
                        (this.date = new Date(e.year + 10, 0, 1)), t.onChangeDecade && t.onChangeDecade(this.curDecade);
                }
            },
            prev: function() {
                var e = this.parsedDate,
                    t = this.opts;
                switch (this.view) {
                    case "days":
                        (this.date = new Date(e.year, e.month - 1, 1)), t.onChangeMonth && t.onChangeMonth(this.parsedDate.month, this.parsedDate.year);
                        break;
                    case "months":
                        (this.date = new Date(e.year - 1, e.month, 1)), t.onChangeYear && t.onChangeYear(this.parsedDate.year);
                        break;
                    case "years":
                        (this.date = new Date(e.year - 10, 0, 1)), t.onChangeDecade && t.onChangeDecade(this.curDecade);
                }
            },
            formatDate: function(e, t) {
                t = t || this.date;
                var i,
                    n = e,
                    s = this._getWordBoundaryRegExp,
                    o = this.loc,
                    r = m.getLeadingZeroNum,
                    a = m.getDecade(t),
                    l = m.getParsedDate(t),
                    c = l.fullHours,
                    d = l.hours,
                    u = e.match(s("aa")) || e.match(s("AA")),
                    h = "am",
                    p = this._replacer;
                switch ((this.opts.timepicker && this.timepicker && u && ((c = r((i = this.timepicker._getValidHoursFromDate(t, u)).hours)), (d = i.hours), (h = i.dayPeriod)), !0)) {
                    case /@/.test(n):
                        n = n.replace(/@/, t.getTime());
                    case /aa/.test(n):
                        n = p(n, s("aa"), h);
                    case /AA/.test(n):
                        n = p(n, s("AA"), h.toUpperCase());
                    case /dd/.test(n):
                        n = p(n, s("dd"), l.fullDate);
                    case /d/.test(n):
                        n = p(n, s("d"), l.date);
                    case /DD/.test(n):
                        n = p(n, s("DD"), o.days[l.day]);
                    case /D/.test(n):
                        n = p(n, s("D"), o.daysShort[l.day]);
                    case /mm/.test(n):
                        n = p(n, s("mm"), l.fullMonth);
                    case /m/.test(n):
                        n = p(n, s("m"), l.month + 1);
                    case /MM/.test(n):
                        n = p(n, s("MM"), this.loc.months[l.month]);
                    case /M/.test(n):
                        n = p(n, s("M"), o.monthsShort[l.month]);
                    case /ii/.test(n):
                        n = p(n, s("ii"), l.fullMinutes);
                    case /i/.test(n):
                        n = p(n, s("i"), l.minutes);
                    case /hh/.test(n):
                        n = p(n, s("hh"), c);
                    case /h/.test(n):
                        n = p(n, s("h"), d);
                    case /yyyy/.test(n):
                        n = p(n, s("yyyy"), l.year);
                    case /yyyy1/.test(n):
                        n = p(n, s("yyyy1"), a[0]);
                    case /yyyy2/.test(n):
                        n = p(n, s("yyyy2"), a[1]);
                    case /yy/.test(n):
                        n = p(n, s("yy"), l.year.toString().slice(-2));
                }
                return n;
            },
            _replacer: function(e, t, s) {
                return e.replace(t, function(e, t, i, n) {
                    return t + s + n;
                });
            },
            _getWordBoundaryRegExp: function(e) {
                var t = "\\s|\\.|-|/|\\\\|,|\\$|\\!|\\?|:|;";
                return new RegExp("(^|>|" + t + ")(" + e + ")($|<|" + t + ")", "g");
            },
            selectDate: function(e) {
                var t = this,
                    i = t.opts,
                    n = t.parsedDate,
                    s = t.selectedDates.length,
                    o = "";
                if (Array.isArray(e))
                    e.forEach(function(e) {
                        t.selectDate(e);
                    });
                else if (e instanceof Date) {
                    if (
                        ((this.lastSelectedDate = e),
                            this.timepicker && this.timepicker._setTime(e),
                            t._trigger("selectDate", e),
                            this.timepicker && (e.setHours(this.timepicker.hours), e.setMinutes(this.timepicker.minutes)),
                            "days" == t.view && e.getMonth() != n.month && i.moveToOtherMonthsOnSelect && (o = new Date(e.getFullYear(), e.getMonth(), 1)),
                            "years" == t.view && e.getFullYear() != n.year && i.moveToOtherYearsOnSelect && (o = new Date(e.getFullYear(), 0, 1)),
                            o && ((t.silent = !0), (t.date = o), (t.silent = !1), t.nav._render()),
                            i.multipleDates && !i.range)
                    ) {
                        if (s === i.multipleDates) return;
                        t._isSelected(e) || t.selectedDates.push(e);
                    } else
                        i.range ?
                        2 == s ?
                        ((t.selectedDates = [e]), (t.minRange = e), (t.maxRange = "")) :
                        1 == s ?
                        (t.selectedDates.push(e), t.maxRange ? (t.minRange = e) : (t.maxRange = e), m.bigger(t.maxRange, t.minRange) && ((t.maxRange = t.minRange), (t.minRange = e)), (t.selectedDates = [t.minRange, t.maxRange])) :
                        ((t.selectedDates = [e]), (t.minRange = e)) :
                        (t.selectedDates = [e]);
                    t._setInputValue(),
                        i.onSelect && t._triggerOnChange(),
                        i.autoClose && !this.timepickerIsActive && (i.multipleDates || i.range ? i.range && 2 == t.selectedDates.length && t.hide() : t.hide()),
                        t.views[this.currentView]._render();
                }
            },
            removeDate: function(i) {
                var n = this.selectedDates,
                    s = this;
                if (i instanceof Date)
                    return n.some(function(e, t) {
                        return m.isSame(e, i) ?
                            (n.splice(t, 1),
                                s.selectedDates.length ? (s.lastSelectedDate = s.selectedDates[s.selectedDates.length - 1]) : ((s.minRange = ""), (s.maxRange = ""), (s.lastSelectedDate = "")),
                                s.views[s.currentView]._render(),
                                s._setInputValue(),
                                s.opts.onSelect && s._triggerOnChange(), !0) :
                            void 0;
                    });
            },
            today: function() {
                (this.silent = !0), (this.view = this.opts.minView), (this.silent = !1), (this.date = new Date()), this.opts.todayButton instanceof Date && this.selectDate(this.opts.todayButton);
            },
            clear: function() {
                (this.selectedDates = []), (this.minRange = ""), (this.maxRange = ""), this.views[this.currentView]._render(), this._setInputValue(), this.opts.onSelect && this._triggerOnChange();
            },
            update: function(e, t) {
                var i = arguments.length,
                    n = this.lastSelectedDate;
                return (
                    2 == i ? (this.opts[e] = t) : 1 == i && "object" == typeof e && (this.opts = r.extend(!0, this.opts, e)),
                    this._createShortCuts(),
                    this._syncWithMinMaxDates(),
                    this._defineLocale(this.opts.language),
                    this.nav._addButtonsIfNeed(),
                    this.opts.onlyTimepicker || this.nav._render(),
                    this.views[this.currentView]._render(),
                    this.elIsInput && !this.opts.inline && (this._setPositionClasses(this.opts.position), this.visible && this.setPosition(this.opts.position)),
                    this.opts.classes && this.$datepicker.addClass(this.opts.classes),
                    this.opts.onlyTimepicker && this.$datepicker.addClass("-only-timepicker-"),
                    this.opts.timepicker && (n && this.timepicker._handleDate(n), this.timepicker._updateRanges(), this.timepicker._updateCurrentTime(), n && (n.setHours(this.timepicker.hours), n.setMinutes(this.timepicker.minutes))),
                    this._setInputValue(),
                    this
                );
            },
            _syncWithMinMaxDates: function() {
                var e = this.date.getTime();
                (this.silent = !0), this.minTime > e && (this.date = this.minDate), this.maxTime < e && (this.date = this.maxDate), (this.silent = !1);
            },
            _isSelected: function(t, i) {
                var n = !1;
                return (
                    this.selectedDates.some(function(e) {
                        return m.isSame(e, t, i) ? ((n = e), !0) : void 0;
                    }),
                    n
                );
            },
            _setInputValue: function() {
                var e,
                    t = this,
                    i = t.opts,
                    n = t.loc.dateFormat,
                    s = i.altFieldDateFormat,
                    o = t.selectedDates.map(function(e) {
                        return t.formatDate(n, e);
                    });
                i.altField &&
                    t.$altField.length &&
                    ((e = (e = this.selectedDates.map(function(e) {
                            return t.formatDate(s, e);
                        })).join(this.opts.multipleDatesSeparator)),
                        this.$altField.val(e)),
                    (o = o.join(this.opts.multipleDatesSeparator)),
                    this.$el.val(o);
            },
            _isInRange: function(e, t) {
                var i = e.getTime(),
                    n = m.getParsedDate(e),
                    s = m.getParsedDate(this.minDate),
                    o = m.getParsedDate(this.maxDate),
                    r = new Date(n.year, n.month, s.date).getTime(),
                    a = new Date(n.year, n.month, o.date).getTime(),
                    l = { day: i >= this.minTime && i <= this.maxTime, month: r >= this.minTime && a <= this.maxTime, year: n.year >= s.year && n.year <= o.year };
                return t ? l[t] : l.day;
            },
            _getDimensions: function(e) {
                var t = e.offset();
                return { width: e.outerWidth(), height: e.outerHeight(), left: t.left, top: t.top };
            },
            _getDateFromCell: function(e) {
                var t = this.parsedDate,
                    i = e.data("year") || t.year,
                    n = e.data("month") == o ? t.month : e.data("month"),
                    s = e.data("date") || 1;
                return new Date(i, n, s);
            },
            _setPositionClasses: function(e) {
                var t = (e = e.split(" "))[0],
                    i = "datepicker -" + t + "-" + e[1] + "- -from-" + t + "-";
                this.visible && (i += " active"), this.$datepicker.removeAttr("class").addClass(i);
            },
            setPosition: function(e) {
                e = e || this.opts.position;
                var t,
                    i,
                    n = this._getDimensions(this.$el),
                    s = this._getDimensions(this.$datepicker),
                    o = e.split(" "),
                    r = this.opts.offset,
                    a = o[0],
                    l = o[1];
                switch (a) {
                    case "top":
                        t = n.top - s.height - r;
                        break;
                    case "right":
                        i = n.left + n.width + r;
                        break;
                    case "bottom":
                        t = n.top + n.height + r;
                        break;
                    case "left":
                        i = n.left - s.width - r;
                }
                switch (l) {
                    case "top":
                        t = n.top;
                        break;
                    case "right":
                        i = n.left + n.width - s.width;
                        break;
                    case "bottom":
                        t = n.top + n.height - s.height;
                        break;
                    case "left":
                        i = n.left;
                        break;
                    case "center":
                        /left|right/.test(a) ? (t = n.top + n.height / 2 - s.height / 2) : (i = n.left + n.width / 2 - s.width / 2);
                }
                this.$datepicker.css({ left: i, top: t });
            },
            show: function() {
                var e = this.opts.onShow;
                this.setPosition(this.opts.position), this.$datepicker.addClass("active"), (this.visible = !0), e && this._bindVisionEvents(e);
            },
            hide: function() {
                var e = this.opts.onHide;
                this.$datepicker.removeClass("active").css({ left: "-100000px" }), (this.focused = ""), (this.keys = []), (this.inFocus = !1), (this.visible = !1), this.$el.blur(), e && this._bindVisionEvents(e);
            },
            down: function(e) {
                this._changeView(e, "down");
            },
            up: function(e) {
                this._changeView(e, "up");
            },
            _bindVisionEvents: function(e) {
                this.$datepicker.off("transitionend.dp"), e(this, !1), this.$datepicker.one("transitionend.dp", e.bind(this, this, !0));
            },
            _changeView: function(e, t) {
                e = e || this.focused || this.date;
                var i = "up" == t ? this.viewIndex + 1 : this.viewIndex - 1;
                2 < i && (i = 2), i < 0 && (i = 0), (this.silent = !0), (this.date = new Date(e.getFullYear(), e.getMonth(), 1)), (this.silent = !1), (this.view = this.viewIndexes[i]);
            },
            _handleHotKey: function(e) {
                var t,
                    i,
                    n,
                    s = m.getParsedDate(this._getFocusedDate()),
                    o = this.opts,
                    r = !1,
                    a = !1,
                    l = !1,
                    c = s.year,
                    d = s.month,
                    u = s.date;
                switch (e) {
                    case "ctrlRight":
                    case "ctrlUp":
                        (d += 1), (r = !0);
                        break;
                    case "ctrlLeft":
                    case "ctrlDown":
                        (d -= 1), (r = !0);
                        break;
                    case "shiftRight":
                    case "shiftUp":
                        (a = !0), (c += 1);
                        break;
                    case "shiftLeft":
                    case "shiftDown":
                        (a = !0), (c -= 1);
                        break;
                    case "altRight":
                    case "altUp":
                        (l = !0), (c += 10);
                        break;
                    case "altLeft":
                    case "altDown":
                        (l = !0), (c -= 10);
                        break;
                    case "ctrlShiftUp":
                        this.up();
                }
                (n = m.getDaysCount(new Date(c, d))),
                (i = new Date(c, d, u)),
                n < u && (u = n),
                    i.getTime() < this.minTime ? (i = this.minDate) : i.getTime() > this.maxTime && (i = this.maxDate),
                    (this.focused = i),
                    (t = m.getParsedDate(i)),
                    r && o.onChangeMonth && o.onChangeMonth(t.month, t.year),
                    a && o.onChangeYear && o.onChangeYear(t.year),
                    l && o.onChangeDecade && o.onChangeDecade(this.curDecade);
            },
            _registerKey: function(t) {
                this.keys.some(function(e) {
                    return e == t;
                }) || this.keys.push(t);
            },
            _unRegisterKey: function(e) {
                var t = this.keys.indexOf(e);
                this.keys.splice(t, 1);
            },
            _isHotKeyPressed: function() {
                var e,
                    t = !1,
                    i = this.keys.sort();
                for (var n in b)
                    (e = b[n]),
                    i.length == e.length &&
                    e.every(function(e, t) {
                        return e == i[t];
                    }) &&
                    (this._trigger("hotKey", n), (t = !0));
                return t;
            },
            _trigger: function(e, t) {
                this.$el.trigger(e, t);
            },
            _focusNextCell: function(e, t) {
                t = t || this.cellType;
                var i = m.getParsedDate(this._getFocusedDate()),
                    n = i.year,
                    s = i.month,
                    o = i.date;
                if (!this._isHotKeyPressed()) {
                    switch (e) {
                        case 37:
                            "day" == t && (o -= 1), "month" == t && (s -= 1), "year" == t && (n -= 1);
                            break;
                        case 38:
                            "day" == t && (o -= 7), "month" == t && (s -= 3), "year" == t && (n -= 4);
                            break;
                        case 39:
                            "day" == t && (o += 1), "month" == t && (s += 1), "year" == t && (n += 1);
                            break;
                        case 40:
                            "day" == t && (o += 7), "month" == t && (s += 3), "year" == t && (n += 4);
                    }
                    var r = new Date(n, s, o);
                    r.getTime() < this.minTime ? (r = this.minDate) : r.getTime() > this.maxTime && (r = this.maxDate), (this.focused = r);
                }
            },
            _getFocusedDate: function() {
                var e = this.focused || this.selectedDates[this.selectedDates.length - 1],
                    t = this.parsedDate;
                if (!e)
                    switch (this.view) {
                        case "days":
                            e = new Date(t.year, t.month, new Date().getDate());
                            break;
                        case "months":
                            e = new Date(t.year, t.month, 1);
                            break;
                        case "years":
                            e = new Date(t.year, 0, 1);
                    }
                return e;
            },
            _getCell: function(e, t) {
                t = t || this.cellType;
                var i,
                    n = m.getParsedDate(e),
                    s = '.datepicker--cell[data-year="' + n.year + '"]';
                switch (t) {
                    case "month":
                        s = '[data-month="' + n.month + '"]';
                        break;
                    case "day":
                        s += '[data-month="' + n.month + '"][data-date="' + n.date + '"]';
                }
                return (i = this.views[this.currentView].$el.find(s)).length ? i : r("");
            },
            destroy: function() {
                var e = this;
                e.$el.off(".adp").data("datepicker", ""),
                    (e.selectedDates = []),
                    (e.focused = ""),
                    (e.views = {}),
                    (e.keys = []),
                    (e.minRange = ""),
                    (e.maxRange = ""),
                    e.opts.inline || !e.elIsInput ? e.$datepicker.closest(".datepicker-inline").remove() : e.$datepicker.remove();
            },
            _handleAlreadySelectedDates: function(e, t) {
                this.opts.range ? (this.opts.toggleSelected ? this.removeDate(t) : 2 != this.selectedDates.length && this._trigger("clickCell", t)) : this.opts.toggleSelected && this.removeDate(t),
                    this.opts.toggleSelected || ((this.lastSelectedDate = e), this.opts.timepicker && (this.timepicker._setTime(e), this.timepicker.update()));
            },
            _onShowEvent: function(e) {
                this.visible || this.show();
            },
            _onBlur: function() {
                !this.inFocus && this.visible && this.hide();
            },
            _onMouseDownDatepicker: function(e) {
                this.inFocus = !0;
            },
            _onMouseUpDatepicker: function(e) {
                (this.inFocus = !1), (e.originalEvent.inFocus = !0), e.originalEvent.timepickerFocus || this.$el.focus();
            },
            _onKeyUpGeneral: function(e) {
                this.$el.val() || this.clear();
            },
            _onResize: function() {
                this.visible && this.setPosition();
            },
            _onMouseUpBody: function(e) {
                e.originalEvent.inFocus || (this.visible && !this.inFocus && this.hide());
            },
            _onMouseUpEl: function(e) {
                (e.originalEvent.inFocus = !0), setTimeout(this._onKeyUpGeneral.bind(this), 4);
            },
            _onKeyDown: function(e) {
                var t = e.which;
                if ((this._registerKey(t), 37 <= t && t <= 40 && (e.preventDefault(), this._focusNextCell(t)), 13 == t && this.focused)) {
                    if (this._getCell(this.focused).hasClass("-disabled-")) return;
                    if (this.view != this.opts.minView) this.down();
                    else {
                        var i = this._isSelected(this.focused, this.cellType);
                        if (!i) return this.timepicker && (this.focused.setHours(this.timepicker.hours), this.focused.setMinutes(this.timepicker.minutes)), void this.selectDate(this.focused);
                        this._handleAlreadySelectedDates(i, this.focused);
                    }
                }
                27 == t && this.hide();
            },
            _onKeyUp: function(e) {
                var t = e.which;
                this._unRegisterKey(t);
            },
            _onHotKey: function(e, t) {
                this._handleHotKey(t);
            },
            _onMouseEnterCell: function(e) {
                var t = r(e.target).closest(".datepicker--cell"),
                    i = this._getDateFromCell(t);
                (this.silent = !0),
                this.focused && (this.focused = ""),
                    t.addClass("-focus-"),
                    (this.focused = i),
                    (this.silent = !1),
                    this.opts.range &&
                    1 == this.selectedDates.length &&
                    ((this.minRange = this.selectedDates[0]), (this.maxRange = ""), m.less(this.minRange, this.focused) && ((this.maxRange = this.minRange), (this.minRange = "")), this.views[this.currentView]._update());
            },
            _onMouseLeaveCell: function(e) {
                r(e.target).closest(".datepicker--cell").removeClass("-focus-"), (this.silent = !0), (this.focused = ""), (this.silent = !1);
            },
            _onTimeChange: function(e, t, i) {
                var n = new Date(),
                    s = !1;
                this.selectedDates.length && ((s = !0), (n = this.lastSelectedDate)),
                    n.setHours(t),
                    n.setMinutes(i),
                    s || this._getCell(n).hasClass("-disabled-") ? (this._setInputValue(), this.opts.onSelect && this._triggerOnChange()) : this.selectDate(n);
            },
            _onClickCell: function(e, t) {
                this.timepicker && (t.setHours(this.timepicker.hours), t.setMinutes(this.timepicker.minutes)), this.selectDate(t);
            },
            set focused(e) {
                if (!e && this.focused) {
                    var t = this._getCell(this.focused);
                    t.length && t.removeClass("-focus-");
                }
                (this._focused = e),
                this.opts.range && 1 == this.selectedDates.length && ((this.minRange = this.selectedDates[0]), (this.maxRange = ""), m.less(this.minRange, this._focused) && ((this.maxRange = this.minRange), (this.minRange = ""))),
                    this.silent || (this.date = e);
            },
            get focused() {
                return this._focused;
            },
            get parsedDate() {
                return m.getParsedDate(this.date);
            },
            set date(e) {
                return e instanceof Date ? ((this.currentDate = e), this.inited && !this.silent && (this.views[this.view]._render(), this.nav._render(), this.visible && this.elIsInput && this.setPosition()), e) : void 0;
            },
            get date() {
                return this.currentDate;
            },
            set view(e) {
                return (
                    (this.viewIndex = this.viewIndexes.indexOf(e)),
                    this.viewIndex < 0 ?
                    void 0 :
                    ((this.prevView = this.currentView),
                        (this.currentView = e),
                        this.inited &&
                        (this.views[e] ? this.views[e]._render() : (this.views[e] = new r.fn.datepicker.Body(this, e, this.opts)),
                            this.views[this.prevView].hide(),
                            this.views[e].show(),
                            this.nav._render(),
                            this.opts.onChangeView && this.opts.onChangeView(e),
                            this.elIsInput && this.visible && this.setPosition()),
                        e)
                );
            },
            get view() {
                return this.currentView;
            },
            get cellType() {
                return this.view.substring(0, this.view.length - 1);
            },
            get minTime() {
                var e = m.getParsedDate(this.minDate);
                return new Date(e.year, e.month, e.date).getTime();
            },
            get maxTime() {
                var e = m.getParsedDate(this.maxDate);
                return new Date(e.year, e.month, e.date).getTime();
            },
            get curDecade() {
                return m.getDecade(this.date);
            },
        }),
        (m.getDaysCount = function(e) {
            return new Date(e.getFullYear(), e.getMonth() + 1, 0).getDate();
        }),
        (m.getParsedDate = function(e) {
            return {
                year: e.getFullYear(),
                month: e.getMonth(),
                fullMonth: e.getMonth() + 1 < 10 ? "0" + (e.getMonth() + 1) : e.getMonth() + 1,
                date: e.getDate(),
                fullDate: e.getDate() < 10 ? "0" + e.getDate() : e.getDate(),
                day: e.getDay(),
                hours: e.getHours(),
                fullHours: e.getHours() < 10 ? "0" + e.getHours() : e.getHours(),
                minutes: e.getMinutes(),
                fullMinutes: e.getMinutes() < 10 ? "0" + e.getMinutes() : e.getMinutes(),
            };
        }),
        (m.getDecade = function(e) {
            var t = 10 * Math.floor(e.getFullYear() / 10);
            return [t, t + 9];
        }),
        (m.template = function(e, i) {
            return e.replace(/#\{([\w]+)\}/g, function(e, t) {
                return i[t] || 0 === i[t] ? i[t] : void 0;
            });
        }),
        (m.isSame = function(e, t, i) {
            if (!e || !t) return !1;
            var n = m.getParsedDate(e),
                s = m.getParsedDate(t),
                o = i || "day";
            return { day: n.date == s.date && n.month == s.month && n.year == s.year, month: n.month == s.month && n.year == s.year, year: n.year == s.year }[o];
        }),
        (m.less = function(e, t, i) {
            return !(!e || !t) && t.getTime() < e.getTime();
        }),
        (m.bigger = function(e, t, i) {
            return !(!e || !t) && t.getTime() > e.getTime();
        }),
        (m.getLeadingZeroNum = function(e) {
            return parseInt(e) < 10 ? "0" + e : e;
        }),
        (m.resetTime = function(e) {
            return "object" == typeof e ? ((e = m.getParsedDate(e)), new Date(e.year, e.month, e.date)) : void 0;
        }),
        (r.fn.datepicker = function(t) {
            return this.each(function() {
                if (r.data(this, g)) {
                    var e = r.data(this, g);
                    (e.opts = r.extend(!0, e.opts, t)), e.update();
                } else r.data(this, g, new w(this, t));
            });
        }),
        (r.fn.datepicker.Constructor = w),
        (r.fn.datepicker.language = {
            ru: {
                days: ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"],
                daysShort: ["Вос", "Пон", "Вто", "Сре", "Чет", "Пят", "Суб"],
                daysMin: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
                months: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
                monthsShort: ["Янв", "Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек"],
                today: "Сегодня",
                clear: "Очистить",
                dateFormat: "dd.mm.yyyy",
                timeFormat: "hh:ii",
                firstDay: 1,
            },
        }),
        r(function() {
            r(".datepicker-here").datepicker();
        }),
        (d = {
            days: '<div class="datepicker--days datepicker--body"><div class="datepicker--days-names"></div><div class="datepicker--cells datepicker--cells-days"></div></div>',
            months: '<div class="datepicker--months datepicker--body"><div class="datepicker--cells datepicker--cells-months"></div></div>',
            years: '<div class="datepicker--years datepicker--body"><div class="datepicker--cells datepicker--cells-years"></div></div>',
        }),
        (u = r.fn.datepicker),
        (h = u.Constructor),
        (u.Body = function(e, t, i) {
            (this.d = e), (this.type = t), (this.opts = i), (this.$el = r("")), this.opts.onlyTimepicker || this.init();
        }),
        (u.Body.prototype = {
            init: function() {
                this._buildBaseHtml(), this._render(), this._bindEvents();
            },
            _bindEvents: function() {
                this.$el.on("click", ".datepicker--cell", r.proxy(this._onClickCell, this));
            },
            _buildBaseHtml: function() {
                (this.$el = r(d[this.type]).appendTo(this.d.$content)), (this.$names = r(".datepicker--days-names", this.$el)), (this.$cells = r(".datepicker--cells", this.$el));
            },
            _getDayNamesHtml: function(e, t, i, n) {
                return (
                    (t = t != o ? t : e),
                    (i = i || ""),
                    7 < (n = n != o ? n : 0) ?
                    i :
                    7 == t ?
                    this._getDayNamesHtml(e, 0, i, ++n) :
                    ((i += '<div class="datepicker--day-name' + (this.d.isWeekend(t) ? " -weekend-" : "") + '">' + this.d.loc.daysMin[t] + "</div>"), this._getDayNamesHtml(e, ++t, i, ++n))
                );
            },
            _getCellContents: function(e, t) {
                var i = "datepicker--cell datepicker--cell-" + t,
                    n = new Date(),
                    s = this.d,
                    o = h.resetTime(s.minRange),
                    r = h.resetTime(s.maxRange),
                    a = s.opts,
                    l = h.getParsedDate(e),
                    c = {},
                    d = l.date;
                switch (t) {
                    case "day":
                        s.isWeekend(l.day) && (i += " -weekend-"), l.month != this.d.parsedDate.month && ((i += " -other-month-"), a.selectOtherMonths || (i += " -disabled-"), a.showOtherMonths || (d = ""));
                        break;
                    case "month":
                        d = s.loc[s.opts.monthsField][l.month];
                        break;
                    case "year":
                        var u = s.curDecade;
                        (d = l.year), (l.year < u[0] || l.year > u[1]) && ((i += " -other-decade-"), a.selectOtherYears || (i += " -disabled-"), a.showOtherYears || (d = ""));
                }
                return (
                    a.onRenderCell && ((d = (c = a.onRenderCell(e, t) || {}).html ? c.html : d), (i += c.classes ? " " + c.classes : "")),
                    a.range &&
                    (h.isSame(o, e, t) && (i += " -range-from-"),
                        h.isSame(r, e, t) && (i += " -range-to-"),
                        1 == s.selectedDates.length && s.focused ?
                        (((h.bigger(o, e) && h.less(s.focused, e)) || (h.less(r, e) && h.bigger(s.focused, e))) && (i += " -in-range-"),
                            h.less(r, e) && h.isSame(s.focused, e) && (i += " -range-from-"),
                            h.bigger(o, e) && h.isSame(s.focused, e) && (i += " -range-to-")) :
                        2 == s.selectedDates.length && h.bigger(o, e) && h.less(r, e) && (i += " -in-range-")),
                    h.isSame(n, e, t) && (i += " -current-"),
                    s.focused && h.isSame(e, s.focused, t) && (i += " -focus-"),
                    s._isSelected(e, t) && (i += " -selected-"),
                    (!s._isInRange(e, t) || c.disabled) && (i += " -disabled-"), { html: d, classes: i }
                );
            },
            _getDaysHtml: function(e) {
                for (
                    var t,
                        i,
                        n = h.getDaysCount(e),
                        s = new Date(e.getFullYear(), e.getMonth(), 1).getDay(),
                        o = new Date(e.getFullYear(), e.getMonth(), n).getDay(),
                        r = s - this.d.loc.firstDay,
                        a = 6 - o + this.d.loc.firstDay,
                        l = "",
                        c = 1 - (r = r < 0 ? r + 7 : r),
                        d = n + (a = 6 < a ? a - 7 : a); c <= d; c++
                )
                    (i = e.getFullYear()), (t = e.getMonth()), (l += this._getDayHtml(new Date(i, t, c)));
                return l;
            },
            _getDayHtml: function(e) {
                var t = this._getCellContents(e, "day");
                return '<div class="' + t.classes + '" data-date="' + e.getDate() + '" data-month="' + e.getMonth() + '" data-year="' + e.getFullYear() + '">' + t.html + "</div>";
            },
            _getMonthsHtml: function(e) {
                for (var t = "", i = h.getParsedDate(e), n = 0; n < 12;)(t += this._getMonthHtml(new Date(i.year, n))), n++;
                return t;
            },
            _getMonthHtml: function(e) {
                var t = this._getCellContents(e, "month");
                return '<div class="' + t.classes + '" data-month="' + e.getMonth() + '">' + t.html + "</div>";
            },
            _getYearsHtml: function(e) {
                for (var t = (h.getParsedDate(e), h.getDecade(e)), i = "", n = t[0] - 1; n <= t[1] + 1; n++) i += this._getYearHtml(new Date(n, 0));
                return i;
            },
            _getYearHtml: function(e) {
                var t = this._getCellContents(e, "year");
                return '<div class="' + t.classes + '" data-year="' + e.getFullYear() + '">' + t.html + "</div>";
            },
            _renderTypes: {
                days: function() {
                    var e = this._getDayNamesHtml(this.d.loc.firstDay),
                        t = this._getDaysHtml(this.d.currentDate);
                    this.$cells.html(t), this.$names.html(e);
                },
                months: function() {
                    var e = this._getMonthsHtml(this.d.currentDate);
                    this.$cells.html(e);
                },
                years: function() {
                    var e = this._getYearsHtml(this.d.currentDate);
                    this.$cells.html(e);
                },
            },
            _render: function() {
                this.opts.onlyTimepicker || this._renderTypes[this.type].bind(this)();
            },
            _update: function() {
                var i,
                    n,
                    s,
                    e = r(".datepicker--cell", this.$cells),
                    o = this;
                e.each(function(e, t) {
                    (n = r(this)), (s = o.d._getDateFromCell(r(this))), (i = o._getCellContents(s, o.d.cellType)), n.attr("class", i.classes);
                });
            },
            show: function() {
                this.opts.onlyTimepicker || (this.$el.addClass("active"), (this.acitve = !0));
            },
            hide: function() {
                this.$el.removeClass("active"), (this.active = !1);
            },
            _handleClick: function(e) {
                var t = e.data("date") || 1,
                    i = e.data("month") || 0,
                    n = e.data("year") || this.d.parsedDate.year,
                    s = this.d;
                if (s.view == this.opts.minView) {
                    var o = new Date(n, i, t),
                        r = this.d._isSelected(o, this.d.cellType);
                    return r ? void s._handleAlreadySelectedDates.bind(s, r, o)() : void s._trigger("clickCell", o);
                }
                s.down(new Date(n, i, t));
            },
            _onClickCell: function(e) {
                var t = r(e.target).closest(".datepicker--cell");
                t.hasClass("-disabled-") || this._handleClick.bind(this)(t);
            },
        }),
        (l = r.fn.datepicker),
        (c = l.Constructor),
        (l.Navigation = function(e, t) {
            (this.d = e), (this.opts = t), (this.$buttonsContainer = ""), this.init();
        }),
        (l.Navigation.prototype = {
            init: function() {
                this._buildBaseHtml(), this._bindEvents();
            },
            _bindEvents: function() {
                this.d.$nav.on("click", ".datepicker--nav-action", r.proxy(this._onClickNavButton, this)),
                    this.d.$nav.on("click", ".datepicker--nav-title", r.proxy(this._onClickNavTitle, this)),
                    this.d.$datepicker.on("click", ".datepicker--button", r.proxy(this._onClickNavButton, this));
            },
            _buildBaseHtml: function() {
                this.opts.onlyTimepicker || this._render(), this._addButtonsIfNeed();
            },
            _addButtonsIfNeed: function() {
                this.opts.todayButton && this._addButton("today"), this.opts.clearButton && this._addButton("clear");
            },
            _render: function() {
                var e = this._getTitle(this.d.currentDate),
                    t = c.template(
                        '<div class="datepicker--nav-action" data-action="prev">#{prevHtml}</div><div class="datepicker--nav-title">#{title}</div><div class="datepicker--nav-action" data-action="next">#{nextHtml}</div>',
                        r.extend({ title: e }, this.opts)
                    );
                this.d.$nav.html(t), "years" == this.d.view && r(".datepicker--nav-title", this.d.$nav).addClass("-disabled-"), this.setNavStatus();
            },
            _getTitle: function(e) {
                return this.d.formatDate(this.opts.navTitles[this.d.view], e);
            },
            _addButton: function(e) {
                this.$buttonsContainer.length || this._addButtonsContainer();
                var t = { action: e, label: this.d.loc[e] },
                    i = c.template('<span class="datepicker--button" data-action="#{action}">#{label}</span>', t);
                r("[data-action=" + e + "]", this.$buttonsContainer).length || this.$buttonsContainer.append(i);
            },
            _addButtonsContainer: function() {
                this.d.$datepicker.append('<div class="datepicker--buttons"></div>'), (this.$buttonsContainer = r(".datepicker--buttons", this.d.$datepicker));
            },
            setNavStatus: function() {
                if ((this.opts.minDate || this.opts.maxDate) && this.opts.disableNavWhenOutOfRange) {
                    var e = this.d.parsedDate,
                        t = e.month,
                        i = e.year,
                        n = e.date;
                    switch (this.d.view) {
                        case "days":
                            this.d._isInRange(new Date(i, t - 1, 1), "month") || this._disableNav("prev"), this.d._isInRange(new Date(i, t + 1, 1), "month") || this._disableNav("next");
                            break;
                        case "months":
                            this.d._isInRange(new Date(i - 1, t, n), "year") || this._disableNav("prev"), this.d._isInRange(new Date(i + 1, t, n), "year") || this._disableNav("next");
                            break;
                        case "years":
                            var s = c.getDecade(this.d.date);
                            this.d._isInRange(new Date(s[0] - 1, 0, 1), "year") || this._disableNav("prev"), this.d._isInRange(new Date(s[1] + 1, 0, 1), "year") || this._disableNav("next");
                    }
                }
            },
            _disableNav: function(e) {
                r('[data-action="' + e + '"]', this.d.$nav).addClass("-disabled-");
            },
            _activateNav: function(e) {
                r('[data-action="' + e + '"]', this.d.$nav).removeClass("-disabled-");
            },
            _onClickNavButton: function(e) {
                var t = r(e.target).closest("[data-action]").data("action");
                this.d[t]();
            },
            _onClickNavTitle: function(e) {
                return r(e.target).hasClass("-disabled-") ? void 0 : "days" == this.d.view ? (this.d.view = "months") : void(this.d.view = "years");
            },
        }),
        (s = r.fn.datepicker),
        (a = s.Constructor),
        (s.Timepicker = function(e, t) {
            (this.d = e), (this.opts = t), this.init();
        }),
        (s.Timepicker.prototype = {
            init: function() {
                var e = "input";
                this._setTime(this.d.date),
                    this._buildHTML(),
                    navigator.userAgent.match(/trident/gi) && (e = "change"),
                    this.d.$el.on("selectDate", this._onSelectDate.bind(this)),
                    this.$ranges.on(e, this._onChangeRange.bind(this)),
                    this.$ranges.on("mouseup", this._onMouseUpRange.bind(this)),
                    this.$ranges.on("mousemove focus ", this._onMouseEnterRange.bind(this)),
                    this.$ranges.on("mouseout blur", this._onMouseOutRange.bind(this));
            },
            _setTime: function(e) {
                var t = a.getParsedDate(e);
                this._handleDate(e), (this.hours = t.hours < this.minHours ? this.minHours : t.hours), (this.minutes = t.minutes < this.minMinutes ? this.minMinutes : t.minutes);
            },
            _setMinTimeFromDate: function(e) {
                (this.minHours = e.getHours()), (this.minMinutes = e.getMinutes()), this.d.lastSelectedDate && this.d.lastSelectedDate.getHours() > e.getHours() && (this.minMinutes = this.opts.minMinutes);
            },
            _setMaxTimeFromDate: function(e) {
                (this.maxHours = e.getHours()), (this.maxMinutes = e.getMinutes()), this.d.lastSelectedDate && this.d.lastSelectedDate.getHours() < e.getHours() && (this.maxMinutes = this.opts.maxMinutes);
            },
            _setDefaultMinMaxTime: function() {
                var e = this.opts;
                (this.minHours = e.minHours < 0 || 23 < e.minHours ? 0 : e.minHours),
                (this.minMinutes = e.minMinutes < 0 || 59 < e.minMinutes ? 0 : e.minMinutes),
                (this.maxHours = e.maxHours < 0 || 23 < e.maxHours ? 23 : e.maxHours),
                (this.maxMinutes = e.maxMinutes < 0 || 59 < e.maxMinutes ? 59 : e.maxMinutes);
            },
            _validateHoursMinutes: function(e) {
                this.hours < this.minHours ? (this.hours = this.minHours) : this.hours > this.maxHours && (this.hours = this.maxHours),
                    this.minutes < this.minMinutes ? (this.minutes = this.minMinutes) : this.minutes > this.maxMinutes && (this.minutes = this.maxMinutes);
            },
            _buildHTML: function() {
                var e = a.getLeadingZeroNum,
                    t = {
                        hourMin: this.minHours,
                        hourMax: e(this.maxHours),
                        hourStep: this.opts.hoursStep,
                        hourValue: this.hours,
                        hourVisible: e(this.displayHours),
                        minMin: this.minMinutes,
                        minMax: e(this.maxMinutes),
                        minStep: this.opts.minutesStep,
                        minValue: e(this.minutes),
                    },
                    i = a.template(
                        '<div class="datepicker--time"><div class="datepicker--time-current">   <span class="datepicker--time-current-hours">#{hourVisible}</span>   <span class="datepicker--time-current-colon">:</span>   <span class="datepicker--time-current-minutes">#{minValue}</span></div><div class="datepicker--time-sliders">   <div class="datepicker--time-row">      <input type="range" name="hours" value="#{hourValue}" min="#{hourMin}" max="#{hourMax}" step="#{hourStep}"/>   </div>   <div class="datepicker--time-row">      <input type="range" name="minutes" value="#{minValue}" min="#{minMin}" max="#{minMax}" step="#{minStep}"/>   </div></div></div>',
                        t
                    );
                (this.$timepicker = r(i).appendTo(this.d.$datepicker)),
                (this.$ranges = r('[type="range"]', this.$timepicker)),
                (this.$hours = r('[name="hours"]', this.$timepicker)),
                (this.$minutes = r('[name="minutes"]', this.$timepicker)),
                (this.$hoursText = r(".datepicker--time-current-hours", this.$timepicker)),
                (this.$minutesText = r(".datepicker--time-current-minutes", this.$timepicker)),
                this.d.ampm && ((this.$ampm = r('<span class="datepicker--time-current-ampm">').appendTo(r(".datepicker--time-current", this.$timepicker)).html(this.dayPeriod)), this.$timepicker.addClass("-am-pm-"));
            },
            _updateCurrentTime: function() {
                var e = a.getLeadingZeroNum(this.displayHours),
                    t = a.getLeadingZeroNum(this.minutes);
                this.$hoursText.html(e), this.$minutesText.html(t), this.d.ampm && this.$ampm.html(this.dayPeriod);
            },
            _updateRanges: function() {
                this.$hours.attr({ min: this.minHours, max: this.maxHours }).val(this.hours), this.$minutes.attr({ min: this.minMinutes, max: this.maxMinutes }).val(this.minutes);
            },
            _handleDate: function(e) {
                this._setDefaultMinMaxTime(),
                    e && (a.isSame(e, this.d.opts.minDate) ? this._setMinTimeFromDate(this.d.opts.minDate) : a.isSame(e, this.d.opts.maxDate) && this._setMaxTimeFromDate(this.d.opts.maxDate)),
                    this._validateHoursMinutes(e);
            },
            update: function() {
                this._updateRanges(), this._updateCurrentTime();
            },
            _getValidHoursFromDate: function(e, t) {
                var i = e;
                e instanceof Date && (i = a.getParsedDate(e).hours);
                var n = "am";
                if (t || this.d.ampm)
                    switch (!0) {
                        case 0 == i:
                            i = 12;
                            break;
                        case 12 == i:
                            n = "pm";
                            break;
                        case 11 < i:
                            (i -= 12), (n = "pm");
                    }
                return { hours: i, dayPeriod: n };
            },
            set hours(e) {
                this._hours = e;
                var t = this._getValidHoursFromDate(e);
                (this.displayHours = t.hours), (this.dayPeriod = t.dayPeriod);
            },
            get hours() {
                return this._hours;
            },
            _onChangeRange: function(e) {
                var t = r(e.target),
                    i = t.attr("name");
                (this.d.timepickerIsActive = !0), (this[i] = t.val()), this._updateCurrentTime(), this.d._trigger("timeChange", [this.hours, this.minutes]), this._handleDate(this.d.lastSelectedDate), this.update();
            },
            _onSelectDate: function(e, t) {
                this._handleDate(t), this.update();
            },
            _onMouseEnterRange: function(e) {
                var t = r(e.target).attr("name");
                r(".datepicker--time-current-" + t, this.$timepicker).addClass("-focus-");
            },
            _onMouseOutRange: function(e) {
                var t = r(e.target).attr("name");
                this.d.inFocus || r(".datepicker--time-current-" + t, this.$timepicker).removeClass("-focus-");
            },
            _onMouseUpRange: function(e) {
                this.d.timepickerIsActive = !1;
            },
        });
    var _,
        k,
        T,
        C,
        S,
        x,
        E,
        D =
        "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ?

        function(e) {
            return typeof e;
        } :
        function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e;
        };
    (_ = function(d) {
        return (
            (d.fn.tilt = function(t) {
                var i = function() {
                        this.ticking || (requestAnimationFrame(e.bind(this)), (this.ticking = !0));
                    },
                    n = function() {
                        var e = this;
                        void 0 !== this.timeout && clearTimeout(this.timeout),
                            d(this).css({ transition: this.settings.speed + "ms " + this.settings.easing }),
                            this.settings.glare && this.glareElement.css({ transition: "opacity " + this.settings.speed + "ms " + this.settings.easing }),
                            (this.timeout = setTimeout(function() {
                                d(e).css({ transition: "" }), e.settings.glare && e.glareElement.css({ transition: "" });
                            }, this.settings.speed));
                    },
                    s = function(e) {
                        (this.ticking = !1), d(this).css({ "will-change": "transform" }), n.call(this), d(this).trigger("tilt.mouseEnter");
                    },
                    o = function(e) {
                        return void 0 === e && (e = { pageX: d(this).offset().left + d(this).outerWidth() / 2, pageY: d(this).offset().top + d(this).outerHeight() / 2 }), { x: e.pageX, y: e.pageY };
                    },
                    r = function(e) {
                        (this.mousePositions = o(e)), i.call(this);
                    },
                    a = function() {
                        n.call(this), (this.reset = !0), i.call(this), d(this).trigger("tilt.mouseLeave");
                    },
                    l = function() {
                        var e = d(this).outerWidth(),
                            t = d(this).outerHeight(),
                            i = d(this).offset().left,
                            n = d(this).offset().top,
                            s = (this.mousePositions.x - i) / e,
                            o = (this.mousePositions.y - n) / t;
                        return {
                            tiltX: (this.settings.maxTilt / 2 - s * this.settings.maxTilt).toFixed(2),
                            tiltY: (o * this.settings.maxTilt - this.settings.maxTilt / 2).toFixed(2),
                            percentageX: 100 * s,
                            percentageY: 100 * o,
                            angle: Math.atan2(this.mousePositions.x - (i + e / 2), -(this.mousePositions.y - (n + t / 2))) * (180 / Math.PI),
                        };
                    },
                    e = function() {
                        return (
                            (this.transforms = l.call(this)),
                            this.reset ?
                            ((this.reset = !1),
                                d(this).css("transform", "perspective(" + this.settings.perspective + "px) rotateX(0deg) rotateY(0deg)"),
                                void(this.settings.glare && (this.glareElement.css("transform", "rotate(180deg) translate(-50%, -50%)"), this.glareElement.css("opacity", "0")))) :
                            (d(this).css(
                                    "transform",
                                    "perspective(" +
                                    this.settings.perspective +
                                    "px) rotateX(" +
                                    ("x" === this.settings.disableAxis ? 0 : this.transforms.tiltY) +
                                    "deg) rotateY(" +
                                    ("y" === this.settings.disableAxis ? 0 : this.transforms.tiltX) +
                                    "deg) scale3d(" +
                                    this.settings.scale +
                                    "," +
                                    this.settings.scale +
                                    "," +
                                    this.settings.scale +
                                    ")"
                                ),
                                this.settings.glare &&
                                (this.glareElement.css("transform", "rotate(" + this.transforms.angle + "deg) translate(-50%, -50%)"), this.glareElement.css("opacity", "" + (this.transforms.percentageY * this.settings.maxGlare) / 100)),
                                d(this).trigger("change", [this.transforms]),
                                void(this.ticking = !1))
                        );
                    },
                    c = function() {
                        this.glareElement.css({ width: "" + 2 * d(this).outerWidth(), height: "" + 2 * d(this).outerWidth() });
                    };
                return (
                    (d.fn.tilt.destroy = function() {
                        d(this).each(function() {
                            d(this).find(".js-tilt-glare").remove(), d(this).css({ "will-change": "", transform: "" }), d(this).off("mousemove mouseenter mouseleave");
                        });
                    }),
                    (d.fn.tilt.getValues = function() {
                        var e = [];
                        return (
                            d(this).each(function() {
                                (this.mousePositions = o.call(this)), e.push(l.call(this));
                            }),
                            e
                        );
                    }),
                    (d.fn.tilt.reset = function() {
                        d(this).each(function() {
                            var e = this;
                            (this.mousePositions = o.call(this)),
                            (this.settings = d(this).data("settings")),
                            a.call(this),
                                setTimeout(function() {
                                    e.reset = !1;
                                }, this.settings.transition);
                        });
                    }),
                    this.each(function() {
                        var e = this;
                        (this.settings = d.extend({
                                maxTilt: d(this).is("[data-tilt-max]") ? d(this).data("tilt-max") : 20,
                                perspective: d(this).is("[data-tilt-perspective]") ? d(this).data("tilt-perspective") : 300,
                                easing: d(this).is("[data-tilt-easing]") ? d(this).data("tilt-easing") : "cubic-bezier(.03,.98,.52,.99)",
                                scale: d(this).is("[data-tilt-scale]") ? d(this).data("tilt-scale") : "1",
                                speed: d(this).is("[data-tilt-speed]") ? d(this).data("tilt-speed") : "400",
                                transition: !d(this).is("[data-tilt-transition]") || d(this).data("tilt-transition"),
                                disableAxis: d(this).is("[data-tilt-disable-axis]") ? d(this).data("tilt-disable-axis") : null,
                                axis: d(this).is("[data-tilt-axis]") ? d(this).data("tilt-axis") : null,
                                reset: !d(this).is("[data-tilt-reset]") || d(this).data("tilt-reset"),
                                glare: !!d(this).is("[data-tilt-glare]") && d(this).data("tilt-glare"),
                                maxGlare: d(this).is("[data-tilt-maxglare]") ? d(this).data("tilt-maxglare") : 1,
                            },
                            t
                        )),
                        null !== this.settings.axis &&
                            (console.warn("Tilt.js: the axis setting has been renamed to disableAxis. See https://github.com/gijsroge/tilt.js/pull/26 for more information"), (this.settings.disableAxis = this.settings.axis)),
                            (this.init = function() {
                                d(e).data("settings", e.settings),
                                    e.settings.glare &&
                                    function() {
                                        var e = this.settings.glarePrerender;
                                        e || d(this).append('<div class="js-tilt-glare"><div class="js-tilt-glare-inner"></div></div>'),
                                            (this.glareElementWrapper = d(this).find(".js-tilt-glare")),
                                            (this.glareElement = d(this).find(".js-tilt-glare-inner")),
                                            e ||
                                            (this.glareElementWrapper.css({ position: "absolute", top: "0", left: "0", width: "100%", height: "100%" }).css({ overflow: "hidden", "pointer-events": "none" }),
                                                this.glareElement.css({
                                                    position: "absolute",
                                                    top: "50%",
                                                    left: "50%",
                                                    "background-image": "linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%)",
                                                    width: "" + 2 * d(this).outerWidth(),
                                                    height: "" + 2 * d(this).outerWidth(),
                                                    transform: "rotate(180deg) translate(-50%, -50%)",
                                                    "transform-origin": "0% 0%",
                                                    opacity: "0",
                                                }));
                                    }.call(e),
                                    function() {
                                        d(this).on("mousemove", r), d(this).on("mouseenter", s), this.settings.reset && d(this).on("mouseleave", a), this.settings.glare && d(window).on("resize", c.bind(this));
                                    }.call(e);
                            }),
                            this.init();
                    })
                );
            }),
            d("[data-tilt]").tilt(), !0
        );
    }),
    "function" == typeof define && define.amd ?
        define(["jquery"], _) :
        "object" === ("undefined" == typeof module ? "undefined" : D(module)) && module.exports ?
        (module.exports = function(e, t) {
            return void 0 === t && (t = "undefined" != typeof window ? require("jquery") : require("jquery")(e)), _(t), t;
        }) :
        _(jQuery),
        (k = function(o) {
            var r = function(e, t) {
                (this.$element = o(e)), (this.options = o.extend({}, r.DEFAULTS, this.dataOptions(), t)), this.init();
            };
            (r.DEFAULTS = {
                from: 0,
                to: 0,
                speed: 1e3,
                refreshInterval: 100,
                decimals: 0,
                formatter: function(e, t) {
                    return e.toFixed(t.decimals);
                },
                onUpdate: null,
                onComplete: null,
            }),
            (r.prototype.init = function() {
                (this.value = this.options.from), (this.loops = Math.ceil(this.options.speed / this.options.refreshInterval)), (this.loopCount = 0), (this.increment = (this.options.to - this.options.from) / this.loops);
            }),
            (r.prototype.dataOptions = function() {
                var e = { from: this.$element.data("from"), to: this.$element.data("to"), speed: this.$element.data("speed"), refreshInterval: this.$element.data("refresh-interval"), decimals: this.$element.data("decimals") },
                    t = Object.keys(e);
                for (var i in t) {
                    var n = t[i];
                    void 0 === e[n] && delete e[n];
                }
                return e;
            }),
            (r.prototype.update = function() {
                (this.value += this.increment),
                this.loopCount++,
                    this.render(),
                    "function" == typeof this.options.onUpdate && this.options.onUpdate.call(this.$element, this.value),
                    this.loopCount >= this.loops && (clearInterval(this.interval), (this.value = this.options.to), "function" == typeof this.options.onComplete && this.options.onComplete.call(this.$element, this.value));
            }),
            (r.prototype.render = function() {
                var e = this.options.formatter.call(this.$element, this.value, this.options);
                this.$element.text(e);
            }),
            (r.prototype.restart = function() {
                this.stop(), this.init(), this.start();
            }),
            (r.prototype.start = function() {
                this.stop(), this.render(), (this.interval = setInterval(this.update.bind(this), this.options.refreshInterval));
            }),
            (r.prototype.stop = function() {
                this.interval && clearInterval(this.interval);
            }),
            (r.prototype.toggle = function() {
                this.interval ? this.stop() : this.start();
            }),
            (o.fn.countTo = function(s) {
                return this.each(function() {
                    var e = o(this),
                        t = e.data("countTo"),
                        i = "object" == typeof s ? s : {},
                        n = "string" == typeof s ? s : "start";
                    (!t || "object" == typeof s) && (t && t.stop(), e.data("countTo", (t = new r(this, i)))), t[n].call(t);
                });
            });
        }),
        "function" == typeof define && define.amd ? define(["jquery"], k) : "object" == typeof exports ? k(require("jquery")) : k(jQuery),
        (function o(r, a, l) {
            function c(i, e) {
                if (!a[i]) {
                    if (!r[i]) {
                        var t = "function" == typeof require && require;
                        if (!e && t) return t(i, !0);
                        if (d) return d(i, !0);
                        var n = new Error("Cannot find module '" + i + "'");
                        throw ((n.code = "MODULE_NOT_FOUND"), n);
                    }
                    var s = (a[i] = { exports: {} });
                    r[i][0].call(
                        s.exports,
                        function(e) {
                            var t = r[i][1][e];
                            return c(t || e);
                        },
                        s,
                        s.exports,
                        o,
                        r,
                        a,
                        l
                    );
                }
                return a[i].exports;
            }
            for (var d = "function" == typeof require && require, e = 0; e < l.length; e++) c(l[e]);
            return c;
        })({
            1: [
                function(e, t, i) {
                    "use strict";
                    var s = e("../main"),
                        o = e("../plugin/instances");

                    function n(n) {
                        n.fn.perfectScrollbar = function(i) {
                            return this.each(function() {
                                if ("object" == typeof i || void 0 === i) {
                                    var e = i;
                                    o.get(this) || s.initialize(this, e);
                                } else {
                                    var t = i;
                                    "update" === t ? s.update(this) : "destroy" === t && s.destroy(this);
                                }
                                return n(this);
                            });
                        };
                    }
                    if ("function" == typeof define && define.amd) define(["jquery"], n);
                    else {
                        var r = window.jQuery ? window.jQuery : window.$;
                        void 0 !== r && n(r);
                    }
                    t.exports = n;
                },
                { "../main": 7, "../plugin/instances": 18 },
            ],
            2: [
                function(e, t, i) {
                    "use strict";
                    (i.add = function(e, t) {
                        var i, n, s;
                        e.classList ? e.classList.add(t) : ((n = t), (s = (i = e).className.split(" ")).indexOf(n) < 0 && s.push(n), (i.className = s.join(" ")));
                    }),
                    (i.remove = function(e, t) {
                        var i, n, s, o;
                        e.classList ? e.classList.remove(t) : ((n = t), (s = (i = e).className.split(" ")), 0 <= (o = s.indexOf(n)) && s.splice(o, 1), (i.className = s.join(" ")));
                    }),
                    (i.list = function(e) {
                        return e.classList ? Array.prototype.slice.apply(e.classList) : e.className.split(" ");
                    });
                },
                {},
            ],
            3: [
                function(e, t, i) {
                    "use strict";
                    var n = {};
                    (n.e = function(e, t) {
                        var i = document.createElement(e);
                        return (i.className = t), i;
                    }),
                    (n.appendTo = function(e, t) {
                        return t.appendChild(e), e;
                    }),
                    (n.css = function(e, t, i) {
                        return "object" == typeof t ?
                            (function(e, t) {
                                for (var i in t) {
                                    var n = t[i];
                                    "number" == typeof n && (n = n.toString() + "px"), (e.style[i] = n);
                                }
                                return e;
                            })(e, t) :
                            void 0 === i ?
                            ((r = e), (a = t), window.getComputedStyle(r)[a]) :
                            ((n = e), (s = t), "number" == typeof(o = i) && (o = o.toString() + "px"), (n.style[s] = o), n);
                        var n, s, o, r, a;
                    }),
                    (n.matches = function(e, t) {
                        return void 0 !== e.matches ?
                            e.matches(t) :
                            void 0 !== e.matchesSelector ?
                            e.matchesSelector(t) :
                            void 0 !== e.webkitMatchesSelector ?
                            e.webkitMatchesSelector(t) :
                            void 0 !== e.mozMatchesSelector ?
                            e.mozMatchesSelector(t) :
                            void 0 !== e.msMatchesSelector ?
                            e.msMatchesSelector(t) :
                            void 0;
                    }),
                    (n.remove = function(e) {
                        void 0 !== e.remove ? e.remove() : e.parentNode && e.parentNode.removeChild(e);
                    }),
                    (n.queryChildren = function(e, t) {
                        return Array.prototype.filter.call(e.childNodes, function(e) {
                            return n.matches(e, t);
                        });
                    }),
                    (t.exports = n);
                },
                {},
            ],
            4: [
                function(e, t, i) {
                    "use strict";
                    var n = function(e) {
                        (this.element = e), (this.events = {});
                    };
                    (n.prototype.bind = function(e, t) {
                        void 0 === this.events[e] && (this.events[e] = []), this.events[e].push(t), this.element.addEventListener(e, t, !1);
                    }),
                    (n.prototype.unbind = function(t, i) {
                        var n = void 0 !== i;
                        this.events[t] = this.events[t].filter(function(e) {
                            return !(!n || e === i) || (this.element.removeEventListener(t, e, !1), !1);
                        }, this);
                    }),
                    (n.prototype.unbindAll = function() {
                        for (var e in this.events) this.unbind(e);
                    });
                    var s = function() {
                        this.eventElements = [];
                    };
                    (s.prototype.eventElement = function(t) {
                        var e = this.eventElements.filter(function(e) {
                            return e.element === t;
                        })[0];
                        return void 0 === e && ((e = new n(t)), this.eventElements.push(e)), e;
                    }),
                    (s.prototype.bind = function(e, t, i) {
                        this.eventElement(e).bind(t, i);
                    }),
                    (s.prototype.unbind = function(e, t, i) {
                        this.eventElement(e).unbind(t, i);
                    }),
                    (s.prototype.unbindAll = function() {
                        for (var e = 0; e < this.eventElements.length; e++) this.eventElements[e].unbindAll();
                    }),
                    (s.prototype.once = function(e, t, i) {
                        var n = this.eventElement(e),
                            s = function(e) {
                                n.unbind(t, s), i(e);
                            };
                        n.bind(t, s);
                    }),
                    (t.exports = s);
                },
                {},
            ],
            5: [
                function(e, t, i) {
                    "use strict";
                    t.exports = (function() {
                        function e() {
                            return Math.floor(65536 * (1 + Math.random()))
                                .toString(16)
                                .substring(1);
                        }
                        return function() {
                            return e() + e() + "-" + e() + "-" + e() + "-" + e() + "-" + e() + e() + e();
                        };
                    })();
                },
                {},
            ],
            6: [
                function(e, t, i) {
                    "use strict";
                    var s = e("./class"),
                        n = e("./dom");
                    (i.toInt = function(e) {
                        return parseInt(e, 10) || 0;
                    }),
                    (i.clone = function(e) {
                        if (null === e) return null;
                        if ("object" != typeof e) return e;
                        var t = {};
                        for (var i in e) t[i] = this.clone(e[i]);
                        return t;
                    }),
                    (i.extend = function(e, t) {
                        var i = this.clone(e);
                        for (var n in t) i[n] = this.clone(t[n]);
                        return i;
                    }),
                    (i.isEditable = function(e) {
                        return n.matches(e, "input,[contenteditable]") || n.matches(e, "select,[contenteditable]") || n.matches(e, "textarea,[contenteditable]") || n.matches(e, "button,[contenteditable]");
                    }),
                    (i.removePsClasses = function(e) {
                        for (var t = s.list(e), i = 0; i < t.length; i++) {
                            var n = t[i];
                            0 === n.indexOf("ps-") && s.remove(e, n);
                        }
                    }),
                    (i.outerWidth = function(e) {
                        return this.toInt(n.css(e, "width")) + this.toInt(n.css(e, "paddingLeft")) + this.toInt(n.css(e, "paddingRight")) + this.toInt(n.css(e, "borderLeftWidth")) + this.toInt(n.css(e, "borderRightWidth"));
                    }),
                    (i.startScrolling = function(e, t) {
                        s.add(e, "ps-in-scrolling"), void 0 !== t ? s.add(e, "ps-" + t) : (s.add(e, "ps-x"), s.add(e, "ps-y"));
                    }),
                    (i.stopScrolling = function(e, t) {
                        s.remove(e, "ps-in-scrolling"), void 0 !== t ? s.remove(e, "ps-" + t) : (s.remove(e, "ps-x"), s.remove(e, "ps-y"));
                    }),
                    (i.env = {
                        isWebKit: "WebkitAppearance" in document.documentElement.style,
                        supportsTouch: "ontouchstart" in window || (window.DocumentTouch && document instanceof window.DocumentTouch),
                        supportsIePointer: null !== window.navigator.msMaxTouchPoints,
                    });
                },
                { "./class": 2, "./dom": 3 },
            ],
            7: [
                function(e, t, i) {
                    "use strict";
                    var n = e("./plugin/destroy"),
                        s = e("./plugin/initialize"),
                        o = e("./plugin/update");
                    t.exports = { initialize: s, update: o, destroy: n };
                },
                { "./plugin/destroy": 9, "./plugin/initialize": 17, "./plugin/update": 21 },
            ],
            8: [
                function(e, t, i) {
                    "use strict";
                    t.exports = {
                        maxScrollbarLength: null,
                        minScrollbarLength: null,
                        scrollXMarginOffset: 0,
                        scrollYMarginOffset: 0,
                        stopPropagationOnClick: !0,
                        suppressScrollX: !1,
                        suppressScrollY: !1,
                        swipePropagation: !0,
                        useBothWheelAxes: !1,
                        useKeyboard: !0,
                        useSelectionScroll: !1,
                        wheelPropagation: !1,
                        wheelSpeed: 1,
                        theme: "default",
                    };
                },
                {},
            ],
            9: [
                function(e, t, i) {
                    "use strict";
                    var n = e("../lib/dom"),
                        s = e("../lib/helper"),
                        o = e("./instances");
                    t.exports = function(e) {
                        var t = o.get(e);
                        t && (t.event.unbindAll(), n.remove(t.scrollbarX), n.remove(t.scrollbarY), n.remove(t.scrollbarXRail), n.remove(t.scrollbarYRail), s.removePsClasses(e), o.remove(e));
                    };
                },
                { "../lib/dom": 3, "../lib/helper": 6, "./instances": 18 },
            ],
            10: [
                function(e, t, i) {
                    "use strict";
                    var r = e("../../lib/helper"),
                        n = e("../instances"),
                        a = e("../update-geometry"),
                        l = e("../update-scroll");
                    t.exports = function(e) {
                        !(function(n, s) {
                            function o(e) {
                                return e.getBoundingClientRect();
                            }
                            var e = window.Event.prototype.stopPropagation.bind;
                            s.settings.stopPropagationOnClick && s.event.bind(s.scrollbarY, "click", e),
                                s.event.bind(s.scrollbarYRail, "click", function(e) {
                                    var t = r.toInt(s.scrollbarYHeight / 2),
                                        i = (s.railYRatio * (e.pageY - window.pageYOffset - o(s.scrollbarYRail).top - t)) / (s.railYRatio * (s.railYHeight - s.scrollbarYHeight));
                                    i < 0 ? (i = 0) : 1 < i && (i = 1), l(n, "top", (s.contentHeight - s.containerHeight) * i), a(n), e.stopPropagation();
                                }),
                                s.settings.stopPropagationOnClick && s.event.bind(s.scrollbarX, "click", e),
                                s.event.bind(s.scrollbarXRail, "click", function(e) {
                                    var t = r.toInt(s.scrollbarXWidth / 2),
                                        i = (s.railXRatio * (e.pageX - window.pageXOffset - o(s.scrollbarXRail).left - t)) / (s.railXRatio * (s.railXWidth - s.scrollbarXWidth));
                                    i < 0 ? (i = 0) : 1 < i && (i = 1), l(n, "left", (s.contentWidth - s.containerWidth) * i - s.negativeScrollAdjustment), a(n), e.stopPropagation();
                                });
                        })(e, n.get(e));
                    };
                },
                { "../../lib/helper": 6, "../instances": 18, "../update-geometry": 19, "../update-scroll": 20 },
            ],
            11: [
                function(e, t, i) {
                    "use strict";
                    var a = e("../../lib/dom"),
                        l = e("../../lib/helper"),
                        n = e("../instances"),
                        c = e("../update-geometry"),
                        d = e("../update-scroll");

                    function s(s, o) {
                        var r = null,
                            t = null;
                        var i = function(e) {
                                !(function(e) {
                                    var t = r + e * o.railXRatio,
                                        i = Math.max(0, o.scrollbarXRail.getBoundingClientRect().left) + o.railXRatio * (o.railXWidth - o.scrollbarXWidth);
                                    o.scrollbarXLeft = t < 0 ? 0 : i < t ? i : t;
                                    var n = l.toInt((o.scrollbarXLeft * (o.contentWidth - o.containerWidth)) / (o.containerWidth - o.railXRatio * o.scrollbarXWidth)) - o.negativeScrollAdjustment;
                                    d(s, "left", n);
                                })(e.pageX - t),
                                c(s),
                                    e.stopPropagation(),
                                    e.preventDefault();
                            },
                            n = function() {
                                l.stopScrolling(s, "x"), o.event.unbind(o.ownerDocument, "mousemove", i);
                            };
                        o.event.bind(o.scrollbarX, "mousedown", function(e) {
                            (t = e.pageX),
                            (r = l.toInt(a.css(o.scrollbarX, "left")) * o.railXRatio),
                            l.startScrolling(s, "x"),
                                o.event.bind(o.ownerDocument, "mousemove", i),
                                o.event.once(o.ownerDocument, "mouseup", n),
                                e.stopPropagation(),
                                e.preventDefault();
                        });
                    }

                    function o(s, o) {
                        var r = null,
                            t = null;
                        var i = function(e) {
                                !(function(e) {
                                    var t = r + e * o.railYRatio,
                                        i = Math.max(0, o.scrollbarYRail.getBoundingClientRect().top) + o.railYRatio * (o.railYHeight - o.scrollbarYHeight);
                                    o.scrollbarYTop = t < 0 ? 0 : i < t ? i : t;
                                    var n = l.toInt((o.scrollbarYTop * (o.contentHeight - o.containerHeight)) / (o.containerHeight - o.railYRatio * o.scrollbarYHeight));
                                    d(s, "top", n);
                                })(e.pageY - t),
                                c(s),
                                    e.stopPropagation(),
                                    e.preventDefault();
                            },
                            n = function() {
                                l.stopScrolling(s, "y"), o.event.unbind(o.ownerDocument, "mousemove", i);
                            };
                        o.event.bind(o.scrollbarY, "mousedown", function(e) {
                            (t = e.pageY),
                            (r = l.toInt(a.css(o.scrollbarY, "top")) * o.railYRatio),
                            l.startScrolling(s, "y"),
                                o.event.bind(o.ownerDocument, "mousemove", i),
                                o.event.once(o.ownerDocument, "mouseup", n),
                                e.stopPropagation(),
                                e.preventDefault();
                        });
                    }
                    t.exports = function(e) {
                        var t = n.get(e);
                        s(e, t), o(e, t);
                    };
                },
                { "../../lib/dom": 3, "../../lib/helper": 6, "../instances": 18, "../update-geometry": 19, "../update-scroll": 20 },
            ],
            12: [
                function(e, t, i) {
                    "use strict";
                    var l = e("../../lib/helper"),
                        c = e("../../lib/dom"),
                        n = e("../instances"),
                        d = e("../update-geometry"),
                        u = e("../update-scroll");

                    function s(o, r) {
                        var a = !1;
                        r.event.bind(o, "mouseenter", function() {
                                a = !0;
                            }),
                            r.event.bind(o, "mouseleave", function() {
                                a = !1;
                            });
                        r.event.bind(r.ownerDocument, "keydown", function(e) {
                            if (!e.isDefaultPrevented || !e.isDefaultPrevented()) {
                                var t = c.matches(r.scrollbarX, ":focus") || c.matches(r.scrollbarY, ":focus");
                                if (a || t) {
                                    var i = document.activeElement ? document.activeElement : r.ownerDocument.activeElement;
                                    if (i) {
                                        for (; i.shadowRoot;) i = i.shadowRoot.activeElement;
                                        if (l.isEditable(i)) return;
                                    }
                                    var n = 0,
                                        s = 0;
                                    switch (e.which) {
                                        case 37:
                                            n = -30;
                                            break;
                                        case 38:
                                            s = 30;
                                            break;
                                        case 39:
                                            n = 30;
                                            break;
                                        case 40:
                                            s = -30;
                                            break;
                                        case 33:
                                            s = 90;
                                            break;
                                        case 32:
                                            s = e.shiftKey ? 90 : -90;
                                            break;
                                        case 34:
                                            s = -90;
                                            break;
                                        case 35:
                                            s = e.ctrlKey ? -r.contentHeight : -r.containerHeight;
                                            break;
                                        case 36:
                                            s = e.ctrlKey ? o.scrollTop : r.containerHeight;
                                            break;
                                        default:
                                            return;
                                    }
                                    u(o, "top", o.scrollTop - s),
                                        u(o, "left", o.scrollLeft + n),
                                        d(o),
                                        (function(e, t) {
                                            var i = o.scrollTop;
                                            if (0 === e) {
                                                if (!r.scrollbarYActive) return !1;
                                                if ((0 === i && 0 < t) || (i >= r.contentHeight - r.containerHeight && t < 0)) return !r.settings.wheelPropagation;
                                            }
                                            var n = o.scrollLeft;
                                            if (0 === t) {
                                                if (!r.scrollbarXActive) return !1;
                                                if ((0 === n && e < 0) || (n >= r.contentWidth - r.containerWidth && 0 < e)) return !r.settings.wheelPropagation;
                                            }
                                            return !0;
                                        })(n, s) && e.preventDefault();
                                }
                            }
                        });
                    }
                    t.exports = function(e) {
                        s(e, n.get(e));
                    };
                },
                { "../../lib/dom": 3, "../../lib/helper": 6, "../instances": 18, "../update-geometry": 19, "../update-scroll": 20 },
            ],
            13: [
                function(e, t, i) {
                    "use strict";
                    var n = e("../instances"),
                        d = e("../update-geometry"),
                        u = e("../update-scroll");

                    function s(a, l) {
                        var c = !1;

                        function e(e) {
                            var t,
                                i,
                                n,
                                s =
                                ((i = (t = e).deltaX),
                                    (n = -1 * t.deltaY),
                                    (void 0 !== i && void 0 !== n) || ((i = (-1 * t.wheelDeltaX) / 6), (n = t.wheelDeltaY / 6)),
                                    t.deltaMode && 1 === t.deltaMode && ((i *= 10), (n *= 10)),
                                    i != i && n != n && ((i = 0), (n = t.wheelDelta)), [i, n]),
                                o = s[0],
                                r = s[1];
                            (function(e, t) {
                                var i = a.querySelector("textarea:hover");
                                if (i) {
                                    var n = i.scrollHeight - i.clientHeight;
                                    if (0 < n && !((0 === i.scrollTop && 0 < t) || (i.scrollTop === n && t < 0))) return !0;
                                    var s = i.scrollLeft - i.clientWidth;
                                    if (0 < s && !((0 === i.scrollLeft && e < 0) || (i.scrollLeft === s && 0 < e))) return !0;
                                }
                                return !1;
                            })(o, r) ||
                            ((c = !1),
                                l.settings.useBothWheelAxes ?
                                l.scrollbarYActive && !l.scrollbarXActive ?
                                (u(a, "top", r ? a.scrollTop - r * l.settings.wheelSpeed : a.scrollTop + o * l.settings.wheelSpeed), (c = !0)) :
                                l.scrollbarXActive && !l.scrollbarYActive && (u(a, "left", o ? a.scrollLeft + o * l.settings.wheelSpeed : a.scrollLeft - r * l.settings.wheelSpeed), (c = !0)) :
                                (u(a, "top", a.scrollTop - r * l.settings.wheelSpeed), u(a, "left", a.scrollLeft + o * l.settings.wheelSpeed)),
                                d(a),
                                (c =
                                    c ||
                                    (function(e, t) {
                                        var i = a.scrollTop;
                                        if (0 === e) {
                                            if (!l.scrollbarYActive) return !1;
                                            if ((0 === i && 0 < t) || (i >= l.contentHeight - l.containerHeight && t < 0)) return !l.settings.wheelPropagation;
                                        }
                                        var n = a.scrollLeft;
                                        if (0 === t) {
                                            if (!l.scrollbarXActive) return !1;
                                            if ((0 === n && e < 0) || (n >= l.contentWidth - l.containerWidth && 0 < e)) return !l.settings.wheelPropagation;
                                        }
                                        return !0;
                                    })(o, r)) && (e.stopPropagation(), e.preventDefault()));
                        }
                        void 0 !== window.onwheel ? l.event.bind(a, "wheel", e) : void 0 !== window.onmousewheel && l.event.bind(a, "mousewheel", e);
                    }
                    t.exports = function(e) {
                        s(e, n.get(e));
                    };
                },
                { "../instances": 18, "../update-geometry": 19, "../update-scroll": 20 },
            ],
            14: [
                function(e, t, i) {
                    "use strict";
                    var n = e("../instances"),
                        s = e("../update-geometry");
                    t.exports = function(e) {
                        var t,
                            i = n.get(e);
                        (t = e),
                        i.event.bind(t, "scroll", function() {
                            s(t);
                        });
                    };
                },
                { "../instances": 18, "../update-geometry": 19 },
            ],
            15: [
                function(e, t, i) {
                    "use strict";
                    var h = e("../../lib/helper"),
                        p = e("../instances"),
                        f = e("../update-geometry"),
                        m = e("../update-scroll");

                    function n(a, e) {
                        var l = null,
                            c = { top: 0, left: 0 };

                        function d() {
                            l && (clearInterval(l), (l = null)), h.stopScrolling(a);
                        }
                        var u = !1;
                        e.event.bind(e.ownerDocument, "selectionchange", function() {
                                var e;
                                a.contains(0 === (e = window.getSelection ? window.getSelection() : document.getSelection ? document.getSelection() : "").toString().length ? null : e.getRangeAt(0).commonAncestorContainer) ?
                                    (u = !0) :
                                    ((u = !1), d());
                            }),
                            e.event.bind(window, "mouseup", function() {
                                u && ((u = !1), d());
                            }),
                            e.event.bind(window, "mousemove", function(e) {
                                if (u) {
                                    var t = e.pageX,
                                        i = e.pageY,
                                        n = a.offsetLeft,
                                        s = a.offsetLeft + a.offsetWidth,
                                        o = a.offsetTop,
                                        r = a.offsetTop + a.offsetHeight;
                                    t < n + 3 ? ((c.left = -5), h.startScrolling(a, "x")) : s - 3 < t ? ((c.left = 5), h.startScrolling(a, "x")) : (c.left = 0),
                                        i < o + 3 ? ((c.top = o + 3 - i < 5 ? -5 : -20), h.startScrolling(a, "y")) : r - 3 < i ? ((c.top = i - r + 3 < 5 ? 5 : 20), h.startScrolling(a, "y")) : (c.top = 0),
                                        0 === c.top && 0 === c.left ?
                                        d() :
                                        l ||
                                        (l = setInterval(function() {
                                            p.get(a) ? (m(a, "top", a.scrollTop + c.top), m(a, "left", a.scrollLeft + c.left), f(a)) : clearInterval(l);
                                        }, 50));
                                }
                            });
                    }
                    t.exports = function(e) {
                        n(e, p.get(e));
                    };
                },
                { "../../lib/helper": 6, "../instances": 18, "../update-geometry": 19, "../update-scroll": 20 },
            ],
            16: [
                function(e, t, i) {
                    "use strict";
                    var y = e("../instances"),
                        b = e("../update-geometry"),
                        w = e("../update-scroll");

                    function n(a, l, e, t) {
                        function c(e, t) {
                            w(a, "top", a.scrollTop - t), w(a, "left", a.scrollLeft - e), b(a);
                        }
                        var d = {},
                            u = 0,
                            h = {},
                            i = null,
                            p = !1,
                            f = !1;

                        function n() {
                            p = !0;
                        }

                        function s() {
                            p = !1;
                        }

                        function m(e) {
                            return e.targetTouches ? e.targetTouches[0] : e;
                        }

                        function g(e) {
                            return !(!e.targetTouches || 1 !== e.targetTouches.length) || !(!e.pointerType || "mouse" === e.pointerType || e.pointerType === e.MSPOINTER_TYPE_MOUSE);
                        }

                        function o(e) {
                            if (g(e)) {
                                f = !0;
                                var t = m(e);
                                (d.pageX = t.pageX), (d.pageY = t.pageY), (u = new Date().getTime()), null !== i && clearInterval(i), e.stopPropagation();
                            }
                        }

                        function r(e) {
                            if (!p && f && g(e)) {
                                var t = m(e),
                                    i = { pageX: t.pageX, pageY: t.pageY },
                                    n = i.pageX - d.pageX,
                                    s = i.pageY - d.pageY;
                                c(n, s), (d = i);
                                var o = new Date().getTime(),
                                    r = o - u;
                                0 < r && ((h.x = n / r), (h.y = s / r), (u = o)),
                                    (function(e, t) {
                                        var i = a.scrollTop,
                                            n = a.scrollLeft,
                                            s = Math.abs(e),
                                            o = Math.abs(t);
                                        if (s < o) {
                                            if ((t < 0 && i === l.contentHeight - l.containerHeight) || (0 < t && 0 === i)) return !l.settings.swipePropagation;
                                        } else if (o < s && ((e < 0 && n === l.contentWidth - l.containerWidth) || (0 < e && 0 === n))) return !l.settings.swipePropagation;
                                        return !0;
                                    })(n, s) && (e.stopPropagation(), e.preventDefault());
                            }
                        }

                        function v() {
                            !p &&
                                f &&
                                ((f = !1),
                                    clearInterval(i),
                                    (i = setInterval(function() {
                                        y.get(a) ? (Math.abs(h.x) < 0.01 && Math.abs(h.y) < 0.01 ? clearInterval(i) : (c(30 * h.x, 30 * h.y), (h.x *= 0.8), (h.y *= 0.8))) : clearInterval(i);
                                    }, 10)));
                        }
                        e && (l.event.bind(window, "touchstart", n), l.event.bind(window, "touchend", s), l.event.bind(a, "touchstart", o), l.event.bind(a, "touchmove", r), l.event.bind(a, "touchend", v)),
                            t &&
                            (window.PointerEvent ?
                                (l.event.bind(window, "pointerdown", n), l.event.bind(window, "pointerup", s), l.event.bind(a, "pointerdown", o), l.event.bind(a, "pointermove", r), l.event.bind(a, "pointerup", v)) :
                                window.MSPointerEvent &&
                                (l.event.bind(window, "MSPointerDown", n), l.event.bind(window, "MSPointerUp", s), l.event.bind(a, "MSPointerDown", o), l.event.bind(a, "MSPointerMove", r), l.event.bind(a, "MSPointerUp", v)));
                    }
                    t.exports = function(e, t, i) {
                        n(e, y.get(e), t, i);
                    };
                },
                { "../instances": 18, "../update-geometry": 19, "../update-scroll": 20 },
            ],
            17: [
                function(e, t, i) {
                    "use strict";
                    var n = e("../lib/class"),
                        s = e("../lib/helper"),
                        o = e("./instances"),
                        r = e("./update-geometry"),
                        a = e("./handler/click-rail"),
                        l = e("./handler/drag-scrollbar"),
                        c = e("./handler/keyboard"),
                        d = e("./handler/mouse-wheel"),
                        u = e("./handler/native-scroll"),
                        h = e("./handler/selection"),
                        p = e("./handler/touch");
                    t.exports = function(e, t) {
                        (t = "object" == typeof t ? t : {}), n.add(e, "ps-container");
                        var i = o.add(e);
                        (i.settings = s.extend(i.settings, t)),
                        n.add(e, "ps-theme-" + i.settings.theme),
                            a(e),
                            l(e),
                            d(e),
                            u(e),
                            i.settings.useSelectionScroll && h(e),
                            (s.env.supportsTouch || s.env.supportsIePointer) && p(e, s.env.supportsTouch, s.env.supportsIePointer),
                            i.settings.useKeyboard && c(e),
                            r(e);
                    };
                },
                {
                    "../lib/class": 2,
                    "../lib/helper": 6,
                    "./handler/click-rail": 10,
                    "./handler/drag-scrollbar": 11,
                    "./handler/keyboard": 12,
                    "./handler/mouse-wheel": 13,
                    "./handler/native-scroll": 14,
                    "./handler/selection": 15,
                    "./handler/touch": 16,
                    "./instances": 18,
                    "./update-geometry": 19,
                },
            ],
            18: [
                function(e, t, i) {
                    "use strict";
                    var r = e("../lib/class"),
                        a = e("../lib/dom"),
                        l = e("./default-setting"),
                        c = e("../lib/event-manager"),
                        s = e("../lib/guid"),
                        d = e("../lib/helper"),
                        o = {};

                    function u(e) {
                        var t,
                            i,
                            n = this;

                        function s() {
                            r.add(e, "ps-focus");
                        }

                        function o() {
                            r.remove(e, "ps-focus");
                        }
                        (n.settings = d.clone(l)),
                        (n.containerWidth = null),
                        (n.containerHeight = null),
                        (n.contentWidth = null),
                        (n.contentHeight = null),
                        (n.isRtl = "rtl" === a.css(e, "direction")),
                        (n.isNegativeScroll = ((i = e.scrollLeft), (e.scrollLeft = -1), (t = e.scrollLeft < 0), (e.scrollLeft = i), t)),
                        (n.negativeScrollAdjustment = n.isNegativeScroll ? e.scrollWidth - e.clientWidth : 0),
                        (n.event = new c()),
                        (n.ownerDocument = e.ownerDocument || document),
                        (n.scrollbarXRail = a.appendTo(a.e("div", "ps-scrollbar-x-rail"), e)),
                        (n.scrollbarX = a.appendTo(a.e("div", "ps-scrollbar-x"), n.scrollbarXRail)),
                        n.scrollbarX.setAttribute("tabindex", 0),
                            n.event.bind(n.scrollbarX, "focus", s),
                            n.event.bind(n.scrollbarX, "blur", o),
                            (n.scrollbarXActive = null),
                            (n.scrollbarXWidth = null),
                            (n.scrollbarXLeft = null),
                            (n.scrollbarXBottom = d.toInt(a.css(n.scrollbarXRail, "bottom"))),
                            (n.isScrollbarXUsingBottom = n.scrollbarXBottom == n.scrollbarXBottom),
                            (n.scrollbarXTop = n.isScrollbarXUsingBottom ? null : d.toInt(a.css(n.scrollbarXRail, "top"))),
                            (n.railBorderXWidth = d.toInt(a.css(n.scrollbarXRail, "borderLeftWidth")) + d.toInt(a.css(n.scrollbarXRail, "borderRightWidth"))),
                            a.css(n.scrollbarXRail, "display", "block"),
                            (n.railXMarginWidth = d.toInt(a.css(n.scrollbarXRail, "marginLeft")) + d.toInt(a.css(n.scrollbarXRail, "marginRight"))),
                            a.css(n.scrollbarXRail, "display", ""),
                            (n.railXWidth = null),
                            (n.railXRatio = null),
                            (n.scrollbarYRail = a.appendTo(a.e("div", "ps-scrollbar-y-rail"), e)),
                            (n.scrollbarY = a.appendTo(a.e("div", "ps-scrollbar-y"), n.scrollbarYRail)),
                            n.scrollbarY.setAttribute("tabindex", 0),
                            n.event.bind(n.scrollbarY, "focus", s),
                            n.event.bind(n.scrollbarY, "blur", o),
                            (n.scrollbarYActive = null),
                            (n.scrollbarYHeight = null),
                            (n.scrollbarYTop = null),
                            (n.scrollbarYRight = d.toInt(a.css(n.scrollbarYRail, "right"))),
                            (n.isScrollbarYUsingRight = n.scrollbarYRight == n.scrollbarYRight),
                            (n.scrollbarYLeft = n.isScrollbarYUsingRight ? null : d.toInt(a.css(n.scrollbarYRail, "left"))),
                            (n.scrollbarYOuterWidth = n.isRtl ? d.outerWidth(n.scrollbarY) : null),
                            (n.railBorderYWidth = d.toInt(a.css(n.scrollbarYRail, "borderTopWidth")) + d.toInt(a.css(n.scrollbarYRail, "borderBottomWidth"))),
                            a.css(n.scrollbarYRail, "display", "block"),
                            (n.railYMarginHeight = d.toInt(a.css(n.scrollbarYRail, "marginTop")) + d.toInt(a.css(n.scrollbarYRail, "marginBottom"))),
                            a.css(n.scrollbarYRail, "display", ""),
                            (n.railYHeight = null),
                            (n.railYRatio = null);
                    }

                    function n(e) {
                        return void 0 === e.dataset ? e.getAttribute("data-ps-id") : e.dataset.psId;
                    }
                    (i.add = function(e) {
                        var t,
                            i,
                            n = s();
                        return (i = n), void 0 === (t = e).dataset ? t.setAttribute("data-ps-id", i) : (t.dataset.psId = i), (o[n] = new u(e)), o[n];
                    }),
                    (i.remove = function(e) {
                        var t;
                        delete o[n(e)], void 0 === (t = e).dataset ? t.removeAttribute("data-ps-id") : delete t.dataset.psId;
                    }),
                    (i.get = function(e) {
                        return o[n(e)];
                    });
                },
                { "../lib/class": 2, "../lib/dom": 3, "../lib/event-manager": 4, "../lib/guid": 5, "../lib/helper": 6, "./default-setting": 8 },
            ],
            19: [
                function(e, t, i) {
                    "use strict";
                    var n = e("../lib/class"),
                        s = e("../lib/dom"),
                        o = e("../lib/helper"),
                        r = e("./instances"),
                        a = e("./update-scroll");

                    function l(e, t) {
                        return e.settings.minScrollbarLength && (t = Math.max(t, e.settings.minScrollbarLength)), e.settings.maxScrollbarLength && (t = Math.min(t, e.settings.maxScrollbarLength)), t;
                    }
                    t.exports = function(e) {
                        var t,
                            i = r.get(e);
                        (i.containerWidth = e.clientWidth),
                        (i.containerHeight = e.clientHeight),
                        (i.contentWidth = e.scrollWidth),
                        (i.contentHeight = e.scrollHeight),
                        e.contains(i.scrollbarXRail) ||
                            (0 < (t = s.queryChildren(e, ".ps-scrollbar-x-rail")).length &&
                                t.forEach(function(e) {
                                    s.remove(e);
                                }),
                                s.appendTo(i.scrollbarXRail, e)),
                            e.contains(i.scrollbarYRail) ||
                            (0 < (t = s.queryChildren(e, ".ps-scrollbar-y-rail")).length &&
                                t.forEach(function(e) {
                                    s.remove(e);
                                }),
                                s.appendTo(i.scrollbarYRail, e)), !i.settings.suppressScrollX && i.containerWidth + i.settings.scrollXMarginOffset < i.contentWidth ?
                            ((i.scrollbarXActive = !0),
                                (i.railXWidth = i.containerWidth - i.railXMarginWidth),
                                (i.railXRatio = i.containerWidth / i.railXWidth),
                                (i.scrollbarXWidth = l(i, o.toInt((i.railXWidth * i.containerWidth) / i.contentWidth))),
                                (i.scrollbarXLeft = o.toInt(((i.negativeScrollAdjustment + e.scrollLeft) * (i.railXWidth - i.scrollbarXWidth)) / (i.contentWidth - i.containerWidth)))) :
                            (i.scrollbarXActive = !1), !i.settings.suppressScrollY && i.containerHeight + i.settings.scrollYMarginOffset < i.contentHeight ?
                            ((i.scrollbarYActive = !0),
                                (i.railYHeight = i.containerHeight - i.railYMarginHeight),
                                (i.railYRatio = i.containerHeight / i.railYHeight),
                                (i.scrollbarYHeight = l(i, o.toInt((i.railYHeight * i.containerHeight) / i.contentHeight))),
                                (i.scrollbarYTop = o.toInt((e.scrollTop * (i.railYHeight - i.scrollbarYHeight)) / (i.contentHeight - i.containerHeight)))) :
                            (i.scrollbarYActive = !1),
                            i.scrollbarXLeft >= i.railXWidth - i.scrollbarXWidth && (i.scrollbarXLeft = i.railXWidth - i.scrollbarXWidth),
                            i.scrollbarYTop >= i.railYHeight - i.scrollbarYHeight && (i.scrollbarYTop = i.railYHeight - i.scrollbarYHeight),
                            (function(e, t) {
                                var i = { width: t.railXWidth };
                                t.isRtl ? (i.left = t.negativeScrollAdjustment + e.scrollLeft + t.containerWidth - t.contentWidth) : (i.left = e.scrollLeft),
                                    t.isScrollbarXUsingBottom ? (i.bottom = t.scrollbarXBottom - e.scrollTop) : (i.top = t.scrollbarXTop + e.scrollTop),
                                    s.css(t.scrollbarXRail, i);
                                var n = { top: e.scrollTop, height: t.railYHeight };
                                t.isScrollbarYUsingRight ?
                                    t.isRtl ?
                                    (n.right = t.contentWidth - (t.negativeScrollAdjustment + e.scrollLeft) - t.scrollbarYRight - t.scrollbarYOuterWidth) :
                                    (n.right = t.scrollbarYRight - e.scrollLeft) :
                                    t.isRtl ?
                                    (n.left = t.negativeScrollAdjustment + e.scrollLeft + 2 * t.containerWidth - t.contentWidth - t.scrollbarYLeft - t.scrollbarYOuterWidth) :
                                    (n.left = t.scrollbarYLeft + e.scrollLeft),
                                    s.css(t.scrollbarYRail, n),
                                    s.css(t.scrollbarX, { left: t.scrollbarXLeft, width: t.scrollbarXWidth - t.railBorderXWidth }),
                                    s.css(t.scrollbarY, { top: t.scrollbarYTop, height: t.scrollbarYHeight - t.railBorderYWidth });
                            })(e, i),
                            i.scrollbarXActive ? n.add(e, "ps-active-x") : (n.remove(e, "ps-active-x"), (i.scrollbarXWidth = 0), (i.scrollbarXLeft = 0), a(e, "left", 0)),
                            i.scrollbarYActive ? n.add(e, "ps-active-y") : (n.remove(e, "ps-active-y"), (i.scrollbarYHeight = 0), (i.scrollbarYTop = 0), a(e, "top", 0));
                    };
                },
                { "../lib/class": 2, "../lib/dom": 3, "../lib/helper": 6, "./instances": 18, "./update-scroll": 20 },
            ],
            20: [
                function(e, t, i) {
                    "use strict";
                    var s,
                        o,
                        r = e("./instances"),
                        a = document.createEvent("Event"),
                        l = document.createEvent("Event"),
                        c = document.createEvent("Event"),
                        d = document.createEvent("Event"),
                        u = document.createEvent("Event"),
                        h = document.createEvent("Event"),
                        p = document.createEvent("Event"),
                        f = document.createEvent("Event"),
                        m = document.createEvent("Event"),
                        g = document.createEvent("Event");
                    a.initEvent("ps-scroll-up", !0, !0),
                        l.initEvent("ps-scroll-down", !0, !0),
                        c.initEvent("ps-scroll-left", !0, !0),
                        d.initEvent("ps-scroll-right", !0, !0),
                        u.initEvent("ps-scroll-y", !0, !0),
                        h.initEvent("ps-scroll-x", !0, !0),
                        p.initEvent("ps-x-reach-start", !0, !0),
                        f.initEvent("ps-x-reach-end", !0, !0),
                        m.initEvent("ps-y-reach-start", !0, !0),
                        g.initEvent("ps-y-reach-end", !0, !0),
                        (t.exports = function(e, t, i) {
                            if (void 0 === e) throw "You must provide an element to the update-scroll function";
                            if (void 0 === t) throw "You must provide an axis to the update-scroll function";
                            if (void 0 === i) throw "You must provide a value to the update-scroll function";
                            "top" === t && i <= 0 && ((e.scrollTop = i = 0), e.dispatchEvent(m)), "left" === t && i <= 0 && ((e.scrollLeft = i = 0), e.dispatchEvent(p));
                            var n = r.get(e);
                            "top" === t && i >= n.contentHeight - n.containerHeight && ((e.scrollTop = i = n.contentHeight - n.containerHeight), e.dispatchEvent(g)),
                                "left" === t && i >= n.contentWidth - n.containerWidth && ((e.scrollLeft = i = n.contentWidth - n.containerWidth), e.dispatchEvent(f)),
                                s || (s = e.scrollTop),
                                o || (o = e.scrollLeft),
                                "top" === t && i < s && e.dispatchEvent(a),
                                "top" === t && s < i && e.dispatchEvent(l),
                                "left" === t && i < o && e.dispatchEvent(c),
                                "left" === t && o < i && e.dispatchEvent(d),
                                "top" === t && ((e.scrollTop = s = i), e.dispatchEvent(u)),
                                "left" === t && ((e.scrollLeft = o = i), e.dispatchEvent(h));
                        });
                },
                { "./instances": 18 },
            ],
            21: [
                function(e, t, i) {
                    "use strict";
                    var n = e("../lib/dom"),
                        s = e("../lib/helper"),
                        o = e("./instances"),
                        r = e("./update-geometry"),
                        a = e("./update-scroll");
                    t.exports = function(e) {
                        var t = o.get(e);
                        t &&
                            ((t.negativeScrollAdjustment = t.isNegativeScroll ? e.scrollWidth - e.clientWidth : 0),
                                n.css(t.scrollbarXRail, "display", "block"),
                                n.css(t.scrollbarYRail, "display", "block"),
                                (t.railXMarginWidth = s.toInt(n.css(t.scrollbarXRail, "marginLeft")) + s.toInt(n.css(t.scrollbarXRail, "marginRight"))),
                                (t.railYMarginHeight = s.toInt(n.css(t.scrollbarYRail, "marginTop")) + s.toInt(n.css(t.scrollbarYRail, "marginBottom"))),
                                n.css(t.scrollbarXRail, "display", "none"),
                                n.css(t.scrollbarYRail, "display", "none"),
                                r(e),
                                a(e, "top", e.scrollTop),
                                a(e, "left", e.scrollLeft),
                                n.css(t.scrollbarXRail, "display", ""),
                                n.css(t.scrollbarYRail, "display", ""));
                    };
                },
                { "../lib/dom": 3, "../lib/helper": 6, "./instances": 18, "./update-geometry": 19, "./update-scroll": 20 },
            ],
        }, {}, [1]),
        (T = "undefined" != typeof window ? window : {}),
        (C = (function(n, p, o) {
            "use strict";
            var f, m;
            if (
                ((function() {
                    var e,
                        t = {
                            lazyClass: "lazyload",
                            loadedClass: "lazyloaded",
                            loadingClass: "lazyloading",
                            preloadClass: "lazypreload",
                            errorClass: "lazyerror",
                            autosizesClass: "lazyautosizes",
                            srcAttr: "data-src",
                            srcsetAttr: "data-srcset",
                            sizesAttr: "data-sizes",
                            minSize: 40,
                            customMedia: {},
                            init: !0,
                            expFactor: 1.5,
                            hFac: 0.8,
                            loadMode: 2,
                            loadHidden: !0,
                            ricTimeout: 0,
                            throttleDelay: 125,
                        };
                    for (e in ((m = n.lazySizesConfig || n.lazysizesConfig || {}), t)) e in m || (m[e] = t[e]);
                })(), !p || !p.getElementsByClassName)
            )
                return { init: function() {}, cfg: m, noSupport: !0 };
            var i,
                r,
                s,
                e,
                g,
                v,
                u,
                y,
                t,
                b,
                w,
                _,
                k,
                T,
                C,
                S,
                a,
                l,
                c,
                d,
                h,
                x,
                E,
                D,
                F,
                A,
                $,
                I,
                M,
                P,
                L,
                j,
                O,
                H,
                z,
                R,
                N,
                W,
                Y,
                q,
                B,
                X,
                U,
                V,
                Q,
                K,
                Z,
                G,
                J,
                ee,
                te = p.documentElement,
                ie = n.HTMLPictureElement,
                ne = "addEventListener",
                se = "getAttribute",
                oe = n[ne].bind(n),
                re = n.setTimeout,
                ae = n.requestAnimationFrame || re,
                le = n.requestIdleCallback,
                ce = /^picture$/i,
                de = ["load", "error", "lazyincluded", "_lazyloaded"],
                ue = {},
                he = Array.prototype.forEach,
                pe = function(e, t) {
                    return ue[t] || (ue[t] = new RegExp("(\\s|^)" + t + "(\\s|$)")), ue[t].test(e[se]("class") || "") && ue[t];
                },
                fe = function(e, t) {
                    pe(e, t) || e.setAttribute("class", (e[se]("class") || "").trim() + " " + t);
                },
                me = function(e, t) {
                    var i;
                    (i = pe(e, t)) && e.setAttribute("class", (e[se]("class") || "").replace(i, " "));
                },
                ge = function(t, i, e) {
                    var n = e ? ne : "removeEventListener";
                    e && ge(t, i),
                        de.forEach(function(e) {
                            t[n](e, i);
                        });
                },
                ve = function(e, t, i, n, s) {
                    var o = p.createEvent("Event");
                    return i || (i = {}), (i.instance = f), o.initEvent(t, !n, !s), (o.detail = i), e.dispatchEvent(o), o;
                },
                ye = function(e, t) {
                    var i;
                    !ie && (i = n.picturefill || m.pf) ? (t && t.src && !e[se]("srcset") && e.setAttribute("srcset", t.src), i({ reevaluate: !0, elements: [e] })) : t && t.src && (e.src = t.src);
                },
                be = function(e, t) {
                    return (getComputedStyle(e, null) || {})[t];
                },
                we = function(e, t, i) {
                    for (i = i || e.offsetWidth; i < m.minSize && t && !e._lazysizesWidth;)(i = t.offsetWidth), (t = t.parentNode);
                    return i;
                },
                _e =
                ((Z = []),
                    (G = K = []),
                    ((ee = function(e, t) {
                        V && !t ? e.apply(this, arguments) : (G.push(e), Q || ((Q = !0), (p.hidden ? re : ae)(J)));
                    })._lsFlush = J = function() {
                        var e = G;
                        for (G = K.length ? Z : K, Q = !(V = !0); e.length;) e.shift()();
                        V = !1;
                    }),
                    ee),
                ke = function(i, e) {
                    return e ?

                        function() {
                            _e(i);
                        } :
                        function() {
                            var e = this,
                                t = arguments;
                            _e(function() {
                                i.apply(e, t);
                            });
                        };
                },
                Te = function(e) {
                    var t,
                        i,
                        n = function() {
                            (t = null), e();
                        },
                        s = function() {
                            var e = o.now() - i;
                            e < 99 ? re(s, 99 - e) : (le || n)(n);
                        };
                    return function() {
                        (i = o.now()), t || (t = re(s, 99));
                    };
                },
                Ce =
                ((D = /^img$/i),
                    (F = /^iframe$/i),
                    (A = "onscroll" in n && !/(gle|ing)bot/.test(navigator.userAgent)),
                    (M = -1),
                    (P = function(e) {
                        I--, (!e || I < 0 || !e.target) && (I = 0);
                    }),
                    (L = function(e) {
                        return null == S && (S = "hidden" == be(p.body, "visibility")), S || !("hidden" == be(e.parentNode, "visibility") && "hidden" == be(e, "visibility"));
                    }),
                    (j = function(e, t) {
                        var i,
                            n = e,
                            s = L(e);
                        for (_ -= t, C += t, k -= t, T += t; s && (n = n.offsetParent) && n != p.body && n != te;)
                            (s = 0 < (be(n, "opacity") || 1)) && "visible" != be(n, "overflow") && ((i = n.getBoundingClientRect()), (s = T > i.left && k < i.right && C > i.top - 1 && _ < i.bottom + 1));
                        return s;
                    }),
                    (a = O = function() {
                        var e,
                            t,
                            i,
                            n,
                            s,
                            o,
                            r,
                            a,
                            l,
                            c,
                            d,
                            u,
                            h = f.elements;
                        if ((y = m.loadMode) && I < 8 && (e = h.length)) {
                            for (t = 0, M++; t < e; t++)
                                if (h[t] && !h[t]._lazyRace)
                                    if (!A || (f.prematureUnveil && f.prematureUnveil(h[t]))) q(h[t]);
                                    else if (
                                (((a = h[t][se]("data-expand")) && (o = 1 * a)) || (o = $),
                                    c ||
                                    ((c = !m.expand || m.expand < 1 ? (500 < te.clientHeight && 500 < te.clientWidth ? 500 : 370) : m.expand),
                                        (d = (f._defEx = c) * m.expFactor),
                                        (u = m.hFac),
                                        (S = null),
                                        $ < d && I < 1 && 2 < M && 2 < y && !p.hidden ? (($ = d), (M = 0)) : ($ = 1 < y && 1 < M && I < 6 ? c : 0)),
                                    l !== o && ((b = innerWidth + o * u), (w = innerHeight + o), (r = -1 * o), (l = o)),
                                    (i = h[t].getBoundingClientRect()),
                                    (C = i.bottom) >= r && (_ = i.top) <= w && (T = i.right) >= r * u && (k = i.left) <= b && (C || T || k || _) && (m.loadHidden || L(h[t])) && ((v && I < 3 && !a && (y < 3 || M < 4)) || j(h[t], o)))
                            ) {
                                if ((q(h[t]), (s = !0), 9 < I)) break;
                            } else !s && v && !n && I < 4 && M < 4 && 2 < y && (g[0] || m.preloadAfterLoad) && (g[0] || (!a && (C || T || k || _ || "auto" != h[t][se](m.sizesAttr)))) && (n = g[0] || h[t]);
                            n && !s && q(n);
                        }
                    }),
                    (c = I = $ = 0),
                    (d = m.throttleDelay),
                    (h = m.ricTimeout),
                    (x = function() {
                        (l = !1), (c = o.now()), a();
                    }),
                    (E =
                        le && 49 < h ?

                        function() {
                            le(x, { timeout: h }), h !== m.ricTimeout && (h = m.ricTimeout);
                        } :
                        ke(function() {
                            re(x);
                        }, !0)),
                    (H = function(e) {
                        var t;
                        (e = !0 === e) && (h = 33), l || ((l = !0), (t = d - (o.now() - c)) < 0 && (t = 0), e || t < 9 ? E() : re(E, t));
                    }),
                    (R = ke(
                        (z = function(e) {
                            var t = e.target;
                            t._lazyCache ? delete t._lazyCache : (P(e), fe(t, m.loadedClass), me(t, m.loadingClass), ge(t, N), ve(t, "lazyloaded"));
                        })
                    )),
                    (N = function(e) {
                        R({ target: e.target });
                    }),
                    (W = function(e) {
                        var t,
                            i = e[se](m.srcsetAttr);
                        (t = m.customMedia[e[se]("data-media") || e[se]("media")]) && e.setAttribute("media", t), i && e.setAttribute("srcset", i);
                    }),
                    (Y = ke(function(t, e, i, n, s) {
                        var o, r, a, l, c, d;
                        (c = ve(t, "lazybeforeunveil", e)).defaultPrevented ||
                            (n && (i ? fe(t, m.autosizesClass) : t.setAttribute("sizes", n)),
                                (r = t[se](m.srcsetAttr)),
                                (o = t[se](m.srcAttr)),
                                s && (l = (a = t.parentNode) && ce.test(a.nodeName || "")),
                                (d = e.firesLoad || ("src" in t && (r || o || l))),
                                (c = { target: t }),
                                fe(t, m.loadingClass),
                                d && (clearTimeout(u), (u = re(P, 2500)), ge(t, N, !0)),
                                l && he.call(a.getElementsByTagName("source"), W),
                                r ?
                                t.setAttribute("srcset", r) :
                                o &&
                                !l &&
                                (F.test(t.nodeName) ?
                                    (function(t, i) {
                                        try {
                                            t.contentWindow.location.replace(i);
                                        } catch (e) {
                                            t.src = i;
                                        }
                                    })(t, o) :
                                    (t.src = o)),
                                s && (r || l) && ye(t, { src: o })),
                            t._lazyRace && delete t._lazyRace,
                            me(t, m.lazyClass),
                            _e(function() {
                                var e = t.complete && 1 < t.naturalWidth;
                                (d && !e) ||
                                (e && fe(t, "ls-is-cached"),
                                    z(c),
                                    (t._lazyCache = !0),
                                    re(function() {
                                        "_lazyCache" in t && delete t._lazyCache;
                                    }, 9)),
                                "lazy" == t.loading && I--;
                            }, !0);
                    })),
                    (q = function(e) {
                        if (!e._lazyRace) {
                            var t,
                                i = D.test(e.nodeName),
                                n = i && (e[se](m.sizesAttr) || e[se]("sizes")),
                                s = "auto" == n;
                            ((!s && v) || !i || (!e[se]("src") && !e.srcset) || e.complete || pe(e, m.errorClass) || !pe(e, m.lazyClass)) &&
                            ((t = ve(e, "lazyunveilread").detail), s && Se.updateElem(e, !0, e.offsetWidth), (e._lazyRace = !0), I++, Y(e, t, s, n, i));
                        }
                    }),
                    (B = Te(function() {
                        (m.loadMode = 3), H();
                    })),
                    (U = function() {
                        v || (o.now() - t < 999 ? re(U, 999) : ((v = !0), (m.loadMode = 3), H(), oe("scroll", X, !0)));
                    }), {
                        _: function() {
                            (t = o.now()),
                            (f.elements = p.getElementsByClassName(m.lazyClass)),
                            (g = p.getElementsByClassName(m.lazyClass + " " + m.preloadClass)),
                            oe("scroll", H, !0),
                                oe("resize", H, !0),
                                oe("pageshow", function(e) {
                                    if (e.persisted) {
                                        var t = p.querySelectorAll("." + m.loadingClass);
                                        t.length &&
                                            t.forEach &&
                                            ae(function() {
                                                t.forEach(function(e) {
                                                    e.complete && q(e);
                                                });
                                            });
                                    }
                                }),
                                n.MutationObserver ? new MutationObserver(H).observe(te, { childList: !0, subtree: !0, attributes: !0 }) : (te[ne]("DOMNodeInserted", H, !0), te[ne]("DOMAttrModified", H, !0), setInterval(H, 999)),
                                oe("hashchange", H, !0), ["focus", "mouseover", "click", "load", "transitionend", "animationend"].forEach(function(e) {
                                    p[ne](e, H, !0);
                                }),
                                /d$|^c/.test(p.readyState) ? U() : (oe("load", U), p[ne]("DOMContentLoaded", H), re(U, 2e4)),
                                f.elements.length ? (O(), _e._lsFlush()) : H();
                        },
                        checkElems: H,
                        unveil: q,
                        _aLSL: (X = function() {
                            3 == m.loadMode && (m.loadMode = 2), B();
                        }),
                    }),
                Se =
                ((r = ke(function(e, t, i, n) {
                        var s, o, r;
                        if (((e._lazysizesWidth = n), (n += "px"), e.setAttribute("sizes", n), ce.test(t.nodeName || "")))
                            for (o = 0, r = (s = t.getElementsByTagName("source")).length; o < r; o++) s[o].setAttribute("sizes", n);
                        i.detail.dataAttr || ye(e, i.detail);
                    })),
                    (s = function(e, t, i) {
                        var n,
                            s = e.parentNode;
                        s && ((i = we(e, s, i)), (n = ve(e, "lazybeforesizes", { width: i, dataAttr: !!t })).defaultPrevented || ((i = n.detail.width) && i !== e._lazysizesWidth && r(e, s, n, i)));
                    }), {
                        _: function() {
                            (i = p.getElementsByClassName(m.autosizesClass)), oe("resize", e);
                        },
                        checkElems: (e = Te(function() {
                            var e,
                                t = i.length;
                            if (t)
                                for (e = 0; e < t; e++) s(i[e]);
                        })),
                        updateElem: s,
                    }),
                xe = function() {
                    !xe.i && p.getElementsByClassName && ((xe.i = !0), Se._(), Ce._());
                };
            return (
                re(function() {
                    m.init && xe();
                }),
                (f = { cfg: m, autoSizer: Se, loader: Ce, init: xe, uP: ye, aC: fe, rC: me, hC: pe, fire: ve, gW: we, rAF: _e })
            );
        })(T, T.document, Date)),
        (T.lazySizes = C),
        "object" == typeof module && module.exports && (module.exports = C),
        (S = window),
        (E = function() {
            x(S.lazySizes), S.removeEventListener("lazyunveilread", E, !0);
        }),
        (x = (x = function(e, u, h) {
            "use strict";
            var p, f, m, g, n, o, s, v, y;
            e.addEventListener &&
                ((p = h.cfg),
                    (f = /\s+/g),
                    (m = /\s*\|\s+|\s+\|\s*/g),
                    (g = /^(.+?)(?:\s+\[\s*(.+?)\s*\])(?:\s+\[\s*(.+?)\s*\])?$/),
                    (n = /^\s*\(*\s*type\s*:\s*(.+?)\s*\)*\s*$/),
                    (o = /\(|\)|'/),
                    (s = { contain: 1, cover: 1 }),
                    (v = function(e, t) {
                        var i;
                        t && ((i = t.match(n)) && i[1] ? e.setAttribute("type", i[1]) : e.setAttribute("media", p.customMedia[t] || t));
                    }),
                    (y = function(e) {
                        var t, i, n, s;
                        e.target._lazybgset &&
                            ((i = (t = e.target)._lazybgset),
                                (n = t.currentSrc || t.src) && ((s = h.fire(i, "bgsetproxy", { src: n, useSrc: o.test(n) ? JSON.stringify(n) : n })).defaultPrevented || (i.style.backgroundImage = "url(" + s.detail.useSrc + ")")),
                                t._lazybgsetLoading && (h.fire(i, "_lazyloaded", {}, !1, !0), delete t._lazybgsetLoading));
                    }),
                    addEventListener("lazybeforeunveil", function(e) {
                        var t, i, n, s, o, r, a, l, c, d;
                        !e.defaultPrevented &&
                            (t = e.target.getAttribute("data-bgset")) &&
                            ((c = e.target),
                                ((d = u.createElement("img")).alt = ""),
                                (d._lazybgsetLoading = !0),
                                (e.detail.firesLoad = !0),
                                (i = t),
                                (n = c),
                                (s = d),
                                (o = u.createElement("picture")),
                                (r = n.getAttribute(p.sizesAttr)),
                                (a = n.getAttribute("data-ratio")),
                                (l = n.getAttribute("data-optimumx")),
                                n._lazybgset && n._lazybgset.parentNode == n && n.removeChild(n._lazybgset),
                                Object.defineProperty(s, "_lazybgset", { value: n, writable: !0 }),
                                Object.defineProperty(n, "_lazybgset", { value: o, writable: !0 }),
                                (i = i.replace(f, " ").split(m)),
                                (o.style.display = "none"),
                                (s.className = p.lazyClass),
                                1 != i.length || r || (r = "auto"),
                                i.forEach(function(e) {
                                    var t,
                                        i = u.createElement("source");
                                    r && "auto" != r && i.setAttribute("sizes", r), (t = e.match(g)) ? (i.setAttribute(p.srcsetAttr, t[1]), v(i, t[2]), v(i, t[3])) : i.setAttribute(p.srcsetAttr, e), o.appendChild(i);
                                }),
                                r && (s.setAttribute(p.sizesAttr, r), n.removeAttribute(p.sizesAttr), n.removeAttribute("sizes")),
                                l && s.setAttribute("data-optimumx", l),
                                a && s.setAttribute("data-ratio", a),
                                o.appendChild(s),
                                n.appendChild(o),
                                setTimeout(function() {
                                    h.loader.unveil(d),
                                        h.rAF(function() {
                                            h.fire(d, "_lazyloaded", {}, !0, !0), d.complete && y({ target: d });
                                        });
                                }));
                    }),
                    u.addEventListener("load", y, !0),
                    e.addEventListener(
                        "lazybeforesizes",
                        function(e) {
                            var t, i, n;
                            e.detail.instance == h &&
                                e.target._lazybgset &&
                                e.detail.dataAttr &&
                                ((i = e.target._lazybgset),
                                    (n = (getComputedStyle(i) || { getPropertyValue: function() {} }).getPropertyValue("background-size")), !s[n] && s[i.style.backgroundSize] && (n = i.style.backgroundSize),
                                    s[(t = n)] &&
                                    ((e.target._lazysizesParentFit = t),
                                        h.rAF(function() {
                                            e.target.setAttribute("data-parent-fit", t), e.target._lazysizesParentFit && delete e.target._lazysizesParentFit;
                                        })));
                        }, !0
                    ),
                    u.documentElement.addEventListener("lazybeforesizes", function(e) {
                        var t, i;
                        !e.defaultPrevented &&
                            e.target._lazybgset &&
                            e.detail.instance == h &&
                            (e.detail.width = ((t = e.target._lazybgset), (i = h.gW(t, t.parentNode)), (!t._lazysizesWidth || i > t._lazysizesWidth) && (t._lazysizesWidth = i), t._lazysizesWidth));
                    }));
        }).bind(null, S, S.document)),
        "object" == typeof module && module.exports ? x(require("lazysizes")) : "function" == typeof define && define.amd ? define(["lazysizes"], x) : S.lazySizes ? E() : S.addEventListener("lazyunveilread", E, !0);
    var F, A, I, M, P, L, j, O, H, z, R, N;

    function W(i, n) {
        var s;
        n = n || 500;
        return function() {
            var e = this,
                t = arguments;
            clearTimeout(s),
                (s = setTimeout(function() {
                    i.apply(e, Array.prototype.slice.call(t));
                }, n));
        };
    }
    $("body").append('<div class="mm-fullscreen-bg"></div>'),
        ($.fn.initMM = function() {
            var n = {
                $mobilemenu: $(".panel-menu"),
                external_con: "externaf",
                mm_close_button: "Close",
                mm_back_button: "Back",
                mm_breakpoint: 768,
                mm_enable_breakpoint: !1,
                mm_mobile_button: !1,
                remember_state: !1,
                second_button: !1,
                init: function(e, t) {
                    var i = this;
                    if (!i.$mobilemenu.length) return console.log('You not have <nav class="panel-menu mobile-main-menu">menu</nav>. See Documentation'), !1;
                    null != t && i.parse_arguments(t), i.$mobilemenu.parse_mm(n), i.$mobilemenu.init_mm(n), i.mm_enable_breakpoint && i.$mobilemenu.check_resolution_mm(n), e.mm_handler(n);
                },
                parse_arguments: function(e) {
                    var i = this;
                    Object(e).hasOwnProperty("menu_class") && (i.$mobilemenu = $("." + e.menu_class)),
                        $.each(e, function(e, t) {
                            switch (e) {
                                case "right":
                                    t && i.$mobilemenu.addClass("mm-right");
                                    break;
                                case "close_button_name":
                                    i.mm_close_button = t;
                                    break;
                                case "back_button_name":
                                    i.mm_back_button = t;
                                    break;
                                case "width":
                                    i.$mobilemenu.css("width", t);
                                    break;
                                case "breakpoint":
                                    i.mm_breakpoint = t;
                                    break;
                                case "enable_breakpoint":
                                    i.mm_enable_breakpoint = t;
                                    break;
                                case "mobile_button":
                                    i.mm_mobile_button = t;
                                    break;
                                case "remember_state":
                                    i.remember_state = t;
                                    break;
                                case "second_button":
                                    i.second_button = t;
                                    break;
                                case "external_container":
                                    t && i.$mobilemenu.addClass(i.external_con);
                            }
                        });
                },
                show_button_in_mobile: function(e) {
                    var t = this;
                    t.mm_mobile_button &&
                        (window.innerWidth > t.mm_breakpoint ? e.hide() : e.show(),
                            $(window).resize(function() {
                                window.innerWidth > t.mm_breakpoint ? e.hide() : e.show();
                            }));
                },
            };
            n.init($(this), arguments[0]), n.show_button_in_mobile($(this));
        }),
        ($.fn.check_resolution_mm = function(e) {
            var t = $(this);
            $(window).resize(function() {
                if (!$("body").hasClass("mm-open") || !t.hasClass("mmitemopen")) return !1;
                window.innerWidth > e.mm_breakpoint && t.closemm(e);
            });
        }),
        ($.fn.mm_handler = function(t) {
            $(this).click(function(e) {
                    e.preventDefault(), t.$mobilemenu.openmm();
                }),
                0 != t.second_button &&
                $(t.second_button).click(function(e) {
                    e.preventDefault(), t.$mobilemenu.openmm();
                });
        }),
        ($.fn.parse_mm = function(o) {
            var e,
                r = $(this).clone(),
                a = $('<div class="mmpanels"></div>'),
                l = !1,
                t = 0,
                i = !1,
                c = !1;
            $(this).empty(),
                r.find("a").each(function() {
                    (i = $(this)),
                    (e = i.parent().find("ul").first()).length &&
                        (t++,
                            e.prepend("<li></li>").find("li").first().append(i.clone().addClass("mm-original-link")),
                            i
                            .attr("href", "#mm" + t)
                            .attr("data-target", "#mm" + t)
                            .addClass("mm-next-level"));
                }),
                r.find("ul").each(function(e) {
                    var t, i, n, s;
                    (c = !1),
                    (l = $('<div class="mmpanel mmhidden">')
                        .attr("id", "mm" + e)
                        .append($(this))),
                    0 == e ?
                        (l.addClass("mmopened").addClass("mmcurrent").removeClass("mmhidden"),
                            (n = r.find(".mm-closebtn").html()),
                            (s = o.mm_close_button),
                            (c = '<li class="mm-close-parent"><a href="#close" data-target="#close" class="mm-close">' + (n = null == n ? s : n) + "</a></li>"),
                            o.$mobilemenu.hasClass(o.external_con) || l.find("ul").first().append('<li id="entrypoint-objects"></li>'),
                            $.ajax({

                            })) :
                        ((t = r.find(".mm-backbtn").html()), (i = o.mm_back_button), (c = '<li><a href="#" data-target="#" class="mm-prev-level">' + (t = null == t ? i : t) + "</a></li>")),
                        l.find("ul").first().prepend(c),
                        a.append(l);
                }),
                $(this).append(a);
        }),
        ($.fn.init_mm = function(s) {
            var o = $(this);
            o.find("a").each(function() {
                    $(this).click(function(e) {
                        var t = $(this),
                            i = !1,
                            n = "";
                        return t.hasClass("mm-next-level") ?
                            (e.preventDefault(),
                                (n = t.attr("href")),
                                (i = o.find(".mmcurrent")).addClass("mmsubopened").removeClass("mmcurrent"),
                                o.find(n).removeClass("mmhidden"),
                                setTimeout(function() {
                                    o.find(n).scrollTop(0).addClass("mmcurrent").addClass("mmopened");
                                }, 0),
                                setTimeout(function() {
                                    i.addClass("mmhidden");
                                }, 300), !1) :
                            t.hasClass("mm-prev-level") ?
                            (e.preventDefault(),
                                (n = t.attr("href")),
                                (i = o.find(".mmcurrent")).removeClass("mmcurrent").removeClass("mmopened"),
                                o.find(".mmsubopened").last().removeClass("mmhidden").scrollTop(0).removeClass("mmsubopened").addClass("mmcurrent"),
                                setTimeout(function() {
                                    i.addClass("mmhidden");
                                }, 300), !1) :
                            t.hasClass("mm-close") ?
                            (o.closemm(s), !1) :
                            void 0;
                    });
                }),
                $(".mm-fullscreen-bg").click(function(e) {
                    e.preventDefault(), o.closemm(s);
                });
        }),
        ($.fn.openmm = function() {
            var e = $(this);
            e.show(),
                setTimeout(function() {
                    $("body").addClass("mm-open"), e.addClass("mmitemopen"), $(".mm-fullscreen-bg").fadeIn(300);
                }, 0);
        }),
        ($.fn.closemm = function(e) {
            var t = $(this);
            t.addClass("mmhide"),
                $(".mm-fullscreen-bg").fadeOut(300),
                setTimeout(function() {
                    !(function(e, t) {
                        t.remember_state || (e.find(".mmpanel").toggleClass("mmsubopened mmcurrent mmopened", !1).addClass("mmhidden"), e.find("#mm0").addClass("mmopened").addClass("mmcurrent").removeClass("mmhidden"));
                        e.toggleClass("mmhide mmitemopen", !1).hide(), $("body").removeClass("mm-open");
                    })(t, e);
                }, 300);
        }),
        (I = jQuery),
        (M = {
            init: function(e) {
                return this.each(function() {
                    var e = I(this),
                        t = e.find(".tt-item.tt-item__open"),
                        i = e.find(".tt-item .tt-item__title");
                    e.addClass("init-accordeon"),
                        t.find(".tt-item__content").slideDown(100),
                        i.on("click", function() {
                            I(this).closest(".tt-item").siblings(".tt-item__open").find(".tt-item__content").slideToggle(200).closest(".tt-item").removeClass("tt-item__open"),
                                I(this).next().slideToggle(200).parent().toggleClass("tt-item__open");
                        });
                });
            },
        }),
        (I.fn.accordeon = function(e) {
            return M[e] ? M[e].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof e && e ? (console.info("Action " + e + "not found this plugin"), this) : M.init.apply(this, arguments);
        }),
        I("#tt-pageContent .js-accordeon").accordeon(),
        (function(t) {
            function i() {
                if ((window.innerWidth || t(window).width()) <= 650)
                    return (
                        t("#tt-pageContent .box02").each(function() {
                            t(this).find(".box02__content").removeClass("no-indent");
                        }), !1
                    );
                t("#tt-pageContent .box02").each(function() {
                    t(this).find(".box02__content").removeClass("no-indent");
                    var e = t(".box02__img").height();
                    t(".box02__content").height() < e && t(this).find(".box02__content").addClass("no-indent");
                });
            }
            t(window).on("load", function() {
                    i();
                }),
                t(window).resize(
                    W(function(e) {
                        i();
                    })
                );
        })(jQuery),
        (P = jQuery),
        (L = P("#js-backtotop")),
        (j = P(window)),
        L.length &&
        (L.on("click", function(e) {
                return P("html, body").animate({ scrollTop: 0 }, 500), !1;
            }),
            j.scroll(function() {
                500 < j.scrollTop() ? L.stop((!0).false).addClass("pt-show") : L.stop((!0).false).removeClass("pt-show");
            })),
        (function(e) {
            var t,
                i,
                n = jQuery("html");
            (t = navigator.userAgent.toLowerCase()),
            (i = function(e) {
                return -1 != t.indexOf(e);
            }),
            n.addClass(
                [!/opera|webtv/i.test(t) && /msie (\d)/.test(t) ?
                    "ie ie" + RegExp.$1 :
                    i("firefox/2") ?
                    "gecko ff2" :
                    i("firefox/3") ?
                    "gecko ff3" :
                    i("gecko/") ?
                    "gecko" :
                    i("opera/9") ?
                    "opera opera9" :
                    /opera (\d)/.test(t) ?
                    "opera opera" + RegExp.$1 :
                    i("konqueror") ?
                    "konqueror" :
                    i("applewebkit/") ?
                    "webkit safari" :
                    i("mozilla/") ?
                    "gecko" :
                    "",
                    i("x11") || i("linux") ? " linux" : i("mac") ? " mac" : i("win") ? " win" : "",
                ].join("")
            );
            ("ontouchstart" in window || "onmsgesturechange" in window) && n.addClass("touch-device"), /Edge/.test(navigator.userAgent) && n.addClass("edge"), null != navigator.userAgent.match(/iPad/i) && n.addClass("ipad");
        })(),
        (O = jQuery)("body").on("shown.bs.modal", function(e) {
            return O("body").hasClass("mm-open") && O("#mobile-menu .mm-close").trigger("click"), !1;
        }),
        (function(t) {
            var i = t("#tt-nav");
            if (!i.length) return;
            var n;
            i.find("> ul > li").each(function() {
                    0 != t(this).children("ul").length && t(this).addClass("subMenu");
                }),
                (n = window.location.href.split("#")[0].split("/").pop() || "index.html"),
                i.find("li").each(function() {
                    var e = t(this).find("a").attr("href");
                    n == e && (t(this).addClass("active").closest(".subMenu").addClass("active"), i.addClass("defined-item"));
                }),
                i.hasClass("defined-item") || i.find("> ul > li:first-child").addClass("active"),
                i.find("li").on("mouseenter mouseleave", function(e) {
                    t(this).toggleClass("is-hover");
                });
        })(jQuery),
        jQuery("[data-slick]").slick({ lazyLoad: "progressive", dots: !0, arrows: !1, infinite: !0, speed: 300, autoplay: !0, adaptiveHeight: !0, slidesToScroll: 1, pauseOnFocus: !1, pauseOnHover: !1 }),
        (z = jQuery),
        (function() {
            var e = z("#blog-slider");
            if (e.length) {
                var t = e.find(".blog-slider__layout"),
                    o = e.find(".tt-item-wrapper");
                t.slick({ dots: !0, arrows: !1, infinite: !0, speed: 300, slidesToShow: 1, slidesToScroll: 1, adaptiveHeight: !0, autoplay: !0, autoplaySpeed: 4500, pauseOnFocus: !1, pauseOnHover: !1 }),
                    t.on("afterChange", function(e, t, i, n) {
                        var s = i;
                        s++,
                        o
                            .find(".number-" + s)
                            .addClass("active")
                            .siblings()
                            .removeClass("active");
                    }),
                    o.each(function() {
                        z(".tt-item", this).each(function(e) {
                            z(this).addClass("number-" + (e + 1));
                        });
                    });
            }
        })(),
        (function(i) {
            function t() {
                var e = i("#tt-pageContent .js-init-carusel-tablet").not('.slick-initialized'),
                    t = window.innerWidth || document.body.clientWidth;
                if (!e.length) return !1;
                t <= 1024 ?
                    e.slick({
                        lazyLoad: "progressive",
                        dots: !0,
                        arrows: !1,
                        infinite: !0,
                        speed: 300,
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        adaptiveHeight: !0,
                        autoplay: !0,
                        autoplaySpeed: 4500,
                        pauseOnFocus: !1,
                        pauseOnHover: !1,
                        responsive: [{ breakpoint: 650, settings: { slidesToShow: 1, slidesToScroll: 1 } }],
                    }) :
                    e.filter(".slick-initialized").slick("unslick");
            }
            t(),
                i(window).resize(
                    W(function(e) {
                        t();
                    })
                );
        })(jQuery),
        (function(e) {

            var hours;
            $(document).ready(function() {
                if ($('.js_datepicker-1').hasClass('format24')) {
                    hours = 'hh:ii';
                } else if ($('.js_datepicker-2').hasClass('format24')) {
                    hours = 'hh:ii';
                } else {
                    hours = 'hh:ii aa';
                }

                e.fn.datepicker.language.en = {
                    days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                    daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                    daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
                    months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                    monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    today: "Today",
                    clear: "Clear",
                    dateFormat: "mm/dd/yyyy",
                   
                    timeFormat: hours,

                    firstDay: 0,
                };

            });

            $(document).ready(function() {
               e("#modalMRequestQuote .js_datepicker-1").datepicker({ language: "en",minDate: new Date() }).data("timepicker"),
               e("#modalMRequestQuote .js_datepicker-2").datepicker({ language: "en",minDate: new Date()}).data("timepicker");
            });

        })(jQuery),
        (function(e) {
            var t = e("#tt-nav"),
                i = e("#tt-menu-toggle");
            if (t && i) {
                var n = t.find("ul").first().children().clone();
                e("#mobile-menu").find("ul").append(n), i.initMM({ enable_breakpoint: !0, mobile_button: !0, breakpoint: 1360 });
            }
        })(jQuery),
        (function(e) {
            if (e("#counter-js").length) {
                var t = e(window);
                t.scroll(function() {
                    e(".tt-counter").each(function() {
                        e(this).offset().top < t.scrollTop() + 800 && e(".tt-counter").countTo().removeClass("tt-counter");
                    });
                });
            }
        })(jQuery),
        (R = jQuery),
        (N = R("#tt-pageContent .js-video-popup")).length &&
        N.each(function() {
            R(this).magnificPopup({
                type: "iframe",
                iframe: {
                    patterns: {
                        dailymotion: {
                            index: "dailymotion.com",
                            id: function(e) {
                                var t = e.match(/^.+dailymotion.com\/(video|hub)\/([^_]+)[^#]*(#video=([^_&]+))?/);
                                return null !== t ? (void 0 !== t[4] ? t[4] : t[2]) : null;
                            },
                            src: "https://www.dailymotion.com/embed/video/%id%",
                        },
                    },
                },
            });
        }),
        jQuery,
        document.addEventListener("lazybeforeunveil", function(e) {
            var t = e.target.getAttribute("data-bg");
            t && (e.target.style.backgroundImage = "url(" + t + ")");
        }),
        (function(o) {

            o(window).on("load", function() {
                o("body").addClass("btn-animation");
            });
            var n = o("#js-mainSlider");

            function i(i, n) {
                var s;
                n = n || 500;
                return function() {
                    var e = this,
                        t = arguments;
                    clearTimeout(s),
                        (s = setTimeout(function() {
                            i.apply(e, Array.prototype.slice.call(t));
                        }, n));
                };
            }

            function t() {
                n.find(".mainSlider-wrapper"), 767 < o(window).width() ? e(".main-slider") : e(".main-slider");
                //var t = o('.main-slider');
            }

            function e(e) {

                // var t = o(e);

                // var e = n.find(".main-slider");
                // var t = o('.main-slider');
                (function() {

                    var e = n.find(".main-slider"),
                        s = o("#bubbles");
                    e.hasClass("slick-initialized") && e.slick("unslick");

                    function t() {
                        1024 < window.innerWidth && n.find(".js-rotation").tilt({ perspective: 1e3 });
                    }
                    n.find(".main-slider").on("init", function(e, t, i) {
                            setTimeout(function() {
                                    n.addClass("show");
                                }, 500),
                                s.addClass("start");
                        }),

                        n.find(".main-slider").slick({ slidesToShow: 1, slidesToScroll: 1, autoplaySpeed: 4300, speed: 1200, autoplay: !0, arrows: !1, dots: !1, fade: !0, responsive: [{ breakpoint: 550, settings: { speed: 700 } }] }),
                        n.on("beforeChange", function(e, t, i, n) {
                            o(this).removeClass("start"), s.removeClass("start");
                        }),
                        n.on("afterChange", function(e, t, i, n) {
                            o(this).addClass("start"), s.addClass("start");
                        });
                })();


            }
            t(),
                o(window).resize(
                    i(function(e) {
                        t();
                    })
                );

        })(jQuery);
    var Y,
        q,
        B;


    (Y = jQuery)(document).on("mouseenter mouseleave click", "#tt-pageContent .js-handler", function(e) {
            var t = Y(this),
                i = t.height();
            "mouseenter" === e.type ? (t.addClass("active"), t.height(i)) : "mouseleave" === e.type && e.relatedTarget && (t.removeClass("active"), t.removeAttr("style"));
        }),

        (window.onload = function() {
            var e = document.getElementById("js-init-sticky"),
                t = (function(e) {
                    for (var t = 0, i = 0;
                        (t += e.offsetTop || 0), (i += e.offsetLeft || 0), (e = e.offsetParent););
                    return { top: t, left: i };
                })(e),
                i = document.getElementById("js-filters-toggle");
            window.onscroll = function() {
                (document.documentElement.scrollTop || document.body.scrollTop) > t.top ? (e.classList.add("fixed"), i && i.classList.add("fixed")) : (e.classList.remove("fixed"), i && i.classList.remove("fixed"));
            };
        }),
        (q = jQuery),
        (B = q(window)),
        (function() {
            function t() {
                setTimeout(function() {
                    q("#tt-pageContent .tt-ajax-tabs").each(function() {
                        q(this).removeAttr("style");
                        var e = q(this).innerHeight();
                        q(this).css({ height: e });
                    });
                }, 350);
            }
            q("#tt-pageContent .tt-ajax-tabs").length &&
                (B.resize(
                        W(function(e) {
                            t();
                        })
                    ),
                    B.on("load", function() {
                        t();
                    }));
        })(),
        q('a[data-toggle="tab"]').length &&
        q("body").on("shown.bs.tab", 'a[data-toggle="tab"]', function(e) {
            var t = q(this).closest(".tt-ajax-tabs").find(".tab-content");
            t.length &&
                (t.fadeTo(0, 0),
                    setTimeout(function() {
                        t.fadeTo(170, 1);
                    }, 350));
            var i = q(this).data("ajax-include") || "false",
                o = q(this).attr("href") || "false";
            return (
                (o = o.replace(/#/g, "")),
                "false" === i ||
                "false" === !o ||
                q(this).hasClass("include") ||
                (q(this).addClass("include"),
                    q.ajax({
                        url: i,
                        success: function(e) {
                            var t = q(e),
                                i = q("#" + o);
                            i.append(t), q("#tt-pageContent .js-accordeon:not(.init-accordeon)").accordeon();
                            var n = i.closest(".tt-ajax-tabs"),
                                s = n.innerHeight();
                            setTimeout(function() {
                                n.removeAttr("style");
                                var e = n.innerHeight();
                                e < s && n.css({ height: e });
                            }, 1e3);
                        },
                    })), !1
            );
        });



    if ($(window).width() < 768) {
        $('.mainSlider-wrapper').html(
            $(this).remove()
        );
        var mobileMenuContent = $('.mainSlider-mobile').html();
        $('.mainSlider-wrapper').append(mobileMenuContent);

        var mobileMenuContent = $('.header-content-mobile').html();
        $('#entrypoint-objects').append(mobileMenuContent);
    }


    $('.print-ele-link').on('click', function() {
        let htm = $(this).closest('.ttcoupon').clone()
        let couponModal = $('#couponForm')
        couponModal.find('.modal-body').html(htm)
        couponModal.find('.print-ele-link').replaceWith('')
        couponModal.modal('show');
    })

    $(document).on('click', '#btn_save_and_close_for_ele', function() {
        PrintElementor()
    })

    function PrintElementor() {
        var mywindow = window.open('', 'PRINT', 'height=400,width=550');
        mywindow.document.write('<html><head>');
        mywindow.document.write('<style type="text/css">');
        mywindow.document.write('.ttcoupon{margin-top:8px;padding:0px;position:relative;background-color:#fff;}.ttcoupon .ttcoupon-holder-top:after,.ttcoupon .ttcoupon-holder-top:before{content:"";width:2px;height:100%;position:absolute;top:0;}.ttcoupon .ttcoupon-holder-top:before {left:0;}.ttcoupon .ttcoupon-holder-top:after {right:0;}.ttcoupon-holder-bottom,.ttcoupon-holder-top {display:-webkit-box;display:-ms-flexbox;display:flex; -webkit-box-orient:horizontal;-webkit-box-direction:normal; -ms-flex-direction:row;flex-direction:row; -ms-flex-wrap:nowrap;flex-wrap: nowrap;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-ms-flex-line-pack:center;align-content:center;-webkit-box-align:center; -ms-flex-align:center;align-items:center;}.ttcoupon-holder-bottom> :first-child,.ttcoupon-holder-top> :first-child {padding-right: 5px;}.ttcoupon-holder-bottom> :last-child,.ttcoupon-holder-top> :last-child {padding-left:5px;}.ttcoupon-holder-top {min-height:70px;background-color:#f1f4f1;padding: 10px 20px;}.ttcoupon-holder-center{display:-webkit-box;display: -ms-flexbox;display:flex; -webkit-box-orient:horizontal; -webkit-box-direction:normal;-ms-flex-direction:row; flex-direction:row; -ms-flex-wrap:nowrap; flex-wrap:nowrap;-webkit-box-pack:start; -ms-flex-pack: start; justify-content:flex-start; -ms-flex-line-pack:center;align-content:center; -webkit-box-align:center;-ms-flex-align:center; align-items:center;position:relative;margin-left:0;margin-right: 0;}.ttcoupon-holder-center> :first-child { width:46%;}.ttcoupon-holder-center> :first-child a {color:#7b7b7b;}.ttcoupon-holder-center> :first-child a:hover {color:#52b765;}.ttcoupon-holder-center>:last-child {position:relative; width:54%; background-color:#52b765;color: #fff; padding:37px 30px 30px 10px;text-align:right;}.ttcoupon-holder-center .ttcoupon-text01 {font-size:50px;line-height:46px; font-family:Poppins,sans-serif;font-weight: 600; color:#fff; position:relative;}.ttcoupon-holder-center .ttcoupon-text02 {font-size:20px; line-height:30px; font-family:Poppins,sans-serif; font-weight:600; color:#fff; margin-top:5px; position: relative;}.ttcoupon-holder-bottom {min-height:70px; background-color:#f1f4f1; padding:10px 20px;}.ttcoupon-logo {font-family:Poppins, sans-serif;font-size:30px;font-weight:600; color:#323232;}.ttcoupon-logo .tt-icon {font-size:25px;display:inline-block;margin-right:7px;position:relative; top: -1px; color:#52b765;}.ttcoupon-link {color:#7b7b7b;}.ttcoupon-link [class^="icons-"] {font-size:20px;margin-right:7px; color:#52b765; display:inline-block; position:relative;top:2px;}.ttcoupon-link:hover {color:#52b765;} @media print {.ttcoupon{margin-top:8px;padding:0px;position:relative;background-color:#fff !important;-webkit-print-color-adjust: exact;}.ttcoupon .ttcoupon-holder-top:after,.ttcoupon .ttcoupon-holder-top:before{content:"";width: 2px;height: 100%;position: absolute;top: 0;}.ttcoupon .ttcoupon-holder-top:before {left:0;}.ttcoupon .ttcoupon-holder-top:after {right: 0;}.ttcoupon-holder-bottom,.ttcoupon-holder-top {display: -webkit-box;display: -ms-flexbox;display:flex; -webkit-box-orient:horizontal;-webkit-box-direction:normal; -ms-flex-direction:row;flex-direction:row; -ms-flex-wrap: nowrap;flex-wrap: nowrap;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-ms-flex-line-pack:center;align-content:center;-webkit-box-align:center; -ms-flex-align:center;align-items: center;}.ttcoupon-holder-bottom> :first-child,.ttcoupon-holder-top> :first-child {padding-right:5px;}.ttcoupon-holder-bottom> :last-child,.ttcoupon-holder-top> :last-child {padding-left: 5px;}.ttcoupon-holder-top {min-height:70px;background-color:#f1f4f1;padding:10px 20px;}.ttcoupon-holder-center {display:-webkit-box;display: -ms-flexbox;display:flex; -webkit-box-orient:horizontal; -webkit-box-direction:normal;-ms-flex-direction:row; flex-direction:row; -ms-flex-wrap:nowrap; flex-wrap:nowrap;-webkit-box-pack:start; -ms-flex-pack: start; justify-content: flex-start; -ms-flex-line-pack:center;align-content:center; -webkit-box-align:center;-ms-flex-align:center; align-items:center; position:relative;margin-left: 0;margin-right: 0;}.ttcoupon-holder-center> :first-child { width:46%;}.ttcoupon-holder-center> :first-child a {color:#7b7b7b;}.ttcoupon-holder-center> :first-child a:hover {color: #52b765;}.ttcoupon-holder-center> :last-child { position:relative; width:54%; background-color:#52b765 !important;-webkit-print-color-adjust: exact;color:#fff; padding:37px 30px 30px 10px;text-align:right;}.ttcoupon-holder-center .ttcoupon-text01 {font-size:50px;line-height:46px; font-family:Poppins, sans-serif;font-weight: 600; color:#fff; position:relative;}.ttcoupon-holder-center .ttcoupon-text02 {font-size:20px;line-height:30px; font-family:Poppins,sans-serif; font-weight:600; color:#fff; margin-top:5px; position:relative;}.ttcoupon-holder-bottom {min-height:70px; background-color:#f1f4f1 !important;-webkit-print-color-adjust: exact; padding:10px 20px;}.ttcoupon-logo { font-family:Poppins, sans-serif;font-size:30px;font-weight:600; color:#323232;}.ttcoupon-logo .tt-icon {font-size:25px;display:inline-block;margin-right:7px;position:relative;top:-1px;color:#52b765;}.ttcoupon-link {color:#7b7b7b;}.ttcoupon-link [class^="icons-"]{font-size:20px;margin-right:7px;color:#52b765;display:inline-block;position:relative;top:2px;}.ttcoupon-link:hover{color:#52b765;} svg {width: 0%;height: 0%;}}');
        mywindow.document.write('</style>');
        mywindow.document.write('</head><body>');
        mywindow.document.write(document.querySelector('#couponForm .ttcoupon').outerHTML);
        mywindow.document.write('</body></html>');
        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/
        mywindow.print();
        setTimeout(function() { mywindow.close(); }, 300);

        return true;
    }


})(jQuery);