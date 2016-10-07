<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>
<!-- start contacts.html-->
<section class="contacts">
	<span class="square"></span>
	<div class="container">
		<a name="contacts" id="go_contacts"></a>
		<h3 class="contacts__title"><?php echo $atts['title']; ?></h3>
		<p class="contacts__subtitle"><?php echo $atts['subtitle']; ?></p>
		<div class="contacts__box">
            <span class="contacts__box--address">
                <img src="<?php bloginfo('template_directory'); ?>/img/icons/smallmarker-icon.png" alt="">
	            <?php echo fw_get_db_customizer_option('address'); ?>
            </span>
			<a href="tel:<?php echo fw_get_db_customizer_option('phone'); ?>" class="contacts__box--call">
				<img src="<?php bloginfo('template_directory'); ?>/img/icons/phone-icon.png" alt="">
				<?php echo fw_get_db_customizer_option('phone'); ?>
			</a>
		</div>
	</div>
	<div class="contacts__animation1">
		<div class="contacts__animation1--vertical"></div>
		<div class="contacts__animation1--horizontal"></div>

	</div>
	<div class="contacts__animation2">
		<div class="contacts__animation2--vertical"></div>
	</div>
	<span class="square-bottom"></span>
</section>
<!-- end contacts.html-->
