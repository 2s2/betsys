<?php  

/* Template name: Главная */

get_header(); 
?> 

<div class="b-center">
					<div class="b-laptop"></div>
					<div class="b-connect">
						<a href="#" data-reveal-id="get_consult" class="b-btn-1"><?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
                  Подключится
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
                   Connect 
                <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
                Conectar 
                <?php endif;?></a>
					</div>
					<div class="b-contats-top">
						 <?php query_posts('showposts=1&post_type=sett');  if(have_posts()): while(have_posts()):the_post();?>
							     
								<p class=""><?php the_field('tel_numb') ?></p>
		 						<p class="b-contats-top__skype"><?php the_field('login_skype') ?></p>

 						  <?php endwhile; endif; wp_reset_query();  ?> 
					</div>

					<div class="b-get-cons">
						<a href="#" data-reveal-id="get_consult"><?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
                  Получить консультацию
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
                 Get a consultation
                <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
                Obtener la consulta.
                <?php endif;?></a>
						<p>
							<?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
			                 Прямая консультация по вопросам выбора и настройке программных продуктов
			                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
			                On-line consultation related to software choice and software configuration
			                <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
			                Consulta directa sobre la selección y el ajuste de los productos de software
			                <?php endif;?>
						</p>
					</div>
				</div>

<? get_sidebar(); ?> 


        </div> 

<?php include(TEMPLATEPATH.'/include/priem.php'); ?>


<?php get_footer(); ?>

 