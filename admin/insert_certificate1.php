<?php
session_start();
include("connect.php");
$sql = "select * from certificate";
$result = mysql_query( $sql, $conn )or die( '查不到' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>证书状态管理</title>
	<link rel="stylesheet" href="Style/style.css">
</head>

<body>
	<?php
	include( "header.php" );
	?>
	<div class="main-content">
		<form action="insert_certificate.php" method="post">
			<div class="content">
				<div class="content-name">
					<h2>证书状态管理</h2>
				</div>
				<table width="900" height="50px" border="0" cellspacing="5" align="center" style="table-layout: fixed;">
				   <tr>
				   	<td >身份证号：</td>
				   	<td >姓名：</td>
				   	<td >课目编号：</td>
				   	<td >科目名称：</td>
				   	<td >状态：</td>
				   	<td >邮件编号：</td>
				   	<td >邮件类型：</td>
				   </tr>
					<tr>
						<td ><input style="width: 120px" type="text" name="sid"/></td>
						<td><input style="width: 120px" type="text" name="sname"/></td>
						<td><input style="width: 120px" type="text" name="cid"/></td>
						<td><input style="width: 120px"type="text" name="cname"/></td>
						<td><input style="width: 120px" type="text" name="estate"/></td>
						<td><input style="width: 120px" type="text" name="enum"/></td>
						<td><input style="width: 120px" type="text" name="etype"/></td>
					</tr>
					<tr>
						<td><input type="submit" value="添加"/>
						</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</div>
		</form>
		<form name="form1" method="post">
			<div class="content">
				<table  width="900" height="50px" border="1" cellspacing="5" align="center" style="table-layout: fixed;">
					<tr>
						<td  height="28" style="width: 200px">身份证号</td>
						<td >姓名</td>
						<td >科目编号</td>
						<td >科目名称</td>
						<td >状态</td>
						<td >邮件编号</td>
						<td >邮件类型</td>
					</tr>
					<?php 
	    while($row=mysql_fetch_array($result)){
	?>
					<tr>
						<td>
							<?php echo stripslashes($row['sid']);?>
						</td>
						<td>
							<?php echo stripslashes($row['sname']);?>
						</td>
						<td>
							<?php echo stripslashes($row['cid']);?>
						</td>
						<td>
							<?php echo stripslashes($row['cname']);?>
						</td>
						<td>
							<?php echo stripslashes($row['estate']); ?>
						</td>
						<td>
							<?php echo stripslashes($row['enum']); ?>
						</td>
						<td>
							<?php echo stripslashes($row['etype']); ?>
						</td>
					</tr>
					<?php
					}
					//$result->free();
					//$db->close();
					?>
				</table>
			</div>
		</form>
	</div>
	<?php
	include( "footer.php" );
	?>
</body>

</html>