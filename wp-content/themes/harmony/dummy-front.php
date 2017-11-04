<?php 
      $hide_service = get_theme_mod('seemless_service_opt'); 
      if( $hide_service == 1 ){
    ?>
    <section id="welcome">
      <div class="container">
        <h1><?php echo get_theme_mod('seemless_service_title'); ?></h1>
        <div class="services">
          
          <?php
            $service1 = get_theme_mod('service_setting1');
            $page1 = get_post($service1);
            if($service1 != 0){
          ?>
          <div class="box">
            <a href="<?php echo get_permalink($page1); ?>">
              <div class="img_box">
                <img src="<?php echo get_the_post_thumbnail_url($page1); ?>">
              </div>
              <h4><?php echo get_the_title($page1); ?></h4>
            </a> 
          </div>
          <?php } ?>
          
          <?php
            $service2 = get_theme_mod('service_setting2');
            $page2 = get_post($service2);
            if($service2 != 0){
          ?>
          <div class="box">
            <a href="<?php echo get_permalink($page2); ?>">
              <div class="img_box">
                <img src="<?php echo get_the_post_thumbnail_url($page2); ?>">
              </div>
              <h4><?php echo get_the_title($page2); ?></h4>
            </a> 
          </div>
          <?php } ?>

          <?php
            $service3 = get_theme_mod('service_setting3');
            $page3 = get_post($service3);
            if($service3 != 0){
          ?>
          <div class="box">
            <a href="<?php echo get_permalink($page3); ?>">
              <div class="img_box">
                <img src="<?php echo get_the_post_thumbnail_url($page3); ?>">
              </div>
              <h4><?php echo get_the_title($page3); ?></h4>
            </a> 
          </div>
          <?php } ?>

          <?php
            $service4 = get_theme_mod('service_setting4');
            $page4 = get_post($service4);
            if($service4 != 0){
          ?>
          <div class="box">
            <a href="<?php echo get_permalink($page4); ?>">
              <div class="img_box">
                <img src="<?php echo get_the_post_thumbnail_url($page4); ?>">
              </div>
              <h4><?php echo get_the_title($page4); ?></h4>
            </a> 
          </div>
          <?php } ?>         

        </div>
      </div>
    </section>
    <?php } ?>

    <?php 
      $hide_business = get_theme_mod('seemless_business_opt'); 
      if( $hide_business == 1 ){
    ?>
    <section id="company_history">
      <div class="container clearfix">
        <?php //if ( is_active_sidebar( 'family-business-widget' ) ) { ?>
          <?php //dynamic_sidebar( 'family-business-widget' ); ?>
        <?php //} ?>
        <div class="img_bx">
          <img src="<?php echo get_theme_mod( 'family_business_image' ); ?>">
        </div>
        <div class="content">
          <p><?php echo get_theme_mod( 'family_business_content' ); ?></p>
        </div>
      </div>
    </section>
    <?php } ?>

  <?php 
    $hide_content = get_theme_mod('seemless_content_opt'); 
    if( $hide_content == 1 ){
  ?>
  <section id="feature">
    <div class="container">
      <?php
        if(have_posts() ) {
        while ( have_posts() ) { the_post();
      ?>
        <?php the_content(); ?>
      <?php 
        } }
      ?>
    </div>
  </section>
  <?php } ?>

  <?php 
    $hide_portfolio = get_theme_mod('seemless_portfolio_opt'); 
    if( $hide_portfolio == 1 ){
  ?>
  <section id="service_area" style="background: url(<?php echo get_template_directory_uri(); ?>/images/service_area_bg.jpg) no-repeat center center;">
    <div class="container clearfix">
      <div class="content">
        <?php //if ( is_active_sidebar( 'home-portfolio-widget' ) ) { ?>
          <?php //dynamic_sidebar( 'home-portfolio-widget' ); ?>
        <?php //} ?>
        <h3><?php echo get_theme_mod( 'seemless_portfolio_title' ); ?></h3>
        <p><?php echo get_theme_mod( 'seemless_portfolio_brief' ); ?></p>
        <a href="<?php echo get_theme_mod( 'seemless_portfolio_button_link' ); ?>" class="portfolio_btn"><?php echo get_theme_mod( 'seemless_portfolio_button_text' ); ?> <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
  </section>
  <?php } ?>

  <?php 
    $hide_card_badge = get_theme_mod('seemless_card_badge_opt'); 
    if( $hide_card_badge == 1 ){
  ?>
  <section id="card_accept">
    <div class="container clearfix">
      <div class="left_part">
        <ul>
          <li><img src="<?php echo get_theme_mod('seemless_first_badge'); ?>" alt="#"></li>
          <li><img src="<?php echo get_theme_mod('seemless_second_badge'); ?>" alt="#"></li>
          <li><?php echo get_theme_mod('seemless_share_block'); ?></li>
          <li><?php //echo do_shortcode('[addtoany]'); ?></li>
        </ul>
      </div>
      <div class="right_part">
        <p><?php echo get_theme_mod('seemless_card_info'); ?></p>
        <ul>
          <li><img src="<?php echo get_theme_mod('seemless_first_card'); ?>"></li>
          <li><img src="<?php echo get_theme_mod('seemless_second_card'); ?>"></li>
          <li><img src="<?php echo get_theme_mod('seemless_third_card'); ?>"></li>
          <li><img src="<?php echo get_theme_mod('seemless_fourth_card'); ?>"></li>
        </ul>
      </div>
    </div>
  </section>
  <?php } ?>