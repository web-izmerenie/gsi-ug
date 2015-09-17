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
<section id="video">
	<div class="wrapper">
		<?foreach($arResult['ITEMS'] as $arItem){?>
			<div class="video">
				<?=$arItem[PREVIEW_TEXT];?>
			</div>
		<?}?>
	</div>
</section>
