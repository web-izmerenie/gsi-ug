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
		"AREA_FILE_SUFFIX" => "advantages_of_material",
		"EDIT_TEMPLATE" => ""
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"video",
	array(
		"COMPONENT_TEMPLATE" => "video",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "1",
		"NEWS_COUNT" => "1",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"sales", 
	array(
		"COMPONENT_TEMPLATE" => "sales",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "1",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>
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
