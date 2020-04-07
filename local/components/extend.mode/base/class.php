<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use \Bitrix\Main\Web\Json;

class CBaseComponent extends CBitrixComponent
{
    protected $arResponse = [];
    
    public function response()
    {
        echo Json::encode($this->arResponse);
    }
}