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


<? if ($arResult["PICTURES"]): ?>
	<section class="gallery">
		<div class="container-xxl ">
			<h1 class="title about-title "><?= $arParams['CUSTOM_PROPERTY_TITLE'] ?></h1>
			<div class="gallery-slider">
				<div class="swiper-gallery swiper ">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<? foreach ($arResult["PICTURES"] as $i => $arPart): ?>
							<div class="swiper-slide">
								<div class="row">
									<? foreach ($arPart as $i2 => $arItem): ?>
										<div class="col-12">
											<a class="d-block mb-4" data-fancybox="gallery" href="<?= $arItem["SRC"] ?>">
												<img src="<?= $arItem["SMALL_SRC"] ?>" alt="<?= $arResult["NAME"] ?>">
											</a>
										</div>
									<? endforeach; ?>
								</div>
							</div>
						<? endforeach; ?>
					</div>
					<!-- If we need navigation buttons -->
				</div>
				<div class="swiper-button-prev swiper-button-prev-2 "></div>
				<div class="swiper-button-next swiper-button-next-2"></div>
			</div>
		</div>
	</section>
<? endif; ?>