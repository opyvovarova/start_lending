<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package startlp
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header__logo">
				<div class="header__logo--img">
					<?php $logo = fw_get_db_customizer_option('logo'); ?>
					<img src="<?php echo (!empty($logo['url']))? $logo['url']: get_bloginfo('template_directory').'/img/head-logo.png'; ?>" alt="logo">
				</div>
			</div>
			<nav class="header__nav">
				<ul>
					<li><a href="#go_brand" class="smoothScroll">О Бренде</a></li>
					<li><a href="#go_model" class="smoothScroll">Продукция</a></li>
					<li><a href="#go_services" class="smoothScroll">Услуги</a></li>
					<li><a href="#go_svc" class="smoothScroll">Сервис</a></li>
					<li><a href="#go_contacts" class="smoothScroll">Контакты</a></li>
				</ul>
			</nav>
			<div class="header__phone">
				<a href="tel:<?php echo fw_get_db_customizer_option('phone'); ?>"><span class="header__phone--tel"><?php echo fw_get_db_customizer_option('phone'); ?></span></a>
				<a href="#" class="header__phone--call">Заказать звонок</a>
			</div>
			<!-- start top-slider.html-->
			<section class="top-slider">
				<div class="top-slider__box">
					<?php $slides = fw_get_db_customizer_option('slides'); ?>
					<?php if(!empty($slides)): foreach( $slides as $slide ): ?>
						<div class="top-slider__box--item">
							<?php if(isset($slide['image']['url'])): ?>
								<img src="<?php echo $slide['image']['url']; ?>" alt="">
							<?php endif; ?>
							<div class="top-slider__box--content">
								<?php if(isset($slide['span'])): ?>
									<span class="top-slider__box--uptitle"><?php echo $slide['span']; ?></span>
								<?php endif; ?>
								<h1 class="top-slider__box--title"><?php echo $slide['title']; ?></h1>
								<p class="top-slider__box--subtitle">
									<?php echo $slide['desc']; ?>
								</p>
							</div>
						</div>
					<?php endforeach; endif; ?>
				</div>
			</section>
		<!-- end top-slider.html-->
		</div>
	</header>
