<?php
/**
 * Template Name: Custom Checkout page
 */

get_header(); ?>
<section class="custom-hotel-checkout">
<div class="container primary">
    <div class="row">
    	<div class="col-md-8 col-md-offset-2">
<?php 
 if ( have_posts() ) : 
			while ( have_posts() ) : the_post();
			echo "<h1 class='heading_title'>".get_the_title($post->ID)."</h1>";
 
               the_content();

			endwhile;
 
     else : 
   ?>
     	
 <h1 class="entry-title"><?php _e( 'No posts to display', 'agonda' ); ?></h1>
				

<?php	endif;  ?>
</div>

<!-- <div class="col-md-4">

<div class="secondary customsidebar">
This is sidebar area

</div>
</div> -->
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

<script>
	$(document).ready(function(){
	 $('.mphb-gateway-paypal').addClass('checked-list');
		$('[name="mphb_gateway_id"]:radio').click(function () {
	        $('[name="mphb_gateway_id"]:radio').parent().removeClass('checked-list');
	        $(this).parent().addClass('checked-list');
	    });
	});
</script>