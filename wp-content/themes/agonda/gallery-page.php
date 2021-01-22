<?php
/*
Template Name: Gallery Page
*/
get_header();
global $post;
?>
 <section class="bst-section--bg-adapted p-rel" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/gallery-bg.jpg);">
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
      <!-- start portfolio section -->
      <section class="container-fluid ">
         <!-- PORTFOLIO FILTER -->                    
         <div class="container portfolio m-t-40">
            <div class="row">
               <div class="col-md-7 text-center col-md-offset-3 port-1 p-rel">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cam-img.png" alt="Agonda goa huts">
                  <h3>Om Sai beach huts</h3>
                  <p>Photo Gallery</p>
                  <span>  A picture is worth a thousand words  </span>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 text-center m-t-40 m-b-30" >
                  <ul class="port-filter">
                     <li>
                        <a href="#" class="filter active" data-filter="*">All</a>
                     </li>
                     <li>
                        <a href="#" class="filter" data-filter=".huts">Huts</a>
                     </li>
                     <li>
                        <a href="#" class="filter" data-filter=".beach">Beach</a>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- ITEMS GRID -->
<ul class="port-grid masonry clearfix portfolio-lightbox" id="items-grid">

<li class="port-item mix design beach">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design beach">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-and-sun.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-and-sun.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design beach">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-hut-and-bar.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-hut-and-bar.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design beach">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-huts.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-huts.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design beach">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-side-view.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-side-view.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design beach">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-three.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-three.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design beach">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-two.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-two.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design beach">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-view.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-view.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design beach">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/hut-with-terrace.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/hut-with-terrace.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/agonda-beach-dining.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/agonda-beach-dining.jpg" alt="Agonda Goa Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/agonda-beach-huts.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/agonda-beach-huts.jpg" alt="Agonda Goa Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/agonda-huts.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/agonda-huts.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/bathroom.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/bathroom.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-garden-huts.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-garden-huts.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-huts-two.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-huts-two.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-view-bar.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-view-bar.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-view-dining.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-view-dining.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-view-hut-bathroom.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-view-hut-bathroom.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-view-hut-bathroom-two.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-view-hut-bathroom-two.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-view-restaurant.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-view-restaurant.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/bedding.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/bedding.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/candle-light-dinner.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/candle-light-dinner.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/entrance.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/entrance.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/family-room.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/family-room.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/garden.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/garden.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/garden-view.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/garden-view.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/garden-view-huts.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/garden-view-huts.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/garden-view-room.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/garden-view-room.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/garden-view-two.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/garden-view-two.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/huts.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/huts.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/hut-views.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/hut-views.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/hut-with-balcony.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/hut-with-balcony.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/hut-with-garden-view.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/hut-with-garden-view.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/om-sai-beach.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/om-sai-beach.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/room-entrance.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/room-entrance.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/room-inside.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/room-inside.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/room-inside-view.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/room-inside-view.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/terrace-huts.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/terrace-huts.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

<li class="port-item mix design huts">
   <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/view-from-hut.jpg" title="Agonda goa huts">
   <div class="hovereffect">
      <img class="port-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/view-from-hut.jpg" alt="Om Sai Beach">
      <div class="overlay"></div>
   </div>
   </a>
</li>

</ul>

         </div>
      </section>
      <!--start testimonial section -->
      <section class="container-fluid testimonial">
         <div class="container m-t-180">
             <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="row like">
                     <div class="col-md-6"> <a target="_blank" href="http://www.facebook.com/omsaibeachhuts"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb-like.png" class="img-responsive" alt=""></a></div>
                     <div class="col-md-6 m-t-sm-40"> <a target="_blank" href="https://www.tripadvisor.in/Hotel_Review-g816969-d1220372-Reviews-Om_Sai_Beach_Huts-Agonda_Goa.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificate.png" class="img-responsive" alt="Agonda goa huts"></a></div>
                  </div>
               </div>
            </div>
<?php get_footer(); ?>
<script>
   jQuery(document).ready(function($){
    $('.portfolio-lightbox').magnificPopup({
    delegate: 'a',
    type: 'image',
    image: {
      cursor: null,
      titleSrc: 'title'
    },
    gallery: {
      enabled: true,
      preload: [0,1], 
      navigateByImgClick: true
      }
  });
 });
</script>