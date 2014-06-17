<?php theme_include('header'); ?>

	<section class="container">
		<section class="article-wrap" id="article-<?php echo article_id(); ?>">
			<h1><?php echo article_title(); ?></h1>

			<article>
				<?php echo article_markdown(); ?>
			</article>

			<section class="footnote">
				<!-- Unfortunately, CSS means everything's got to be inline. -->
				<p>This article is my <?php echo numeral(total_articles()); ?> oldest. It is <?php echo count_words(article_markdown()); ?> words long<?php if(comments_open()): ?>, and it’s got <?php echo total_comments() . pluralise(total_comments(), ' comment'); ?> for now.<?php endif; ?> <?php echo article_custom_field('attribution'); ?></p>
			</section>
		</section>

		<?php if(comments_open()): ?>
		<section class="comments">
			<?php if(has_comments()): ?>
			<ul class="commentlist">
				<?php $i = 0; while(comments()): $i++; ?>
				<li class="comment" id="comment-<?php echo comment_id(); ?>">
					<div class="wrap">
						<div class="commenter">
							<h2><?php echo comment_name(); ?></h2>
							<time><?php echo relative_time(comment_time()); ?></time>
						</div>
						<div class="content">
							<?php echo comment_text(); ?>
						</div>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

			<form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<h3>Your comment</h3>
				<?php echo comment_form_notifications(); ?>

				<p class="name">
					<label for="name">Your name:</label>
					<?php echo comment_form_input_name('placeholder="Type your name here"'); ?>
				</p>

				<p class="email">
					<label for="email">Your email address:</label>
					<?php echo comment_form_input_email('placeholder="Type your email here (won’t be published)"'); ?>
				</p>

				<p class="textarea">
					<label for="text">Your comment:</label>
					<?php echo comment_form_input_text('placeholder="Type your awesome comment here"'); ?>
				</p>

				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</form>

		</section>
		<?php endif; ?>
	</section>
<?php theme_include('sidebar'); ?>
<?php theme_include('footer'); ?>