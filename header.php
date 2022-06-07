<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

/**
 * @var object $APPLICATION
 */

?>
<!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
	<link rel="shortcut icon" type="image/x-icon" href="<?= SITE_DIR ?>favicon.ico"/>


	<?php
	Asset::getInstance()->addString('
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	');
	Asset::getInstance()->addCss('https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&display=swap');
	Asset::getInstance()->addCss('https://unpkg.com/swiper@8/swiper-bundle.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
	Asset::getInstance()->addCss('https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');

	Asset::getInstance()->addJs('https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js');
	Asset::getInstance()->addJs('https://unpkg.com/swiper@8/swiper-bundle.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/script.js');
	if (CSite::InDir('/index.php')) {
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/mainPage.js');
	}
	?>
	<? $APPLICATION->ShowHead(); ?>

	<title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>


<header class="header">
	<div class="container-xxl">
		<div class="header-wrapper row d-flex justify-content-between align-items-center flex-nowrap">
			<button class="header-mobile-burger col-sm-2">
				<img src="<?= SITE_TEMPLATE_PATH ?>/img/menu-burger.svg" alt="">
			</button>
			<a href="<?= SITE_DIR ?>" class="header-logo col-xl-2 col-sm-3">
				<? $APPLICATION->IncludeFile(
					SITE_TEMPLATE_PATH . "/inc/header_logo.php",
					array(),
					array("MODE" => "html", "NAME" => "включаемую область")
				); ?>
			</a>
			<div class="header-middle col-7">
				<? $APPLICATION->IncludeComponent(
					"bitrix:menu",
					"top",
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(""),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "Y"
					)
				); ?>
				<div class="header-search is-active">
					<img src="<?= SITE_TEMPLATE_PATH ?>/img/search.svg" alt="">
					<input type="text">
				</div>
			</div>
			<a href="#" class="header-mobile-phone col-sm-1">
				<img src="<?= SITE_TEMPLATE_PATH ?>/img/mobile-phone.svg" alt="">
			</a>
			<div class="header-infos col-2">
				<? $APPLICATION->IncludeComponent(
					"df:df_params",
					"header_links",
					array(
						"DF_CLASS_0" => "",
						"DF_CLASS_1" => "",
						"DF_CLASS_2" => "is-active",
						"DF_CLASS_3" => "header-infos-email is-active",
						"DF_LINK_0" => "tel:4951500991",
						"DF_LINK_1" => "tel:88001500991",
						"DF_LINK_2" => "tel:4951500991",
						"DF_LINK_3" => "mailto:zakaz@graddi.ru",
						"DF_TEXT_0" => "(495) 150-09-91",
						"DF_TEXT_1" => "8 (800) 150-09-91",
						"DF_TEXT_2" => "(495) 150-09-91",
						"DF_TEXT_3" => "zakaz@graddi.ru"
					)
				); ?>
			</div>
		</div>
		<ul class="header-dropdown justify-content-center">
			<li class="header-dropdown-catalog col-2" style="width: 18%;">
				<h5>Каталог</h5>
				<? $APPLICATION->IncludeComponent(
					"bitrix:menu",
					"top_sub",
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "catalog",
						"USE_EXT" => "Y",
						"COMPONENT_TEMPLATE" => "top_sub"
					),
					false
				); ?>
			</li>

			<? $APPLICATION->IncludeComponent(
				"bitrix:catalog.smart.filter",
				"header_menu",
				array(
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CONVERT_CURRENCY" => "N",
					"DISPLAY_ELEMENT_COUNT" => "Y",
					"FILTER_NAME" => "arrFilter",
					"FILTER_VIEW_MODE" => "",
					"HIDE_NOT_AVAILABLE" => "N",
					"IBLOCK_ID" => "20",
					"IBLOCK_TYPE" => "catalog",
					"PAGER_PARAMS_NAME" => "arrPager",
					"POPUP_POSITION" => "left",
					"PREFILTER_NAME" => "smartPreFilter",
					"PRICE_CODE" => array("BASE"),
					"SAVE_IN_SESSION" => "N",
					"SECTION_CODE" => "produktsiya",
					"SECTION_CODE_PATH" => "",
					"SECTION_DESCRIPTION" => "-",
					"SECTION_ID" => "1354",
					"SECTION_TITLE" => "-",
					"SEF_MODE" => "Y",
					"SEF_RULE" => "",
					"SMART_FILTER_PATH" => "",
					"TEMPLATE_THEME" => "",
					"XML_EXPORT" => "N"
				)
			); ?>
		</ul>
	</div>
</header>
<a href="#" class="side-cart desktop">
	<button class="products-card-cart">
		<svg width="50" height="50" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path
				d="M22.7309 7.74063C22.6351 7.60216 22.5072 7.48899 22.358 7.41079C22.2089 7.3326 22.0431 7.29173 21.8747 7.29167H7.63822L6.43613 4.40625C6.27852 4.02628 6.01162 3.70166 5.66928 3.47356C5.32695 3.24546 4.92459 3.12414 4.51322 3.125H2.08301V5.20834H4.51322L9.45488 17.0677C9.53404 17.2575 9.66757 17.4195 9.83866 17.5335C10.0097 17.6475 10.2107 17.7084 10.4163 17.7083H18.7497C19.184 17.7083 19.5726 17.4385 19.7257 17.0333L22.8507 8.70001C22.9098 8.54232 22.9297 8.37266 22.9089 8.20558C22.888 8.03849 22.8269 7.87895 22.7309 7.74063ZM18.0278 15.625H11.1111L8.50697 9.375H20.3715L18.0278 15.625Z"
				fill="white"/>
			<path
				d="M10.9375 21.875C11.8004 21.875 12.5 21.1754 12.5 20.3125C12.5 19.4496 11.8004 18.75 10.9375 18.75C10.0746 18.75 9.375 19.4496 9.375 20.3125C9.375 21.1754 10.0746 21.875 10.9375 21.875Z"
				fill="white"/>
			<path
				d="M18.2295 21.875C19.0924 21.875 19.792 21.1754 19.792 20.3125C19.792 19.4496 19.0924 18.75 18.2295 18.75C17.3665 18.75 16.667 19.4496 16.667 20.3125C16.667 21.1754 17.3665 21.875 18.2295 21.875Z"
				fill="white"/>
		</svg>
	</button>
</a>
<a href="#" class="side-cart mobile">
	<button class="products-card-cart">
		<svg width="35" height="35" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path
				d="M22.7309 7.74063C22.6351 7.60216 22.5072 7.48899 22.358 7.41079C22.2089 7.3326 22.0431 7.29173 21.8747 7.29167H7.63822L6.43613 4.40625C6.27852 4.02628 6.01162 3.70166 5.66928 3.47356C5.32695 3.24546 4.92459 3.12414 4.51322 3.125H2.08301V5.20834H4.51322L9.45488 17.0677C9.53404 17.2575 9.66757 17.4195 9.83866 17.5335C10.0097 17.6475 10.2107 17.7084 10.4163 17.7083H18.7497C19.184 17.7083 19.5726 17.4385 19.7257 17.0333L22.8507 8.70001C22.9098 8.54232 22.9297 8.37266 22.9089 8.20558C22.888 8.03849 22.8269 7.87895 22.7309 7.74063ZM18.0278 15.625H11.1111L8.50697 9.375H20.3715L18.0278 15.625Z"
				fill="white"/>
			<path
				d="M10.9375 21.875C11.8004 21.875 12.5 21.1754 12.5 20.3125C12.5 19.4496 11.8004 18.75 10.9375 18.75C10.0746 18.75 9.375 19.4496 9.375 20.3125C9.375 21.1754 10.0746 21.875 10.9375 21.875Z"
				fill="white"/>
			<path
				d="M18.2295 21.875C19.0924 21.875 19.792 21.1754 19.792 20.3125C19.792 19.4496 19.0924 18.75 18.2295 18.75C17.3665 18.75 16.667 19.4496 16.667 20.3125C16.667 21.1754 17.3665 21.875 18.2295 21.875Z"
				fill="white"/>
		</svg>
	</button>
</a>
<div class="mob-menu ">
	<div class="container-xxl ">
		<div class="mob-menu-top d-flex justify-content-between align-items-start ">
			<a href="# " class="mob-menu-logo col-xs-1 ">
				<img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.svg " alt=" ">
			</a>
			<button class="menu-close-btn col-xs-1 ">
				<img src="<?= SITE_TEMPLATE_PATH ?>/img/close.svg " alt=" ">
			</button>
		</div>
		<div class="mob-search ">
			<svg width="18" height="18" viewBox="0 0 18 18" fill="#4c4c4c" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M13.9906 13.1963L16.1877 15.3923C16.2902 15.4984 16.3469 15.6405 16.3456 15.788C16.3443 15.9355 16.2852 16.0766 16.1809 16.1809C16.0766 16.2852 15.9355 16.3443 15.788 16.3456C15.6405 16.3469 15.4984 16.2902 15.3923 16.1877L13.1952 13.9906C11.7594 15.2207 9.90303 15.8469 8.01551 15.7378C6.12799 15.6287 4.35609 14.7928 3.07162 13.4054C1.78716 12.018 1.08997 10.1871 1.12636 8.29677C1.16274 6.40645 1.92988 4.60369 3.26678 3.26678C4.60369 1.92988 6.40645 1.16274 8.29677 1.12636C10.1871 1.08997 12.018 1.78716 13.4054 3.07162C14.7928 4.35609 15.6287 6.12799 15.7378 8.01551C15.8469 9.90303 15.2207 11.7594 13.9906 13.1952V13.1963ZM8.43759 14.6251C10.0786 14.6251 11.6524 13.9732 12.8128 12.8128C13.9732 11.6524 14.6251 10.0786 14.6251 8.43759C14.6251 6.79656 13.9732 5.22275 12.8128 4.06237C11.6524 2.90199 10.0786 2.25009 8.43759 2.25009C6.79656 2.25009 5.22275 2.90199 4.06237 4.06237C2.90199 5.22275 2.25009 6.79656 2.25009 8.43759C2.25009 10.0786 2.90199 11.6524 4.06237 12.8128C5.22275 13.9732 6.79656 14.6251 8.43759 14.6251Z"
					fill="#4c4c4c"/>
			</svg>
			<input type="text ">
		</div>
		<? $APPLICATION->IncludeComponent(
			"bitrix:menu",
			"tree_menu_mobile",
			array(
				"ALLOW_MULTI_SELECT" => "N",
				"CHILD_MENU_TYPE" => "mobile_sub",
				"DELAY" => "N",
				"MAX_LEVEL" => "2",
				"MENU_CACHE_GET_VARS" => array(),
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_TYPE" => "N",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"ROOT_MENU_TYPE" => "mobile",
				"USE_EXT" => "Y",
				"COMPONENT_TEMPLATE" => "top_sub"
			),
			false
		); ?>
	</div>
</div>


<? if (!CSite::InDir('/index.php')): ?>
<section class="content">
	<div class="container-xxl">
		<div class="breadcrumbs">
			<? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "df_bread", array(
				"PATH" => "",  // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
				"SITE_ID" => "s1",  // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
				"START_FROM" => "0",  // Номер пункта, начиная с которого будет построена навигационная цепочка
			),
				false
			); ?>
		</div>
		<h1 class="title"><?php $APPLICATION->ShowTitle(false); ?></h1>
		<? endif; ?>

		<? $APPLICATION->IncludeComponent(
			"bitrix:menu",
			"empty_menu",
			array(
				"ALLOW_MULTI_SELECT" => "N",
				"CHILD_MENU_TYPE" => "",
				"DELAY" => "N",
				"MAX_LEVEL" => "2",
				"MENU_CACHE_GET_VARS" => array(),
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_TYPE" => "N",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"ROOT_MENU_TYPE" => "mobile_sub",
				"USE_EXT" => "Y",
				"COMPONENT_TEMPLATE" => "top_sub"
			),
			false
		); ?>
