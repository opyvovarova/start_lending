<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<!-- start brand.html-->
<section class="brand">
	<div class="container">
		<a name="brand" id="go_brand"></a>
		<span class="brand__img">
            <img src="<?php bloginfo('template_directory'); ?>/img/lightning.png" alt="">
        </span>
		<p class="brand__uptitle"><?php echo $atts['subtitle']; ?></p>
		<h3 class="brand__title"><?php echo $atts['title']; ?></h3>
		<div class="brand__box">
			<div class="brand__box--left">
                <span class="brand__box--img">
	                <?php if(isset($atts['image']['url'])): ?>
		                <img src="<?php echo $atts['image']['url']; ?>" alt="">
	                <?php endif; ?>
                </span>
			</div>
			<div class="brand__box--right">
				<?php echo $atts['text']; ?>
				<a href="#" class="brand__box--order">Заказать продукцию</a>
			</div>
		</div>
	</div>
</section>
<!-- end brand.html-->