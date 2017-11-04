<?php 
/*
* Template Name: Podcasts Page Template
* This page template displays podcasts, gallery and testimonials
*/
	get_header(); 
?>

<section id="pure_pendant_inner">
	  <div class="container">
		<div class="section-heading">
         <span class="section-devider"> </span>
          <?php the_field('podcast_title');?> 
      </div>
      

      <div class="podcast_area">

      <?php

                   $banner_args = array( 'post_type' => 'harmony-podcasts', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'date' );
                $banner_query = new WP_Query( $banner_args ); 
                while ( $banner_query->have_posts() ) 

                { 

                  $banner_query->the_post(); 

                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                  ?>
        

         <div class="pod_box">
             <video width="100%" controls poster="<?php echo $image[0]; ?>">
                <source src="<?php the_field('mp4_video_file'); ?>" type="video/mp4">
                <source src="<?php the_field('mov_video_file'); ?>" type="video/webm">
             </video>
         </div>
         
         <?php
          }

          wp_reset_postdata();

                     ?>

      </div> 
	  </div>
  </section>

  <section id="inner_gallery">
    <div class="inside">
      <div class="container">
      <div class="section-heading">
         <span class="section-devider"> </span>
          <?php the_field('gallery_title');?>
      </div>
      
       <div class="podcast_area">
           <div class="coverimg">


                    <?php
$banner_args = array( 'post_type' => 'harmony-gallery', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date' );
        $banner_query = new WP_Query( $banner_args ); 
        while ( $banner_query->have_posts() ) { 
                  $banner_query->the_post(); 

                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                  ?>


              <div class="pod_box">
                <a href="<?php echo $image[0] ?>" target="_blank"><img src="<?php echo $image[0]; ?>" data-src="<?php echo $image[0] ?>" data-gallery="first-gallery" alt="#"/></a>
              </div>
              
              
                <?php
              } 


                wp_reset_postdata();


                    ?>
             
       </div>
       </div> 
      </div>
    </div>
  </section>

  <section id="inner_testimonial">
     <div class="container">
         <div class="section-heading">
             <span class="section-devider"> </span>
             <?php the_field('testimonial_title');?>
         </div>
         <div class="testimonial_section">


              <?php

                   $banner_args = array( 'post_type' => 'harmony-testimonials', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'date' );
                $banner_query = new WP_Query( $banner_args ); 
                while ( $banner_query->have_posts() ) 

                { 

                  $banner_query->the_post(); 

                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                  ?>

             <div class="test_box">
                 <div class="testimonial-client-img">
                   <img src="<?php echo $image[0] ?>">
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
  </section>

<?php 
	get_footer(); 
?>