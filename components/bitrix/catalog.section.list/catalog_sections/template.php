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


<? if ($arResult["SECTIONS"]): ?>
	<div class="catalog-items d-flex align-items-start flex-wrap justify-content-between">
		<? foreach ($arResult["SECTIONS"] as $i => $arSection): ?>
			<?
			$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
			$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
			$id = $this->GetEditAreaId($arSection['ID']);
			?>
			<a href="<?= $arSection["SECTION_PAGE_URL"] ?>" class="catalog-item" id="<?= $id ?>">
				<div class="catalog-item-img">
					<img src="<?= $arSection["PICTURE"]['SRC'] ?>" alt="<?= $arSection["NAME"] ?>">
				</div>
				<p><?= $arSection["NAME"] ?></p>
			</a>
		<? endforeach ?>
	</div>
<? endif ?>