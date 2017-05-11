<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>
<body>
<center>
<h1>课表录入结果</h1>
<?php
$cid = $_POST['cid'];
$cname = $_POST['cname'];
$ccredit = $_POST['ccredit'];
if(!$cid || !$cname ||!$ccredit)
{
echo "请输入完整";
exit;
}

$cid = addslashes($cid);
$cname = addslashes($cname);
$ccredit = addslashes($ccredit);

include("connect.php");
$sql ="insert into course values('".$cid."','".$cname."','".$ccredit."')";
$result = mysql_query($sql,$conn)or die('查不到');


if($result)
{
echo "<script> alert('插入成功！');</script>";
echo "<script> window.location='insert_course1.php';</script>";
}
else
{
echo "插入失败";
}
?>
</center>
</body>
</html>
