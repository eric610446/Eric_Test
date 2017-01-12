<?php
require "main.php";

$tpl->assign("title","Make your own Template") ;
$tpl->assign("content","
	This is a simple Template DEMO.<br/>
	Show you how to compile, display, assign ...<br/>
	Make a Template to a .php file and execute it.<br/>
	Help you to understand how PHP Template works.
	") ;
$tpl->display("index.html") ;
?>