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
	<div class="swiper-main swiper" data="swiper-product-gallery">
		<div class="swiper-tools">
			<div class="swiper-slide-text-description">
				Перейти к выбору плитки
			</div>
			<!-- /.swiper-slide-text-description -->
			<div class="tools-control" id="products-anchor">
				<div class="swiper-main-button-prev"></div>
				<div class="swiper-slide-text-next">
					<a href="#products-anchor">
						<svg width="80" height="92" viewBox="0 0 80 92" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M40 92L79.8372 69V23L40 0L0.16283 23V69L40 92Z" fill="#FF7800"/>
						</svg>
						<div class="white-arrow"></div>
					</a>
				</div>
				<div class="swiper-main-button-next"></div>
			</div>
		</div>
		<div class="swiper-wrapper">
			<? foreach ($arResult["ITEMS"] as $i => $arItem): ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				$id = $this->GetEditAreaId($arItem['ID']);
				?>
				<a href="<?= $arItem["PROPERTIES"]['SLIDER_URL']['VALUE'] ?>" class="swiper-slide" data-thumb="<?= $arItem["DETAIL_PICTURE"]["SMALL_SRC"] ?>" id="<?= $id ?>"
				     data-text="<?= $arItem["NAME"] ?>">
					<img class="swiper-image" src="<?= $arItem['DETAIL_PICTURE']['SRC'] ?>" alt="<?= $arItem['NAME'] ?>">
					<div class="swiper-slide-text">
						<div class="swiper-slide-text-title">
							<?= $arItem['NAME'] ?>
						</div>
					</div>
				</a>
			<? endforeach ?>
		</div>
		<div class="swiper-pagination" id="products"></div>
	</div>
<? endif ?>

