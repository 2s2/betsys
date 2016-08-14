
<div class="b-priem-wrap">
  <div class="wraper clearfix">
      <?php query_posts('showposts=1&post_type=sett');  if(have_posts()): while(have_posts()):the_post();?>
      <ul>
        <li class="b-priem-item p-it-1"><?php the_field('priem_1') ?></li>
        <li class="b-priem-item p-it-2"><?php the_field('priem_2') ?></li>
        <li class="b-priem-item p-it-3"><?php the_field('priem_3') ?></li>
        <li class="b-priem-item p-it-4"><?php the_field('priem_4') ?></li>
      </ul>
     <?php endwhile; endif; wp_reset_query();  ?>
  </div>
</div>
