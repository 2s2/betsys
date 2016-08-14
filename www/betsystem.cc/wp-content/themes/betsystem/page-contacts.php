<?php  

/* Template name: Контакты */

get_header(); 
?> 
   
 <div class="b-center-content">
          <div class="b-post-item">
               <?php if(have_posts()): while(have_posts()):the_post();?>
            <div class="b-post-item-text">
                <div class="b-foot-cont">
                  <?php the_content(); ?> 
                </div>

            </div>
            <?php endwhile; endif; ?>  
          </div>
             
 
        </div> 
        
<? get_sidebar('about'); ?> 
 
 </div>

<?php include(TEMPLATEPATH.'/include/priem.php'); ?>

<?php get_footer(); ?> 


 