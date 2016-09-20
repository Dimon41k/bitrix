<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="#">PlainLeaf</a></h1>
	</div>
	<div id="include" style="width:200px; margin-left: 200px;"><?$APPLICATION->IncludeFile(SITE_DIR."local/includes/slogan.php", array(), array("MODE"=>"text"));?></div>
	<div id="menu">
		<ul>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
?>
	<li<?if($arItem["SELECTED"]):?>
		 class="active"
	<?endif?>>
	<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	
<?endforeach?>

		</ul>
	</div>
</div>
<?endif?>