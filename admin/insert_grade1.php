<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>录入学生的成绩</title>
	<link rel="stylesheet" href="Style/style.css">
</head>

<body>
	<?php
	include( "header.php" );
	?>
	<div class="main-content">
		<form action="insert_grade.php" method="post">
			<div class="content">
				<div class="content-name">
					<h2>录入学生的成绩</h2>
				</div>
				<table width="431" height="255" border="0" align="center">
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
						<td>课目编号：</td>
						<td><input type="text" name="cid"/>
						</td>
					</tr>
					<tr>
						<td>科目名称：</td>
						<td><input type="text" name="cname"/>
						</td>
					</tr>
					<tr>
						<td>分数：</td>
						<td><input type="text" name="sgrade"/>
						</td>
					</tr>
					<tr>
						<td>考试日期：</td>
						<td><input type="text" name="cdate"/>
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