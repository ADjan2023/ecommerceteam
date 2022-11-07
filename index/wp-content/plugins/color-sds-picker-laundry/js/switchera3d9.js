(function($) {

    /*
    var t;
    !(function(t) {
        "use strict";
        "function" == typeof define && define.amd ? define(["jquery"], t) : "undefined" != typeof exports ? (module.exports = t(require("jquery"))) : t(jQuery);
    })

    var templateUrl = color_ajax_object.site_url;

    $(".tt-colorswatch-btn").on("click", function() {
        $(".tt-colorswatch-btn").prev().toggleClass("tt-open-swatch");
    });

    $(".js-swatch-color").on("click", function(t) {
        var e = $(this).attr("data-color");
        null != e ? $('link[id*="colorswatch-style-color-css"]').attr("href", templateUrl + "/wp-content/plugins/color-sds-picker-laundry/css/color/style-color-0" + e + ".css") : $('link[href*="css/style"]').attr("href", templateUrl + "/wp-content/plugins/color-sds-picker-laundry/css/style.css"),
            $(".js-swatch-color").removeClass("active"),
            $(this).toggleClass("active"),
            t.preventDefault();
    });
    */

    var e;
    !(function(e) {
        "use strict";
        "function" == typeof define && define.amd ? define(["jquery"], e) : "undefined" != typeof exports ? (module.exports = e(require("jquery"))) : e(jQuery);
    })

    var templateUrl = color_ajax_object.site_url;

    (H = jQuery)(".tt-colorswatch-btn").on("click", function(e) {
            return H(this).closest(".tt-colorswatch").toggleClass("tt-open-swatch"), !1;
        }),
        H(".js-swatch-color").on("click", function(e) {
            var t = H(this).attr("data-color"),
                i = H(this).attr("data-img");
            H("#js-stepbox__nav .stepbox-dots__line02").css("background-image", "url(" + i + ")"),
                null != t ? H('link[id*="colorswatch-style-color-css').attr("href", templateUrl + "/wp-content/plugins/color-sds-picker-laundry/css/color/style-color-0" + t + ".css") : H('link[href*="css/style"]').attr("href", templateUrl + "/wp-content/plugins/color-sds-picker/css/style.css"),
                H(".js-swatch-color").removeClass("active"),
                H(this).toggleClass("active"),
                e.preventDefault();
        });



})(jQuery);