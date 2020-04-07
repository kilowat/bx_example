<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$route = [
    [
        'component' => 'basket',
        'class' => 'CBasket'
    ]
];


if($_REQUEST['component'] && $_REQUEST["action"]){
    try{
        $component = "";
        $class = "";
        foreach($route as $item){
            if($item['component'] == $_REQUEST['component']){
                $component = $item['component'];
                $className = $item['class'];
                break;
            }
        }

        CBitrixComponent::includeComponentClass('extend.mode:'.$component);
       
        $action = $_REQUEST["action"]."Action";
        if(class_exists($className) && method_exists($className, $action)){
            $class = new $className();
            $class->$action();
            $class->response();
        }else{
            throw new Exception('Method or class not exist');
        }
        
    }catch(Exception $e){
        echo $e->getMessage();
    }
}