<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/images/android-icon-192x192.png">
<link rel="icon" type="<?php echo get_template_directory_uri(); ?>/images/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="<?php echo get_template_directory_uri(); ?>/images/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="<?php echo get_template_directory_uri(); ?>/images/png" sizes="16x16" href="/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet"> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/lightSlider.css"/>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css'>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header>
    <div class="logo">
      <a href="<?php echo esc_url(home_url()); ?>">
        <img class="desktop" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="#">
        <img class="responsive" src="<?php echo get_template_directory_uri(); ?>/images/responsive_logo.png" alt="<?php bloginfo( 'name' ); ?>">
      </a>
    </div>

    <div class="top">
      <div class="container clearfix">
        <div class="f_left phone_number">
          <p>
            <span class="phone">
              <i class="fa fa-phone"></i>
            </span>
            <?php the_field('phone_number_format');?>
          </p>
        </div>

        <div class="f_right search_social">
          <div class="search">
            <span class="search-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png" alt="#"></span>
            <input type="text" placeholder="Type Your Search Here">
          </div>

          <div class="social">
          <ul>

             
            
          <?php

if( have_rows('social_links') ):

 	
    while ( have_rows('social_links') ) : the_row();
?>
        
        
 <li><a href="<?php the_sub_field('social_media_link');?>"><i class="fa fa-<?php the_sub_field('social_icons');?>"></i></a></li>
  <?php
    endwhile;



endif;

?>
            </ul>
          </div>
        </div>

       <!-- hamburger -->
       <div class="hamburger">
         <a href="#">
           <span></span>
           <span></span>
           <span></span>
         </a>
       </div> 

      </div>

    </div>

    <nav>
       <div class="nav_close">
          <i class="fa fa-times"></i>
       </div>
      <div class="container clearfix">  

                 <div class="f_left"> 
                     <ul> 
                        <?php
                        wp_nav_menu( array( 'container' => '', 'menu_class' => 'clearfix', 'menu_id' => '', 'theme_location' => 'top-left-menu', 'link_before' => '', 'link_after' => '', ));
                        ?>

                         </li>



                     </ul>

                 </div>

                 <div class="f_right">

                  <ul>  

                          <?php
                        wp_nav_menu( array( 'container' => '', 'menu_class' => 'clearfix', 'menu_id' => '', 'theme_location' => 'top-right-menu', 'link_before' => '', 'link_after' => '', ));
                        ?>



                     </ul>

                 </div>

      </div>

    </nav>

    
        <?php if( is_front_page() ){ ?>
        <div id="banner">           

            <div class="slider-container">

                <div class="slider" id="slider">


                           <?php

                	 $banner_args = array( 'post_type' => 'home-slider', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'date' );
				        $banner_query = new WP_Query( $banner_args ); 
				        while ( $banner_query->have_posts() ) 

		        		{ 

		        			$banner_query->the_post(); 

		        			$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
		        			?>

		        			<div class="slide"> 

                        <img src="<?php echo $image[0] ?>" alt=""> 

                        <div class="content">

                            <?php the_content();?>
                            <a href="<?php the_field('banner_button_link');?>" class="btn book_btn"><?php the_field('banner_button_text');?> <i class="fa fa-long-arrow-down"></i></a>

                        </div>

                    </div>
			

						<?php
					}

					wp_reset_postdata();

                     ?>

                </div>

                <a href="" class="switch" id="prev"><span><i class="fa fa-long-arrow-left" aria-hidden="true"></i></span></a> 

                <a href="" class="switch" id="next"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>

            </div>

        </div>

        <div class="banner_bottom">

            <img src="<?php echo get_template_directory_uri(); ?>/images/banner_bottom.png" alt="">

        </div> 



        <div class="banner_carve">

          <img src="<?php echo get_template_directory_uri(); ?>/images/banner_carve.png" alt="#">

        </div>
        <?php } ?>

        <?php if( is_page('all-podcasts') ){
          $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );

         ?>
        <div id="inner_banner">           
           <img src="<?php echo $image[0];?>" alt="#">
           <h4>Enter The New Paradigm of</h4>
           <h1>OPTIMUM HEALTH AND WELLNESS</h1>
        </div>
        <?php } ?>
  </header>