<?
// 引用主要的 smarty 資訊
require "main.php" ;

// 設定變數的內容，這些變數將會在 templates 中對應到 html 檔案裡的變數
// 建立 Smarty 的變數 title 與 content
$smarty->assign("title", "First Smarty Program");
$smarty->assign("content", "Hello World");

//選擇要顯示的框架 
$smarty->display('index.html');

?>