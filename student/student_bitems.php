<?php
session_start();
include("connect.php");
$sid = $_SESSION[ 'customer_user' ];
$sql = "select * from bitems where status = '开启'";
$result = mysql_query( $sql, $conn )or die( '查不到' );
//$sql = "select * from certificate";
//$result = mysql_query( $sql, $conn )or die( '查不到' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>报名查询</title>
	<link rel="stylesheet" href="Style/style.css">
</head>

<body>
	<?php
	include( "header.php" );
	?>
	<div class="main-content">
		<form name="form1" method="post">
			<div class="content">
			<div class="content-name">
					<h2>报名查询</h2>
				</div>
				<table  class="table" width="1000" cellspacing="0" cellpadding="0" align="center">
					<tr>
						<td >科目编号</td>
						<td >科目名称</td>
						<td >等级</td>
						<td >开始时间</td>
						<td >结束时间</td>
					</tr>
					<?php 
	    while($row=mysql_fetch_array($result)){
	?>
					<tr>
					
						<td>
							<?php echo stripslashes($row['cid']);?>
						</td>
						<td>
							<?php echo stripslashes($row['cname']);?>
						</td>
						<td>
							<?php echo stripslashes($row['ccredit']); ?>
						</td>
						<td>
							<?php echo stripslashes($row['start_time']); ?>
						</td>
						<td>
							<?php echo stripslashes($row['finish_time']); ?>
						</td>
					</tr>
					<?php
					}
					//$result->free();
					//$db->close();
					?>
				</table>
				<p style="height: 40px"></p>
				<div><p style="color: yellow;font-weight: bold;font-size: 18px">注意：请在报名期间登录你的教务系统进行报名，并在报名后到年级办公室进行缴费<p></div>
			</div>
		</form>
		
	</div>
	<?php
	include( "footer.php" );
	?>
</body>

</html>