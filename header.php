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
				<img src="<?php bloginfo('template_directory'); ?>/img/head-logo.png" alt="logo">
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

			<span class="header__phone--tel">+7(495)461-62-30</span>

			<a href="tel:+74954616230" class="header__phone--call">Заказать звонок</a>

		</div>

		<!-- start top-slider.html-->
		<section class="top-slider">

			<div class="top-slider__box">

				<div class="top-slider__box--item">
					<img src="<?php bloginfo('template_directory'); ?>/img/top-slide1.png" alt="">

					<div class="top-slider__box--content">
						<h1 class="top-slider__box--title">старт</h1>

						<p class="top-slider__box--subtitle">
							<span></span>
							Дизельные генераторы</p>
					</div>


				</div>

				<div class="top-slider__box--item">
					<!--<img src="img/top-slide1.png" alt="">-->

					<div class="top-slider__box--content">
						<h1 class="top-slider__box--title">4000 <span>м</span><sup>2</sup></h1>

						<p class="top-slider__box--subtitle">Производственная площадка</p>
					</div>

				</div>

				<div class="top-slider__box--item">
					<img src="<?php bloginfo('template_directory'); ?>/img/top-slide2.png" alt="">

					<div class="top-slider__box--content">
						<span class="top-slider__box--uptitle">Постоянное <br>наличие</span>
						<h1 class="top-slider__box--title" style="text-transform: capitalize;">Станций</h1>

						<p class="top-slider__box--subtitle">более 200 единиц в стоке</p>
					</div>

				</div>

				<div class="top-slider__box--item">
					<img src="<?php bloginfo('template_directory'); ?>/img/top-slide3.png" alt="">

					<div class="top-slider__box--content">
						<span class="top-slider__box--uptitle">Широкий склад <br>запасных</span>
						<h1 class="top-slider__box--title" style="text-transform: capitalize;">Частей</h1>

						<p class="top-slider__box--subtitle">Более 10 000 найменований постоянно в наличии</p>
					</div>

				</div>

			</div>

		</section>
		<!-- end top-slider.html-->

	</div>

</header>
