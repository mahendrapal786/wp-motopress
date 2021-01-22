<?php
/*
Template Name: Contact Us
*/
get_header();
global $post;
?>
 <section class="bst-section--bg-adapted">
      <div class=""></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7706.037387430518!2d73.98076751736055!3d15.047082269093183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbe4fa6aaaaaaab%3A0x73fefd509014c24c!2sOm+Sai+Beach+Huts!5e0!3m2!1sen!2s!4v1479287094090" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
      <div class="head-banner head-banner3 ">
            <div class="container">
            </div>
         </div>
      </section>
      <section class="container-fluid testimonial">
         <div class="container contact-form">
            <div class="row">
               <div class="col-md-12 form-section p-a-0">
              
                  <div class="col-md-6 input-section col-sm-6">
                   <div class="form-group msg1">
                     
                  </div>
                   <?php echo do_shortcode('[contact-form-7 id="92" title="Contact Us"]'); ?>
                  </div>

                  <div class="col-md-5 col-md-offset-1 contact-info col-sm-6">
                     <h4>Contact Us to Book a Stay</h4>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Contact-hr.jpg" alt=""><br>
                     <figure>After you get a reply from us on email, Send us 50% advance amount through Western Union Money Transfer/PayPal/Bank Transfer.<br> 
                     Please contact us at</figure>
                     <span>Address</span>
                     <p>Om Sai Beach Huts, Agonda Village,
                        Canacona Goa. INDIA - 403702
                     </p>
                     <span>Phone</span>
                     <a href="tel:91 99 234 82112"><p>+91 99 234 82112</p></a>
                     <span>E-mail</span>
                     <a href="mailto:agondahuts@yahoo.com"><p>agondahuts@yahoo.com</p></a>
                     <div class="fb-btn">
                        <a target="_blank" href="http://www.facebook.com/omsaibeachhuts">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-fb.png" class="img-responsive" alt=""></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
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