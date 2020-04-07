<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Sale\Basket;
use Bitrix\Sale\Fuser;

CBitrixComponent::includeComponentClass("extend.mode:base");

class CBasket extends \CBaseComponent
{
    private $basket;
    
    private function initBasket()
    {
        Loader::includeModule('sale');
        $this->basket = Basket::loadItemsForFUser(Fuser::getId(), Bitrix\Main\Context::getCurrent()->getSite());
    }

    private function getData()
    {
        $this->initBasket();
        
        $items = [];
        $basketPrice = $this->basket->getPrice(); // цена корзины
        $fullPrice = $this->basket->getBasePrice(); // цена корзины без скидки
        $quantity = array_sum($this->basket->getQuantityList());// - количество товаров в корзине
  
        foreach ($this->basket as $basketItem) {
            $items[] = [
                "BASKET_ID" => $basketItem->getField('ID'),
                "PRODUCT_ID" => $basketItem->getField('PRODUCT_ID'),
                "PRICE" => $basketItem->getPrice(),
                "QUANTITY" => $basketItem->getQuantity(),
            ];
        }

        $result = [
            'PRICE' => $basketPrice,
            'PRICE_WITOUT_DISCOUNT' => $fullPrice,
            'QUANTITY' => $quantity,
            'ITEMS' => $items,
        ];

        return $result;
    }

    public function dataAction()
    { 
        $this->arResponse = $this->getData();
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
} 