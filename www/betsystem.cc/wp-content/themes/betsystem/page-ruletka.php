<?php
/* Template name: Рулетка HD */
get_header();
?>
<div class="b-main-wide">
	<div class="b-main clearfix">
		<? get_sidebar('single'); ?>
		<div class="b-center-content">
			<div class="b-post-item">
				<?php if(have_posts()): while(have_posts()):the_post();?>
					<h3><?php the_title(); ?> </h3>
					<div class="b-post-item-text">
						<?php the_content(); ?>
						<div class="b-hide-block">
							<p><a href="#" class="b-link-see-movie">
								<?php if(ICL_LANGUAGE_CODE=='ru'): ?>
									Просмотр промо ролика (загрузка картинки до 60 секунд)
								<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
									View a promo video (download pictures up to 60 seconds)
								<?php elseif(ICL_LANGUAGE_CODE=='es'): ?>
									Mirar el video de promoción (Descargar imágenes de hasta 60 segundos)
								<?php endif;?>
							</a></p>
							<div class="b-hide-text">
								<object width="550" height="400">
								<param name="movie" value="/mult_casino.swf">
								<embed src="/mult_casino.swf" width="550" height="400">
								</embed>
								</object>
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