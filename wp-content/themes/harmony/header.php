<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
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
            (561) 203-5407
          </p>
        </div>

        <div class="f_right search_social">
          <div class="search">
            <span class="search-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png" alt="#"></span>
            <input type="text" placeholder="Type Your Search Here">
          </div>

          <div class="social">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
                         <li>
                          <a href="#">HOME </a> 
                         </li>
                         <li>
                          <a href="#" class="active">PENDANT </a> 

                         </li>

                         <li>

                          <a href="#">HEALTH ISSUES   </a>  

                         </li>

                         <li>

                          <a href="#"> ABOUT ROBERT  </a> 

                         </li>



                     </ul>

                 </div>

                 <div class="f_right">

                  <ul>  

                         <li>

                          <a href="#">SERVICES </a> 

                         </li>

                         <li>

                          <a href="#">ONLINE SHOP</a> 

                         </li>

                         <li>

                          <a href="#">TESTIMONIAL</a> 

                         </li>

                         <li>

                          <a href="#"> CONTACT</a>  

                         </li>



                     </ul>

                 </div>

      </div>

    </nav>

    

        <div id="banner">           

            <div class="slider-container">

                <div class="slider" id="slider">

                    <div class="slide"> 

                        <img src="<?php echo get_template_directory_uri(); ?>/images/banner_pic1.jpg" alt=""> 

                        <div class="content">

                            <h4>Enter The New Paradigm of</h4>

                            <h1>OPTIMUM HEALTH AND WELLNESS</h1>

                            <a href="#" class="btn book_btn">BOOK ONLINE <i class="fa fa-long-arrow-down"></i></a>

                        </div>

                    </div>

                    <div class="slide"> 

                        <img src="<?php echo get_template_directory_uri(); ?>/images/banner_pic2.jpg" alt=""> 

                        <div class="content">

                            <h4>Enter The New Paradigm of</h4>

                            <h1>OPTIMUM HEALTH AND WELLNESS</h1>

                            <a href="#" class="btn book_btn">BOOK ONLINE <i class="fa fa-long-arrow-down"></i></a>

                            

                        </div>

                    </div>

                    

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
  </header>