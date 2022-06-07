<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult['TREE'])): ?>

	<nav class="mobile-menu ">
		<ul>
			<?
			foreach ($arResult['TREE'] as $i => $arItem):?>
				<li class="<?= $arItem["ITEMS"] ? 'mobile-menu-drop' : '' ?>">
					<a href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?></a>
					<? if ($arItem['ITEMS']): ?>
						<img src="<?= SITE_TEMPLATE_PATH ?>/img/menu-arrow-dark.svg " alt=" ">
						<ul class="mobile-drop-list ">
							<? foreach ($arItem['ITEMS'] as $arItem2): ?>
								<li>
									<a href="<?= $arItem2['LINK'] ?>"><?= $arItem2['TEXT'] ?></a>
									<? if ($arItem2['ITEMS']): ?>
										<ul>
											<? foreach ($arItem2['ITEMS'] as $arItem3): ?>
												<li><a href="<?= $arItem3['LINK'] ?>"><?= $arItem3['TEXT'] ?></a></li>
											<? endforeach; ?>
										</ul>
									<? endif; ?>
								</li>
							<? endforeach; ?>
						</ul>
					<? endif; ?>
				</li>
			<? endforeach ?>
		</ul>
	</nav>
<? endif ?>
