<?//
//if (!defined("B_PROLOG_INCLUDED") || B_PROlOG_INCLUDED!==true)die();
//
//if (empty($arResult))
//    return "";
//
//$srtReturn = '<div class="bc_breadcrumbs"><ul>';
//
//for ($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++){
//
//    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
//    if ($arResult[$index]["LINK"] <> "")
//        $srtReturn .= '<li><a href="'.$arResult[$index]["LINK"].'" title "'.$title.'">'.$title.'</a></li>';
//    else
//        $srtReturn .= '<li>'.$title.'</li>';
//}
//$srtReturn .= '</ul><div class="clearboth"></div></div>';
//return $srtReturn
//?>
<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

// Задержка функции должна возвращать строку
if (empty($arResult)) {
    return "";
}

$strReturn = '<div class="bc_breadcrumbs"><ul>';

for ($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++) {
    $title = htmlspecialcharsEx($arResult[$index]["TITLE"]);

    if ($arResult[$index]["LINK"] <> "") {
        $strReturn .= '<li><a href="' . $arResult[$index]["LINK"] . '" title="' . $title . '">' . $title . '</a></li>';
    } else {
        $strReturn .= '<li>' . $title . '</li>';
    }
}

$strReturn .= '</ul><div class="clearboth"></div></div>';

return $strReturn;
?>

