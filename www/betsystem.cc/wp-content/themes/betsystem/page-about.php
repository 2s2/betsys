<?php  

/* Template name: О компании */

get_header(); 

?> 
    
  <div class="b-center-content">
          <div class="b-post-item">
               <?php if(have_posts()): while(have_posts()):the_post();?>
            <div class="b-post-item-text">

                <?php the_content(); ?> 

            </div>
            <?php endwhile; endif; ?>  
          </div>
             
 
        </div> 
        
<? get_sidebar('about'); ?> 
 
 </div>

<?php include(TEMPLATEPATH.'/include/priem.php'); ?> 


<?php get_footer(); ?>

  
 