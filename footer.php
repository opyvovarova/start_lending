<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package startlp
 */

?>

<footer class="footer">

	<div class="footer__map">

		<div id="footerMap"></div>

		<!--<div class="footer__map&#45;&#45;bg"></div>-->

	</div>

</footer>
<a href="#" id='Go_Top'><img alt="up" src="<?php bloginfo('template_directory'); ?>/img/icons/up.png"></a>
<div class="modal__call"><!-- Сaмo oкнo -->
	<span class="modal__call--close">X</span> <!-- Кнoпкa зaкрыть -->

	<h3 class="modal__call--title">Заказать звонок</h3>

	<form action="" class="modal__call--form">

		<input class="modal__call--name" type="text" placeholder="Ваше имя">

		<input class="modal__call--name" type="text" placeholder="Номер телефона">

		<input class="modal__call--submit" type="submit" value="Перезвонить">

	</form>

</div>
<div id="overlay"></div><!-- Пoдлoжкa -->
<?php wp_footer(); ?>

</body>
</html>
