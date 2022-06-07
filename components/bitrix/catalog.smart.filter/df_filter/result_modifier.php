<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var CBitrixComponentTemplate $this */


foreach ($arResult["ITEMS"] as $i => $arItem) {
	foreach ($arItem["VALUES"] as $v => $arValue) {
		$arImg = CFile::ResizeImageGet($arValue['FILE']['ID'], array("width" => 30, "height" => 30), null);
		if ($arImg) {
			$arValue['FILE']['SRC'] = $arImg["src"];
		}
		$arItem["VALUES"][$v] = $arValue;
	}
	$arResult["ITEMS"][$i] = $arItem;
}
