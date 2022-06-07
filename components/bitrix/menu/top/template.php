<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var \CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var array $templateData */
/** @var \CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? if ($arResult): ?>
	<ul class="header-list d-flex align-items-center flex-wrap">
		<? foreach ($arResult as $i => $arItem): ?>
			<li class="<?= $arItem['LINK'] == '/produktsiya/' ? 'header-list-menus' : '' ?>">
				<a href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?></a>
				<? if ($arItem['LINK'] == '/produktsiya/'): ?>
					<img src="<?= SITE_TEMPLATE_PATH ?>/img/menu-arrow.svg" alt="">
				<? endif; ?>
			</li>
		<? endforeach; ?>
	</ul>
<? endif; ?>