<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
$isMainPage=$APPLICATION->GetCurPage(false)==SITE_DIR;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

	<title>E-PAGES</title>
	<?$APPLICATION->ShowHead(); ?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/default.css'); ?>

	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
	<link href="<?=SITE_TEMPLATE_PATH?>/fonts.css" rel="stylesheet" type="text/css" media="all" />


	</head>
	<body>
		<?php $APPLICATION->ShowPanel(); ?>

		<?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
			"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
				"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
				"DELAY" => "N",	// Откладывать выполнение шаблона меню
				"MAX_LEVEL" => "1",	// Уровень вложенности меню
				"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
				"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
				"MENU_CACHE_TYPE" => "N",	// Тип кеширования
				"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
				"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
				"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
				"COMPONENT_TEMPLATE" => ".default"
			),
			false
		);?>


		<?if($isMainPage):?>

			<div id="banner"></div>

		<?endif;?>
