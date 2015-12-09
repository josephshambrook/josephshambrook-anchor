<?php theme_include('header'); ?>

<!-- <p>Nice try</p> -->

<div class="box">

	<?php if(has_posts()): ?>
		<?php posts(); ?>
		<article class="wrap">
			<h1 class="mb0">
				<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
			</h1>
			<small class="muted">
				<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo article_date(); ?></time>
			</small>

			<div class="content">
				<?php echo article_markdown(); ?>
			</div>
		</article>

		<?php if(has_pagination()): ?>
			<nav class="pagination">
				<div class="wrap">
					<?php echo posts_prev(); ?>
					<?php echo posts_next(); ?>
				</div>
			</nav>
		<?php endif; ?>

	<?php endif; ?>

</div>

<?php theme_include('footer'); ?>