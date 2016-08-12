
<div class="b-priem-wrap"> 
  <div class="wraper clearfix">
  	  <?php query_posts('showposts=1&post_type=sett');  if(have_posts()): while(have_posts()):the_post();?> 

		    <div class="b-priem-item p-it-1"><?php the_field('priem_1') ?></div>
		    <div class="b-priem-item p-it-2"><?php the_field('priem_2') ?></div>
		    <div class="b-priem-item p-it-3"><?php the_field('priem_3') ?></div>
		    <div class="b-priem-item p-it-4"><?php the_field('priem_4') ?></div>

     <?php endwhile; endif; wp_reset_query();  ?>
  </div> 
</div>   
