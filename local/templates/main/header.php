<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?use Bitrix\Main\Localization\Loc; use Bitrix\Main\Page\Asset; Loc::loadMessages(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="?ANGUAGE_ID?">
<head>
<title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/templatemo_style.css");?>

    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/ddsmoothmenu.css");?>

<?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/js/jquery.min.js", true);?>
<?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/js/ddsmoothmenu.js", true);?>


</script>

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
<script language="javascript" type="text/javascript">
    window.addEvents({
		'domready': function(){
    /* thumbnails example , div containers */
    new SlideItMoo({
        overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',
						itemsVisible: 5,
						elemsSlide: 2,
						duration: 200,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 171,
						showControls:1});
		},

	});

	function clearText(field)
	{
        if (field.defaultValue == field.value) field.value = '';
        else if (field.value == '') field.value = field.defaultValue;
    }
</script>

</head>

<body id="home">
<?$APPLICATION->ShowPanel();?>
<div id="templatemo_wrapper">
	<div id="templatemo_header">
        <?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array(
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
        ) );?>
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
    <div id="templatemo_middle">
        <img src="<?=SITE_TEMPLATE_PATH;?>/images/templatemo_image_02.png" width="400" height="200" alt="Image 01" />
        <h1>Introducing Web Store</h1>
        <p><a href="http://www.templatemo.com" target="_parent">Web Store</a> is a free css template for your personal or commercial websites. Feel free to download, edit and use this template for any purpose.</p>
        <a href="#" class="buy_now">Browse All Products</a>
    </div> <!-- END of middle -->
    <div id="templatemo_main">
        <div id="product_slider">
            <div id="SlideItMoo_outer">
                <div id="SlideItMoo_inner">
                    <div id="SlideItMoo_items">
                        <div class="SlideItMoo_element">

                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/gallery/01.jpg" width="160" height="120" alt="product 1" /></a>
                        </div>
                        <div class="SlideItMoo_element">

                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/gallery/02.jpg"  width="160" height="120" alt="product 2" /></a>
                        </div>
                        <div class="SlideItMoo_element">

                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/gallery/03.jpg" width="160" height="120" alt="product 3" /></a>
                        </div>
                        <div class="SlideItMoo_element">

                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/gallery/04.jpg" width="160" height="120" alt="product 4" /></a>
                        </div>
                        <div class="SlideItMoo_element">

                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/gallery/05.jpg" width="160" height="120" alt="product 5" /></a>
                        </div>
                        <div class="SlideItMoo_element">

                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/gallery/06.jpg" width="160" height="120" alt="product 6" /></a>
                        </div>
                        <div class="SlideItMoo_element">

                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/gallery/07.jpg" width="160" height="120" alt="product 7" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cleaner"></div>
        </div>
        <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
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
            <h3>Categories</h3>
            <ul class="sidebar_menu">
                <li><a href="#">Aenean et dolor diam</a></li>
                <li><a href="#">Aenean pulvinar</a></li>
                <li><a href="#">Cras bibendum auctor</a></li>
                <li><a href="#">Donec sodales bibendum</a></li>
                <li><a href="#">Etiam in tellus</a></li>
                <li><a href="#">Hendrerit justo</a></li>
                <li><a href="#">Integer interdum</a></li>
                <li><a href="#">Maecenas a diam</a></li>
                <li><a href="#">Nullam in semper</a></li>
                <li><a href="#">Posuere in commodo</a></li>
                <li><a href="#">Tincidunt leo</a></li>
                <li><a href="#">Vestibulum blandit</a></li>
            </ul>
            <h3>Newsletter</h3>
            <p>Praesent aliquam mi id tellus pretium pulvinar in vel ligula.</p>
            <div id="newsletter">
                <form action="#" method="get">
                    <input type="text" value="Subscribe" name="email_newsletter" id="email_newsletter" title="email_newsletter" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                    <input type="submit" name="subscribe" value="Subscribe" alt="Subscribe" id="subscribebtn" title="Subscribe" class="subscribebtn"  />
                </form>
                <div class="cleaner"></div>
            </div>
        </div> <!-- END of sidebar -->

        <div id="content">
            <div class="col col_14 product_gallery">
                <a href="productdetail.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/product/01.jpg" width="160" height="120" alt="Product 01" /></a>
                <h3>Ut eu feugiat</h3>
                <p class="product_price">$ 100</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>
            <div class="col col_14 product_gallery">
                <a href="productdetail.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/product/02.jpg" width="160" height="120" alt="Product 02" /></a>
                <h3>Curabitur et turpis</h3>
                <p class="product_price">$ 200</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>
            <div class="col col_14 product_gallery no_margin_right">
                <a href="productdetail.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/product/03.jpg" width="160" height="120" alt="Product 03" /></a>
                <h3>Mauris consectetur</h3>
                <p class="product_price">$ 120</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>
            <div class="col col_14 product_gallery">
                <a href="productdetail.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/product/04.jpg" width="160" height="120" alt="Product 04" /></a>
                <h3>Proin volutpat</h3>
                <p class="product_price">$ 260</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>
            <div class="col col_14 product_gallery">
                <a href="productdetail.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/product/05.jpg" width="160" height="120" alt="Product 05" /></a>
                <h3>Aenean tempus</h3>
                <p class="product_price">$ 80</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>
            <div class="col col_14 product_gallery no_margin_right">
                <a href="productdetail.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/product/06.jpg" width="160" height="120" alt="Product 06" /></a>
                <h3>Nulla luctus urna</h3>
                <p class="product_price">$ 193</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>
            <div class="col col_14 product_gallery">
                <a href="productdetail.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/product/07.jpg" width="160" height="120" alt="Product 07" /></a>
                <h3>Pellentesque egestas</h3>
                <p class="product_price">$ 30</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>
            <div class="col col_14 product_gallery">
                <a href="productdetail.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/product/08.jpg" width="160" height="120" alt="Product 08" /></a>
                <h3>Suspendisse porttitor</h3>
                <p class="product_price">$ 220</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>
            <div class="col col_14 product_gallery no_margin_right">
                <a href="productdetail.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/product/09.jpg" width="160" height="120" alt="Product 09" /></a>
                <h3>Nam vehicula</h3>
                <p class="product_price">$ 65</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->