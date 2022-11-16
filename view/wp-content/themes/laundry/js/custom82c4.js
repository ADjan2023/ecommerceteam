(function($) {
/* Global variables */
"use strict";

/* Initialize All Scripts */
$('body.tag').removeClass('tag');


var $document = $(document),
	$window = $(window),
	plugins = {
		parallax: $('.content--parallax, .carusel--parallax'),
		googleMap: $('#map'),
		preloader: $('.loader'),
		panel: $('.panel'),
		menu: $('nav .menu'),
		footerBubble: $('.bubbleContainer'),
		counter: $('#counterBlock'),
		animation: $('.animation'),
		servicesCarousel: $('.services-box-mobile'),
		permissionCarousel: $('.permission-box-mobile'),
		blogCarousel: $('.carousel-blog'),
		productCarousel: $('.product-box-mobile'),
		postCarousel: $('.post-carousel'),
		postGallery: $('.blog-isotope')
	}


$(document).ready(function($){
	// post isotope
	if (plugins.postGallery.length) {
		var $postgallery = plugins.postGallery;
		$postgallery.imagesLoaded(function () {
			$postgallery.isotope({
				itemSelector: '.blog-post',
				masonry: {
					gutter: 30,
					columnWidth: '.blog-post'
				}
			});
		});
	}


var pageNumber = 1;

$(document).on("click", '.post_loop_cont_wrap .ajax_load_post_btn' ,function(){ // When btn is pressed.

	pageNumber++;
	 var item;
	 var post_per_load = $( this ).data('post_per_load');
	 var rdmoreBtn = $(this);
    $( '.ajax_load_post_img' ).show(); // Disable the button, temp.
    $( rdmoreBtn ).hide(); // Disable the button, temp.

    $.ajax({
        type: "POST",
        url: ajax_posts.ajaxurl,
        data: {
			  action: 'laundry_more_post_ajax',
			  post_per_load : post_per_load,
			  pageNumber : pageNumber,
			  security:  ajax_posts.ajax_nonce_postloadmore,
		  },
		  context: document.body,
        success: function(data){
						
						$( '.ajax_load_post_img' ).hide();
						$( rdmoreBtn ).show();
				if( data == '' ){
					$( rdmoreBtn ).hide();
				}

			  $('#postPreload').append(data);
			  if (plugins.postGallery.length) {
					$('#postPreload > div').each(function () {
						item = $(this);
						$postgallery.append(item).isotope('appended', item);
					});
            }
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) {
            alert(errorThrown);
        }

    });
    return false;
});


$('.calendar_wrap').addClass('calendar');
$('.calendar_wrap table caption').addClass('calendar__header');
$('.calendar_wrap table #today').addClass('selected');
$('.widget ul, .single_pg_cont .post-teaser ul').addClass('category-list');
$('.service-pages .widget ul, .single_pg_cont .post-teaser ul').addClass('category-list-aside');
$('.service-pages .widget ul, .single_pg_cont .post-teaser ul').removeClass('category-list');
$('.widget ul').removeClass('menu');
$('.widget select,.widget input[type="text"],.widget input[type="email"],.widget input[type="password"]').addClass('form-control');
$('.widget button, .widget input[type="submit"]').addClass('btn');
$('.single_pg_cont table').addClass('table');






	$window.on('load', function () {

		function createMap( id, mapZoom, lat, lon ) {
			// Create google map
			// Basic options for a simple Google Map
			// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
			var mapOptions = {
				// How zoomed in you want the map to start at (always required)
				zoom: mapZoom,
				scrollwheel: false,
				// The latitude and longitude to center the map (always required)
				center: new google.maps.LatLng(lat, lon), // Glasgow
				// How you would like to style the map. 
				// This is where you would paste any style found on Snazzy Maps.
				styles: [{
					"featureType": "water",
					"elementType": "geometry.fill",
					"stylers": [{
						"color": "#d1d1d1"
					}]
				}, {
					"featureType": "transit",
					"stylers": [{
						"color": "#808080"
					}, {
						"visibility": "off"
					}]
				}, {
					"featureType": "road.highway",
					"elementType": "geometry.stroke",
					"stylers": [{
						"visibility": "on"
					}, {
						"color": "#d1d1d1"
					}]
				}, {
					"featureType": "road.highway",
					"elementType": "geometry.fill",
					"stylers": [{
						"color": "#d1d1d1"
					}]
				}, {
					"featureType": "road.local",
					"elementType": "geometry.fill",
					"stylers": [{
						"visibility": "on"
					}, {
						"color": "#ffffff"
					}, {
						"weight": 1.8
					}]
				}, {
					"featureType": "road.local",
					"elementType": "geometry.stroke",
					"stylers": [{
						"color": "#d7d7d7"
					}]
				}, {
					"featureType": "poi",
					"elementType": "geometry.fill",
					"stylers": [{
						"visibility": "on"
					}, {
						"color": "#ebebeb"
					}]
				}, {
					"featureType": "administrative",
					"elementType": "geometry",
					"stylers": [{
						"color": "#d1d1d1"
					}]
				}, {
					"featureType": "road.arterial",
					"elementType": "geometry.fill",
					"stylers": [{
						"color": "#ffffff"
					}]
				}, {
					"featureType": "road.arterial",
					"elementType": "geometry.fill",
					"stylers": [{
						"color": "#ffffff"
					}]
				}, {
					"featureType": "landscape",
					"elementType": "geometry.fill",
					"stylers": [{
						"visibility": "on"
					}, {
						"color": "#fafafa"
					}]
				}, {
					"featureType": "road",
					"elementType": "labels.text.fill",
					"stylers": [{
						"color": "#d6d6d6"
					}]
				}, {
					"featureType": "administrative",
					"elementType": "labels.text.fill",
					"stylers": [{
						"visibility": "on"
					}, {
						"color": "#bfbfbf"
					}]
				}, {
					"featureType": "poi",
					"elementType": "labels.icon",
					"stylers": [{
						"visibility": "off"
					}]
				}, {
					"featureType": "poi",
					"elementType": "labels",
					"stylers": [{
						"visibility": "off"
					}]
				}, {
					"featureType": "road.arterial",
					"elementType": "geometry.stroke",
					"stylers": [{
						"color": "#d6d6d6"
					}]
				}, {
					"featureType": "road",
					"elementType": "labels.icon",
					"stylers": [{
						"visibility": "off"
					}]
				}, {}, {
					"featureType": "poi",
					"elementType": "geometry.fill",
					"stylers": [{
						"color": "#f1f1f1"
					}]
				}]
			};
			// Get the HTML DOM element that will contain your map 
			// We are using a div with id="map" seen below in the <body>
			var mapElement = document.getElementById(id);
			// Create the Google Map using our element and options defined above
			var map = new google.maps.Map(mapElement, mapOptions);
			var image = 'images/map-marker.png';
			// Let's also add a marker while we're at it
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(55.8610112, -4.2547319),
				map: map,
				icon: image
			});

		}

	});





});

$(document).ready(function(e) {
        
    //mutation event for rtl
    if(e('body').hasClass('rtl')){
        var $targets = document.querySelectorAll('.vc_row[data-vc-full-width]');
		NodeList.prototype.forEach = Array.prototype.forEach;
        $targets.forEach(function($target){
            var $config = { attributes: true, childList: true, characterData: true };
            var observer = new MutationObserver(function(mutations) {
              mutations.forEach(function(mutation) {
                if(mutation.attributeName == 'style' && $target.style.left.indexOf('-') != -1){
                    var $right = $target.style.left;
                    $target.style.left = 'auto';
                    $target.style.right = $right;
                }
              });
            });
            observer.observe($target, $config);
        });
    }
});
		

})(jQuery);

