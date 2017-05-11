<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>
<body>
<center>
<?php
$sid = $_POST['sid'];
$sname = $_POST['sname'];
$cid = $_POST['cid'];
$cname = $_POST['cname'];
$sgrade = $_POST['sgrade'];
$cdate = $_POST[ 'cdate' ];
if(!$sid || !$sname ||!$cid ||!$cname || !$sgrade || !$cdate)
{
echo "<script> alert('请输入完整！');</script>";
	echo "<script> window.location='insert_grade1.php';</script>";
	exit;

}

$sid = addslashes($sid);
$sname = addslashes($sname);
$cid = addslashes($cid);
$cname = addslashes($cname);
$sgrade = addslashes($sgrade);
$cdate = addslashes($cdate);	
include("connect.php");
	if($sid){
		$sql = "update  grade set sgrade='".$sgrade."' where sid = '".$sid."' and cid = '".$cid."' ";
	}else{
		$sql = "insert into grade values('".$sid."','".$sname."','".$cid."','".$cname."','".$sgrade."','".$cdat."')";
	}

$result = mysql_query($sql,$conn);

//@ $db = new mysqli("localhost","customer","password","sgrademangement");

//$query = "insert into grade values('".$sid."','".$sname."','".$cid."','".$cname."','".$sgrade."')";
//$result = $db->query($query);
if($result)
{
echo "<script> alert('插入成功！');
window.location='select_all.php';
</script>";
}
else
{
echo "<script> alert('插入失败！'); window.location='insert_grade1.php';</script>";
	
}
?>
</center>
</body>
</html>
