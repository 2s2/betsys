<?php
/* Template name: Android */
get_header();
?>
<div class="b-main-wide">
	<div class="b-main clearfix">
		<? get_sidebar('single'); ?>
		<div class="b-center-content">
			<div class="b-post-item">
				<?php if(have_posts()): while(have_posts()):the_post();?>
					<div class="b-post-item__title"><?php the_title(); ?></div>
						div class="b-post-item-text">
						<?php the_content(); ?>
						<div class="b-hide-block">
							<span class="b-hide-block-title"><?php the_field('hide_title'); ?></span>
							<div class="b-hide-text">
								<?php the_field('hide_text'); ?>
							</div>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>
<?php include(TEMPLATEPATH.'/include/priem.php'); ?>
<?php get_footer(); ?>