<?php
get_header();
?>
<div class="b-main-wide">
	<div class="b-main clearfix">
		<? get_sidebar('single'); ?>
		<div class="b-center-content">
			<? if(have_posts()): while(have_posts()):the_post();?>
				<div class="b-slot-item">
					<?php the_post_thumbnail('slot-thumb'); ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div>
			<?php endwhile; endif;  ?>
			<div class="nav_div">
				<div class="nav">
					<?php if(function_exists('wp_pagenavi')): ?>
						<?php wp_pagenavi(); ?><?php else : ?><?php posts_nav_link(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include(TEMPLATEPATH.'/include/priem.php'); ?>
<?php get_footer(); ?>