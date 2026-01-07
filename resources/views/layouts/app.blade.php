<!DOCTYPE html>
<!-- Treko - Software & Startup Premium Landing Page Template design by Jthemes (http://www.jthemes.net) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Jthemes"/>
		<meta name="description" content="Genix Printing – Premium signage, custom prints, labels, stickers, neon signs, flags, stands, and event branding in UAE." />
		<meta name="keywords" content="Genix Printing, signage UAE, villa sign, home sign, reception sign, neon sign UAE, name plates, labels and tags, print and cut stickers, cutouts and props, balloons and arches, flags printing, stands, custom printing, acrylic signage, LED neon, sticker printing, branding, Dubai printing, UAE printing" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- SITE TITLE -->
		<title>Genix Printing | Signage, Neon Signs, Labels & Stickers in UAE</title>

		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

		<!-- AOS -->
		<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="shortcut icon" href="{{ asset('assets/images/genex.png') }}" type="image/png">

		<!-- (Optional old icons - keep if you have these files, otherwise remove) -->
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:300,400,500,700,900" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

		<!-- FONT ICONS -->
		<link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
		<link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="{{ asset('assets/css/menu.css') }}" rel="stylesheet">
		<link id="effect" href="{{ asset('assets/css/dropdown-effects/fade-down.css') }}" media="all" rel="stylesheet">
		<link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">

		<!-- ON SCROLL ANIMATION -->
		<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">

		<!-- TEMPLATE CSS -->
		<link href="{{ asset('assets/css/skyblue-theme.css') }}" rel="stylesheet">

		<!-- RESPONSIVE CSS -->
		<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

		<!-- ✅ WhatsApp Floating Button Styles (Right side above footer like circled area) -->
		<style>
			/* WhatsApp Floating Button (Right side, ABOVE footer bar) */
			.gx-wa-float{
				position: fixed;
				right: 18px;
				bottom: 120px; /* ✅ moved up to match the circled position */
				z-index: 9999;

				width: 56px;
				height: 56px;
				border-radius: 999px;

				display: grid;
				place-items: center;

				background: #25D366;
				color: #fff;
				text-decoration: none;

				box-shadow: 0 14px 40px rgba(0,0,0,.18);
				transition: transform .18s ease, box-shadow .18s ease, filter .18s ease;
			}
			.gx-wa-float:hover{
				transform: scale(1.06);
				box-shadow: 0 18px 55px rgba(0,0,0,.22);
				filter: brightness(1.02);
			}
			.gx-wa-float:active{ transform: scale(0.98); }

			.gx-wa-float i{
				font-size: 28px;
				line-height: 1;
			}

			/* Tooltip (shows on hover) */
			.gx-wa-tip{
				position: absolute;
				right: 66px;
				top: 50%;
				transform: translateY(-50%);
				white-space: nowrap;

				background: rgba(15,23,42,.92);
				color: #fff;
				padding: 8px 10px;
				border-radius: 10px;
				font-size: 12px;
				opacity: 0;
				pointer-events: none;
				transition: opacity .18s ease;
			}
			.gx-wa-float:hover .gx-wa-tip{ opacity: 1; }

			/* Mobile adjustment */
			@media (max-width: 520px){
				.gx-wa-float{
					right: 14px;
					bottom: 96px; /* ✅ still above footer on mobile */
					width: 52px;
					height: 52px;
				}
				.gx-wa-float i{ font-size: 26px; }
				.gx-wa-tip{ display: none; }
			}
		</style>
	</head>

	<body>
		<div id="page" class="page">
			@include('layouts.header')
			@yield('content')
			@include('layouts.footer')
		</div>

		<!-- ✅ WhatsApp Floating Button -->
		<a
			class="gx-wa-float"
			href="https://wa.me/9715612470735"
			target="_blank"
			rel="noopener"
			aria-label="Chat on WhatsApp +971 56 124 70735"
			title="WhatsApp: +971 56 124 70735"
		>
			<span class="gx-wa-tip">WhatsApp: +971 56 124 70735</span>
			<i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
		</a>

		<!-- EXTERNAL SCRIPTS -->
		<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.scrollto.js') }}"></script>
		<script src="{{ asset('assets/js/menu.js') }}"></script>
		<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/js/contact-form.js') }}"></script>
		<script src="{{ asset('assets/js/register-form.js') }}"></script>
		<script src="{{ asset('assets/js/request-form.js') }}"></script>
		<script src="{{ asset('assets/js/comment-form.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('assets/js/wow.js') }}"></script>
		<script src="{{ asset('assets/js/custom.js') }}"></script>

		<script>
			new WOW().init();
		</script>

		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

		<!-- AOS init (disable on mobile) -->
		<script>
			if (window.innerWidth >= 768) {
				AOS.init();
			} else {
				document.querySelectorAll('[data-aos]').forEach(el => {
					el.removeAttribute('data-aos');
					el.removeAttribute('data-aos-duration');
					el.removeAttribute('data-aos-delay');
				});
			}
		</script>
	</body>
</html>
