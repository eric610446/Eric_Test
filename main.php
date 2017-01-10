<?
// 引用 smarty
include "library/Smarty/Smarty.class.php";

// 取得 main.php 所在的目錄，並且將 \ 改成 /，定義為 'APP_PATH'
define('APP_PATH', str_replace('\\', '/', dirname(__FILE__)));

/* 建立 smarty 物件 tpl，定義 tpl 在 smarty 運行後，各個用途的檔案存放的目錄
	template_dir = 尋找 html 的目錄
*/
$tpl = new Smarty();

$tpl->template_dir = APP_PATH . "/templates/";
$tpl->compile_dir = APP_PATH . "/templates_c/";
$tpl->config_dir = APP_PATH . "/configs/";
$tpl->cache_dir = APP_PATH . "/cache/";
?>