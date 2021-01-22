<?php
/*
Template Name: Home Page
*/
get_header();
global $post;
?>
<section class="head-banner head-banner3 head-banner10 bst-section--bg-adapted home-bg reduce-spac">
  <div class="head-banner">
    <div class="container">
      <div class="row banner-flex">
        <div class="col-md-8" data-form-type="formoid">
          <div class="banner-caption">
            <h3 class="banner-title">Om Sai beach huts</h3>
            <p class="banner-lead">Live the Experience</p>
            <div class="search-form">
              <div class="search-container">
                <?php echo do_shortcode( '[mphb_availability_search]' ); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <ul class="list-located">
            <li>
              <span class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/beach.png" class="img-responsive"
                  alt="Agonda Beach">
              </span>
              <span class="text">Located on the quiet and picturesque Agonda Beach in South Goa.</span></li>
            <li>
              <span class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plant.png" class="img-responsive"
                  alt="coconut plantation">
              </span>
              <span class="text">Set amidst a lush green coconut plantation.</span></li>
            <li>
              <span class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/beach-shade.png"
                  class="img-responsive" alt="beach shaded">
              </span>
              <span class="text">Every beach hut has a shaded verandah.</span></li>
            <li>
              <span class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wooden-huts.png"
                  class="img-responsive" alt="Wooden huts">
              </span>
              <span class="text">Wooden huts with natural interiors (eco-friendly accommodation).</span></li>
            <li>
              <span class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sun-beds.png" class="img-responsive"
                  alt="Sun-beds">
              </span>
              <span class="text">Sun-beds for relaxation provided to all our guests.</span></li>
            <li>
              <span class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/beeze-restaurant.png"
                  class="img-responsive" alt="Sea-breeze restaurant">
              </span>
              <span class="text">Sea-breeze restaurant</span></li>
          </ul>
        </div>
      </div>
      <div class="banner-tagline">Always among top 5 <a href="https://www.tripadvisor.in/Hotels-g297604-Goa-Hotels.html" target="_blank">Specialty Lodging</a> in Goa</div>
      
    </div>
  </div>
</section>
<!-- start welcome section -->
<section class="welcome container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-sm-7">
        <h3>Welcome to Om Sai Beach Huts</h3>
        <p>Om Sai beach huts welcomes you to the land of sun, sand, and relaxation: Goa. Our beach cottages are situated
          near to the quaint northern end of the beach right on the sand under a shady coconut grove. Step outside of
          the comfort of your beach hut and you are on the Agonda beach. </p>
        <p>We have 16 huts of which 7 huts are full sea view huts. These large beach view huts have triple occupancy and
          offer comfortable beds, mirrors, huge bathroom with running hot water, sit-our verandah with chairs and table,
          and a view that is second to none. Our garden view huts offer a relaxing stay too and are right behind the sea
          facing huts with great facilities.</p>
        <p>
          You can relax in your room, outside of your room in the verandah, and order food from our Sea Breeze
          restaurant at no extra room delivery charges. You can also relax on our patios or at the restau8rant itself.
          We offer comfortable sitting and great food with drinks of your choice to make your stay with us comfortable
          and enjoyable.
        </p>
        <a href="<?php echo get_permalink('116'); ?>" class="btn show-more m-t-40">
          Book a Stay
        </a>
      </div>
      <div class="col-md-5 col-sm-5">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/beach-img.jpg" class="img-responsive"
          alt="Agonda goa huts"><br>
        <a href="<?php echo get_permalink('118'); ?>" target="_blank" class="text-center infographic">
          <h3>Explore Goa</h3>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- end welcome section -->

<section class="best-beach container-fluid">
  <div class="clearfix">
    <div class="col-md-8 col-md-offset-2 beach-right col-sm-8 col-lg-4 col-lg-offset-6">
      <h3>BEST BEACH COTTAGES IN GOA</h3>
      <p>Our guests love staying with us and their appreciation is visible in the great reviews that Om Sai has on hotel
        review website Tripadvisor. We also regularly get repeat bookings for Om Sai every year. This encourages us to
        keep improving the design of our cottages and the facilities that we provide to our guests and their
        families/friends.</p>
      <p>Come and enjoy a blissful beach experience with us. It is hard to beat watching the sun set over the Arabian
        Sea whilst sipping a gorgeous cocktail! Book with us directly and before others do, so that we can honor your
        requests quickly.</p>
    </div>
    <div class="col-md-2 tree col-sm-4">

    </div>
  </div>
</section>
<!-- end best beach section -->
<!-- start portfolio section -->
<section class="container-fluid gallery-home">
  <!-- PORTFOLIO FILTER -->
  <div class="container portfolio m-t-40">
    <div class="row">
      <div class="col-md-7 text-center col-md-offset-3 port-1 p-rel">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cam-img.png" alt="">
        <h3> Om Sai beach huts</h3>
        <p>Photo Gallery</p>
        <span> A picture is worth a thousand words </span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center m-t-40 m-b-30">
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
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design beach">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-and-sun.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-and-sun.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design beach">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-hut-and-bar.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-hut-and-bar.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design beach">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-huts.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-huts.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design beach">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-side-view.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-side-view.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design beach">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-three.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-three.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design beach">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-two.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-two.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design beach">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-view.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-view.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design beach">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/hut-with-terrace.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/hut-with-terrace.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design huts">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/agonda-beach-dining.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/agonda-beach-dining.jpg"
              alt="Agonda Goa Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design huts">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/agonda-beach-huts.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/agonda-beach-huts.jpg"
              alt="Agonda Goa Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design huts">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/agonda-huts.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/agonda-huts.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design huts">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/bathroom.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/bathroom.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design huts">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-garden-huts.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-garden-huts.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design huts">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-huts-two.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-huts-two.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design huts">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-view-bar.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-view-bar.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design huts">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-view-dining.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-view-dining.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design huts">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-view-hut-bathroom.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-view-hut-bathroom.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
      <li class="port-item mix design huts">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/beach-view-hut-bathroom-two.jpg"
          title="Agonda goa huts">
          <div class="hovereffect">
            <img class="port-main-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/small/beach-view-hut-bathroom-two.jpg"
              alt="Om Sai Beach">
            <div class="overlay"></div>
          </div>
        </a>
      </li>
    </ul>

    <div class="text-center">
      <a href="<?php echo get_permalink('112'); ?>" class="btn show-more m-t-40 text-center">
        Show More
      </a>
    </div>
    <div class="row">
      <div class="col-md-12 m-t-70">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/three.png" class="img-responsive m-auto">
      </div>
    </div>
    <div class="row m-t-20">
      <div class="col-md-7 text-center col-md-offset-3 testo p-rel">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testo.png">
        <h3>Om Sai beach huts</h3>
        <p>Customer Reviews</p>
      </div>
    </div>
  </div>
</section>
<!--start testimonial section -->
<section class="container-fluid testimonial">
  <div class="container">
    <div class="clearfix">
      <div class="col-md-8 col-md-offset-2 client-quote text-center">
        <h3>Testimonials</h3>

        <div id="TA_selfserveprop436" class="TA_selfserveprop">
          <ul id="m6HEBWjymn0v" class="TA_links FIRhbdGsZj4">
            <li id="SvRrV8Jicf" class="jhv08nim5iP"><a target="_blank" href="https://www.tripadvisor.co.uk/"><img
                  src="https://www.tripadvisor.co.uk/img/cdsi/img2/branding/150_logo-11900-2.png"
                  alt="TripAdvisor" /></a></li>
          </ul>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="row like">
          <div class="col-md-6"> <a target="_blank" href="http://www.facebook.com/omsaibeachhuts"><img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/fb-like.png" class="img-responsive"
                alt=""></a></div>
          <div class="col-md-6 m-t-sm-40"> <a target="_blank"
              href="https://www.tripadvisor.in/Hotel_Review-g816969-d1220372-Reviews-Om_Sai_Beach_Huts-Agonda_Goa.html"><img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/certificate.png" class="img-responsive"
                alt=""></a></div>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>
    <script>
      jQuery(document).ready(function ($) {
        $('.portfolio-lightbox').magnificPopup({
          delegate: 'a',
          type: 'image',
          image: {
            cursor: null,
            titleSrc: 'title'
          },
          gallery: {
            enabled: true,
            preload: [0, 1],
            navigateByImgClick: true
          }
        });
      });
    </script>