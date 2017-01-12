<?
//定義 library 的名稱
$GLOBALS['library_name'] = "\library\\" ;

//定義 Smarty library 的位置
$GLOBALS['Smarty_lib'] = __DIR__.$GLOBALS['library_name']."Smarty\Smarty.class.php" ;
// 定義四個基本目錄的名稱
$GLOBALS['template_dir'] = "templates" ;
$GLOBALS['compile_dir'] = "templates_c" ;
$GLOBALS['config_dir'] = "config" ;
$GLOBALS['cache_dir'] = "cache" ;
?>