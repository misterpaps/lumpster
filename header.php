<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<!-- html version -->
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-155721902-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() { dataLayer.push(arguments); }
			gtag('js', new Date());

			gtag('config', 'UA-155721902-1');
		</script>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>, expansion and implementation of an integrated strategic marketing and communications plan to advance a Company’s brand identity while broadening awareness of its products and services within the entertainment industry.">

    	<meta name="keywords"
        content="business development, strategic planning, brand management, mergers, acquisition, film, television, production, james martin, jim martin, hollywood, los angeles, california">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
		</script>


	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column text-center">

			<!-- header -->
			<header class="header clear" role="banner">

				<section id="header">
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/one-eyed-pie-logo.svg" alt="one eyed pie" class="pie-logo">
						</a>
					</div>

				</section>

			</header>
			<!-- /header -->
