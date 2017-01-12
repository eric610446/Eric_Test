<?

include("main.php") ;

$smarty->assign("index_style", "default") ;
$smarty->assign("title", "人事資料管理系統") ;
$smarty->assign("header", "人事資料管理系統") ;
$smarty->assign("footer", "替代役男 蔡秉霖：eric610446@gmail.com") ;

$smarty->display("index.html") ;

?>