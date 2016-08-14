<div class="b-footer-wrap"> 
  <div class="b-footer-welcome_message">
    <div class="wraper clearfix">
      <?php the_field('footer_text') ?>
    </div>
  </div>
  <div class="wraper clearfix">
     <?php query_posts('showposts=1&post_type=sett');  if(have_posts()): while(have_posts()):the_post();?>

    <div class="b-foot-cont">
      <p><?php the_field('email') ?></p> 
      <p><?php the_field('skype_footer') ?></p>
      <p><?php the_field('tel_footer') ?></p>
    </div> 
     <?php endwhile; endif; wp_reset_query();  ?> 
  </div> 
</div> 

<div id="get_consult" class="reveal-modal">
       <div class="b-consult-title">
                <?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
                 Задайте нам интересующий Вас вопрос и <br />
                  наш специалист ответит Вам в кратчайшие сроки.
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
                 Ask your questionsand our specialists <br/> will answer you as soon as possible
                <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
                 Pregunte y nuestro especialista le responde más pronto
                <?php endif;?>


        </div>
 
        <div class="b-form">
          <?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
                  
                        <?php echo do_shortcode('[contact-form-7 id="4" title="Получить консультацию"]'); ?>

                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
                
                      <?php echo do_shortcode('[contact-form-7 id="136" title="Получить консультацию en"]'); ?> 

                <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
                 
                      <?php echo do_shortcode('[contact-form-7 id="136" title="Получить консультацию es"]'); ?> 

                <?php endif;?>

         
          
         
         
        </div>
     <a class="close-reveal-modal">&#215;</a>
</div> 
  
<div id="enter_site" class="reveal-modal">
       <div class="b-consult-title"><?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
                Вход на сайт
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
                Sign in
                <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
                Registrarse
                <?php endif;?></div>
 
        <div class="b-form"> 
<?php //echo do_shortcode('[lwa]'); 
login_with_ajax() ?>
        
         
        </div>
     <a class="close-reveal-modal">&#215;</a>
</div> 



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>  
<script src="<?php echo get_template_directory_uri() ?>/js/bxslider/jquery.bxslider.min.js" type="text/javascript"></script> 
<script src="<?php echo get_template_directory_uri() ?>/js/reval/jquery.reveal.js" type="text/javascript"></script> 
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.validate.min.js" type="text/javascript"></script>  
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.custom.js" type="text/javascript"></script> 
 
 <?php wp_footer(); ?>
  
</body>
</html> 

 