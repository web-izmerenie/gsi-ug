<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "application",
		"EDIT_TEMPLATE" => ""
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "termin",
		"EDIT_TEMPLATE" => ""
	)
);?>
<section id="advantages-of-material">
	<div class="wrapper">
		<h1>Преимущества материала</h1>
		<ul class="advantages-main">
			<li><img src="<?=$tplPath;?>/img/advantages1.png">
				<p>Быстро</p>
				<div class="text">
					Быстро монтируется,
					быстро сохнет и отвердевает,
					намертво соединяясь с <br>поверхностью.
				</div>
			</li>
			<li><img src="<?=$tplPath;?>/img/advantages2.png">
				<p>Без швов</p>
				<div class="text">
					Бесшовное монолитное
					водонепроницаемое
					полотно по всей
					поверхности.
				</div>
			</li>
			<li><img src="<?=$tplPath;?>/img/advantages3.png">
				<p>Для сложных поверхностей</p>
				<div class="text">
					Для поверхностей с любыми формами,
					труднодоступных мест и влажных покрытий.
				</div>
			</li>
			<li><img src="<?=$tplPath;?>/img/advantages4.png">
				<p>Долгая эксплуатация</p>
				<div class="text">
					Срок эксплуатации гидроизоляции
					«жидкая резина» от 25 до 40 лет.
				</div>
			</li>
		</ul>
		<ul class="advantages-other">
			<li>
				<p>Пожаробезопасность</p>
				<div class="text">
					Гидроизоляция
					укладывается без применения огня.
				</div>
			</li>
			<li>
				<p>Звукоизоляция</p>
				<div class="text">
					Гасит звуки на высоких
					частотах и существенно поглощает на низких.
				</div>
			</li>
			<li>
				<p>Ремонтопригодность</p>
				<div class="text">Быстро и хорошо ремонтируется при механических повреждениях.</div>
			</li>
			<li>
				<p>Экономия средств</p>
				<div class="text">Небольшие расходы на обслуживание<br>
					и ремонт в долгосрочной перспективе.
				</div>
			</li>
			<li>
				<p>Экологически безопасно</p>
				<div class="text">
					Не токсичен и не
					выделяет запаха.
				</div>
			</li>
		</ul>
	</div>
</section>
<section id="steps">
	<div class="wrapper">
		<h1>Этапы гидроизоляции</h1>
		<ul>
			<li><span title="1" class="number">1</span>
				<p>Подготовка поверхности</p>
				<div class="text">
					Предварительно поверхность очищается от сора,
					демонтируется или ремонтируется старое покрытие,
					если это необходимо.
				</div>
			</li>
			<li><span title="2" class="number">2</span>
				<p>Нанесение грунтовки</p>
				<div class="text">
					В зависимости от размера поверхности,
					грунтовка наносится с помощью установки<br>
					безвоздушного напыления или малярным валиком.
					Следующий этап начинается
					спустя 1-3 часа после грунтования.

				</div>
			</li>
			<li><span title="3" class="number">3</span>
				<p>Нанесение «жидкой резины» </p>
				<div class="text">
					«Жидкая резина» наносится с помощью установки безвоздушного напыления,
					которая подает битумно-латексную эмульсию и коагулянт по двум контурам.
					При выходе они смешиваются в воздухе
					и происходит мгновенное разрушение оболочки эмульгатора.
					Попадая на поверхность частички битума и латекса образуют
					плотную мембрану.
				</div>
			</li>
			<li><span title="4" class="number">4</span>
				<p>Защита гидроизоляции</p>
				<div class="text">
					Для защиты гидроизоляции от механических повреждений и
					УФ излучений ее покрывают геотекстилем из полиэстера или
					другими защитными материалами.
				</div>
			</li>
		</ul>
	</div>
</section>
<section id="video">
	<div class="wrapper">
		<div class="video"><img src="<?=$tplPath;?>/img/video.jpg"></div>
	</div>
</section>
<section id="sales">
	<div class="wrapper">
		<h1>Акция</h1>
		<div class="sales-item"><img src="<?=$tplPath;?>/img/percent.png">
			<div class="text">
				Для всех заказчиков, заключивших договор до 30 сентября 2015 года –
				<b>скидка 20%</b> на все гидроизоляционные материалы.
			</div>
		</div>
	</div>
</section>
<section id="your-benefits">
	<div class="wrapper">
		<h1>Преимущества для Вас</h1>
		<ul>
			<li>
				<p>Мы предлагаем вам<br>гибкий график платежей</p>
				<div class="text">
					Платежи за работу и материалы вносятся частями по графику платежей
					после выполнения определенных этапов работ.
				</div>
			</li>
			<li>
				<p>Гарантия нашей<br>работы – 7 лет</p>
				<div class="text">
					Мы выдаем гарантийные документы и выполняем ремонтные работы
					технологических повреждений.
				</div>
			</li>
			<li>
				<p>Мы строго соблюдаем сроки выполнения работ</p>
				<div class="text">
					Вы можете быть уверены
					в том, что работа будет выполнена в срок. График выполнения
					работ подтвержден договором.
				</div>
			</li>
			<li>
				<p>Мы предоставляем комплексное обслуживание</p>
				<div class="text">
					По вашему желанию мы демонтируем старое покрытие, выполним ремонт
					механических повреждений покрытия «жидкая резина» и многое другое.
				</div>
			</li>
		</ul>
	</div>
</section>
<section id="contacts">
	<div class="wrapper">
		<h1>Контакты</h1><img src="<?=$tplPath;?>/img/contacts.png" class="inline">
		<ul class="inline">
			<li><span>Ваш менеджер:</span>
				Назаренко Владислав
			</li>
			<li><span>Телефон:</span>
				8 (903) 405 73 19
			</li>
			<li><span>Skype:</span><a href="skype:nazarenko-skype">nazarenko-skype</a></li>
			<li><a href="#form" class="btn"><span>Отправить заявку</span></a></li>
		</ul>
		<div class="inline text">Свяжитесь со мной.<br>
			Я отвечу на все интересующие<br>
			вас вопросы и оформлю заявку<br>
			и на выезд специалиста<br>
			к вам на объект.
		</div>
	</div>
</section>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
