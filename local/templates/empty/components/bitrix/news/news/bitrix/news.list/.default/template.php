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

<?$class=array('boxA','boxB','boxC')?>

<div id="page" class="container">

<?foreach($arResult["ITEMS"] as $arItem):?>

	<div class=<?=array_shift($class);?>>

		<h2><?=$arItem["CODE"]?></h2>

		<div class="box" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>

				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="image image-full"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"/>

				</a>
			<?else:?>

				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"/>

			<?endif;?>

			<?endif?>

			<span><?echo $arItem["PREVIEW_TEXT"];?></span>

		</div>

		<p><?=$arItem["DETAIL_TEXT"];?></p>

		<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="button"><?echo $arItem["NAME"]?></a>

	</div>

<?endforeach;?>

</div>

