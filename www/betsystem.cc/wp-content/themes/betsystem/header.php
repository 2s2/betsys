<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--[if lt IE 7]><html class="ie ie6 lte9 lte8 lte7"><![endif]-->
<!--[if IE 7]><html class="ie ie7 lte9 lte8 lte7"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8"><![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title><?php
/*
* Print the <title> tag based on what is being viewed.
*/
global $page, $paged;
 
wp_title( '-&nbsp;', true, 'right' );
 
// Add the blog name.
bloginfo( 'name' );
 
// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
echo " | $site_description";
 
// Add a page number if necessary:
if ( $paged >= 2 || $page >= 2 )
echo ' | ' . sprintf( __( 'Page %s', 'shape' ), max( $paged, $page ) );
 
?></title>  
<meta name="viewport" content="width=1000" /> 
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" type="text/css" /> 
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/reset.css" type="text/css" />   
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,300,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'> 
<link href="<?php echo get_template_directory_uri() ?>/js/bxslider/jquery.bxslider.css" rel="stylesheet" /> 
<link href="<?php echo get_template_directory_uri() ?>/js/reval/reveal.css" rel="stylesheet" />  
 
<?php wp_head(); ?>
 

</head> 
<body <?php body_class(''); ?>> 

 <div class="wraper clearfix">

             <div class="b-head clearfix">
                <div class="b-lang">
                   <?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
                     <ul>
                      <li><span class="current_lang">rus</span>
                        <ul>
                          <li><a href="<?php echo get_site_url(); ?>/es/">spa</a></li>
                          <li><a href="<?php echo get_site_url(); ?>/">eng</a></li>
                        </ul>
                      </li>
                    </ul>
                  <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
                     <ul>
                      <li><span class="current_lang">eng</span>
                        <ul>
                          <li><a href="<?php echo get_site_url(); ?>/es/">spa</a></li>
                          <li><a href="<?php echo get_site_url(); ?>/">rus</a></li>
                        </ul>
                      </li>
                    </ul>
                  <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
                   <ul>
                      <li><span class="current_lang">spa</span>
                        <ul>
                          <li><a href="<?php echo get_site_url(); ?>/">eng</a></li>
                          <li><a href="<?php echo get_site_url(); ?>/">rus</a></li>
                        </ul>
                      </li>
                    </ul>
                  <?php endif;?>
 
                </div>
           
                <div class="b-login-form"> 

                  <?php if ( is_user_logged_in() ) { ?> 
                        <a href="#" class=""> 
                          <?php global $current_user;
                                  get_currentuserinfo(); 
                                  echo  $current_user->user_login; 
                            ?></a>
                          <a id="wp-logout" href="<?php echo wp_logout_url() ?>"  class=""> <?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
                          Выход 
                        <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
                          Logout
                        <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
                          Salida 
                        <?php endif;?></a>


                  <? } else { ?>

                    <a href="#" data-reveal-id="register_form" class="lwa-click"> 
                                  <?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
                                    Регистр. 
                                  <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
                                     Register 
                                  <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
                                  Registrarse 
                                  <?php endif;?></a>
                                    <a href="#" data-reveal-id="enter_site" class=""> <?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
                                    Вход 
                                  <?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
                                     Sign in 
                                  <?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
                                   Entrada 
                                  <?php endif;?></a>

                                  
                   <? } ?>


             
                </div>



 <a href="<?php if(ICL_LANGUAGE_CODE=='ru'): ?>

              <?php echo get_site_url(); ?> 

            <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>

              <?php echo get_site_url(); ?>/

            <?php elseif(ICL_LANGUAGE_CODE=='es'): ?>

            <?php echo get_site_url(); ?>/es/

            <?php endif;?>" class="b-logo">Bet System</a>

 
          <div class="b-menu">  

             <?php if(ICL_LANGUAGE_CODE=='ru'): ?>

                 <?php wp_nav_menu('menu=menu_ru'); ?>   

              <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>

                 <?php wp_nav_menu('menu=menu_en'); ?>  

              <?php elseif(ICL_LANGUAGE_CODE=='es'): ?>

                <?php wp_nav_menu('menu=menu_es'); ?>  

              <?php endif;?>  
        </div>

       
             </div>
       