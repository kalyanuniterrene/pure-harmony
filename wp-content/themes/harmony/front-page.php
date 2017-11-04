<?php
/**
 * The template for displaying pages
 *
 */

get_header(); ?>

    <section id="pure_pendant">
      <div class="container">

        <div class="section-heading">

             <span class="section-devider"> </span>

             <?php the_field('pure_harmony_section_title'); ?>

          </div>

            

            <div class="row clearfix">
              <?php if( have_rows('pure_harmony_features') ): ?>
              <div class="f_lef description">
                <?php while( have_rows('pure_harmony_features') ): the_row(); ?>
                <div class="row clearfix">

                  <div class="icon f_left">

                    <img src="<?php the_sub_field('pure_harmony_feature_icon'); ?>">

                  </div>

                  <div class="contnt f_right">

                    <h4><?php the_sub_field('pure_harmony_feature_title'); ?></h4>

                    <?php the_sub_field('pure_harmony_feature_content'); ?>

                  </div>

                </div>
                <?php endwhile; ?>
               
              </div>
              <?php endif; ?>

              <div class="f_right sell">
                <?php if( have_rows('pure_harmony_featured_images') ): ?>
                <div class="row">
                  <?php while( have_rows('pure_harmony_featured_images') ): the_row(); ?>
                  <div class="sell_box">

                    <img src="<?php the_sub_field('block_feature_image'); ?>">

                    <p><?php the_sub_field('block_feature_image_title'); ?></p>

                  </div>
                  <?php endwhile; ?>

                </div>
                <?php endif; ?>

                <div class="row">

                  <p class="price"><strong>$149</strong> plus shipping</p>

                </div>

                <div class="row">

                  <div class="select">

                    <select name="" >

                      <option value="">

                        Polished Finish $149.00 USD

                      </option>

                      <option value="">

                        Polished Finish $149.00 USD

                      </option>

                    </select>

                  </div>

                  <a href="#" class="buy_btn">BUY NOW</a>

                </div>



                <div class="row">

                  <p class="accept">We Accept:</p>

                  <ul class="visa">

                    <li><img src="<?php the_field('cards_accepted_image'); ?>"></li>

                  </ul>

                </div>

                <div class="row">

                  <p class="note"><?php the_field('purchase_notice'); ?></p>

                </div>

              </div>

            </div>



      </div>
  </section>

  <section id="positive_impact">

      <div class="container">

        <div class="impact_content">

          <div class="section-heading">

              <span class="section-devider"> </span>

              <?php the_field('positive_impact_title'); ?>

              </div>

              <div class="row list">
                <?php if( have_rows('positive_impacts') ): ?>
                <ul>
                  <?php while( have_rows('positive_impacts') ): the_row(); ?>

                  <li><?php the_sub_field('impacts'); ?></li>

                  <?php endwhile; ?>

                </ul>
                <?php endif; ?>

              </div>

        </div>

      </div>
  </section>
  
   <section id="how">

      <div class="container">

        <div class="section-heading">

            <span class="section-devider"> </span>

            <h2> <?php the_field('work_section_title'); ?></h2>

          </div>



          <div class="row content clearfix">

            <div class="left_content f_left">

              <?php the_field('work_section_content'); ?>

              <?php if( have_rows('work_section_videos') ): ?>
              <div class="video_container">
                <?php while( have_rows('work_section_videos') ): the_row(); ?>
                <video width="100%" controls poster="<?php the_sub_field('upload_video_poster'); ?>">
                <source src="<?php the_sub_field('upload_video_file'); ?>" type="video/mp4">
                <source src="<?php the_sub_field('upload_mov_video_file'); ?>" type="video/mov">
                </video>
                <?php endwhile; ?>
              </div>
              <?php endif; ?>
            </div>

            <div class="right_content f_right">

              
              <?php if( have_rows('how_it_works') ): ?>
                <?php while( have_rows('how_it_works') ): the_row(); ?>
                <div class="box">
                  <?php the_sub_field('how_featured_points'); ?>
                </div>
                <?php endwhile; ?>
              <?php endif; ?>

            </div> 

          </div>

      </div>
   </section>

   <!-- Abhik start -->

   <section id="activate" class="clearfix">
      <div class="activate-left activate-col">

      <div class="activate-overlay">

        <div class="section-heading">

               <span class="section-devider"> </span>

               <?php the_field('activate_section_content'); ?>

           </div> 

      </div>
      </div>
      <div class="activate-right activate-col">
          <div class="video_container">
            <?php if( have_rows('activate_videos') ): ?>
                <?php while( have_rows('activate_videos') ): the_row(); ?>
            <video width="100%" controls poster="<?php the_sub_field('active_video_poster'); ?>">
              <source src="<?php the_sub_field('activate_video_file'); ?>" type="video/mp4">
              <source src="<?php the_sub_field('activate_mov_video_file'); ?>" type="video/mov">
             <!--  <source src="mov_bbb.ogg" type="video/ogg"> -->
            </video>
            <?php endwhile; ?>
              <?php endif; ?>
          </div>
          <div class="pdf-link clear">
            <div class="pdf-text">
              <a href="<?php the_field('pdf_link'); ?>"><?php the_field('pdf_information'); ?></a>
            </div>
            <div class="pdf-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/pdf-icon.png" alt="#"></div>
          </div>
      </div>
   </section>

   <section id="robert">
      <div class="robert-overlay">
          <div class="robert-person-bg">
            <div class="container clearfix">
              <div class="robert-head">
                <div class="section-heading">
                    <span class="section-devider"> </span>
                    <h2><?php the_field('watch_robert_section_title'); ?></h2>
                </div>
              </div>
              <h4><?php the_field('watch_robert_section_sub_title'); ?></h4>
              <div class="robert-content-wrap clearfix">
                  <div class="robert-right-video">
                    <iframe width="100%" height="400" height="315" src="<?php the_field('watch_robert_youtube_link'); ?>" frameborder="0" allowfullscreen></iframe>

                    <a href="<?php the_field('podcast_button_link'); ?>" class="btn podcast"><?php the_field('podcast_button_text'); ?> <i class="fa fa-long-arrow-right"></i></a>
                  </div>
                  <div class="robert-left-content">
                    <div class="podcast-text">
                      <?php the_field('watch_robert_section_content'); ?>
                    </div>
                  </div>
                </div>

            </div>

          </div>

          

        </div>
   </section>

<!-- abhik end -->

<!-- ranmit start -->
 <section id="gallery">        

          <div class="content">

            <!-- popup -->

            <div class="galleryPop">

              <a href="javascript:void(0)" class="close_pop"><i class="fa fa-times"></i></a>

              <img src="<?php echo get_template_directory_uri(); ?>/images/gallery_bg.jpg" alt="">

            </div>



            <div class="container">

              <div class="section-heading">

                 <span class="section-devider"> </span> 

                 <?php the_field('conference_section_title'); ?>

              </div>



              <!-- main gallery content -->

              <div class="main_gallery_content clearfix">

                <div class="galleryLeft">

                  <div class="videoHolder">

                    <?php if( have_rows('conference_videos') ): ?>
                      <?php while( have_rows('conference_videos') ): the_row(); ?>

                    <video poster="<?php the_sub_field('conference_video_poster'); ?>" controls="">

                      <source src="<?php the_sub_field('conference_video'); ?>" type="video/mp4">

                        <source src="<?php the_sub_field('conference_mov_video'); ?>" type="video/mov">

                    </video>
                    <?php endwhile; ?>
                    <?php endif; ?>
                  </div>

                </div>

                <div class="galleryRight">

                  <div class="galleryImgHolder">

                    <ul class="list-inline">



                    <?php
$banner_args = array( 'post_type' => 'harmony-gallery', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date' );
        $banner_query = new WP_Query( $banner_args ); 
        while ( $banner_query->have_posts() ) { 
                  $banner_query->the_post(); 

                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                  ?>

                   <li>

                        <div class="gallery_item">

                          <img src="<?php echo $image[0] ?>" alt="" data-src="<?php echo $image[0] ?>">

                        </div>

                      </li>
                


                <?php
              } 


                wp_reset_postdata();


                    ?>

                      

                      <a href="<?php the_field('gallery_button_link'); ?>" class="btn podcast"><?php the_field('gallery_button_text'); ?> <i class="fa fa-long-arrow-right"></i></a>

                    </ul>

                  </div>

                </div>

              </div>

            </div>

          </div>              
 </section>
<!-- ranmit end -->

<!-- abhik new section start-->
   <section id="stressors">
     <div class="container">
       <div class="stressors-header">
          <div class="section-heading">
                <span class="section-devider"> </span>
                <?php the_field('trauma_section_title'); ?>
          </div>

       </div>

       <div class="stressors-text-wrap clearfix">

          <div class="stressors-right">

         <img src="<?php the_field('trauma_section_image'); ?>">

        </div>

      <div class="stressors-left">

        <?php the_field('trauma_section_content'); ?>

      </div>

       </div>



     </div>

   </section>
   <!-- abhik new section end-->



   <!-- aloke start -->

   <section id="suport" class="suport-row">

      <div class="suport-right">

       <img src="<?php the_field('super_hero_section_image'); ?>" />

      </div>

      <div class="container">

       <div class="section-heading">

         <span class="section-devider section-devider-yellow"> </span>

         <?php the_field('super_hero_section_title'); ?>

       </div>

       

       <div class="book-it-box">

        <div class="book-it-row">

         <div class="book-it-col book-it-col-left">

          <span> 01 </span>

          <h4> 30 Minute </h4>

          <h5> Consultation </h5>

         </div>

         <div class="book-it-col book-it-col-center">

           30 mins  |   $250

         </div>

         <div class="book-it-col book-it-col-right">

          <div class="book-it-btn">

           <a href="#"> BOOK IT </a>

          </div>

         </div>

        </div>

        <div class="book-it-row">

         <div class="book-it-col book-it-col-left">

          <span> 02 </span>

          <h4> 60 Minute </h4>

          <h5> Consultation </h5>

         </div>

         <div class="book-it-col book-it-col-center">

           60 mins  |   $400

         </div>

         <div class="book-it-col book-it-col-right">

          <div class="book-it-btn">

           <a href="#"> BOOK IT </a>

          </div>

         </div>

        </div>

       </div>

       

       <div class="BioPhoton-box BioPhoton-box-row clearfix">

        <div class="text-col f_left ">

         <?php the_field('super_hero_section_content'); ?>

        </div>

        

        <div class="video-col f_right">
          <?php if( have_rows('super_hero_video') ): ?>
            <?php while( have_rows('super_hero_video') ): the_row(); ?>
          <video controls poster="<?php the_sub_field(''); ?>" width="100%">
              <source src="<?php the_sub_field('super_hero_video'); ?>" type="video/mp4">
              <source src="<?php the_sub_field('super_hero_mov_video'); ?>" type="video/mov">
             <!--  <source src="mov_bbb.ogg" type="video/ogg"> -->
            </video>
            <?php endwhile; ?>
            <?php endif; ?>

        </div>

       </div>

      </div>

     </section>  
       
    <!-- BioPhoton Field Top -->

     <section id="BioPhoton-top" class="BioPhoton-top-row">

      <div class="container">

       <div class="section-heading">

         <span class="section-devider"> </span>

         <?php the_field('heart_rate_section_title'); ?>

       </div>

       

       <div class="BioPhoton-box clearfix">

        <div class="video-col f_left">
        <?php if( have_rows('heart_rate_video') ): ?>
          <?php while( have_rows('heart_rate_video') ): the_row(); ?>
         <video controls poster="<?php the_sub_field('heart_rate_video_poster'); ?>" width="100%">
          <source src="<?php the_sub_field('heart_rate_video_file'); ?>" type="video/mp4">
          <source src="<?php the_sub_field('heart_rate_mov_video_file'); ?>" type="video/mov">
          <!--  <source src="mov_bbb.ogg" type="video/ogg"> -->
          </video>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <div class="text-col f_right">

         <?php the_field('heart_rate_content'); ?>

        </div>

        

        

       </div>

      </div>

     </section>   

   <!-- BioPhoton Field Top end -->
   
  <!-- BioPhoton Field -->

     <section id="BioPhoton-top2" class="BioPhoton-Field-row BioPhoton-Field-top-row">

      <div class="container clearfix">

        <div class="BioPhoton-Field-left">

         <?php the_field('unhealthly_hrv_section_title'); ?>

          <?php if( have_rows('unhealthy_hrv_facts') ): ?>
          <ul>
            <?php while( have_rows('unhealthy_hrv_facts') ): the_row(); ?>

           <li><?php the_sub_field('unhealthy_facts'); ?></li>
           <?php endwhile; ?>

          </ul>
          <?php endif; ?>

          <span class="bioPhoton-field-bottom">  <?php the_field('unhealthy_hrv_in_brief'); ?>  </span>

        </div>

        

        <div class="BioPhoton-Field-center ">

          <img src="<?php the_field('comparison_featured_image'); ?>" />

        </div>

        

        <div class="BioPhoton-Field-right">

         <?php the_field('healthly_hrv_section_title'); ?>

          <?php if( have_rows('healthy_hrv_facts') ): ?>
          <ul>
            <?php while( have_rows('healthy_hrv_facts') ): the_row(); ?>
              <li><?php the_sub_field('healthy_facts'); ?></li>
              <?php endwhile; ?>

          </ul>
          <?php endif; ?>

          <span class="bioPhoton-field-bottom"><?php the_field('healthy_biophoton_in_brief'); ?></span>

        </div>

      </div>

     </section>   

   <!-- BioPhoton Field end -->
   
   <!-- BioPhoton Field Top -->

     <section id="BioPhoton" class="BioPhoton-row">

      <div class="container">

       <div class="section-heading">

         <span class="section-devider"> </span>

         <h1> BioPhoton Field </h1>

         <h2 class="yellow-heading"> Your Light Metabolism </h2>

       </div>

       

       <div class="BioPhoton-box clearfix">

        <div class="text-col f_left ">

         <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod, velit sit amet varius eleifend, est neque fermentum lectus, at condimentum mauris tortor non nibh. Maecenas bibendum aliquam accumsan. Pellentesque non orci eget ante vehicula laoreet non et est. Morbi posuere varius commodo. Phasellus ac congue orci, eget consectetur nibh. </p>

         <p> Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi porttitor mauris et risus euismod, varius vehicula sem tincidunt. Quisque eu scelerisque magna. Praesent dui libero, euismod nec lorem et, blandit vestibulum ante. Aenean nec ultricies dui. Mauris id sem facilisis, molestie nulla quis, tincidunt felis. Proin venenatis eros ut dolor rutrum, ultricies porta mauris tincidunt. Aliquam eu pulvinar velit. Nulla ultricies lacus sed lacinia egestas. </p>

        </div>

        

        <div class="video-col f_right">

          <video controls poster="<?php echo get_template_directory_uri(); ?>/images/biophoton-poster.jpg" width="100%">

              <source src="<?php echo get_template_directory_uri(); ?>/images/video1.mp4" type="video/mp4">

                <source src="<?php echo get_template_directory_uri(); ?>/images/video1.mov" type="video/mov">

             <!--  <source src="mov_bbb.ogg" type="video/ogg"> -->

            </video>

        </div>

       </div>

      </div>

     </section>   

   <!-- BioPhoton Field Top end -->

   <!-- BioPhoton Field -->

     <section id="BioPhoton2" class="BioPhoton-Field-row">

      <div class="container clearfix">

        <div class="BioPhoton-Field-left">

         <h4> UNHEALTHY BIOPHOTON FIELD  </h4>

         <h5> Stressors / Trauma </h5>

         <p> Incoherent Light Emission </p>

          <ul>

           <li>Sympathetic Response Fight or Flight </li>

           <li>Increased Inflammation </li>

           <li>Negatively Impacting Performance</li>

           <li>Disrupting 100,000 Biochemical Reactions in the Cell every Second</li>

           <li>Distorting Cell to Cell Communication</li>

           <li>Chaotic BioPhoton Field Regulation</li>

           <li>Disruptive Sleep </li>

           <li>Increased Cellular Aging </li>

           <li>Mitochondrial Damage </li>

           <li>Telomeres Decay </li>

          </ul>

          <span class="bioPhoton-field-bottom">  Sick HRV = Sick body   </span>

        </div>

        

        <div class="BioPhoton-Field-center ">

          <img src="<?php echo get_template_directory_uri(); ?>/images/biophoton-field-img.png" />

        </div>

        

        <div class="BioPhoton-Field-right">

         <h4> HEALTHY BIOPHOTON FIELD  </h4>

         <h5> No Stressors / Trauma </h5>

         <p> Coherent Light Emission </p>

          <ul>

           <li>Parasympathetic Response

Rest & Regeneration </li>

           <li>Decreased Inflammation</li>

           <li>Positively Impacting

Performance</li>

           <li>Supporting 100,000 

BiochemicalReactions in 

the Cell every Second</li>

           <li>Reinforcing Cell to Cell

Communication </li>

           <li>Precise BioPhoton Field

Regulation</li>

           <li>Restful Revitalizing Sleep</li>

           <li>Decreased Cellular Aging</li>

           <li>Mitochondrial Energy</li>

           <li>Telomeres Restoration</li>

          </ul>

          <span class="bioPhoton-field-bottom">  Healthy HRV = Healthy body </span>

        </div>

      </div>

     </section>   

   <!-- BioPhoton Field end -->


   <!-- Real Life Result -->

     <section id="real-life-result" class="real-life-result-row">

      <div class="container">

       <div class="section-heading">

         <span class="section-devider"> </span>

         <h2> REAL LIFE RESULT </h2>

       </div>

       

       <div class="real-life-row clearfix">

       

        <div class="real-life-col">

         <div class="real-life-img">

          <img src="<?php echo get_template_directory_uri(); ?>/images/real-life-1.jpg" />

         </div>

         <div class="real-life-text">

          <h4> <a href="javascript:void(0)">  Kate Criswell - Runner From Colorado </a> </h4>

          <p> The call from Robert couldn't have come at a better time!  Any runner will tell you that the only way to get over PF is to stop running.  I did just the opposite and have enjoyed my 50 plus mile weeks again!  So thankful for Robert, the pendant, and moomyio!!! </p>

         </div>

        </div>

       <!-- **************** --> 

        <div class="real-life-col">

         <div class="real-life-img">

          <img src="<?php echo get_template_directory_uri(); ?>/images/real-life-2.jpg" />

         </div>

         <div class="real-life-text">

          <h4> <a href="javascript:void(0)"> Michael Hochstetler - an international 5* licensed Grand Prix rider </a> </h4>

          <p> The call from Robert couldn't have come at a better time!  Any runner will tell you that the only way to get over PF is to stop running.  I did just the opposite and have enjoyed my 50 plus mile weeks again!  So thankful for Robert, the pendant, and moomyio!!! </p>

         </div>

        </div>

       <!-- ********************* -->  

        <div class="real-life-col">

         <div class="real-life-img">

          <img src="<?php echo get_template_directory_uri(); ?>/images/real-life-3.jpg" />

         </div>

         <div class="real-life-text">

          <h4> <a href="javascript:void(0)"> David Devine - Water Skier From Texas </a> </h4>

          <p> The call from Robert couldn't have come at a better time!  Any runner will tell you that the only way to get over PF is to stop running.  I did just the opposite and have enjoyed my 50 plus mile weeks again!  So thankful for Robert, the pendant, and moomyio!!! </p>

         </div>

        </div>

        

       </div>

      </div>

     </section> 

   <!-- Real Life Result End -->


   <!-- Personal Consultations -->

    <section id="personal-consultations" class="personal-consultations-row">

      <div class="container clearfix">

        <div class="personal-consultations-left">

         <h4> Personal Consultations </h4>

         <h3> SCHEDULE YOUR CONSULTATION TODAY! </h3>

        </div>

        

        <div class="personal-consultations-right">

         <div class="personal-consultations-call">

          <span> <i class="fa fa-phone" aria-hidden="true"></i> Call Now: </span> <a href="tel:(561) 203-5407"> (561) 203-5407 </a>

         </div>

        </div>

      </div>

    </section>   

   <!-- Personal Consultations end -->

   <!-- vibrational-medicine --> 

    <section id="vibrational-medicine" class="vibrational-medicine-row">

      <div class="container-full clearfix">

       <div class="vibrational-medicine-left" style="background: url(<?php echo get_template_directory_uri(); ?>/images/vibrational-medicine-bg.jpg) no-repeat; background-size: cover;">

        <div class="overlay-box"> </div>

         <span class="section-devider"> </span>

         <h3> UNDERSTANDING CORE VIBRATIONAL BLUEPRINT </h3>

         <p> According to quantum physics, everything in the universe, living and non-living is in a state of vibrational resonance.  What was once thought to be solid matter is now discovered to be energy that consists of wavelengths, vibrations and frequencies. </p>

         <p> All matter is made up of atoms, and atoms because of their unique makeup are always moving and vibrating. As electrons within these atoms move and spin around the nucleus, these electrons give off a precise vibrations and frequencies like mini radio transmitters.  How precise, so precise that no two substances in the universe have the exact same vibrational blueprint or frequency.  </p>

         <div class="btn-read-more">

          <a href="#"> Read More + </a>

         </div>

       </div>

       <div class="vibrational-medicine-right">

         <span class="section-devider"> </span>

         <h3> Vibrational Medicine </h3>

         <p> For many people the concept of Vibrational Medicine which is also referred to as energy medicine, is hard to understand at first, but we actually live in world of vibrations and frequencies and these vibrations and frequencies are a part of everyday life.   </p>

         <p> When you hear a sound, your eardrum vibrates and you are actually hearing one form of vibrating energy.  When you see a color which is a wavelength of light, you are actually seeing another form of vibrating energy.  When you smell something, you are actually sensing another form of vibrating energy.  There’s no escaping it, everything in the universe is made up of and consists of vibrations and frequencies.    </p>

         <div class="btn-read-more">

          <a href="#"> Read More + </a>

       </div>

      </div> 

     </section>

    <!-- vibrational-medicine --> 

    <!-- testimonial -->

     <section id="testimonial" class="testimonial-row">

      <div class="container-full clearfix">
        <div class="testimonial-right">

        <div class="overlay-box"> </div>

         <span class="invited"> “ </span>

         <span class="section-devider"> </span>

         <h3> TESTIMONIALS </h3>

         <h2> WHAT THEY SAY </h2>
         <a href="#" class="btn podcast">VIEW ALL PODCAST <i class="fa fa-long-arrow-right"></i></a>

       </div>

       <div class="testimonial-left">

        <div class="owl-carousel">

        <?php

                   $banner_args = array( 'post_type' => 'harmony-testimonials', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'date' );
                $banner_query = new WP_Query( $banner_args ); 
                while ( $banner_query->have_posts() ) 

                { 

                  $banner_query->the_post(); 

                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                  ?>

         <div class="item">

          <div class="testimonial-client-img">

           <img src="<?php echo $image[0] ; ?>">

          </div>

          <div class="testimonial-text">

           <?php the_content();?>

           <div class="client-name">

            <h5>  <?php the_title();?> </h5>

           </div>

          </div>

         </div>

         <?php
          }

          wp_reset_postdata();

                     ?>

         

        </div>

       </div>

       

      </div> 

     </section>

    <!-- testimonial end -->

     <!-- Get in touch -->

     <section id="get-in-touch" class="get-in-touch-row">

      <div class="container">

       <div class="section-heading">

         <span class="section-devider"> </span>

         <h2> GET IN TOUCH WITH US </h2>

       </div>

       <div class="get-in-touch-col">

         <form>

          <div class="form-fild">

           <input type="text" placeholder="Your Name">

          </div>

          <div class="form-fild">

           <input type="text" placeholder="Email Address">

          </div> 

          <div class="form-fild">

           <input type="text" placeholder="Subject">

          </div> 

          <div class="form-textarea">

           <textarea class="form-control" rows="3" placeholder="Message"></textarea>

          </div> 

          <div class="form-submit">

           <button type="submit"> <span> <i class="fa fa-paper-plane" aria-hidden="true"></i> </span> send </button>

          </div>

        </form> 

       </div>

      </div>

     </section>

    <!-- Get in touch end -->

<?php get_footer(); ?>