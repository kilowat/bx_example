<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$_REQUEST["SECTION_CODE_PATH"] = $_REQUEST["SECTION_CODE_PATH"] ? $_REQUEST["SECTION_CODE_PATH"] : $_REQUEST["SECTION_CODE"];

$APPLICATION->IncludeComponent(
	"bitrix:catalog.smart.filter", 
	"vue_filter", 
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CONVERT_CURRENCY" => "N",
		"DISPLAY_ELEMENT_COUNT" => "Y",
		"FILTER_NAME" => "arrFilter",
		"FILTER_VIEW_MODE" => "vertical",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalog",
		"PAGER_PARAMS_NAME" => "arrPager",
		"PREFILTER_NAME" => "smartPreFilter",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"SAVE_IN_SESSION" => "N",
		"SECTION_CODE" => Helper::parseSectionPathUrl(),
		"SECTION_CODE_PATH" => $_REQUEST["SECTION_CODE_PATH"],
		"SECTION_DESCRIPTION" => "-",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_TITLE" => "-",
		"SEF_MODE" => "Y",
		"SEF_RULE" => "/catalog/#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply",
		"SMART_FILTER_PATH" => $_REQUEST["SMART_FILTER_PATH"],
		"TEMPLATE_THEME" => "blue",
		"XML_EXPORT" => "N",
		"COMPONENT_TEMPLATE" => "vue_filter",
		"POPUP_POSITION" => "left",
		"AJAX_MODE" => "Y",
		"FILTER_AJAX_URL" => "/filter-ajax",
		"REPLACE_URL_PATH" => "/catalog"
	),
	false
);

?>