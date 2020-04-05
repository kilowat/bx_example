<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use \Bitrix\Main\Web\Json;

$this->setFrameMode(true);
//var_dump($arResult);
?>

<smart-filter 
	params_json='<?=Json::encode($arParams)?>'>
</smart-filter>
