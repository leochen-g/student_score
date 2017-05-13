<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>录入新的学生</title>
	<link rel="stylesheet" href="Style/style.css">
</head>

<body>
	<?php
	include( "header.php" );
	?>
	<div class="main-content">
		<form action="insert_sinfo.php" method="post">
			<div class="content">
				<div class="content-name">
					<h2>录入新的学生</h2>
				</div>
				<table width="431" height="280" border="0" align="center">
					<tr>
						<td width="95">身份证号：</td>
						<td width="320"><input type="text" name="sid"/>
						</td>
					</tr>
					<tr>
						<td>姓名：</td>
						<td><input type="text" name="sname"/>
						</td>
					</tr>
					<tr>
						<td>年龄：</td>
						<td><input type="text" name="sage"/>
						</td>
					</tr>
					<tr>
						<td>性别：</td>
						<td>
							<select name="ssex">
								<option value="男">男</option>
								<option value="女">女</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>所在的系：</td>
						<td>
							<select name="school" id="typeId">
								<?php
								$conn = mysql_connect( "localhost:3306", "root", "root" )or die( '连接数据库失败' );
								$selected = mysql_select_db( "studentscore", $conn )or die( '连接数据库失败!!' );
								mysql_query( "SET NAMES 'gb2312'" );
								$sql = mysql_query( "select * from school" );
								$info = mysql_fetch_array( $sql );
								do {
									?>
								<option value="<?php echo $info['sschool'];?>">
									<?php echo $info['sschool'];  ?>
								</option>
								<?php }while($info=mysql_fetch_array($sql));?>
							</select>
						</td>
					</tr>
					<tr>
						<td>所在的专业：</td>
						<td>
							<select name="sdept">
								<?php
								$school = $_POST[ 'school' ];
								$sql1 = mysql_query( "select * from sdept" );
								$info1 = mysql_fetch_array( $sql1 );
								do {
									?>
								<option value="<?php echo $info1['sdept'];?>">
									<?php echo $info1['sdept'];?>
								</option>
								<?php }while($info1=mysql_fetch_array($sql1));?>
							</select>
						</td>
					</tr>
					<tr>
						<td>班级：</td>
						<td>
							<select name="sclass">
								<?php
								$sql2 = mysql_query( "select * from class" );
								$info2 = mysql_fetch_array( $sql2 );
								do {
									?>
								<option value="<?php echo $info2['sclass'];?>">
									<?php echo $info2['sclass'];?>
								</option>
								<?php }while($info2=mysql_fetch_array($sql2));?>
							</select>
						</td>
					</tr>
					<tr>
						<td><input type="submit" value="提交"/>
						</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</div>
		</form>
	</div>
	<?php
	include( "footer.php" );
	?>
</body>

</html>