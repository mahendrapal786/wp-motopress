<?php
/*
Template Name: Accommodations Page
*/
get_header();
global $post;
?>
<section class="search-result-section mphb_sc_search_results-wrapper page-template-search-result">
<div class="container">
	<?php echo "<h1 class='heading_title'>".get_the_title($post->ID)."</h1>"; ?>
	<div class="row">
		<div class="col-sm-8" style="overflow: hidden;">
				<?php if ( have_posts() ) : 
							while ( have_posts() ) : the_post();
								
				             

								the_content();

							endwhile;
				 
				     else : 
				   ?>
     	<h1 class="entry-title"><?php _e( 'No posts to display', 'agonda' ); ?></h1>

<?php	endif;  ?>
	</div>	
<div class="col-sm-4 custom-sidebar">
	<div class="sidebar">
		<h2>Check Availability</h2>
		<?php  dynamic_sidebar('search_availability_form');  ?>
	</div>
</div>
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
<script>
	jQuery(document).ready(function() {
    jQuery('.custom-sidebar').theiaStickySidebar({
      // Settings
      additionalMarginTop: 110
    });
    $("#mphb-reservation-cart").detach().appendTo('.sidebar');
  });
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/theia-sticky-sidebar.js"></script>