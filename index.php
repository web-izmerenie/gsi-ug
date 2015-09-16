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
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "advantages_of_material",
		"EDIT_TEMPLATE" => ""
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "steps",
		"EDIT_TEMPLATE" => ""
	)
);?>
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
