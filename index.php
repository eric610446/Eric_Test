<?

include("main.php") ;

$smarty->assign("title", "New Hello World") ;
$smarty->assign("content", "Hello New World！") ;
$smarty->assign("index_style", "default") ;

$smarty->display("index.html") ;

?>