<?php
/* Template name: Главная */
get_header();
?>
<div class="b-slider">
	<div class="b-slider-content">
		<?php echo do_shortcode("[mpsl demo-slider-157b0d7f409e69]"); ?>
	</div>
</div>
<div class="b-main-wide">
	<div class="b-main clearfix">
		<? get_sidebar(); ?>
		<div class="b-center">
			<div class="b-laptop"></div>
			<div class="b-connect">
				<a href="#" data-reveal-id="get_consult" class="b-btn-1">
					<?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
						Подключится
					<?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
						Connect 
					<?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
						Conectar 
					<?php endif;?>
				</a>
			</div>
			<div class="b-contats-top">
				<?php query_posts('showposts=1&post_type=sett');
					if(have_posts()): while(have_posts()):the_post();?>
					<p class=""><?php the_field('tel_numb') ?></p>
					<p class="b-contats-top__skype"><?php the_field('login_skype') ?></p>
				<?php endwhile; endif; wp_reset_query();  ?> 
			</div>
			<div class="b-get-cons">
				<?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
					<a href="#" data-reveal-id="get_consult">Получить консультацию</a>
					<p>Прямая консультация по вопросам выбора и настройке программных продуктов</p>
				<?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
					<a href="#" data-reveal-id="get_consult">Get a consultation</a>
					<p>On-line consultation related to software choice and software configuration</p>
				<?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
					<a href="#" data-reveal-id="get_consult">Obtener la consulta</a>
					<p>Consulta directa sobre la selección y el ajuste de los productos de software</p>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
<?php include(TEMPLATEPATH.'/include/priem.php'); ?>
<?php get_footer(); ?>

 