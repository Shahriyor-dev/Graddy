<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var array $arParams
 * @var array $arResult
 */
?>

<? if ($arResult['ITEMS']): ?>
	<? foreach ($arResult['ITEMS'] as $i => $arItem): ?>
		<a class="<?= $arItem['CLASS'] ?>" href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?></a>
	<? endforeach; ?>
<? endif; ?>
