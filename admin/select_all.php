<?php
session_start();
include("pagelist.php");
include("connect.php");

$rows = mysql_num_rows(mysql_query("select * from grade")); 
Page($rows,10);
$sql = "select * from grade limit $select_from $select_limit";
$rst = mysql_query($sql); 
//$result = mysql_query( $sql, $conn )or die( '查不到' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>查看全部学生信息</title>
	<link rel="stylesheet" href="Style/style.css">
</head>
<body>
	<?php
	include( "header.php" )
	?>
	<div class="main-content">
		<form name="form1" method="post">
			<div class="content">
				<div class="content-name">
					<h2>查看所有学生成绩</h2>
				</div>
				<table  class="table" width="1000" cellspacing="0" cellpadding="0" align="center">
					<tr>
						<td width="110" height="28">身份证号</td>
						<td width="100">姓名</td>
						<td width="40">科目编号</td>
						<td width="185">科目</td>
						<td width="50">等级</td>
						<td width="50">分数</td>
						<td width="80">考试日期</td>
						<td width="67">&nbsp;</td>
						<td width="66">&nbsp;</td>
					</tr>
					<?php 
	    while($row=mysql_fetch_array($rst)){
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
							<?php echo stripslashes($row['ccredit']);?>
						</td>
						<td>
							<?php echo stripslashes($row['sgrade']); ?>
						</td>
						<td>
							<?php echo stripslashes($row['cdate']); ?>
						</td>
						<td><a href="delete_grade.php?sid=<?php echo stripslashes($row['sid']);?>&&cid=<?php echo stripslashes($row['cid']);?>">删除</a>
						</td>
						<?php
						$_SESSION[ 'deletesid' ] = $row[ 'sid' ];
						$_SESSION[ 'changesname' ] = $row[ 'sname' ];
						$_SESSION[ 'changecid' ] = $row[ 'cid' ];
						$_SESSION[ 'changecname' ] = $row[ 'sname' ];
						$_SESSION[ 'changesgrade' ] = $row[ 'sgrade' ];
						?>
						<td>
						<a href="change_grade.php?sid=<?php echo stripslashes($row['sid']);?>&&cid=<?php echo stripslashes($row['cid']);?>">修改</a>
						
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
		<div class="nav"><?php echo $pagenav; ?></div>
	</div>
	<?php
	include( "footer.php" )
	?>
</body>

</html>