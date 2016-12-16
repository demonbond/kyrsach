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
$this->setFrameMode(true);?>

<div id="product_slider">
	<div id="SlideItMoo_outer">
		<div id="SlideItMoo_inner">
			<div id="SlideItMoo_items">
				<?foreach($arResult["ROWS"][0] as $key => $arItem):?>
					<div id="SlideItMoo_element">
						<a href="<?=$arItem["PROPERTIES"]["URL"]?>">
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" /></a>
					</div>
				<?endforeach;?>
			</div>
		</div>
	</div>
</div>
<div class="cleaner"></div>