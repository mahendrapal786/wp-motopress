<?php
/*
Template Name: Resorts in Goa
*/
get_header();
global $post;
?>
 <section class="bst-section--bg-adapted" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/tariff-bg.jpg);">
         <div class="banner-overlay"></div>
         <div class="head-banner head-banner3 head-banner10">
            <div class="container">
               <div class="row m-t-70">
                  <div class="col-md-10 col-md-offset-1" data-form-type="formoid">
                     <h3><?php echo $post->post_title; ?></h3>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- start vedeo section -->
      <section class="a-b-getting container-fluid m-t-40">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <!-- <h3>agonda</h3> -->
                  <p>When you think of resorts in Goa, you think of large, lavish hotels on the beaches with every kind of amenity you can imagine. They feature high end infinity pools, fine dining restaurants, world class spas, casinos and nightclubs outdoing each other at every step. While these beach resorts in Goa are favorite tourist spots for Indian and foreign tourists alike, not everyone like top end resorts. Some people like a resort like feeling that can be attained at a budget. </p>
                  <p>Most of our customers praise for our budget <a href="<?php echo get_permalink('104'); ?>">beach resort</a> to offer all the basic amenities while offering you a complete or a partial sea-view. Either way, you are never more than 20 meters away from the beach and the ocean. We are on the tranquil sands of <a href="agonda.html">Agonda</a>, offering you hard to beat ocean views and the best accommodation which is not a 3 star or a 5-star experience but comparable to the best secluded accommodation that a beach hut resort can offer. </p>
                  <p>Om Sai beach resort offers well-endowed rooms, flawless service and immaculate staff catering to all your needs. Our beach resort in South Goa is constantly ranked among the top resorts in Goa by reputed travel review sites including Tripadvisor. </p>
                  <p>When in Goa, picking the best abode could be a tricky business for any vacationer to Goa. While some go for luxury, some would like to travel at the cost of luxury. But <a href="agonda.html">Agonda</a> beach huts resort in Goa offer something to everybody. We are near to the Palolem beach too which offers some of the best nightclubs in the vicinity. </p>
               </div>
            </div>
         </div>
      </section>


       <section class="container-fluid testimonial">
         <div class="container m-t-40">
             <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="row like">
                     <div class="col-md-6"> <a target="_blank" href="http://www.facebook.com/omsaibeachhuts"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb-like.png" class="img-responsive" alt=""></a></div>
                     <div class="col-md-6 m-t-sm-40"> <a target="_blank" href="https://www.tripadvisor.in/Hotel_Review-g816969-d1220372-Reviews-Om_Sai_Beach_Huts-Agonda_Goa.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificate.png" class="img-responsive" alt=""></a></div>
                  </div>
               </div>
            </div>
<?php get_footer(); ?>