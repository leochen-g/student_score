<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>查询学生的信息</title>
	<link href="Style/style.css" rel="stylesheet" type="text/css"/>
</head>
<script language="javascript">
	function tosubmit1() {
		document.form1.action = "search_grade.php?page=1";
		documenr.form1.submit();
	}

	function tosubmit2() {
		document.form1.action = "search_student.php";
		document.form1.submit();
	}
</script>

<body>
	<?php
	include( "header.php" )
	?>

	<div class="main-content">
		<form name="form1" method="get">
			<div class="content">
				<div class="content-name">
					<h2>查询学生成绩</h2>
				</div>
				<table width="1000"  border="0" align="center">
				
					<tr>
						<td >身份证号：</td>
						<td >姓名：</td>
						<td >学院：</td>
						<td >专业：</td>
						<td >班级：</td>
						<td >考试批次：</td>
					</tr>
					<tr>
						<td >
							<input type="text" name="sid"/> 
						</td>
						<td >
							<input type="text" name="sname"/> 
						</td>
						<td>
							<select name="school" id="typeId">
								<option value=""></option>
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
						<td>
							<select name="sdept">
							<option value=""> </option>
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
						<td>
							<select name="sclass">
							<option value=""> </option>
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
						<td>
							<select name="cdate">
							    <option value=""> </option>
								<option value="201603">201603</option>
								<option value="201609">201609</option>
								<option value="201612">201612</option>
								<option value="201703">201703</option>
								<option value="201709">201709</option>
								<option value="201712">201712</option>
							</select>
						</td>
					</tr>
					<tr>
						<td> <h2>查询内容：</h2></td>
						<td>
							<input name="submit1" type="submit" value="成绩" onclick="tosubmit1()"/>
							<input name="submit2" type="submit" value="学生信息" onclick="tosubmit2()"/>
							
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