<?php

session_start();
$sid = $_SESSION[ 'customer_user' ];
include("connect.php");
$sql = "select * from grade where sid = '" . $sid . "'";
$result = mysql_query( $sql, $conn )or die( '查不到' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>学生成绩管理系统</title>
	<link rel="stylesheet" href="Style/style.css">
</head>

<body>
	<div class="header">
		<div class="banner">
			<div id="logo">
				<a>
                    <img src="pic/logo_school.png" alt="" width="210" height="48" />
            </a>
				<div class="title">
					<h2>合肥师范学院计算机等级考试成绩查询系统</h2>
				</div>
			</div>
		</div>
		<div class="stu-menu">
			<ul>
				<li><a href="#"><span class="STYLE4">欢迎您：</span>
					<font color=red>
						<?php 
	$sql1 = "select * from student where sid = '".$sid."'";
    $result1 = mysql_query($sql1,$conn)or die('查不到');
	$row = mysql_fetch_array($result1);
	echo $row[1] ;
	?>
					</font>
					<font color="red">
						<?PHP
						date_default_timezone_set( "PRC" );
						echo date( "Y.m.d" );
						?>
					</font>
					</a>
				</li>
				<li><a href="changpwd1.php">修改密码</a>
				</li>
				<li><a href="../index.php">安全退出</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="main-content">
	<form name="form1" method="post">
	<div class="content">
	<table width="431" height="280" border="0" align="center">
		<tr>
			<td >课程号</td>
			<td >科目</td>
			<td >分数</td>
		</tr>
		<?php 
	   while($row=mysql_fetch_array($result)){
	?>
		<tr>
			<td >
				<?php echo stripslashes($row['cid']);?>
			</td>
			<td >
				<?php echo stripslashes($row['cname']);?>
			</td>
			<td >
				<?php echo stripslashes($row['sgrade']); ?>
			</td>
		</tr>
		<?php
		}
		?>
		</table>
		</div>
	</form>
	</div>
	<?php 
	include("footer.php");
	?>
</body>

</html>