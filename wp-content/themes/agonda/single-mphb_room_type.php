<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package agonda
 */
get_header();
global $post;
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 
 $backgroundImage = (has_post_thumbnail( $post->ID ) ) ? 'style="background-image: url('.wp_get_attachment_url( get_post_thumbnail_id($post->ID) ).'"' : '';
 ?>
<section class="bst-section--bg-adapted p-rel" <?php echo $backgroundImage; ?>>
        <div class="banner-overlay"></div>
         <div class="head-banner head-banner3 head-banner10">
            <div class="container">
               <div class="row m-t-70">
                  <div class="col-md-10 col-md-offset-1" data-form-type="formoid">
                     <h3><?php echo get_the_title($post->ID); ?></h3>
                  </div>
               </div>
                
            </div>
         </div>
</section>



<div class="single_room_container">

<section class="room-detail-slider">
  <div class="container">
    <div class="slider_cnt">
<?php
   $room_item='';
   $room_thum_item='';
   $gallery_ids=get_post_meta( $post->ID, 'mphb_gallery', true );
   $gallery_array_ids=explode(",",$gallery_ids);

  foreach($gallery_array_ids as $k => $val )
   {
     $gallery_img=wp_get_attachment_image_src( $val, 'full' );
     
     $room_item .= '<div class="room-slider-item">';
     $room_item .= '<img src="'.$gallery_img[0].'">';
     $room_item .= '</div>';

     $room_thum_item .= '<div class="room-slider-thumb-item">';
     $room_thum_item .= '<img src="'.$gallery_img[0].'">';
     $room_thum_item .= '</div>';
   }
?>
   <div class="room-slider">
      <?php echo $room_item; ?>
    </div>

<div class="thum-slider-cnt">
    <div class="room-slider-thumb">
      <?php echo $room_thum_item; ?>
    </div>
    <div class="arrow_cnt">
      <button class="room-slider-thumb_next_arrow slick-next">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-next.png"/>
      </button>
      <button class="room-slider-thumb_prev_arrow slick-prev">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-prev.png"/>
      </button>
    </div>
  </div>
  </div>  
 </div>
</section>
<section class="content-section">
  <div class="container-946">
    <?php the_content(); ?>
  </div>
</section>



<?php endwhile; endif; ?>
</div>
<section class="similer-section">
  <div class="container-946">
  <h2 class="similer-title">Similar Rooms</h2>
<div class="similar_room row">

	<?php      
     $args= array(
		'post_type' => 'mphb_room_type',
		'order' => 'ASC',
		'orderby' => 'post_date',
		'post_status' => 'publish',
		'post__not_in' => array (get_the_ID()),
		'posts_per_page' => -1  
		); 
       $the_query = new WP_Query( $args );
       if ( $the_query->have_posts() ) : 
     
     while ( $the_query->have_posts() ) : $the_query->the_post();   
     echo '<div class="similar_room_card col-sm-6">';  
     echo  '<figure class="img-panel">';
     echo '<div class="similar_room_price">';
     echo '<div class="price">$800</div>';
     echo '<div class="rooms-per-night">for 2 nights</div>';
     echo '</div>';
     echo  '<a class="block" href="'.get_the_permalink( $post->ID ).'">';
    if (has_post_thumbnail( $post->ID )) :
           $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );       
    echo  '<img src="'.$image[0].'" class="main-img img-responsive">';
    endif;
    echo  '</a>';
    echo '</figure>';
    echo '<div class="similar_room_card_footer">';
      echo '<div class="title" href="'.get_the_permalink( $post->ID ).'">'.get_the_title($post->ID).'</div>';
      echo '<div class="beds-type">Triple Bed - Family Hut</div>'; 
    echo '</div>';
    echo '</div>';

   endwhile;
   wp_reset_postdata();
 
   endif;
 
 ?>
 </div>
</div>
</section>
<section class="container-fluid testimonial ">
<div class="container">
  <div class="row m-t-20 portfolio">
<div class="col-md-7 text-center col-md-offset-3 testo p-rel">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/testo.png">
<h3>Om Sai beach huts</h3>
<p>Customer Reviews</p>
</div>
</div>
<div class="clearfix row">
<div class="col-md-8 col-md-offset-2 client-quote text-center">
<h3>Testimonials</h3>

<div id="TA_selfserveprop436" class="TA_selfserveprop"><ul id="m6HEBWjymn0v" class="TA_links FIRhbdGsZj4"><li id="SvRrV8Jicf" class="jhv08nim5iP"><a target="_blank" href="https://www.tripadvisor.co.uk/"><img src="https://www.tripadvisor.co.uk/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a></li></ul></div>

</div>
</div>

<?php
get_footer();
?>
</section>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script type="text/javascript">
   $('.room-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.room-slider-thumb'
});
$('.room-slider-thumb').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.room-slider',
  dots: false,
  nextArrow:'.room-slider-thumb_next_arrow',
  prevArrow:'.room-slider-thumb_prev_arrow',
  focusOnSelect: true,
  arrow:true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
  
  ]
});
</script>