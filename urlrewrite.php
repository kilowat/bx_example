<?php
$arUrlRewrite=array (
  13 => 
  array (
    'CONDITION' => '#^/catalog-ajax/(.+?)/filter/(.+?)/apply\\??(.*)#',
    'RULE' => 'SECTION_CODE_PATH=$1&SMART_FILTER_PATH=$2&$3',
    'ID' => '',
    'PATH' => '/local/api/catalog/catalog_list.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^/catalog/(.+?)/filter/(.+?)/apply\\??(.*)#',
    'RULE' => 'SECTION_CODE_PATH=$1&SMART_FILTER_PATH=$2&$3',
    'ID' => '',
    'PATH' => '/catalog/section.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/catalog-ajax/([0-9a-zA-Z_/-]+)(\\?(.*))?#',
    'RULE' => 'SECTION_CODE=$1&$2',
    'ID' => '',
    'PATH' => '/local/api/catalog/catalog_list.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/catalog/([0-9a-zA-Z_/-]+)(\\?(.*))?#',
    'RULE' => 'SECTION_CODE=$1&$2',
    'ID' => '',
    'PATH' => '/catalog/section.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  15 => 
  array (
    'CONDITION' => '#^/filter-ajax(\\?(.*))?#',
    'RULE' => '$1',
    'ID' => '',
    'PATH' => '/local/api/catalog/catalog_list.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/personal/order/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.order',
    'PATH' => '/personal/order/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.section',
    'PATH' => '/personal/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/store/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog.store',
    'PATH' => '/store/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
);
