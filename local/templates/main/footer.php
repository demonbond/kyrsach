<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
 <div id="templatemo_footer">
    	<div class="col col_16">
        	<h4>Categories</h4>
            <ul class="footer_menu">
			    <li><a href="#">Aenean et dolor diam</a></li>
                <li><a href="#">Aenean pulvinar</a></li>
                <li><a href="#">Cras bibendum auctor</a></li>
                <li><a href="#">Donec sodales bibendum</a></li>
		  </ul>
        </div>
        <div class="col col_16">
        	<h4>Pages</h4>
            <ul class="footer_menu">
            	<li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Privacy</a></li>
			</ul>
        </div>
     <div class="col col_16">
         <h4>Partners</h4>
         <ul class="footer_menu">
             <li><a href="http://www.flashmo.com/">Free Flash Templates</a></li>
             <li><a href="http://www.templatemo.com/">Free CSS Templates</a></li>
             <li><a href="http://www.koflash.com/">Website Gallery</a></li>
             <li><a href="http://www.webdesignmo.com/blog/">Web Design Resources</a></li>
         </ul>
     </div>
     <div class="col col_16">
         <h4>Social</h4>
             <?$APPLICATION->IncludeComponent("bitrix:news.list", "New.list", Array(
                 "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                 "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                 "AJAX_MODE" => "N",	// Включить режим AJAX
                 "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                 "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                 "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                 "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                 "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                 "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                 "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                 "CACHE_TYPE" => "A",	// Тип кеширования
                 "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                 "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                 "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                 "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                 "DISPLAY_NAME" => "Y",	// Выводить название элемента
                 "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                 "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                 "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                 "FIELD_CODE" => array(	// Поля
                     0 => "ID",
                     1 => "NAME",
                     2 => "SORT",
                     3 => "",
                 ),
                 "FILTER_NAME" => "",	// Фильтр
                 "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                 "IBLOCK_ID" => "10",	// Код информационного блока
                 "IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
                 "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                 "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                 "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                 "NEWS_COUNT" => "20",	// Количество новостей на странице
                 "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                 "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                 "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                 "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                 "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                 "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                 "PAGER_TITLE" => "Социальные сети",	// Название категорий
                 "PARENT_SECTION" => "",	// ID раздела
                 "PARENT_SECTION_CODE" => "",	// Код раздела
                 "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                 "PROPERTY_CODE" => array(	// Свойства
                     0 => "URL",
                     1 => "",
                 ),
                 "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                 "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                 "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                 "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                 "SET_STATUS_404" => "N",	// Устанавливать статус 404
                 "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                 "SHOW_404" => "N",	// Показ специальной страницы
                 "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
                 "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                 "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                 "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
             ),
                 false
             );?>
     </div>
        <div class="col col_13 no_margin_right">
        	<h4>About Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper quam sit amet turpis rhoncus id venenatis tellus sollicitudin. Fusce ullamcorper, dolor non mollis pulvinar, turpis tortor commodo nisl. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
        </div>

        <div class="cleaner h40"></div>
		<center>
            <div class="copy">Copyright &copy; <?=date();?>.</div>
		</center>
    </div> <!-- END of footer -->