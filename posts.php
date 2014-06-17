<?php theme_include('header'); ?>

<section class="container">
	<?php if(has_posts()): ?>
		<div class="posts-wrap">
			<?php posts(); ?>
                        <article class="article-wrap">
                                <h1>
                                        <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
                                </h1>

                                <div class="content">
                                        <?php echo article_markdown(); ?>
                                </div>

                                <footer>
                                        Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>
                                </footer>
                        </article>	
			<?php while(posts()): ?>
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
		</ul>
		
		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div class="wrap">
				<?php echo posts_prev(); ?>
			</div>
			<div class="wrap">
				<?php echo posts_next(); ?>
			</div>
		</nav>
		<?php endif; ?>
		
	<?php else: ?>
		<p>Try to write something! it's not that difficult you know.</p>
	<?php endif; ?>
		
</section>

<?php theme_include('sidebar'); ?>
<?php theme_include('footer'); ?>