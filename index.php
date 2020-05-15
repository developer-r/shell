<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>

<div class="content section-main">
    <div class="section-main_bg section-main_bg_1"></div>
    <div class="section-main_bg section-main_bg_2"></div>
    <div class="wrapper">
        <div class="section-main_content">
            <h1 class="section-main_title">
                <!-- title -->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH . "/include/title.php"
                    )
                );?>
            </h1>

            <div class="section-main_filters">
                <div class="filter_title">Подбор масла</div>
                <form class="filter_row">
                    <div class="filter_col"><select class="select__filter" name="Brand[]" multiple="multiple"
                                                    id="Brand">
                            <option value="Slow">Slow</option>
                            <option value="Medium">Medium</option>
                            <option value="Fast">Fast</option>
                            <option value="Faster">Faster</option>
                        </select></div>
                    <div class="filter_col"><select class="select__filter" name="Kind[]" multiple="multiple" id="Kind">
                            <option value="LA">Легковые автомобили</option>
                            <option value="VD">Внедорожники</option>
                            <option value="GA">Грузовые автомобили и автобусы</option>
                            <option value="MT">Мототехника</option>
                            <option value="SS">Строительная и с/х техника</option>
                            <option value="SI">Садовая техника и инструмент</option>
                        </select></div>
                    <div class="filter_col"><select class="select__filter" name="Application[]" multiple="multiple"
                                                    id="Application">
                            <option value="D">Двигатель</option>
                            <option value="T">Топливная система</option>
                        </select></div>
                    <div class="filter_col"><select class="select__filter" name="Oil[]" multiple="multiple" id="Oil">
                            <option value="S">Синтетическое</option>
                            <option value="PS">Полусинтетическое</option>
                            <option value="M">Минеральное</option>
                        </select></div>
                    <div class="filter_col"><select class="select__filter" name="Viscosity[]" multiple="multiple"
                                                    id="Viscosity">
                            <option value="5W-30">5W-30</option>
                            <option value="5W-40">5W-40</option>
                            <option value="10W-40">10W-40</option>
                            <option value="0W-30">0W-30</option>
                            <option value="0W-20">0W-20</option>
                        </select></div>
                    <div class="filter_col">
                        <button class="filter_button" type="submit">Подобрать</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>