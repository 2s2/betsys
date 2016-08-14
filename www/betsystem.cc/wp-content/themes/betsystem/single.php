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
					</div>
<?php endwhile; endif; ?> 
				</div>
<? get_sidebar('single'); ?> 
 
 </div>

<?php include(TEMPLATEPATH.'/include/priem.php'); ?>


<?php get_footer(); ?>

