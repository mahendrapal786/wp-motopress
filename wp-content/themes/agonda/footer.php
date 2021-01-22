<footer>
<div class="row">
<div class="col-md-8 text-center col-md-offset-2">
<?php
$args = array();
$args['menu'] = '7';
$args['echo'] = FALSE;
$args['menu_class'] = 'footer_menu';
$args['after'] = '<span>|</span>';
$args['menu_id'] = 'footer-menu';
$args['container'] = FALSE;
$footer_menu = wp_nav_menu($args);
echo $footer_menu;
?>
<?php dynamic_sidebar('footer_copyright');
      dynamic_sidebar('footer_address'); 
 ?>
<p>Contact No : +91 <?php echo get_theme_mod( 'phone_text_block'); ?>, E-Mail : <a href="mailto:<?php echo get_theme_mod( 'email_text_block'); ?>"><?php echo get_theme_mod( 'email_text_block'); ?></a></p>
</div>
</div>
</footer>
<a id="back-to-top" href="javascript:void(0)" class=" back-to-top" role="button"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/go-to-top.png"></a>
</div>
</section>
<script>
$(window).on("scroll", function() {
if($(window).scrollTop() > 50) {
$(".header").addClass("active-nav");
} else {
$(".header").removeClass("active-nav");
}
new WOW().init();
});
$(function () {
$('#carousel-example').carousel({
interval: false
});
});
</script>
<script src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=436&amp;locationId=1220372&amp;lang=en_UK&amp;rating=true&amp;nreviews=2&amp;writereviewlink=true&amp;popIdx=false&amp;iswide=true&amp;border=false&amp;display_version=2"></script>
<?php wp_footer(); ?>
<style>
ul.mphb-loop-room-type-attributes li.mphb-room-type-facilities span a
{
pointer-events: none;
cursor: default;
}
ul.mphb-single-room-type-attributes li.mphb-room-type-facilities span a
{
pointer-events: none;
cursor: default;
}
span.mphb-not-available-date
{
	color: lightgrey!important;
}
.mphb-confirm-reservation
{
	border-radius: 5px;
    min-width: 240px;
    padding: 10px;
    font-size: 18px;
    color: #FFFFFF;
    background: #5FAF96;
    box-shadow: none;
    border: 0;
    margin-top: 20px;
}
</style>
</body>
</html>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" tabindex="-1">
<div class="modal-dialog modal-lg">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>

</div>
<div class="modal-body">
<div class="row contact-form">
<div class="col-md-12 form-section p-a-0">

<div class="col-md-6 input-section col-sm-6">
<div class="form-group msg">
</div>
<?php echo do_shortcode('[contact-form-7 id="92" title="Contact Us"]'); ?>
</div>
<div class="col-md-5 col-md-offset-1 contact-info col-sm-6">
<h4>Contact Us to Book a Stay</h4>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Contact-hr.jpg" alt="Agonda goa huts"><br>
<figure>After you get a reply from us on email, Send us 50% advance amount through Western Union Money Transfer/PayPal/Bank Transfer.<br> 
Please contact us at</figure>
<span>Address</span>
<?php dynamic_sidebar('footer_address'); ?>
<span>Phone</span>
<a href="tel:<?php echo RemovePhoneHyphen(); ?>"><p>+91 <?php echo get_theme_mod( 'phone_text_block'); ?></p></a>
<span>E-mail</span>
<a href="mailto:<?php echo get_theme_mod( 'email_text_block'); ?>"><p><?php echo get_theme_mod( 'email_text_block'); ?></p></a>
<div class="fb-btn">
<a target="_blank" href="http://www.facebook.com/omsaibeachhuts">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-fb.png" class="img-responsive" alt="Agonda goa huts"></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>