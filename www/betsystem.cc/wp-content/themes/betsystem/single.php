<?php  
 
get_header(); 

?> 
    
    <div class="b-center-content">

 <?php if(have_posts()): while(have_posts()):the_post();?>
					<div class="b-post-item">
						<div class="b-slot-laptop"><?php the_post_thumbnail(); ?></div>
						<div class="b-post-item__title"><h1><?php the_title(); ?></h1></div>
						<div class="b-post-item-text">

							<?php the_content(); ?> 

						</div>

						<?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
			                <a href="/category/slot/" class="b-back-link">Вернуться в предыдущее меню</a>   
			                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
			                <a href="/en/category/slot/" class="b-back-link">Back to previous menu</a>
			                <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
			                <a href="/es/category/slot/" class="b-back-link">Volver al menú precedente</a>
			                <?php endif;?> 
 

					</div>
					 	 
<?php endwhile; endif; ?> 

				
				</div>

 
        
<? get_sidebar('single'); ?> 
 
 </div>

<?php include(TEMPLATEPATH.'/include/priem.php'); ?>


<?php get_footer(); ?>

  
 