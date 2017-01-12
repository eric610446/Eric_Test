<?php
require "main.php";



$tpl -> assign( "title", "Smarty 測試" ) ;
$tpl -> assign( "content", "Hello World！ 歡迎" ) ;
$tpl -> assign( "style_dir", "css\default.css" ) ;



$tpl -> display( 'index.html' ) ;

?>