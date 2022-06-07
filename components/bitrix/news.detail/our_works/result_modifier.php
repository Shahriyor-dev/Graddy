<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var CBitrixComponentTemplate $this */


foreach ($arResult["PROPERTIES"]['PICTURES']['VALUE'] as $i => $picID) {
	$arItem = array();
	$arImg = CFile::ResizeImageGet($picID, array("width" => 305, "height" => 227), BX_RESIZE_IMAGE_EXACT);
	if ($arImg) {
		$arItem["SMALL_SRC"] = $arImg["src"];
	}
	$arImg = CFile::ResizeImageGet($picID, array("width" => 1920, "height" => 1080), BX_RESIZE_IMAGE_EXACT);
	if ($arImg) {
		$arItem["SRC"] = $arImg["src"];
	}
	$arResult["PICTURES"][$i] = $arItem;
}

$arResult["PICTURES"] = array_chunk($arResult["PICTURES"], 2);

