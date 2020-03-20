<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Покупателям");
$APPLICATION->AddChainItem("Покупателям", "/buyers/");
?>
<div class="content article">
    <div class="wrapper">

        <!-- title and breadcrumbs -->
        <?$APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "",
            array(
                "PATH" => "/",
                "SITE_ID" => "s1",
                "START_FROM" => "0",
                "COMPONENT_TEMPLATE" => ""
            ),
            false
        );?>
        <h1><span class="main-title"><?=$APPLICATION->ShowTitle(false)?></span></h1>

        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/buyers/text.php"
            )
        );?>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>