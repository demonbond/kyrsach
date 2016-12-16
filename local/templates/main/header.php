<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?use Bitrix\Main\Localization\Loc; use Bitrix\Main\Page\Asset; Loc::loadMessages(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="LANGUAGE_ID?">
<head>
<title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/templatemo_style.css");?>

    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/ddsmoothmenu.css");?>

<?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/js/jquery.min.js", true);?>
<?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/js/ddsmoothmenu.js", true);?>
    <script type="text/javascript">

        ddsmoothmenu.init({
            mainmenuid: "templatemo_menu", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })

    </script>

<?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/styles.css");?>
<?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/scripts/mootools-1.2.1-core.js", true);?>
<?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/scripts/mootools-1.2-more.js", true);?>
<?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/scripts/slideitmoo-1.1.js", true);?>


</head>

<body id="home">
<?$APPLICATION->ShowPanel();?>

<div id="templatemo_wrapper">
    <?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array(
        "COMPONENT_TEMPLATE" => ".default",
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
    ) );?>
	<div id="templatemo_header">
        <div id="header_right">
            <ul id="language">
                <li><a><img src="<?=SITE_TEMPLATE_PATH;?>/images/usa.png" alt="English" /></a></li>
                <li><a><img src="<?=SITE_TEMPLATE_PATH;?>/images/china.png" alt="Chinese" /></a></li>
                <li><a><img src="<?=SITE_TEMPLATE_PATH;?>/images/germany.png" alt="Germany" /></a></li>
                <li><a><img src="<?=SITE_TEMPLATE_PATH;?>/images/india.png" alt="Indian" /></a></li>
            </ul>
            <div class="cleaner"></div>
            <div id="templatemo_search">
                <form action="#" method="get">
                  <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
         </div> <!-- END -->

    </div> <!-- END of header -->
    <div id="templatemo_main_top">
        <?$APPLICATION->IncludeComponent("bitrix:menu", "TP_menu", Array(
            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
            "DELAY" => "N",	// Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "1",	// Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                0 => "",
                1 => "",
                2 => "",
            ),
            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "A",	// Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
        ),
            false
        );?>
    </div>
    <div id="templatemo_main">
        <?$APPLICATION->IncludeComponent("bitrix:photo.section", "slader", Array(
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
            "BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем фотографии
            "ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки фотографий в разделе
            "FIELD_CODE" => array(	// Поля
                0 => "ID",
                1 => "NAME",
                2 => "SORT",
                3 => "PREVIEW_PICTURE",
                4 => "",
            ),
            "FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
            "IBLOCK_ID" => "9",	// Инфоблок
            "IBLOCK_TYPE" => "content",	// Тип инфоблока
            "LINE_ELEMENT_COUNT" => "3",	// Количество фотографий, выводимых в одной строке таблицы
            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
            "META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
            "META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
            "PAGER_TITLE" => "Фотографии",	// Название категорий
            "PAGE_ELEMENT_COUNT" => "20",	// Количество элементов на странице
            "PROPERTY_CODE" => array(	// Свойства
                0 => "URL",
                1 => "",
            ),
            "SECTION_CODE" => "",	// Код раздела
            "SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
            "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
            "SECTION_USER_FIELDS" => array(	// Свойства раздела
                0 => "",
                1 => "",
            ),
            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
            "SET_STATUS_404" => "N",	// Устанавливать статус 404
            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
            "SHOW_404" => "N",	// Показ специальной страницы
        ),
            false
        );?>


        <?$APPLICATION->IncludeComponent("bitrix:menu", "left_menu", Array(
            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
            "DELAY" => "N",	// Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "2",	// Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                0 => "",
                1 => "",
                2 => "",
            ),
            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "A",	// Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
            "ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
            "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
        ),
            false
        );?>


        <div id="sidebar">

            <div id="newsletter">

            </div>
        </div> <!-- END of sidebar -->

        <div id="content">
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
