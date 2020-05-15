<!doctype html>
<html lang="ru">
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico" type="image/x-icon"/>

    <? $APPLICATION->ShowMeta("keywords") ?>
    <? $APPLICATION->ShowMeta("description") ?>
    <? $APPLICATION->ShowMeta("title") ?>

    <? $APPLICATION->ShowHead() ?>
    <? $APPLICATION->ShowPanel() ?>

    <?
    $assets = \Bitrix\Main\Page\Asset::getInstance();

    /* Fonds */
    $assets->addString("<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap&amp;subset=cyrillic' rel='stylesheet'/>");
    $assets->addString("<link href='https://fonts.googleapis.com/css?family=Marmelad&amp;display=swap&amp;subset=cyrillic' rel='stylesheet'/>");

    /* CSS */
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/js/owl.carousel.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/js/menuleft/libs.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/js/jquery-ui-1.12.1/jquery-ui.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/js/select/jquery.formstyler.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/js/multiselect/jquery.multiselect.css");

    /* JS */
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/menuleft/libs.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.inputmask.bundle.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/owl.carousel.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/owl.carousel2.thumbs.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery-ui-1.12.1/jquery-ui.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/select/jquery.formstyler.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/multiselect/jquery.multiselect.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/main.js");


    $page = $APPLICATION->GetCurPage();
    $url = array_values(array_diff(explode("/", $page), array('')));
    ?>
</head>

<!-- header -->
<header id="header">
    <div class="wrapper">
        <div class="header header_main">
            <a class="menu_mobile js-catalog-open" id="menu_mobile" data-fancybox="" data-src="#catalog-modal" href="javascript:;">
                <div class="needtohide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="52" height="29" viewBox="0 0 52 29">
                        <path fill="#000" fill-rule="nonzero" d="M0 0h52v3H0V0zm0 13h52v3H0v-3zm0 13h52v3H0v-3z"></path>
                    </svg>
                </div>
            </a>

            <!-- logo -->
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH . "/include/logo.php"
                )
            );?>

            <!-- menu top -->
            <?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "top_lvl2",	// Тип меню для остальных уровней
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "2",	// Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                    0 => "",
                ),
                "MENU_CACHE_TIME" => "36000",	// Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "Y",	// Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                "CATALOG_MODALS" => false
            ),
                false
            );?>

            <!-- phone -->
            <div class="phone_wrapper" id="phone">
                <a class="phone_link" href="tel:<?=$phone?>">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH . "/include/phone.php"
                        )
                    );?>
                </a>
                <a class="phone_modal" href="">Заказать звонок</a>
            </div>
            <a class="main-mobile_phone main-mobile_phone_main" href=""></a>
        </div>
    </div>
</header>

<!-- catalog modal -->
<? include INCLUDE_PATH . '/modals/catalog_modal.php' ?>

<!-- menu left -->
<? include INCLUDE_PATH . '/menu_left.php' ?>

<!-- menu right -->
<? include INCLUDE_PATH . '/menu_right.php' ?>

<!-- basket -->
<? include INCLUDE_PATH . '/modals/basket.php' ?>