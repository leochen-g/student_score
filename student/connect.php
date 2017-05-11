<?php
	$conn = mysql_connect("localhost","root","root")or die('连接数据库失败');
    $selected = mysql_select_db("studentscore",$conn)or die('没有此人');
	mysql_query("set names gb2312");
?>