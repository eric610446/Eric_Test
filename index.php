<?php
require "main.php";



$tpl -> assign( "title", "Smarty 測試" ) ;
$tpl -> assign( "content", "Hello World！ 歡迎" ) ;
$tpl -> assign( "style_dir", "css\default.css" ) ;

$color_block = array( 
	array( "#111", "#333", "#555", "#777", "#999", "#bbb", "#ddd", "#fff" ),
	array( "#fff", "#ddd", "#bbb", "#999", "#777", "#555", "#333", "#111" ),
	) ;
$tpl -> assign( "color_block", $color_block ) ;

$content = array( "Smarty test", "color block" ) ;
$tpl -> assign( "content", $content ) ;



$tpl -> display( 'index.html' ) ;

?>