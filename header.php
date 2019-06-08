<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset') ?>" />
	<title>
		<?php wp_title('|', 'true', "right"); ?>
		<?php bloginfo('name') ?>
	</title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand ml-5" href="<?php bloginfo('url') ?>"> الخبيــر <i class="fas fa-book fa-x"></i></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars fa-2x"></span>
			</button>
			<?php hendy_add_created_nav(); ?>
			
		</div>
		<!-- <div class="mobile-icon">
				<a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/playstore-icon.png' ?>" /></a>
				<a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/appstore-icon.png' ?>" /></a>
			</div> -->
	</nav>