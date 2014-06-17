<!doctype html>
<html lang="en">
	<head>
            <meta charset="utf-8">
            <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

            <meta name="description" content="<?php echo site_description(); ?>">

            <link rel="stylesheet" href="<?php echo theme_url('css/normalize.css'); ?>">
			<link rel="stylesheet" href="<?php echo theme_url('css/font-awesome.min.css'); ?>">
            <link rel="stylesheet" href="<?php echo theme_url('css/style.css'); ?>">

            <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
            <link rel="shortcut icon" href="<?php echo base_url('favicon.ico'); ?>">

            <!--[if lt IE 9]>
                    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
            <script>var base = '<?php echo theme_url(); ?>';</script>

	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">
	</head>
	<body class="<?php echo body_class(); ?>">
		<div class="main-wrap">
			<header id="top" class="top">
				<div class="logo-wrap">
					<a id=logo" href="<?php echo base_url(); ?>"><img src="<?php echo theme_url() . site_meta('logo_image');?>"></a>
				</div>
				<?php if(has_menu_items()): ?>
				<nav id="main" role="navigation">
					<ul>
						<?php while(menu_items()): ?>
						<li class="menu-item <?php echo (menu_active() ? 'active' : ''); ?>">
								<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
									<div class="item-wrap">
										<?php echo menu_name(); ?>
									</div>
								</a>
						</li>
						<?php endwhile; ?>
					</ul>
				</nav>
				<?php endif; ?>
			</header>