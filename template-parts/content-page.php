<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package startlp
 */

?>

<?php the_content(); ?>

<!-- start brand.html-->
<section class="brand">

	<div class="container">

		<a name="brand" id="go_brand"></a>
		<span class="brand__img">
            <img src="<?php bloginfo('template_directory'); ?>/img/lightning.png" alt="">
        </span>

		<p class="brand__uptitle">Дизельные электростанции</p>
		<h3 class="brand__title">Старт</h3>

		<div class="brand__box">

			<div class="brand__box--left">

                <span class="brand__box--img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/brand-img.png" alt="">
                </span>

			</div>
			<div class="brand__box--right">

				<p class="brand__box--content">Дизельные электростанции «СТАРТ» обладают существенными преимуществами в техническом обслуживании –
					собственные сервисные центры осуществляют постоянное гарантийное и пост гарантийное техническое
					обслуживание дизельных генераторов «СТАРТ» на всей территории РФ в режиме 24 часа/7 дней в неделю, а
					также осуществляют поставку запасных частей и предоставляют услугу продления гарантийного
					обслуживания.</p>
				<p class="brand__box--content">
					Мы постоянно повышаем повышаем квалификацию сервисных инженеров и увеличиваем складские запасы
					расходных материалов и комплектующих, что в свою очередь, сказывается на сокращение сроков
					устранения неисправностей.</p>

				<a href="#" class="brand__box--order">Заказать продукцию</a>

			</div>

		</div>

	</div>

</section>
<!-- end brand.html-->

<!-- start model.html-->
<section class="model">

	<div class="container">

		<a name="model" id="go_model"></a>

		<h3 class="model__title">Модельный ряд</h3>

		<table class="model__tg">
			<tr>
				<th class="model__tg--title" colspan="4" rowspan="2">ЭЛЕКТРОСТАНЦИИ СТАРТ</th>
				<th class="model__tg--subtitle" colspan="3">50 HZ / 400V</th>
			</tr>
			<tr>
				<td class="model__tg--name">Номинальная мощность</td>
				<td class="model__tg--name">Номинальная мощность</td>
				<td class="model__tg--name">Резервная мощность</td>
			</tr>
			<tr>
				<td class="model__tg--name">Модель электростанции</td>
				<td class="model__tg--name">Модель двигателя</td>
				<td class="model__tg--name">Модель альтернатора</td>
				<td class="model__tg--name">Модель панели управления</td>
				<td class="model__tg--name">кВт</td>
				<td class="model__tg--name">кВА</td>
				<td class="model__tg--name">кВА</td>
			</tr>
			<tr class="colored">
				<td class="model__tg--name">АД 10-Т400</td>
				<td class="model__tg--name">SDL-16</td>
				<td class="model__tg--name">SA-10</td>
				<td class="model__tg--name">DeepSea DSE 6120</td>
				<td class="model__tg--name">10</td>
				<td class="model__tg--name">13</td>
				<td class="model__tg--name">14</td>
			</tr>
			<tr>
				<td class="model__tg--name">АД 16-Т400</td>
				<td class="model__tg--name">SDL-19</td>
				<td class="model__tg--name">SA-16</td>
				<td class="model__tg--name">DeepSea DSE 6120</td>
				<td class="model__tg--name">16</td>
				<td class="model__tg--name">20</td>
				<td class="model__tg--name">22</td>
			</tr>
			<tr class="colored">
				<td class="model__tg--name">АД 20-Т400</td>
				<td class="model__tg--name">SDL-26</td>
				<td class="model__tg--name">SA-20</td>
				<td class="model__tg--name">DeepSea DSE 6120</td>
				<td class="model__tg--name">20</td>
				<td class="model__tg--name">25</td>
				<td class="model__tg--name">27,5</td>
			</tr>
			<tr>
				<td class="model__tg--name">АД 24-Т400</td>
				<td class="model__tg--name">SDL-30</td>
				<td class="model__tg--name">SA-24</td>
				<td class="model__tg--name">DeepSea DSE 6120</td>
				<td class="model__tg--name">24</td>
				<td class="model__tg--name">30</td>
				<td class="model__tg--name">33</td>
			</tr>
			<tr class="colored">
				<td class="model__tg--name">АД 30-Т400</td>
				<td class="model__tg--name">SDL-34</td>
				<td class="model__tg--name">SA-30</td>
				<td class="model__tg--name">DeepSea DSE 6120</td>
				<td class="model__tg--name">30</td>
				<td class="model__tg--name">37,5</td>
				<td class="model__tg--name">42,25</td>
			</tr>
			<tr>
				<td class="model__tg--name">АД 40-Т400</td>
				<td class="model__tg--name">SDK-56</td>
				<td class="model__tg--name">SA-40</td>
				<td class="model__tg--name">DeepSea DSE 6120</td>
				<td class="model__tg--name">40</td>
				<td class="model__tg--name">50</td>
				<td class="model__tg--name">55</td>
			</tr>
			<tr class="colored">
				<td class="model__tg--name">АД 50-Т400</td>
				<td class="model__tg--name">SDK-66</td>
				<td class="model__tg--name">SA-50</td>
				<td class="model__tg--name">DeepSea DSE 6120</td>
				<td class="model__tg--name">50</td>
				<td class="model__tg--name">62,5</td>
				<td class="model__tg--name">68,7</td>
			</tr>
			<tr>
				<td class="model__tg--name">АД 60-Т400</td>
				<td class="model__tg--name">SDK-72</td>
				<td class="model__tg--name">SA-60</td>
				<td class="model__tg--name">DeepSea DSE 6120</td>
				<td class="model__tg--name">60</td>
				<td class="model__tg--name">75</td>
				<td class="model__tg--name">82,5</td>
			</tr>
			<tr class="colored">
				<td class="model__tg--name">АД 80-Т400</td>
				<td class="model__tg--name">SDK-100</td>
				<td class="model__tg--name">SA-80</td>
				<td class="model__tg--name">DeepSea DSE 6120</td>
				<td class="model__tg--name">80</td>
				<td class="model__tg--name">100</td>
				<td class="model__tg--name">110</td>
			</tr>
			<tr>
				<td class="model__tg--name">АД 100-Т400</td>
				<td class="model__tg--name">SDK-110</td>
				<td class="model__tg--name">SA-100</td>
				<td class="model__tg--name">DeepSea DSE 6120</td>
				<td class="model__tg--name">100</td>
				<td class="model__tg--name">125</td>
				<td class="model__tg--name">137</td>
			</tr>
			<tr class="colored">
				<td class="model__tg--name">АД 150-Т400</td>
				<td class="model__tg--name">SDK-170</td>
				<td class="model__tg--name">SA-150</td>
				<td class="model__tg--name">DeepSea DSE 6120</td>
				<td class="model__tg--name">150</td>
				<td class="model__tg--name">187</td>
				<td class="model__tg--name">206</td>
			</tr>
			<tr>
				<td class="model__tg--name">АД 200-Т400</td>
				<td class="model__tg--name">SDK-230</td>
				<td class="model__tg--name">SA-200</td>
				<td class="model__tg--name">DeepSea DSE 6120</td>
				<td class="model__tg--name">200</td>
				<td class="model__tg--name">250</td>
				<td class="model__tg--name">275</td>
			</tr>
			<tr class="colored">
				<td class="model__tg--name">АД 250-Т400</td>
				<td class="model__tg--name">SDK-308</td>
				<td class="model__tg--name">SA-250</td>
				<td class="model__tg--name">DeepSea DSE 6120</td>
				<td class="model__tg--name">250</td>
				<td class="model__tg--name">312</td>
				<td class="model__tg--name">343</td>
			</tr>
		</table>

	</div>

</section>
<!-- end model.html-->

<!-- start services.html-->
<section class="services">

	<div class="container">

		<a name="services" id="go_services"></a>

		<div class="services__animation1"></div>
		<div class="services__animation2"></div>

		<h3 class="services__title">Услуги</h3>

		<div class="services__animation3"></div>

		<div class="services__box">
			<div class="services__box--item">

                <span class="services__box--img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/service-icon.png" alt="">
                </span>

				<p>Сервисное <br>
					обслуживание</p>

			</div>
			<div class="services__box--item">

                 <span class="services__box--img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/supply-icon.png" alt="">
                </span>

				<p>Поставка <br>
					запасных <br>
					частей</p>
			</div>
			<div class="services__box--item">

                <span class="services__box--img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/delivery-icon.png" alt="">
                </span>

				<p>Доставка <br>
					электростанций</p>

			</div>
			<div class="services__box--item">

                <span class="services__box--img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/training-icon.png" alt="">
                </span>

				<p>Обучение <br>
					технического <br>
					персонала</p>

			</div>
			<div class="services__box--item">

                 <span class="services__box--img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/selection-icon.png" alt="">
                </span>

				<p>Подбор <br>
					оборудования</p>

			</div>

			<a href="#" class="brand__box--order">Заказать продукцию</a>

		</div>


	</div>

</section>
<!-- end services.html-->

<!-- start svc.html-->
<section class="svc">

	<span class="square"></span>

	<div class="container">

		<a name="svc" id="go_svc"></a>

		<div class="svc__box">

			<div class="svc__box--left">

				<h3 class="svc__title">Сервисное <br>
					обслуживание</h3>

				<p class="svc__subtitle">Наша сервисная служба оказывает следующие услуги:</p>

				<ul class="svc__list">
					<li>сервисное обслуживание дизельных электростанций в гарантийный и послегарантийный
						период;</li>
					<li>ремонт дизельных электростанций в гарантийный и послегарантийный период;</li>
					<li>шеф-монтаж дизельных электростанций;</li>
					<li>поставка запасных частей для дизельных электростанций;</li>
					<li>обучение технического персонала вашего предприятия.</li>
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

<!-- start contacts.html-->
<section class="contacts">

	<span class="square"></span>

	<div class="container">

		<a name="contacts" id="go_contacts"></a>

		<h3 class="contacts__title">Контакты</h3>
		<p class="contacts__subtitle">Start Energy</p>

		<div class="contacts__box">

            <span class="contacts__box--address">
                <img src="<?php bloginfo('template_directory'); ?>/img/icons/smallmarker-icon.png" alt="">
	            <?php echo fw_get_db_customizer_option('address'); ?></span>

			<a href="tel:<?php echo fw_get_db_customizer_option('phone'); ?>" class="contacts__box--call">
				<img src="<?php bloginfo('template_directory'); ?>/img/icons/phone-icon.png" alt="">
				<?php echo fw_get_db_customizer_option('phone'); ?></a>

		</div>

	</div>

	<span class="square-bottom"></span>

</section>
<!-- end contacts.html-->
