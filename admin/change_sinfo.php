<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<?php
$sid = $_SESSION['deletesid'];
include("connect.php");
$sql = "delete from student where sid = '".$sid."'";
$result = mysql_query($sql,$conn)or die('查不到');
$url = "insert_sinfo1.php";
echo "<script type='text/javascript'>"."location.href='".$url."'"."</script>";
?>
<body>
<h1>删除结果</h1>
</body>
</html>
