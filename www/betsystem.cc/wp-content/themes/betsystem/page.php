<?php
get_header();
?>
<div class="b-main-wide">
	<div class="b-main clearfix">
		<? get_sidebar('single'); ?>
		<div class="b-center-content">
			<div class="b-post-item">
				<?php if(have_posts()): while(have_posts()):the_post();?>
					<div class="b-post-item-text">
						<?php the_content(); ?>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>
<?php include(TEMPLATEPATH.'/include/priem.php'); ?>
<?php get_footer(); ?>