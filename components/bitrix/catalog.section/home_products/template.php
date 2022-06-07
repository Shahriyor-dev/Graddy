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
<? if ($arResult["ITEMS"]): ?>
	<? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
		<?= $arResult["NAV_STRING"] ?>
	<? endif ?>
	<section class="products">
		<div class="container-xxl">
			<div class="title products-title "><?= $arParams['DF_TITLE'] ?></div>
		</div>
		<div class="container-xxl ">
			<div class="products-wrapper swiper ">
				<div class="products-cards swiper-wrapper d-flex align-items-stretch justify-content-between ">
					<? foreach ($arResult["ITEMS"] as $i => $arItem): ?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						$id = $this->GetEditAreaId($arItem['ID']);
						?>
						<? showProduct($arItem, $id); ?>
					<? endforeach ?>
				</div>
			</div>
			<div class="swiper-button-prev swiper-button-prev-1"></div>
			<div class="swiper-button-next swiper-button-next-1"></div>
		</div>
	</section>
	<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
		<?= $arResult["NAV_STRING"] ?>
	<? endif ?>
<? endif ?>