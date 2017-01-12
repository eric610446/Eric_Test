<?php
require "main.php";



$tpl -> assign( "title", "Smarty 測試" ) ;
$tpl -> assign( "content", "Hello World！ 歡迎" ) ;
$tpl -> assign( "style_dir", "css\default.css" ) ;

$content = array( 
	0=>"Hello World !",	
	1=>"It's a Smarty test of assign array.",	
	2=>"Test success !"	
	) ;
$tpl -> assign( "content", $content ) ;


$tpl -> display( 'index.html' ) ;

?>