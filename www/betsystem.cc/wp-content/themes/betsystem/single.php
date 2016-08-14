<?php
get_header();
?>
<div class="b-main-wide">
	<div class="b-main clearfix">
		<? get_sidebar('single'); ?>
		<div class="b-center-content">
			<?php if(have_posts()): while(have_posts()):the_post();?>
				<div class="b-post-item">
					<h3><?php the_title(); ?></h3>
					<div class="b-slot-laptop"><?php the_post_thumbnail(); ?></div>
					<div class="b-post-item-text">
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
<?php include(TEMPLATEPATH.'/include/priem.php'); ?>
<?php get_footer(); ?>