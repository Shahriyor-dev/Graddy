<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!CSite::InDir('/index.php')): ?>
	</div> <!-- .container -->
	</section> <!-- .content -->
<? endif; ?>

<footer class="footer ">
	<div class="container-xxl ">
		<div class="footer-logo ">
			<? $APPLICATION->IncludeFile(
				SITE_TEMPLATE_PATH . "/inc/footer_logo.php",
				array(),
				array("MODE" => "html", "NAME" => "включаемую область")
			); ?>
		</div>
		<div class="footer-top row justify-content-between align-items-start ">
			<div class="footer-info col-4 col-sm-12 ">
				<div class="footer-info-item footer-info-address ">
					<? $APPLICATION->IncludeFile(
						SITE_TEMPLATE_PATH . "/inc/footer_address.php",
						array(),
						array("MODE" => "html", "NAME" => "включаемую область")
					); ?>
				</div>
				<? $APPLICATION->IncludeFile(
					SITE_TEMPLATE_PATH . "/inc/footer_phone.php",
					array(),
					array("MODE" => "html", "NAME" => "включаемую область")
				); ?>
				<div class="footer-info-item footer-info-occupy ">
					<? $APPLICATION->IncludeFile(
						SITE_TEMPLATE_PATH . "/inc/footer_work-time.php",
						array(),
						array("MODE" => "html", "NAME" => "включаемую область")
					); ?>
				</div>
			</div>
			<div class="footer-items col d-flex justify-content-around ">
				<div class="footer-item footer-item-1 col ">
					<h5 class="footer-item-title ">
						<? $APPLICATION->IncludeFile(
							SITE_TEMPLATE_PATH . "/inc/footer_menu-title1.php",
							array(),
							array("MODE" => "html", "NAME" => "включаемую область")
						); ?>
					</h5>
					<? $APPLICATION->IncludeComponent(
						"bitrix:menu",
						"bottom",
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "bottom1",
							"USE_EXT" => "Y",
							"COMPONENT_TEMPLATE" => "bottom"
						),
						false
					); ?>
				</div>
				<div class="footer-item footer-item-2 col ">
					<h5 class="footer-item-title ">
						<? $APPLICATION->IncludeFile(
							SITE_TEMPLATE_PATH . "/inc/footer_menu-title2.php",
							array(),
							array("MODE" => "html", "NAME" => "включаемую область")
						); ?>
					</h5>
					<? $APPLICATION->IncludeComponent(
						"bitrix:menu",
						"bottom",
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(""),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "bottom2",
							"USE_EXT" => "Y"
						)
					); ?>
				</div>
			</div>
			<div class="footer-social col-3 col-sm-12 ">
				<div class="footer-social-company ">
					<? $APPLICATION->IncludeFile(
						SITE_TEMPLATE_PATH . "/inc/footer_copyright.php",
						array(),
						array("MODE" => "html", "NAME" => "включаемую область")
					); ?>
				</div>
				<? $APPLICATION->IncludeComponent(
					"df:df_params",
					"bottom_social",
					array(
						"DF_CLASS_0" => "",
						"DF_CLASS_1" => "",
						"DF_CLASS_2" => "",
						"DF_LINK_0" => "#",
						"DF_LINK_1" => "#",
						"DF_LINK_2" => "#",
						"DF_TEXT_0" => "<img src=\"/local/templates/df_graddi/img/footer-social-1.svg \" alt=\"\">",
						"DF_TEXT_1" => "<img src=\"/local/templates/df_graddi/img/footer-social-2.svg \" alt=\" \">",
						"DF_TEXT_2" => "<img src=\"/local/templates/df_graddi/img/footer-social-3.svg \" alt=\" \">"
					)
				); ?>
			</div>
		</div>
		<div class="footer-bottom row d-flex justify-content-center align-items-center ">
			<? $APPLICATION->IncludeComponent(
				"df:df_params",
				"header_links",
				array(
					"DF_CLASS_0" => "footer-bottom-policy col-4 col-sm-5",
					"DF_CLASS_1" => "footer-bottom-map col-2",
					"DF_LINK_0" => "#",
					"DF_LINK_1" => "#",
					"DF_TEXT_0" => "Политика конфиденциальности персональных данных",
					"DF_TEXT_1" => "Карта сайта",
				)
			); ?>
		</div>
	</div>
</footer>
</body>
</html>