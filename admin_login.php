<?php
session_start();
$name = $_POST['name'];
$password = $_POST['password'];
if((!isset($name)) || (!isset($password)))
{echo $name;}
else
{
$conn = mysql_connect("localhost","root","root")or die('连接数据库失败');
$selected = mysql_select_db("studentscore",$conn)or die('没有此人');
$sql = "select * from admin where name = '".$name."' and password = '".$password."'";
$result = mysql_query($sql,$conn)or die('查不到');
$row = mysql_fetch_array($result);
$count = $row[0];
echo  $row[0];
if($count!="")
{
$url = "./admin/admin_result.php";
$_SESSION['admin_user'] = $name;
echo "<script type='text/javascript'>"."location.href='".$url."'"."</script>";
}
else 
{
echo "<script> alert('密码或用户名错误！');</script>";
echo "<script> history.go(-1);</script>";
}
}
?>