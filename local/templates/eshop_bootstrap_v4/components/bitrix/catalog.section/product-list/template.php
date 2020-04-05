<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Web\Json;

$this->setFrameMode(true);
if(defined('AJAX_MODE')){
    $APPLICATION->RestartBuffer();
    echo Json::encode($arResult["VUE_ITEMS"]);
    die();
}
?>
<catalog-list
    sort_params='<?=Json::encode($arParams["SORT_PARAMS"])?>' 
    ajax_url='<?=$arParams["AJAX_URL"]?>'
    catalog_url='<?=$arParams["CATALOG_URL"]?>'
    endpage="<?=$arResult["NAV_RESULT"]->nEndPage ?>"
    navpagenomer="<?=$arResult["NAV_RESULT"]->NavPageNomer ?>"
    navnum="<?=$arResult["NAV_RESULT"]->NavNum ?>"
    >
    <div slot="catalog-list" class="catalog-list" style="opacity:0">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <catalog-item class="catalog-item"> 
                <a slot="item-name" href="<?=$arItem["DETAIL_PAGE_URL"]?>" title="<?=$arItem["NAME"]?>"><?=$arItem["NAME"]?></a>
                <a slot="item-pic"  href="<?=$arItem["DETAIL_PAGE_URL"]?>" title="<?=$arItem["NAME"]?>">
                    <span class="pic-bg" role="img" style="background-image:url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>)"></span>
                </a>
            </catalog-item>
        <?endforeach?>
    </div>
    <div>
        <?=$arResult["NAV_STRING"]?>
    </div>
 
</catalog-list>