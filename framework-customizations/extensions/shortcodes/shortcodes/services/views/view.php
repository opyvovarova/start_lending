<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>
<!-- start services.html-->
<section class="services">
	<div class="container">
		<a name="services" id="go_services"></a>
		<div class="services__animation1"></div>
		<div class="services__animation2"></div>
		<h3 class="services__title"><?php echo $atts['title']; ?></h3>
		<div class="services__animation3"></div>
		<div class="services__box">
			<?php if(!empty($atts['services'])): foreach( $atts['services'] as $service): ?>
				<div class="services__box--item">
	                <span class="services__box--img">
		                <?php if(isset($service['image']['url'])): ?>
			                <img src="<?php echo $service['image']['url']; ?>" alt="">
		                <?php endif; ?>
	                </span>
					<p><?php echo $service['title']; ?></p>
				</div>
			<?php endforeach; endif; ?>
			<a href="#" class="brand__box--order">Заказать продукцию</a>
		</div>
	</div>
</section>
<!-- end services.html-->
