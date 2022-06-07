<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */

/** @var CBitrixComponentTemplate $this */


use Bitrix\Main\Loader;

Loader::includeModule("highloadblock");

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;


foreach ($arResult["ITEMS"] as $i => $arItem) {
	if (!in_array($arItem["CODE"], array("FORM_HIGHLOAD", "COLOR_HL"))) {
		unset($arResult["ITEMS"][$i]);
	}
}