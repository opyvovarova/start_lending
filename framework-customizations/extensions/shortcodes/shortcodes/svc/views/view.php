<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<!-- start svc.html-->
<section class="svc">
	<span class="square"></span>
	<div class="container">
		<a name="svc" id="go_svc"></a>
		<div class="svc__box">
			<div class="svc__box--left">
				<h3 class="svc__title"><?php echo $atts['title']; ?></h3>
				<p class="svc__subtitle"><?php echo $atts['subtitle']; ?></p>
				<ul class="svc__list">
					<?php if(!empty($atts['list'])):
						foreach( $atts['list'] as $item): ?>
							<li><?php echo $item; ?></li>
						<?php endforeach;
					endif; ?>
				</ul>
			</div>
			<div class="svc__box--right">
				<div class="svc__box--img">
					<img src="<?php bloginfo('template_directory'); ?>/img/svc-img.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end svc.html-->
