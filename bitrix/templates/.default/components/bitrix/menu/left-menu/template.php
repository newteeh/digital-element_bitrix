<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="sb_nav">
        <ul>

            <?
            $previousLevel = 0;
            foreach($arResult as $arItem):?>

            <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
                <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
            <?endif?>

            <?if ($arItem["IS_PARENT"]):?>

            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
            <li> <span class="sb_showchild"></span><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>open<?else:?>close<?endif?> current"><span><?=$arItem["TEXT"]?></span></a>
                <ul>
                    <?else:?>
                    <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                        <ul>
                            <?endif?>

                            <?else:?>

                                <?if ($arItem["PERMISSION"] > "D"):?>

                                    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                                        <li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>open<?else:?>close<?endif?>"><span><?=$arItem["TEXT"]?></span></a></li>
                                    <?else:?>
                                        <li><a href="<?=$arItem["LINK"]?>" <?if ($arItem["SELECTED"]):?> class="current"<?endif?>><span><?=$arItem["TEXT"]?></span></a></li>
                                    <?endif?>

                                <?else:?>

                                    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                                        <li><a href="" class="<?if ($arItem["SELECTED"]):?>open<?else:?>close<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><span><?=$arItem["TEXT"]?></span></a></li>
                                    <?else:?>
                                        <li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><span><?=$arItem["TEXT"]?></span></a></li>
                                    <?endif?>

                                <?endif?>

                            <?endif?>

                            <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

                            <?endforeach?>

                            <?if ($previousLevel > 1)://close last item tags?>
                                <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
                            <?endif?>

                        </ul>
    </div>
<?endif?>