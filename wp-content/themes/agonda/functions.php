<?php
/* This is for all custom function here */
add_theme_support( 'post-thumbnails' );
// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
     'menu-1' => esc_html__( 'Header' ),
 ) );
// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_filter('walker_nav_menu_start_el', 'wpse_226884_replace_hash', 999);
function wpse_226884_replace_hash($menu_item) {
    if (strpos($menu_item, 'href="#"') !== false) {
        $menu_item = str_replace('href="#"', 'href="javascript:void(0);"', $menu_item);
    }
    return $menu_item;
}

/* add css and js for theme */
function custom_enqueue_scripts() {
wp_enqueue_style( 'style', get_stylesheet_uri() );

wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
wp_enqueue_style( 'bootstrap.min' );
wp_register_style( 'bootstrap-select', get_template_directory_uri() . '/assets/css/bootstrap-select.css');
wp_enqueue_style( 'bootstrap-select' );
wp_register_style( 'font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
wp_enqueue_style( 'font-awesome.min' );
wp_register_style( 'style.min', get_template_directory_uri() . '/assets/css/style.min.css');
wp_enqueue_style( 'style.min' );
wp_register_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
wp_enqueue_style( 'magnific-popup' );
wp_register_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css');
wp_enqueue_style( 'responsive' );
wp_register_style( 'bootstrap-theam', get_template_directory_uri() . '/assets/css/bootstrap-theam.css');
wp_enqueue_style( 'bootstrap-theam' );
wp_register_style( 'bootstrap-datepicker.min', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.min.css');
wp_enqueue_style( 'bootstrap-datepicker.min' );

wp_register_style( 'jquery.fancybox.min', get_template_directory_uri() . '/fancybox/jquery.fancybox.min.css');
wp_enqueue_style( 'jquery.fancybox.min' );

if ( is_page( '108' ) ) {
wp_register_style( 'price-table', get_template_directory_uri() . '/assets/css/price-table.css');
wp_enqueue_style( 'price-table' );
}

wp_register_script('jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js'); 
wp_enqueue_script('jquery.min');
wp_register_script('bootstrap-datepicker.min', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.min.js'); 
wp_enqueue_script('bootstrap-datepicker.min');

wp_register_script('jquery.fancybox.min', get_template_directory_uri() . '/fancybox/jquery.fancybox.min.js'); 
wp_enqueue_script('jquery.fancybox.min');

wp_register_script('bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js'); 
wp_enqueue_script('bootstrap.min');
wp_register_script('bootstrap-select', get_template_directory_uri() . '/assets/js/bootstrap-select.js'); 
wp_enqueue_script('bootstrap-select');
wp_register_script('isotope.pkgd.min', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js'); 
wp_enqueue_script('isotope.pkgd.min');
wp_register_script('imagesloaded.pkgd.min', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js'); 
wp_enqueue_script('imagesloaded.pkgd.min');
wp_register_script('jquery.appear', get_template_directory_uri() . '/assets/js/jquery.appear.js'); 
wp_enqueue_script('jquery.appear');
wp_register_script('jquery.magnific-popup.min', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js'); 
wp_enqueue_script('jquery.magnific-popup.min');
wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js'); 
wp_enqueue_script('main');
wp_register_script('agonda-script', get_template_directory_uri() . '/assets/js/agonda-script.js'); 
wp_enqueue_script('agonda-script');
wp_register_script('agonda-script', get_template_directory_uri() . '/assets/js/agonda-script.js'); 
wp_enqueue_script('agonda-script');

wp_localize_script( 'jquery', 'ajax_posts', array(
    'ajaxurl' => admin_url( 'admin-ajax.php' ),
));

}
add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );

function contact_widgets_init() {

register_sidebar(array(   
        'id'            => 'footer_address',
        'name'          => 'Footer Address Sidebar',
        'description'   => 'This is sidebar for footer Address.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="social-widget-title d-none">',
        'after_title'   => '</h3>',
));

register_sidebar(array(   
        'id'            => 'footer_copyright',
        'name'          => 'Footer Copyright Sidebar',
        'description'   => 'This is sidebar for Footer Copyright.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="social-widget-title d-none">',
        'after_title'   => '</h3>',
));

register_sidebar(array(   
        'id'            => 'search_availability_form',
        'name'          => 'Search Availability Form Sidebar',
        'description'   => 'This is sidebar for Search Availability Form.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="social-widget-title d-none">',
        'after_title'   => '</h3>',
));

}
add_action( 'widgets_init', 'contact_widgets_init' );

remove_filter('widget_text_content', 'wpautop');

add_action ('wp_head', 'global_js_variables');
function global_js_variables() 
{  global $post;
    ?>
    <script type="text/javascript">
    var ajaxurl = '<?php echo admin_url("admin-ajax.php"); ?>';
    var themeurl = '<?php echo get_template_directory_uri(); ?>';
    var siteurl = '<?php echo site_url(); ?>';
    var homeurl = '<?php echo home_url(); ?>';
    var currentpageid = '<?php echo $post->ID; ?>';
    </script>
    <?php
}

/* Custom Option For Customizer (Phone & Email) */
add_action( 'customize_register', 'genesischild_register_theme_customizer' );

function genesischild_register_theme_customizer( $wp_customize ) {

$wp_customize->add_panel( 'text_blocks', array(
  'priority'       => 500,
  'theme_supports' => '',
  'title'          => __( 'Change Phone & Email', 'genesischild' ),
  'description'    => __( 'Set editable text for certain content.', 'genesischild' ),
 ) );
 
 $wp_customize->add_section( 'custom_email_text' , array(
  'title'    => __('Change Email Text','genesischild'),
  'panel'    => 'text_blocks',
  'priority' => 10
 ) );
 
 $wp_customize->add_setting( 'email_text_block', array(
   'default'           => __( 'default text', 'genesischild' ),
   'sanitize_callback' => 'sanitize_text'
 ) );

 $wp_customize->add_control( new WP_Customize_Control(
     $wp_customize,
  'custom_address_text',
      array(
          'label'    => __( 'Email Text', 'genesischild' ),
          'section'  => 'custom_email_text',
          'settings' => 'email_text_block',
          'type'     => 'text'
      )
     )
 );
 
 $wp_customize->add_section( 'custom_phone_text' , array(
  'title'    => __('Change Phone Text','genesischild'),
  'panel'    => 'text_blocks',
  'priority' => 10
 ) );
 
 $wp_customize->add_setting( 'phone_text_block', array(
   'default'           => __( 'default text', 'genesischild' ),
   'sanitize_callback' => 'sanitize_text'
 ) );

 $wp_customize->add_control( new WP_Customize_Control(
     $wp_customize,
  'custom_phone_text',
      array(
          'label'    => __( 'Phone Text', 'genesischild' ),
          'section'  => 'custom_phone_text',
          'settings' => 'phone_text_block',
          'type'     => 'text'
      )
     )
 );

 $wp_customize->add_section( 'custom_fax_text' , array(
  'title'    => __('Change Fax Text','genesischild'),
  'panel'    => 'text_blocks',
  'priority' => 10
 ) );
 
 $wp_customize->add_setting( 'fax_text_block', array(
   'default'           => __( 'default text', 'genesischild' ),
   'sanitize_callback' => 'sanitize_text'
 ) );

 $wp_customize->add_control( new WP_Customize_Control(
     $wp_customize,
  'custom_fax_text',
      array(
          'label'    => __( 'Fax Text', 'genesischild' ),
          'section'  => 'custom_fax_text',
          'settings' => 'fax_text_block',
          'type'     => 'text'
      )
     )
 );

 $wp_customize->add_section( 'custom_support_text' , array(
  'title'    => __('Change Support Email Text','genesischild'),
  'panel'    => 'text_blocks',
  'priority' => 10
 ) );
 
 $wp_customize->add_setting( 'support_text_block', array(
   'default'           => __( 'default text', 'genesischild' ),
   'sanitize_callback' => 'sanitize_text'
 ) );

 $wp_customize->add_control( new WP_Customize_Control(
     $wp_customize,
  'custom_support_text',
      array(
          'label'    => __( 'Support Email Text', 'genesischild' ),
          'section'  => 'custom_support_text',
          'settings' => 'support_text_block',
          'type'     => 'text'
      )
     )
 );

function sanitize_text( $text ) {
     return sanitize_text_field( $text );
 }
}

/* Pagination Code For Blog Category  Page  */
add_action( 'pre_get_posts', function ( $q )
{
    if (        !is_admin() 
          && $q->is_main_query() 
          && $q->is_category() 
    ) {
        
        $q->set( 'posts_per_page', 2 );
     }
});

function custom_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );

function custom_excerpt_length( $length ) {
        return 25;
    }
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<nav class='pagination-nav'>";
         echo "<ul class='pagination justify-content-center'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class='page-item'><a class='page-link' href='".get_pagenum_link(1)."'>&laquo;</a></li>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

  $left_arrow = (1 === $paged) ? 'disabled' : '';

echo "<li class='page-item ".$left_arrow."'><a href='".get_pagenum_link($paged - 1)."' class='page-link'><span class='icon'><i class='ficon-arrow-left'></i></span></a></li>";



         for ($i=1; $i <= $pages; $i++)
         {
           if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
 
         echo ($paged == $i)? "<li class='page-item active'><a class='page-link'><span class='current'>".$i."</span></a></li>":"<li class='page-item'><a class='page-link' href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";

             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<li class='page-item'><a class='page-link' href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li class='page-item'><a class='page-link' href='".get_pagenum_link($pages)."'>&raquo;</a></li>";

 $right_arrow = ($paged == $pages) ? 'disabled' : '';

echo "<li class='page-item ".$right_arrow."'><a class='page-link' href='".get_pagenum_link($paged + 1)."'><span class='icon'><i class='ficon-arrow-right'></i></span></a></li>";

         echo "</ul>";
         echo "</nav>\n";
     }
}

/* phone in brackets */
function RemovePhoneHyphen()
{
$phone=get_theme_mod( 'phone_text_block');
$phone2=str_replace(array( '(', ')', '-', ' ' ), '', $phone);
return $phone2;
}

add_action( 'wp_head', 'remove_renderGallery' ); 
function remove_renderGallery(){
remove_action( 'mphb_render_single_room_type_metas', array( '\MPHB\Views\SingleRoomTypeView', 'renderGallery' ), 10 );
}

/* calendars */
function calendars_options_panel(){
  add_menu_page('Calendars Page Title', 'Calendars Page', 'manage_options', 'calendars-options', 'calendars_func');
}
add_action('admin_menu', 'calendars_options_panel');
 
function calendars_func(){
   global $post;
    echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
    <h2>Booking Status</h2></div>';

 echo '<input type="text" id="selected_date" name="selected_date" value="2020-11-01 - 2020-12-20" readonly>';

    /* season by date  */
   $start_date='2020-11-01';
   $end_date='2020-12-20';
   $season_args = array(
     'post_type' => 'mphb_season',
     'order' => 'ASC',
     'orderby' => 'post_date',
     'post_status' => 'publish',
     'posts_per_page' => -1,
  'meta_query' => array(
      'relation' => 'AND',
      array(
          'key'     => 'mphb_start_date',
          'value'   => $start_date,
          'compare' => '>=',
          'type'    => 'DATE'
      ),
      array(
          'key'     => 'mphb_end_date',
          'value'   => $end_date,
          'compare' => '<=',
          'type'    => 'DATE'
      )
  ),
  'orderby' => 'date',
  'order' => 'DESC'
  );
   $season_query = new WP_Query( $season_args );
   
   $total_seasons = $season_query->found_posts;
  
  if ( $season_query->have_posts() ) {
        while ( $season_query->have_posts() ) {

            $season_query->the_post();
            $season_post_id=$post->ID;
            echo 'Seasons ID'.$season_post_id.'<br>';
            echo 'Seasons Title'.$post->post_title.'<br>';

            $rate_args = array(
              'post_type' => 'mphb_rate',
              'post_status' => 'publish',
              'meta_query' => array(
                  array(
                      'key' => 'mphb_season_prices',
                      'value' => sprintf(':"%s";', $season_post_id),
                      'compare' => 'LIKE'
                  )
                )
            );

           $rates_query = new WP_Query( $rate_args );
           
           if ( $rates_query->have_posts() ) {
               
               while ( $rates_query->have_posts() ) {
                
                $rates_query->the_post();
                $rates_post_id=$post->ID;

                $room_type_id=get_post_meta($rates_post_id,'mphb_room_type_id',true);
                $room_type=get_the_title($room_type_id);

                echo '<h2>'.$room_type.'</h2>';

               $season_prices_datas=get_post_meta( $rates_post_id, 'mphb_season_prices', true );

               echo '<pre>';
               print_r($season_prices_datas);
               

           /*foreach($season_prices_datas as $season_prices_data)
            {
              $season = $season_prices_data['season'];
              $parent[$season][] = $season_prices_data['price']['prices'][0];
              echo '<pre>';
              print_r($season_prices_data);
            }*/
            
            /*foreach($parent as $key=>$value)
            {
              foreach($value as $v) {
                echo '<span>RS. '.$v.' /-</span>';
              }
            }*/


                echo '<hr>';

                 /* Room info start */
                    $rooms_args = array (
                    'post_type' => 'mphb_room',
                     'meta_query' => array(
                        array(
                            'key'    => 'mphb_room_type_id',
                            'value'  => $room_type_id,
                        ),
                     ),
                    );

                   $room_query = new WP_Query( $rooms_args );
                    if ( $room_query->have_posts() ) {

                      $room_count=$room_query->found_posts;
                      echo '<h4>Room count: '.$room_count.'</h4>';
                        while ( $room_query->have_posts() ) {
                            
                            $room_query->the_post();
                            $room_id=$post->ID;

                            echo '<h3>'.get_the_title($room_id).'&nbsp;&nbsp;<span>(Room ID: '.$room_id.')</span>'.'</h3>';
                            echo '<hr>';
                        }
                    }
                  /* Room info end  */ 
           
              }

           }

        }
     
    } 

}