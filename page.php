<?php theme_include('header'); ?>
	<section class="container">
		<section class="article-wrap">
			<h1><?php echo page_title(); ?></h1>

			<div class="content">
				<?php echo page_content(); ?>
			</div>
		</section>
	</section>
<?php theme_include('sidebar'); ?>
<?php theme_include('footer'); ?>