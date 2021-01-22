<?php
/*
Template Name: Price Page
*/
get_header();
global $post;
?>
<?php 
$table_th='';
$table_tr='';
$accommodation_book='';

$args= array(
'post_type' => 'mphb_room_type',
'order' => 'ASC',
'orderby' => 'post_date',
'post_status' => 'publish',
'posts_per_page' => -1  
);
$loop = new WP_Query( $args );
$row = 1; $parent = array();
$gallary_num=1;
$gallary='';
$rate_post_id='';

$gallery_arr = array();

while ( $loop->have_posts() ) : $loop->the_post();

   $accommodation_id=$post->ID;

   $accommodation_book .= '<td><a href="'.get_permalink($accommodation_id).'" class="btn show-more m-t-40">Book</a></td>';

   $gallery_ids=get_post_meta( $accommodation_id, 'mphb_gallery', true );
   $gallery_array_ids=explode(",",$gallery_ids);

   foreach($gallery_array_ids as $k => $val )
   {
     $gallery_img=wp_get_attachment_image_src( $val, 'full' );
     $gallery_arr[$accommodation_id][$val] = $gallery_img[0];
   }

   $accommodation_name=get_the_title($accommodation_id);

    $rate_args = array (
    'post_type' => 'mphb_rate',
     'meta_query' => array(
        array(
            'key'    => 'mphb_room_type_id',
            'value'  => $accommodation_id,
        ),
     ),
    );

    $rate_query = new WP_Query( $rate_args );
    if ( $rate_query->have_posts() ) {
        while ( $rate_query->have_posts() ) {
            
            $rate_query->the_post();
            $rate_post_id=$post->ID;
            
        }
    }

    $table_th .= '<th>';
    $table_th .= '<h5>'.$accommodation_name.'</h5>';
    $table_th .= '<span>TRIPLE BED - FAMILY HUT</span>';
    $table_th .= '<div class="imgcon">';

    $term_list = get_the_terms($accommodation_id, 'mphb_room_type_facility');
    foreach($term_list as $term_single) {
      $table_th .= '<img src="'.get_template_directory_uri(). '/assets/images/price-icons/'.$term_single->slug.'.png" alt="'.$term_single->slug.'" title="'.$term_single->name.'">';
    }
 
    $table_th .= '<a href="javascript:void(0);" data-toggle="popover" data-content="<table><tr><th>Rate Applied to</th><td>2 Guests</td></tr><tr><th>Room Capacity</th><td>3 Guests</td></tr><tr><th>Extra Bad</th><td>Rs. 800/night</td></tr></table>" data-placement="top" data-trigger="hover" data-html="true"><img src="'.get_template_directory_uri(). '/assets/images/price-icons/2.png" alt="2 BED" title="2 BED"></a>';
    $table_th .= '</div>';

  $table_th .= '<div class="gallery-container">';
  $gc=1;
  foreach ($gallery_arr[$accommodation_id] as $gk => $gv) 
  {
    if($gc==1) {
      $table_th .= '<a href="'.$gv.'" data-fancybox="view_gallery_'.$accommodation_id.'">View Gallery</a>';
    } else {
      $table_th .= '<a style="display: none;" href="'.$gv.'" data-fancybox="view_gallery_'.$accommodation_id.'">'.$accommodation_id.'</a>';
  }
    $gc++;
  }
  $table_th .= '</div>';
  
  $table_th .= '</th>';
  
  $season_prices_datas=get_post_meta( $rate_post_id, 'mphb_season_prices', true );

    foreach($season_prices_datas as $season_prices_data)
    {
      $season = $season_prices_data['season'];
      $parent[$season][] = $season_prices_data['price']['prices'][0];
    }

$gallary_num++;  
endwhile;
wp_reset_postdata(); 

foreach($parent as $key=>$value)
{

  $table_tr .= '<tr>';
  $table_tr .= '<td>';
  $table_tr .= '<h5 class="date-range">'.get_the_title($key).'</h5>';
  $table_tr .= '<a href="javascript:void(0);" data-toggle="popover" data-content="Accommodation Only" data-placement="top" data-trigger="hover" data-html="true"><img src="'.get_template_directory_uri(). '/assets/images/info.png"></a>';
  $table_tr .= '</td>';
  foreach($value as $v) {
    $table_tr .= '<td class="text-center"><span>RS. '.$v.' /-</span></td>';
  }
  $table_tr .= '</tr>';
}

  $table_tr .= '<tr>';
  $table_tr .= '<td></td>';
  $table_tr .= $accommodation_book;
  $table_tr .= '</tr>';
?>


 <div class="container m-t-90">
         <div class="clearfix bg-text">
            <div class="col-md-12 text-center">
              <div class="tarrif-bg">
                 <h3>Beach Huts - Pricing</h3>
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/updated-for-2017.png" class="img-responsive pull-right hidden-xs">
              </div>
            </div>
         </div>
         <div class="clearfix tariff-table">
            <div class="table-responsive">
               <table class="table table-condensed">
                  <thead>
                     <tr>
                        <th>
                          <h5>DATES</h5>
                          <span>PRICING VARIES BY SEASON</span>
                        </th>
                        <?php echo $table_th; ?>
                     </tr>
                  </thead>

                  <tbody>
                     <?php echo $table_tr; ?>
                  </tbody>
               </table>
            </div>
         </div>

         <div class="clearfix note">
         <div class="col-md-12">
            <h4 style="margin-bottom: 15px;"><strong>NOTE:</strong></h4>
            <ul>
              <li><p>For extra bed in rooms additional charges shall be Rs 800 per night.</p></li>
              <li><p>We have two types of beach view huts on the ground, and on an elevated wooden platform. Guests are offered the vacant hut in case we do not have a choice.</p></li>
          </ul>
         </div>
         </div>
      </div>
     
      <div class="container booking-policy">
         <div class="clearfix">
            <div class="col-md-4">
               <h3 class="text-center">Boking Policy</h3>
               <div class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/policy-line.jpg" alt="Agonda goa huts"></div>
               <ul>
                  <li>Check in 12:00 (PM), Check out 11:00 (AM)</li>
                  <!-- <p>Discount available on long stay ( 7 + days)</p> -->
                  <li>Minimum 3 days booking</li>
                  <li>AC Taxi pick-up from Airport or Train station available on request and has to be paid for.</li>
                  <!-- <p>Minimum 7 days booking during the period of 21st December - 10th January</p> -->
               </ul>
            </div>
            <div class="col-md-4">
               <h3 class="text-center">Cancellation Policy</h3>
               <div class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/policy-line.jpg" alt="Agonda goa huts"></div>
               <ul>
                  <li>If cancelled or modified up to 14 days before date of arrival, 1 night retention will be charged.</li>
                  <li>If cancelled or modified up to 7 days before date of arrival, full payment will be charged.</li>
                  <li>In case of no show full payment will be charged</li>
               </ul>
            </div>
            <div class="col-md-4">
               <h3 class="text-center">Our Hotel</h3>
               <div class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/policy-line.jpg" alt="Agonda goa huts"></div>
                <ul>
                  <li>Our front desk is open and staffed 24 hours a day, 7 days a week</li>
                  <li>You can check in any time after 12.00 PM</li>
                  <li>Daily housekeeping is included in your room price</li>
                  <li>Every hut in our beach resort has a Private bathroom.</li>
                </ul>
            </div>
         </div>
      </div>
      <!--start testimonial section -->
      <section class="container-fluid testimonial">
         <div class="container confirm-booking">
            <div class="clearfix">
               <div class="col-md-12 text-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/conf-gift.png" alt="Agonda goa huts">
                  <h3>** TO CONFIRM BOOKING **</h3>
                  <p>Send us your pick up details including Flight/train number and timings.</p>
                  <span>or</span>
                  <p>After you get a reply from us on email, Send us 50% advance amount through Western Union Money Transfer/PayPal/Bank Transfer.<br> Please contact us at <a class="mail" href="mailto:agondahuts@yahoo.com">agondahuts@yahoo.com</a>  for money transfering details.</p>
                  <div class="m-t-50"><a href="mailto:agondahuts@yahoo.com">EMAIL US</a></div>
               </div>
            </div>
         </div>
         <div class="container m-t-40">
                <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="row like">
                     <div class="col-md-6"> <a target="_blank" href="http://www.facebook.com/omsaibeachhuts"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb-like.png" class="img-responsive" alt=""></a></div>
                     <div class="col-md-6 m-t-sm-40"> <a target="_blank" href="https://www.tripadvisor.in/Hotel_Review-g816969-d1220372-Reviews-Om_Sai_Beach_Huts-Agonda_Goa.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificate.png" class="img-responsive" alt="Agonda goa huts"></a></div>
                  </div>
               </div>
            </div>
<?php get_footer(); ?>