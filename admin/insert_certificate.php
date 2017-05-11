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
$estate = $_POST['estate'];
$enum = $_POST[ 'enum' ];
$etype = $_POST[ 'etype' ];
if(!$sid || !$sname ||!$cid ||!$cname || !$estate || !$enum || !$etype)
{
echo "<script> alert('请输入完整！');</script>";
echo "<script> window.location='insert_certificate1.php';</script>";
	exit;
}

$sid = addslashes($sid);
$sname = addslashes($sname);
$cid = addslashes($cid);
$cname = addslashes($cname);
$estate = addslashes($estate);
$enum = addslashes($enum);
$etype = addslashes($etype);

include("connect.php");
		$sql = "insert into certificate values('".$sid."','".$sname."','".$cid."','".$cname."','".$estate."','".$enum."','".$etype."')";

$result = mysql_query($sql,$conn);

//@ $db = new mysqli("localhost","customer","password","sgrademangement");

//$query = "insert into grade values('".$sid."','".$sname."','".$cid."','".$cname."','".$sgrade."')";
//$result = $db->query($query);
if($result)
{
echo "<script> alert('插入成功！');
window.location='insert_certificate1.php';
</script>";
}
else
{
echo "<script> alert('插入失败！'); window.location='insert_certificate1.php';</script>";
	
}
?>
</center>
</body>
</html>
