<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
// navigation
CModule::IncludeModule('main');
$nav = new \Bitrix\Main\UI\PageNavigation("nav");
$nav->allowAllRecords(true)
->setPageSize($arParams['NAV_COUNT'])
->initFromUri();

// ITEMS
$elements = \Bitrix\Iblock\ElementTable::getList(array(
    'order' => array(),
    'filter' => array('IBLOCK_SECTION_ID' =>$arParams["SECTION_ID"], 'IBLOCK_ID' => $arParams['IBLOCK_ID']),
    'select' =>  array('*'),
    "count_total" => true,
    "offset" => $nav->getOffset(),
    "limit" => $nav->getLimit(),
));
$nav->setRecordCount($elements->getCount());

$arResult['PAGE_COUNT'] = $elements->getCount()/$arParams['NAV_COUNT'];
while ($item = $elements->fetch()) {
    $arResult['ITEMS'][] = $item;
}
$this->IncludeComponentTemplate();
?> 
