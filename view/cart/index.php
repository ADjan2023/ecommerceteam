<?php 
session_start();
$link;
$linkdash;
if (empty($_SESSION['id']) and empty($_SESSION['name']) and empty($_SESSION['email']) ) {
	$link="../login/login.php";
	$linkdash="../login/login.php";
}
else{
	$link="cart/index.php";
	$linkdash="dash/dashboard.php";
}
?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from smartdata.tonytemplates.com/laundry-v2/demo2/cart/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 11:08:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" href="../wp-content/themes/laundry/images/fav.ico" sizes="16x16" />
	<meta name='robots' content='noindex, follow' />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- This site is optimized with the Yoast SEO plugin v19.5.1 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Cart - Laundry</title>
	<link rel="canonical" href="index.php" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Cart - Laundry" />
	<meta property="og:url" content="index.php" />
	<meta property="og:site_name" content="Laundry" />
	<meta property="article:modified_time" content="2020-12-01T09:25:54+00:00" />
	<meta property="og:image" content="../wp-content/uploads/sites/2/2020/11/subtitle-wrapper01.jpg" />
	<meta property="og:image:width" content="1920" />
	<meta property="og:image:height" content="288" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json"
		class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/cart/","url":"https://smartdata.tonytemplates.com/laundry-v2/demo2/cart/","name":"Cart - Laundry","isPartOf":{"@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/#website"},"primaryImageOfPage":{"@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/cart/#primaryimage"},"image":{"@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/cart/#primaryimage"},"thumbnailUrl":"https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/subtitle-wrapper01.jpg","datePublished":"2020-11-25T08:37:00+00:00","dateModified":"2020-12-01T09:25:54+00:00","breadcrumb":{"@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/cart/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://smartdata.tonytemplates.com/laundry-v2/demo2/cart/"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/cart/#primaryimage","url":"https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/subtitle-wrapper01.jpg","contentUrl":"https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/subtitle-wrapper01.jpg","width":1920,"height":288},{"@type":"BreadcrumbList","@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/cart/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://smartdata.tonytemplates.com/laundry-v2/demo2/"},{"@type":"ListItem","position":2,"name":"Cart"}]},{"@type":"WebSite","@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/#website","url":"https://smartdata.tonytemplates.com/laundry-v2/demo2/","name":"Laundry","description":"Just another Laundry & Dry Cleaning Sites site","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://smartdata.tonytemplates.com/laundry-v2/demo2/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"}]}</script>
	<!-- / Yoast SEO plugin. -->


	<link rel='dns-prefetch' href='http://maps.googleapis.com/' />
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel='dns-prefetch' href='http://s.w.org/' />
	<link rel="alternate" type="application/rss+xml" title="Laundry &raquo; Feed" href="../feed/index.php" />
	<link rel="alternate" type="application/rss+xml" title="Laundry &raquo; Comments Feed"
		href="../comments/feed/index.php" />
	<script type="text/javascript">
		window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/smartdata.tonytemplates.com\/laundry-v2\/demo2\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0.3" } };
		/*! This file is auto-generated */
		!function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s(e, t) { var a = String.fromCharCode, e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL()); return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL() } function c(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (!p || !p.fillText) return !1; switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]); case "emoji": return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999]) }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji))) }(window, document, window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css'
		href='../wp-includes/css/dist/block-library/style.min1eb7.css?ver=6.0.3' type='text/css' media='all' />
	<style id='wp-block-library-theme-inline-css' type='text/css'>
		.wp-block-audio figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-audio figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-code {
			border: 1px solid #ccc;
			border-radius: 4px;
			font-family: Menlo, Consolas, monaco, monospace;
			padding: .8em 1em
		}

		.wp-block-embed figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-embed figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.blocks-gallery-caption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .blocks-gallery-caption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-image figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-image figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-pullquote {
			border-top: 4px solid;
			border-bottom: 4px solid;
			margin-bottom: 1.75em;
			color: currentColor
		}

		.wp-block-pullquote__citation,
		.wp-block-pullquote cite,
		.wp-block-pullquote footer {
			color: currentColor;
			text-transform: uppercase;
			font-size: .8125em;
			font-style: normal
		}

		.wp-block-quote {
			border-left: .25em solid;
			margin: 0 0 1.75em;
			padding-left: 1em
		}

		.wp-block-quote cite,
		.wp-block-quote footer {
			color: currentColor;
			font-size: .8125em;
			position: relative;
			font-style: normal
		}

		.wp-block-quote.has-text-align-right {
			border-left: none;
			border-right: .25em solid;
			padding-left: 0;
			padding-right: 1em
		}

		.wp-block-quote.has-text-align-center {
			border: none;
			padding-left: 0
		}

		.wp-block-quote.is-large,
		.wp-block-quote.is-style-large,
		.wp-block-quote.is-style-plain {
			border: none
		}

		.wp-block-search .wp-block-search__label {
			font-weight: 700
		}

		:where(.wp-block-group.has-background) {
			padding: 1.25em 2.375em
		}

		.wp-block-separator.has-css-opacity {
			opacity: .4
		}

		.wp-block-separator {
			border: none;
			border-bottom: 2px solid;
			margin-left: auto;
			margin-right: auto
		}

		.wp-block-separator.has-alpha-channel-opacity {
			opacity: 1
		}

		.wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
			width: 100px
		}

		.wp-block-separator.has-background:not(.is-style-dots) {
			border-bottom: none;
			height: 1px
		}

		.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
			height: 2px
		}

		.wp-block-table thead {
			border-bottom: 3px solid
		}

		.wp-block-table tfoot {
			border-top: 3px solid
		}

		.wp-block-table td,
		.wp-block-table th {
			padding: .5em;
			border: 1px solid;
			word-break: normal
		}

		.wp-block-table figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-table figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-video figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-video figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-template-part.has-background {
			padding: 1.25em 2.375em;
			margin-top: 0;
			margin-bottom: 0
		}
	</style>
	<link rel='stylesheet' id='wc-blocks-vendors-style-css'
		href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style8c3f.css?ver=8.0.0'
		type='text/css' media='all' />
	<link rel='stylesheet' id='wc-blocks-style-css'
		href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style8c3f.css?ver=8.0.0'
		type='text/css' media='all' />
	<style id='global-styles-inline-css' type='text/css'>
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--color--strong-yellow: #f7bd00;
			--wp--preset--color--strong-white: #fff;
			--wp--preset--color--light-black: #242424;
			--wp--preset--color--very-light-gray: #797979;
			--wp--preset--color--very-dark-black: #000000;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
			--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
			--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
			--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
			--wp--preset--duotone--midnight: url('#wp-duotone-midnight');
			--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
			--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
			--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
			--wp--preset--font-size--small: 10px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 24px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--font-size--normal: 15px;
			--wp--preset--font-size--huge: 36px;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}
	</style>
	<style id='extendify-gutenberg-patterns-and-templates-utilities-inline-css' type='text/css'>
		.ext-absolute {
			position: absolute !important
		}

		.ext-relative {
			position: relative !important
		}

		.ext-top-base {
			top: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-top-lg {
			top: var(--extendify--spacing--large, 3rem) !important
		}

		.ext--top-base {
			top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
		}

		.ext--top-lg {
			top: calc(var(--extendify--spacing--large, 3rem)*-1) !important
		}

		.ext-right-base {
			right: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-right-lg {
			right: var(--extendify--spacing--large, 3rem) !important
		}

		.ext--right-base {
			right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
		}

		.ext--right-lg {
			right: calc(var(--extendify--spacing--large, 3rem)*-1) !important
		}

		.ext-bottom-base {
			bottom: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-bottom-lg {
			bottom: var(--extendify--spacing--large, 3rem) !important
		}

		.ext--bottom-base {
			bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
		}

		.ext--bottom-lg {
			bottom: calc(var(--extendify--spacing--large, 3rem)*-1) !important
		}

		.ext-left-base {
			left: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-left-lg {
			left: var(--extendify--spacing--large, 3rem) !important
		}

		.ext--left-base {
			left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
		}

		.ext--left-lg {
			left: calc(var(--extendify--spacing--large, 3rem)*-1) !important
		}

		.ext-order-1 {
			order: 1 !important
		}

		.ext-order-2 {
			order: 2 !important
		}

		.ext-col-auto {
			grid-column: auto !important
		}

		.ext-col-span-1 {
			grid-column: span 1/span 1 !important
		}

		.ext-col-span-2 {
			grid-column: span 2/span 2 !important
		}

		.ext-col-span-3 {
			grid-column: span 3/span 3 !important
		}

		.ext-col-span-4 {
			grid-column: span 4/span 4 !important
		}

		.ext-col-span-5 {
			grid-column: span 5/span 5 !important
		}

		.ext-col-span-6 {
			grid-column: span 6/span 6 !important
		}

		.ext-col-span-7 {
			grid-column: span 7/span 7 !important
		}

		.ext-col-span-8 {
			grid-column: span 8/span 8 !important
		}

		.ext-col-span-9 {
			grid-column: span 9/span 9 !important
		}

		.ext-col-span-10 {
			grid-column: span 10/span 10 !important
		}

		.ext-col-span-11 {
			grid-column: span 11/span 11 !important
		}

		.ext-col-span-12 {
			grid-column: span 12/span 12 !important
		}

		.ext-col-span-full {
			grid-column: 1/-1 !important
		}

		.ext-col-start-1 {
			grid-column-start: 1 !important
		}

		.ext-col-start-2 {
			grid-column-start: 2 !important
		}

		.ext-col-start-3 {
			grid-column-start: 3 !important
		}

		.ext-col-start-4 {
			grid-column-start: 4 !important
		}

		.ext-col-start-5 {
			grid-column-start: 5 !important
		}

		.ext-col-start-6 {
			grid-column-start: 6 !important
		}

		.ext-col-start-7 {
			grid-column-start: 7 !important
		}

		.ext-col-start-8 {
			grid-column-start: 8 !important
		}

		.ext-col-start-9 {
			grid-column-start: 9 !important
		}

		.ext-col-start-10 {
			grid-column-start: 10 !important
		}

		.ext-col-start-11 {
			grid-column-start: 11 !important
		}

		.ext-col-start-12 {
			grid-column-start: 12 !important
		}

		.ext-col-start-13 {
			grid-column-start: 13 !important
		}

		.ext-col-start-auto {
			grid-column-start: auto !important
		}

		.ext-col-end-1 {
			grid-column-end: 1 !important
		}

		.ext-col-end-2 {
			grid-column-end: 2 !important
		}

		.ext-col-end-3 {
			grid-column-end: 3 !important
		}

		.ext-col-end-4 {
			grid-column-end: 4 !important
		}

		.ext-col-end-5 {
			grid-column-end: 5 !important
		}

		.ext-col-end-6 {
			grid-column-end: 6 !important
		}

		.ext-col-end-7 {
			grid-column-end: 7 !important
		}

		.ext-col-end-8 {
			grid-column-end: 8 !important
		}

		.ext-col-end-9 {
			grid-column-end: 9 !important
		}

		.ext-col-end-10 {
			grid-column-end: 10 !important
		}

		.ext-col-end-11 {
			grid-column-end: 11 !important
		}

		.ext-col-end-12 {
			grid-column-end: 12 !important
		}

		.ext-col-end-13 {
			grid-column-end: 13 !important
		}

		.ext-col-end-auto {
			grid-column-end: auto !important
		}

		.ext-row-auto {
			grid-row: auto !important
		}

		.ext-row-span-1 {
			grid-row: span 1/span 1 !important
		}

		.ext-row-span-2 {
			grid-row: span 2/span 2 !important
		}

		.ext-row-span-3 {
			grid-row: span 3/span 3 !important
		}

		.ext-row-span-4 {
			grid-row: span 4/span 4 !important
		}

		.ext-row-span-5 {
			grid-row: span 5/span 5 !important
		}

		.ext-row-span-6 {
			grid-row: span 6/span 6 !important
		}

		.ext-row-span-full {
			grid-row: 1/-1 !important
		}

		.ext-row-start-1 {
			grid-row-start: 1 !important
		}

		.ext-row-start-2 {
			grid-row-start: 2 !important
		}

		.ext-row-start-3 {
			grid-row-start: 3 !important
		}

		.ext-row-start-4 {
			grid-row-start: 4 !important
		}

		.ext-row-start-5 {
			grid-row-start: 5 !important
		}

		.ext-row-start-6 {
			grid-row-start: 6 !important
		}

		.ext-row-start-7 {
			grid-row-start: 7 !important
		}

		.ext-row-start-auto {
			grid-row-start: auto !important
		}

		.ext-row-end-1 {
			grid-row-end: 1 !important
		}

		.ext-row-end-2 {
			grid-row-end: 2 !important
		}

		.ext-row-end-3 {
			grid-row-end: 3 !important
		}

		.ext-row-end-4 {
			grid-row-end: 4 !important
		}

		.ext-row-end-5 {
			grid-row-end: 5 !important
		}

		.ext-row-end-6 {
			grid-row-end: 6 !important
		}

		.ext-row-end-7 {
			grid-row-end: 7 !important
		}

		.ext-row-end-auto {
			grid-row-end: auto !important
		}

		.ext-m-0:not([style*=margin]) {
			margin: 0 !important
		}

		.ext-m-auto:not([style*=margin]) {
			margin: auto !important
		}

		.ext-m-base:not([style*=margin]) {
			margin: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-m-lg:not([style*=margin]) {
			margin: var(--extendify--spacing--large, 3rem) !important
		}

		.ext--m-base:not([style*=margin]) {
			margin: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
		}

		.ext--m-lg:not([style*=margin]) {
			margin: calc(var(--extendify--spacing--large, 3rem)*-1) !important
		}

		.ext-mx-0:not([style*=margin]) {
			margin-left: 0 !important;
			margin-right: 0 !important
		}

		.ext-mx-auto:not([style*=margin]) {
			margin-left: auto !important;
			margin-right: auto !important
		}

		.ext-mx-base:not([style*=margin]) {
			margin-left: var(--wp--style--block-gap, 1.75rem) !important;
			margin-right: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-mx-lg:not([style*=margin]) {
			margin-left: var(--extendify--spacing--large, 3rem) !important;
			margin-right: var(--extendify--spacing--large, 3rem) !important
		}

		.ext--mx-base:not([style*=margin]) {
			margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
			margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
		}

		.ext--mx-lg:not([style*=margin]) {
			margin-left: calc(var(--extendify--spacing--large, 3rem)*-1) !important;
			margin-right: calc(var(--extendify--spacing--large, 3rem)*-1) !important
		}

		.ext-my-0:not([style*=margin]) {
			margin-bottom: 0 !important;
			margin-top: 0 !important
		}

		.ext-my-auto:not([style*=margin]) {
			margin-bottom: auto !important;
			margin-top: auto !important
		}

		.ext-my-base:not([style*=margin]) {
			margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
			margin-top: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-my-lg:not([style*=margin]) {
			margin-bottom: var(--extendify--spacing--large, 3rem) !important;
			margin-top: var(--extendify--spacing--large, 3rem) !important
		}

		.ext--my-base:not([style*=margin]) {
			margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
			margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
		}

		.ext--my-lg:not([style*=margin]) {
			margin-bottom: calc(var(--extendify--spacing--large, 3rem)*-1) !important;
			margin-top: calc(var(--extendify--spacing--large, 3rem)*-1) !important
		}

		.ext-mt-0:not([style*=margin]) {
			margin-top: 0 !important
		}

		.ext-mt-auto:not([style*=margin]) {
			margin-top: auto !important
		}

		.ext-mt-base:not([style*=margin]) {
			margin-top: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-mt-lg:not([style*=margin]) {
			margin-top: var(--extendify--spacing--large, 3rem) !important
		}

		.ext--mt-base:not([style*=margin]) {
			margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
		}

		.ext--mt-lg:not([style*=margin]) {
			margin-top: calc(var(--extendify--spacing--large, 3rem)*-1) !important
		}

		.ext-mr-0:not([style*=margin]) {
			margin-right: 0 !important
		}

		.ext-mr-auto:not([style*=margin]) {
			margin-right: auto !important
		}

		.ext-mr-base:not([style*=margin]) {
			margin-right: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-mr-lg:not([style*=margin]) {
			margin-right: var(--extendify--spacing--large, 3rem) !important
		}

		.ext--mr-base:not([style*=margin]) {
			margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
		}

		.ext--mr-lg:not([style*=margin]) {
			margin-right: calc(var(--extendify--spacing--large, 3rem)*-1) !important
		}

		.ext-mb-0:not([style*=margin]) {
			margin-bottom: 0 !important
		}

		.ext-mb-auto:not([style*=margin]) {
			margin-bottom: auto !important
		}

		.ext-mb-base:not([style*=margin]) {
			margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-mb-lg:not([style*=margin]) {
			margin-bottom: var(--extendify--spacing--large, 3rem) !important
		}

		.ext--mb-base:not([style*=margin]) {
			margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
		}

		.ext--mb-lg:not([style*=margin]) {
			margin-bottom: calc(var(--extendify--spacing--large, 3rem)*-1) !important
		}

		.ext-ml-0:not([style*=margin]) {
			margin-left: 0 !important
		}

		.ext-ml-auto:not([style*=margin]) {
			margin-left: auto !important
		}

		.ext-ml-base:not([style*=margin]) {
			margin-left: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-ml-lg:not([style*=margin]) {
			margin-left: var(--extendify--spacing--large, 3rem) !important
		}

		.ext--ml-base:not([style*=margin]) {
			margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
		}

		.ext--ml-lg:not([style*=margin]) {
			margin-left: calc(var(--extendify--spacing--large, 3rem)*-1) !important
		}

		.ext-block {
			display: block !important
		}

		.ext-inline-block {
			display: inline-block !important
		}

		.ext-inline {
			display: inline !important
		}

		.ext-flex {
			display: flex !important
		}

		.ext-inline-flex {
			display: inline-flex !important
		}

		.ext-grid {
			display: grid !important
		}

		.ext-inline-grid {
			display: inline-grid !important
		}

		.ext-hidden {
			display: none !important
		}

		.ext-w-auto {
			width: auto !important
		}

		.ext-w-full {
			width: 100% !important
		}

		.ext-max-w-full {
			max-width: 100% !important
		}

		.ext-flex-1 {
			flex: 1 1 0% !important
		}

		.ext-flex-auto {
			flex: 1 1 auto !important
		}

		.ext-flex-initial {
			flex: 0 1 auto !important
		}

		.ext-flex-none {
			flex: none !important
		}

		.ext-flex-shrink-0 {
			flex-shrink: 0 !important
		}

		.ext-flex-shrink {
			flex-shrink: 1 !important
		}

		.ext-flex-grow-0 {
			flex-grow: 0 !important
		}

		.ext-flex-grow {
			flex-grow: 1 !important
		}

		.ext-list-none {
			list-style-type: none !important
		}

		.ext-grid-cols-1 {
			grid-template-columns: repeat(1, minmax(0, 1fr)) !important
		}

		.ext-grid-cols-2 {
			grid-template-columns: repeat(2, minmax(0, 1fr)) !important
		}

		.ext-grid-cols-3 {
			grid-template-columns: repeat(3, minmax(0, 1fr)) !important
		}

		.ext-grid-cols-4 {
			grid-template-columns: repeat(4, minmax(0, 1fr)) !important
		}

		.ext-grid-cols-5 {
			grid-template-columns: repeat(5, minmax(0, 1fr)) !important
		}

		.ext-grid-cols-6 {
			grid-template-columns: repeat(6, minmax(0, 1fr)) !important
		}

		.ext-grid-cols-7 {
			grid-template-columns: repeat(7, minmax(0, 1fr)) !important
		}

		.ext-grid-cols-8 {
			grid-template-columns: repeat(8, minmax(0, 1fr)) !important
		}

		.ext-grid-cols-9 {
			grid-template-columns: repeat(9, minmax(0, 1fr)) !important
		}

		.ext-grid-cols-10 {
			grid-template-columns: repeat(10, minmax(0, 1fr)) !important
		}

		.ext-grid-cols-11 {
			grid-template-columns: repeat(11, minmax(0, 1fr)) !important
		}

		.ext-grid-cols-12 {
			grid-template-columns: repeat(12, minmax(0, 1fr)) !important
		}

		.ext-grid-cols-none {
			grid-template-columns: none !important
		}

		.ext-grid-rows-1 {
			grid-template-rows: repeat(1, minmax(0, 1fr)) !important
		}

		.ext-grid-rows-2 {
			grid-template-rows: repeat(2, minmax(0, 1fr)) !important
		}

		.ext-grid-rows-3 {
			grid-template-rows: repeat(3, minmax(0, 1fr)) !important
		}

		.ext-grid-rows-4 {
			grid-template-rows: repeat(4, minmax(0, 1fr)) !important
		}

		.ext-grid-rows-5 {
			grid-template-rows: repeat(5, minmax(0, 1fr)) !important
		}

		.ext-grid-rows-6 {
			grid-template-rows: repeat(6, minmax(0, 1fr)) !important
		}

		.ext-grid-rows-none {
			grid-template-rows: none !important
		}

		.ext-flex-row {
			flex-direction: row !important
		}

		.ext-flex-row-reverse {
			flex-direction: row-reverse !important
		}

		.ext-flex-col {
			flex-direction: column !important
		}

		.ext-flex-col-reverse {
			flex-direction: column-reverse !important
		}

		.ext-flex-wrap {
			flex-wrap: wrap !important
		}

		.ext-flex-wrap-reverse {
			flex-wrap: wrap-reverse !important
		}

		.ext-flex-nowrap {
			flex-wrap: nowrap !important
		}

		.ext-items-start {
			align-items: flex-start !important
		}

		.ext-items-end {
			align-items: flex-end !important
		}

		.ext-items-center {
			align-items: center !important
		}

		.ext-items-baseline {
			align-items: baseline !important
		}

		.ext-items-stretch {
			align-items: stretch !important
		}

		.ext-justify-start {
			justify-content: flex-start !important
		}

		.ext-justify-end {
			justify-content: flex-end !important
		}

		.ext-justify-center {
			justify-content: center !important
		}

		.ext-justify-between {
			justify-content: space-between !important
		}

		.ext-justify-around {
			justify-content: space-around !important
		}

		.ext-justify-evenly {
			justify-content: space-evenly !important
		}

		.ext-justify-items-start {
			justify-items: start !important
		}

		.ext-justify-items-end {
			justify-items: end !important
		}

		.ext-justify-items-center {
			justify-items: center !important
		}

		.ext-justify-items-stretch {
			justify-items: stretch !important
		}

		.ext-gap-0 {
			gap: 0 !important
		}

		.ext-gap-base {
			gap: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-gap-lg {
			gap: var(--extendify--spacing--large, 3rem) !important
		}

		.ext-gap-x-0 {
			-moz-column-gap: 0 !important;
			column-gap: 0 !important
		}

		.ext-gap-x-base {
			-moz-column-gap: var(--wp--style--block-gap, 1.75rem) !important;
			column-gap: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-gap-x-lg {
			-moz-column-gap: var(--extendify--spacing--large, 3rem) !important;
			column-gap: var(--extendify--spacing--large, 3rem) !important
		}

		.ext-gap-y-0 {
			row-gap: 0 !important
		}

		.ext-gap-y-base {
			row-gap: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-gap-y-lg {
			row-gap: var(--extendify--spacing--large, 3rem) !important
		}

		.ext-justify-self-auto {
			justify-self: auto !important
		}

		.ext-justify-self-start {
			justify-self: start !important
		}

		.ext-justify-self-end {
			justify-self: end !important
		}

		.ext-justify-self-center {
			justify-self: center !important
		}

		.ext-justify-self-stretch {
			justify-self: stretch !important
		}

		.ext-rounded-none {
			border-radius: 0 !important
		}

		.ext-rounded-full {
			border-radius: 9999px !important
		}

		.ext-rounded-t-none {
			border-top-left-radius: 0 !important;
			border-top-right-radius: 0 !important
		}

		.ext-rounded-t-full {
			border-top-left-radius: 9999px !important;
			border-top-right-radius: 9999px !important
		}

		.ext-rounded-r-none {
			border-bottom-right-radius: 0 !important;
			border-top-right-radius: 0 !important
		}

		.ext-rounded-r-full {
			border-bottom-right-radius: 9999px !important;
			border-top-right-radius: 9999px !important
		}

		.ext-rounded-b-none {
			border-bottom-left-radius: 0 !important;
			border-bottom-right-radius: 0 !important
		}

		.ext-rounded-b-full {
			border-bottom-left-radius: 9999px !important;
			border-bottom-right-radius: 9999px !important
		}

		.ext-rounded-l-none {
			border-bottom-left-radius: 0 !important;
			border-top-left-radius: 0 !important
		}

		.ext-rounded-l-full {
			border-bottom-left-radius: 9999px !important;
			border-top-left-radius: 9999px !important
		}

		.ext-rounded-tl-none {
			border-top-left-radius: 0 !important
		}

		.ext-rounded-tl-full {
			border-top-left-radius: 9999px !important
		}

		.ext-rounded-tr-none {
			border-top-right-radius: 0 !important
		}

		.ext-rounded-tr-full {
			border-top-right-radius: 9999px !important
		}

		.ext-rounded-br-none {
			border-bottom-right-radius: 0 !important
		}

		.ext-rounded-br-full {
			border-bottom-right-radius: 9999px !important
		}

		.ext-rounded-bl-none {
			border-bottom-left-radius: 0 !important
		}

		.ext-rounded-bl-full {
			border-bottom-left-radius: 9999px !important
		}

		.ext-border-0 {
			border-width: 0 !important
		}

		.ext-border-t-0 {
			border-top-width: 0 !important
		}

		.ext-border-r-0 {
			border-right-width: 0 !important
		}

		.ext-border-b-0 {
			border-bottom-width: 0 !important
		}

		.ext-border-l-0 {
			border-left-width: 0 !important
		}

		.ext-p-0:not([style*=padding]) {
			padding: 0 !important
		}

		.ext-p-base:not([style*=padding]) {
			padding: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-p-lg:not([style*=padding]) {
			padding: var(--extendify--spacing--large, 3rem) !important
		}

		.ext-px-0:not([style*=padding]) {
			padding-left: 0 !important;
			padding-right: 0 !important
		}

		.ext-px-base:not([style*=padding]) {
			padding-left: var(--wp--style--block-gap, 1.75rem) !important;
			padding-right: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-px-lg:not([style*=padding]) {
			padding-left: var(--extendify--spacing--large, 3rem) !important;
			padding-right: var(--extendify--spacing--large, 3rem) !important
		}

		.ext-py-0:not([style*=padding]) {
			padding-bottom: 0 !important;
			padding-top: 0 !important
		}

		.ext-py-base:not([style*=padding]) {
			padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
			padding-top: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-py-lg:not([style*=padding]) {
			padding-bottom: var(--extendify--spacing--large, 3rem) !important;
			padding-top: var(--extendify--spacing--large, 3rem) !important
		}

		.ext-pt-0:not([style*=padding]) {
			padding-top: 0 !important
		}

		.ext-pt-base:not([style*=padding]) {
			padding-top: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-pt-lg:not([style*=padding]) {
			padding-top: var(--extendify--spacing--large, 3rem) !important
		}

		.ext-pr-0:not([style*=padding]) {
			padding-right: 0 !important
		}

		.ext-pr-base:not([style*=padding]) {
			padding-right: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-pr-lg:not([style*=padding]) {
			padding-right: var(--extendify--spacing--large, 3rem) !important
		}

		.ext-pb-0:not([style*=padding]) {
			padding-bottom: 0 !important
		}

		.ext-pb-base:not([style*=padding]) {
			padding-bottom: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-pb-lg:not([style*=padding]) {
			padding-bottom: var(--extendify--spacing--large, 3rem) !important
		}

		.ext-pl-0:not([style*=padding]) {
			padding-left: 0 !important
		}

		.ext-pl-base:not([style*=padding]) {
			padding-left: var(--wp--style--block-gap, 1.75rem) !important
		}

		.ext-pl-lg:not([style*=padding]) {
			padding-left: var(--extendify--spacing--large, 3rem) !important
		}

		.ext-text-left {
			text-align: left !important
		}

		.ext-text-center {
			text-align: center !important
		}

		.ext-text-right {
			text-align: right !important
		}

		.ext-leading-none {
			line-height: 1 !important
		}

		.ext-leading-tight {
			line-height: 1.25 !important
		}

		.ext-leading-snug {
			line-height: 1.375 !important
		}

		.ext-leading-normal {
			line-height: 1.5 !important
		}

		.ext-leading-relaxed {
			line-height: 1.625 !important
		}

		.ext-leading-loose {
			line-height: 2 !important
		}

		.clip-path--rhombus img {
			-webkit-clip-path: polygon(15% 6%, 80% 29%, 84% 93%, 23% 69%);
			clip-path: polygon(15% 6%, 80% 29%, 84% 93%, 23% 69%)
		}

		.clip-path--diamond img {
			-webkit-clip-path: polygon(5% 29%, 60% 2%, 91% 64%, 36% 89%);
			clip-path: polygon(5% 29%, 60% 2%, 91% 64%, 36% 89%)
		}

		.clip-path--rhombus-alt img {
			-webkit-clip-path: polygon(14% 9%, 85% 24%, 91% 89%, 19% 76%);
			clip-path: polygon(14% 9%, 85% 24%, 91% 89%, 19% 76%)
		}

		.wp-block-columns[class*=fullwidth-cols] {
			margin-bottom: unset
		}

		.wp-block-column.editor\:pointer-events-none {
			margin-bottom: 0 !important;
			margin-top: 0 !important
		}

		.is-root-container.block-editor-block-list__layout>[data-align=full]:not(:first-of-type)>.wp-block-column.editor\:pointer-events-none,
		.is-root-container.block-editor-block-list__layout>[data-align=wide]>.wp-block-column.editor\:pointer-events-none {
			margin-top: calc(var(--wp--style--block-gap, 28px)*-1) !important
		}

		.ext .wp-block-columns .wp-block-column[style*=padding] {
			padding-left: 0 !important;
			padding-right: 0 !important
		}

		.ext .wp-block-columns+.wp-block-columns:not([class*=mt-]):not([class*=my-]):not([style*=margin]) {
			margin-top: 0 !important
		}

		[class*=fullwidth-cols] .wp-block-column:first-child,
		[class*=fullwidth-cols] .wp-block-group:first-child {
			margin-top: 0
		}

		[class*=fullwidth-cols] .wp-block-column:last-child,
		[class*=fullwidth-cols] .wp-block-group:last-child {
			margin-bottom: 0
		}

		[class*=fullwidth-cols] .wp-block-column:first-child>*,
		[class*=fullwidth-cols] .wp-block-column>:first-child {
			margin-top: 0
		}

		.ext .is-not-stacked-on-mobile .wp-block-column,
		[class*=fullwidth-cols] .wp-block-column>:last-child {
			margin-bottom: 0
		}

		.wp-block-columns[class*=fullwidth-cols]:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:last-child) {
			margin-bottom: var(--wp--style--block-gap, 1.75rem)
		}

		@media (min-width:782px) {
			.wp-block-columns[class*=fullwidth-cols]:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:last-child) {
				margin-bottom: 0
			}
		}

		.wp-block-columns[class*=fullwidth-cols].is-not-stacked-on-mobile>.wp-block-column {
			margin-bottom: 0 !important
		}

		@media (min-width:600px) and (max-width:781px) {
			.wp-block-columns[class*=fullwidth-cols]:not(.is-not-stacked-on-mobile)>.wp-block-column:nth-child(2n) {
				margin-left: var(--wp--style--block-gap, 2em)
			}
		}

		@media (max-width:781px) {
			.tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) {
				flex-wrap: wrap
			}

			.tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column,
			.tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not([style*=margin]) {
				margin-left: 0 !important
			}

			.tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
				flex-basis: 100% !important
			}
		}

		@media (max-width:1079px) {
			.desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) {
				flex-wrap: wrap
			}

			.desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column,
			.desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not([style*=margin]) {
				margin-left: 0 !important
			}

			.desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
				flex-basis: 100% !important
			}

			.desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:last-child) {
				margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
			}
		}

		.direction-rtl {
			direction: rtl
		}

		.direction-ltr {
			direction: ltr
		}

		.is-style-inline-list {
			padding-left: 0 !important
		}

		.is-style-inline-list li {
			list-style-type: none !important
		}

		@media (min-width:782px) {
			.is-style-inline-list li {
				display: inline !important;
				margin-right: var(--wp--style--block-gap, 1.75rem) !important
			}
		}

		@media (min-width:782px) {
			.is-style-inline-list li:first-child {
				margin-left: 0 !important
			}
		}

		@media (min-width:782px) {
			.is-style-inline-list li:last-child {
				margin-right: 0 !important
			}
		}

		.bring-to-front {
			position: relative;
			z-index: 10
		}

		.text-stroke {
			-webkit-text-stroke-color: var(--wp--preset--color--background)
		}

		.text-stroke,
		.text-stroke--primary {
			-webkit-text-stroke-width: var(--wp--custom--typography--text-stroke-width, 2px)
		}

		.text-stroke--primary {
			-webkit-text-stroke-color: var(--wp--preset--color--primary)
		}

		.text-stroke--secondary {
			-webkit-text-stroke-width: var(--wp--custom--typography--text-stroke-width, 2px);
			-webkit-text-stroke-color: var(--wp--preset--color--secondary)
		}

		.editor\:no-caption .block-editor-rich-text__editable {
			display: none !important
		}

		.editor\:no-inserter .wp-block-column:not(.is-selected)>.block-list-appender,
		.editor\:no-inserter .wp-block-cover__inner-container>.block-list-appender,
		.editor\:no-inserter .wp-block-group__inner-container>.block-list-appender,
		.editor\:no-inserter>.block-list-appender {
			display: none
		}

		.editor\:no-resize .components-resizable-box__handle,
		.editor\:no-resize .components-resizable-box__handle:after,
		.editor\:no-resize .components-resizable-box__side-handle:before {
			display: none;
			pointer-events: none
		}

		.editor\:no-resize .components-resizable-box__container {
			display: block
		}

		.editor\:pointer-events-none {
			pointer-events: none
		}

		.is-style-angled {
			justify-content: flex-end
		}

		.ext .is-style-angled>[class*=_inner-container],
		.is-style-angled {
			align-items: center
		}

		.is-style-angled .wp-block-cover__image-background,
		.is-style-angled .wp-block-cover__video-background {
			-webkit-clip-path: polygon(0 0, 30% 0, 50% 100%, 0 100%);
			clip-path: polygon(0 0, 30% 0, 50% 100%, 0 100%);
			z-index: 1
		}

		@media (min-width:782px) {

			.is-style-angled .wp-block-cover__image-background,
			.is-style-angled .wp-block-cover__video-background {
				-webkit-clip-path: polygon(0 0, 55% 0, 65% 100%, 0 100%);
				clip-path: polygon(0 0, 55% 0, 65% 100%, 0 100%)
			}
		}

		.has-foreground-color {
			color: var(--wp--preset--color--foreground, #000) !important
		}

		.has-foreground-background-color {
			background-color: var(--wp--preset--color--foreground, #000) !important
		}

		.has-background-color {
			color: var(--wp--preset--color--background, #fff) !important
		}

		.has-background-background-color {
			background-color: var(--wp--preset--color--background, #fff) !important
		}

		.has-primary-color {
			color: var(--wp--preset--color--primary, #4b5563) !important
		}

		.has-primary-background-color {
			background-color: var(--wp--preset--color--primary, #4b5563) !important
		}

		.has-secondary-color {
			color: var(--wp--preset--color--secondary, #9ca3af) !important
		}

		.has-secondary-background-color {
			background-color: var(--wp--preset--color--secondary, #9ca3af) !important
		}

		.ext.has-text-color h1,
		.ext.has-text-color h2,
		.ext.has-text-color h3,
		.ext.has-text-color h4,
		.ext.has-text-color h5,
		.ext.has-text-color h6,
		.ext.has-text-color p {
			color: currentColor
		}

		.has-white-color {
			color: var(--wp--preset--color--white, #fff) !important
		}

		.has-black-color {
			color: var(--wp--preset--color--black, #000) !important
		}

		.has-ext-foreground-background-color {
			background-color: var(--wp--preset--color--foreground, var(--wp--preset--color--black, #000)) !important
		}

		.has-ext-primary-background-color {
			background-color: var(--wp--preset--color--primary, var(--wp--preset--color--cyan-bluish-gray, #000)) !important
		}

		.wp-block-button__link.has-black-background-color {
			border-color: var(--wp--preset--color--black, #000)
		}

		.wp-block-button__link.has-white-background-color {
			border-color: var(--wp--preset--color--white, #fff)
		}

		.has-ext-small-font-size {
			font-size: var(--wp--preset--font-size--ext-small) !important
		}

		.has-ext-medium-font-size {
			font-size: var(--wp--preset--font-size--ext-medium) !important
		}

		.has-ext-large-font-size {
			font-size: var(--wp--preset--font-size--ext-large) !important;
			line-height: 1.2
		}

		.has-ext-x-large-font-size {
			font-size: var(--wp--preset--font-size--ext-x-large) !important;
			line-height: 1
		}

		.has-ext-xx-large-font-size {
			font-size: var(--wp--preset--font-size--ext-xx-large) !important;
			line-height: 1
		}

		.has-ext-x-large-font-size:not([style*=line-height]),
		.has-ext-xx-large-font-size:not([style*=line-height]) {
			line-height: 1.1
		}

		.ext .wp-block-group>* {
			margin-bottom: 0;
			margin-top: 0
		}

		.ext .wp-block-group>*+* {
			margin-bottom: 0
		}

		.ext .wp-block-group>*+*,
		.ext h2 {
			margin-top: var(--wp--style--block-gap, 1.75rem)
		}

		.ext h2 {
			margin-bottom: var(--wp--style--block-gap, 1.75rem)
		}

		.has-ext-x-large-font-size+h3,
		.has-ext-x-large-font-size+p {
			margin-top: .5rem
		}

		.ext .wp-block-buttons>.wp-block-button.wp-block-button__width-25 {
			min-width: 12rem;
			width: calc(25% - var(--wp--style--block-gap, .5em)*.75)
		}

		.ext .ext-grid>[class*=_inner-container] {
			display: grid
		}

		.ext>[class*=_inner-container]>.ext-grid:not([class*=columns]),
		.ext>[class*=_inner-container]>.wp-block>.ext-grid:not([class*=columns]) {
			display: initial !important
		}

		.ext .ext-grid-cols-1>[class*=_inner-container] {
			grid-template-columns: repeat(1, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-cols-2>[class*=_inner-container] {
			grid-template-columns: repeat(2, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-cols-3>[class*=_inner-container] {
			grid-template-columns: repeat(3, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-cols-4>[class*=_inner-container] {
			grid-template-columns: repeat(4, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-cols-5>[class*=_inner-container] {
			grid-template-columns: repeat(5, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-cols-6>[class*=_inner-container] {
			grid-template-columns: repeat(6, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-cols-7>[class*=_inner-container] {
			grid-template-columns: repeat(7, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-cols-8>[class*=_inner-container] {
			grid-template-columns: repeat(8, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-cols-9>[class*=_inner-container] {
			grid-template-columns: repeat(9, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-cols-10>[class*=_inner-container] {
			grid-template-columns: repeat(10, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-cols-11>[class*=_inner-container] {
			grid-template-columns: repeat(11, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-cols-12>[class*=_inner-container] {
			grid-template-columns: repeat(12, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-cols-13>[class*=_inner-container] {
			grid-template-columns: repeat(13, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-cols-none>[class*=_inner-container] {
			grid-template-columns: none !important
		}

		.ext .ext-grid-rows-1>[class*=_inner-container] {
			grid-template-rows: repeat(1, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-rows-2>[class*=_inner-container] {
			grid-template-rows: repeat(2, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-rows-3>[class*=_inner-container] {
			grid-template-rows: repeat(3, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-rows-4>[class*=_inner-container] {
			grid-template-rows: repeat(4, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-rows-5>[class*=_inner-container] {
			grid-template-rows: repeat(5, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-rows-6>[class*=_inner-container] {
			grid-template-rows: repeat(6, minmax(0, 1fr)) !important
		}

		.ext .ext-grid-rows-none>[class*=_inner-container] {
			grid-template-rows: none !important
		}

		.ext .ext-items-start>[class*=_inner-container] {
			align-items: flex-start !important
		}

		.ext .ext-items-end>[class*=_inner-container] {
			align-items: flex-end !important
		}

		.ext .ext-items-center>[class*=_inner-container] {
			align-items: center !important
		}

		.ext .ext-items-baseline>[class*=_inner-container] {
			align-items: baseline !important
		}

		.ext .ext-items-stretch>[class*=_inner-container] {
			align-items: stretch !important
		}

		.ext.wp-block-group>:last-child {
			margin-bottom: 0
		}

		.ext .wp-block-group__inner-container {
			padding: 0 !important
		}

		.ext.has-background {
			padding-left: var(--wp--style--block-gap, 1.75rem);
			padding-right: var(--wp--style--block-gap, 1.75rem)
		}

		.ext [class*=inner-container]>.alignwide [class*=inner-container],
		.ext [class*=inner-container]>[data-align=wide] [class*=inner-container] {
			max-width: var(--responsive--alignwide-width, 120rem)
		}

		.ext [class*=inner-container]>.alignwide [class*=inner-container]>*,
		.ext [class*=inner-container]>[data-align=wide] [class*=inner-container]>* {
			max-width: 100% !important
		}

		.ext .wp-block-image {
			position: relative;
			text-align: center
		}

		.ext .wp-block-image img {
			display: inline-block;
			vertical-align: middle
		}

		body {
			--extendify--spacing--large: var(--wp--custom--spacing--large, clamp(2em, 8vw, 8em));
			--wp--preset--font-size--ext-small: 1rem;
			--wp--preset--font-size--ext-medium: 1.125rem;
			--wp--preset--font-size--ext-large: clamp(1.65rem, 3.5vw, 2.15rem);
			--wp--preset--font-size--ext-x-large: clamp(3rem, 6vw, 4.75rem);
			--wp--preset--font-size--ext-xx-large: clamp(3.25rem, 7.5vw, 5.75rem);
			--wp--preset--color--black: #000;
			--wp--preset--color--white: #fff
		}

		.ext * {
			box-sizing: border-box
		}

		.block-editor-block-preview__content-iframe .ext [data-type="core/spacer"] .components-resizable-box__container {
			background: transparent !important
		}

		.block-editor-block-preview__content-iframe .ext [data-type="core/spacer"] .block-library-spacer__resize-container:before {
			display: none !important
		}

		.ext .wp-block-group__inner-container figure.wp-block-gallery.alignfull {
			margin-bottom: unset;
			margin-top: unset
		}

		.ext .alignwide {
			margin-left: auto !important;
			margin-right: auto !important
		}

		.is-root-container.block-editor-block-list__layout>[data-align=full]:not(:first-of-type)>.ext-my-0,
		.is-root-container.block-editor-block-list__layout>[data-align=wide]>.ext-my-0:not([style*=margin]) {
			margin-top: calc(var(--wp--style--block-gap, 28px)*-1) !important
		}

		.block-editor-block-preview__content-iframe .preview\:min-h-50 {
			min-height: 50vw !important
		}

		.block-editor-block-preview__content-iframe .preview\:min-h-60 {
			min-height: 60vw !important
		}

		.block-editor-block-preview__content-iframe .preview\:min-h-70 {
			min-height: 70vw !important
		}

		.block-editor-block-preview__content-iframe .preview\:min-h-80 {
			min-height: 80vw !important
		}

		.block-editor-block-preview__content-iframe .preview\:min-h-100 {
			min-height: 100vw !important
		}

		.ext-mr-0.alignfull:not([style*=margin]):not([style*=margin]) {
			margin-right: 0 !important
		}

		.ext-ml-0:not([style*=margin]):not([style*=margin]) {
			margin-left: 0 !important
		}

		.is-root-container .wp-block[data-align=full]>.ext-mx-0:not([style*=margin]):not([style*=margin]) {
			margin-left: calc(var(--wp--custom--spacing--outer, 0)*1) !important;
			margin-right: calc(var(--wp--custom--spacing--outer, 0)*1) !important;
			overflow: hidden;
			width: unset
		}

		@media (min-width:782px) {
			.tablet\:ext-absolute {
				position: absolute !important
			}

			.tablet\:ext-relative {
				position: relative !important
			}

			.tablet\:ext-top-base {
				top: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-top-lg {
				top: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext--top-base {
				top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.tablet\:ext--top-lg {
				top: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.tablet\:ext-right-base {
				right: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-right-lg {
				right: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext--right-base {
				right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.tablet\:ext--right-lg {
				right: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.tablet\:ext-bottom-base {
				bottom: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-bottom-lg {
				bottom: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext--bottom-base {
				bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.tablet\:ext--bottom-lg {
				bottom: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.tablet\:ext-left-base {
				left: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-left-lg {
				left: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext--left-base {
				left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.tablet\:ext--left-lg {
				left: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.tablet\:ext-order-1 {
				order: 1 !important
			}

			.tablet\:ext-order-2 {
				order: 2 !important
			}

			.tablet\:ext-m-0:not([style*=margin]) {
				margin: 0 !important
			}

			.tablet\:ext-m-auto:not([style*=margin]) {
				margin: auto !important
			}

			.tablet\:ext-m-base:not([style*=margin]) {
				margin: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-m-lg:not([style*=margin]) {
				margin: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext--m-base:not([style*=margin]) {
				margin: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.tablet\:ext--m-lg:not([style*=margin]) {
				margin: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.tablet\:ext-mx-0:not([style*=margin]) {
				margin-left: 0 !important;
				margin-right: 0 !important
			}

			.tablet\:ext-mx-auto:not([style*=margin]) {
				margin-left: auto !important;
				margin-right: auto !important
			}

			.tablet\:ext-mx-base:not([style*=margin]) {
				margin-left: var(--wp--style--block-gap, 1.75rem) !important;
				margin-right: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-mx-lg:not([style*=margin]) {
				margin-left: var(--extendify--spacing--large, 3rem) !important;
				margin-right: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext--mx-base:not([style*=margin]) {
				margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
				margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.tablet\:ext--mx-lg:not([style*=margin]) {
				margin-left: calc(var(--extendify--spacing--large, 3rem)*-1) !important;
				margin-right: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.tablet\:ext-my-0:not([style*=margin]) {
				margin-bottom: 0 !important;
				margin-top: 0 !important
			}

			.tablet\:ext-my-auto:not([style*=margin]) {
				margin-bottom: auto !important;
				margin-top: auto !important
			}

			.tablet\:ext-my-base:not([style*=margin]) {
				margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
				margin-top: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-my-lg:not([style*=margin]) {
				margin-bottom: var(--extendify--spacing--large, 3rem) !important;
				margin-top: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext--my-base:not([style*=margin]) {
				margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
				margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.tablet\:ext--my-lg:not([style*=margin]) {
				margin-bottom: calc(var(--extendify--spacing--large, 3rem)*-1) !important;
				margin-top: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.tablet\:ext-mt-0:not([style*=margin]) {
				margin-top: 0 !important
			}

			.tablet\:ext-mt-auto:not([style*=margin]) {
				margin-top: auto !important
			}

			.tablet\:ext-mt-base:not([style*=margin]) {
				margin-top: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-mt-lg:not([style*=margin]) {
				margin-top: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext--mt-base:not([style*=margin]) {
				margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.tablet\:ext--mt-lg:not([style*=margin]) {
				margin-top: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.tablet\:ext-mr-0:not([style*=margin]) {
				margin-right: 0 !important
			}

			.tablet\:ext-mr-auto:not([style*=margin]) {
				margin-right: auto !important
			}

			.tablet\:ext-mr-base:not([style*=margin]) {
				margin-right: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-mr-lg:not([style*=margin]) {
				margin-right: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext--mr-base:not([style*=margin]) {
				margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.tablet\:ext--mr-lg:not([style*=margin]) {
				margin-right: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.tablet\:ext-mb-0:not([style*=margin]) {
				margin-bottom: 0 !important
			}

			.tablet\:ext-mb-auto:not([style*=margin]) {
				margin-bottom: auto !important
			}

			.tablet\:ext-mb-base:not([style*=margin]) {
				margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-mb-lg:not([style*=margin]) {
				margin-bottom: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext--mb-base:not([style*=margin]) {
				margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.tablet\:ext--mb-lg:not([style*=margin]) {
				margin-bottom: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.tablet\:ext-ml-0:not([style*=margin]) {
				margin-left: 0 !important
			}

			.tablet\:ext-ml-auto:not([style*=margin]) {
				margin-left: auto !important
			}

			.tablet\:ext-ml-base:not([style*=margin]) {
				margin-left: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-ml-lg:not([style*=margin]) {
				margin-left: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext--ml-base:not([style*=margin]) {
				margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.tablet\:ext--ml-lg:not([style*=margin]) {
				margin-left: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.tablet\:ext-block {
				display: block !important
			}

			.tablet\:ext-inline-block {
				display: inline-block !important
			}

			.tablet\:ext-inline {
				display: inline !important
			}

			.tablet\:ext-flex {
				display: flex !important
			}

			.tablet\:ext-inline-flex {
				display: inline-flex !important
			}

			.tablet\:ext-grid {
				display: grid !important
			}

			.tablet\:ext-inline-grid {
				display: inline-grid !important
			}

			.tablet\:ext-hidden {
				display: none !important
			}

			.tablet\:ext-w-auto {
				width: auto !important
			}

			.tablet\:ext-w-full {
				width: 100% !important
			}

			.tablet\:ext-max-w-full {
				max-width: 100% !important
			}

			.tablet\:ext-flex-1 {
				flex: 1 1 0% !important
			}

			.tablet\:ext-flex-auto {
				flex: 1 1 auto !important
			}

			.tablet\:ext-flex-initial {
				flex: 0 1 auto !important
			}

			.tablet\:ext-flex-none {
				flex: none !important
			}

			.tablet\:ext-flex-shrink-0 {
				flex-shrink: 0 !important
			}

			.tablet\:ext-flex-shrink {
				flex-shrink: 1 !important
			}

			.tablet\:ext-flex-grow-0 {
				flex-grow: 0 !important
			}

			.tablet\:ext-flex-grow {
				flex-grow: 1 !important
			}

			.tablet\:ext-list-none {
				list-style-type: none !important
			}

			.tablet\:ext-grid-cols-1 {
				grid-template-columns: repeat(1, minmax(0, 1fr)) !important
			}

			.tablet\:ext-grid-cols-2 {
				grid-template-columns: repeat(2, minmax(0, 1fr)) !important
			}

			.tablet\:ext-grid-cols-3 {
				grid-template-columns: repeat(3, minmax(0, 1fr)) !important
			}

			.tablet\:ext-grid-cols-4 {
				grid-template-columns: repeat(4, minmax(0, 1fr)) !important
			}

			.tablet\:ext-grid-cols-5 {
				grid-template-columns: repeat(5, minmax(0, 1fr)) !important
			}

			.tablet\:ext-grid-cols-6 {
				grid-template-columns: repeat(6, minmax(0, 1fr)) !important
			}

			.tablet\:ext-grid-cols-7 {
				grid-template-columns: repeat(7, minmax(0, 1fr)) !important
			}

			.tablet\:ext-grid-cols-8 {
				grid-template-columns: repeat(8, minmax(0, 1fr)) !important
			}

			.tablet\:ext-grid-cols-9 {
				grid-template-columns: repeat(9, minmax(0, 1fr)) !important
			}

			.tablet\:ext-grid-cols-10 {
				grid-template-columns: repeat(10, minmax(0, 1fr)) !important
			}

			.tablet\:ext-grid-cols-11 {
				grid-template-columns: repeat(11, minmax(0, 1fr)) !important
			}

			.tablet\:ext-grid-cols-12 {
				grid-template-columns: repeat(12, minmax(0, 1fr)) !important
			}

			.tablet\:ext-grid-cols-none {
				grid-template-columns: none !important
			}

			.tablet\:ext-flex-row {
				flex-direction: row !important
			}

			.tablet\:ext-flex-row-reverse {
				flex-direction: row-reverse !important
			}

			.tablet\:ext-flex-col {
				flex-direction: column !important
			}

			.tablet\:ext-flex-col-reverse {
				flex-direction: column-reverse !important
			}

			.tablet\:ext-flex-wrap {
				flex-wrap: wrap !important
			}

			.tablet\:ext-flex-wrap-reverse {
				flex-wrap: wrap-reverse !important
			}

			.tablet\:ext-flex-nowrap {
				flex-wrap: nowrap !important
			}

			.tablet\:ext-items-start {
				align-items: flex-start !important
			}

			.tablet\:ext-items-end {
				align-items: flex-end !important
			}

			.tablet\:ext-items-center {
				align-items: center !important
			}

			.tablet\:ext-items-baseline {
				align-items: baseline !important
			}

			.tablet\:ext-items-stretch {
				align-items: stretch !important
			}

			.tablet\:ext-justify-start {
				justify-content: flex-start !important
			}

			.tablet\:ext-justify-end {
				justify-content: flex-end !important
			}

			.tablet\:ext-justify-center {
				justify-content: center !important
			}

			.tablet\:ext-justify-between {
				justify-content: space-between !important
			}

			.tablet\:ext-justify-around {
				justify-content: space-around !important
			}

			.tablet\:ext-justify-evenly {
				justify-content: space-evenly !important
			}

			.tablet\:ext-justify-items-start {
				justify-items: start !important
			}

			.tablet\:ext-justify-items-end {
				justify-items: end !important
			}

			.tablet\:ext-justify-items-center {
				justify-items: center !important
			}

			.tablet\:ext-justify-items-stretch {
				justify-items: stretch !important
			}

			.tablet\:ext-justify-self-auto {
				justify-self: auto !important
			}

			.tablet\:ext-justify-self-start {
				justify-self: start !important
			}

			.tablet\:ext-justify-self-end {
				justify-self: end !important
			}

			.tablet\:ext-justify-self-center {
				justify-self: center !important
			}

			.tablet\:ext-justify-self-stretch {
				justify-self: stretch !important
			}

			.tablet\:ext-p-0:not([style*=padding]) {
				padding: 0 !important
			}

			.tablet\:ext-p-base:not([style*=padding]) {
				padding: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-p-lg:not([style*=padding]) {
				padding: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext-px-0:not([style*=padding]) {
				padding-left: 0 !important;
				padding-right: 0 !important
			}

			.tablet\:ext-px-base:not([style*=padding]) {
				padding-left: var(--wp--style--block-gap, 1.75rem) !important;
				padding-right: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-px-lg:not([style*=padding]) {
				padding-left: var(--extendify--spacing--large, 3rem) !important;
				padding-right: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext-py-0:not([style*=padding]) {
				padding-bottom: 0 !important;
				padding-top: 0 !important
			}

			.tablet\:ext-py-base:not([style*=padding]) {
				padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
				padding-top: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-py-lg:not([style*=padding]) {
				padding-bottom: var(--extendify--spacing--large, 3rem) !important;
				padding-top: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext-pt-0:not([style*=padding]) {
				padding-top: 0 !important
			}

			.tablet\:ext-pt-base:not([style*=padding]) {
				padding-top: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-pt-lg:not([style*=padding]) {
				padding-top: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext-pr-0:not([style*=padding]) {
				padding-right: 0 !important
			}

			.tablet\:ext-pr-base:not([style*=padding]) {
				padding-right: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-pr-lg:not([style*=padding]) {
				padding-right: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext-pb-0:not([style*=padding]) {
				padding-bottom: 0 !important
			}

			.tablet\:ext-pb-base:not([style*=padding]) {
				padding-bottom: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-pb-lg:not([style*=padding]) {
				padding-bottom: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext-pl-0:not([style*=padding]) {
				padding-left: 0 !important
			}

			.tablet\:ext-pl-base:not([style*=padding]) {
				padding-left: var(--wp--style--block-gap, 1.75rem) !important
			}

			.tablet\:ext-pl-lg:not([style*=padding]) {
				padding-left: var(--extendify--spacing--large, 3rem) !important
			}

			.tablet\:ext-text-left {
				text-align: left !important
			}

			.tablet\:ext-text-center {
				text-align: center !important
			}

			.tablet\:ext-text-right {
				text-align: right !important
			}
		}

		@media (min-width:1080px) {
			.desktop\:ext-absolute {
				position: absolute !important
			}

			.desktop\:ext-relative {
				position: relative !important
			}

			.desktop\:ext-top-base {
				top: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-top-lg {
				top: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext--top-base {
				top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.desktop\:ext--top-lg {
				top: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.desktop\:ext-right-base {
				right: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-right-lg {
				right: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext--right-base {
				right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.desktop\:ext--right-lg {
				right: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.desktop\:ext-bottom-base {
				bottom: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-bottom-lg {
				bottom: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext--bottom-base {
				bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.desktop\:ext--bottom-lg {
				bottom: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.desktop\:ext-left-base {
				left: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-left-lg {
				left: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext--left-base {
				left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.desktop\:ext--left-lg {
				left: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.desktop\:ext-order-1 {
				order: 1 !important
			}

			.desktop\:ext-order-2 {
				order: 2 !important
			}

			.desktop\:ext-m-0:not([style*=margin]) {
				margin: 0 !important
			}

			.desktop\:ext-m-auto:not([style*=margin]) {
				margin: auto !important
			}

			.desktop\:ext-m-base:not([style*=margin]) {
				margin: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-m-lg:not([style*=margin]) {
				margin: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext--m-base:not([style*=margin]) {
				margin: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.desktop\:ext--m-lg:not([style*=margin]) {
				margin: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.desktop\:ext-mx-0:not([style*=margin]) {
				margin-left: 0 !important;
				margin-right: 0 !important
			}

			.desktop\:ext-mx-auto:not([style*=margin]) {
				margin-left: auto !important;
				margin-right: auto !important
			}

			.desktop\:ext-mx-base:not([style*=margin]) {
				margin-left: var(--wp--style--block-gap, 1.75rem) !important;
				margin-right: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-mx-lg:not([style*=margin]) {
				margin-left: var(--extendify--spacing--large, 3rem) !important;
				margin-right: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext--mx-base:not([style*=margin]) {
				margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
				margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.desktop\:ext--mx-lg:not([style*=margin]) {
				margin-left: calc(var(--extendify--spacing--large, 3rem)*-1) !important;
				margin-right: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.desktop\:ext-my-0:not([style*=margin]) {
				margin-bottom: 0 !important;
				margin-top: 0 !important
			}

			.desktop\:ext-my-auto:not([style*=margin]) {
				margin-bottom: auto !important;
				margin-top: auto !important
			}

			.desktop\:ext-my-base:not([style*=margin]) {
				margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
				margin-top: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-my-lg:not([style*=margin]) {
				margin-bottom: var(--extendify--spacing--large, 3rem) !important;
				margin-top: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext--my-base:not([style*=margin]) {
				margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
				margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.desktop\:ext--my-lg:not([style*=margin]) {
				margin-bottom: calc(var(--extendify--spacing--large, 3rem)*-1) !important;
				margin-top: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.desktop\:ext-mt-0:not([style*=margin]) {
				margin-top: 0 !important
			}

			.desktop\:ext-mt-auto:not([style*=margin]) {
				margin-top: auto !important
			}

			.desktop\:ext-mt-base:not([style*=margin]) {
				margin-top: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-mt-lg:not([style*=margin]) {
				margin-top: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext--mt-base:not([style*=margin]) {
				margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.desktop\:ext--mt-lg:not([style*=margin]) {
				margin-top: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.desktop\:ext-mr-0:not([style*=margin]) {
				margin-right: 0 !important
			}

			.desktop\:ext-mr-auto:not([style*=margin]) {
				margin-right: auto !important
			}

			.desktop\:ext-mr-base:not([style*=margin]) {
				margin-right: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-mr-lg:not([style*=margin]) {
				margin-right: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext--mr-base:not([style*=margin]) {
				margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.desktop\:ext--mr-lg:not([style*=margin]) {
				margin-right: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.desktop\:ext-mb-0:not([style*=margin]) {
				margin-bottom: 0 !important
			}

			.desktop\:ext-mb-auto:not([style*=margin]) {
				margin-bottom: auto !important
			}

			.desktop\:ext-mb-base:not([style*=margin]) {
				margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-mb-lg:not([style*=margin]) {
				margin-bottom: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext--mb-base:not([style*=margin]) {
				margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.desktop\:ext--mb-lg:not([style*=margin]) {
				margin-bottom: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.desktop\:ext-ml-0:not([style*=margin]) {
				margin-left: 0 !important
			}

			.desktop\:ext-ml-auto:not([style*=margin]) {
				margin-left: auto !important
			}

			.desktop\:ext-ml-base:not([style*=margin]) {
				margin-left: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-ml-lg:not([style*=margin]) {
				margin-left: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext--ml-base:not([style*=margin]) {
				margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
			}

			.desktop\:ext--ml-lg:not([style*=margin]) {
				margin-left: calc(var(--extendify--spacing--large, 3rem)*-1) !important
			}

			.desktop\:ext-block {
				display: block !important
			}

			.desktop\:ext-inline-block {
				display: inline-block !important
			}

			.desktop\:ext-inline {
				display: inline !important
			}

			.desktop\:ext-flex {
				display: flex !important
			}

			.desktop\:ext-inline-flex {
				display: inline-flex !important
			}

			.desktop\:ext-grid {
				display: grid !important
			}

			.desktop\:ext-inline-grid {
				display: inline-grid !important
			}

			.desktop\:ext-hidden {
				display: none !important
			}

			.desktop\:ext-w-auto {
				width: auto !important
			}

			.desktop\:ext-w-full {
				width: 100% !important
			}

			.desktop\:ext-max-w-full {
				max-width: 100% !important
			}

			.desktop\:ext-flex-1 {
				flex: 1 1 0% !important
			}

			.desktop\:ext-flex-auto {
				flex: 1 1 auto !important
			}

			.desktop\:ext-flex-initial {
				flex: 0 1 auto !important
			}

			.desktop\:ext-flex-none {
				flex: none !important
			}

			.desktop\:ext-flex-shrink-0 {
				flex-shrink: 0 !important
			}

			.desktop\:ext-flex-shrink {
				flex-shrink: 1 !important
			}

			.desktop\:ext-flex-grow-0 {
				flex-grow: 0 !important
			}

			.desktop\:ext-flex-grow {
				flex-grow: 1 !important
			}

			.desktop\:ext-list-none {
				list-style-type: none !important
			}

			.desktop\:ext-grid-cols-1 {
				grid-template-columns: repeat(1, minmax(0, 1fr)) !important
			}

			.desktop\:ext-grid-cols-2 {
				grid-template-columns: repeat(2, minmax(0, 1fr)) !important
			}

			.desktop\:ext-grid-cols-3 {
				grid-template-columns: repeat(3, minmax(0, 1fr)) !important
			}

			.desktop\:ext-grid-cols-4 {
				grid-template-columns: repeat(4, minmax(0, 1fr)) !important
			}

			.desktop\:ext-grid-cols-5 {
				grid-template-columns: repeat(5, minmax(0, 1fr)) !important
			}

			.desktop\:ext-grid-cols-6 {
				grid-template-columns: repeat(6, minmax(0, 1fr)) !important
			}

			.desktop\:ext-grid-cols-7 {
				grid-template-columns: repeat(7, minmax(0, 1fr)) !important
			}

			.desktop\:ext-grid-cols-8 {
				grid-template-columns: repeat(8, minmax(0, 1fr)) !important
			}

			.desktop\:ext-grid-cols-9 {
				grid-template-columns: repeat(9, minmax(0, 1fr)) !important
			}

			.desktop\:ext-grid-cols-10 {
				grid-template-columns: repeat(10, minmax(0, 1fr)) !important
			}

			.desktop\:ext-grid-cols-11 {
				grid-template-columns: repeat(11, minmax(0, 1fr)) !important
			}

			.desktop\:ext-grid-cols-12 {
				grid-template-columns: repeat(12, minmax(0, 1fr)) !important
			}

			.desktop\:ext-grid-cols-none {
				grid-template-columns: none !important
			}

			.desktop\:ext-flex-row {
				flex-direction: row !important
			}

			.desktop\:ext-flex-row-reverse {
				flex-direction: row-reverse !important
			}

			.desktop\:ext-flex-col {
				flex-direction: column !important
			}

			.desktop\:ext-flex-col-reverse {
				flex-direction: column-reverse !important
			}

			.desktop\:ext-flex-wrap {
				flex-wrap: wrap !important
			}

			.desktop\:ext-flex-wrap-reverse {
				flex-wrap: wrap-reverse !important
			}

			.desktop\:ext-flex-nowrap {
				flex-wrap: nowrap !important
			}

			.desktop\:ext-items-start {
				align-items: flex-start !important
			}

			.desktop\:ext-items-end {
				align-items: flex-end !important
			}

			.desktop\:ext-items-center {
				align-items: center !important
			}

			.desktop\:ext-items-baseline {
				align-items: baseline !important
			}

			.desktop\:ext-items-stretch {
				align-items: stretch !important
			}

			.desktop\:ext-justify-start {
				justify-content: flex-start !important
			}

			.desktop\:ext-justify-end {
				justify-content: flex-end !important
			}

			.desktop\:ext-justify-center {
				justify-content: center !important
			}

			.desktop\:ext-justify-between {
				justify-content: space-between !important
			}

			.desktop\:ext-justify-around {
				justify-content: space-around !important
			}

			.desktop\:ext-justify-evenly {
				justify-content: space-evenly !important
			}

			.desktop\:ext-justify-items-start {
				justify-items: start !important
			}

			.desktop\:ext-justify-items-end {
				justify-items: end !important
			}

			.desktop\:ext-justify-items-center {
				justify-items: center !important
			}

			.desktop\:ext-justify-items-stretch {
				justify-items: stretch !important
			}

			.desktop\:ext-justify-self-auto {
				justify-self: auto !important
			}

			.desktop\:ext-justify-self-start {
				justify-self: start !important
			}

			.desktop\:ext-justify-self-end {
				justify-self: end !important
			}

			.desktop\:ext-justify-self-center {
				justify-self: center !important
			}

			.desktop\:ext-justify-self-stretch {
				justify-self: stretch !important
			}

			.desktop\:ext-p-0:not([style*=padding]) {
				padding: 0 !important
			}

			.desktop\:ext-p-base:not([style*=padding]) {
				padding: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-p-lg:not([style*=padding]) {
				padding: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext-px-0:not([style*=padding]) {
				padding-left: 0 !important;
				padding-right: 0 !important
			}

			.desktop\:ext-px-base:not([style*=padding]) {
				padding-left: var(--wp--style--block-gap, 1.75rem) !important;
				padding-right: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-px-lg:not([style*=padding]) {
				padding-left: var(--extendify--spacing--large, 3rem) !important;
				padding-right: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext-py-0:not([style*=padding]) {
				padding-bottom: 0 !important;
				padding-top: 0 !important
			}

			.desktop\:ext-py-base:not([style*=padding]) {
				padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
				padding-top: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-py-lg:not([style*=padding]) {
				padding-bottom: var(--extendify--spacing--large, 3rem) !important;
				padding-top: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext-pt-0:not([style*=padding]) {
				padding-top: 0 !important
			}

			.desktop\:ext-pt-base:not([style*=padding]) {
				padding-top: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-pt-lg:not([style*=padding]) {
				padding-top: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext-pr-0:not([style*=padding]) {
				padding-right: 0 !important
			}

			.desktop\:ext-pr-base:not([style*=padding]) {
				padding-right: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-pr-lg:not([style*=padding]) {
				padding-right: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext-pb-0:not([style*=padding]) {
				padding-bottom: 0 !important
			}

			.desktop\:ext-pb-base:not([style*=padding]) {
				padding-bottom: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-pb-lg:not([style*=padding]) {
				padding-bottom: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext-pl-0:not([style*=padding]) {
				padding-left: 0 !important
			}

			.desktop\:ext-pl-base:not([style*=padding]) {
				padding-left: var(--wp--style--block-gap, 1.75rem) !important
			}

			.desktop\:ext-pl-lg:not([style*=padding]) {
				padding-left: var(--extendify--spacing--large, 3rem) !important
			}

			.desktop\:ext-text-left {
				text-align: left !important
			}

			.desktop\:ext-text-center {
				text-align: center !important
			}

			.desktop\:ext-text-right {
				text-align: right !important
			}
		}
	</style>
	<link rel='stylesheet' id='contact-form-7-css'
		href='../wp-content/plugins/contact-form-7/includes/css/styles4c7e.css?ver=5.6.2' type='text/css' media='all' />
	<link rel='stylesheet' id='select2-css'
		href='../wp-content/plugins/woocommerce/assets/css/select28e94.css?ver=6.8.0' type='text/css' media='all' />
	<link rel='stylesheet' id='woocommerce-layout-css'
		href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layout8e94.css?ver=6.8.0' type='text/css'
		media='all' />
	<link rel='stylesheet' id='woocommerce-smallscreen-css'
		href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen8e94.css?ver=6.8.0' type='text/css'
		media='only screen and (max-width: 768px)' />
	<link rel='stylesheet' id='woocommerce-general-css'
		href='../wp-content/plugins/woocommerce/assets/css/woocommerce8e94.css?ver=6.8.0' type='text/css' media='all' />
	<style id='woocommerce-inline-inline-css' type='text/css'>
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>
	<link rel='stylesheet' id='laundry-google-fonts-css'
		href='https://fonts.googleapis.com/css?family=Poppins%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C900%2C900i%7CRoboto%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C900%2C900i&amp;subset=latin%2Ccyrillic-ext%2Clatin-ext%2Ccyrillic%2Cgreek-ext%2Cgreek%2Cvietnamese'
		type='text/css' media='all' />
	<link rel='stylesheet' id='laundry-blog-css'
		href='../wp-content/themes/laundry/css/style-blog1cd1.css?ver=1667819219' type='text/css' media='all' />
	<link rel='stylesheet' id='laundry-style-2-css'
		href='../wp-content/themes/laundry/css/style-21cd1.css?ver=1667819219' type='text/css' media='all' />
	<link rel='stylesheet' id='laundry-custom-css' href='../wp-content/themes/laundry/css/custom1cd1.css?ver=1667819219'
		type='text/css' media='all' />
	<style id='laundry-custom-inline-css' type='text/css'>
	
	</style>
	<link rel='stylesheet' id='laundry-shop-css' href='../wp-content/themes/laundry/css/shop1cd1.css?ver=1667819219'
		type='text/css' media='all' />
	<link rel='stylesheet' id='colorswatch-style-color-css'
		href='../wp-content/plugins/color-sds-picker-laundry/css/color/style1cd1.css?ver=1667819219' type='text/css'
		media='all' />
	<link rel='stylesheet' id='colorswatch-style-css'
		href='../wp-content/plugins/color-sds-picker-laundry/css/switcher-style1cd1.css?ver=1667819219' type='text/css'
		media='all' />
	<script type='text/javascript' src='../wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0'
		id='jquery-core-js'></script>
	<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2'
		id='jquery-migrate-js'></script>
	<script type='text/javascript' id='laundry-contact-googlemap-js-extra'>
		/* <![CDATA[ */
		var laundry_gmap_vars = { "GMAP_LAT": "55.8610112", "GMAP_LNG": "-4.2547319", "GMAP_ZOOM": "14", "GMAP_THEME_PATH": "https:\/\/smartdata.tonytemplates.com\/laundry-v2\/demo2\/wp-content\/themes\/laundry" };
/* ]]> */
	</script>
	<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?sensor=false&amp;key&amp;ver=201202124'
		id='laundry-contact-googlemap-js'></script>
	<link rel="https://api.w.org/" href="../wp-json/index.html" />
	<link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/1081.json" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" />
	<meta name="generator" content="WordPress 6.0.3" />
	<meta name="generator" content="WooCommerce 6.8.0" />
	<link rel='shortlink' href='../index2735.html?p=1081' />
	<link rel="alternate" type="application/json+oembed"
		href="../wp-json/oembed/1.0/embed3107.json?url=https%3A%2F%2Fsmartdata.tonytemplates.com%2Flaundry-v2%2Fdemo2%2Fcart%2F" />
	<link rel="alternate" type="text/xml+oembed"
		href="../wp-json/oembed/1.0/embed9511?url=https%3A%2F%2Fsmartdata.tonytemplates.com%2Flaundry-v2%2Fdemo2%2Fcart%2F&amp;format=xml" />
	<meta name="generator" content="Redux 4.3.14" /> <noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
</head>

<body
	class="page-template-default page page-id-1081 wp-embed-responsive theme-laundry woocommerce-cart woocommerce-page woocommerce-no-js elementor-default elementor-kit-267">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-dark-grayscale">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 0.49803921568627" />
					<feFuncG type="table" tableValues="0 0.49803921568627" />
					<feFuncB type="table" tableValues="0 0.49803921568627" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-grayscale">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 1" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0 1" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-yellow">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-red">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 1" />
					<feFuncG type="table" tableValues="0 0.27843137254902" />
					<feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-midnight">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 0" />
					<feFuncG type="table" tableValues="0 0.64705882352941" />
					<feFuncB type="table" tableValues="0 1" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-magenta-yellow">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.78039215686275 1" />
					<feFuncG type="table" tableValues="0 0.94901960784314" />
					<feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-green">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0.44705882352941 0.4" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-orange">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.098039215686275 1" />
					<feFuncG type="table" tableValues="0 0.66274509803922" />
					<feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg>
	<div class="tt-colorswatch">
		<div class="tt-colorswatch-options"><a href="#" class="colorswatch2 js-swatch-color" data-color="2"
				data-img="../wp-content/plugins/color-sds-picker-laundry/css/images/step-line2-x.png"></a> <a href="#"
				class="colorswatch3 js-swatch-color" data-color="3"
				data-img="../wp-content/plugins/color-sds-picker-laundry/css/images/step-line2-x-color02.png"></a> <a
				href="#" class="colorswatch4 js-swatch-color" data-color="4"
				data-img="../wp-content/plugins/color-sds-picker-laundry/css/images/step-line2-x-color03.png"></a> <a
				href="#" class="colorswatch5 js-swatch-color" data-color="5"
				data-img="../wp-content/plugins/color-sds-picker-laundry/css/images/step-line2-x-color04.png"></a> <a
				href="#" class="colorswatch6 js-swatch-color" data-color="6"
				data-img="../wp-content/plugins/color-sds-picker-laundry/css/images/step-line2-x-color05.png"></a> <a
				href="#" class="colorswatch6 js-swatch-color" data-color="7"
				data-img="../wp-content/plugins/color-sds-picker-laundry/css/images/step-line2-x-color06.png"></a></div>
		<div class="tt-colorswatch-btn js-colorswatch"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="347.523px" height="347.523px"
				viewBox="0 0 347.523 347.523" style="enable-background:new 0 0 347.523 347.523;" xml:space="preserve">
				<g>
					<g>
						<path d="M108.674,196.125c-2.857-0.402-5.777-0.592-8.746-0.534c-14.267,0.278-36.342,6.092-60.493,32.207
					c-19.171,20.729-19.954,42.635-20.644,61.961c-0.66,18.474-1.181,33.065-16.507,43.727c-1.506,1.049-2.318,2.837-2.113,4.661
					c0.128,1.147,0.645,2.191,1.434,2.98c0.466,0.466,1.026,0.843,1.658,1.099c28.523,11.553,77.316,5.895,117.044-33.833
					c18.043-18.044,28.812-37.145,31.14-55.233c0.607-4.719,0.618-9.323,0.091-13.763L108.674,196.125z M100.915,229.382
					c-1.553,2.174-3.859,3.612-6.494,4.052c-19.209,3.202-25.884,15.953-26.159,16.494c-1.627,3.387-5.167,5.611-8.989,5.611
					c-0.337,0-0.676-0.017-1.015-0.052c-1.149-0.117-2.264-0.432-3.313-0.936c-4.97-2.391-7.069-8.376-4.681-13.347
					c0.442-0.918,11.153-22.546,40.869-27.5c0.546-0.09,1.1-0.136,1.647-0.136c4.908,0,9.055,3.516,9.861,8.357
					C103.08,224.559,102.467,227.207,100.915,229.382z" />
						<path d="M340.587,6.796c-8.615-8.614-22.425-9.1-31.624-1.112c-5.782,5.021-141.818,123.166-160.166,141.513
					c-9.175,9.175-20.946,24.898-31.124,39.428l42.864,43.271c14.546-10.18,30.345-22.003,39.65-31.308
					C218.749,180.024,336.69,44.193,341.703,38.42C349.688,29.22,349.201,15.41,340.587,6.796z" />
					</g>
				</g>
				<g></g>
				<g></g>
				<g></g>
				<g></g>
				<g></g>
				<g></g>
				<g></g>
				<g></g>
				<g></g>
				<g></g>
				<g></g>
				<g></g>
				<g></g>
				<g></g>
				<g></g>
			</svg></div>
	</div>

	<nav class="panel-menu" id="mobile-menu">
		<ul>

		</ul>
		<div class="mm-navbtn-names">
			<div class="mm-closebtn">Close</div>
			<div class="mm-backbtn">Back</div>
		</div>
	</nav>
	<div class="header-content-mobile">
		<div class="tt-mibilemenu-layout">
			<div class="tt-mibilemenu-icon">
				<div class="tt-item">
					<div class="tt-item__icon">
						<span class="icons-484169"></span>
					</div>
					<div class="tt-item__text">
						<address>
							Ashesi University, Berekuso </address>
					</div>
				</div>
				<div class="tt-item">
					<div class="tt-item__icon">
						<span class="icons-59252"></span>
					</div>
					<div class="tt-item__text">
						Mon-Fri 08:00 AM - 05:00 PM </div>
				</div>
				<div class="tt-item">
					<div class="tt-item__icon">
						<span class="icons-1004017"></span>
					</div>
					<div class="tt-item__text">
						<a class="not-style" href="mailto:info@laundrymen.com">
							info@laundrymen.com </a>
					</div>
				</div>
				<div class="tt-item">
					<div class="tt-item__icon">
						<span class="icons-4839471"></span>
					</div>
					<div class="tt-item__text">
						<address>
							<a class="not-style" href="tel:020 95 35 914">
								020 95 35 914 </a>
						</address>
					</div>
				</div>
			</div>
			<a href="#" class="tt-btn not-style" data-toggle="modal" data-target="#modalMRequestQuote">
				<span class="mask">Schedule a Pickup</span>
				<div class="button">Schedule a Pickup</div>
			</a>
		</div>
	</div>
	<header id="tt-header">
		<!-- holder-top (desktop) -->
		<div class="holder-top-desktop d-none d-md-block">
			<div class="row">
				<div class="col-auto">
					<div class="h-info01">
						<div class="tt-item">
							<address>
								Ashesi University, Berekuso </address>
						</div>
						<div class="tt-item">
							Mon-Fri 08:00 AM - 05:00 PM </div>
						<div class="tt-item">
							<a href="mailto:info@laundrymen.com">
							info@laundrymen.com </a>
						</div>
					</div>
				</div>
				<div class="col-auto ml-auto">
					<div class="tt-obj">
						<div class="h-info02">
							<div class="tt-item">
								<address>
									<a href="tel:020 95 35 914"><span class="icons-483947"></span>
										020 95 35 914 </a>
								</address>
							</div>
						</div>
					</div>
					<div class="tt-obj">
						<ul class="h-social">
							<li><a href="https://twitter.com/" target="_blank" class="icons-733635"></a></li>
							<li><a href="https://www.facebook.com/" target="_blank" class="icons-59439"></a></li>
							<li><a href="https://www.facebook.com/" target="_blank" class="icons-2111532"></a></li>
							<li><a href="https://www.instagram.com/" target="_blank" class="icons-733614"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /holder-top (desktop) -->
		<!-- holder- -->
		<div id="js-init-sticky">
			<div class="tt-holder-wrapper">
				<div class="tt-holder">
					<div class="tt-col-left">
						<!-- logo -->
						<a href="../index.php" class="tt-logo tt-logo-alignment">
							<i class="icons-logo tt-icon"></i><span class="tt-base-color">Laundry </span>Men </a>
						<!-- /logo -->
					</div>
					<div class="tt-col-center tt-col-wide tt-col-objects text-center">
						<div class="tt-col__item">
							<!-- desktop-nav -->
							<nav id="tt-nav">
								<ul id="menu-primary-menu" class="menu">
									<li id="nav-menu-item-317"
										class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
										<a href="../index.php" class="menu-link main-menu-link">Home</a></li>
									<li id="nav-menu-item-318"
										class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
										<a href="../about-us/index.php" class="menu-link main-menu-link">About Us</a>
									</li>
									<li id="nav-menu-item-527" class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
										<a href="../services/index.php" class="menu-link main-menu-link">Services</a>
									</li>
									<li id="nav-menu-item-502"
										class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
										<a href="../prices/index.php" class="menu-link main-menu-link">Subscriptions</a></li>
									<li id="nav-menu-item-656"
										class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
										<a href="../blog-posts/index.php" class="menu-link main-menu-link">Blog</a>
									</li>
									<li id="nav-menu-item-1377"
										class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
										<a href="../shop/index.php" class="menu-link main-menu-link">Shop</a></li>
									<li id="nav-menu-item-526"
										class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
										<a href="../faq/index.php" class="menu-link main-menu-link">FAQ</a></li>
									<li id="nav-menu-item-604"
										class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
										<a href="../contact-us/index.php" class="menu-link main-menu-link">Contacts</a>
									</li>
								</ul>
							</nav>
							<!-- /desktop-nav -->
						</div>
					</div>
					<div class="tt-col-right tt-col-objects">
						<div class="tt-col__item d-block d-lg-none">
							<div class="h-info02">
								<div class="tt-item">
									<address>
										<a href="tel:020 95 35 914"><span class="icons-483947"></span>
											020 95 35 914 </a>
									</address>
								</div>
							</div>
						</div>
						<div class="tt-col__item">
						<div class="tt-obj tt-obj-cart js-dropdown-cart">
								<a href="<?php echo $link; ?>" class="tt-obj__btn cart-contents">
									<i class="icons-711897"><span style="position:absolute; right:-5%; top:3%; font-size:14px; color:red;">0</span></i>
							</div>
						</div>
						<div class="tt-col__item d-none d-md-block">
							<a href="<?php echo $linkdash; ?>"><i class="fa fa-user fa-2x" title="Dashboard"></i></a>
						</div>
						<div class="tt-col__item toggle-wrapper">
							<a href="#" id="tt-menu-toggle" class="icons-1828859"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="subtitle-wrapper" class="lazyload" data-bg="../wp-content/uploads/sites/2/2020/11/subtitle-wrapper01.jpg">
		<div class="container container-fluid-xl">
			<div class="tt-breadcrumbs">
				<span><span><a href="../index.php">Home</a> / <span class="breadcrumb_last"
							aria-current="page">Cart</span></span></span>
			</div>
			<h1 class="subtitle__title">
				Cart </h1>
		</div>
		<div class="bubbleContainer">
			<div class="bubble-1"></div>
			<div class="bubble-2"></div>
			<div class="bubble-3"></div>
			<div class="bubble-4"></div>
			<div class="bubble-5"></div>
			<div class="bubble-6"></div>
			<div class="bubble-7"></div>
			<div class="bubble-8"></div>
			<div class="bubble-9"></div>
			<div class="bubble-10"></div>
		</div>
	</div>
	<main id="tt-pageContent">
		<div class="section-inner lazyload subpage-bg-left subpage-bg__position0" data-bg="">
			<div class="lazyload subpage-bg-right subpage-bg__position0" data-bg="">
				<div class="container container-fluid-lg">
					<div class="page page_sidebar_none">
						<div class="woocommerce">
							<div class="woocommerce-notices-wrapper"></div>
							
							
							<?php
							chdir("../");
							require("../functions/cart.php");
							showCart($_SESSION['id']);
							?>
							
						
							

						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer id="tt-footer">`
		<div class="footer-wrapper01">
			<div class="container container-fluid-xl">
				<div class="row f-col-wrapper">
					<div class="col-md-4">
						<a href="index.php" class="f-logo">
							<i class="icons-logo tt-icon"></i><span class="tt-base-color">Laundry</span>Men </a>
						<div class="f-text">
							We are professionals in the laundry and dry cleaning business, which means we always stay up
							to date on the latest technologies and cleaning methods. </div>
						<ul class="f-social">
							<li><a href="#" target="_blank" class="icons-733635"></a></li>
							<li><a href="#" target="_blank" class="icons-59439"></a></li>
							<li><a href="#" target="_blank" class="icons-2111532"></a></li>
							<li><a href="#" target="_blank" class="icons-733614"></a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<h6 class="f-title">Contacts</h6>
						<ul class="f-info">
							<li><i class="icons-484169"></i> Ashesi University</li>
							<li><i class="icons-59252"></i> Mon-Fri: 7:00am-7:00pm</li>
							<li><a href="mailto:noreply@envato.com"><i class="icons-1004017"></i>
									info@laundrymen.com</a>
							</li>
							<li><strong><a href="tel: 1 (800) 765-43-21"><i class="icons-4839471"></i> + (233)
										95 35 914</a></strong></li>
						</ul>
					</div>
					<div class="col-md-4">
						<div role="form" class="wpcf7" id="wpcf7-f265-o1" lang="en-US" dir="ltr">
							<div class="screen-reader-response">
								<p role="status" aria-live="polite" aria-atomic="true"></p>
								<ul></ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container container-fluid-xl">
			<div class="f-holder">
				<div class="f-copyright">
					© 2022 <span class="tt-base-color">Laundry</span>Men. All Rights Reserved. </div>
				<ul class="f-link">
					<li><a href="#">Terms and Conditions</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
		</div>
	</footer>
	<a href="#" class="tt-btn tt-back-to-top" id="js-backtotop">
		<span class="mask">
			<svg version="1.1" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24"
				style="enable-background:new 0 0 24 24;" xml:space="preserve">
				<g>
					<polygon fill="currentColor" points="20.9,17.1 12.5,8.6 4.1,17.1 2.9,15.9 12.5,6.4 22.1,15.9 	">
					</polygon>
				</g>
			</svg>
		</span>
		<div class="button">
			<svg version="1.1" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24"
				style="enable-background:new 0 0 24 24;" xml:space="preserve">
				<g>
					<polygon fill="currentColor" points="20.9,17.1 12.5,8.6 4.1,17.1 2.9,15.9 12.5,6.4 22.1,15.9 	">
					</polygon>
				</g>
			</svg>
		</div>
	</a>
	<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<script type='text/javascript'
		src='../wp-content/plugins/laundry-helper/assets/elementor/js/addons-script-21cd1.js?ver=1667819219'
		id='laundry-core-script-2-js'></script>
	<script type='text/javascript' src='../wp-includes/js/dist/vendor/regenerator-runtime.min3937.js?ver=0.13.9'
		id='regenerator-runtime-js'></script>
	<script type='text/javascript' src='../wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0'
		id='wp-polyfill-js'></script>
	<script type='text/javascript' id='contact-form-7-js-extra'>
		/* <![CDATA[ */
		var wpcf7 = { "api": { "root": "https:\/\/smartdata.tonytemplates.com\/laundry-v2\/demo2\/wp-json\/", "namespace": "contact-form-7\/v1" }, "cached": "1" };
/* ]]> */
	</script>
	<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/index4c7e.js?ver=5.6.2'
		id='contact-form-7-js'></script>
	<script type='text/javascript'
		src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minf13c.js?ver=2.7.0-wc.6.8.0'
		id='jquery-blockui-js'></script>
	<script type='text/javascript' id='wc-add-to-cart-js-extra'>
		/* <![CDATA[ */
		var wc_add_to_cart_params = { "ajax_url": "\/laundry-v2\/demo2\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/laundry-v2\/demo2\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/smartdata.tonytemplates.com\/laundry-v2\/demo2\/cart\/", "is_cart": "1", "cart_redirect_after_add": "no" };
/* ]]> */
	</script>
	<script type='text/javascript'
		src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min8e94.js?ver=6.8.0'
		id='wc-add-to-cart-js'></script>
	<script type='text/javascript'
		src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min1c36.js?ver=2.1.4-wc.6.8.0'
		id='js-cookie-js'></script>
	<script type='text/javascript' id='woocommerce-js-extra'>
		/* <![CDATA[ */
		var woocommerce_params = { "ajax_url": "\/laundry-v2\/demo2\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/laundry-v2\/demo2\/?wc-ajax=%%endpoint%%" };
/* ]]> */
	</script>
	<script type='text/javascript'
		src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min8e94.js?ver=6.8.0'
		id='woocommerce-js'></script>
	<script type='text/javascript' id='wc-country-select-js-extra'>
		/* <![CDATA[ */
		var wc_country_select_params = { "countries": "{\"AF\":[],\"AL\":{\"AL-01\":\"Berat\",\"AL-09\":\"Dib\\u00ebr\",\"AL-02\":\"Durr\\u00ebs\",\"AL-03\":\"Elbasan\",\"AL-04\":\"Fier\",\"AL-05\":\"Gjirokast\\u00ebr\",\"AL-06\":\"Kor\\u00e7\\u00eb\",\"AL-07\":\"Kuk\\u00ebs\",\"AL-08\":\"Lezh\\u00eb\",\"AL-10\":\"Shkod\\u00ebr\",\"AL-11\":\"Tirana\",\"AL-12\":\"Vlor\\u00eb\"},\"AO\":{\"BGO\":\"Bengo\",\"BLU\":\"Benguela\",\"BIE\":\"Bi\\u00e9\",\"CAB\":\"Cabinda\",\"CNN\":\"Cunene\",\"HUA\":\"Huambo\",\"HUI\":\"Hu\\u00edla\",\"CCU\":\"Kuando Kubango\",\"CNO\":\"Kwanza-Norte\",\"CUS\":\"Kwanza-Sul\",\"LUA\":\"Luanda\",\"LNO\":\"Lunda-Norte\",\"LSU\":\"Lunda-Sul\",\"MAL\":\"Malanje\",\"MOX\":\"Moxico\",\"NAM\":\"Namibe\",\"UIG\":\"U\\u00edge\",\"ZAI\":\"Zaire\"},\"AR\":{\"C\":\"Ciudad Aut\\u00f3noma de Buenos Aires\",\"B\":\"Buenos Aires\",\"K\":\"Catamarca\",\"H\":\"Chaco\",\"U\":\"Chubut\",\"X\":\"C\\u00f3rdoba\",\"W\":\"Corrientes\",\"E\":\"Entre R\\u00edos\",\"P\":\"Formosa\",\"Y\":\"Jujuy\",\"L\":\"La Pampa\",\"F\":\"La Rioja\",\"M\":\"Mendoza\",\"N\":\"Misiones\",\"Q\":\"Neuqu\\u00e9n\",\"R\":\"R\\u00edo Negro\",\"A\":\"Salta\",\"J\":\"San Juan\",\"D\":\"San Luis\",\"Z\":\"Santa Cruz\",\"S\":\"Santa Fe\",\"G\":\"Santiago del Estero\",\"V\":\"Tierra del Fuego\",\"T\":\"Tucum\\u00e1n\"},\"AT\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"AX\":[],\"BD\":{\"BD-05\":\"Bagerhat\",\"BD-01\":\"Bandarban\",\"BD-02\":\"Barguna\",\"BD-06\":\"Barishal\",\"BD-07\":\"Bhola\",\"BD-03\":\"Bogura\",\"BD-04\":\"Brahmanbaria\",\"BD-09\":\"Chandpur\",\"BD-10\":\"Chattogram\",\"BD-12\":\"Chuadanga\",\"BD-11\":\"Cox's Bazar\",\"BD-08\":\"Cumilla\",\"BD-13\":\"Dhaka\",\"BD-14\":\"Dinajpur\",\"BD-15\":\"Faridpur \",\"BD-16\":\"Feni\",\"BD-19\":\"Gaibandha\",\"BD-18\":\"Gazipur\",\"BD-17\":\"Gopalganj\",\"BD-20\":\"Habiganj\",\"BD-21\":\"Jamalpur\",\"BD-22\":\"Jashore\",\"BD-25\":\"Jhalokati\",\"BD-23\":\"Jhenaidah\",\"BD-24\":\"Joypurhat\",\"BD-29\":\"Khagrachhari\",\"BD-27\":\"Khulna\",\"BD-26\":\"Kishoreganj\",\"BD-28\":\"Kurigram\",\"BD-30\":\"Kushtia\",\"BD-31\":\"Lakshmipur\",\"BD-32\":\"Lalmonirhat\",\"BD-36\":\"Madaripur\",\"BD-37\":\"Magura\",\"BD-33\":\"Manikganj \",\"BD-39\":\"Meherpur\",\"BD-38\":\"Moulvibazar\",\"BD-35\":\"Munshiganj\",\"BD-34\":\"Mymensingh\",\"BD-48\":\"Naogaon\",\"BD-43\":\"Narail\",\"BD-40\":\"Narayanganj\",\"BD-42\":\"Narsingdi\",\"BD-44\":\"Natore\",\"BD-45\":\"Nawabganj\",\"BD-41\":\"Netrakona\",\"BD-46\":\"Nilphamari\",\"BD-47\":\"Noakhali\",\"BD-49\":\"Pabna\",\"BD-52\":\"Panchagarh\",\"BD-51\":\"Patuakhali\",\"BD-50\":\"Pirojpur\",\"BD-53\":\"Rajbari\",\"BD-54\":\"Rajshahi\",\"BD-56\":\"Rangamati\",\"BD-55\":\"Rangpur\",\"BD-58\":\"Satkhira\",\"BD-62\":\"Shariatpur\",\"BD-57\":\"Sherpur\",\"BD-59\":\"Sirajganj\",\"BD-61\":\"Sunamganj\",\"BD-60\":\"Sylhet\",\"BD-63\":\"Tangail\",\"BD-64\":\"Thakurgaon\"},\"BE\":[],\"BG\":{\"BG-01\":\"Blagoevgrad\",\"BG-02\":\"Burgas\",\"BG-08\":\"Dobrich\",\"BG-07\":\"Gabrovo\",\"BG-26\":\"Haskovo\",\"BG-09\":\"Kardzhali\",\"BG-10\":\"Kyustendil\",\"BG-11\":\"Lovech\",\"BG-12\":\"Montana\",\"BG-13\":\"Pazardzhik\",\"BG-14\":\"Pernik\",\"BG-15\":\"Pleven\",\"BG-16\":\"Plovdiv\",\"BG-17\":\"Razgrad\",\"BG-18\":\"Ruse\",\"BG-27\":\"Shumen\",\"BG-19\":\"Silistra\",\"BG-20\":\"Sliven\",\"BG-21\":\"Smolyan\",\"BG-23\":\"Sofia\",\"BG-22\":\"Sofia-Grad\",\"BG-24\":\"Stara Zagora\",\"BG-25\":\"Targovishte\",\"BG-03\":\"Varna\",\"BG-04\":\"Veliko Tarnovo\",\"BG-05\":\"Vidin\",\"BG-06\":\"Vratsa\",\"BG-28\":\"Yambol\"},\"BH\":[],\"BI\":[],\"BJ\":{\"AL\":\"Alibori\",\"AK\":\"Atakora\",\"AQ\":\"Atlantique\",\"BO\":\"Borgou\",\"CO\":\"Collines\",\"KO\":\"Kouffo\",\"DO\":\"Donga\",\"LI\":\"Littoral\",\"MO\":\"Mono\",\"OU\":\"Ou\\u00e9m\\u00e9\",\"PL\":\"Plateau\",\"ZO\":\"Zou\"},\"BO\":{\"BO-B\":\"Beni\",\"BO-H\":\"Chuquisaca\",\"BO-C\":\"Cochabamba\",\"BO-L\":\"La Paz\",\"BO-O\":\"Oruro\",\"BO-N\":\"Pando\",\"BO-P\":\"Potos\\u00ed\",\"BO-S\":\"Santa Cruz\",\"BO-T\":\"Tarija\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\\u00e1\",\"AM\":\"Amazonas\",\"BA\":\"Bahia\",\"CE\":\"Cear\\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\\u00edrito Santo\",\"GO\":\"Goi\\u00e1s\",\"MA\":\"Maranh\\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\\u00e1\",\"PB\":\"Para\\u00edba\",\"PR\":\"Paran\\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NL\":\"Newfoundland and Labrador\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CH\":{\"AG\":\"Aargau\",\"AR\":\"Appenzell Ausserrhoden\",\"AI\":\"Appenzell Innerrhoden\",\"BL\":\"Basel-Landschaft\",\"BS\":\"Basel-Stadt\",\"BE\":\"Bern\",\"FR\":\"Fribourg\",\"GE\":\"Geneva\",\"GL\":\"Glarus\",\"GR\":\"Graub\\u00fcnden\",\"JU\":\"Jura\",\"LU\":\"Luzern\",\"NE\":\"Neuch\\u00e2tel\",\"NW\":\"Nidwalden\",\"OW\":\"Obwalden\",\"SH\":\"Schaffhausen\",\"SZ\":\"Schwyz\",\"SO\":\"Solothurn\",\"SG\":\"St. Gallen\",\"TG\":\"Thurgau\",\"TI\":\"Ticino\",\"UR\":\"Uri\",\"VS\":\"Valais\",\"VD\":\"Vaud\",\"ZG\":\"Zug\",\"ZH\":\"Z\\u00fcrich\"},\"CL\":{\"CL-AI\":\"Ais\\u00e9n del General Carlos Iba\\u00f1ez del Campo\",\"CL-AN\":\"Antofagasta\",\"CL-AP\":\"Arica y Parinacota\",\"CL-AR\":\"La Araucan\\u00eda\",\"CL-AT\":\"Atacama\",\"CL-BI\":\"Biob\\u00edo\",\"CL-CO\":\"Coquimbo\",\"CL-LI\":\"Libertador General Bernardo O'Higgins\",\"CL-LL\":\"Los Lagos\",\"CL-LR\":\"Los R\\u00edos\",\"CL-MA\":\"Magallanes\",\"CL-ML\":\"Maule\",\"CL-NB\":\"\\u00d1uble\",\"CL-RM\":\"Regi\\u00f3n Metropolitana de Santiago\",\"CL-TA\":\"Tarapac\\u00e1\",\"CL-VS\":\"Valpara\\u00edso\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \\u4e91\\u5357\",\"CN2\":\"Beijing \\\/ \\u5317\\u4eac\",\"CN3\":\"Tianjin \\\/ \\u5929\\u6d25\",\"CN4\":\"Hebei \\\/ \\u6cb3\\u5317\",\"CN5\":\"Shanxi \\\/ \\u5c71\\u897f\",\"CN6\":\"Inner Mongolia \\\/ \\u5167\\u8499\\u53e4\",\"CN7\":\"Liaoning \\\/ \\u8fbd\\u5b81\",\"CN8\":\"Jilin \\\/ \\u5409\\u6797\",\"CN9\":\"Heilongjiang \\\/ \\u9ed1\\u9f99\\u6c5f\",\"CN10\":\"Shanghai \\\/ \\u4e0a\\u6d77\",\"CN11\":\"Jiangsu \\\/ \\u6c5f\\u82cf\",\"CN12\":\"Zhejiang \\\/ \\u6d59\\u6c5f\",\"CN13\":\"Anhui \\\/ \\u5b89\\u5fbd\",\"CN14\":\"Fujian \\\/ \\u798f\\u5efa\",\"CN15\":\"Jiangxi \\\/ \\u6c5f\\u897f\",\"CN16\":\"Shandong \\\/ \\u5c71\\u4e1c\",\"CN17\":\"Henan \\\/ \\u6cb3\\u5357\",\"CN18\":\"Hubei \\\/ \\u6e56\\u5317\",\"CN19\":\"Hunan \\\/ \\u6e56\\u5357\",\"CN20\":\"Guangdong \\\/ \\u5e7f\\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \\u5e7f\\u897f\\u58ee\\u65cf\",\"CN22\":\"Hainan \\\/ \\u6d77\\u5357\",\"CN23\":\"Chongqing \\\/ \\u91cd\\u5e86\",\"CN24\":\"Sichuan \\\/ \\u56db\\u5ddd\",\"CN25\":\"Guizhou \\\/ \\u8d35\\u5dde\",\"CN26\":\"Shaanxi \\\/ \\u9655\\u897f\",\"CN27\":\"Gansu \\\/ \\u7518\\u8083\",\"CN28\":\"Qinghai \\\/ \\u9752\\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \\u5b81\\u590f\",\"CN30\":\"Macao \\\/ \\u6fb3\\u95e8\",\"CN31\":\"Tibet \\\/ \\u897f\\u85cf\",\"CN32\":\"Xinjiang \\\/ \\u65b0\\u7586\"},\"CO\":{\"CO-AMA\":\"Amazonas\",\"CO-ANT\":\"Antioquia\",\"CO-ARA\":\"Arauca\",\"CO-ATL\":\"Atl\\u00e1ntico\",\"CO-BOL\":\"Bol\\u00edvar\",\"CO-BOY\":\"Boyac\\u00e1\",\"CO-CAL\":\"Caldas\",\"CO-CAQ\":\"Caquet\\u00e1\",\"CO-CAS\":\"Casanare\",\"CO-CAU\":\"Cauca\",\"CO-CES\":\"Cesar\",\"CO-CHO\":\"Choc\\u00f3\",\"CO-COR\":\"C\\u00f3rdoba\",\"CO-CUN\":\"Cundinamarca\",\"CO-DC\":\"Capital District\",\"CO-GUA\":\"Guain\\u00eda\",\"CO-GUV\":\"Guaviare\",\"CO-HUI\":\"Huila\",\"CO-LAG\":\"La Guajira\",\"CO-MAG\":\"Magdalena\",\"CO-MET\":\"Meta\",\"CO-NAR\":\"Nari\\u00f1o\",\"CO-NSA\":\"Norte de Santander\",\"CO-PUT\":\"Putumayo\",\"CO-QUI\":\"Quind\\u00edo\",\"CO-RIS\":\"Risaralda\",\"CO-SAN\":\"Santander\",\"CO-SAP\":\"San Andr\\u00e9s & Providencia\",\"CO-SUC\":\"Sucre\",\"CO-TOL\":\"Tolima\",\"CO-VAC\":\"Valle del Cauca\",\"CO-VAU\":\"Vaup\\u00e9s\",\"CO-VID\":\"Vichada\"},\"CR\":{\"CR-A\":\"Alajuela\",\"CR-C\":\"Cartago\",\"CR-G\":\"Guanacaste\",\"CR-H\":\"Heredia\",\"CR-L\":\"Lim\\u00f3n\",\"CR-P\":\"Puntarenas\",\"CR-SJ\":\"San Jos\\u00e9\"},\"CZ\":[],\"DE\":{\"DE-BW\":\"Baden-W\\u00fcrttemberg\",\"DE-BY\":\"Bavaria\",\"DE-BE\":\"Berlin\",\"DE-BB\":\"Brandenburg\",\"DE-HB\":\"Bremen\",\"DE-HH\":\"Hamburg\",\"DE-HE\":\"Hesse\",\"DE-MV\":\"Mecklenburg-Vorpommern\",\"DE-NI\":\"Lower Saxony\",\"DE-NW\":\"North Rhine-Westphalia\",\"DE-RP\":\"Rhineland-Palatinate\",\"DE-SL\":\"Saarland\",\"DE-SN\":\"Saxony\",\"DE-ST\":\"Saxony-Anhalt\",\"DE-SH\":\"Schleswig-Holstein\",\"DE-TH\":\"Thuringia\"},\"DK\":[],\"DO\":{\"DO-01\":\"Distrito Nacional\",\"DO-02\":\"Azua\",\"DO-03\":\"Baoruco\",\"DO-04\":\"Barahona\",\"DO-33\":\"Cibao Nordeste\",\"DO-34\":\"Cibao Noroeste\",\"DO-35\":\"Cibao Norte\",\"DO-36\":\"Cibao Sur\",\"DO-05\":\"Dajab\\u00f3n\",\"DO-06\":\"Duarte\",\"DO-08\":\"El Seibo\",\"DO-37\":\"El Valle\",\"DO-07\":\"El\\u00edas Pi\\u00f1a\",\"DO-38\":\"Enriquillo\",\"DO-09\":\"Espaillat\",\"DO-30\":\"Hato Mayor\",\"DO-19\":\"Hermanas Mirabal\",\"DO-39\":\"Hig\\u00fcamo\",\"DO-10\":\"Independencia\",\"DO-11\":\"La Altagracia\",\"DO-12\":\"La Romana\",\"DO-13\":\"La Vega\",\"DO-14\":\"Mar\\u00eda Trinidad S\\u00e1nchez\",\"DO-28\":\"Monse\\u00f1or Nouel\",\"DO-15\":\"Monte Cristi\",\"DO-29\":\"Monte Plata\",\"DO-40\":\"Ozama\",\"DO-16\":\"Pedernales\",\"DO-17\":\"Peravia\",\"DO-18\":\"Puerto Plata\",\"DO-20\":\"Saman\\u00e1\",\"DO-21\":\"San Crist\\u00f3bal\",\"DO-31\":\"San Jos\\u00e9 de Ocoa\",\"DO-22\":\"San Juan\",\"DO-23\":\"San Pedro de Macor\\u00eds\",\"DO-24\":\"S\\u00e1nchez Ram\\u00edrez\",\"DO-25\":\"Santiago\",\"DO-26\":\"Santiago Rodr\\u00edguez\",\"DO-32\":\"Santo Domingo\",\"DO-41\":\"Valdesia\",\"DO-27\":\"Valverde\",\"DO-42\":\"Yuma\"},\"DZ\":{\"DZ-01\":\"Adrar\",\"DZ-02\":\"Chlef\",\"DZ-03\":\"Laghouat\",\"DZ-04\":\"Oum El Bouaghi\",\"DZ-05\":\"Batna\",\"DZ-06\":\"B\\u00e9ja\\u00efa\",\"DZ-07\":\"Biskra\",\"DZ-08\":\"B\\u00e9char\",\"DZ-09\":\"Blida\",\"DZ-10\":\"Bouira\",\"DZ-11\":\"Tamanghasset\",\"DZ-12\":\"T\\u00e9bessa\",\"DZ-13\":\"Tlemcen\",\"DZ-14\":\"Tiaret\",\"DZ-15\":\"Tizi Ouzou\",\"DZ-16\":\"Algiers\",\"DZ-17\":\"Djelfa\",\"DZ-18\":\"Jijel\",\"DZ-19\":\"S\\u00e9tif\",\"DZ-20\":\"Sa\\u00efda\",\"DZ-21\":\"Skikda\",\"DZ-22\":\"Sidi Bel Abb\\u00e8s\",\"DZ-23\":\"Annaba\",\"DZ-24\":\"Guelma\",\"DZ-25\":\"Constantine\",\"DZ-26\":\"M\\u00e9d\\u00e9a\",\"DZ-27\":\"Mostaganem\",\"DZ-28\":\"M\\u2019Sila\",\"DZ-29\":\"Mascara\",\"DZ-30\":\"Ouargla\",\"DZ-31\":\"Oran\",\"DZ-32\":\"El Bayadh\",\"DZ-33\":\"Illizi\",\"DZ-34\":\"Bordj Bou Arr\\u00e9ridj\",\"DZ-35\":\"Boumerd\\u00e8s\",\"DZ-36\":\"El Tarf\",\"DZ-37\":\"Tindouf\",\"DZ-38\":\"Tissemsilt\",\"DZ-39\":\"El Oued\",\"DZ-40\":\"Khenchela\",\"DZ-41\":\"Souk Ahras\",\"DZ-42\":\"Tipasa\",\"DZ-43\":\"Mila\",\"DZ-44\":\"A\\u00efn Defla\",\"DZ-45\":\"Naama\",\"DZ-46\":\"A\\u00efn T\\u00e9mouchent\",\"DZ-47\":\"Gharda\\u00efa\",\"DZ-48\":\"Relizane\"},\"EE\":[],\"EC\":{\"EC-A\":\"Azuay\",\"EC-B\":\"Bol\\u00edvar\",\"EC-F\":\"Ca\\u00f1ar\",\"EC-C\":\"Carchi\",\"EC-H\":\"Chimborazo\",\"EC-X\":\"Cotopaxi\",\"EC-O\":\"El Oro\",\"EC-E\":\"Esmeraldas\",\"EC-W\":\"Gal\\u00e1pagos\",\"EC-G\":\"Guayas\",\"EC-I\":\"Imbabura\",\"EC-L\":\"Loja\",\"EC-R\":\"Los R\\u00edos\",\"EC-M\":\"Manab\\u00ed\",\"EC-S\":\"Morona-Santiago\",\"EC-N\":\"Napo\",\"EC-D\":\"Orellana\",\"EC-Y\":\"Pastaza\",\"EC-P\":\"Pichincha\",\"EC-SE\":\"Santa Elena\",\"EC-SD\":\"Santo Domingo de los Ts\\u00e1chilas\",\"EC-U\":\"Sucumb\\u00edos\",\"EC-T\":\"Tungurahua\",\"EC-Z\":\"Zamora-Chinchipe\"},\"EG\":{\"EGALX\":\"Alexandria\",\"EGASN\":\"Aswan\",\"EGAST\":\"Asyut\",\"EGBA\":\"Red Sea\",\"EGBH\":\"Beheira\",\"EGBNS\":\"Beni Suef\",\"EGC\":\"Cairo\",\"EGDK\":\"Dakahlia\",\"EGDT\":\"Damietta\",\"EGFYM\":\"Faiyum\",\"EGGH\":\"Gharbia\",\"EGGZ\":\"Giza\",\"EGIS\":\"Ismailia\",\"EGJS\":\"South Sinai\",\"EGKB\":\"Qalyubia\",\"EGKFS\":\"Kafr el-Sheikh\",\"EGKN\":\"Qena\",\"EGLX\":\"Luxor\",\"EGMN\":\"Minya\",\"EGMNF\":\"Monufia\",\"EGMT\":\"Matrouh\",\"EGPTS\":\"Port Said\",\"EGSHG\":\"Sohag\",\"EGSHR\":\"Al Sharqia\",\"EGSIN\":\"North Sinai\",\"EGSUZ\":\"Suez\",\"EGWAD\":\"New Valley\"},\"ES\":{\"C\":\"A Coru\\u00f1a\",\"VI\":\"Araba\\\/\\u00c1lava\",\"AB\":\"Albacete\",\"A\":\"Alicante\",\"AL\":\"Almer\\u00eda\",\"O\":\"Asturias\",\"AV\":\"\\u00c1vila\",\"BA\":\"Badajoz\",\"PM\":\"Baleares\",\"B\":\"Barcelona\",\"BU\":\"Burgos\",\"CC\":\"C\\u00e1ceres\",\"CA\":\"C\\u00e1diz\",\"S\":\"Cantabria\",\"CS\":\"Castell\\u00f3n\",\"CE\":\"Ceuta\",\"CR\":\"Ciudad Real\",\"CO\":\"C\\u00f3rdoba\",\"CU\":\"Cuenca\",\"GI\":\"Girona\",\"GR\":\"Granada\",\"GU\":\"Guadalajara\",\"SS\":\"Gipuzkoa\",\"H\":\"Huelva\",\"HU\":\"Huesca\",\"J\":\"Ja\\u00e9n\",\"LO\":\"La Rioja\",\"GC\":\"Las Palmas\",\"LE\":\"Le\\u00f3n\",\"L\":\"Lleida\",\"LU\":\"Lugo\",\"M\":\"Madrid\",\"MA\":\"M\\u00e1laga\",\"ML\":\"Melilla\",\"MU\":\"Murcia\",\"NA\":\"Navarra\",\"OR\":\"Ourense\",\"P\":\"Palencia\",\"PO\":\"Pontevedra\",\"SA\":\"Salamanca\",\"TF\":\"Santa Cruz de Tenerife\",\"SG\":\"Segovia\",\"SE\":\"Sevilla\",\"SO\":\"Soria\",\"T\":\"Tarragona\",\"TE\":\"Teruel\",\"TO\":\"Toledo\",\"V\":\"Valencia\",\"VA\":\"Valladolid\",\"BI\":\"Biscay\",\"ZA\":\"Zamora\",\"Z\":\"Zaragoza\"},\"FI\":[],\"FR\":[],\"GF\":[],\"GH\":{\"AF\":\"Ahafo\",\"AH\":\"Ashanti\",\"BA\":\"Brong-Ahafo\",\"BO\":\"Bono\",\"BE\":\"Bono East\",\"CP\":\"Central\",\"EP\":\"Eastern\",\"AA\":\"Greater Accra\",\"NE\":\"North East\",\"NP\":\"Northern\",\"OT\":\"Oti\",\"SV\":\"Savannah\",\"UE\":\"Upper East\",\"UW\":\"Upper West\",\"TV\":\"Volta\",\"WP\":\"Western\",\"WN\":\"Western North\"},\"GP\":[],\"GR\":{\"I\":\"Attica\",\"A\":\"East Macedonia and Thrace\",\"B\":\"Central Macedonia\",\"C\":\"West Macedonia\",\"D\":\"Epirus\",\"E\":\"Thessaly\",\"F\":\"Ionian Islands\",\"G\":\"West Greece\",\"H\":\"Central Greece\",\"J\":\"Peloponnese\",\"K\":\"North Aegean\",\"L\":\"South Aegean\",\"M\":\"Crete\"},\"GT\":{\"GT-AV\":\"Alta Verapaz\",\"GT-BV\":\"Baja Verapaz\",\"GT-CM\":\"Chimaltenango\",\"GT-CQ\":\"Chiquimula\",\"GT-PR\":\"El Progreso\",\"GT-ES\":\"Escuintla\",\"GT-GU\":\"Guatemala\",\"GT-HU\":\"Huehuetenango\",\"GT-IZ\":\"Izabal\",\"GT-JA\":\"Jalapa\",\"GT-JU\":\"Jutiapa\",\"GT-PE\":\"Pet\\u00e9n\",\"GT-QZ\":\"Quetzaltenango\",\"GT-QC\":\"Quich\\u00e9\",\"GT-RE\":\"Retalhuleu\",\"GT-SA\":\"Sacatep\\u00e9quez\",\"GT-SM\":\"San Marcos\",\"GT-SR\":\"Santa Rosa\",\"GT-SO\":\"Solol\\u00e1\",\"GT-SU\":\"Suchitep\\u00e9quez\",\"GT-TO\":\"Totonicap\\u00e1n\",\"GT-ZA\":\"Zacapa\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"HN\":{\"HN-AT\":\"Atl\\u00e1ntida\",\"HN-IB\":\"Bay Islands\",\"HN-CH\":\"Choluteca\",\"HN-CL\":\"Col\\u00f3n\",\"HN-CM\":\"Comayagua\",\"HN-CP\":\"Cop\\u00e1n\",\"HN-CR\":\"Cort\\u00e9s\",\"HN-EP\":\"El Para\\u00edso\",\"HN-FM\":\"Francisco Moraz\\u00e1n\",\"HN-GD\":\"Gracias a Dios\",\"HN-IN\":\"Intibuc\\u00e1\",\"HN-LE\":\"Lempira\",\"HN-LP\":\"La Paz\",\"HN-OC\":\"Ocotepeque\",\"HN-OL\":\"Olancho\",\"HN-SB\":\"Santa B\\u00e1rbara\",\"HN-VA\":\"Valle\",\"HN-YO\":\"Yoro\"},\"HU\":{\"BK\":\"B\\u00e1cs-Kiskun\",\"BE\":\"B\\u00e9k\\u00e9s\",\"BA\":\"Baranya\",\"BZ\":\"Borsod-Aba\\u00faj-Zempl\\u00e9n\",\"BU\":\"Budapest\",\"CS\":\"Csongr\\u00e1d-Csan\\u00e1d\",\"FE\":\"Fej\\u00e9r\",\"GS\":\"Gy\\u0151r-Moson-Sopron\",\"HB\":\"Hajd\\u00fa-Bihar\",\"HE\":\"Heves\",\"JN\":\"J\\u00e1sz-Nagykun-Szolnok\",\"KE\":\"Kom\\u00e1rom-Esztergom\",\"NO\":\"N\\u00f3gr\\u00e1d\",\"PE\":\"Pest\",\"SO\":\"Somogy\",\"SZ\":\"Szabolcs-Szatm\\u00e1r-Bereg\",\"TO\":\"Tolna\",\"VA\":\"Vas\",\"VE\":\"Veszpr\\u00e9m\",\"ZA\":\"Zala\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"IE\":{\"CW\":\"Carlow\",\"CN\":\"Cavan\",\"CE\":\"Clare\",\"CO\":\"Cork\",\"DL\":\"Donegal\",\"D\":\"Dublin\",\"G\":\"Galway\",\"KY\":\"Kerry\",\"KE\":\"Kildare\",\"KK\":\"Kilkenny\",\"LS\":\"Laois\",\"LM\":\"Leitrim\",\"LK\":\"Limerick\",\"LD\":\"Longford\",\"LH\":\"Louth\",\"MO\":\"Mayo\",\"MH\":\"Meath\",\"MN\":\"Monaghan\",\"OY\":\"Offaly\",\"RN\":\"Roscommon\",\"SO\":\"Sligo\",\"TA\":\"Tipperary\",\"WD\":\"Waterford\",\"WH\":\"Westmeath\",\"WX\":\"Wexford\",\"WW\":\"Wicklow\"},\"IN\":{\"AP\":\"Andhra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"LA\":\"Ladakh\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Odisha\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TS\":\"Telangana\",\"TR\":\"Tripura\",\"UK\":\"Uttarakhand\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadra and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"IR\":{\"KHZ\":\"Khuzestan (\\u062e\\u0648\\u0632\\u0633\\u062a\\u0627\\u0646)\",\"THR\":\"Tehran (\\u062a\\u0647\\u0631\\u0627\\u0646)\",\"ILM\":\"Ilaam (\\u0627\\u06cc\\u0644\\u0627\\u0645)\",\"BHR\":\"Bushehr (\\u0628\\u0648\\u0634\\u0647\\u0631)\",\"ADL\":\"Ardabil (\\u0627\\u0631\\u062f\\u0628\\u06cc\\u0644)\",\"ESF\":\"Isfahan (\\u0627\\u0635\\u0641\\u0647\\u0627\\u0646)\",\"YZD\":\"Yazd (\\u06cc\\u0632\\u062f)\",\"KRH\":\"Kermanshah (\\u06a9\\u0631\\u0645\\u0627\\u0646\\u0634\\u0627\\u0647)\",\"KRN\":\"Kerman (\\u06a9\\u0631\\u0645\\u0627\\u0646)\",\"HDN\":\"Hamadan (\\u0647\\u0645\\u062f\\u0627\\u0646)\",\"GZN\":\"Ghazvin (\\u0642\\u0632\\u0648\\u06cc\\u0646)\",\"ZJN\":\"Zanjan (\\u0632\\u0646\\u062c\\u0627\\u0646)\",\"LRS\":\"Luristan (\\u0644\\u0631\\u0633\\u062a\\u0627\\u0646)\",\"ABZ\":\"Alborz (\\u0627\\u0644\\u0628\\u0631\\u0632)\",\"EAZ\":\"East Azarbaijan (\\u0622\\u0630\\u0631\\u0628\\u0627\\u06cc\\u062c\\u0627\\u0646 \\u0634\\u0631\\u0642\\u06cc)\",\"WAZ\":\"West Azarbaijan (\\u0622\\u0630\\u0631\\u0628\\u0627\\u06cc\\u062c\\u0627\\u0646 \\u063a\\u0631\\u0628\\u06cc)\",\"CHB\":\"Chaharmahal and Bakhtiari (\\u0686\\u0647\\u0627\\u0631\\u0645\\u062d\\u0627\\u0644 \\u0648 \\u0628\\u062e\\u062a\\u06cc\\u0627\\u0631\\u06cc)\",\"SKH\":\"South Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u062c\\u0646\\u0648\\u0628\\u06cc)\",\"RKH\":\"Razavi Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0631\\u0636\\u0648\\u06cc)\",\"NKH\":\"North Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0634\\u0645\\u0627\\u0644\\u06cc)\",\"SMN\":\"Semnan (\\u0633\\u0645\\u0646\\u0627\\u0646)\",\"FRS\":\"Fars (\\u0641\\u0627\\u0631\\u0633)\",\"QHM\":\"Qom (\\u0642\\u0645)\",\"KRD\":\"Kurdistan \\\/ \\u06a9\\u0631\\u062f\\u0633\\u062a\\u0627\\u0646)\",\"KBD\":\"Kohgiluyeh and BoyerAhmad (\\u06a9\\u0647\\u06af\\u06cc\\u0644\\u0648\\u06cc\\u06cc\\u0647 \\u0648 \\u0628\\u0648\\u06cc\\u0631\\u0627\\u062d\\u0645\\u062f)\",\"GLS\":\"Golestan (\\u06af\\u0644\\u0633\\u062a\\u0627\\u0646)\",\"GIL\":\"Gilan (\\u06af\\u06cc\\u0644\\u0627\\u0646)\",\"MZN\":\"Mazandaran (\\u0645\\u0627\\u0632\\u0646\\u062f\\u0631\\u0627\\u0646)\",\"MKZ\":\"Markazi (\\u0645\\u0631\\u06a9\\u0632\\u06cc)\",\"HRZ\":\"Hormozgan (\\u0647\\u0631\\u0645\\u0632\\u06af\\u0627\\u0646)\",\"SBN\":\"Sistan and Baluchestan (\\u0633\\u06cc\\u0633\\u062a\\u0627\\u0646 \\u0648 \\u0628\\u0644\\u0648\\u0686\\u0633\\u062a\\u0627\\u0646)\"},\"IS\":[],\"IT\":{\"AG\":\"Agrigento\",\"AL\":\"Alessandria\",\"AN\":\"Ancona\",\"AO\":\"Aosta\",\"AR\":\"Arezzo\",\"AP\":\"Ascoli Piceno\",\"AT\":\"Asti\",\"AV\":\"Avellino\",\"BA\":\"Bari\",\"BT\":\"Barletta-Andria-Trani\",\"BL\":\"Belluno\",\"BN\":\"Benevento\",\"BG\":\"Bergamo\",\"BI\":\"Biella\",\"BO\":\"Bologna\",\"BZ\":\"Bolzano\",\"BS\":\"Brescia\",\"BR\":\"Brindisi\",\"CA\":\"Cagliari\",\"CL\":\"Caltanissetta\",\"CB\":\"Campobasso\",\"CE\":\"Caserta\",\"CT\":\"Catania\",\"CZ\":\"Catanzaro\",\"CH\":\"Chieti\",\"CO\":\"Como\",\"CS\":\"Cosenza\",\"CR\":\"Cremona\",\"KR\":\"Crotone\",\"CN\":\"Cuneo\",\"EN\":\"Enna\",\"FM\":\"Fermo\",\"FE\":\"Ferrara\",\"FI\":\"Firenze\",\"FG\":\"Foggia\",\"FC\":\"Forl\\u00ec-Cesena\",\"FR\":\"Frosinone\",\"GE\":\"Genova\",\"GO\":\"Gorizia\",\"GR\":\"Grosseto\",\"IM\":\"Imperia\",\"IS\":\"Isernia\",\"SP\":\"La Spezia\",\"AQ\":\"L'Aquila\",\"LT\":\"Latina\",\"LE\":\"Lecce\",\"LC\":\"Lecco\",\"LI\":\"Livorno\",\"LO\":\"Lodi\",\"LU\":\"Lucca\",\"MC\":\"Macerata\",\"MN\":\"Mantova\",\"MS\":\"Massa-Carrara\",\"MT\":\"Matera\",\"ME\":\"Messina\",\"MI\":\"Milano\",\"MO\":\"Modena\",\"MB\":\"Monza e della Brianza\",\"NA\":\"Napoli\",\"NO\":\"Novara\",\"NU\":\"Nuoro\",\"OR\":\"Oristano\",\"PD\":\"Padova\",\"PA\":\"Palermo\",\"PR\":\"Parma\",\"PV\":\"Pavia\",\"PG\":\"Perugia\",\"PU\":\"Pesaro e Urbino\",\"PE\":\"Pescara\",\"PC\":\"Piacenza\",\"PI\":\"Pisa\",\"PT\":\"Pistoia\",\"PN\":\"Pordenone\",\"PZ\":\"Potenza\",\"PO\":\"Prato\",\"RG\":\"Ragusa\",\"RA\":\"Ravenna\",\"RC\":\"Reggio Calabria\",\"RE\":\"Reggio Emilia\",\"RI\":\"Rieti\",\"RN\":\"Rimini\",\"RM\":\"Roma\",\"RO\":\"Rovigo\",\"SA\":\"Salerno\",\"SS\":\"Sassari\",\"SV\":\"Savona\",\"SI\":\"Siena\",\"SR\":\"Siracusa\",\"SO\":\"Sondrio\",\"SU\":\"Sud Sardegna\",\"TA\":\"Taranto\",\"TE\":\"Teramo\",\"TR\":\"Terni\",\"TO\":\"Torino\",\"TP\":\"Trapani\",\"TN\":\"Trento\",\"TV\":\"Treviso\",\"TS\":\"Trieste\",\"UD\":\"Udine\",\"VA\":\"Varese\",\"VE\":\"Venezia\",\"VB\":\"Verbano-Cusio-Ossola\",\"VC\":\"Vercelli\",\"VR\":\"Verona\",\"VV\":\"Vibo Valentia\",\"VI\":\"Vicenza\",\"VT\":\"Viterbo\"},\"IL\":[],\"IM\":[],\"JM\":{\"JM-01\":\"Kingston\",\"JM-02\":\"Saint Andrew\",\"JM-03\":\"Saint Thomas\",\"JM-04\":\"Portland\",\"JM-05\":\"Saint Mary\",\"JM-06\":\"Saint Ann\",\"JM-07\":\"Trelawny\",\"JM-08\":\"Saint James\",\"JM-09\":\"Hanover\",\"JM-10\":\"Westmoreland\",\"JM-11\":\"Saint Elizabeth\",\"JM-12\":\"Manchester\",\"JM-13\":\"Clarendon\",\"JM-14\":\"Saint Catherine\"},\"JP\":{\"JP01\":\"Hokkaido\",\"JP02\":\"Aomori\",\"JP03\":\"Iwate\",\"JP04\":\"Miyagi\",\"JP05\":\"Akita\",\"JP06\":\"Yamagata\",\"JP07\":\"Fukushima\",\"JP08\":\"Ibaraki\",\"JP09\":\"Tochigi\",\"JP10\":\"Gunma\",\"JP11\":\"Saitama\",\"JP12\":\"Chiba\",\"JP13\":\"Tokyo\",\"JP14\":\"Kanagawa\",\"JP15\":\"Niigata\",\"JP16\":\"Toyama\",\"JP17\":\"Ishikawa\",\"JP18\":\"Fukui\",\"JP19\":\"Yamanashi\",\"JP20\":\"Nagano\",\"JP21\":\"Gifu\",\"JP22\":\"Shizuoka\",\"JP23\":\"Aichi\",\"JP24\":\"Mie\",\"JP25\":\"Shiga\",\"JP26\":\"Kyoto\",\"JP27\":\"Osaka\",\"JP28\":\"Hyogo\",\"JP29\":\"Nara\",\"JP30\":\"Wakayama\",\"JP31\":\"Tottori\",\"JP32\":\"Shimane\",\"JP33\":\"Okayama\",\"JP34\":\"Hiroshima\",\"JP35\":\"Yamaguchi\",\"JP36\":\"Tokushima\",\"JP37\":\"Kagawa\",\"JP38\":\"Ehime\",\"JP39\":\"Kochi\",\"JP40\":\"Fukuoka\",\"JP41\":\"Saga\",\"JP42\":\"Nagasaki\",\"JP43\":\"Kumamoto\",\"JP44\":\"Oita\",\"JP45\":\"Miyazaki\",\"JP46\":\"Kagoshima\",\"JP47\":\"Okinawa\"},\"KE\":{\"KE01\":\"Baringo\",\"KE02\":\"Bomet\",\"KE03\":\"Bungoma\",\"KE04\":\"Busia\",\"KE05\":\"Elgeyo-Marakwet\",\"KE06\":\"Embu\",\"KE07\":\"Garissa\",\"KE08\":\"Homa Bay\",\"KE09\":\"Isiolo\",\"KE10\":\"Kajiado\",\"KE11\":\"Kakamega\",\"KE12\":\"Kericho\",\"KE13\":\"Kiambu\",\"KE14\":\"Kilifi\",\"KE15\":\"Kirinyaga\",\"KE16\":\"Kisii\",\"KE17\":\"Kisumu\",\"KE18\":\"Kitui\",\"KE19\":\"Kwale\",\"KE20\":\"Laikipia\",\"KE21\":\"Lamu\",\"KE22\":\"Machakos\",\"KE23\":\"Makueni\",\"KE24\":\"Mandera\",\"KE25\":\"Marsabit\",\"KE26\":\"Meru\",\"KE27\":\"Migori\",\"KE28\":\"Mombasa\",\"KE29\":\"Murang\\u2019a\",\"KE30\":\"Nairobi County\",\"KE31\":\"Nakuru\",\"KE32\":\"Nandi\",\"KE33\":\"Narok\",\"KE34\":\"Nyamira\",\"KE35\":\"Nyandarua\",\"KE36\":\"Nyeri\",\"KE37\":\"Samburu\",\"KE38\":\"Siaya\",\"KE39\":\"Taita-Taveta\",\"KE40\":\"Tana River\",\"KE41\":\"Tharaka-Nithi\",\"KE42\":\"Trans Nzoia\",\"KE43\":\"Turkana\",\"KE44\":\"Uasin Gishu\",\"KE45\":\"Vihiga\",\"KE46\":\"Wajir\",\"KE47\":\"West Pokot\"},\"KR\":[],\"KW\":[],\"LA\":{\"AT\":\"Attapeu\",\"BK\":\"Bokeo\",\"BL\":\"Bolikhamsai\",\"CH\":\"Champasak\",\"HO\":\"Houaphanh\",\"KH\":\"Khammouane\",\"LM\":\"Luang Namtha\",\"LP\":\"Luang Prabang\",\"OU\":\"Oudomxay\",\"PH\":\"Phongsaly\",\"SL\":\"Salavan\",\"SV\":\"Savannakhet\",\"VI\":\"Vientiane Province\",\"VT\":\"Vientiane\",\"XA\":\"Sainyabuli\",\"XE\":\"Sekong\",\"XI\":\"Xiangkhouang\",\"XS\":\"Xaisomboun\"},\"LB\":[],\"LR\":{\"BM\":\"Bomi\",\"BN\":\"Bong\",\"GA\":\"Gbarpolu\",\"GB\":\"Grand Bassa\",\"GC\":\"Grand Cape Mount\",\"GG\":\"Grand Gedeh\",\"GK\":\"Grand Kru\",\"LO\":\"Lofa\",\"MA\":\"Margibi\",\"MY\":\"Maryland\",\"MO\":\"Montserrado\",\"NM\":\"Nimba\",\"RV\":\"Rivercess\",\"RG\":\"River Gee\",\"SN\":\"Sinoe\"},\"LU\":[],\"MD\":{\"C\":\"Chi\\u0219in\\u0103u\",\"BL\":\"B\\u0103l\\u021bi\",\"AN\":\"Anenii Noi\",\"BS\":\"Basarabeasca\",\"BR\":\"Briceni\",\"CH\":\"Cahul\",\"CT\":\"Cantemir\",\"CL\":\"C\\u0103l\\u0103ra\\u0219i\",\"CS\":\"C\\u0103u\\u0219eni\",\"CM\":\"Cimi\\u0219lia\",\"CR\":\"Criuleni\",\"DN\":\"Dondu\\u0219eni\",\"DR\":\"Drochia\",\"DB\":\"Dub\\u0103sari\",\"ED\":\"Edine\\u021b\",\"FL\":\"F\\u0103le\\u0219ti\",\"FR\":\"Flore\\u0219ti\",\"GE\":\"UTA G\\u0103g\\u0103uzia\",\"GL\":\"Glodeni\",\"HN\":\"H\\u00eence\\u0219ti\",\"IL\":\"Ialoveni\",\"LV\":\"Leova\",\"NS\":\"Nisporeni\",\"OC\":\"Ocni\\u021ba\",\"OR\":\"Orhei\",\"RZ\":\"Rezina\",\"RS\":\"R\\u00ee\\u0219cani\",\"SG\":\"S\\u00eengerei\",\"SR\":\"Soroca\",\"ST\":\"Str\\u0103\\u0219eni\",\"SD\":\"\\u0218old\\u0103ne\\u0219ti\",\"SV\":\"\\u0218tefan Vod\\u0103\",\"TR\":\"Taraclia\",\"TL\":\"Telene\\u0219ti\",\"UN\":\"Ungheni\"},\"MQ\":[],\"MT\":[],\"MX\":{\"DF\":\"Ciudad de M\\u00e9xico\",\"JA\":\"Jalisco\",\"NL\":\"Nuevo Le\\u00f3n\",\"AG\":\"Aguascalientes\",\"BC\":\"Baja California\",\"BS\":\"Baja California Sur\",\"CM\":\"Campeche\",\"CS\":\"Chiapas\",\"CH\":\"Chihuahua\",\"CO\":\"Coahuila\",\"CL\":\"Colima\",\"DG\":\"Durango\",\"GT\":\"Guanajuato\",\"GR\":\"Guerrero\",\"HG\":\"Hidalgo\",\"MX\":\"Estado de M\\u00e9xico\",\"MI\":\"Michoac\\u00e1n\",\"MO\":\"Morelos\",\"NA\":\"Nayarit\",\"OA\":\"Oaxaca\",\"PU\":\"Puebla\",\"QT\":\"Quer\\u00e9taro\",\"QR\":\"Quintana Roo\",\"SL\":\"San Luis Potos\\u00ed\",\"SI\":\"Sinaloa\",\"SO\":\"Sonora\",\"TB\":\"Tabasco\",\"TM\":\"Tamaulipas\",\"TL\":\"Tlaxcala\",\"VE\":\"Veracruz\",\"YU\":\"Yucat\\u00e1n\",\"ZA\":\"Zacatecas\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"LBN\":\"Labuan\",\"MLK\":\"Malacca (Melaka)\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PNG\":\"Penang (Pulau Pinang)\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"PJY\":\"Putrajaya\",\"KUL\":\"Kuala Lumpur\"},\"MZ\":{\"MZP\":\"Cabo Delgado\",\"MZG\":\"Gaza\",\"MZI\":\"Inhambane\",\"MZB\":\"Manica\",\"MZL\":\"Maputo Province\",\"MZMPM\":\"Maputo\",\"MZN\":\"Nampula\",\"MZA\":\"Niassa\",\"MZS\":\"Sofala\",\"MZT\":\"Tete\",\"MZQ\":\"Zamb\\u00e9zia\"},\"NA\":{\"ER\":\"Erongo\",\"HA\":\"Hardap\",\"KA\":\"Karas\",\"KE\":\"Kavango East\",\"KW\":\"Kavango West\",\"KH\":\"Khomas\",\"KU\":\"Kunene\",\"OW\":\"Ohangwena\",\"OH\":\"Omaheke\",\"OS\":\"Omusati\",\"ON\":\"Oshana\",\"OT\":\"Oshikoto\",\"OD\":\"Otjozondjupa\",\"CA\":\"Zambezi\"},\"NG\":{\"AB\":\"Abia\",\"FC\":\"Abuja\",\"AD\":\"Adamawa\",\"AK\":\"Akwa Ibom\",\"AN\":\"Anambra\",\"BA\":\"Bauchi\",\"BY\":\"Bayelsa\",\"BE\":\"Benue\",\"BO\":\"Borno\",\"CR\":\"Cross River\",\"DE\":\"Delta\",\"EB\":\"Ebonyi\",\"ED\":\"Edo\",\"EK\":\"Ekiti\",\"EN\":\"Enugu\",\"GO\":\"Gombe\",\"IM\":\"Imo\",\"JI\":\"Jigawa\",\"KD\":\"Kaduna\",\"KN\":\"Kano\",\"KT\":\"Katsina\",\"KE\":\"Kebbi\",\"KO\":\"Kogi\",\"KW\":\"Kwara\",\"LA\":\"Lagos\",\"NA\":\"Nasarawa\",\"NI\":\"Niger\",\"OG\":\"Ogun\",\"ON\":\"Ondo\",\"OS\":\"Osun\",\"OY\":\"Oyo\",\"PL\":\"Plateau\",\"RI\":\"Rivers\",\"SO\":\"Sokoto\",\"TA\":\"Taraba\",\"YO\":\"Yobe\",\"ZA\":\"Zamfara\"},\"NL\":[],\"NO\":[],\"NP\":{\"BAG\":\"Bagmati\",\"BHE\":\"Bheri\",\"DHA\":\"Dhaulagiri\",\"GAN\":\"Gandaki\",\"JAN\":\"Janakpur\",\"KAR\":\"Karnali\",\"KOS\":\"Koshi\",\"LUM\":\"Lumbini\",\"MAH\":\"Mahakali\",\"MEC\":\"Mechi\",\"NAR\":\"Narayani\",\"RAP\":\"Rapti\",\"SAG\":\"Sagarmatha\",\"SET\":\"Seti\"},\"NI\":{\"NI-AN\":\"Atl\\u00e1ntico Norte\",\"NI-AS\":\"Atl\\u00e1ntico Sur\",\"NI-BO\":\"Boaco\",\"NI-CA\":\"Carazo\",\"NI-CI\":\"Chinandega\",\"NI-CO\":\"Chontales\",\"NI-ES\":\"Estel\\u00ed\",\"NI-GR\":\"Granada\",\"NI-JI\":\"Jinotega\",\"NI-LE\":\"Le\\u00f3n\",\"NI-MD\":\"Madriz\",\"NI-MN\":\"Managua\",\"NI-MS\":\"Masaya\",\"NI-MT\":\"Matagalpa\",\"NI-NS\":\"Nueva Segovia\",\"NI-RI\":\"Rivas\",\"NI-SJ\":\"R\\u00edo San Juan\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"GI\":\"Gisborne\",\"HB\":\"Hawke\\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"PA\":{\"PA-1\":\"Bocas del Toro\",\"PA-2\":\"Cocl\\u00e9\",\"PA-3\":\"Col\\u00f3n\",\"PA-4\":\"Chiriqu\\u00ed\",\"PA-5\":\"Dari\\u00e9n\",\"PA-6\":\"Herrera\",\"PA-7\":\"Los Santos\",\"PA-8\":\"Panam\\u00e1\",\"PA-9\":\"Veraguas\",\"PA-10\":\"West Panam\\u00e1\",\"PA-EM\":\"Ember\\u00e1\",\"PA-KY\":\"Guna Yala\",\"PA-NB\":\"Ng\\u00f6be-Bugl\\u00e9\"},\"PE\":{\"CAL\":\"El Callao\",\"LMA\":\"Municipalidad Metropolitana de Lima\",\"AMA\":\"Amazonas\",\"ANC\":\"Ancash\",\"APU\":\"Apur\\u00edmac\",\"ARE\":\"Arequipa\",\"AYA\":\"Ayacucho\",\"CAJ\":\"Cajamarca\",\"CUS\":\"Cusco\",\"HUV\":\"Huancavelica\",\"HUC\":\"Hu\\u00e1nuco\",\"ICA\":\"Ica\",\"JUN\":\"Jun\\u00edn\",\"LAL\":\"La Libertad\",\"LAM\":\"Lambayeque\",\"LIM\":\"Lima\",\"LOR\":\"Loreto\",\"MDD\":\"Madre de Dios\",\"MOQ\":\"Moquegua\",\"PAS\":\"Pasco\",\"PIU\":\"Piura\",\"PUN\":\"Puno\",\"SAM\":\"San Mart\\u00edn\",\"TAC\":\"Tacna\",\"TUM\":\"Tumbes\",\"UCA\":\"Ucayali\"},\"PH\":{\"ABR\":\"Abra\",\"AGN\":\"Agusan del Norte\",\"AGS\":\"Agusan del Sur\",\"AKL\":\"Aklan\",\"ALB\":\"Albay\",\"ANT\":\"Antique\",\"APA\":\"Apayao\",\"AUR\":\"Aurora\",\"BAS\":\"Basilan\",\"BAN\":\"Bataan\",\"BTN\":\"Batanes\",\"BTG\":\"Batangas\",\"BEN\":\"Benguet\",\"BIL\":\"Biliran\",\"BOH\":\"Bohol\",\"BUK\":\"Bukidnon\",\"BUL\":\"Bulacan\",\"CAG\":\"Cagayan\",\"CAN\":\"Camarines Norte\",\"CAS\":\"Camarines Sur\",\"CAM\":\"Camiguin\",\"CAP\":\"Capiz\",\"CAT\":\"Catanduanes\",\"CAV\":\"Cavite\",\"CEB\":\"Cebu\",\"COM\":\"Compostela Valley\",\"NCO\":\"Cotabato\",\"DAV\":\"Davao del Norte\",\"DAS\":\"Davao del Sur\",\"DAC\":\"Davao Occidental\",\"DAO\":\"Davao Oriental\",\"DIN\":\"Dinagat Islands\",\"EAS\":\"Eastern Samar\",\"GUI\":\"Guimaras\",\"IFU\":\"Ifugao\",\"ILN\":\"Ilocos Norte\",\"ILS\":\"Ilocos Sur\",\"ILI\":\"Iloilo\",\"ISA\":\"Isabela\",\"KAL\":\"Kalinga\",\"LUN\":\"La Union\",\"LAG\":\"Laguna\",\"LAN\":\"Lanao del Norte\",\"LAS\":\"Lanao del Sur\",\"LEY\":\"Leyte\",\"MAG\":\"Maguindanao\",\"MAD\":\"Marinduque\",\"MAS\":\"Masbate\",\"MSC\":\"Misamis Occidental\",\"MSR\":\"Misamis Oriental\",\"MOU\":\"Mountain Province\",\"NEC\":\"Negros Occidental\",\"NER\":\"Negros Oriental\",\"NSA\":\"Northern Samar\",\"NUE\":\"Nueva Ecija\",\"NUV\":\"Nueva Vizcaya\",\"MDC\":\"Occidental Mindoro\",\"MDR\":\"Oriental Mindoro\",\"PLW\":\"Palawan\",\"PAM\":\"Pampanga\",\"PAN\":\"Pangasinan\",\"QUE\":\"Quezon\",\"QUI\":\"Quirino\",\"RIZ\":\"Rizal\",\"ROM\":\"Romblon\",\"WSA\":\"Samar\",\"SAR\":\"Sarangani\",\"SIQ\":\"Siquijor\",\"SOR\":\"Sorsogon\",\"SCO\":\"South Cotabato\",\"SLE\":\"Southern Leyte\",\"SUK\":\"Sultan Kudarat\",\"SLU\":\"Sulu\",\"SUN\":\"Surigao del Norte\",\"SUR\":\"Surigao del Sur\",\"TAR\":\"Tarlac\",\"TAW\":\"Tawi-Tawi\",\"ZMB\":\"Zambales\",\"ZAN\":\"Zamboanga del Norte\",\"ZAS\":\"Zamboanga del Sur\",\"ZSI\":\"Zamboanga Sibugay\",\"00\":\"Metro Manila\"},\"PK\":{\"JK\":\"Azad Kashmir\",\"BA\":\"Balochistan\",\"TA\":\"FATA\",\"GB\":\"Gilgit Baltistan\",\"IS\":\"Islamabad Capital Territory\",\"KP\":\"Khyber Pakhtunkhwa\",\"PB\":\"Punjab\",\"SD\":\"Sindh\"},\"PL\":[],\"PR\":[],\"PT\":[],\"PY\":{\"PY-ASU\":\"Asunci\\u00f3n\",\"PY-1\":\"Concepci\\u00f3n\",\"PY-2\":\"San Pedro\",\"PY-3\":\"Cordillera\",\"PY-4\":\"Guair\\u00e1\",\"PY-5\":\"Caaguaz\\u00fa\",\"PY-6\":\"Caazap\\u00e1\",\"PY-7\":\"Itap\\u00faa\",\"PY-8\":\"Misiones\",\"PY-9\":\"Paraguar\\u00ed\",\"PY-10\":\"Alto Paran\\u00e1\",\"PY-11\":\"Central\",\"PY-12\":\"\\u00d1eembuc\\u00fa\",\"PY-13\":\"Amambay\",\"PY-14\":\"Canindey\\u00fa\",\"PY-15\":\"Presidente Hayes\",\"PY-16\":\"Alto Paraguay\",\"PY-17\":\"Boquer\\u00f3n\"},\"RE\":[],\"RO\":{\"AB\":\"Alba\",\"AR\":\"Arad\",\"AG\":\"Arge\\u0219\",\"BC\":\"Bac\\u0103u\",\"BH\":\"Bihor\",\"BN\":\"Bistri\\u021ba-N\\u0103s\\u0103ud\",\"BT\":\"Boto\\u0219ani\",\"BR\":\"Br\\u0103ila\",\"BV\":\"Bra\\u0219ov\",\"B\":\"Bucure\\u0219ti\",\"BZ\":\"Buz\\u0103u\",\"CL\":\"C\\u0103l\\u0103ra\\u0219i\",\"CS\":\"Cara\\u0219-Severin\",\"CJ\":\"Cluj\",\"CT\":\"Constan\\u021ba\",\"CV\":\"Covasna\",\"DB\":\"D\\u00e2mbovi\\u021ba\",\"DJ\":\"Dolj\",\"GL\":\"Gala\\u021bi\",\"GR\":\"Giurgiu\",\"GJ\":\"Gorj\",\"HR\":\"Harghita\",\"HD\":\"Hunedoara\",\"IL\":\"Ialomi\\u021ba\",\"IS\":\"Ia\\u0219i\",\"IF\":\"Ilfov\",\"MM\":\"Maramure\\u0219\",\"MH\":\"Mehedin\\u021bi\",\"MS\":\"Mure\\u0219\",\"NT\":\"Neam\\u021b\",\"OT\":\"Olt\",\"PH\":\"Prahova\",\"SJ\":\"S\\u0103laj\",\"SM\":\"Satu Mare\",\"SB\":\"Sibiu\",\"SV\":\"Suceava\",\"TR\":\"Teleorman\",\"TM\":\"Timi\\u0219\",\"TL\":\"Tulcea\",\"VL\":\"V\\u00e2lcea\",\"VS\":\"Vaslui\",\"VN\":\"Vrancea\"},\"SG\":[],\"SK\":[],\"SI\":[],\"SV\":{\"SV-AH\":\"Ahuachap\\u00e1n\",\"SV-CA\":\"Caba\\u00f1as\",\"SV-CH\":\"Chalatenango\",\"SV-CU\":\"Cuscatl\\u00e1n\",\"SV-LI\":\"La Libertad\",\"SV-MO\":\"Moraz\\u00e1n\",\"SV-PA\":\"La Paz\",\"SV-SA\":\"Santa Ana\",\"SV-SM\":\"San Miguel\",\"SV-SO\":\"Sonsonate\",\"SV-SS\":\"San Salvador\",\"SV-SV\":\"San Vicente\",\"SV-UN\":\"La Uni\\u00f3n\",\"SV-US\":\"Usulut\\u00e1n\"},\"TH\":{\"TH-37\":\"Amnat Charoen\",\"TH-15\":\"Ang Thong\",\"TH-14\":\"Ayutthaya\",\"TH-10\":\"Bangkok\",\"TH-38\":\"Bueng Kan\",\"TH-31\":\"Buri Ram\",\"TH-24\":\"Chachoengsao\",\"TH-18\":\"Chai Nat\",\"TH-36\":\"Chaiyaphum\",\"TH-22\":\"Chanthaburi\",\"TH-50\":\"Chiang Mai\",\"TH-57\":\"Chiang Rai\",\"TH-20\":\"Chonburi\",\"TH-86\":\"Chumphon\",\"TH-46\":\"Kalasin\",\"TH-62\":\"Kamphaeng Phet\",\"TH-71\":\"Kanchanaburi\",\"TH-40\":\"Khon Kaen\",\"TH-81\":\"Krabi\",\"TH-52\":\"Lampang\",\"TH-51\":\"Lamphun\",\"TH-42\":\"Loei\",\"TH-16\":\"Lopburi\",\"TH-58\":\"Mae Hong Son\",\"TH-44\":\"Maha Sarakham\",\"TH-49\":\"Mukdahan\",\"TH-26\":\"Nakhon Nayok\",\"TH-73\":\"Nakhon Pathom\",\"TH-48\":\"Nakhon Phanom\",\"TH-30\":\"Nakhon Ratchasima\",\"TH-60\":\"Nakhon Sawan\",\"TH-80\":\"Nakhon Si Thammarat\",\"TH-55\":\"Nan\",\"TH-96\":\"Narathiwat\",\"TH-39\":\"Nong Bua Lam Phu\",\"TH-43\":\"Nong Khai\",\"TH-12\":\"Nonthaburi\",\"TH-13\":\"Pathum Thani\",\"TH-94\":\"Pattani\",\"TH-82\":\"Phang Nga\",\"TH-93\":\"Phatthalung\",\"TH-56\":\"Phayao\",\"TH-67\":\"Phetchabun\",\"TH-76\":\"Phetchaburi\",\"TH-66\":\"Phichit\",\"TH-65\":\"Phitsanulok\",\"TH-54\":\"Phrae\",\"TH-83\":\"Phuket\",\"TH-25\":\"Prachin Buri\",\"TH-77\":\"Prachuap Khiri Khan\",\"TH-85\":\"Ranong\",\"TH-70\":\"Ratchaburi\",\"TH-21\":\"Rayong\",\"TH-45\":\"Roi Et\",\"TH-27\":\"Sa Kaeo\",\"TH-47\":\"Sakon Nakhon\",\"TH-11\":\"Samut Prakan\",\"TH-74\":\"Samut Sakhon\",\"TH-75\":\"Samut Songkhram\",\"TH-19\":\"Saraburi\",\"TH-91\":\"Satun\",\"TH-17\":\"Sing Buri\",\"TH-33\":\"Sisaket\",\"TH-90\":\"Songkhla\",\"TH-64\":\"Sukhothai\",\"TH-72\":\"Suphan Buri\",\"TH-84\":\"Surat Thani\",\"TH-32\":\"Surin\",\"TH-63\":\"Tak\",\"TH-92\":\"Trang\",\"TH-23\":\"Trat\",\"TH-34\":\"Ubon Ratchathani\",\"TH-41\":\"Udon Thani\",\"TH-61\":\"Uthai Thani\",\"TH-53\":\"Uttaradit\",\"TH-95\":\"Yala\",\"TH-35\":\"Yasothon\"},\"TR\":{\"TR01\":\"Adana\",\"TR02\":\"Ad\\u0131yaman\",\"TR03\":\"Afyon\",\"TR04\":\"A\\u011fr\\u0131\",\"TR05\":\"Amasya\",\"TR06\":\"Ankara\",\"TR07\":\"Antalya\",\"TR08\":\"Artvin\",\"TR09\":\"Ayd\\u0131n\",\"TR10\":\"Bal\\u0131kesir\",\"TR11\":\"Bilecik\",\"TR12\":\"Bing\\u00f6l\",\"TR13\":\"Bitlis\",\"TR14\":\"Bolu\",\"TR15\":\"Burdur\",\"TR16\":\"Bursa\",\"TR17\":\"\\u00c7anakkale\",\"TR18\":\"\\u00c7ank\\u0131r\\u0131\",\"TR19\":\"\\u00c7orum\",\"TR20\":\"Denizli\",\"TR21\":\"Diyarbak\\u0131r\",\"TR22\":\"Edirne\",\"TR23\":\"Elaz\\u0131\\u011f\",\"TR24\":\"Erzincan\",\"TR25\":\"Erzurum\",\"TR26\":\"Eski\\u015fehir\",\"TR27\":\"Gaziantep\",\"TR28\":\"Giresun\",\"TR29\":\"G\\u00fcm\\u00fc\\u015fhane\",\"TR30\":\"Hakkari\",\"TR31\":\"Hatay\",\"TR32\":\"Isparta\",\"TR33\":\"\\u0130\\u00e7el\",\"TR34\":\"\\u0130stanbul\",\"TR35\":\"\\u0130zmir\",\"TR36\":\"Kars\",\"TR37\":\"Kastamonu\",\"TR38\":\"Kayseri\",\"TR39\":\"K\\u0131rklareli\",\"TR40\":\"K\\u0131r\\u015fehir\",\"TR41\":\"Kocaeli\",\"TR42\":\"Konya\",\"TR43\":\"K\\u00fctahya\",\"TR44\":\"Malatya\",\"TR45\":\"Manisa\",\"TR46\":\"Kahramanmara\\u015f\",\"TR47\":\"Mardin\",\"TR48\":\"Mu\\u011fla\",\"TR49\":\"Mu\\u015f\",\"TR50\":\"Nev\\u015fehir\",\"TR51\":\"Ni\\u011fde\",\"TR52\":\"Ordu\",\"TR53\":\"Rize\",\"TR54\":\"Sakarya\",\"TR55\":\"Samsun\",\"TR56\":\"Siirt\",\"TR57\":\"Sinop\",\"TR58\":\"Sivas\",\"TR59\":\"Tekirda\\u011f\",\"TR60\":\"Tokat\",\"TR61\":\"Trabzon\",\"TR62\":\"Tunceli\",\"TR63\":\"\\u015eanl\\u0131urfa\",\"TR64\":\"U\\u015fak\",\"TR65\":\"Van\",\"TR66\":\"Yozgat\",\"TR67\":\"Zonguldak\",\"TR68\":\"Aksaray\",\"TR69\":\"Bayburt\",\"TR70\":\"Karaman\",\"TR71\":\"K\\u0131r\\u0131kkale\",\"TR72\":\"Batman\",\"TR73\":\"\\u015e\\u0131rnak\",\"TR74\":\"Bart\\u0131n\",\"TR75\":\"Ardahan\",\"TR76\":\"I\\u011fd\\u0131r\",\"TR77\":\"Yalova\",\"TR78\":\"Karab\\u00fck\",\"TR79\":\"Kilis\",\"TR80\":\"Osmaniye\",\"TR81\":\"D\\u00fczce\"},\"TZ\":{\"TZ01\":\"Arusha\",\"TZ02\":\"Dar es Salaam\",\"TZ03\":\"Dodoma\",\"TZ04\":\"Iringa\",\"TZ05\":\"Kagera\",\"TZ06\":\"Pemba North\",\"TZ07\":\"Zanzibar North\",\"TZ08\":\"Kigoma\",\"TZ09\":\"Kilimanjaro\",\"TZ10\":\"Pemba South\",\"TZ11\":\"Zanzibar South\",\"TZ12\":\"Lindi\",\"TZ13\":\"Mara\",\"TZ14\":\"Mbeya\",\"TZ15\":\"Zanzibar West\",\"TZ16\":\"Morogoro\",\"TZ17\":\"Mtwara\",\"TZ18\":\"Mwanza\",\"TZ19\":\"Coast\",\"TZ20\":\"Rukwa\",\"TZ21\":\"Ruvuma\",\"TZ22\":\"Shinyanga\",\"TZ23\":\"Singida\",\"TZ24\":\"Tabora\",\"TZ25\":\"Tanga\",\"TZ26\":\"Manyara\",\"TZ27\":\"Geita\",\"TZ28\":\"Katavi\",\"TZ29\":\"Njombe\",\"TZ30\":\"Simiyu\"},\"LK\":[],\"RS\":{\"RS00\":\"Belgrade\",\"RS14\":\"Bor\",\"RS11\":\"Brani\\u010devo\",\"RS02\":\"Central Banat\",\"RS10\":\"Danube\",\"RS23\":\"Jablanica\",\"RS09\":\"Kolubara\",\"RS08\":\"Ma\\u010dva\",\"RS17\":\"Morava\",\"RS20\":\"Ni\\u0161ava\",\"RS01\":\"North Ba\\u010dka\",\"RS03\":\"North Banat\",\"RS24\":\"P\\u010dinja\",\"RS22\":\"Pirot\",\"RS13\":\"Pomoravlje\",\"RS19\":\"Rasina\",\"RS18\":\"Ra\\u0161ka\",\"RS06\":\"South Ba\\u010dka\",\"RS04\":\"South Banat\",\"RS07\":\"Srem\",\"RS12\":\"\\u0160umadija\",\"RS21\":\"Toplica\",\"RS05\":\"West Ba\\u010dka\",\"RS15\":\"Zaje\\u010dar\",\"RS16\":\"Zlatibor\",\"RS25\":\"Kosovo\",\"RS26\":\"Pe\\u0107\",\"RS27\":\"Prizren\",\"RS28\":\"Kosovska Mitrovica\",\"RS29\":\"Kosovo-Pomoravlje\",\"RSKM\":\"Kosovo-Metohija\",\"RSVO\":\"Vojvodina\"},\"SE\":[],\"UA\":{\"VN\":\"Vinnytsia Oblast\",\"VL\":\"Volyn Oblast\",\"DP\":\"Dnipropetrovsk Oblast\",\"DT\":\"Donetsk Oblast\",\"ZT\":\"Zhytomyr Oblast\",\"ZK\":\"Zakarpattia Oblast\",\"ZP\":\"Zaporizhzhia Oblast\",\"IF\":\"Ivano-Frankivsk Oblast\",\"KV\":\"Kyiv Oblast\",\"KH\":\"Kirovohrad Oblast\",\"LH\":\"Luhansk Oblast\",\"LV\":\"Lviv Oblast\",\"MY\":\"Mykolaiv Oblast\",\"OD\":\"Odessa Oblast\",\"PL\":\"Poltava Oblast\",\"RV\":\"Rivne Oblast\",\"SM\":\"Sumy Oblast\",\"TP\":\"Ternopil Oblast\",\"KK\":\"Kharkiv Oblast\",\"KS\":\"Kherson Oblast\",\"KM\":\"Khmelnytskyi Oblast\",\"CK\":\"Cherkasy Oblast\",\"CH\":\"Chernihiv Oblast\",\"CV\":\"Chernivtsi Oblast\"},\"UG\":{\"UG314\":\"Abim\",\"UG301\":\"Adjumani\",\"UG322\":\"Agago\",\"UG323\":\"Alebtong\",\"UG315\":\"Amolatar\",\"UG324\":\"Amudat\",\"UG216\":\"Amuria\",\"UG316\":\"Amuru\",\"UG302\":\"Apac\",\"UG303\":\"Arua\",\"UG217\":\"Budaka\",\"UG218\":\"Bududa\",\"UG201\":\"Bugiri\",\"UG235\":\"Bugweri\",\"UG420\":\"Buhweju\",\"UG117\":\"Buikwe\",\"UG219\":\"Bukedea\",\"UG118\":\"Bukomansimbi\",\"UG220\":\"Bukwa\",\"UG225\":\"Bulambuli\",\"UG416\":\"Buliisa\",\"UG401\":\"Bundibugyo\",\"UG430\":\"Bunyangabu\",\"UG402\":\"Bushenyi\",\"UG202\":\"Busia\",\"UG221\":\"Butaleja\",\"UG119\":\"Butambala\",\"UG233\":\"Butebo\",\"UG120\":\"Buvuma\",\"UG226\":\"Buyende\",\"UG317\":\"Dokolo\",\"UG121\":\"Gomba\",\"UG304\":\"Gulu\",\"UG403\":\"Hoima\",\"UG417\":\"Ibanda\",\"UG203\":\"Iganga\",\"UG418\":\"Isingiro\",\"UG204\":\"Jinja\",\"UG318\":\"Kaabong\",\"UG404\":\"Kabale\",\"UG405\":\"Kabarole\",\"UG213\":\"Kaberamaido\",\"UG427\":\"Kagadi\",\"UG428\":\"Kakumiro\",\"UG101\":\"Kalangala\",\"UG222\":\"Kaliro\",\"UG122\":\"Kalungu\",\"UG102\":\"Kampala\",\"UG205\":\"Kamuli\",\"UG413\":\"Kamwenge\",\"UG414\":\"Kanungu\",\"UG206\":\"Kapchorwa\",\"UG236\":\"Kapelebyong\",\"UG126\":\"Kasanda\",\"UG406\":\"Kasese\",\"UG207\":\"Katakwi\",\"UG112\":\"Kayunga\",\"UG407\":\"Kibaale\",\"UG103\":\"Kiboga\",\"UG227\":\"Kibuku\",\"UG432\":\"Kikuube\",\"UG419\":\"Kiruhura\",\"UG421\":\"Kiryandongo\",\"UG408\":\"Kisoro\",\"UG305\":\"Kitgum\",\"UG319\":\"Koboko\",\"UG325\":\"Kole\",\"UG306\":\"Kotido\",\"UG208\":\"Kumi\",\"UG333\":\"Kwania\",\"UG228\":\"Kween\",\"UG123\":\"Kyankwanzi\",\"UG422\":\"Kyegegwa\",\"UG415\":\"Kyenjojo\",\"UG125\":\"Kyotera\",\"UG326\":\"Lamwo\",\"UG307\":\"Lira\",\"UG229\":\"Luuka\",\"UG104\":\"Luwero\",\"UG124\":\"Lwengo\",\"UG114\":\"Lyantonde\",\"UG223\":\"Manafwa\",\"UG320\":\"Maracha\",\"UG105\":\"Masaka\",\"UG409\":\"Masindi\",\"UG214\":\"Mayuge\",\"UG209\":\"Mbale\",\"UG410\":\"Mbarara\",\"UG423\":\"Mitooma\",\"UG115\":\"Mityana\",\"UG308\":\"Moroto\",\"UG309\":\"Moyo\",\"UG106\":\"Mpigi\",\"UG107\":\"Mubende\",\"UG108\":\"Mukono\",\"UG334\":\"Nabilatuk\",\"UG311\":\"Nakapiripirit\",\"UG116\":\"Nakaseke\",\"UG109\":\"Nakasongola\",\"UG230\":\"Namayingo\",\"UG234\":\"Namisindwa\",\"UG224\":\"Namutumba\",\"UG327\":\"Napak\",\"UG310\":\"Nebbi\",\"UG231\":\"Ngora\",\"UG424\":\"Ntoroko\",\"UG411\":\"Ntungamo\",\"UG328\":\"Nwoya\",\"UG331\":\"Omoro\",\"UG329\":\"Otuke\",\"UG321\":\"Oyam\",\"UG312\":\"Pader\",\"UG332\":\"Pakwach\",\"UG210\":\"Pallisa\",\"UG110\":\"Rakai\",\"UG429\":\"Rubanda\",\"UG425\":\"Rubirizi\",\"UG431\":\"Rukiga\",\"UG412\":\"Rukungiri\",\"UG111\":\"Sembabule\",\"UG232\":\"Serere\",\"UG426\":\"Sheema\",\"UG215\":\"Sironko\",\"UG211\":\"Soroti\",\"UG212\":\"Tororo\",\"UG113\":\"Wakiso\",\"UG313\":\"Yumbe\",\"UG330\":\"Zombo\"},\"UM\":{\"81\":\"Baker Island\",\"84\":\"Howland Island\",\"86\":\"Jarvis Island\",\"67\":\"Johnston Atoll\",\"89\":\"Kingman Reef\",\"71\":\"Midway Atoll\",\"76\":\"Navassa Island\",\"95\":\"Palmyra Atoll\",\"79\":\"Wake Island\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\"},\"UY\":{\"UY-AR\":\"Artigas\",\"UY-CA\":\"Canelones\",\"UY-CL\":\"Cerro Largo\",\"UY-CO\":\"Colonia\",\"UY-DU\":\"Durazno\",\"UY-FS\":\"Flores\",\"UY-FD\":\"Florida\",\"UY-LA\":\"Lavalleja\",\"UY-MA\":\"Maldonado\",\"UY-MO\":\"Montevideo\",\"UY-PA\":\"Paysand\\u00fa\",\"UY-RN\":\"R\\u00edo Negro\",\"UY-RV\":\"Rivera\",\"UY-RO\":\"Rocha\",\"UY-SA\":\"Salto\",\"UY-SJ\":\"San Jos\\u00e9\",\"UY-SO\":\"Soriano\",\"UY-TA\":\"Tacuaremb\\u00f3\",\"UY-TT\":\"Treinta y Tres\"},\"VE\":{\"VE-A\":\"Capital\",\"VE-B\":\"Anzo\\u00e1tegui\",\"VE-C\":\"Apure\",\"VE-D\":\"Aragua\",\"VE-E\":\"Barinas\",\"VE-F\":\"Bol\\u00edvar\",\"VE-G\":\"Carabobo\",\"VE-H\":\"Cojedes\",\"VE-I\":\"Falc\\u00f3n\",\"VE-J\":\"Gu\\u00e1rico\",\"VE-K\":\"Lara\",\"VE-L\":\"M\\u00e9rida\",\"VE-M\":\"Miranda\",\"VE-N\":\"Monagas\",\"VE-O\":\"Nueva Esparta\",\"VE-P\":\"Portuguesa\",\"VE-R\":\"Sucre\",\"VE-S\":\"T\\u00e1chira\",\"VE-T\":\"Trujillo\",\"VE-U\":\"Yaracuy\",\"VE-V\":\"Zulia\",\"VE-W\":\"Federal Dependencies\",\"VE-X\":\"La Guaira (Vargas)\",\"VE-Y\":\"Delta Amacuro\",\"VE-Z\":\"Amazonas\"},\"VN\":[],\"YT\":[],\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"ZM\":{\"ZM-01\":\"Western\",\"ZM-02\":\"Central\",\"ZM-03\":\"Eastern\",\"ZM-04\":\"Luapula\",\"ZM-05\":\"Northern\",\"ZM-06\":\"North-Western\",\"ZM-07\":\"Southern\",\"ZM-08\":\"Copperbelt\",\"ZM-09\":\"Lusaka\",\"ZM-10\":\"Muchinga\"}}", "i18n_select_state_text": "Select an option\u2026", "i18n_no_matches": "No matches found", "i18n_ajax_error": "Loading failed", "i18n_input_too_short_1": "Please enter 1 or more characters", "i18n_input_too_short_n": "Please enter %qty% or more characters", "i18n_input_too_long_1": "Please delete 1 character", "i18n_input_too_long_n": "Please delete %qty% characters", "i18n_selection_too_long_1": "You can only select 1 item", "i18n_selection_too_long_n": "You can only select %qty% items", "i18n_load_more": "Loading more results\u2026", "i18n_searching": "Searching\u2026" };
/* ]]> */
	</script>
	<script type='text/javascript'
		src='../wp-content/plugins/woocommerce/assets/js/frontend/country-select.min8e94.js?ver=6.8.0'
		id='wc-country-select-js'></script>
	<script type='text/javascript' id='wc-address-i18n-js-extra'>
		/* <![CDATA[ */
		var wc_address_i18n_params = { "locale": "{\"AE\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"required\":false}},\"AF\":{\"state\":{\"required\":false,\"hidden\":true}},\"AL\":{\"state\":{\"label\":\"County\"}},\"AO\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"Province\"}},\"AT\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"AU\":{\"city\":{\"label\":\"Suburb\"},\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"label\":\"State\"}},\"AX\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"BA\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Canton\",\"required\":false,\"hidden\":true}},\"BD\":{\"postcode\":{\"required\":false},\"state\":{\"label\":\"District\"}},\"BE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"BH\":{\"postcode\":{\"required\":false},\"state\":{\"required\":false,\"hidden\":true}},\"BI\":{\"state\":{\"required\":false,\"hidden\":true}},\"BO\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"Department\"}},\"BS\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"BZ\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"required\":false}},\"CA\":{\"postcode\":{\"label\":\"Postal code\"},\"state\":{\"label\":\"Province\"}},\"CH\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Canton\",\"required\":false}},\"CL\":{\"city\":{\"required\":true},\"postcode\":{\"required\":false},\"state\":{\"label\":\"Region\"}},\"CN\":{\"state\":{\"label\":\"Province\"}},\"CO\":{\"postcode\":{\"required\":false},\"state\":{\"label\":\"Department\"}},\"CR\":{\"state\":{\"label\":\"Province\"}},\"CW\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"required\":false}},\"CZ\":{\"state\":{\"required\":false,\"hidden\":true}},\"DE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"DK\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"DO\":{\"state\":{\"label\":\"Province\"}},\"EC\":{\"state\":{\"label\":\"Province\"}},\"EE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"FI\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"FR\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"GH\":{\"postcode\":{\"required\":false},\"state\":{\"label\":\"Region\"}},\"GP\":{\"state\":{\"required\":false,\"hidden\":true}},\"GF\":{\"state\":{\"required\":false,\"hidden\":true}},\"GR\":{\"state\":{\"required\":false}},\"GT\":{\"postcode\":{\"required\":false},\"state\":{\"label\":\"Department\"}},\"HK\":{\"postcode\":{\"required\":false},\"city\":{\"label\":\"Town \\\/ District\"},\"state\":{\"label\":\"Region\"}},\"HN\":{\"state\":{\"label\":\"Department\"}},\"HU\":{\"last_name\":{\"class\":[\"form-row-first\"],\"priority\":10},\"first_name\":{\"class\":[\"form-row-last\"],\"priority\":20},\"postcode\":{\"class\":[\"form-row-first\",\"address-field\"],\"priority\":65},\"city\":{\"class\":[\"form-row-last\",\"address-field\"]},\"address_1\":{\"priority\":71},\"address_2\":{\"priority\":72},\"state\":{\"label\":\"County\"}},\"ID\":{\"state\":{\"label\":\"Province\"}},\"IE\":{\"postcode\":{\"required\":false,\"label\":\"Eircode\"},\"state\":{\"label\":\"County\"}},\"IS\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"IL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"IM\":{\"state\":{\"required\":false,\"hidden\":true}},\"IN\":{\"postcode\":{\"label\":\"PIN Code\"},\"state\":{\"label\":\"State\"}},\"IT\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":true,\"label\":\"Province\"}},\"JM\":{\"city\":{\"label\":\"Town \\\/ City \\\/ Post Office\"},\"postcode\":{\"required\":false,\"label\":\"Postal Code\"},\"state\":{\"required\":true,\"label\":\"Parish\"}},\"JP\":{\"last_name\":{\"class\":[\"form-row-first\"],\"priority\":10},\"first_name\":{\"class\":[\"form-row-last\"],\"priority\":20},\"postcode\":{\"class\":[\"form-row-first\",\"address-field\"],\"priority\":65},\"state\":{\"label\":\"Prefecture\",\"class\":[\"form-row-last\",\"address-field\"],\"priority\":66},\"city\":{\"priority\":67},\"address_1\":{\"priority\":68},\"address_2\":{\"priority\":69}},\"KR\":{\"state\":{\"required\":false,\"hidden\":true}},\"KW\":{\"state\":{\"required\":false,\"hidden\":true}},\"LV\":{\"state\":{\"label\":\"Municipality\",\"required\":false}},\"LB\":{\"state\":{\"required\":false,\"hidden\":true}},\"MQ\":{\"state\":{\"required\":false,\"hidden\":true}},\"MT\":{\"state\":{\"required\":false,\"hidden\":true}},\"MZ\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"Province\"}},\"NI\":{\"state\":{\"label\":\"Department\"}},\"NL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"NG\":{\"postcode\":{\"label\":\"Postcode\",\"required\":false,\"hidden\":true},\"state\":{\"label\":\"State\"}},\"NZ\":{\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"required\":false,\"label\":\"Region\"}},\"NO\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"NP\":{\"state\":{\"label\":\"State \\\/ Zone\"},\"postcode\":{\"required\":false}},\"PA\":{\"state\":{\"label\":\"Province\"}},\"PL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"PR\":{\"city\":{\"label\":\"Municipality\"},\"state\":{\"required\":false,\"hidden\":true}},\"PT\":{\"state\":{\"required\":false,\"hidden\":true}},\"PY\":{\"state\":{\"label\":\"Department\"}},\"RE\":{\"state\":{\"required\":false,\"hidden\":true}},\"RO\":{\"state\":{\"label\":\"County\",\"required\":true}},\"RS\":{\"city\":{\"required\":true},\"postcode\":{\"required\":true},\"state\":{\"label\":\"District\",\"required\":false}},\"SG\":{\"state\":{\"required\":false,\"hidden\":true},\"city\":{\"required\":false}},\"SK\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"SI\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"SR\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"SV\":{\"state\":{\"label\":\"Department\"}},\"ES\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Province\"}},\"LI\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Municipality\",\"required\":false}},\"LK\":{\"state\":{\"required\":false,\"hidden\":true}},\"LU\":{\"state\":{\"required\":false,\"hidden\":true}},\"MD\":{\"state\":{\"label\":\"Municipality \\\/ District\"}},\"SE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"TR\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Province\"}},\"UG\":{\"postcode\":{\"required\":false,\"hidden\":true},\"city\":{\"label\":\"Town \\\/ Village\",\"required\":true},\"state\":{\"label\":\"District\",\"required\":true}},\"US\":{\"postcode\":{\"label\":\"ZIP Code\"},\"state\":{\"label\":\"State\"}},\"UY\":{\"state\":{\"label\":\"Department\"}},\"GB\":{\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"label\":\"County\",\"required\":false}},\"ST\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"District\"}},\"VN\":{\"state\":{\"required\":false,\"hidden\":true},\"postcode\":{\"priority\":65,\"required\":false,\"hidden\":false},\"address_2\":{\"required\":false,\"hidden\":false}},\"WS\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"YT\":{\"state\":{\"required\":false,\"hidden\":true}},\"ZA\":{\"state\":{\"label\":\"Province\"}},\"ZW\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"default\":{\"first_name\":{\"label\":\"First name\",\"required\":true,\"class\":[\"form-row-first\"],\"autocomplete\":\"given-name\",\"priority\":10},\"last_name\":{\"label\":\"Last name\",\"required\":true,\"class\":[\"form-row-last\"],\"autocomplete\":\"family-name\",\"priority\":20},\"company\":{\"label\":\"Company name\",\"class\":[\"form-row-wide\"],\"autocomplete\":\"organization\",\"priority\":30,\"required\":false},\"country\":{\"type\":\"country\",\"label\":\"Country \\\/ Region\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\",\"update_totals_on_change\"],\"autocomplete\":\"country\",\"priority\":40},\"address_1\":{\"label\":\"Street address\",\"placeholder\":\"House number and street name\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line1\",\"priority\":50},\"address_2\":{\"label\":\"Apartment, suite, unit, etc.\",\"label_class\":[\"screen-reader-text\"],\"placeholder\":\"Apartment, suite, unit, etc. (optional)\",\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line2\",\"priority\":60,\"required\":false},\"city\":{\"label\":\"Town \\\/ City\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-level2\",\"priority\":70},\"state\":{\"type\":\"state\",\"label\":\"State \\\/ County\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"state\"],\"autocomplete\":\"address-level1\",\"priority\":80},\"postcode\":{\"label\":\"Postcode \\\/ ZIP\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"postcode\"],\"autocomplete\":\"postal-code\",\"priority\":90}}}", "locale_fields": "{\"address_1\":\"#billing_address_1_field, #shipping_address_1_field\",\"address_2\":\"#billing_address_2_field, #shipping_address_2_field\",\"state\":\"#billing_state_field, #shipping_state_field, #calc_shipping_state_field\",\"postcode\":\"#billing_postcode_field, #shipping_postcode_field, #calc_shipping_postcode_field\",\"city\":\"#billing_city_field, #shipping_city_field, #calc_shipping_city_field\"}", "i18n_required_text": "required", "i18n_optional_text": "optional" };
/* ]]> */
	</script>
	<script type='text/javascript'
		src='../wp-content/plugins/woocommerce/assets/js/frontend/address-i18n.min8e94.js?ver=6.8.0'
		id='wc-address-i18n-js'></script>
	<script type='text/javascript' id='wc-cart-js-extra'>
		/* <![CDATA[ */
		var wc_cart_params = { "ajax_url": "\/laundry-v2\/demo2\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/laundry-v2\/demo2\/?wc-ajax=%%endpoint%%", "update_shipping_method_nonce": "52af4f4af6", "apply_coupon_nonce": "2572529e32", "remove_coupon_nonce": "b0a0b286f5" };
/* ]]> */
	</script>
	<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart.min8e94.js?ver=6.8.0'
		id='wc-cart-js'></script>
	<script type='text/javascript'
		src='../wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min4604.js?ver=1.0.9-wc.6.8.0'
		id='selectWoo-js'></script>
	<script type='text/javascript' id='wc-cart-fragments-js-extra'>
		/* <![CDATA[ */
		var wc_cart_fragments_params = { "ajax_url": "\/laundry-v2\/demo2\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/laundry-v2\/demo2\/?wc-ajax=%%endpoint%%", "cart_hash_key": "wc_cart_hash_2b2fa03c91b96cd069f20303a7f6b2a0", "fragment_name": "wc_fragments_2b2fa03c91b96cd069f20303a7f6b2a0", "request_timeout": "5000" };
/* ]]> */
	</script>
	<script type='text/javascript'
		src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min8e94.js?ver=6.8.0'
		id='wc-cart-fragments-js'></script>
	<script type='text/javascript' id='laundry-bundle-js-js-extra'>
		/* <![CDATA[ */
		var ajax_object = { "ajax_nonce_servicecart": "a8bd2e8299", "ajax_url": "https:\/\/smartdata.tonytemplates.com\/laundry-v2\/demo2\/wp-admin\/admin-ajax.php" };
/* ]]> */
	</script>
	<script type='text/javascript' src='../wp-content/themes/laundry/js/bundle1cd1.js?ver=1667819219'
		id='laundry-bundle-js-js'></script>
	<script type='text/javascript' src='../wp-content/themes/laundry/js/custom82c4.js?ver=1653566665'
		id='laundry-custom-js'></script>
	<script type='text/javascript' id='colorswatch-js-js-extra'>
		/* <![CDATA[ */
		var color_ajax_object = { "ajaxurl": "https:\/\/smartdata.tonytemplates.com\/laundry-v2\/demo2\/wp-admin\/admin-ajax.php", "site_url": "https:\/\/smartdata.tonytemplates.com\/laundry-v2\/demo2" };
/* ]]> */
	</script>
	<script type='text/javascript'
		src='../wp-content/plugins/color-sds-picker-laundry/js/switcher1cd1.js?ver=1667819219'
		id='colorswatch-js-js'></script>
	<div class="modal fade" id="modalMRequestQuote" tabindex="-1" role="dialog" aria-label="myModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content ">
				<div class="modal-body form-default modal-layout-dafault">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
							class="icons-860796"></span></button>
					<div class="modal-titleblock">
						<div class="modal-title">Schedule a Pickup</div>
					</div>
					<div role="form" class="wpcf7" id="wpcf7-f822-o2" lang="en-US" dir="ltr">
						<div class="screen-reader-response">
							<p role="status" aria-live="polite" aria-atomic="true"></p>
							<ul></ul>
						</div>
						<form action="https://smartdata.tonytemplates.com/laundry-v2/demo2/cart/#wpcf7-f822-o2"
							method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
							<div style="display: none;">
								<input type="hidden" name="_wpcf7" value="822" />
								<input type="hidden" name="_wpcf7_version" value="5.6.2" />
								<input type="hidden" name="_wpcf7_locale" value="en_US" />
								<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f822-o2" />
								<input type="hidden" name="_wpcf7_container_post" value="0" />
								<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
							</div>
							<div class="form-group"><span class="wpcf7-form-control-wrap" data-name="your-name"><input
										type="text" name="your-name" value="" size="40"
										class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
										aria-required="true" aria-invalid="false" placeholder="Your Name *" /></span>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group"><span class="wpcf7-form-control-wrap"
											data-name="your-email"><input type="email" name="your-email" value=""
												size="40"
												class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
												aria-required="true" aria-invalid="false"
												placeholder="Your e-mail address *" /></span></div>
								</div>
								<div class="col-md-6">
									<div class="form-group"><span class="wpcf7-form-control-wrap"
											data-name="your-phone"><input type="text" name="your-phone" value=""
												size="40"
												class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
												aria-required="true" aria-invalid="false"
												placeholder="Your phone number" /></span></div>
								</div>
							</div>
							<div class="form-group"><span class="wpcf7-form-control-wrap"
									data-name="your-address"><input type="text" name="your-address" value="" size="40"
										class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
										aria-required="true" aria-invalid="false" placeholder="Address *" /></span>
							</div>
							<div class="form-group">
								<div class="custom-select"><span class="wpcf7-form-control-wrap"
										data-name="your-country"><select name="your-country"
											class="wpcf7-form-control wpcf7-select tt-select" aria-invalid="false">
											<option value="Service">Service</option>
											<option value="Service 02">Service 02</option>
											<option value="Service 03">Service 03</option>
											<option value="Service 04">Service 04</option>
											<option value="Service 05">Service 05</option>
										</select></span></div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group"><input type="text" name="date-pick-up" value=""
											autocomplete="off" data-timepicker="true"
											class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required js_datepicker-1 format24 form-control"
											aria-required="true" aria-invalid="false" placeholder="Pick-Up Date">
										<div class="form-group__icon icons-747310"></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group"><input type="text" name="date-delivery" value="" size="40"
											autocomplete="off" data-timepicker="true"
											class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control js_datepicker-2 wpcf7-not-valid"
											aria-required="true" aria-invalid="true" placeholder="Delivery Date"
											aria-describedby="wpcf7-f822-o2-ve-date-delivery">
										<div class="form-group__icon icons-747310"></div>
									</div>
								</div>
							</div>
							<div class="form-group"><span class="wpcf7-form-control-wrap"
									data-name="your-message"><textarea name="your-message" cols="40" rows="10"
										class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false"
										placeholder="Your comment"></textarea></span></div>
							<div class="tt-btn tt-btn__wide"><span class="mask">Order Now</span><button type="submit"
									class="button wpcf7-form-control wpcf7-submit">Order Now</button></div>
							<div class="wpcf7-response-output" aria-hidden="true"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="couponForm" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content ">
				<div class="modal-body form-default modal-layout-dafault">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
							class="icons-860796"></span></button>

				</div>
				<div class="modal-footer">
					<button type="button" id="btn_save_close" class="button" data-dismiss="modal">Close</button>
					<button id="btn_save_and_close_for_ele" type="button" class="button">Print</button>
				</div>
			</div>
		</div>
	</div>
</body>

<!-- Mirrored from smartdata.tonytemplates.com/laundry-v2/demo2/cart/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 11:08:21 GMT -->

</html>