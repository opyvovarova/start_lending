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
	</div>
	<div class="footer__link">

		<a href="http://yobrand.ru/" class="footer__link--agency" target="_blank">
            <span class="img">
                <img src="<?php bloginfo('template_directory'); ?>/img/icons/art-icon.png">
            </span>
			<span class="text">Разработано <br> Yobrand Agency</span>
		</a>

	</div>
</footer>
<a href="#" id='Go_Top'><img alt="up" src="<?php bloginfo('template_directory'); ?>/img/icons/up.png"></a>
<div class="modal__call"><!-- Сaмo oкнo -->
	<span class="modal__call--close">X</span> <!-- Кнoпкa зaкрыть -->
	<h3 class="modal__call--title">Заказать звонок</h3>
	<form action="" class="modal__call--form">
		<input class="modal__call--name js-modal-name" name="modalName" type="text" placeholder="Ваше имя">
		<input class="modal__call--name js-modal-phone" name="modalPhone" type="text" placeholder="Номер телефона">
		<input class="modal__call--submit js-modal-submit" type="submit" value="Перезвонить">
	</form>
</div>
<div id="overlay"></div><!-- Пoдлoжкa -->
<div class="modal__order">
	<span class="modal__order--close">X</span>
	<h3 class="modal__order--title">Заказать звонок</h3>
	<form action="" class="modal__order--form">
		<input class="modal__order--name js-model-name" name="modelName" type="text" placeholder="Ваше имя">
		<input class="modal__order--name js-model-phone" name="modelPhone" type="text" placeholder="Номер телефона">
		<p class="modal__order--subtitle">Модель генератора:</p>
		<select name="modelModel" id="" class="modal__order--select js-model-model">
			<option value="АД 10-Т400">АД 10-Т400</option>
			<option value="АД 16-Т400">АД 16-Т400</option>
			<option value="АД 20-Т400">АД 20-Т400</option>
			<option value="АД 24-Т400">АД 24-Т400</option>
			<option value="АД 30-Т400">АД 30-Т400</option>
			<option value="АД 40-Т400">АД 40-Т400</option>
			<option value="АД 50-Т400">АД 50-Т400</option>
			<option value="АД 60-Т400">АД 60-Т400</option>
			<option value="АД 80-Т400">АД 80-Т400</option>
			<option value="АД 100-Т400">АД 100-Т400</option>
			<option value="АД 150-Т400">АД 150-Т400</option>
			<option value="АД 200-Т400">АД 200-Т400</option>
			<option value="АД 250-Т400">АД 250-Т400</option>
		</select>
		<input class="modal__order--submit js-model-submit" type="submit" value="Заказать">
	</form>
</div>
<div id="overlay"></div>
<?php wp_footer(); ?>
</body>
</html>
