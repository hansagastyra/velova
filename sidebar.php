	<aside class="sidebar">
		<div class="toggle">
			<a class="toggle-link"><i class="fa fa-navicon fa-3x fa-fw"></i></a>
		</div>
		<div class="sidebar-wrap">
			<div class="search-wrap">
				<form id="search" action="<?php echo search_url(); ?>" method="post">
					<h2><label for="term">Wanna search something?</label></h2>
					<input type="search" id="term" name="term" placeholder="Type some keywords..." value="<?php echo search_term(); ?>">
				</form>
			</div>
			<div class="category-wrap">
				<h2>Categories</h2>
				<ul class="list-categories">
				<?php while(categories()) : ?>
					<li class="cat-link">
						<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
							<span class="cat-text"><?php echo category_title(); ?> <span>(<?php echo category_count(); ?>)</span></span>
						</a>
					</li>
				<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</aside>