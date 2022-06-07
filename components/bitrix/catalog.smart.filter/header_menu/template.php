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


<? foreach ($arResult["ITEMS"] as $i => $arItem): ?>
	<li class="header-dropdown-color <?= $arItem['CODE'] == "FORM_HIGHLOAD" ? 'col-3' : 'col-2' ?> ">
		<h5><?= $arItem["NAME"] ?></h5>
		<form action="/produktsiya/" class="row">
			<input type="hidden" name="set_filter" value="y">
			<? foreach ($arItem['VALUES'] as $v => $arValue): ?>
				<button name="<?= $arValue['CONTROL_NAME'] ?>" value="Y" class="col-auto">
					<? if ($arValue['FILE']): ?>
						<img src="<?= $arValue["FILE"]['SRC'] ?>" alt="<?= $arValue["VALUE"] ?>">
					<?php else: ?>
						<img src="<?= SITE_TEMPLATE_PATH ?>/img/header-form-1.svg " alt="">
					<? endif; ?>
				</button>
			<? endforeach; ?>
		</form>
	</li>
<? endforeach; ?>