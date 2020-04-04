<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Web\Json;

$this->setFrameMode(true);

?>
<catalog-list
    items_json='<?=Json::encode($arResult["VUE_ITEMS"])?>'
    sort_params='<?=Json::encode($arParams["SORT_PARAMS"])?>' 
    ajax_url='<?=$arParams["AJAX_URL"]?>'
    catalog_url='<?=$arParams["CATALOG_URL"]?>'
    endpage="<?=$arResult["NAV_RESULT"]->nEndPage ?>"
    navpagenomer="<?=$arResult["NAV_RESULT"]->NavPageNomer ?>"
    navnum="<?=$arResult["NAV_RESULT"]->NavNum ?>"
    >
    <div slot="catalog-list-slot" class="catalog-list">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="catalog-item"> 
                <a class="item-name" slot="item-name" href="<?=$arItem["DETAIL_PAGE_URL"]?>" title="<?=$arItem["NAME"]?>"><?=$arItem["NAME"]?></a>
                <a class="item-pic" slot="item-pic" href="<?=$arItem["DETAIL_PAGE_URL"]?>" title="<?=$arItem["NAME"]?>">
                    <span class="pic-bg" role="img" style="background-image:url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>)"></span>
                </a>
            </div>
        <?endforeach?>
    </div>
    <div>
        <?=$arResult["NAV_STRING"]?>
    </div>
 
</catalog-list>
