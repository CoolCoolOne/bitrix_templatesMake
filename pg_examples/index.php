<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Стэк технологий");
?>тут наши МОИ работы<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.comments",
	"",
Array()
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>