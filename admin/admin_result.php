<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>查询学生的信息</title>
	<link href="Style/style.css" rel="stylesheet" type="text/css"/>
</head>
<script language="javascript">
	function tosubmit1() {
		document.form1.action = "search_grade.php";
		documenr.form1.submit();
	}

	function tosubmit2() {
		document.form1.action = "search_student.php";
		document.form1.submit();
	}

	function tosubmit3() {
		document.form1.action = "average_grade.php";
		document.form1.submit();
	}

	function tosubmit4() {
		document.form1.action = "max_min_grade.php";
		document.form1.submit();
	}

	function tosubmit5() {
		document.form1.action = "search_lowgrade.php";
		document.form1.submit();
	}
</script>

<body>
	<?php
	include( "header.php" )
	?>

	<div class="main-content">
		<form name="form1" method="post">
			<div class="content">
				<div class="content-name">
					<h2>查询学生成绩</h2>
				</div>
				<table width="521" height="109" border="0" align="center">
					<tr>
						<td width="89">身份证号：</td>
						<td width="422">
							<input type="text" name="sid"/> </td>
					</tr>
					
					<tr>
						<td>查询条件：</td>
						<td>
							<input name="submit1" type="submit" value="成绩" onclick="tosubmit1()"/>
							<input name="submit2" type="submit" value="学生信息" onclick="tosubmit2()"/>
							<input name="submit3" type="submit" value="平均成绩" onclick="tosubmit3()"/>
							<input name="submit5" type="submit" value="不及格成绩" onclick="tosubmit5()"/>
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