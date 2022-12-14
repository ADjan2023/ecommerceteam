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

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" href="wp-content/themes/laundry/images/fav.ico" sizes="16x16" />
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

	<title>Laundry Men</title>
	<link rel="canonical" href="index.php" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Home - Laundry" />
	<meta property="og:description"
		content="Laundry Service We Care for the Clothes You Wear Order Now Order Now Dry Cleaning Cleaning Excellence Guaranteed! Order Now Order Now Laundry Service We Care for the Clothes You Wear Order Now Order Now Dry Cleaning Cleaning Excellence Guaranteed! Order Now Order Now ProLaundry Laundry Service We Care for the Clothes You Wear Order [&hellip;]" />
	<meta property="og:url" content="index.php" />
	<meta property="og:site_name" content="Laundry" />
	<meta property="article:modified_time" content="2022-08-11T10:07:39+00:00" />
	<meta property="og:image" content="wp-content/uploads/sites/2/2020/11/mainslide01-01.jpg" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:label1" content="Est. reading time" />
	<meta name="twitter:data1" content="29 minutes" />
	<script type="application/ld+json"
		class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/","url":"https://smartdata.tonytemplates.com/laundry-v2/demo2/","name":"Home - Laundry","isPartOf":{"@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/#website"},"primaryImageOfPage":{"@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/#primaryimage"},"image":{"@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/#primaryimage"},"thumbnailUrl":"https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/mainslide01-01.jpg","datePublished":"2020-11-12T05:22:35+00:00","dateModified":"2022-08-11T10:07:39+00:00","breadcrumb":{"@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://smartdata.tonytemplates.com/laundry-v2/demo2/"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/#primaryimage","url":"https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/mainslide01-01.jpg","contentUrl":"https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/mainslide01-01.jpg","width":960,"height":820},{"@type":"BreadcrumbList","@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},{"@type":"WebSite","@id":"https://smartdata.tonytemplates.com/laundry-v2/demo2/#website","url":"https://smartdata.tonytemplates.com/laundry-v2/demo2/","name":"Laundry","description":"Just another Laundry & Dry Cleaning Sites site","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://smartdata.tonytemplates.com/laundry-v2/demo2/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"}]}</script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel='dns-prefetch' href='http://maps.googleapis.com/' />
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel='dns-prefetch' href='http://s.w.org/' />
	<link rel="alternate" type="application/rss+xml" title="Laundry &raquo; Feed" href="feed/index.php" />
	<link rel="alternate" type="application/rss+xml" title="Laundry &raquo; Comments Feed"
		href="comments/feed/index.php" />
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
		href='wp-includes/css/dist/block-library/style.min1eb7.css?ver=6.0.3' type='text/css' media='all' />
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
		href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style8c3f.css?ver=8.0.0'
		type='text/css' media='all' />
	<link rel='stylesheet' id='wc-blocks-style-css'
		href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style8c3f.css?ver=8.0.0'
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
		href='wp-content/plugins/contact-form-7/includes/css/styles4c7e.css?ver=5.6.2' type='text/css' media='all' />
	<link rel='stylesheet' id='woocommerce-layout-css'
		href='wp-content/plugins/woocommerce/assets/css/woocommerce-layout8e94.css?ver=6.8.0' type='text/css'
		media='all' />
	<link rel='stylesheet' id='woocommerce-smallscreen-css'
		href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen8e94.css?ver=6.8.0' type='text/css'
		media='only screen and (max-width: 768px)' />
	<link rel='stylesheet' id='woocommerce-general-css'
		href='wp-content/plugins/woocommerce/assets/css/woocommerce8e94.css?ver=6.8.0' type='text/css' media='all' />
	<style id='woocommerce-inline-inline-css' type='text/css'>
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>
	<link rel='stylesheet' id='laundry-google-fonts-css'
		href='https://fonts.googleapis.com/css?family=Poppins%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C900%2C900i%7CRoboto%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C900%2C900i&amp;subset=latin%2Ccyrillic-ext%2Clatin-ext%2Ccyrillic%2Cgreek-ext%2Cgreek%2Cvietnamese'
		type='text/css' media='all' />
	<link rel='stylesheet' id='laundry-blog-css' href='wp-content/themes/laundry/css/style-bloga6d0.css?ver=1667819202'
		type='text/css' media='all' />
	<link rel='stylesheet' id='laundry-style-2-css' href='wp-content/themes/laundry/css/style-2a6d0.css?ver=1667819202'
		type='text/css' media='all' />
	<link rel='stylesheet' id='laundry-custom-css' href='wp-content/themes/laundry/css/customa6d0.css?ver=1667819202'
		type='text/css' media='all' />
	<style id='laundry-custom-inline-css' type='text/css'>
		/* body */
	
	</style>
	<link rel='stylesheet' id='laundry-shop-css' href='wp-content/themes/laundry/css/shopa6d0.css?ver=1667819202'
		type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-css'
		href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min91ce.css?ver=5.16.0' type='text/css'
		media='all' />
	<link rel='stylesheet' id='elementor-frontend-legacy-css'
		href='wp-content/plugins/elementor/assets/css/frontend-legacy.min3088.css?ver=3.7.0' type='text/css'
		media='all' />
	<link rel='stylesheet' id='elementor-frontend-css'
		href='wp-content/plugins/elementor/assets/css/frontend.min3088.css?ver=3.7.0' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-267-css'
		href='wp-content/uploads/sites/2/elementor/css/post-2670e89.css?ver=1622960623' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-8-css'
		href='wp-content/uploads/sites/2/elementor/css/post-8c40e.css?ver=1660212473' type='text/css' media='all' />
	<link rel='stylesheet' id='colorswatch-style-color-css'
		href='wp-content/plugins/color-sds-picker-laundry/css/color/stylea6d0.css?ver=1667819202' type='text/css'
		media='all' />
	<link rel='stylesheet' id='colorswatch-style-css'
		href='wp-content/plugins/color-sds-picker-laundry/css/switcher-stylea6d0.css?ver=1667819202' type='text/css'
		media='all' />
	<link rel='stylesheet' id='google-fonts-1-css'
		href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.0.3'
		type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-shared-1-css'
		href='wp-content/plugins/laundry-helper/assets/elementor/font-icons/style-2ad76.css?ver=5.9.0' type='text/css'
		media='all' />
	<link rel='stylesheet' id='elementor-icons-shared-0-css'
		href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3'
		type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-regular-css'
		href='wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3' type='text/css'
		media='all' />
	<script type='text/javascript' src='wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2'
		id='jquery-migrate-js'></script>
	<script type='text/javascript' id='laundry-contact-googlemap-js-extra'>
		/* <![CDATA[ */
		var laundry_gmap_vars = { "GMAP_LAT": "55.8610112", "GMAP_LNG": "-4.2547319", "GMAP_ZOOM": "14", "GMAP_THEME_PATH": "https:\/\/smartdata.tonytemplates.com\/laundry-v2\/demo2\/wp-content\/themes\/laundry" };
/* ]]> */
	</script>
	<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?sensor=false&amp;key&amp;ver=201202124'
		id='laundry-contact-googlemap-js'></script>
	<link rel="https://api.w.org/" href="wp-json/index.html" />
	<link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/8.json" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
	<meta name="generator" content="WordPress 6.0.3" />
	<meta name="generator" content="WooCommerce 6.8.0" />
	<link rel='shortlink' href='index.php' />
	<link rel="alternate" type="application/json+oembed"
		href="wp-json/oembed/1.0/embeddd0b.json?url=https%3A%2F%2Fsmartdata.tonytemplates.com%2Flaundry-v2%2Fdemo2%2F" />
	<link rel="alternate" type="text/xml+oembed"
		href="wp-json/oembed/1.0/embed8f29?url=https%3A%2F%2Fsmartdata.tonytemplates.com%2Flaundry-v2%2Fdemo2%2F&amp;format=xml" />
	<meta name="generator" content="Redux 4.3.14" /> <noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
</head>

<body
	class="home page-template page-template-elementor_header_footer page page-id-8 wp-embed-responsive theme-laundry woocommerce-no-js elementor-default elementor-template-full-width elementor-kit-267 elementor-page elementor-page-8">
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
							01 Ashesi Berekuso, </address>
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
						<a class="not-style" href="mailto:info@yourlaundrysite.com">
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
								0209535914 </a>
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
								Ashesi Berekuso </address>
						</div>
						<div class="tt-item">
							Mon-Fri 08:00 AM - 05:00 PM </div>
						<div class="tt-item">
							<a href="mailto:info@yourlaundrysite.com">
								info@laundrymen.com </a>
						</div>
					</div>
				</div>
				<div class="col-auto ml-auto">
					<div class="tt-obj">
						<div class="h-info02">
							<div class="tt-item">
								<address>
									<a href="tel:0209535914"><span class="icons-483947"></span>
										0209535914 </a>
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
						<a href="index.php" class="tt-logo tt-logo-alignment">
							<i class="icons-logo tt-icon"></i><span class="tt-base-color">Laundry</span>Men </a>
						<!-- /logo -->
					</div>
					<div class="tt-col-center tt-col-wide tt-col-objects text-center">
						<div class="tt-col__item">
							<!-- desktop-nav -->
							<nav id="tt-nav">
								<ul id="menu-primary-menu" class="menu">
									<li id="nav-menu-item-317"
										class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item">
										<a href="index.php" class="menu-link main-menu-link">Home</a>
									</li>
									<li id="nav-menu-item-318"
										class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
										<a href="about-us/index.php" class="menu-link main-menu-link">About Us</a>
									</li>
									<li id="nav-menu-item-527"
										class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
										<a href="services/index.php" class="menu-link main-menu-link">Services</a>
									</li>
									<li id="nav-menu-item-502"
										class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
										<a href="prices/index.php" class="menu-link main-menu-link">Subscriptions</a>
									</li>
									<li id="nav-menu-item-656"
										class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
										<a href="blog-posts/index.php" class="menu-link main-menu-link">Blog</a>
									</li>
									<li id="nav-menu-item-1377"
										class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
										<a href="shop/index.php" class="menu-link main-menu-link">Shop</a>
									</li>
									<li id="nav-menu-item-526"
										class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
										<a href="faq/index.php" class="menu-link main-menu-link">FAQ</a>
									</li>
									<li id="nav-menu-item-604"
										class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
										<a href="contact-us/index.php" class="menu-link main-menu-link">Contacts</a>
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
										<a href="tel:0209535914"><span class="icons-483947"></span>
											0209535914 </a>
									</address>
								</div>
							</div>
						</div>
						<div class="tt-col__item">
						<div class="tt-obj tt-obj-cart js-dropdown-cart">
								<a href="<?php echo $link; ?>" class="tt-obj__btn cart-contents">
									<i class="icons-711897"><span style="position:absolute; right:-5%; top:3%; font-size:14px; color:red;">
										<?php
										require("../functions/adverts.php");
										if(empty($_SESSION['id'])){
										
										}
										else{
										countCart($_SESSION['id'],0);
									}
										?>
									</span></i>
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

	<main id="tt-pageContent">
		<div data-elementor-type="wp-page" data-elementor-id="8" class="elementor elementor-8">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-c3944d5 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
						data-id="c3944d5" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a919a74"
									data-id="a919a74" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-b01dca8 elementor-widget elementor-widget-laundry_main_slider"
												data-id="b01dca8" data-element_type="widget"
												data-widget_type="laundry_main_slider.default">
												<div class="elementor-widget-container">



													<div class="mainSlider-mobile">
														<div class="slick-default main-slider">
															<div class="item">
																<div class="item_top">
																	<div class="item__img">
																		<picture>
																			<img width="960" height="820"
																				src="newimages/7w.jpg"
																				class="attachment-full size-full" alt=""
																				loading="lazy"
																				srcset="newimages/7w.jpg 960w, newimages/7w.jpg 300w, newimages/7w.jpg 768w"
																				sizes="(max-width: 960px) 100vw, 960px" />
																		</picture>
																	</div>
																	<div class="item__content">
																		<div class="content-align js-rotation">
																			<h4 class="main-slider__title">Laundry<br>
																				Service</h4>
																			<p>We Care for the Clothes You Wear</p>
																			<a href="prices/index.php" class="tt-btn tt-btn__top"
																				>
																				<span class="mask">Order Now</span>
																				<div class="button">Order Now</div>
																			</a>

																		</div>
																	</div>
																</div>
															</div>
															<div class="item">
																<div class="item_top">
																	<div class="item__img">
																		<picture>
																			<img width="960" height="820"
																				src="newimages/8w.jpg"
																				class="attachment-full size-full" alt=""
																				loading="lazy"
																				srcset="newimages/8w.jpg 960w, newimages/8w.jpg 300w, newimages/8w.jpg 768w"
																				sizes="(max-width: 960px) 100vw, 960px" />
																		</picture>
																	</div>
																	<div class="item__content">
																		<div class="content-align js-rotation">
																			<h4 class="main-slider__title">Dry<br>
																				Cleaning</h4>
																			<p>Cleaning Excellence Guaranteed!</p>
																			<a href="prices/index.php" class="tt-btn tt-btn__top"
																				>
																				<span class="mask">Order Now</span>
																				<div class="button">Order Now</div>
																			</a>
																		
																		</div>
																	</div>
																</div>
															</div>

															<div class="item">
																<div class="item_top">
																	<div class="item__img">
																		<picture>
																			<img width="960" height="820"
																				src="wp-content/uploads/sites/2/2020/11/mainslide02-01.jpg"
																				class="attachment-full size-full" alt=""
																				loading="lazy"
																				srcset="https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/mainslide02-01.jpg 960w, https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/mainslide02-01-300x256.jpg 300w, https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/mainslide02-01-768x656.jpg 768w"
																				sizes="(max-width: 960px) 100vw, 960px" />
																		</picture>
																	</div>
																	<div class="item__content">
																		<div class="content-align js-rotation">
																			<h4 class="main-slider__title">Laundry<br>
																				Service</h4>
																			<p>We Care for the Clothes You Wear</p>
																			<a href="prices/index.php" class="tt-btn tt-btn__top"
																				>
																				<span class="mask">Order Now</span>
																				<div class="button">Order Now</div>
																			</a>

																		</div>
																	</div>
																</div>
															</div>
															<div class="item">
																<div class="item_top">
																	<div class="item__img">
																		<picture>
																			<img width="960" height="820"
																				src="newimages/8w.jpg"
																				class="attachment-full size-full" alt=""
																				loading="lazy"
																				srcset="newimages/8w.jpg 960w, newimages/8w.jpg 300w, newimages/8w.jpg 768w"
																				sizes="(max-width: 960px) 100vw, 960px" />
																		</picture>
																	</div>
																	<div class="item__content">
																		<div class="content-align js-rotation">
																			<h4 class="main-slider__title">Dry<br>
																				Cleaning</h4>
																			<p>Cleaning Excellence Guaranteed!</p>
																			<a href="prices/index.php" class="tt-btn tt-btn__top"
																				>
																				<span class="mask">Order Now</span>
																				<div class="button">Order Now</div>
																			</a>
																		</div>
																	</div>
																</div>
															</div>


														</div>
														<div class="bubbles-container-mobile" id="bubbles">
															<div style="top: 8.9%; margin-left: 3%;">
																<img src="newimages/8w.jpg"
																	class="bubbles-stars" alt="">
															</div>
															<div style="top: 7.2%; margin-left: 50%;">
																<img src="newimages/8w.jpg"
																	class="bubbles-stars" alt="">
															</div>
															<div style="top: 26.7%; margin-left: 80%;">
																<img src="newimages/8w.jpg"
																	class="bubbles-stars" alt="">
															</div>
															<div style="top: 55.5%; margin-left: 5%;">
																<img src="newimages/8w.jpg"
																	class="bubbles-stars" alt="">
															</div>
															<div style="top: 85%; margin-left: 70%;">
																<img src="newimages/8w.jpg"
																	class="bubbles-stars" alt="">
															</div>
															<div style="top: 56.5%; margin-left: 80%;">
																<img src="newimages/8w.jpg"
																	class="bubbles-stars" alt="">
															</div>
														</div>
													</div>



													<div id="js-mainSlider" class="mainSlider-desktop">
														<div class="mainSlider-preloader"><span
																class="tt-base-color">Laundry</span>Men</div>
														<div class="mainSlider-wrapper">
															<div class="slick-default main-slider">
																<div class="item">
																	<div class="item_left w-100">
																		<div class="item__img">
																			<picture>
																				<img width="960" height="820"
																					src="newimages/4w.jpg"
																					class="attachment-full size-full"
																					alt="" loading="lazy"
																					srcset="newimages/4w.jpg 960w, newimages/4w.jpg 300w, newimages/4w.jpg 768w"
																					sizes="(max-width: 960px) 100vw, 960px" />
																			</picture>
																		</div>
																		<div class="item__content">
																			<div class="content-align js-rotation">
																				<h4 class="main-slider__title">
																					Laundry<br> Service</h4>
																				<p>We Care for the Clothes You Wear</p>
																				<a href="prices/index.php" class="tt-btn tt-btn__top"
																				>
																				<span class="mask">Order Now</span>
																				<div class="button">Order Now</div>
																			</a>
																			</div>
																		</div>
																	</div>
																	<div class="item_right w-100">
																		<div class="item__img">
																			<picture>
																				<img width="960" height="820"
																					src="newimages/9w.jpg"
																					class="attachment-full size-full"
																					alt="" loading="lazy"
																					srcset="newimages/9w.jpg 960w, newimages/9w.jpg 300w, newimages/9w.jpg 768w"
																					sizes="(max-width: 960px) 100vw, 960px" />
																			</picture>
																		</div>
																		<div class="item__content">
																			<div class="content-align js-rotation">
																				<h4 class="main-slider__title">Dry<br>
																					Cleaning</h4>
																				<p>Cleaning Excellence Guaranteed!</p>
																				<a href="prices/index.php" class="tt-btn tt-btn__top"
																				>
																				<span class="mask">Order Now</span>
																				<div class="button">Order Now</div>
																			</a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="item">
																	<div class="item_left w-100">
																		<div class="item__img">
																			<picture>
																				<img width="960" height="820"
																					src="newimages/10w.jpg"
																					class="attachment-full size-full"
																					alt="" loading="lazy"
																					srcset="newimages/10w.jpg 960w, newimages/10w.jpg 300w, newimages/10w.jpg 768w"
																					sizes="(max-width: 960px) 100vw, 960px" />
																			</picture>
																		</div>
																		<div class="item__content">
																			<div class="content-align js-rotation">
																				<h4 class="main-slider__title">
																					Laundry<br> Service</h4>
																				<p>We Care for the Clothes You Wear</p>
																				<a href="prices/index.php" class="tt-btn tt-btn__top"
																				>
																				<span class="mask">Order Now</span>
																				<div class="button">Order Now</div>
																			</a>
																			</div>
																		</div>
																	</div>
																	<div class="item_right w-100">
																		<div class="item__img">
																			<picture>
																				<img width="960" height="820"
																					src="newimages/11w.jpg"
																					class="attachment-full size-full"
																					alt="" loading="lazy"
																					srcset="newimages/11w.jpg 960w, newimages/11w.jpg 300w, newimages/11w.jpg 768w"
																					sizes="(max-width: 960px) 100vw, 960px" />
																			</picture>
																		</div>
																		<div class="item__content">
																			<div class="content-align js-rotation">
																				<h4 class="main-slider__title">Dry<br>
																					Cleaning</h4>
																				<p>Cleaning Excellence Guaranteed!</p>
																				<a href="prices/index.php" class="tt-btn tt-btn__top"
																				>
																				<span class="mask">Order Now</span>
																				<div class="button">Order Now</div>
																			</a>
																			</div>
																		</div>
																	</div>
																</div>

															</div>
															<div class="bubbles-container" id="bubbles">
																<div style="top: 60.3%; margin-left: -2.1%;">
																	<img src="wp-content/themes/laundry/images/bubbles-06.png"
																		class="bubbles-response-03" alt="">
																</div>
																<div style="top: 52.3%; margin-left: -5.3%;">
																	<img src="wp-content/themes/laundry/images/stars-01.png"
																		class="bubbles-stars" alt="">
																</div>
																<div style="top: 39.5%; margin-left: 0.7%;">
																	<img src="wp-content/themes/laundry/images/bubbles-03.png"
																		class="bubbles-response-03" alt="">
																</div>
																<div style="top: 26.5%; margin-left: -3.8%;">
																	<img src="wp-content/themes/laundry/images/bubbles-05.png"
																		alt="">
																</div>
																<div style="top: 11.4%; margin-left: 0.7%;">
																	<img src="wp-content/themes/laundry/images/bubbles-01.png"
																		class="bubbles-response-01" alt="">
																</div>
																<div style="top: 81%; margin-left: -1.5%;">
																	<img src="wp-content/themes/laundry/images/bubbles-07.png"
																		alt="">
																</div>
																<div style="top: 54.8%; margin-left: -2.3%;">
																	<img src="wp-content/themes/laundry/images/bubbles-09.png"
																		alt="">
																</div>
																<div style="top: 8.9%; margin-left: -3.1%;">
																	<img src="wp-content/themes/laundry/images/stars-02.png"
																		class="bubbles-stars" alt="">
																</div>
																<div style="top: 68.2%; margin-left: 1.3%;">
																	<img src="wp-content/themes/laundry/images/bubbles-10.png"
																		alt="">
																</div>
																<div style="top: 67.2%; margin-left: 0.1%;">
																	<img src="wp-content/themes/laundry/images/bubbles-02.png"
																		class="bubbles-response-02" alt="">
																</div>
																<div style="top: 77.2%; margin-left: 1.2%;">
																	<img src="wp-content/themes/laundry/images/bubbles-11.png"
																		alt="">
																</div>
																<div style="top: 7.2%; margin-left: -6.3%;">
																	<img src="wp-content/themes/laundry/images/stars-03.png"
																		class="bubbles-stars" alt="">
																</div>
																<div style="top: 7.8%; margin-left: 4.1%;">
																	<img src="wp-content/themes/laundry/images/bubbles-08.png"
																		alt="">
																</div>
																<div style="top: 6.7%; margin-left: 2.3%;">
																	<img src="wp-content/themes/laundry/images/stars-04.png"
																		class="bubbles-stars" alt="">
																</div>
																<div style="top: 38.5%; margin-left: -2.5%;">
																	<img src="wp-content/themes/laundry/images/stars-06.png"
																		class="bubbles-stars" alt="">
																</div>
																<div style="top: 83.5%; margin-left: 5.4%;">
																	<img src="wp-content/themes/laundry/images/stars-07.png"
																		class="bubbles-stars" alt="">
																</div>
																<div style="top: 16.5%; margin-left: 5.5%;">
																	<img src="wp-content/themes/laundry/images/stars-05.png"
																		class="bubbles-stars" alt="">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-e6f7f52 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
						data-id="e6f7f52" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-af5bf31"
									data-id="af5bf31" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-32ab8e8 elementor-widget elementor-widget-laundry_about"
												data-id="32ab8e8" data-element_type="widget"
												data-widget_type="laundry_about.default">
												<div class="elementor-widget-container">

													<div class="section-inner lazyload bg-top-left move-top-bottom tt-overflow-hidden"
														data-bg="wp-content/uploads/sites/2/2020/11/wrapper01.png">
														<div class="container container-fluid-xl">
															<div class="box01">
																<div class="box01__img">
																	<img width="594" height="493"
																		src="newimages/13w.jpg"
																		class="attachment-full size-full" alt=""
																		loading="lazy"
																		srcset="newimages/13w.jpg 594w, newimages/13w.jpg 300w"
																		sizes="(max-width: 594px) 100vw, 594px" /><img
																		width="138" height="65"
																		src="wp-content/uploads/sites/2/2020/11/arrow-img-right.png"
																		class="tt-arrow" alt="" loading="lazy" />
																	
																</div>
																<div class="box01__content">
																	<div class="title-block">
																		<div class="title-block__label">
																			[A Couple Years of Experience] </div>
																		<h4 class="title-block__title">
																			We are Passionate About Laundry </h4>
																	</div>
																	<div class="box01__wrapper-img">
																		<img width="594" height="493"
																			src="newimages/13w.jpg"
																			class="attachment-full size-full" alt=""
																			loading="lazy"
																			srcset="newimages/13w.jpg 594w, newimages/13w.jpg 300w"
																			sizes="(max-width: 594px) 100vw, 594px" />
																		<div class="box01__img-label">
																			<div class="tt-text01">2</div>
																			years of <br> experience
																		</div>
																	</div>
																	<p>
																		We are professionals in the laundry and dry
																		cleaning business, which means we always stay up
																		to date on the latest technologies, cleaning
																		methods, and solutions for dealing with stains
																		or delicate fabrics. Plus, we maintain the
																		highest standards of business integrity by
																		following local and national regulations and
																		environmental safety rules. We are passionate
																		about changing the way you think about laundry!
																	</p>
																	<div class="row row-custom01 no-gutters">
																		<div class="col-lg-6">
																			<ul class="tt-list01">
																				<li>100% Customer Satisfaction</li>
																				<li>Free Collection & Delivery</li>
																				<li>Affordable Prices</li>
																				<li>Best Quality</li>
																			</ul>
																		</div>
																		<div class="col-lg-6">
																			<a href="tel:020 95 35 914"
																				class="info01">
																				<div class="info01__icon"><i
																						class="icons-483947"></i></div>
																				<div class="info01__content">
																					<div class="info01__title">Call for
																						Quality Services</div>
																					<address>0209535914</address>
																				</div>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
															<div
																class="added-info added-info__top row js-init-carusel-tablet slick-default">
																<a href="#_" class="added-info__item col-md-4">
																	<div class="added-info__icon  icons-806765"></div>
																	<div class="added-info__description">
																		<h6 class="added-info__title"><span>Save Time &
																				Money</span></h6>
																		No more wasted time driving to the laundromats,
																		we pickup and deliver for free!
																	</div>
																</a>
																<a href="#_" class="added-info__item col-md-4">
																	<div class="added-info__icon  icons-1485715"></div>
																	<div class="added-info__description">
																		<h6 class="added-info__title"><span>Pay Online
																				in Seconds</span></h6>
																		Manage your Press account and billing online
																		from your smartphone or computer.
																	</div>
																</a>
																<a href="#_" class="added-info__item col-md-4">
																	<div class="added-info__icon  icons-3037040"></div>
																	<div class="added-info__description">
																		<h6 class="added-info__title">
																			<span>Eco-Friendly</span>
																		</h6>
																		We use safe and clean perc-free solvents, so
																		you, and the Earth, can look good.
																	</div>
																</a>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-fb25071 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
						data-id="fb25071" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d7c4b79"
									data-id="d7c4b79" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-f568c96 elementor-widget elementor-widget-laundry_service_box_carousel"
												data-id="f568c96" data-element_type="widget"
												data-widget_type="laundry_service_box_carousel.default">
												<div class="elementor-widget-container">
													<div class="section-indent no-margin">
														<div class="container-fluid no-gutters">
															<div class="title-block text-center">
																<div class="title-block__label">
																	[Our Services] </div>
																<h4 class="title-block__title">
																	Drier Cleaning & Laundry,<br>Free Delivery </h4>
															</div>
															<div class="slick-default slick-arrow-align imgbox-inner__wrapper"
																data-slick='{
								"slidesToShow": 3,
								"autoplaySpeed": 7500,
								"slidesToScroll": 3,
								"arrows": true,
								"autoplay":true,
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
							}'>
																<div class="tt-item">
																	<a href="laundry-helper/laundry-services/index.php"
																		class="imgbox-inner svg-animation-02">
																		<div class="imgbox-inner__img">
																			<img width="600" style="height:340px"
																				src="newimages/1w.jpg"
																				class="attachment-full size-full" alt=""
																				loading="lazy"
																				srcset="newimages/1w.jpg 600w,newimages/1w.jpg 300w"
																				sizes="(max-width: 600px) 100vw, 600px" />
																		</div>
																		<div class="imgbox-inner__description">
																			<div class="imgbox-inner__row">
																				<div class="imgbox-inner__icon">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						class="tt-size-01" width="1024"
																						height="1024"
																						viewBox="0 0 1024 1024">
																						<title></title>
																						<g id="icomoon-ignore">
																						</g>
																						<path fill="currentColor"
																							d="M928.001 928.001c0 48.605-39.407 87.999-87.999 87.999h-655.998c-48.594 0-87.999-39.394-87.999-87.999v-832.002c0-48.605 39.406-87.999 87.999-87.999h655.998c48.594 0 87.999 39.394 87.999 87.999v832.002zM880.002 95.999c0-22.094-17.905-39.999-39.999-39.999h-655.998c-22.094 0-39.999 17.905-39.999 39.999v832.002c0 22.094 17.905 39.999 39.999 39.999h655.998c22.094 0 39.999-17.905 39.999-39.999v-832.002z">
																						</path>
																						<path fill="currentColor"
																							d="M897.167 312.003h-784.003c-13.25 0-17.168-10.739-17.168-24v-184.306c0-49.182 39.248-95.696 87.981-95.696h649.921c51.426 0 94.093 50.431 94.093 95.696v184.306c0 13.261-17.585 24-30.835 24zM143.998 264h735.997v-160.303c0-21.599-24.35-47.697-46.094-47.697h-649.921c-21.873 0-39.982 25.41-39.982 47.697v160.303z">
																						</path>
																						<path fill="currentColor"
																							d="M376.002 304.003c-13.25 0-24-10.739-24-24v-239.998c0-13.262 10.75-24 24-24s24 10.739 24 24v239.998c0 13.261-10.75 24-24 24z">
																						</path>
																						<path fill="currentColor"
																							d="M819.283 163.827c0 22.863-18.511 41.392-41.374 41.392s-41.374-18.529-41.374-41.392c0-22.846 18.511-41.374 41.374-41.374s41.374 18.529 41.374 41.374z">
																						</path>
																						<path fill="currentColor"
																							d="M703.426 163.827c0 22.863-18.511 41.392-41.374 41.392s-41.374-18.529-41.374-41.392c0-22.846 18.511-41.374 41.374-41.374s41.374 18.529 41.374 41.374z">
																						</path>
																						<path fill="currentColor"
																							d="M587.569 163.827c0 22.863-18.546 41.392-41.374 41.392-22.863 0-41.374-18.529-41.374-41.392 0-22.846 18.511-41.374 41.374-41.374 22.835 0 41.374 18.529 41.374 41.374z">
																						</path>
																						<path fill="currentColor"
																							d="M499.63 893.345c-126.752 0-229.87-103.101-229.87-229.856s103.119-229.856 229.87-229.856c126.734 0 229.87 103.101 229.87 229.856s-103.137 229.856-229.87 229.856zM499.63 481.632c-100.287 0-181.871 81.566-181.871 181.853 0 100.27 81.584 181.853 181.871 181.853 100.27 0 181.871-81.584 181.871-181.853 0-100.287-81.602-181.853-181.871-181.853z">
																						</path>
																						<path fill="currentColor"
																							d="M412.033 739.395c-56.127 0-104.85-32.734-129.519-58.942-9.090-9.649-8.641-24.833 1.026-33.923 9.585-9.090 24.769-8.659 33.87 0.962v0c3.327 3.473 82.243 84.351 163.022 16.658 91.425-76.497 187.506-33.17 225.507 0.431 9.934 8.769 10.878 23.936 2.098 33.87-8.787 9.923-23.953 10.867-33.87 2.098-3.17-2.768-80.672-68.433-162.911 0.413-33.439 27.985-67.505 38.432-99.215 38.432z">
																						</path>
																						<path fill="currentColor"
																							d="M628.946 710.034c0 9.154-7.405 16.559-16.559 16.559-9.136 0-16.541-7.405-16.541-16.559 0-9.136 7.405-16.541 16.541-16.541 9.154 0 16.559 7.405 16.559 16.541z">
																						</path>
																						<path fill="currentColor"
																							d="M612.387 776.242c0 9.136-7.405 16.559-16.541 16.559s-16.559-7.423-16.559-16.559 7.423-16.541 16.559-16.541c9.136 0 16.541 7.405 16.541 16.541z">
																						</path>
																						<path fill="currentColor"
																							d="M546.19 726.593c0 9.136-7.405 16.541-16.559 16.541s-16.559-7.405-16.559-16.541c0-9.154 7.405-16.559 16.559-16.559s16.559 7.405 16.559 16.559z">
																						</path>
																						<path fill="currentColor"
																							d="M513.072 792.801c0 9.136-7.405 16.541-16.541 16.541s-16.541-7.405-16.541-16.541c0-9.154 7.405-16.559 16.541-16.559s16.541 7.405 16.541 16.559z">
																						</path>
																						<path fill="currentColor"
																							d="M413.758 759.694c0 9.136-7.405 16.541-16.541 16.541s-16.541-7.405-16.541-16.541 7.405-16.559 16.541-16.559c9.136 0 16.541 7.423 16.541 16.559z">
																						</path>
																					</svg>
																				</div>
																				<div class="imgbox-inner__content">
																					<h4 class="imgbox-inner__title">
																						Laundry Services</h4>
																					<p>Let us pick up your dirty
																						laundry, sort it, pre-treat
																						stains, wash, dry, fold and
																						deliver back to you in one neat,
																						easy package.</p>
																				</div>
																			</div>
																		</div>
																	</a>
																</div>
																<div class="tt-item">
																	<a href="laundry-helper/dry-cleaning-services/index.php"
																		class="imgbox-inner svg-animation-03">
																		<div class="imgbox-inner__img">
																			<img width="600" style="height:340px"
																				src="newimages/6w.jpg"
																				class="attachment-full size-full" alt=""
																				loading="lazy"
																				srcset="newimages/6w.jpg 600w, newimages/6w.jpg 300w"
																				sizes="(max-width: 600px) 100vw, 600px" />
																		</div>
																		<div class="imgbox-inner__description">
																			<div class="imgbox-inner__row">
																				<div class="imgbox-inner__icon">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						xmlns:xlink="http://www.w3.org/1999/xlink"
																						class="tt-size-02" width="300"
																						height="300"
																						viewBox="0 0 35 32">
																						<path class="hanger"
																							d="M32.702 20.62l-13.413-12.155c-0.15-0.137-0.316-0.252-0.489-0.352v-1.965h-0.128c-0.088-0.27-0.301-0.497-0.673-0.583-0.831-0.191-1.748-0.465-2.315-1.143-0.274-0.328-0.359-0.76-0.242-0.988 0.664-1.294 2.593-0.9 3.702-0.421 1.181 0.51 2.21-1.211 1.019-1.725-2.057-0.889-5.404-1.289-6.511 1.245-0.855 1.956 0.436 3.464 2.078 4.32v1.245c-0.184 0.104-0.36 0.223-0.52 0.367l-13.411 12.155c-1.127 1.021-0.748 1.849 0.845 1.849h6.377v-2.155h-3.674l11.312-10.251c0.145-0.132 0.361-0.208 0.592-0.208s0.447 0.075 0.592 0.208l11.312 10.251h-3.747v2.155h6.45c1.593 0 1.971-0.828 0.845-1.849z">
																						</path>
																						<path class="clothes"
																							d="M10.097 20.314v11.686l3.376-1.023-0.031-6.447c-0.003-0.594 0.477-1.081 1.072-1.083 0.002 0 0.004 0 0.005 0 0.593 0 1.075 0.479 1.077 1.072l0.028 5.806 8.704-2.636v-9.561h-14.232v2.186z">
																						</path>
																					</svg>
																				</div>
																				<div class="imgbox-inner__content">
																					<h4 class="imgbox-inner__title">Dryer
																						Cleaning Services</h4>
																					<p>Ashesi students and local
																						residents
																						love on our reliable dry
																						cleaning services for the fast,
																						accurate, top quality results.
																					</p>
																				</div>
																			</div>
																		</div>
																	</a>
																</div>
											
																<div class="tt-item">
																	<a href="laundry-helper/steam-iron/index.php"
																		class="imgbox-inner ">
																		<div class="imgbox-inner__img">
																			<img width="600" style="height:340px"
																				src="newimages/8w.png"
																				class="attachment-full size-full" alt=""
																				loading="lazy"
																				srcset="newimages/8w.png 600w, newimages/8w.png 300w"
																				sizes="(max-width: 600px) 100vw, 600px" />
																		</div>
																		<div class="imgbox-inner__description">
																			<div class="imgbox-inner__row">
																				<div class="imgbox-inner__icon">
																					<i aria-hidden="true"
																						class=" icons-ironing-board"></i>
																				</div>
																				<div class="imgbox-inner__content">
																					<h4 class="imgbox-inner__title">
																						Steam Iron</h4>
																					<p>These services are accomplished
																						under the guidance of adroit
																						personnel who have affluent
																						industry proficiency. </p>
																				</div>
																			</div>
																		</div>
																	</a>
																</div>
															
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					</section>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-1ea94b0 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
						data-id="1ea94b0" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ec480b7"
									data-id="ec480b7" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-f88c780 elementor-widget elementor-widget-laundry_work_process"
												data-id="f88c780" data-element_type="widget"
												data-widget_type="laundry_work_process.default">
												<div class="elementor-widget-container">

													<div class="section-indent">
														<div class="container container-fluid-lg">
															<div class="row align-items-center stepbox_wrapper"
																style="overflow: hidden;">
																<div class="col-md-6 col-lg-5 stepbox__layout">
																	<img width="144" height="48"
																		src="wp-content/uploads/sites/2/2020/12/arrow-img-right02.png"
																		class="tt-arrow" alt="" loading="lazy" />
																	<div class="title-block">
																		<div class="title-block__label">
																			Get Your Clothes Collected & Delivered
																		</div>
																		<h4 class="title-block__title">
																			How We Work </h4>
																	</div>
																	<p>Our Service is dedicated to making your life
																		easier by providing pick up laundry service.
																		Give yourself one less thing to worry about and
																		try our residential wash and fold service that
																		includes pick up and delivery.</p>
																	<p>We have been in the laundry business for
																		a years and would love to earn your
																		business. Try us today and save Ghc10 Off your
																		first laundry service of 20 pounds or more.</p>
																	<a href="prices/index.php"
																		class="tt-btn tt-btn__top">
																		<span class="mask">Get Service Now</span>
																		<div class="button">Get Service Now</div>
																	</a>
																</div>
																<div class="col-md-6 col-lg-6 offset-lg-1">
																	<div class="slider-stepbox" id="js-stepbox__layout">
																		<div class="tt-item active" data-number="1">
																			<div class="stepbox">
																				<div class="stepbox__img">
																					<img width="282" height="330"
																						src="wp-content/uploads/sites/2/2020/11/stepbox-img01.png"
																						class="attachment-full size-full"
																						alt="" loading="lazy"
																						srcset="https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/stepbox-img01.png 282w, https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/stepbox-img01-256x300.png 256w"
																						sizes="(max-width: 282px) 100vw, 282px" />
																				</div>
																				<div class="stepbox__content">
																					<div class="stepbox__number">01
																					</div>
																					<div class="stepbox__limitation">
																						<h6 class="stepbox__title"><span
																								class="tt-base-color">Bag
																								Up</span> All Your Dirty
																							Clothes</h6>
																						<p>We are pleased to pickup
																							your<br> laundry and ensure
																							that it is expertly
																							laundered and pressed.</p>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="tt-item " data-number="2">
																			<div class="stepbox">
																				<div class="stepbox__img">
																					<img width="282" height="330"
																						src="wp-content/uploads/sites/2/2020/11/stepbox-img02.png"
																						class="attachment-full size-full"
																						alt="" loading="lazy"
																						srcset="https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/stepbox-img02.png 282w, https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/stepbox-img02-256x300.png 256w"
																						sizes="(max-width: 282px) 100vw, 282px" />
																				</div>
																				<div class="stepbox__content">
																					<div class="stepbox__number">02
																					</div>
																					<div class="stepbox__limitation">
																						<h6 class="stepbox__title">We
																							<span
																								class="tt-base-color">Pick
																								Up</span> Your Clothes
																						</h6>
																						<p>Morning of your pickup, leave
																							your bags in their
																							designated pickup location
																							by 8:00 am for a motor rider
																							to
																							pick up.</p>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="tt-item " data-number="3">
																			<div class="stepbox">
																				<div class="stepbox__img">
																					<img width="282" height="330"
																						src="wp-content/uploads/sites/2/2020/11/stepbox-img03.png"
																						class="attachment-full size-full"
																						alt="" loading="lazy"
																						srcset="https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/stepbox-img03.png 282w, https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/stepbox-img03-256x300.png 256w"
																						sizes="(max-width: 282px) 100vw, 282px" />
																				</div>
																				<div class="stepbox__content">
																					<div class="stepbox__number">03
																					</div>
																					<div class="stepbox__limitation">
																						<h6 class="stepbox__title">We
																							<span
																								class="tt-base-color">Clean</span>
																							Your Clothes
																						</h6>
																						<p>Our facilities are so good we
																							guarantee you???ll be
																							satisfied ??? we put a quality
																							guarantee on all items</p>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="tt-item " data-number="4">
																			<div class="stepbox">
																				<div class="stepbox__img">
																					<img width="282" height="330"
																						src="wp-content/uploads/sites/2/2020/11/stepbox-img04.png"
																						class="attachment-full size-full"
																						alt="" loading="lazy"
																						srcset="https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/stepbox-img04.png 282w, https://smartdata.tonytemplates.com/laundry-v2/demo2/wp-content/uploads/sites/2/2020/11/stepbox-img04-256x300.png 256w"
																						sizes="(max-width: 282px) 100vw, 282px" />
																				</div>
																				<div class="stepbox__content">
																					<div class="stepbox__number">04
																					</div>
																					<div class="stepbox__limitation">
																						<h6 class="stepbox__title">We
																							<span
																								class="tt-base-color">Deliver</span>
																							Clean, Folded Clothes
																						</h6>
																						<p>We???ll deliver your pristine
																							garments back to you,
																							anytime and anywhere</p>
																					</div>
																				</div>
																			</div>
																		</div>

																	</div>
																	<div class="stepbox-dots__wrapper"
																		id="js-stepbox__nav" data-number="1">
																		<div class="stepbox-dots__line01 lazyload"
																			data-bg="wp-content/themes/laundry/images/step-line-x.png">
																		</div>
																		<div class="stepbox-dots__line02 lazyload"
																			data-bg="wp-content/themes/laundry/images/step-line2-x.png">
																		</div>
																		<ul class="stepbox-dots" role="tablist">
																			<li class="active nav-01" data-number="1">
																				<button type="button"
																					role="tab">1</button>
																			</li>
																			<li class="" data-number="2"><button
																					type="button" role="tab">2</button>
																			</li>
																			<li class="" data-number="3"><button
																					type="button" role="tab">3</button>
																			</li>
																			<li class="" data-number="4"><button
																					type="button" role="tab">4</button>
																			</li>

																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-7c87b6c elementor-section-full_width elementor-section-height-default elementor-section-height-default"
						data-id="7c87b6c" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-561c7bb"
									data-id="561c7bb" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-963b8a4 elementor-widget elementor-widget-laundry_service_box_two"
												data-id="963b8a4" data-element_type="widget"
												data-widget_type="laundry_service_box_two.default">
												<div class="elementor-widget-container">

													<div class="section-inner">
														<div class="box02 box02__img-left">
															<div class="box02__img">
																<picture>
																	<source
																		srcset="newimages/14w.jpg"
																		media="(max-width: 650px)" type="image/png">
																	<source
																		srcset="newimages/14w.jpg"
																		media="(max-width: 1024px)" type="image/png">
																	<img width="945" height="694"
																		src="newimages/14w.jpg"
																		class="attachment-full size-full" alt=""
																		loading="lazy"
																		srcset="newimages/14w.jpg 945w, newimages/14w.jpg 300w, newimages/14w.jpg 768w"
																		sizes="(max-width: 945px) 100vw, 945px" />
																</picture>
																<img width="141" height="58"
																	src="wp-content/uploads/sites/2/2020/11/arrow-img-right03.png"
																	class="tt-arrow" alt="" loading="lazy" />
															</div>
															<div class="box02__content">
																<div class="title-block">
																	<div class="title-block__label">
																		Laundry service for your business! </div>
																	<h4 class="title-block__title">Commercial
																		Laundry<br> Service</h4>
																</div>
																<p>Allowing us to do your
																	laundry is cost effective and will allow you
																	to focus on your studies. We
																	offer smart solutions to meet your commercial
																	laundry needs. Our Commercial Laundry Clients
																	include:</p>
																<div class="row tt-list01__top">
																	<div class="col-lg-6">
																		<ul class="tt-list01">
																			<li>Students &amp; Staff</li>
																			<li>Akorno</li>
																			<li>Big Ben</li>
																			<li>Clubs &amp; Associations </li>
																		</ul>
																	</div>
																	<div class="col-lg-6">
																		<ul class="tt-list01">
																			<li>School Health center</li>
																		
																			<li>Athletic Facilities / Gyms</li>
																		</ul>
																	</div>
																</div>
																<div class="box02-list-col"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<div class="sp" style="margin-bottom:-290px"></div>
				
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-f183842 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
						data-id="f183842" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a2046dc"
									data-id="a2046dc" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-001850a elementor-widget elementor-widget-laundry_service_box_two"
												data-id="001850a" data-element_type="widget"
												data-widget_type="laundry_service_box_two.default">
												<div class="elementor-widget-container">
													<div class="container-fluid no-gutters ">
														<div class="section-indent">
															<div class="box02 box02__img-right">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-d1fc773 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
						data-id="d1fc773" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a51d09d"
									data-id="a51d09d" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-9a5633d elementor-widget elementor-widget-laundry_testimonial_two"
												data-id="9a5633d" data-element_type="widget"
												data-widget_type="laundry_testimonial_two.default">
												<div class="elementor-widget-container">

													<div class="section-indent">
														<div class="container container-fluid-lg">
															<div class="blog-slider" id="blog-slider">
																<div class="blog-slider__img">
																	<div class="tt-item-wrapper">
																	
																		
																		
																	<?php
																
																	showPics();
																	?>

																	</div>
																</div>
																<div
																	class="blog-slider__layout slick-default slick-dots-left">

																	
																	
																	<?php
																	showAdverts();
																	?>




															</div>
														</div>
													</div>
												</div>
												<section
						class="elementor-section elementor-top-section elementor-element elementor-element-089928f elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
						data-id="089928f" data-element_type="section"
						data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dc644e4"
									data-id="dc644e4" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-d3f8ecf elementor-widget elementor-widget-laundry_promo_banner"
												data-id="d3f8ecf" data-element_type="widget"
												data-widget_type="laundry_promo_banner.default">
												<div class="elementor-widget-container">

													<div class="container section-inner container-fluid-xl no-gutters">
														<div class="tt-promo">
															<div class="tt-promo__descriptions">
																<h6 class="tt-promo__title">
																	Advertise Your Business On Our Page  <span
																		class="tt-base-color"><a href="../Advertisement/addadvert.php">Click Here</a></span> </h6>
															
																
															</div>
															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-1c98b37 elementor-section-full_width tt-position-relative tt-overflow-hidden elementor-section-height-default elementor-section-height-default"
						data-id="1c98b37" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f5856b1"
									data-id="f5856b1" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-2c42cd5 elementor-widget elementor-widget-laundry_price"
												data-id="2c42cd5" data-element_type="widget"
												data-widget_type="laundry_price.default">
												<div class="elementor-widget-container">
													<div class="lazyload tt-obj03-bg"
														data-bg="wp-content/uploads/sites/2/2020/11/wrapper06.png">
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-089928f elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
						data-id="089928f" data-element_type="section"
						data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dc644e4"
									data-id="dc644e4" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-d3f8ecf elementor-widget elementor-widget-laundry_promo_banner"
												data-id="d3f8ecf" data-element_type="widget"
												data-widget_type="laundry_promo_banner.default">
												<div class="elementor-widget-container">

													<div class="container section-inner container-fluid-xl no-gutters">
														<div class="tt-promo">
															<div class="tt-promo__descriptions">
																<h6 class="tt-promo__title">
																	Quality Service with <br
																		class="d-none d-lg-block">Free <span
																		class="tt-base-color">Collection &
																		Delivery</span> </h6>
																<p>
																	It is our goal to offer you the best possible
																	laundry<br> and dry cleaning service available. </p>
																<address>
																	<a href="tel:020 95 35 914
																		20 95 35 914"></a>
																</address>
															</div>
															<div class="tt-promo__img">
																<img width="617" height="354"
																	src="wp-content/uploads/sites/2/2020/11/moto.png"
																	class="attachment-full size-full" alt=""
																	loading="lazy"
																	srcset="wp-content/uploads/sites/2/2020/11/moto.png 617w, wp-content/uploads/sites/2/2020/11/moto.png 300w"
																	sizes="(max-width: 617px) 100vw, 617px" /> <img
																	class="tt-arrow"
																	src="wp-content/uploads/sites/2/2020/11/arrow-img-left.png"
																	alt="">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-847f288 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
						data-id="847f288" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5322eea"
									data-id="5322eea" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-b8f74ad elementor-widget elementor-widget-text-editor"
												data-id="b8f74ad" data-element_type="widget"
												data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<div class="elementor-text-editor elementor-clearfix">
														<div id="map-bottom">
															<div class="mapouter">
																<div class="gmap_canvas"><iframe id="gmap_canvas"
																		src="https://maps.google.com/maps?q=Ashesi%20University%20&t=k&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
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
							<li><a href="mailto:info@laundrymen.com"><i class="icons-1004017"></i>
									info@laundrymen.com</a>
							</li>
							<li><strong><a href="tel: 020 95 35 914"><i class="icons-4839471"></i> + (233)
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
					?? 2022 <span class="tt-base-color">Laundry</span>Men. All Rights Reserved. </div>
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
	<link rel='stylesheet' id='elementor-post-151-css'
		href='wp-content/uploads/sites/2/elementor/css/post-151b398.css?ver=1622960650' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-155-css'
		href='wp-content/uploads/sites/2/elementor/css/post-155b398.css?ver=1622960650' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-282-css'
		href='wp-content/uploads/sites/2/elementor/css/post-2822981.css?ver=1660212415' type='text/css' media='all' />
	<link rel='stylesheet' id='e-animations-css'
		href='wp-content/plugins/elementor/assets/lib/animations/animations.min3088.css?ver=3.7.0' type='text/css'
		media='all' />
	<script type='text/javascript'
		src='wp-content/plugins/laundry-helper/assets/elementor/js/addons-script-2a6d0.js?ver=1667819202'
		id='laundry-core-script-2-js'></script>
	<script type='text/javascript' src='wp-includes/js/dist/vendor/regenerator-runtime.min3937.js?ver=0.13.9'
		id='regenerator-runtime-js'></script>
	<script type='text/javascript' src='wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0'
		id='wp-polyfill-js'></script>
	<script type='text/javascript' id='contact-form-7-js-extra'>
		/* <![CDATA[ */
		var wpcf7 = { "api": { "root": "https:\/\/smartdata.tonytemplates.com\/laundry-v2\/demo2\/wp-json\/", "namespace": "contact-form-7\/v1" }, "cached": "1" };
/* ]]> */
	</script>
	<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/index4c7e.js?ver=5.6.2'
		id='contact-form-7-js'></script>
	<script type='text/javascript'
		src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minf13c.js?ver=2.7.0-wc.6.8.0'
		id='jquery-blockui-js'></script>
	<script type='text/javascript' id='wc-add-to-cart-js-extra'>
		/* <![CDATA[ */
		var wc_add_to_cart_params = { "ajax_url": "\/laundry-v2\/demo2\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/laundry-v2\/demo2\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/smartdata.tonytemplates.com\/laundry-v2\/demo2\/cart\/", "is_cart": "", "cart_redirect_after_add": "no" };
/* ]]> */
	</script>
	<script type='text/javascript'
		src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min8e94.js?ver=6.8.0'
		id='wc-add-to-cart-js'></script>
	<script type='text/javascript'
		src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min1c36.js?ver=2.1.4-wc.6.8.0'
		id='js-cookie-js'></script>
	<script type='text/javascript' id='woocommerce-js-extra'>
		/* <![CDATA[ */
		var woocommerce_params = { "ajax_url": "\/laundry-v2\/demo2\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/laundry-v2\/demo2\/?wc-ajax=%%endpoint%%" };
/* ]]> */
	</script>
	<script type='text/javascript'
		src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min8e94.js?ver=6.8.0'
		id='woocommerce-js'></script>
	<script type='text/javascript' id='wc-cart-fragments-js-extra'>
		/* <![CDATA[ */
		var wc_cart_fragments_params = { "ajax_url": "\/laundry-v2\/demo2\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/laundry-v2\/demo2\/?wc-ajax=%%endpoint%%", "cart_hash_key": "wc_cart_hash_2b2fa03c91b96cd069f20303a7f6b2a0", "fragment_name": "wc_fragments_2b2fa03c91b96cd069f20303a7f6b2a0", "request_timeout": "5000" };
/* ]]> */
	</script>
	<script type='text/javascript'
		src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min8e94.js?ver=6.8.0'
		id='wc-cart-fragments-js'></script>
	<script type='text/javascript' id='laundry-bundle-js-js-extra'>
		/* <![CDATA[ */
		var ajax_object = { "ajax_nonce_servicecart": "a8bd2e8299", "ajax_url": "https:\/\/smartdata.tonytemplates.com\/laundry-v2\/demo2\/wp-admin\/admin-ajax.php" };
/* ]]> */
	</script>
	<script type='text/javascript' src='wp-content/themes/laundry/js/bundlea6d0.js?ver=1667819202'
		id='laundry-bundle-js-js'></script>
	<script type='text/javascript' src='wp-content/themes/laundry/js/custom82c4.js?ver=1653566665'
		id='laundry-custom-js'></script>
	<script type='text/javascript' id='colorswatch-js-js-extra'>
		/* <![CDATA[ */
		var color_ajax_object = { "ajaxurl": "https:\/\/smartdata.tonytemplates.com\/laundry-v2\/demo2\/wp-admin\/admin-ajax.php", "site_url": "https:\/\/smartdata.tonytemplates.com\/laundry-v2\/demo2" };
/* ]]> */
	</script>
	<script type='text/javascript' src='wp-content/plugins/color-sds-picker-laundry/js/switchera6d0.js?ver=1667819202'
		id='colorswatch-js-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/webpack.runtime.min3088.js?ver=3.7.0'
		id='elementor-webpack-runtime-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend-modules.min3088.js?ver=3.7.0'
		id='elementor-frontend-modules-js'></script>
	<script type='text/javascript'
		src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'
		id='elementor-waypoints-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min0028.js?ver=1.13.1'
		id='jquery-ui-core-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6'
		id='swiper-js'></script>
	<script type='text/javascript'
		src='wp-content/plugins/elementor/assets/lib/share-link/share-link.min3088.js?ver=3.7.0'
		id='share-link-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/dialog/dialog.mind227.js?ver=4.9.0'
		id='elementor-dialog-js'></script>
	<script type='text/javascript' id='elementor-frontend-js-before'>
		var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Extra", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Extra", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.7.0", "is_static": false, "experimentalFeatures": { "e_import_export": true, "e_hidden_wordpress_widgets": true, "landing-pages": true, "elements-color-picker": true, "favorite-widgets": true, "admin-top-bar": true }, "urls": { "assets": "https:\/\/smartdata.tonytemplates.com\/laundry-v2\/demo2\/wp-content\/plugins\/elementor\/assets\/" }, "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 8, "title": "Home%20-%20Laundry", "excerpt": "", "featuredImage": false } };
	</script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.min3088.js?ver=3.7.0'
		id='elementor-frontend-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/preloaded-modules.min3088.js?ver=3.7.0'
		id='preloaded-modules-js'></script>
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
						<form action="https://smartdata.tonytemplates.com/laundry-v2/demo2/#wpcf7-f822-o2" method="post"
							class="wpcf7-form init" novalidate="novalidate" data-status="init">
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


</html>