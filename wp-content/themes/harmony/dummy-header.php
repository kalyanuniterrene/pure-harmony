
<header>
    <div class="hambergur">
      <a href="javascript:void(0);">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </div>
    <nav>
      <div class="container">
        <?php 
          wp_nav_menu( array( 'container' => '', 'menu_class' => 'clearfix', 'menu_id' => '', 'theme_location' => 'header-menu', 'link_before' => '', 'link_after' => '', ));
        ?>
      </div>
    </nav>

    <section id="header_main_part">
      <div class="container clearfix">
        <div class="logo_container">
          <a href="<?php echo esc_url(home_url()); ?>" title="<?php bloginfo( 'name' ); ?>">
            <img src="<?php echo get_theme_mod( 'website_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
          </a>
        </div>
        <div class="right_part">
          <div class="top_part">
            <?php 
              $hide_phone = get_theme_mod('seemless_phone_opt'); 
              if( $hide_phone == 1 ){
            ?>
            <ul>
              <li><?php echo get_theme_mod('seemless_first_office'); ?> <a href="tel:<?php echo get_theme_mod('seemless_first_office_phone'); ?>"><?php echo get_theme_mod('seemless_first_office_phone'); ?></a></li>
              <li><?php echo get_theme_mod('seemless_second_office'); ?> <a href="tel:<?php echo get_theme_mod('seemless_second_office_phone'); ?>"><?php echo get_theme_mod('seemless_second_office_phone'); ?></a></li>
              <li><?php echo get_theme_mod('seemless_third_office'); ?> <a href="tel:<?php echo get_theme_mod('seemless_third_office_phone'); ?>"><?php echo get_theme_mod('seemless_third_office_phone'); ?></a></li>
            </ul>
            <?php } ?>
          </div>
          <div class="bottom_part">
            <ul>
              <?php 
                $hide_review = get_theme_mod('seemless_review_opt'); 
                if( $hide_review == 1 ){
              ?>
              <li><p>See Our Reviews on </p> <a href="<?php echo get_theme_mod('seemless_review_link'); ?>" target="_blank"><img src="<?php echo get_theme_mod('review_logo'); ?>" alt="#"></a></li>
              <?php } ?>
              <?php 
                $hide_social = get_theme_mod('seemless_social_opt'); 
                if( $hide_social == 1 ){
              ?>
              <li><p>Follow us at</p> <a href="<?php echo get_theme_mod('seemless_facebook_link'); ?>" target="_blank" class="social"><i class="fa fa-facebook"></i></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </header>

  <?php 

    $hide_banner = get_theme_mod('seemless_banner_opt'); 
    if( $hide_banner == 1 ){
      if( is_front_page() ){ 
  ?>
  <section id="banner">
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt=""> -->
    <div id="joga" class="owl-carousel">
      <?php
        $banner_args = array( 'post_type' => 'home-slider', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date' );
        $banner_query = new WP_Query( $banner_args ); 
        while ( $banner_query->have_posts() ) { $banner_query->the_post(); 
      ?>
      <div class="item">
        <a href="#">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
        </a>
      </div>
      <?php
        } wp_reset_postdata();
      ?>       
    </div>
  </section>
  <?php } } ?>


  <?php
    $autoPlay = get_theme_mod('seemless_slider_autoplay');
    $autoplayTimeout = get_theme_mod('seemless_slider_autoplaytimeout');
    $pauseHover = get_theme_mod('seemless_slider_pause');
    $navControl = get_theme_mod('seemless_slider_navcontrol');
  ?>
  <script>
    jQuery(document).ready(function(){

      //banner slider options       
        jQuery('#joga').owlCarousel({
          stagePadding: 200,
          loop:true,
          margin:10,
          nav:<?php echo $navControl; ?>,
          items:1,
          lazyLoad: true,
          touchDrag:true,
          autoplay:<?php echo $autoPlay; ?>,
          autoplayTimeout:<?php echo $autoplayTimeout; ?>,
          autoplayHoverPause:<?php echo $pauseHover; ?>,
          dots:false,
          responsive:{
                0:{
                    items:1,
                    stagePadding: 60
                },
                600:{
                    items:1,
                    stagePadding: 100
                },
                1000:{
                    items:1,
                    stagePadding: 200
                },
                1200:{
                    items:1,
                    stagePadding: 250
                },
                1400:{
                    items:1,
                    stagePadding: 300
                },
                1600:{
                    items:1,
                    stagePadding: 350
                },
                1800:{
                    items:1,
                    stagePadding: 400
                }
            }
        });
      
    });
  </script>