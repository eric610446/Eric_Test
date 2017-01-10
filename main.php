<?

// 引用變數設定
include "var.php" ;
// 引用 smarty
include "library/Smarty/Smarty.class.php";


/* 建立 smarty 物件 tpl，定義 tpl 在 smarty 運行後，各個用途的檔案存放的目錄
	template_dir = 尋找 html 的目錄
*/
$smarty = new Smarty();
// 取得 main.php 所在的目錄，並且將 \ 改成 /，定義為 'APP_PATH'
define('APP_PATH', str_replace('\\', '/', dirname(__FILE__)));
// 使用 smarty 物件定義四個基本目錄的位置
$smarty->template_dir = APP_PATH . $GLOBALS['smarty_template_dir'] ;
$smarty->compile_dir = APP_PATH . $GLOBALS['smarty_compile_dir'] ;
$smarty->config_dir = APP_PATH . $GLOBALS['smarty_config_dir'] ;
$smarty->cache_dir = APP_PATH . $GLOBALS['smarty_cache_dir'] ;
?>