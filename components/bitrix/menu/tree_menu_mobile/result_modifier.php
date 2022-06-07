<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$depth = 1;
$parents = 0;
$parents2 = 0;
$parents3 = 0;
foreach ($arResult as $i => $arMenu) {
	$depth = $arMenu['DEPTH_LEVEL'];
	if ($depth == 1) {
		$arResult['TREE'][$i] = $arMenu;
		$parents = $i;
	} elseif ($depth == 2) {
		$arResult['TREE'][$parents]['ITEMS'][$i] = $arMenu;
		$parents2 = $i;
	} elseif ($depth == 3) {
		$arResult['TREE'][$parents]['ITEMS'][$parents2]['ITEMS'][$i] = $arMenu;
	}
	unset($arResult[$i]);
}
