<?php theme_include('header'); ?>
	<section class="container">
		<div class="posts-wrap">
			<h1 class="search-wrap">You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>
			<?php if(has_search_results()): ?>
				<?php $i = 0; while(search_results()): $i++; ?>
				<article class="article-wrap">
					<h1>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h1>
					<div class="content">
							<?php echo article_description(); ?>
					</div>

					<footer>
							Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>
					</footer>
				</article>
				<?php endwhile; ?>
		</div>

				<?php if(has_pagination()): ?>
				<nav class="pagination">
					<div class="wrap">
						<?php echo search_prev(); ?>
					</div>
					<div class="wrap">
						<?php echo search_next(); ?>
					</div>
				</nav>
			<?php endif; ?>

		<?php else: ?>
			<p class="search-wrap">Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
		<?php endif; ?>
	</section>
<?php theme_include('sidebar'); ?>
<?php theme_include('footer'); ?>