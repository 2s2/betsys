<?php  

/* Template name: Загрузки */

get_header(); 

?>  
    
  <div class="b-center-content">
          <div class="b-post-item">
               <?php if(have_posts()): while(have_posts()):the_post();?>
               <div class="b-post-item__title"><?php the_title(); ?> </div>
            <div class="b-post-item-text">

                      <div class="b-slot-laptop"><img src="<?php the_field('down_img_1'); ?>" alt="" /></div>
                        <?php the_field('desc_down_1'); ?>
                 

                          <?php
                        if ( is_user_logged_in() ) { ?> 
                        <div class="b-hide-block">
                                                  <span class="b-hide-block-title-download"><?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
                                         Скачать тут
                                        <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
                                         Download
                                        <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
                                         Descargar
                                        <?php endif;?></span>

                                                <div class="b-hide-text"> 
                                                    <?php the_field('hide_down_1'); ?>  
                                                  </div>
                          </div>
                        <? } else { ?>
                           <div class="b-hide-block">
                                                  <a data-reveal-id="enter_site" href="#" class="b-auth-hide-block-title-download"><?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
                                         Скачать тут
                                        <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
                                         Download
                                        <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
                                         Descargar
                                        <?php endif;?></a>
                         
                          </div>
                        <? } ?>
 
 

                      <div class="b-slot-laptop"><img src="<?php the_field('down_img_2'); ?>" alt="" /></div> 
                        <?php the_field('desc_down_2'); ?>
                        
                                        <?php
                        if ( is_user_logged_in() ) { ?> 
                        <div class="b-hide-block">
                                                  <span class="b-hide-block-title-download"><?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
                                         Скачать тут
                                        <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
                                         Download
                                        <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
                                         Descargar
                                        <?php endif;?></span>

                                                <div class="b-hide-text"> 
                                                    <?php the_field('hide_down_2'); ?>  
                                                  </div>
                          </div>
                        <? } else { ?>
                           <div class="b-hide-block">
                                                  <a data-reveal-id="enter_site" href="#" class="b-auth-hide-block-title-download"><?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
                                         Скачать тут
                                        <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
                                         Download
                                        <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
                                         Descargar
                                        <?php endif;?></a>
                         
                          </div>
                        <? } ?>


                        
                       


                      <div class="b-slot-laptop"><img src="<?php the_field('down_img_3'); ?>" alt="" /></div> 
                        <?php the_field('desc_down_3'); ?>
                   <?php
                        if ( is_user_logged_in() ) { ?> 
                        <div class="b-hide-block">
                                                  <span class="b-hide-block-title-download"><?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
                                         Скачать тут
                                        <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
                                         Download
                                        <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
                                         Descargar
                                        <?php endif;?></span>

                                                <div class="b-hide-text"> 
                                                    <?php the_field('hide_down_3'); ?>  
                                                  </div>
                          </div>
                        <? } else { ?>
                           <div class="b-hide-block">
                                                  <a data-reveal-id="enter_site" href="#" class="b-auth-hide-block-title-download"><?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
                                         Скачать тут
                                        <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
                                         Download
                                        <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
                                         Descargar
                                        <?php endif;?></a>
                         
                          </div>
                        <? } ?>

 
           </div>
            <?php endwhile; endif; ?>  
          
        </div> 
  </div> 
        
<? get_sidebar('single'); ?> 
 
 </div>

<?php include(TEMPLATEPATH.'/include/priem.php'); ?>


<?php get_footer(); ?>

  
 