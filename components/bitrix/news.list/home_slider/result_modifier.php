<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var CBitrixComponentTemplate $this */


foreach ($arResult["ITEMS"] as $i => $arItem) {
	$arImg = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]['ID'], array("width" => 350, "height" => 415), BX_RESIZE_IMAGE_EXACT);
	if ($arImg) {
		$arItem["DETAIL_PICTURE"]['SMALL_SRC'] = $arImg["src"];
	}
	$arImg = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]['ID'], array("width" => 1920, "height" => 1080), BX_RESIZE_IMAGE_EXACT);
	if ($arImg) {
		$arItem["DETAIL_PICTURE"]['SRC'] = $arImg["src"];
	}
	$arResult["ITEMS"][$i] = $arItem;
}