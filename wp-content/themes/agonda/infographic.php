<?php
/*
Template Name: Infographic
*/
get_header();
global $post;
?>
 <section class="bst-section--bg-adapted" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/agonda-beach-bg.jpg);">
         <div class="banner-overlay"></div>
         <div class="head-banner head-banner3 head-banner10">
            <div class="container">
               <div class="row m-t-70">
                  <div class="col-md-10 col-md-offset-1" data-form-type="formoid">
                     <h3>Om Sai beach huts</h3>
                     <p>Live the Experience</p>
                  </div>
               </div>
                
            </div>
         </div>
      </section>

      <section class="container m-t-60 info-graphic-1">
        <article class="clearfix">
          <aside class="col-md-12">
          <h3>Go Goa For</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Agonda InfoGraphics.jpg">
          </aside>
        </article>
      </section>
      <section class="container-fluid testimonial">
         <div class="container">
           
            <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="row like">
                     <div class="col-md-6"> <a target="_blank" href="http://www.facebook.com/omsaibeachhuts"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb-like.png" class="img-responsive" alt=""></a></div>
                     <div class="col-md-6 m-t-sm-40"> <a target="_blank" href="https://www.tripadvisor.in/Hotel_Review-g816969-d1220372-Reviews-Om_Sai_Beach_Huts-Agonda_Goa.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificate.png" class="img-responsive" alt=""></a></div>
                  </div>
               </div>
            </div>
<?php get_footer(); ?>