<?php
require "main.php";



$tpl->assign("title", "Smarty 測試");
$tpl->assign("content", "Hello World！");



$tpl->display('index.html');

?>