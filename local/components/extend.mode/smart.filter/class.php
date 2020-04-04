<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

CBitrixComponent::includeComponentClass("bitrix:catalog.smart.filter");

class CSmartFilterExtended extends \CBitrixCatalogSmartFilter
{
    public function executeComponent()
	{
        $this->includeComponentTemplate($this->page);
	}
} 