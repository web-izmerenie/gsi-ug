<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section id="contacts">
	<div class="wrapper">
		<h1>Контакты</h1>
		<?foreach ($arResult['ITEMS'] as $arItem){
			$file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'],
				array('width'=>251, 'height'=>251),
				BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
			<div class="contacts-item">
				<div class="img inline">
					<img src="<?=$file['src'];?>">
				</div>
				<ul class="inline">
					<li><span>Ваш менеджер:</span>
						<?=$arItem['NAME'];?>
					</li>
					<li><span>Телефон:</span>
						<?=$arItem['PROPERTIES']['ATT_TEL']['VALUE'];?>
					</li>
					<li><span>Skype:</span>
						<a href="skype:<?=$arItem['PROPERTIES']['ATT_SKYPE']['VALUE'];?>">
							<?=$arItem['PROPERTIES']['ATT_SKYPE']['VALUE'];?>
						</a>
					</li>
					<li><a href="#form" class="btn"><span>Отправить заявку</span></a></li>
				</ul>
				<div class="inline text"><?=$arItem['~PREVIEW_TEXT']?></div>
			</div>
		<?}?>
	</div>
</section>
