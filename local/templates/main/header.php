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
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "COMPONENT_TEMPLATE" => ".default",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
            )
        );?>
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