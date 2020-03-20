<div class="catalog-modal" id="catalog-modal">
    <div class="header header_main">
        <a class="logo" id="logo" href="/">
            <img class="logo_media" src="img/logo-grey.svg" alt="" title=""/>
            <img class="logo_search" src="img/logo.svg" alt="" title=""/>
        </a>
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
            "CATALOG_MODALS" => true
        ),
            false
        );?>
        <div class="phone_wrapper" id="phone"><a class="phone_link" href="tel:+73912054005">+ 7 (391) 228-70-80</a><a
                class="phone_modal" href="">Заказать звонок</a></div>
        <div class="menuright" id="menurighttrigger"><a class="menuright_link menuright_link_basket" data-fancybox=""
                                                        href="#basket" data-options='{"touch":false}'>
                <div class="menuright_icon"><img src="img/basket.svg" alt="" title=""/></div>
                <span class="menuright_count">12</span></a><a class="menuright_link" href="">
                <div class="menuright_icon"><img src="img/human.svg" alt="" title=""/></div>
            </a><a class="menuright_link" href="">
                <div class="menuright_icon"><img src="img/clock.svg" alt="" title=""/></div>
                <span class="menuright_count">12</span></a><a class="js-catalog-open menuright_link" id="search"
                                                              data-fancybox="" data-src="#catalog-modal"
                                                              href="javascript:;">
                <div class="menuright_icon"><img src="img/search.svg" alt="" title=""/></div>
            </a></div>
    </div>
    <a class="form_close form_close__left form_close--catalog" id="menuleftClose" data-fancybox-close="" title="Close">
        <div class="catalog-line--left__wrapper catalog-line--left__wrapper__1">
            <div class="needtohide" data-fancybox-close="" title="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="29" viewBox="0 0 52 29">
                    <path fill="#000" fill-rule="nonzero" d="M0 0h52v3H0V0zm0 13h52v3H0v-3zm0 13h52v3H0v-3z"></path>
                </svg>
            </div>
        </div>
        <div class="catalog-line--left__wrapper__2"><span
                class="catalog-line--left__text catalog-line--left__text__white">Каталог</span></div>
    </a>
    <div class="form_close form_close__right formCloseRight"><a class="form_close--catalog fancybox-close-small"
                                                                data-fancybox-close="" title="Close">
            <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
                <path fill="#59595B" fill-rule="nonzero"
                      d="M19.5 17.373L36.873 0 39 2.127 21.627 19.5 39 36.873 36.873 39 19.5 21.627 2.127 39 0 36.873 17.373 19.5 0 2.127 2.127 0 19.5 17.373z"></path>
            </svg>
        </a></div>
    <div class="fancy">
        <div class="fancy-inner">
            <div class="catalog-double content custom-scroll--container">
                <div class="catalog-double__left">
                    <div class="catalog-double__list">
                        <div class="modal-catalog" data-simplebar="init">
                            <div class="simplebar-track vertical" style="visibility: hidden;">
                                <div class="simplebar-scrollbar"></div>
                            </div>
                            <div class="simplebar-track horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar"></div>
                            </div>
                            <div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;">
                                <div class="simplebar-content" style="padding-bottom: 17px">
                                    <div class="modal-catalog__item">
                                        <div class="accordion" id="accordion">
                                            <div class="accordion_label" onclick="">Shell
                                                <div class="accordion_brand"
                                                     style="background-image: url('img/brand2.png'); background-position: 95px 90px; width: 250px; height: 180px; background-size: contain;"></div>
                                            </div>
                                            <div class="accordion_block">
                                                <ul>
                                                    <li><a href="#">Оборудование (3)</a></li>
                                                    <li><a href="#">Потребительская и Профессиональная серия (48)</a>
                                                    </li>
                                                    <li><a href="#">Серия для АЗС и Топливных комплексов (3)</a></li>
                                                </ul>
                                                <div class="accordion_brand"
                                                     style="background-image: url('img/brand2.png'); background-position: 95px 90px; width: 250px; height: 180px; background-size: contain;"></div>
                                            </div>
                                            <div class="accordion_label" onclick="">PEAK
                                                <div class="accordion_brand"
                                                     style="background-image: url('img/brand3.png'); background-position: 22px 15px; width: 330px; height: 150px;"></div>
                                            </div>
                                            <div class="accordion_block">
                                                <ul>
                                                    <li><a href="#">Оборудование (3)</a></li>
                                                    <li><a href="#">Потребительская и Профессиональная серия (48)</a>
                                                    </li>
                                                    <li><a href="#">Серия для АЗС и Топливных комплексов (3)</a></li>
                                                </ul>
                                                <div class="accordion_brand"
                                                     style="background-image: url('img/brand3.png'); background-position: 22px 15px; width: 330px; height: 150px;"></div>
                                            </div>
                                            <div class="accordion_label" onclick="">Wynn's
                                                <div class="accordion_brand"
                                                     style="background-image: url('img/brand1.png'); background-position: 0 0; width: 400px; height: 115px;"></div>
                                            </div>
                                            <div class="accordion_block">
                                                <ul>
                                                    <li><a href="#">Оборудование (3)</a></li>
                                                    <li><a href="#">Потребительская и Профессиональная серия (48)</a>
                                                    </li>
                                                    <li><a href="#">Серия для АЗС и Топливных комплексов (3)</a></li>
                                                </ul>
                                                <div class="accordion_brand"
                                                     style="background-image: url('img/brand1.png'); background-position: 0 0; width: 400px; height: 115px;"></div>
                                            </div>
                                            <div class="accordion_label" onclick="">PHANTOM
                                                <div class="accordion_brand"
                                                     style="background-image: url('img/brand5.png'); background-position: 5px 5px; width: 376px; height: 54px;"></div>
                                            </div>
                                            <div class="accordion_block">
                                                <ul>
                                                    <li><a href="#">Оборудование (3)</a></li>
                                                    <li><a href="#">Потребительская и Профессиональная серия (48)</a>
                                                    </li>
                                                    <li><a href="#">Серия для АЗС и Топливных комплексов (3)</a></li>
                                                </ul>
                                                <div class="accordion_brand"
                                                     style="background-image: url('img/brand5.png'); background-position: 5px 5px; width: 376px; height: 54px;"></div>
                                            </div>
                                            <div class="accordion_label" onclick="">Country
                                                <div class="accordion_brand"
                                                     style="background-image: url('img/brand4.png'); background-position: 10px 45px; width: 305px; height: 185px;"></div>
                                            </div>
                                            <div class="accordion_block">
                                                <ul>
                                                    <li><a href="#">Оборудование (3)</a></li>
                                                    <li><a href="#">Потребительская и Профессиональная серия (48)</a>
                                                    </li>
                                                    <li><a href="#">Серия для АЗС и Топливных комплексов (3)</a></li>
                                                </ul>
                                                <div class="accordion_brand"
                                                     style="background-image: url('img/brand4.png'); background-position: 10px 45px; width: 305px; height: 185px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog-double__right">
                    <form class="search-modal search_form" method="get" action="">
                        <div class="search-modal__wrapper" data-simplebar="init">
                            <div class="simplebar-track vertical" style="visibility: hidden;">
                                <div class="simplebar-scrollbar"></div>
                            </div>
                            <div class="simplebar-track horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar"></div>
                            </div>
                            <div class="simplebar-scroll-content" style="padding-right: 17px;">
                                <div class="simplebar-content simplebar-content__right" style="padding-bottom: 25px">
                                    <div class="search-modal__item"><h3>Что ищем?</h3>
                                        <div class="search_menuleft"><label class="txt-input txt-input_search"><span
                                                    class="txt-input__wrap"><input class="txt-input__field" type="text"
                                                                                   placeholder="Helix"/><a
                                                        class="input-clear" href="#"></a></span></label></div>
                                        <div class="resalt_wrapper" id="resalt" style="display: none;">
                                            <div class="resalt_row">
                                                <div class="resalt_img"><img src="img/search-1.png" alt="" title=""/>
                                                </div>
                                                <div class="resalt_title">Helix Ultra 0W-40</div>
                                            </div>
                                            <div class="resalt_row">
                                                <div class="resalt_img"><img src="img/search-2.png" alt="" title=""/>
                                                </div>
                                                <div class="resalt_title">Антифриз/Жидкость охлаждающая (концентрат)
                                                    PEAK FINAL CHARGE GLOBAL /красный G12/ (235 кг/207 л)
                                                </div>
                                            </div>
                                            <div class="resalt_row">
                                                <div class="resalt_img"><img src="img/search-3.png" alt="" title=""/>
                                                </div>
                                                <div class="resalt_title">Helix HX8 Synthetic</div>
                                            </div>
                                            <div class="resalt_row">
                                                <div class="resalt_img"><img src="img/search-1.png" alt="" title=""/>
                                                </div>
                                                <div class="resalt_title">Helix Ultra 0W-40</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="button button_red"><span>Найти всё</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>