<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="stylesheet" href="/bitrix/templates/.default/template_style.css">

    <script type="text/javascript" src="/bitrix/templates/.default/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/bitrix/templates/.default/js/slides.min.jquery.js"></script>
    <script type="text/javascript" src="/bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js"></script>
    <script type="text/javascript" src="/bitrix/templates/.default/js/functions.js"></script>


    <link rel="shortcut icon" type="image/x-icon" href="/bitrix/templates/.default/favicon.ico">

    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrap">
    <div class="hd_header_area">
        <div class="hd_header">
            <table>
                <tr>
                    <td rowspan="2" class="hd_companyname">
                        <h1><a href="">Мебельный магазин</a></h1>
                    </td>
                    <td rowspan="2" class="hd_txarea">
                        <span class="tel">8 (495) 212-85-06</span>	<br/>
                        <?=GetMessage('WORKING_TIME')?> <span class="workhours">ежедневно с 9-00 до 18-00</span>
                    </td>
                    <td style="width:232px">
                        <form action="">
                            <div class="hd_search_form" style="float:right;">
                                <input placeholder="Поиск" type="text"/>
                                <input type="submit" value=""/>
                            </div>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 11px;">
							<span class="hd_singin"><a id="hd_singin_but_open" href="">Войти на сайт</a>
							<div class="hd_loginform">
								<span class="hd_title_loginform">Войти на сайт</span>
								<form name="" method="" action="">

									<input placeholder="Логин"  type="text">
									<input  placeholder="Пароль"  type="password">
									<a href="/" class="hd_forgotpassword">Забыли пароль</a>

									<div class="head_remember_me" style="margin-top: 10px">
										<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
										<label for="USER_REMEMBER_frm" title="Запомнить меня на этом компьютере">Запомнить меня</label>
									</div>
									<input value="Войти" name="Login" style="margin-top: 20px;" type="submit">
									</form>
								<span class="hd_close_loginform">Закрыть</span>
							</div>
							</span><br>
                        <a href="" class="hd_signup">Зарегистрироваться</a>
                    </td>
                </tr>
            </table>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "top_multi",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "2",
                    "MENU_CACHE_GET_VARS" => array(0=>"",),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N"
                )
            );?><br>
        </div>
    </div>

    <!--- // end header area --->

    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "slider",
        Array(
            "ACTIVE_DATE_FORMAT" => "j F Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "COMPONENT_TEMPLATE" => "slider",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "N",
            "DISPLAY_PICTURE" => "N",
            "DISPLAY_PREVIEW_TEXT" => "N",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(0=>"",1=>"",),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "6",
            "IBLOCK_TYPE" => "content",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "10",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(0=>"LINK",1=>"",),
            "SET_BROWSER_TITLE" => "Y",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "Y",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N"
        )
    );?>


    <!--- // end slider area --->

    <div class="main_container homepage">

        <!-- events -->
        <div class="ev_events">
            <div class="ev_h">
                <h3>Ближайшие события</h3>
                <a href="" class="ev_allevents">Все мероприятия &rarr;</a>
            </div>
            <ul class="ev_lastevent">
                <li>
                    <h4><a href="">29 августа 2012, Москва</a></h4>
                    <p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
                </li>
                <li>
                    <h4><a href="">30 августа 2012, Санкт-Петербург</a></h4>
                    <p>Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</p>
                </li>
                <li>
                    <h4><a href="">31 августа 2012, Краснодар</a></h4>
                    <p>Открытие нового магазина в нашей дилерской сети.</p>
                </li>
            </ul>
            <div class="clearboth"></div>
        </div>
        <!-- // end events -->
        <div class="cn_hp_content">
            <div class="cn_hp_category">
                <ul>
                    <li>
                        <img src="/bitrix/templates/.default/content/1.png" alt=""/>
                        <h2><a href="">Мягкая мебель</a></h2>
                        <p>Диваны, кресла и прочая мягкая мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                        <div class="clearboth"></div>
                    </li>
                    <li>
                        <img src="/bitrix/templates/.default/content/2.png" alt=""/>
                        <h2><a href="">Офисная мебель</a></h2>
                        <p>Диваны, столы, стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                        <div class="clearboth"></div>
                    </li>
                    <li>
                        <img src="/bitrix/templates/.default/content/3.png" alt=""/>
                        <h2><a href="">Мебель для кухни</a></h2>
                        <p>Полки, ящики, столы и стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                        <div class="clearboth"></div>
                    </li>
                    <li>
                        <img src="/bitrix/templates/.default/content/4.png" alt=""/>
                        <h2><a href="">Детская мебель</a></h2>
                        <p>Кровати, стулья, мягкая детская мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                        <div class="clearboth"></div>
                    </li>
                </ul>
                <a href="" class="cn_hp_category_more">Все разделы каталога &rarr;</a>
            </div>
            <div class="cn_hp_post">
                <div class="cn_hp_post_new">
                    <h3>Новинки</h3>
                    <img src="/bitrix/templates/.default/content/7.png" alt=""/>
                    <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                    <div class="clearboth"></div>
                </div>
                <div class="cn_hp_post_action">
                    <h3>Акции</h3>
                    <img src="/bitrix/templates/.default/content/7.png" alt=""/>
                    <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                    <div class="clearboth"></div>
                </div>
                <div class="cn_hp_post_bestsellersn">
                    <h3>Хиты продаж</h3>
                    <img src="/bitrix/templates/.default/content/7.png" alt=""/>
                    <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                    <div class="clearboth"></div>
                </div>
            </div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "news_right",
                Array(
                    "ACTIVE_DATE_FORMAT" => "j F Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(0=>"",1=>"",),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "1",
                    "IBLOCK_TYPE" => "news",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "4",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(0=>"",1=>"",),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );?>
            <div class="clearboth"></div>
        </div>
    </div>

    <script type="text/javascript" >
        $(document).ready(function(){

            $("#foo").carouFredSel({
                items:2,
                prev:'#rwprev',
                next:'#rwnext',
                scroll:{
                    items:1,
                    duration:2000
                }
            });
        });
    </script>

    <div class="rw_reviewed">
        <div class="rw_slider">
            <h4>Отзывы</h4>
            <ul id="foo">
                <li>
                    <div class="rw_message">
                        <img src="/bitrix/templates/.default/content/8.png" class="rw_avatar" alt=""/>
                        <span class="rw_name">Сергей Антонов</span>
                        <span class="rw_job">Руководитель финансового отдела “Банк+”</span>
                        <p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
                        <div class="clearboth"></div>
                        <div class="rw_arrow"></div>
                    </div>
                </li>
                <li>
                    <div class="rw_message">
                        <img src="/bitrix/templates/.default/content/8.png" class="rw_avatar" alt=""/>
                        <span class="rw_name">Дмитрий Иванов</span>
                        <span class="rw_job">Генеральный директор группы компаний "Офис+"</span>
                        <p>“В магзине предоставили потрясающий выбор расцветок, а также, получил большую скидку по карте постоянного клиента.”</p>
                        <div class="clearboth"></div>
                        <div class="rw_arrow"></div>
                    </div>
                </li>
                <li>
                    <div class="rw_message">
                        <img src="/bitrix/templates/.default/content/8.png" class="rw_avatar" alt=""/>
                        <span class="rw_name">Сергей Антонов</span>
                        <span class="rw_job">Руководитель финансового отдела “Банк+”</span>
                        <p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
                        <div class="clearboth"></div>
                        <div class="rw_arrow"></div>
                    </div>
                </li>
            </ul>
            <div id="rwprev"></div>
            <div id="rwnext"></div>
            <a href="" class="rw_allreviewed">Все отзывы</a>
        </div>
    </div>
    <!-- workarea -->