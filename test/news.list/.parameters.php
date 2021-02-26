<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentParameters = array(
    "GROUPS" => array(),
    "PARAMETERS" => array(
        "IBLOCK_ID" => array(
            "PARENT" => "BASE",
            "NAME" => "ID Инфоблока",
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => "",
        ),
        "SECTION_ID" => array(
            "PARENT" => "BASE",
            "NAME" => "ID раздела",
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => "",
        ),
        "NAV_COUNT" => array(
            "PARENT" => "BASE",
            "NAME" => "количество элементов на странице.",
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => "",
        ),
    ),
);
?>