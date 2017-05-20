<?php
// Page分页函数 
$page = $_GET["page"];
$sid = $_GET[ 'sid' ] ;
$sname = $_GET[ 'sname' ];
$sschool = $_GET[ 'school' ];
$sdept = $_GET[ 'sdept' ];
$sclass = $_GET[ 'sclass'];
$cdate = $_GET[ 'cdate' ];
function Page($rows,$page_size){
	$address=$_SERVER["QUERY_STRING"];
global $page,$select_from,$select_limit,$pagenav; 
$page_count = ceil($rows/$page_size); 
if($page <= 1 || $page == '') $page = 1; 
if($page >= $page_count) $page = $page_count; 
$select_limit = $page_size; 
$select_from = ($page - 1) * $page_size.','; 
$pre_page = ($page == 1)? 1 : $page - 1; 
$next_page= ($page == $page_count)? $page_count : $page + 1 ; 
$pagenav .= "第 $page/$page_count 页 共 $rows 条记录 "; 
$pagenav .= '<a href=?'.$address.'&page=1>首页</a>'; 
$pagenav .= '<a href=?'.$address.'&page='.$pre_page.'>前一页</a> '; 
$pagenav .= '<a href=?'.$address.'&page='.$next_page.'>后一页</a> '; 
$pagenav .= '<a href=?'.$address.'&page='.$page_coun.'>末页</a>'; 
 

} // Page分页函数 
?>