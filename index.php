<?php
require "main.php";

// 初始化，設定 title 與 css
$tpl -> assign( "title", "Smarty 測試" ) ;
$tpl -> assign( "style_dir", "css\default.css" ) ;

// 建立一個生命物件
$life1 = new Life("lion") ;
// 將物件 assign 
$tpl -> assign( "life1", $life1 ) ;

//assign 其餘的內容
$content = array( 
	0=>"Smarty Test - assign object"
	) ;
$tpl -> assign( "content", $content ) ;

// 顯示 index.html
$tpl -> display( 'index.html' ) ;

?>