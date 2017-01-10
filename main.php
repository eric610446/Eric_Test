<?
include("var.php") ;
// 加入 Smarty lib
include($GLOBALS['Smarty_lib']) ;

// 定義一個 smarty 物件
$smarty = new Smarty() ;
// 定義四個基本目錄的名稱
$smarty->template_dir = $GLOBALS['template_dir'] ;
$smarty->compile_dir  = $GLOBALS['compile_dir'] ;
$smarty->config_dir   = $GLOBALS['config_dir'] ;
$smarty->cache_dir    = $GLOBALS['cache_dir'] ;

?>