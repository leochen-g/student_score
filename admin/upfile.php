<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>导入学生信息</title>
	<link rel="stylesheet" href="Style/style.css">
</head>

<body>
	<?php
	include( "header.php" )
	?>
	<div class="main-content">
		<form name="form2" method="post" enctype="multipart/form-data" action="./PHPExcl/upload_excel.php">
			<input type="hidden" name="leadExcel" value="true">
			<div class="content">
				<div class="content-name">
					<h2>导入学生信息</h2>
				</div>
				<table align="center" width="90%" border="0">
					<tr>
						<td>
							<input type="file" name="inputExcel">
							<input type="submit" name="import" value="导入基本信息">
							<input type="submit" name="import" value="导入成绩">
							<input type="submit" name="import" value="导入证书">
						</td>
					</tr>
				</table>
			</div>
		</form>
	</div>
	<?php
	include( "footer.php" )
	?>
</body>

</html>