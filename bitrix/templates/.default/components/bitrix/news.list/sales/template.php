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
<section id="sales">
	<div class="wrapper">
		<h1>Акция</h1>
		<?foreach($arResult['ITEMS'] as $arItem){
		$file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>105, 'height'=>105), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
			<div class="sales-item">
				<img src="<?=$file['src'];?>">
				<div class="text"><?=$arItem['PREVIEW_TEXT']?></div>
			</div>
		<?}?>
	</div>
</section>
