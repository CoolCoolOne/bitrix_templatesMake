<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Стэк технологий");
?>Мы используем 1с-Битрикс! Он же "БУС" CMS и Фреймворк <br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"INIT_MAP_TYPE" => "PUBLIC_HYBRID",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:56.25623635995435;s:10:\"yandex_lon\";d:44.01459013809688;s:12:\"yandex_scale\";i:10;s:9:\"POLYLINES\";a:1:{i:0;a:3:{s:6:\"POINTS\";a:2:{i:0;a:2:{s:3:\"LAT\";d:56.27528286832376;s:3:\"LON\";d:44.018884982118465;}i:1;a:2:{s:3:\"LAT\";d:56.302014869769664;s:3:\"LON\";d:44.09990915204034;}}s:5:\"TITLE\";s:0:\"\";s:5:\"STYLE\";a:2:{s:11:\"strokeColor\";s:8:\"FF00007F\";s:11:\"strokeWidth\";i:3;}}}}",
		"MAP_WIDTH" => "600",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"MAP_ID" => "",
		"API_KEY" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>