<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Localization\Loc as Loc;

Loc::loadMessages(__FILE__);

$arComponentDescription = array(
	"NAME" => Loc::getMessage('EX_MD_SM_BASKET'),
	"DESCRIPTION" => Loc::getMessage('EX_MD_SM_BASKET_DESCRIPTION'),
	"SORT" => 10,
	"PATH" => array(
		"ID" => 'extend.mode',
		"NAME" => Loc::getMessage('EX_MD_PATH_NAME'),
		"SORT" => 10,
	),
);

?>