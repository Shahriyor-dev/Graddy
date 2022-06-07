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
echo "<script>console.log(" . json_encode($arResult, JSON_PARTIAL_OUTPUT_ON_ERROR) . ")</script>";
?>


<form class="content-forms" action="<?= $arResult['FORM_ACTION'] ?>">
	<? foreach ($arResult['ITEMS'] as $i => $arItem): ?>
		<div class="content-forms-item">
			<h2 class="forms-title"><?= $arItem['NAME'] ?>:</h2>
			<? foreach ($arItem['VALUES'] as $v => $arValue): ?>
				<div>
					<input type="checkbox" name="<?= $arValue['CONTROL_NAME'] ?>" id="<?= $arValue['CONTROL_ID'] ?>"
					       value="<?= $arValue['HTML_VALUE'] ?>" <?= $arValue['CHECKED'] ? 'checked' : '' ?>>
					<label class="d-flex align-items-center" for="<?= $arValue['CONTROL_ID'] ?>">
						<? if ($arValue['FILE']): ?>
							<img src="<?= $arValue['FILE']['SRC'] ?>" alt="<?= $arValue['VALUE'] ?>">
						<? endif; ?>
						<?= $arValue['VALUE'] ?>
					</label>
				</div>
			<? endforeach; ?>
		</div>
	<? endforeach; ?>
	<div class="form-buttons">
		<button type="submit" class="btn btn-submit">Показать</button>
		<button type="reset" class="btn btn-reset">Сбросить</button>
	</div>
</form>