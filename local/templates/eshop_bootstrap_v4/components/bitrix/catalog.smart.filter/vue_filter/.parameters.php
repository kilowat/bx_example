<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters['DISPLAY_ELEMENT_COUNT'] = array(
	'PARENT' => 'VISUAL',
	'NAME' => GetMessage('TP_BCSF_DISPLAY_ELEMENT_COUNT'),
	'TYPE' => 'CHECKBOX',
	'DEFAULT' => 'Y',
);

$arTemplateParameters['FILTER_AJAX_URL'] = array(
	'PARENT' => 'BASE',
	'NAME' => "Ajax url",
	'TYPE' => 'STRING',
	'DEFAULT' => "",
);
?>