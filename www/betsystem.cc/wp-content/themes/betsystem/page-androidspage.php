<?php  

/* Template name: Android page  */

get_header(); 

?> 
    
  <div class="b-center-content">
          <div class="b-post-item">
               <?php if(have_posts()): while(have_posts()):the_post();?>
               <div class="b-post-item__title"><?php the_title(); ?> </div>
            <div class="b-post-item-text">

                <?php the_content(); ?> 

           </div>
            <?php endwhile; endif; ?>  
          
        </div> 
  </div> 
        
<? get_sidebar('single'); ?> 
 
 </div>

<?php include(TEMPLATEPATH.'/include/priem.php'); ?>


<?php get_footer(); ?>

  
 