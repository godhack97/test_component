<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 
$arComponentDescription = array(
"NAME" => GetMessage("Список новостей"),
"DESCRIPTION" => GetMessage("тестовое задание"),
"PATH" => array(
"ID" => "testing",
"CHILD" => array(
"ID" => "test",
"NAME" => "Список новостей"
)
),
"ICON" => "/images/icon.gif",
);
?>